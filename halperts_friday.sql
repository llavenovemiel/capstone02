-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2018 at 07:22 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `halperts`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Bikes'),
(2, 'Accessories'),
(3, 'Parts'),
(4, 'Trial');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `brand` varchar(15) NOT NULL,
  `description` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `brand`, `description`, `category_id`, `image`) VALUES
(1, 'M3L', '9800', 'Dahon', 'Classic', 1, 'm3l.png'),
(2, 'M6RA', '18000', 'Brompton', 'Best value bike', 1, 'm6r.png'),
(3, 'Curl I8', '96600', 'Dahon', 'Three-point folder', 1, 'curl_i8.png'),
(4, 'Visc SL', '78400', 'Dahon', 'Star performer', 1, 'visc_sl.png'),
(5, 'M6RB', '31600', 'Brompton', 'Fully loaded explorer', 1, 'm6r_2.png'),
(6, 'P1L', '68000', 'Brompton', 'Everyday commute', 1, 'p1l.png'),
(7, '9 streets M6L', '92000', 'Brompton', 'Limited Edition', 1, '9stm6l.png'),
(8, 'Nickel M2L', '140000', 'Brompton', 'Superlight', 1, 'nickel_m2l.png'),
(9, 'Verge X20', '132335', 'Tern', 'Human-powered flight', 1, 'verge_x20.jpg'),
(10, 'Verge X18', '96600', 'Tern', 'Blue streak', 1, 'verge_x18.jpg'),
(11, 'Boardwalk', '15600', 'Dahon', 'Classic', 1, 'boardwalk.png'),
(12, 'Speed D7', '23500', 'Dahon', 'The speed', 1, 'speed_d7.png'),
(13, 'Mariner D8', '33800', 'Dahon', 'A frequent winner', 1, 'mariner_D8.png'),
(14, 'Jifo Uno', '33800', 'Dahon', 'Speedy and sturdy', 1, 'jifo_uno.png'),
(15, 'Vitesse I7 Coffee', '41800', 'Dahon', 'Exceptional performance', 1, 'vitesse.png'),
(16, 'EEZZ D3', '46500', 'Dahon', 'Easy speedy', 1, 'eezz_d3.png'),
(17, 'Curl I3', '81300', 'Dahon', 'Most compact folding-bike', 1, 'curl_i3.png'),
(18, 'MU LT10', '120200', 'Dahon', 'Super premium performance', 1, 'mu_lt.png'),
(20, 'Carry Bag', '3500', 'Dahon', 'This practical bag allows you to carry your Dahon on your back.', 2, 'backpack_carrybag.png'),
(21, 'Body Bag', '7000', 'Dahon', 'Body bag for your Dahon.', 2, 'body_bag.jpg'),
(22, 'Front Reflector', '350', 'Brompton', 'Front reflector with bracket assembly', 2, 'front_reflector.jpg'),
(23, 'Cateye Volt400 Front Batt', '3400', 'Brompton', 'Upgrade your Brompton\'s lighting with this powerful light.', 2, 'cateye.jpg'),
(24, 'Rear Reflector', '470', 'Rear Reflector', 'Rear Reflector with bracket assembly', 2, 'rear_reflector.jpg'),
(25, 'Luggage Truss', '1850', 'Tern', 'Luggage truss for your tern bike', 2, 'luggage_truss.jpg'),
(26, 'Cargo Rack', '2195', 'Tern', 'Heavy-duty rear-rack', 2, 'cargo_rack.jpg'),
(27, 'Dry Bag', '1360', 'Tern', 'The BioLogic Bike Mount Dry Bag provides full waterproof protection for large-size smartphones.', 2, 'dry_bag.jpg'),
(28, 'Reflective T-shirt', '1100', 'Tern', 'A basic 100% cotton t-shirt with a special reflective coating on the screen printing.', 2, 'tshirt.jpg'),
(29, 'Rear Mudguard Flap', '250', 'Brompton', 'Replacement rear mudguard flap', 3, 'rear_mudguard_flap.jpg'),
(30, 'Front Mudguard Flap', '300', 'Brompton', 'Replacement front mudguard flap', 3, 'front_mudguard_flap.jpg'),
(31, 'Rear Mudguard Blade ', '580', 'Brompton', 'Standard rear mudguard for your Brompton', 3, 'mudguard_blade.jpg'),
(32, 'Standard Front Wheel Radi', '3000', 'Brompton', 'Standard front wheel with radial lacing and including fixings', 3, 'standard_front_wheel_radial.jpg'),
(34, 'Rear Wheel', '8000', 'Brompton', 'Standard rear wheel with radial lacing and including fixings', 3, 'rear_wheel.jpg'),
(35, 'Tyre 35-349 SM', '2000', 'Brompton', 'The toughest and most resilient tyre.', 3, 'tyre_r.jpg'),
(36, 'Porter and Saddle', '2150', 'Tern', 'The underside of the saddle functions as a comfortable shoulder pad. ', 3, 'porter_saddle.jpg'),
(37, 'Kinetix Wheels', '8800', 'Tern', 'Hand-built straight pull wheels', 3, 'kinetix.jpg'),
(38, 'Mainstay Chain Guide', '465', 'Mainstay Chain ', 'The solution to chain drops', 2, 'chain_guide.jpg'),
(39, 'Dog', '0', 'Dog', 'Who is a good boy?', 4, 'vicious_dog_0.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `transaction_code` varchar(50) NOT NULL,
  `purchase_date` date NOT NULL,
  `total` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `payment_mode_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `transaction_code`, `purchase_date`, `total`, `status_id`, `payment_mode_id`) VALUES
(1, 8, '123456', '2018-12-03', 9500, 2, 1),
(2, 9, '453685431', '2018-12-14', 90000, 3, 1),
(3, 8, '55555', '2018-12-06', 15000, 3, 1),
(4, 8, '1234', '2018-12-12', 27800, 1, 1),
(5, 8, '1234', '2018-12-12', 27800, 1, 1),
(6, 8, '93232D-1544662548', '2018-12-13', 27800, 1, 1),
(7, 8, 'D3FAF4-1544662784', '2018-12-13', 124400, 1, 1),
(8, 8, 'D2A0F0-1544662843', '2018-12-13', 0, 1, 1),
(9, 8, 'DB4E41-1544662900', '2018-12-13', 27800, 1, 1),
(10, 8, 'A6277A-1544663145', '2018-12-13', 0, 1, 1),
(11, 8, '9A7537-1544663250', '2018-12-13', 0, 1, 1),
(13, 8, 'BA4220-1544667709', '2018-12-13', 11800, 1, 1),
(14, 8, '799E19-1544668985', '2018-12-13', 27800, 1, 1),
(15, 8, '73399A-1544669070', '2018-12-13', 9800, 1, 1),
(16, 8, 'F37A5B-1544669256', '2018-12-13', 9800, 1, 1),
(17, 8, '1F20DE-1544669396', '2018-12-13', 9800, 1, 1),
(18, 8, 'Halp_5c12035696b53', '2018-12-13', 10265, 1, 2),
(19, 8, 'Halp_5c120a81a9928', '2018-12-13', 2790, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `item_id`, `quantity`) VALUES
(1, 5, 1, 1),
(2, 5, 2, 1),
(3, 6, 1, 1),
(4, 6, 2, 1),
(5, 7, 1, 1),
(6, 7, 2, 1),
(7, 7, 3, 1),
(8, 9, 1, 1),
(9, 9, 2, 1),
(10, 11, 39, 3),
(11, 13, 35, 1),
(12, 13, 1, 1),
(13, 14, 1, 1),
(14, 14, 2, 1),
(15, 15, 1, 1),
(16, 16, 1, 1),
(17, 17, 1, 1),
(18, 19, 24, 2),
(19, 19, 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment_modes`
--

CREATE TABLE `payment_modes` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_modes`
--

INSERT INTO `payment_modes` (`id`, `name`) VALUES
(1, 'cod'),
(2, 'paypal');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`) VALUES
(1, 'pending'),
(2, 'completed'),
(3, 'cancelled');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(25) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `role_id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `first_name`, `last_name`, `role_id`, `address`) VALUES
(8, 'Novemiel', '$2y$10$2tI2aIAI/h3pN5YTja0HcOlbNp/P5zA5apR.cec7Ezc5NOaPvULnm', 'llavenovemiel@gmail.com', 'Vim', 'Llave', 2, 'Manila'),
(9, 'Bob', '$2y$10$hW0YrCq0G.9RVPrWWda1yuFytxY98jMSExiD5TUD2jF/ybZs6Kzem', 'bob@gmail.com', 'Bob', 'Doe', 2, 'QC'),
(10, 'Jim', '$2y$10$mJMvLe7E2GA.OAmY.3mhUOQYheBdjDiH99Mh/zijMvext2YYUH0JC', 'jim@gmail.com', 'James', 'Halpert', 1, 'Scranton , Pennsylvania');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `payment_mode_id` (`payment_mode_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `payment_modes`
--
ALTER TABLE `payment_modes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `payment_modes`
--
ALTER TABLE `payment_modes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`payment_mode_id`) REFERENCES `payment_modes` (`id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
