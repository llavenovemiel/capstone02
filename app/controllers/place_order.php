<?php 

// see files from elah for preceding code



//get all details of the order
$user_id = $_SESSION["user"]["id"];
$purchase_date = date("Y-m-d G:i:s");
$payment_mode_id = 1; //COD
$status_id = 1 //pending
$delivery_address = $_POST["addressLine"];
$transaction_code = generate_new_transaction_number();
$cart_total = 0;
foreach ($_SESSION["cart"] as $id => $qty) {
	$cart_total_query = "SELECT * FROM items WHERE id = $id";
	$result = mysqli_query($conn, $cart_total_query);
	$item_info = mysqli_fetch_assoc($result);
	$cart_total += $qty * $item_info["price"];
}

$sql_query = "INSERT INTO orders(user_id, transaction_code, purchase_date, total, status_id, payment_mode_id) VALUES ('$user_id', '$transaction_code', '$purchase_date', '$cart_total', '$payment_mode_id')";

$result = mysqli_query($conn, $sql_query);

//get the id of the newly created order
$new_order_id = mysqli_insert_id($conn); //retrieves the most recently created id

//inserts values to the order_items table using the $new_order_id
if($result) { //if order was created
	foreach($_SESSION["cart"] as $id => $qty) {
		// $sql_query = "SELECT * FROM items WHERE id = $id";
		// $result = mysqli_query($conn, $sql_query);
		// $item_info = mysqli_fetch_assoc($result);

		//create a new entry for order_items
		$sql = "INSERT INTO order_items(order_id, item_id, quantity) VALUES ('$new_order_id', '$id', '$qty')";
		$result = mysqli_query($conn, $sql);
	}

}

//clear the cart
$_SESSION["cart"] = [];
mysqli_close($conn);

// send email notification to customer
use PHPMailer\PHPMailer\PHPMailer; //sending emails
use PHPMailer\PHPMailer\Exception; //error checking

// import phpmailer classes into namespace

// loads composer's autoloader
require "../vendor/autoload.php";

$mail = new PHPMailer(true); //creates a new instance of phpmailer with the exceptions enabled

$staff_email = "halpertsbikeshop@gmail.com";
$customer_email = $_SESSION["user"]["email"];
$subject = "Subject";
$body = "<div style='text-transform:uppercase'><h3>Reference Number:".$transaction_code."</h3></div>"."<div>Ship to $delivery_adress</div>";

try {
	//Server settings
	// $mail->SMTPDebug = 4; //Enables verbose debug output
	$mail->isSMTP(); //Set mailer to use SMTP
	$mail->Host = "smtp.gmail.com"; //specifies the SMTP servers to use
	$mail->SMTPAuth = true; //enables SMTP authentication
	$mail->Username = $staff_email; //SMTP username
	$mail->Password = "Sharkboy17"; //SMTP password
	$mail->SMTPSecure = "tls"; //Enables TLS encryption, 'ssl' is also accepted
	$mail->Port = 587; //SMTP server's port to allow us to send mails
	
	// send and recipient
	$mail->setFrom($staff_email, "Alias"); //aliasing the sender
	$mail->setAddress($customer_email); //who the recipient will be

	// content
	$mail->isHTML(true);
	$mail->Subject = $subject;
	$mail->Body = $body;

	//sending the email
	$mail->send();
	$_SESSION["txn_number"] = $transaction_code;
	$_SESSION["address"] = $delivery_adress;
	header("Location: ../views/confirmation.php");
	
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: ", $mail->ErrorInfo;
}

 ?>