-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2024 at 08:17 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petconnect01`
--

-- --------------------------------------------------------

--
-- Table structure for table `adoption_details`
--

CREATE TABLE `adoption_details` (
  `pet_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adoption_details`
--

INSERT INTO `adoption_details` (`pet_id`, `ip_address`, `quantity`) VALUES
(1, '::1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(1, 'Dogs'),
(2, 'Cats'),
(3, 'Birds'),
(4, 'Rabbits'),
(5, 'Rodents'),
(6, 'Hamster'),
(7, 'Turtle'),
(8, 'snake');

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `pet_id` int(11) NOT NULL,
  `pet_title` varchar(100) NOT NULL,
  `pet_description` varchar(255) NOT NULL,
  `pet_keywords` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `pet_image` varchar(255) NOT NULL,
  `pet_fee` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`pet_id`, `pet_title`, `pet_description`, `pet_keywords`, `category_id`, `pet_image`, `pet_fee`, `date`, `status`) VALUES
(1, 'Mitthu', 'Hello my name is Mitthu. I also came with everyone when our mom passed.  I belonged to her dad. I’m looking for my forever home too.  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis veritatis quaerat esse ex', 'A Parrot--Adult . Male . Medium', 3, 'mittu.jpeg', '30000', '2024-03-30 15:04:13', 'true'),
(2, 'Mint', 'Hi, my name is MINT and I would love to meet you.Lorem ipsum dolor, sit amet consectetur  adipisicing elit. Tempora adipisci repellat tempore et neque, eveniet hic modi fuga,  molestiae eligendi saepe sint.', 'Chinchilla--Adult . Male . Medium', 5, 'mint.jpeg', ' 5000', '2024-03-30 15:05:56', 'true'),
(3, 'Kenna', 'Hello i m Kenna a dog waiting for my pawrents to adopt me i will be happy to get adopted by  you kind hearts. Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum consectetur doloremque  doloribus aut, quod.', 'Affenpinscher Mix--Young . Female . Large Vaccinations up to date, spayed / neutered  ', 1, 'kenna.jpeg', '3000', '2024-03-30 15:06:58', 'true'),
(4, 'Simba', 'A playfull cat', 'A Cat--healthy.vacinated', 2, 'catwhite.jpg', '6000', '2024-03-30 15:07:43', 'true'),
(5, 'RAPHEL', 'A cute Turtle ', 'Turtle', 7, 'raph.jpeg', '6000', '2024-03-30 15:08:34', 'true'),
(6, 'Hira', 'Delightful Flemish Giant rabbit with a heart as big as her size. At 3 and a half years old,  Precious has embraced the indoor life as a house rabbit, showcasing her friendly and  attention-loving nature.', 'A Rabbit--Adult . Female . Medium.Spayed/neuterd', 4, 'rabbit2.jpeg', '3000', '2024-03-30 15:09:28', 'true'),
(7, 'Oggy', 'abcd', 'vacinated', 4, 'bunny.jpg', '1200', '2024-04-01 07:20:30', 'true'),
(8, 'Moti', 'abcd', 'cute and playful', 1, 'kenna.jpeg', '5000', '2024-04-04 08:49:27', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`full_name`, `email`, `password`) VALUES
('David Herbert', 'dherbert@gmail.com', '$2y$10$7ILb2zELsEKEyMfORJyOdepMamoyYGO62HdGa0gV8ttGesgbV08bu'),
('Daisy Doe', 'daisydoe@gmail.com', '$2y$10$qmZJnjsW0gl1UNYHDUw3sukedWMk6SEdVUPr2jokcvwRv/49XxpjS'),
('admin', 'admin@gmail.com', '$2y$10$GBbBw1QYcx6s.C6WW.7zgO/Y2Zw284.eS.4radzkz7Kdu9/TBfN.m');

-- --------------------------------------------------------

--
-- Table structure for table `user_pets`
--

CREATE TABLE `user_pets` (
  `adopted_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ammount_due` int(255) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `total_pet` int(255) NOT NULL,
  `adopted_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `adopted_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_queries`
--

CREATE TABLE `user_queries` (
  `query_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_queries`
--

INSERT INTO `user_queries` (`query_id`, `name`, `email`, `subject`, `message`, `date`) VALUES
(1, 'Danny Doe', 'dannyd@gmail.com', 'testing data insertion', 'ssss', '2024-03-10 12:32:00'),
(2, 'david', 'david@gmail.com', 'testing data insertion', 'sss', '2024-03-10 12:40:33'),
(3, 'Amron Shah', 'amronshah@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proide', '2024-03-16 07:27:09'),
(4, 'parth', 'parth@gmail.com', 'waawdw', 'werqrqwrqw', '2024-04-01 07:17:30'),
(5, 'parth', 'parth@gmail.com', 'waawdw', 'werqrqwrqw', '2024-04-01 07:20:37');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_mobile` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `username`, `user_email`, `user_password`, `user_ip`, `user_address`, `user_mobile`) VALUES
(1, 'david', ' davidd@gmail.com', ' $2y$10$Chj0qTSukETZViKO0rTg1eh0DLWwhAN6hOgyWTyj1Bg4Sh8TpBKLa', ' ::1', 'ranchi', 1234567890),
(2, 'amron', ' amron@gmail.com', ' $2y$10$bmsaW.iPexJc6DVxWKU5WuZ2z0km.m0BllMz2KnkiIBgdiCOnuA7y', ' ::1', 'Borivali', 111111111),
(3, 'parth', ' parth@gmail.com', ' $2y$10$CxK7MfPi2wySrhk0tfgNq.uniY5wLi9hBRdj7uba20qwr1yMvV0Ae', ' ::1', 'Andheri', 2147483647),
(4, 'Darsana', ' darsana@gmail.com', ' $2y$10$LiLaRmXoKfwx5.DHz33BA..qDCwTUr.MMS4eGe2IFnar0x/a4Z7.a', ' ::1', 'Malad', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adoption_details`
--
ALTER TABLE `adoption_details`
  ADD PRIMARY KEY (`pet_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`pet_id`);

--
-- Indexes for table `user_pets`
--
ALTER TABLE `user_pets`
  ADD PRIMARY KEY (`adopted_id`);

--
-- Indexes for table `user_queries`
--
ALTER TABLE `user_queries`
  ADD PRIMARY KEY (`query_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `pet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_pets`
--
ALTER TABLE `user_pets`
  MODIFY `adopted_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_queries`
--
ALTER TABLE `user_queries`
  MODIFY `query_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
