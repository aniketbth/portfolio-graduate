-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 17, 2024 at 01:27 PM
-- Server version: 8.0.35-0ubuntu0.22.04.1
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_graduate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_about`
--

CREATE TABLE `admin_about` (
  `id` int NOT NULL,
  `age` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `residence` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `skype` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `freelance` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `instagram_acc` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `facebook_acc` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `admin_img` varchar(250) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_about`
--

INSERT INTO `admin_about` (`id`, `age`, `residence`, `address`, `email`, `phone`, `skype`, `freelance`, `instagram_acc`, `facebook_acc`, `admin_img`) VALUES
(1, '56', 'jnbkhb', 'fadvad', 'czsfzb@gmail.com', '5667476', '567fgnvn', 'fghftjhf', 'fjjnyfj', 'fjgjhfuj', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `userssn` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `admin_pic` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(250) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `name`, `password`, `userssn`, `email`, `admin_pic`, `description`) VALUES
(1, 'Aniket Noel', '123', 'oIjvyz', 'Aniket@123', 'http://localhost/portfolio-graduate/#home../../uploaded_adminpic/IMG-20230615-WA0016.jpg', 'I am a Full Stack Developer specializing in the LAMP stack, with extensive expertise in front-end development using React. Open to learning and adapting to new technologies, I am an enthusiastic team player with a passion for tech innovation.'),
(2, 'Aniket Noel', '123', '59x7R6', 'Aniket@123', 'http://localhost/portfolio-graduate/#home../../uploaded_adminpic/IMG-20230615-WA0016.jpg', 'I am a Full Stack Developer specializing in the LAMP stack, with extensive expertise in front-end development using React. Open to learning and adapting to new technologies, I am an enthusiastic team player with a passion for tech innovation.'),
(3, 'Aniket Noel', '123', 'QVIpbt', 'Aniket@123', 'http://localhost/portfolio-graduate/uploaded_adminpic/IMG-20230615-WA0016.jpg', 'I am a Full Stack Developer specializing in the LAMP stack, with extensive expertise in front-end development using React. Open to learning and adapting to new technologies, I am an enthusiastic team player with a passion for tech innovation.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_about`
--
ALTER TABLE `admin_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_about`
--
ALTER TABLE `admin_about`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
