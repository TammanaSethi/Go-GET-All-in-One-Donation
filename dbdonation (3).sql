-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2025 at 05:01 PM
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
-- Database: `dbdonation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com\r\ntest', ''),
(2, 'admin@gmail.com', ''),
(3, 'test', ''),
(4, 'admin@gmail.com', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `admin_news`
--

CREATE TABLE `admin_news` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `curdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_news`
--

INSERT INTO `admin_news` (`id`, `title`, `pic`, `description`, `curdate`) VALUES
(4, 'Toys for children', 'toys.jpg', 'Donating toys for children is a wonderful way to bring joy . happiness to those in need, fostering a sense of community and compassion. Your contributions can make  happiness.', '2025-07-09'),
(5, 'Food for all', 'half-cooked.jpg', 'Providing food for all involves a multifaceted approach that includes sustainable agricultural practices, equitable distribution systems, and innovative technologies to increase crop yields .', '2025-07-09'),
(7, 'Education for all', 'cause-2.jpg.webp', 'Education for children is crucial as it lays the foundation for their overall development, shaping their intellectual, social, and emotional growth. It equips them with essential knowledge.', '2025-07-09'),
(8, 'Dance and Music', 'welcome.jpg.webp', 'In donation initiatives, integrating dance and music can infuse energy and creativity, enhancing engagement and encouraging generosity. Live performances, whether by local bands or dance.', '2025-07-05'),
(9, 'Being a volunteer', 'donate.jpg', 'Volunteering for donation efforts is a powerful way to contribute to the well-being of others and make a positive impact in your community. Whether it\'s lending a hand.', '2025-07-09'),
(12, 'Bring water', 'water.jpg', 'Providing access to clean water for children is crucial for their health, development, and well-being. Safe drinking water helps prevent waterborne diseases, supports proper nutrition.', '2025-07-09');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `curdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `curdate`) VALUES
(3, 'tammana', 'tammanasethi1035@gmail.com', 'hello', '2025-07-25'),
(4, 'tammana', 'tammanasethi1035@gmail.com', 'hello', '2025-08-01'),
(6, 'krish', 'ar1034krish@gmail.com', 'Hello plzz contact us', '2025-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `donar`
--

CREATE TABLE `donar` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` text NOT NULL,
  `curdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donar`
--

INSERT INTO `donar` (`id`, `name`, `email`, `password`, `mobile`, `city`, `address`, `pincode`, `curdate`) VALUES
(1, 'Prinka', 'Prinka@gmail.com', '1456', '8975676902', 'Gidderbaha', 'Gidderbaha', '152101', '2025-07-25'),
(6, 'Prab', 'prab21@gmail.com', '123', '0798676909', 'Malout', 'Malout', '152107', '2025-07-21'),
(7, 'Sukhdeep', 'donar1@gmail.com', '1234', '7198676902', 'kot bhai', 'Muktsar', '152100', '2025-07-22'),
(8, 'Happy', 'unknown@gmail.com', '123', '7973190754', 'Abhor', 'Abhor', '152102', '2025-07-28'),
(17, 'Tammana', 'donar@gmail.com', '1035', '7986769023', 'gidderbaha', 'gidderbaha', '152101', '2025-08-01'),
(18, 'krish', 'krish@gmail.com', '1234', '9569698195', 'Gidderbaha ', 'gidderbaha', '152101', '2025-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `donar_add_donation`
--

CREATE TABLE `donar_add_donation` (
  `id` int(11) NOT NULL,
  `itemname` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `quantity` varchar(500) NOT NULL,
  `landmark` varchar(100) NOT NULL,
  `city` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `mobile` text NOT NULL,
  `curdate` date NOT NULL,
  `picture` varchar(255) NOT NULL,
  `donar` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donar_add_donation`
--

INSERT INTO `donar_add_donation` (`id`, `itemname`, `description`, `quantity`, `landmark`, `city`, `address`, `pincode`, `mobile`, `curdate`, `picture`, `donar`, `status`) VALUES
(7, 'Notebooks', 'For Study', '100', 'Slum area', 'gidderbaha', 'gidderbaha', '152101', '07986769023', '2025-07-27', 'notebooks.jpg', 'donar@gmail.com', 'Pending'),
(8, 'Chapati', 'For Poor', '200', 'Slum area', 'bathinda', 'bathinda', '151001', '982387462', '2025-07-27', 'half-cooked.jpg', 'donar@gmail.com', 'Reject'),
(9, 'Toys', 'For kids', '60', 'Slum area', 'Malout', 'Malout', '151007', '982387469', '2025-07-27', 'toys.jpg', 'donar@gmail.com', 'Approval'),
(10, 'Chair', 'For students', '100', 'Gidderbaha', 'gidderbaha', 'gidderbaha', '152101', '07986769023', '2025-08-02', 'chair.jpg', 'donar@gmail.com', 'Approval'),
(11, 'Table', 'For kids', '200', 'Malout', 'Malout', 'Malout', '152101', '07986769023', '2025-08-02', 'table.jpg', 'donar@gmail.com', 'Approval');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `petname` varchar(100) NOT NULL,
  `bestfriendname` varchar(100) NOT NULL,
  `curdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `mobile`, `address`, `city`, `petname`, `bestfriendname`, `curdate`) VALUES
(3, 'Prinka', 'unknown@gmail.com', '123tannu', '8186769023', 'sirsa', 'gidderbaha', 'bird', 'Rupa', '2025-07-21'),
(4, 'Suman', 'Suman1035@gmail.com', '123', '7086769023', 'Bathinda', 'gidderbaha', 'dog', 'Happy', '2025-07-21'),
(6, 'Prab', 'Prab1035@gmail.com', '14667', '9098676902', 'Malout', 'gidderbaha', 'dog', 'Prab', '2025-07-25'),
(12, 'Tammana', 'user@gmail.com', '1035', '7986769023', 'gidderbaha', 'gidderbaha', 'dog', 'harleen', '2025-08-02');

-- --------------------------------------------------------

--
-- Table structure for table `user_feedback`
--

CREATE TABLE `user_feedback` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `feedback` varchar(200) NOT NULL,
  `curdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_feedback`
--

INSERT INTO `user_feedback` (`id`, `email`, `name`, `feedback`, `curdate`) VALUES
(1, 'user@gmail.com', 'unknown', 'Good', '2025-08-02'),
(3, 'donar@gmail.com', 'donar', 'excellent', '2025-08-02'),
(4, 'user@gmail.com', 'user', 'very good', '2025-08-02');

-- --------------------------------------------------------

--
-- Table structure for table `user_search_requests`
--

CREATE TABLE `user_search_requests` (
  `id` int(11) NOT NULL,
  `donation_id` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `curdate` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_search_requests`
--

INSERT INTO `user_search_requests` (`id`, `donation_id`, `mobile`, `name`, `curdate`, `status`, `email`) VALUES
(1, '6', '7986769023', 'unknown', '2025-08-02', 'Accept', 'user@gmail.com'),
(4, '9', '1209348756', 'donar', '2025-08-02', 'pending', 'user@gmail.com'),
(5, '10', '01209348756', 'donar', '2025-08-02', 'pending', 'user@gmail.com'),
(6, '11', '07986769078', 'unknown', '2025-08-03', 'Reject', 'user@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_news`
--
ALTER TABLE `admin_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donar`
--
ALTER TABLE `donar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donar_add_donation`
--
ALTER TABLE `donar_add_donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_feedback`
--
ALTER TABLE `user_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_search_requests`
--
ALTER TABLE `user_search_requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_news`
--
ALTER TABLE `admin_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `donar`
--
ALTER TABLE `donar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `donar_add_donation`
--
ALTER TABLE `donar_add_donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_feedback`
--
ALTER TABLE `user_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_search_requests`
--
ALTER TABLE `user_search_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
