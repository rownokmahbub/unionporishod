-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 01, 2023 at 05:47 AM
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
-- Database: `up`
--

-- --------------------------------------------------------

--
-- Table structure for table `khobor`
--

CREATE TABLE `khobor` (
  `id` int(11) NOT NULL,
  `khobor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khobor`
--

INSERT INTO `khobor` (`id`, `khobor`) VALUES
(1, 'khobor hobe joss');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `activity` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `email`, `activity`, `time`) VALUES
(20, 'rownok2001@gmail.com', 'Wrong Email or Password', '2023-05-27 04:23:03'),
(21, 'rownok2001@gmail.com', 'Log Out', '2023-05-27 04:38:28'),
(22, 'rownok2001@gmail.com', 'Log Out', '2023-05-27 05:42:46'),
(23, 'rownok2001@gmail.com', 'Log Out', '2023-05-27 06:10:18'),
(24, 'rownok2001@gmail.com', 'Log Out', '2023-05-27 06:37:35'),
(25, 'rownok2001@gmail.com', 'Log Out', '2023-05-27 06:46:14'),
(26, 'rownok2001@gmail.com', 'Log Out', '2023-05-27 06:52:45'),
(27, 'rownok2001@gmail.com', 'Log Out', '2023-05-27 06:23:10'),
(28, '', 'Log Out', '2023-05-27 07:37:56'),
(29, '', 'Log Out', '2023-05-27 07:38:12'),
(30, 'rownok2001@gmail.com', 'Log Out', '2023-05-27 07:38:30'),
(31, 'rownok@gmail.com', 'Log Out', '2023-05-27 07:46:57'),
(32, 'rownok@gmail.com', 'Log Out', '2023-05-27 07:49:31'),
(33, 'rownok@gmail.com', 'Log Out', '2023-05-27 07:50:01'),
(34, 'rownok2001@gmail.com', 'Log Out', '2023-05-27 07:58:31'),
(35, 'rownok2001@gmail.com', 'Log Out', '2023-05-27 07:31:34'),
(36, 'rownok2001@gmail.com', 'Log Out', '2023-05-27 07:32:22'),
(37, 'rownok@gmail.com', 'Log Out', '2023-05-27 07:32:56'),
(38, 'rownok2001@gmail.com', 'Log Out', '2023-05-27 11:44:30'),
(39, 'rownok2001@gmail.com', 'Log Out', '2023-06-22 12:19:29'),
(40, 'rownok2001@gmail.com', 'Log Out', '2023-06-25 02:36:55'),
(41, 'rownok2001@gmail.com', 'Log Out', '2023-06-25 02:44:19'),
(42, 'rownok2001@gmail.com', 'Log Out', '2023-06-25 05:23:04'),
(43, 'rownok2001@gmail.com', 'Log Out', '2023-06-25 06:08:39'),
(44, 'rownok2001@gmail.com', 'Log Out', '2023-06-25 06:10:02'),
(45, 'rownok2001@gmail.com', 'Log Out', '2023-06-25 06:13:41'),
(46, 'rownok2001@gmail.com', 'Log Out', '2023-06-25 06:14:39'),
(47, 'rownok2001@gmail.com', 'Log Out', '2023-06-25 06:30:05'),
(48, 'rownok2001@gmail.com', 'Log Out', '2023-06-25 06:37:24'),
(49, 'rownok2001@gmail.com', 'Log Out', '2023-06-25 06:44:04'),
(50, 'rownok2001@gmail.com', 'Log Out', '2023-06-25 06:54:58'),
(51, 'rownok2001@gmail.com', 'Log Out', '2023-06-25 08:16:07'),
(52, 'rownok2001@gmail.com', 'Log Out', '2023-06-25 08:28:24'),
(53, 'rownok2001@gmail.com', 'Log Out', '2023-06-25 08:41:16'),
(54, 'rownok2001@gmail.com', 'Log Out', '2023-06-25 11:40:40'),
(55, 'rownok2001@gmail.com', 'Log Out', '2023-06-25 11:43:31'),
(56, 'rownok2001@gmail.com', 'Log Out', '2023-06-25 14:34:01'),
(57, 'rownok2001@gmail.com', 'Log Out', '2023-06-25 14:39:22'),
(58, 'rownok2001@gmail.com', 'Log Out', '2023-06-25 15:10:14'),
(59, 'rownok2001@gmail.com', 'Log Out', '2023-06-26 02:29:42'),
(60, 'rownok2001@gmail.com', 'Log Out', '2023-06-26 02:43:43'),
(61, 'rownok2001@gmail.com', 'Log Out', '2023-06-27 06:08:32'),
(62, 'rownok2001@gmail.com', 'Log Out', '2023-06-27 12:41:28'),
(63, 'rownok2001@gmail.com', 'Log Out', '2023-06-27 12:55:05'),
(64, 'rownok2001@gmail.com', 'Log Out', '2023-06-28 14:09:50'),
(65, 'rownok2001@gmail.com', 'Log Out', '2023-06-28 14:26:11');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `notice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `notice`) VALUES
(1, 'akhane apni apner notice add korun');

-- --------------------------------------------------------

--
-- Table structure for table `porishodborgo`
--

CREATE TABLE `porishodborgo` (
  `id` int(11) NOT NULL,
  `borgotype` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `protisthan`
--

CREATE TABLE `protisthan` (
  `id` int(11) NOT NULL,
  `protisthan` varchar(255) NOT NULL,
  `protisthandhoron` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `protisthan`
--

INSERT INTO `protisthan` (`id`, `protisthan`, `protisthandhoron`) VALUES
(2, 'fagifgasbkfgairuf kajrbjf jskj li ', 'হাটবাজার');

-- --------------------------------------------------------

--
-- Table structure for table `seba`
--

CREATE TABLE `seba` (
  `id` int(11) NOT NULL,
  `seba` varchar(255) NOT NULL,
  `sebardhoron` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seba`
