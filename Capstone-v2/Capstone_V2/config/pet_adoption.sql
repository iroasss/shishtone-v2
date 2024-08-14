-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2024 at 03:15 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet_adoption`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `re_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `role`, `password`, `re_password`) VALUES
(1, 'Admin', 'Admin', '$2y$10$lpRSccHFLLTR0vUfiDU7pO7od9EbafVVR9hw3p/AdblWB0YvJ3E36', '');

-- --------------------------------------------------------

--
-- Table structure for table `pet_list`
--

CREATE TABLE `pet_list` (
  `id` int(11) NOT NULL,
  `pet_name` varchar(150) NOT NULL,
  `pet_age` int(10) NOT NULL,
  `pet_species` varchar(150) NOT NULL,
  `pet_breed` varchar(150) NOT NULL,
  `pet_color` varchar(150) NOT NULL,
  `distinctive` text NOT NULL,
  `medical_history` text NOT NULL,
  `pet_description` text NOT NULL,
  `location` text NOT NULL,
  `pet_image` varchar(255) NOT NULL,
  `pet_images` text DEFAULT NULL,
  `is_archived` tinyint(1) NOT NULL,
  `archived_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pet_list`
--

INSERT INTO `pet_list` (`id`, `pet_name`, `pet_age`, `pet_species`, `pet_breed`, `pet_color`, `distinctive`, `medical_history`, `pet_description`, `location`, `pet_image`, `pet_images`, `is_archived`, `archived_date`) VALUES
(1, 'Shadow', 3, 'Domestic  Shorthair Cat', 'non', 'Black with a   few white patches', 'Missing part of the left   ear, possibly due to a   past injury or ear tipping', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do\r\neiusmod tempor incididunt ut labore et dolore magna aliqua. Ut\r\nenim ad minim veniam, quis nostrud exercitation ullamco laboris\r\nnisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do\r\neiusmod tempor incididunt ut labore et dolore magna aliqua. Ut\r\nenim ad minim veniam, quis nostrud exercitation ullamco laboris\r\nnisi ut aliquip ex ea commodo consequat.', '', '', NULL, 0, NULL),
(2, 'Oreo', 2, 'hulaan mo', 'hehe', 'di ko din alam', 'ewan tignan mo na lng ', 'tsk ', 'dsf', '', '', NULL, 0, NULL),
(3, 'ashes', 2, 'Dog', 'ds', 'sd', 'fs', 'sd', 'f', '', '', '[]', 0, NULL),
(4, 'sds', 2, 'sad', 'asd', 'asd', 'fsad', 'asfagsdgh', 'asdfghasd', '', '', '[]', 0, NULL),
(5, 'af', 2, 'safasfg', 'a', 'a', 'g', 'ffs', 'ff', '', '', '[]', 0, NULL),
(6, 'sad', 1, 'asd', 'hahh', 'seg', 'hahah', 'hahassd', 'gah', 'sss', '', '[]', 1, '2024-08-14 18:42:47'),
(7, 'asd', 2, 'asdasd', 'asd', 'asd', 'g', 'sdg', 'sdg', 'sdgsdgsdgsg', '', '[]', 1, '2024-08-14 18:43:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pet_list`
--
ALTER TABLE `pet_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pet_list`
--
ALTER TABLE `pet_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
