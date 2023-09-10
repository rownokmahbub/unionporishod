-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 10, 2023 at 03:58 AM
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
-- Table structure for table `bidhobavata`
--

CREATE TABLE `bidhobavata` (
  `id` int(11) NOT NULL,
  `slno` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fatherhusband` varchar(255) NOT NULL,
  `mothername` varchar(255) NOT NULL,
  `gram` varchar(255) NOT NULL,
  `word` varchar(255) NOT NULL,
  `voterid` varchar(255) NOT NULL,
  `montobbo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `bidhobavata`
--

INSERT INTO `bidhobavata` (`id`, `slno`, `name`, `fatherhusband`, `mothername`, `gram`, `word`, `voterid`, `montobbo`) VALUES
(1, '1', 'rownok', 'mahsin ali', 'rakha', 'সোনাতনপুর', '৬', '34234534556', 'nai kono');

-- --------------------------------------------------------

--
-- Table structure for table `boyoskovata`
--

CREATE TABLE `boyoskovata` (
  `id` int(11) NOT NULL,
  `slno` varchar(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fatherhusband` varchar(255) NOT NULL,
  `mothername` varchar(255) NOT NULL,
  `gram` varchar(255) NOT NULL,
  `word` varchar(255) NOT NULL,
  `voterid` varchar(255) NOT NULL,
  `montobbo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `boyoskovata`
--

INSERT INTO `boyoskovata` (`id`, `slno`, `name`, `fatherhusband`, `mothername`, `gram`, `word`, `voterid`, `montobbo`) VALUES
(4, '1', 'rownok', 'mahsin ali', 'rakha', 'চাঁদপুর', '৪', '34234534556', 'fdfdf');

-- --------------------------------------------------------

--
-- Table structure for table `gram`
--

CREATE TABLE `gram` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `word` varchar(255) NOT NULL,
  `male` varchar(255) NOT NULL,
  `female` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gram`
--

INSERT INTO `gram` (`id`, `name`, `word`, `male`, `female`, `total`) VALUES
(2, 'rownok', '২', '23', '34', '12'),
(3, 'বড়শলুয়া', '৪', '23', '34', '123');

-- --------------------------------------------------------

--
-- Table structure for table `khobor`
--

CREATE TABLE `khobor` (
  `id` int(11) NOT NULL,
  `khobor` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khobor`
--

INSERT INTO `khobor` (`id`, `khobor`) VALUES
(7, '১. তিতুদহ ইউনিয়নে ৩নং ওয়ার্ড এর একজন গ্রাম-পুলিশ নিয়োগ দিয়া হবে।');

-- --------------------------------------------------------

--
-- Table structure for table `kormokortaborgo`
--

CREATE TABLE `kormokortaborgo` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `podobi` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kormokortaborgo`
--

INSERT INTO `kormokortaborgo` (`id`, `name`, `podobi`, `mobileno`, `filename`) VALUES
(2, 'মোঃ মহাসীন আলী', 'ইউপি সচিব', '০১৯৪০৫৩৮১৭৬', '1.jpg'),
(3, 'মোঃ রাজু আহমেদ', 'হিসাব সহকারী', '০১৭২২৩০৯২০৪', 'রাজু.png'),
(4, 'মোঃ তাজুল ইসলাম', 'উদ্যোক্তা', '০১৩১০৪৬০৪৩৭', 'তাজুল.png'),
(5, 'মোছাঃ মুন্নি খাতুন', 'উদ্যোক্তা', '০১৭৬৬৮৪২৪৫০', 'মুন্নি.png'),
(6, 'মোছাঃ ফাতেমা খাতুন', 'বিকল্প উদ্যোক্তা', '০১৭৯৭২৪৪০৯৪', 'ফাতেমা.jpg'),
(7, 'মোঃ সমজের আলী', 'দফাদার', '০১৭৬৩৪৯২৬৭৬', 'সমজের.jpg'),
(8, 'মোঃ রববেল হোসেন', 'গ্রাম পুলিশ', '০১৭৫২৮৯৩৪৪৫', 'রববেল.png'),
(9, 'মোঃ ইমরান মিয়া', 'গ্রাম পুলিশ', '০১৯০৮৯৫৪৬৫৪', 'ইমরান.jpg'),
(10, 'মোঃ রাশিদুল ইসলাম', 'গ্রাম পুলিশ', '০১৯০৮৯৫৪৬৫৪', 'ইমরান.jpg'),
(11, 'মোঃ পারভেজ হোসেন', 'গ্রাম পুলিশ', '০১৯২৯৯০৩৬৩৫', 'পারভেজ.jpg'),
(12, 'মোঃ বকুল হোসেন', 'গ্রাম পুলিশ', '০১৯২৯৯০৩৬৩৫', 'বকুল.png'),
(13, 'মোঃ হাসানুজ্জামান', 'গ্রাম পুলিশ', '০১৯৯০৮৮৩৪৪১', 'হাসান.png'),
(14, 'মোঃ আবু তালেব', 'গ্রাম পুলিশ', '০১৯৩৩১৫৮৯৮৬', 'তালেব.jpg'),
(15, 'মোঃ ইনামুল হক', 'গ্রাম পুলিশ', '০১৯৪০৬৭৬০৪৩', 'এনামুল.jpg'),
(16, 'মোঃ নাজমুল হুসাইন', 'গ্রাম পুলিশ', '০১৯৮১৯১৭২৮৫', 'নাজমুল.jpg');

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
(129, 'rownok2001@gmail.com', 'Log Out', '2023-07-28 10:54:02'),
(130, 'rownok2001@gmail.com', 'Log Out', '2023-07-28 10:56:14'),
(131, 'rownok2001@gmail.com', 'Log Out', '2023-07-28 13:44:18'),
(132, 'rownok2001@gmail.com', 'Log Out', '2023-07-28 13:58:39'),
(133, 'rownok2001@gmail.com', 'Log Out', '2023-07-28 14:08:48'),
(134, 'rownok2001@gmail.com', 'Log Out', '2023-07-28 14:46:15'),
(135, 'rownok2001@gmail.com', 'Log Out', '2023-07-29 01:09:04'),
(136, 'rownok2001@gmail.com', 'Log Out', '2023-07-29 01:46:00'),
(137, 'rownok2001@gmail.com', 'Log Out', '2023-07-29 03:21:33'),
(138, 'rownok2001@gmail.com', 'Log Out', '2023-07-29 04:36:43'),
(139, 'rownok2001@gmail.com', 'Log Out', '2023-07-29 04:37:04'),
(140, 'rownok2001@gmail.com', 'Log Out', '2023-07-29 04:45:25'),
(141, 'rownok2001@gmail.com', 'Log Out', '2023-08-03 04:04:12'),
(142, 'rowok2001@gmail.com', 'Log Out', '2023-09-08 14:13:37'),
(143, 'mahsinali4@gmail.com', 'Log Out', '2023-09-08 14:38:38'),
(144, 'rowok2001@gmail.com', 'Log Out', '2023-09-09 01:46:27'),
(145, 'mahsinali4@gmail.com', 'Log Out', '2023-09-09 01:47:26'),
(146, 'rowok2001@gmail.com', 'Log Out', '2023-09-09 03:46:24'),
(147, 'mahsinali4@gmail.com', 'Log Out', '2023-09-09 03:47:10'),
(148, 'rowok2001@gmail.com', 'Log Out', '2023-09-09 03:50:39'),
(149, 'mahsinali4@gmail.com', 'Log Out', '2023-09-10 01:12:19'),
(150, 'rowok2001@gmail.com', 'Log Out', '2023-09-10 01:48:19');

-- --------------------------------------------------------

--
-- Table structure for table `masisuvata`
--

CREATE TABLE `masisuvata` (
  `id` int(11) NOT NULL,
  `slno` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fatherhusband` varchar(255) NOT NULL,
  `mothername` varchar(255) NOT NULL,
  `gram` varchar(255) NOT NULL,
  `word` varchar(255) NOT NULL,
  `voterid` varchar(255) NOT NULL,
  `montobbo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `masisuvata`
--

INSERT INTO `masisuvata` (`id`, `slno`, `name`, `fatherhusband`, `mothername`, `gram`, `word`, `voterid`, `montobbo`) VALUES
(2, '1', 'rownok', 'mahsin ali', 'rakha', '৬২ নং আড়িয়া', '৪', '34234534556', 'fdfdf');

-- --------------------------------------------------------

--
-- Table structure for table `mouja`
--

CREATE TABLE `mouja` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `word` varchar(255) NOT NULL,
  `moujano` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mouja`
--

INSERT INTO `mouja` (`id`, `name`, `word`, `moujano`) VALUES
(2, 'amir', '1', '৪');

-- --------------------------------------------------------

--
-- Table structure for table `nagorik`
--

CREATE TABLE `nagorik` (
  `id` int(11) NOT NULL,
  `sarok` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fathername` varchar(255) NOT NULL,
  `mothername` varchar(255) NOT NULL,
  `husband` varchar(255) NOT NULL,
  `gram` varchar(255) NOT NULL,
  `word` varchar(255) NOT NULL,
  `birthno` varchar(255) NOT NULL,
  `voterid` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dakghor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `nagorik`
--

INSERT INTO `nagorik` (`id`, `sarok`, `name`, `fathername`, `mothername`, `husband`, `gram`, `word`, `birthno`, `voterid`, `mobileno`, `gender`, `dakghor`) VALUES
(3, '10002', 'rownok', 'rajjak', 'fgfgfg', '', 'নুরুল্লাপুর', '৫', '23324344', '34234534556', '01273483465', 'নারী', 'নুরুল্লাপুর'),
(4, '10004', 'rownok', 'mahsin ali', 'rakha', '', 'বড়শলুয়া', '৩', '23324344', '34234534556', '34453432432454', 'নারী', '৬৩ নং আড়িয়া'),
(5, '1005', 'rownok', 'mahsin ali', 'fgfgfg', '', '৬২ নং আড়িয়া', '৪', '23324344', '৩৩৪৫৫৩২৫৪৩', '34453432432454', 'নারী', 'তিতুদহ'),
(6, '1006', 'rownok', 'dfdfdsf', 'fgfdg', 'amirt', 'হুলিয়ামারী', '২', '34534543', '43543545435', '02345436565', 'পুরুষ', 'তিতুদহ');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `notice` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `notice`) VALUES
(2, '১. ৬নং তিতুদহ ইউনিয়নের ৩নং ওয়ার্ডে যে গ্রাম-পুলিশ নিয়োগ দেয়া হবে তার আবেদনের শেষ তারিখ ৩১-০৭-২০২৩।');

-- --------------------------------------------------------

--
-- Table structure for table `porishodborgo`
--

CREATE TABLE `porishodborgo` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `podobi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mobileno` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `filename` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `porishodborgo`
--

INSERT INTO `porishodborgo` (`id`, `name`, `podobi`, `mobileno`, `filename`) VALUES
(58, 'সামসুল আলম', 'সাধারন আসন-৪', '০১৯৯৬২৮৪৭০', '8.jpg'),
(56, 'মোঃ আহাদ আলী মল্লিক', 'সাধারন আসন-৩', '০১৭৩৮০২১৭৭৮', '7.jpg'),
(49, 'মোঃ শুকুর আলী', 'চেয়ারম্যান', '০১৭৩৬৫৭৮৯৭০', 'Chairman.png'),
(50, 'মোঃ মহাসীন আলী', 'ইউপি সচিব', '০১৯৪০৫৩৮১৭৬', 'mahsin.jpg'),
(51, 'মোছাঃ রওশনারা বেগম', 'সংরক্ষিত আসন-১', '০১৯২৫৫৯৯৭১৫', '2 2.jpg'),
(52, 'মোছাঃ চাম্পা বেগম', 'সংরক্ষিত আসন-২', '০১৯৬২৬৪৫৩২৮', '3 2.jpg'),
(53, 'মোছাঃ মুক্তিয়ারা বেগম', 'সংরক্ষিত আসন-৩', '০১৯১৬৬১৯০৩২', '4.jpg'),
(54, 'মোঃ মুকুল হোসেন', 'সাধারন আসন-১', '০১৩২১৪৮৭২৫৫', '5.jpg'),
(55, 'মোঃ জাহাঙ্গীর আলম', 'সাধারন আসন-২', '০১৯২০২৫৭৫৫২', '6.jpg'),
(59, 'মো কাছেদ আলী', 'সাধারন আসন-৫', '০১৯২৫৫৯৯৭১৫', '100.jpg'),
(60, 'মোঃ শমসের আলী', 'সাধারন আসন-৬', '০১৯১৫৭২৫৮৩৯', '99.jpg'),
(61, 'মোঃ রিপন আলী লস্কর', 'সাধারন আসন-৭', '০১৭১৯৭৬৬২৯৭', '111.jpg'),
(62, 'মোঃ তসলিমুজ্জামান', 'সাধারন আসন-৮', '০১৭১৬৮৮৭৫০৫', '121.jpg'),
(63, 'মোঃ কামাল উদ্দীন', 'সাধারন আসন-৯', '০১৯৮৫৮০৮৭৩০', '131.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `protibondhivata`
--

CREATE TABLE `protibondhivata` (
  `id` int(11) NOT NULL,
  `slno` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fatherhusband` varchar(255) NOT NULL,
  `mothername` varchar(255) NOT NULL,
  `gram` varchar(255) NOT NULL,
  `word` varchar(255) NOT NULL,
  `voterid` varchar(255) NOT NULL,
  `montobbo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `protibondhivata`
--

INSERT INTO `protibondhivata` (`id`, `slno`, `name`, `fatherhusband`, `mothername`, `gram`, `word`, `voterid`, `montobbo`) VALUES
(2, '1', 'rownok', 'ramdnbf', 'rakha', '৬২ নং আড়িয়া', '৬', '34234534556', 'fdfdf');

-- --------------------------------------------------------

--
-- Table structure for table `sebarmullo`
--

CREATE TABLE `sebarmullo` (
  `id` int(11) NOT NULL,
  `mullo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sebarmullo`
--

INSERT INTO `sebarmullo` (`id`, `mullo`) VALUES
(4, '১. ওয়ারেশ সনদপত্র ১০০ টাকা।'),
(5, '২. উত্তরাধিকারী সনদপ্রত ১০০ টাকা।'),
(6, '৩. নাগরিক সনদপত্র ২০ টাকা।'),
(7, '৪. চারিত্রিক সনদপত্র ৩০ টাকা।'),
(8, '৫. ট্রেডলােইসেন্স ফি ও কর ব্যাবসার ধরণ অনুযায়ী।'),
(9, '৬. জন্ম-মৃত্যু নিবন্ধন ফি সরকারী বিধি মোতাবেক।');

-- --------------------------------------------------------

--
-- Table structure for table `sebarsorto`
--

CREATE TABLE `sebarsorto` (
  `id` int(11) NOT NULL,
  `sorto` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sebarsorto`
--

INSERT INTO `sebarsorto` (`id`, `sorto`) VALUES
(2, '১.ট্রেডলাইসেন্স বাদে সকল সেবা গ্রহণের ক্ষেত্রে আবেদনকারীকে ইউনিয়নের স্থায়ী বাসিন্দা হতে হবে।'),
(3, '২. হাল নাগাদ ট্যাক্স পরিশোধ থাকতে হবে।'),
(4, '৩.ভোটার ও জন্মনিবন্ধন কার্ড সঙ্গে আনতে হবে।'),
(5, '৪.ওয়ারেশ সনদপত্র গ্রহণের ক্ষেত্রে আবদেন পত্রে সংশ্লিষ্ট সদস্যের সুপারিশ থাকতে হবে।');

-- --------------------------------------------------------

--
-- Table structure for table `shikkha`
--

CREATE TABLE `shikkha` (
  `id` int(11) NOT NULL,
  `college` varchar(255) NOT NULL,
  `maddhomik` varchar(255) NOT NULL,
  `nimo` varchar(255) NOT NULL,
  `prathomic` varchar(255) NOT NULL,
  `madracha` varchar(255) NOT NULL,
  `community` varchar(255) NOT NULL,
  `shikkharhar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shikkha`
--

INSERT INTO `shikkha` (`id`, `college`, `maddhomik`, `nimo`, `prathomic`, `madracha`, `community`, `shikkharhar`) VALUES
(9, '১', '৩', '০', '৭', '৩', '২', '৭৫%');

-- --------------------------------------------------------

--
-- Table structure for table `shikkhaprotisthan`
--

CREATE TABLE `shikkhaprotisthan` (
  `id` int(11) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `sdhoron` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `shikkhaprotisthan`
--

INSERT INTO `shikkhaprotisthan` (`id`, `sname`, `sdhoron`) VALUES
(6, 'বরসলুয়া নিউ মডেল ডিগ্রি', 'কলেজ'),
(7, 'তিতুদহ বেসরকারি মাধ্যমিক বিদ্যালয় ', 'মাধ্যমিক বিদ্যালয়'),
(9, 'oiajfioarjofjoasj', 'কলেজ');

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
  `id` int(11) NOT NULL,
  `licence_no` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father_husband` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `word` varchar(255) NOT NULL,
  `bplace` varchar(255) NOT NULL,
  `tradename` varchar(255) NOT NULL,
  `babshardhoron` varchar(255) NOT NULL,
  `kor` varchar(255) NOT NULL,
  `voterid` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  `upozela` varchar(255) NOT NULL,
  `zela` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tadeentry`
--

INSERT INTO `tadeentry` (`id`, `licence_no`, `name`, `father_husband`, `mother_name`, `word`, `bplace`, `tradename`, `babshardhoron`, `kor`, `voterid`, `mobileno`, `upozela`, `zela`) VALUES
(2, '1001', 'rownok', 'mahsin ali', 'rakha', '১', 'chuadanga', 'chuadangar', 'dokan', '443', '3423432454', '34453432432454', 'chuadangar', 'chuadanga '),
(4, '1006', 'rownok', 'mahsin ali', 'rakha', '৫', '৬২ নং আড়িয়া', 'chuadanga', 'dokan', '443', '3423432454', '01273483465', 'chuadanga ', 'chuadanga ');

-- --------------------------------------------------------

--
-- Table structure for table `taxentry`
--

CREATE TABLE `taxentry` (
  `id` int(11) NOT NULL,
  `holdingno` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fatherhusband` varchar(255) NOT NULL,
  `gram` varchar(255) NOT NULL,
  `ward` varchar(255) NOT NULL,
  `housetype` varchar(255) NOT NULL,
  `roomno` varchar(255) NOT NULL,
  `totaltax` varchar(255) NOT NULL,
  `voterid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `taxentry`
--

INSERT INTO `taxentry` (`id`, `holdingno`, `name`, `fatherhusband`, `gram`, `ward`, `housetype`, `roomno`, `totaltax`, `voterid`) VALUES
(5, '1002', 'rabeya', 'kamal', '৬২ নং আড়িয়া', '৪', 'paka', '2', '644', '34453432432454');

-- --------------------------------------------------------

--
-- Table structure for table `uniondetails`
--

CREATE TABLE `uniondetails` (
  `id` int(11) NOT NULL,
  `dakghor` varchar(255) NOT NULL,
  `gram` varchar(255) NOT NULL,
  `mouja` varchar(255) NOT NULL,
  `hatbazar` varchar(255) NOT NULL,
  `policecamp` varchar(255) NOT NULL,
  `enjio` varchar(255) NOT NULL,
  `vhumi` varchar(255) NOT NULL,
  `mosjid` varchar(255) NOT NULL,
  `koborsthan` varchar(255) NOT NULL,
  `edgah` varchar(255) NOT NULL,
  `mondir` varchar(255) NOT NULL,
  `sosan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uniondetails`
--

INSERT INTO `uniondetails` (`id`, `dakghor`, `gram`, `mouja`, `hatbazar`, `policecamp`, `enjio`, `vhumi`, `mosjid`, `koborsthan`, `edgah`, `mondir`, `sosan`) VALUES
(1, '১', '১১', '১০', '৩', '১', '১', '১', '৩২', '২০', '২৪', '২', '০');

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
(17, 'তিতুদহ ইউনিয়ন প্রায় ২০ বর্গ কিলোমিটার আয়তন বিশিষ্ট। এ ইউনিয়ন পরিষদটি তিতুদহ মৌজার ৭২ নং খতিয়ানের ১০৫৮ নং দাগে ৪৩ শতাংশ জমির উপর তিতুদহ ইউনিয়ন পরিষদ কমপ্লেক্স ভবন অবস্থিত। ইউনিয়নের জন সংখ্যা গত ২০১১ সালের আদম শুমারী অনুযায়ী পুরুষ ১০৪২৭ জন ও মহিলা ১০৫০০ জন '),
(18, 'ইউনিয়নে মোট ১১টি গ্রাম, ১০টি মৌজা রয়েছে। ইউনিয়ন পরিষদের পূর্বে গড়াইটুপি ইউনিয়ন, পশ্চিমে নিহালপুর ইউনিয়ন দক্ষিনে বেগমপুর ইউনিয়ন এবং উত্তরে কুতুবপুর, শংকরচন্দ্র ও পদ্মবিলা ইউনিয়ন পরিষদ। জেলা সদর থেকে এ ইউনিয়নটি ২০ কিলোমিটার দূরে অবস্থিত।');

-- --------------------------------------------------------

--
-- Table structure for table `upprotisthan`
--

CREATE TABLE `upprotisthan` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pdhoron` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `upprotisthan`
--

INSERT INTO `upprotisthan` (`id`, `name`, `pdhoron`) VALUES
(2, 'তিতুদহ বিশ্বাস পাড়া জামে মসজিদ ', 'ডাকঘর'),
(3, 'তিতুদহ বড় বাজার ', 'মসজিদ');

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
(4, 'mahsinali4@gmail.com', '123456', 2, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `vwb`
--

CREATE TABLE `vwb` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fatherhusband` varchar(255) NOT NULL,
  `gram` varchar(255) NOT NULL,
  `word` varchar(255) NOT NULL,
  `voterid` varchar(255) NOT NULL,
  `cokro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vwb`
--

INSERT INTO `vwb` (`id`, `name`, `fatherhusband`, `gram`, `word`, `voterid`, `cokro`) VALUES
(3, 'rownok', 'dfdfdsf', 'বড়শলুয়া', '৩', '3432423424', '2023-24');

-- --------------------------------------------------------

--
-- Table structure for table `wares`
--

CREATE TABLE `wares` (
  `id` int(11) NOT NULL,
  `sarok` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fathername` varchar(255) NOT NULL,
  `mothername` varchar(255) NOT NULL,
  `gram` varchar(255) NOT NULL,
  `word` varchar(255) NOT NULL,
  `deathno` varchar(255) NOT NULL,
  `voterid` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  `aname` varchar(255) NOT NULL,
  `w1` varchar(255) DEFAULT NULL,
  `w2` varchar(255) DEFAULT NULL,
  `w3` varchar(255) DEFAULT NULL,
  `w4` varchar(255) DEFAULT NULL,
  `w5` varchar(255) DEFAULT NULL,
  `w6` varchar(255) DEFAULT NULL,
  `w7` varchar(255) DEFAULT NULL,
  `w8` varchar(255) DEFAULT NULL,
  `w9` varchar(255) DEFAULT NULL,
  `w10` varchar(255) DEFAULT NULL,
  `w11` varchar(255) DEFAULT NULL,
  `w12` varchar(255) DEFAULT NULL,
  `w13` varchar(255) DEFAULT NULL,
  `w14` varchar(255) DEFAULT NULL,
  `w15` varchar(255) DEFAULT NULL,
  `r1` varchar(255) DEFAULT NULL,
  `r2` varchar(255) DEFAULT NULL,
  `r3` varchar(255) DEFAULT NULL,
  `r4` varchar(255) DEFAULT NULL,
  `r5` varchar(255) DEFAULT NULL,
  `r6` varchar(255) DEFAULT NULL,
  `r7` varchar(255) DEFAULT NULL,
  `r8` varchar(255) DEFAULT NULL,
  `r9` varchar(255) DEFAULT NULL,
  `r10` varchar(255) DEFAULT NULL,
  `r11` varchar(255) DEFAULT NULL,
  `r12` varchar(255) DEFAULT NULL,
  `r13` varchar(255) DEFAULT NULL,
  `r14` varchar(255) DEFAULT NULL,
  `r15` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `wares`
--

INSERT INTO `wares` (`id`, `sarok`, `name`, `fathername`, `mothername`, `gram`, `word`, `deathno`, `voterid`, `mobileno`, `aname`, `w1`, `w2`, `w3`, `w4`, `w5`, `w6`, `w7`, `w8`, `w9`, `w10`, `w11`, `w12`, `w13`, `w14`, `w15`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `r7`, `r8`, `r9`, `r10`, `r11`, `r12`, `r13`, `r14`, `r15`) VALUES
(2, '10001', 'rownok', 'mahsin ali', 'rakha', '৬২ নং আড়িয়া', '৩', '23324344', '৩৩৪৫৫৩২৫৪৩', '34453432432454', 'রাহমান ', 'রাব্বু ', 'রাবিয়ের ', 'এইচ ', '', '', '', '', '', '', '', '', '', '', '', '', 'পিতা ', 'কন্যা ', 'ইফজেএফ ', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidhobavata`
--
ALTER TABLE `bidhobavata`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slno` (`slno`);

--
-- Indexes for table `boyoskovata`
--
ALTER TABLE `boyoskovata`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slno` (`slno`);

--
-- Indexes for table `gram`
--
ALTER TABLE `gram`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khobor`
--
ALTER TABLE `khobor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kormokortaborgo`
--
ALTER TABLE `kormokortaborgo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masisuvata`
--
ALTER TABLE `masisuvata`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slno` (`slno`);

--
-- Indexes for table `mouja`
--
ALTER TABLE `mouja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nagorik`
--
ALTER TABLE `nagorik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sarok` (`sarok`);

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
-- Indexes for table `protibondhivata`
--
ALTER TABLE `protibondhivata`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slno` (`slno`);

--
-- Indexes for table `sebarmullo`
--
ALTER TABLE `sebarmullo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sebarsorto`
--
ALTER TABLE `sebarsorto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shikkha`
--
ALTER TABLE `shikkha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shikkhaprotisthan`
--
ALTER TABLE `shikkhaprotisthan`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `licence_no` (`licence_no`);

--
-- Indexes for table `taxentry`
--
ALTER TABLE `taxentry`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `holdingno` (`holdingno`);

--
-- Indexes for table `uniondetails`
--
ALTER TABLE `uniondetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unionporiciti`
--
ALTER TABLE `unionporiciti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upprotisthan`
--
ALTER TABLE `upprotisthan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vwb`
--
ALTER TABLE `vwb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wares`
--
ALTER TABLE `wares`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sarok` (`sarok`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bidhobavata`
--
ALTER TABLE `bidhobavata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `boyoskovata`
--
ALTER TABLE `boyoskovata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gram`
--
ALTER TABLE `gram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `khobor`
--
ALTER TABLE `khobor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kormokortaborgo`
--
ALTER TABLE `kormokortaborgo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `masisuvata`
--
ALTER TABLE `masisuvata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mouja`
--
ALTER TABLE `mouja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nagorik`
--
ALTER TABLE `nagorik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `porishodborgo`
--
ALTER TABLE `porishodborgo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `protibondhivata`
--
ALTER TABLE `protibondhivata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sebarmullo`
--
ALTER TABLE `sebarmullo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sebarsorto`
--
ALTER TABLE `sebarsorto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shikkha`
--
ALTER TABLE `shikkha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `shikkhaprotisthan`
--
ALTER TABLE `shikkhaprotisthan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subuser`
--
ALTER TABLE `subuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tadeentry`
--
ALTER TABLE `tadeentry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `taxentry`
--
ALTER TABLE `taxentry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `uniondetails`
--
ALTER TABLE `uniondetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `unionporiciti`
--
ALTER TABLE `unionporiciti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `upprotisthan`
--
ALTER TABLE `upprotisthan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vwb`
--
ALTER TABLE `vwb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wares`
--
ALTER TABLE `wares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
