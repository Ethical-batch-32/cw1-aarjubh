-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 02:04 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `talkdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `number` int(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `appointment_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`number`, `message`, `status`, `date`, `appointment_id`, `name`) VALUES
(1234567890, 'hi', 'pending', '2023-01-27', 10, 'name'),
(1234567890, 'Hi, I need online counseling for my teen son.', 'pending', '2023-01-27', 13, 'name'),
(1234567890, 'hi, i need online counseling for my teen kid!', 'accepted', '2023-01-30', 14, 'different3'),
(1234567890, 'ftgv', '', '2023-01-15', 15, 'hi'),
(2147483647, 'hi', '', '2023-01-26', 16, 'aname');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`, `id`, `user_type`) VALUES
('test1', 'test1@gmail.com', '16d7a4fca7442dda3ad93c9a726597e4', 11, 'admin'),
('Aname', 'aname@gmail.com', '$2y$10$dRr4HNKXHTuUFSEvyUSVm.TjELJ9lGcHhM8LTDQ4zjB3GYumX699y', 14, 'user'),
('Aarju Bhandari', 'aarju@gmail.com', '$2y$10$CqT37CJ08gooE/E73rYETe8XKtPQlNcaUr66GL...ZvlhwZWJbKIm', 15, 'user'),
('Bname', 'bname@gmail.com', '$2y$10$rKQLIk00ZHdJwjdzjRcNrOPBRFZzR4/i.gG/7hfcmTVM11F.NNWsa', 16, 'admin'),
('Cname', 'cname@gmail.com', '$2y$10$QYPQ1oBtuPvrZwaNZBb2ReN7SjCQHxjdHriRImDckWBWoW7YUrVr2', 27, 'user'),
('random', 'random@gmail.com', '$2y$10$.XTnWj5rVOQh8Zrg5kfhJudlW8a7cx0eVxKLhzuhmNI0OUoRHLKOe', 28, 'user'),
('ename', 'ename@gmail.com', '$2y$10$klCM5yJjUcpEzm1xdDGjSe.S/lWxLiwBgeLTI9n7ZaFH5H.Bu91eW', 29, 'user'),
('different', 'different@gmail.com', '$2y$10$CPTpSj4nwD7PwFRo5iuVP.HhPnuHXUwYMdua3lwjino5dNW8djnHi', 30, 'user'),
('different2', 'different2@gmail.com', '$2y$10$qo/N/YbRNwNlibYDsR/bPudEj1UMChp9yKsRQx3VdrLKy4585aHg6', 31, 'user'),
('different3', 'different3@gmail.com', '$2y$10$oUHnTzqSECaOwnPFSPLMzOiR7/zpxczhvUjR0ASLmj/IClhp01YUC', 32, 'user'),
('hi', 'hi@gmail.com', '$2y$10$/KFPhkPCBbovucDEEjEgxec6whrv3ADZlaN2Cm9byiCCkKmETVkma', 33, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `appointment_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