--

INSERT INTO `seba` (`id`, `seba`, `sebardhoron`) VALUES
(1, 'seba add korse akhane', 'সেবা মূল্য সমূহ');

-- --------------------------------------------------------

--
-- Table structure for table `shikkha`
--

CREATE TABLE `shikkha` (
  `id` int(11) NOT NULL,
  `shikkha` varchar(255) NOT NULL,
  `sshikkhardhoron` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shikkha`
--

INSERT INTO `shikkha` (`id`, `shikkha`, `sshikkhardhoron`) VALUES
(4, 'this is the test of shikkha', 'মাদ্রাসা'),
(5, '1', 'প্রাথমিক বিদ্যালয়');

-- --------------------------------------------------------

--
-- Table structure for table `subuser`
--

CREATE TABLE `subuser` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subuser`
--

INSERT INTO `subuser` (`id`, `email`, `password`) VALUES
(1, 'rownok2001@gmail.com', '1234'),
(3, 'mahsin.ali4@gmail.com', '12345'),
(4, 'rakha@gmail.com', '1234'),
(7, 'reya@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tadeentry`
--

CREATE TABLE `tadeentry` (
  `licence_no` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father_husband` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `word` varchar(255) NOT NULL,
  `voterid` varchar(255) NOT NULL,
  `kor` varchar(255) NOT NULL,
  `messars` varchar(255) NOT NULL,
  `babshardhoron` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tadeentry`
--

INSERT INTO `tadeentry` (`licence_no`, `name`, `father_husband`, `mother_name`, `word`, `voterid`, `kor`, `messars`, `babshardhoron`) VALUES
(1001, 'Emon', 'dfdf', 'rakha', '১', '3435687435843', '34', 'chuadanga', 'sodor'),
(1002, 'rownokmahbub', 'mahsin', 'rakha', '৪', '3435687435843', '234', 'chuadanga', 'barishal'),
(1003, 'reya', 'najmul', 'jannatul', '১', '3435687435841', '35', 'chuadanga', 'doulutdiar');

-- --------------------------------------------------------

--
-- Table structure for table `taxentry`
--

CREATE TABLE `taxentry` (
  `holdingno` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fatherhusband` varchar(255) NOT NULL,
  `gram` varchar(255) NOT NULL,
  `ward` varchar(255) NOT NULL,
  `totaltax` varchar(255) NOT NULL,
  `voterid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taxentry`
--

INSERT INTO `taxentry` (`holdingno`, `name`, `fatherhusband`, `gram`, `ward`, `totaltax`, `voterid`) VALUES
(10023, 'rownokmahbub', 'mahsin', 'রোয়াকুলি', '১', '234', '2147483647'),
(10024, 'Emon', 'mahsin', 'দক্ষিণ গোবিন্দপুর', '৬', '345', '2147483647'),
(10025, 'rownokmahbub', 'mahsin', 'জেহালা', '১', '234', '016532234456'),
(10027, 'emon', 'ramdnbf', 'রোয়াকুলি', '৫', '34', '344534324324543545');

-- --------------------------------------------------------

--
-- Table structure for table `unionporiciti`
--

CREATE TABLE `unionporiciti` (
  `id` int(11) NOT NULL,
  `poriciti` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `unionporiciti`
--

INSERT INTO `unionporiciti` (`id`, `poriciti`) VALUES
(3, 'gtjgsgjsjkgnksd'),
(4, 'thisis the nortice test goes here');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` int(10) DEFAULT NULL,
  `block` varchar(50) DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `user_type`, `block`) VALUES
(2, 'rownok2001@gmail.com', '1234', 2, 'no'),
(3, 'mali191072@bscse.uiu.ac.bd', '1234', 1, 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `khobor`
--
ALTER TABLE `khobor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `porishodborgo`
--
ALTER TABLE `porishodborgo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `protisthan`
--
ALTER TABLE `protisthan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seba`
--
ALTER TABLE `seba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shikkha`
--
ALTER TABLE `shikkha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subuser`
--
ALTER TABLE `subuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tadeentry`
--
ALTER TABLE `tadeentry`
  ADD PRIMARY KEY (`licence_no`);

--
-- Indexes for table `taxentry`
--
ALTER TABLE `taxentry`
  ADD PRIMARY KEY (`holdingno`);

--
-- Indexes for table `unionporiciti`
--
ALTER TABLE `unionporiciti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `khobor`
--
ALTER TABLE `khobor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `porishodborgo`
--
ALTER TABLE `porishodborgo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `protisthan`
--
ALTER TABLE `protisthan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shikkha`
--
ALTER TABLE `shikkha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subuser`
--
ALTER TABLE `subuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `unionporiciti`
--
ALTER TABLE `unionporiciti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
