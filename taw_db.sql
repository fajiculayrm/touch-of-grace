-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 20, 2022 at 02:26 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taw_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `disciples`
--

CREATE TABLE `disciples` (
  `id` int(11) NOT NULL,
  `firstname` text DEFAULT NULL,
  `lastname` text DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `date_started` date DEFAULT NULL,
  `contact_number` text DEFAULT NULL,
  `primary_id` int(11) DEFAULT NULL,
  `trainings_id` text DEFAULT NULL,
  `ministries_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ministries`
--

CREATE TABLE `ministries` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `members` text DEFAULT NULL,
  `request` text DEFAULT NULL,
  `head_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tranings`
--

CREATE TABLE `tranings` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `image_link` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` int(11) DEFAULT NULL,
  `token` text DEFAULT NULL,
  `isSecretary` int(11) NOT NULL DEFAULT 0,
  `profile_picture` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `hashed_password` text DEFAULT NULL,
  `firstname` text DEFAULT NULL,
  `lastname` text DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `contact_number` text DEFAULT NULL,
  `home_address` text DEFAULT NULL,
  `marital_status` text DEFAULT NULL,
  `work_information` text DEFAULT NULL,
  `school_information` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `token`, `isSecretary`, `profile_picture`, `email`, `hashed_password`, `firstname`, `lastname`, `age`, `birthday`, `gender`, `contact_number`, `home_address`, `marital_status`, `work_information`, `school_information`) VALUES
(1, 1, NULL, 1, NULL, 'admin@mail.com', '$2y$10$xeURRyh5zFpDNj6zpyAKIedfQ9dEYaODP2cyilDYmS/aR9TSGS8XK', 'admin', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disciples`
--
ALTER TABLE `disciples`
  ADD PRIMARY KEY (`id`),
  ADD KEY `primary_id` (`primary_id`);

--
-- Indexes for table `ministries`
--
ALTER TABLE `ministries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `head_id` (`head_id`);

--
-- Indexes for table `tranings`
--
ALTER TABLE `tranings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disciples`
--
ALTER TABLE `disciples`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ministries`
--
ALTER TABLE `ministries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tranings`
--
ALTER TABLE `tranings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `disciples`
--
ALTER TABLE `disciples`
  ADD CONSTRAINT `disciples_ibfk_1` FOREIGN KEY (`primary_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ministries`
--
ALTER TABLE `ministries`
  ADD CONSTRAINT `ministries_ibfk_1` FOREIGN KEY (`head_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
