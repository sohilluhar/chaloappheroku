-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 05, 2020 at 09:06 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chaloapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `type` text NOT NULL,
  `location` text NOT NULL,
  `date` text NOT NULL,
  `stime` text NOT NULL,
  `etime` text NOT NULL,
  `time_change` text NOT NULL,
  `nopeople` text NOT NULL,
  `note` text NOT NULL,
  `glat` text DEFAULT NULL,
  `glong` text DEFAULT NULL,
  `marker` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `userid`, `type`, `location`, `date`, `stime`, `etime`, `time_change`, `nopeople`, `note`, `glat`, `glong`, `marker`) VALUES
(9, 3, 'Beach', '', '2020-04-20', '11:00', '12:00 ', '0', '15 ', ' ', '19.09691649705337 ', '72.82654523849487 ', 'p in.png'),
(10, 3, 'Family Restaurant', 'Mumbai', '2020-04-12', '10:22', '11:22 ', '1', '12 ', ' ', '19.030800999590724 ', '72.84072875976562 ', 'pin.png ');

-- --------------------------------------------------------

--
-- Table structure for table `activity_request`
--

CREATE TABLE `activity_request` (
  `id` int(11) NOT NULL,
  `activity_requestid` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `status` text NOT NULL,
  `remark` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `mail` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `fname` text DEFAULT NULL,
  `lname` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `dob` text DEFAULT NULL,
  `age_hide` int(11) DEFAULT NULL,
  `contact` text DEFAULT NULL,
  `about` text DEFAULT NULL,
  `jobtitle` text DEFAULT NULL,
  `lang` text DEFAULT NULL,
  `country` text DEFAULT NULL,
  `state` text DEFAULT NULL,
  `city` text DEFAULT NULL,
  `facebook` text DEFAULT NULL,
  `linkedin` text DEFAULT NULL,
  `instagram` text DEFAULT NULL,
  `website` text DEFAULT NULL,
  `profileimage` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `mail`, `password`, `fname`, `lname`, `name`, `gender`, `dob`, `age_hide`, `contact`, `about`, `jobtitle`, `lang`, `country`, `state`, `city`, `facebook`, `linkedin`, `instagram`, `website`, `profileimage`) VALUES
(2, 'SKYASKY@GMAIL.COM', ' 123', NULL, NULL, ' SOHIL LUHAR', ' Male', '2016-02-11', 1, '9833771892', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'SKYASKY1@GMAIL.COM', 'a', 'SOHIL', 'LUHAR', ' LUHAR IBRAHIM', 'Male', '2020-04-01', 0, '8866306032', 'i am sohil', 'student', 'english', 'India', 'GUJARAT', 'BHUJ', 'fb.me/sohilluhar', 'link.me/sohil', 'instagram.me/sohil', 'sohil.luhar', 'upload/3-photo.jpg'),
(4, 'SKYASKYb@GMAIL.COM', ' 1', NULL, NULL, ' SOHIL LUHAR', ' Male', '1999-07-26', 0, '9833771892', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'sohil.luhar@somaiya.edu', ' 1', NULL, NULL, ' SOHIL LUHAR', ' Female', '2020-04-17', 1, '9833085347', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'saif@gmail.com', 'a', NULL, NULL, ' Saif Saif', ' Male', '1999-07-26', 0, '1234567890', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'a@gmail.com', 'a', NULL, NULL, ' abdul q', ' Male', '1999-11-26', 1, '1234567890', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'samad@gmail.com', 'a', 'samad', 'patel', ' samad patel', 'Choose...', '1999-02-21', 0, '1234567890', NULL, NULL, 'English', 'India', 'Maharashtra', 'MUMBAI', 'fb.com/samad', 'link.com/samad', 'instagram.com/samad', 'samad.me', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity_request`
--
ALTER TABLE `activity_request`
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
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `activity_request`
--
ALTER TABLE `activity_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
