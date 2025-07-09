-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 09, 2025 at 11:15 AM
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
-- Database: `eleclogbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `logbook`
--

CREATE TABLE `logbook` (
  `id` int(11) NOT NULL,
  `stuid` int(11) NOT NULL,
  `adate` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `weekno` int(10) NOT NULL,
  `report` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `day` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `logbook`
--

INSERT INTO `logbook` (`id`, `stuid`, `adate`, `weekno`, `report`, `day`) VALUES
(20, 11, '2023-01-02', 1, 'I learned how to create a database and connect it with my login page', 'MONDAY'),
(23, 11, '2023-01-09', 3, 'I was thought on how to select a data from mysql table and display it on html table using php', 'MONDAY'),
(21, 11, '2023-01-01', 3, 'I was learned on how to add a menu into my design using dream-weaver ', 'SARTUDAY'),
(22, 11, '2023-01-02', 2, 'I was thought how to select a data from my table', 'MONDAY'),
(18, 10, '2023-07-27', 4, 'i was abe to make a slide show with Cascading Style Sheeat CSS', 'TUESDAY'),
(19, 10, '2023-07-27', 5, 'I was thought on how to design a login page using C# programming Language', 'THURSDAY'),
(17, 10, '2023-07-26', 3, 'I was taught on how create a 3D Animation', 'WEDNESDAY'),
(15, 10, '2023-06-28', 2, 'I was leard how to add a menu into my design using dream-weaver ', 'TUESDAY');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_acceptance_form`
--

CREATE TABLE `tbl_acceptance_form` (
  `id` int(11) NOT NULL,
  `regno` varchar(100) NOT NULL,
  `acceptform` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_acceptance_form`
--

INSERT INTO `tbl_acceptance_form` (`id`, `regno`, `acceptform`) VALUES
(1, 'cs/1010/1010', '912129.jpg'),
(2, 'cs/1010/1010', '463600_31373324.jpg'),
(3, 'cs/1010/1010', '760375_32906821.jpg'),
(4, '', '472381_10949156.jpg'),
(5, 'cs/1010/1010', '503993_62595320.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_acceptance_letter`
--

CREATE TABLE `tbl_acceptance_letter` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_acceptance_letter`
--

INSERT INTO `tbl_acceptance_letter` (`id`, `title`, `body`) VALUES
(1, 'My Title', 'Please, you are instructed to do so ...');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `adusername` varchar(100) NOT NULL,
  `adpassword` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `adusername`, `adpassword`) VALUES
(1, 'admin', '$2y$10$VdF6v3kyR/tsJpEWKv7YROzDvwp98CWP3EOZz32yANDnKlZE0Gp7e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siwes_notice`
--

CREATE TABLE `tbl_siwes_notice` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_siwes_notice`
--

INSERT INTO `tbl_siwes_notice` (`id`, `title`, `content`, `created_time`) VALUES
(1, 'My Notice Title', 'This is my notice title...', '2023-06-09 15:07:55');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `matricno` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `fullname`, `matricno`, `level`, `email`, `password`, `status`) VALUES
(3, 'Test', 'TSU/FSC/CS/2023/2023', '500 Level', 'test@gmail.com', '$2y$10$VdF6v3kyR/tsJpEWKv7YROzDvwp98CWP3EOZz32yANDnKlZE0Gp7e', 'inactive'),
(4, 'Unknown', 'TSU/FSC/CS/25/2020', '100 Level', 'unknow@gmail.com', '$2y$10$VdF6v3kyR/tsJpEWKv7YROzDvwp98CWP3EOZz32yANDnKlZE0Gp7e', 'inactive'),
(5, 'Anonymous', 'TSU/Anonymous', '500 Level', 'anonymous@gmail.com', '$2y$10$VdF6v3kyR/tsJpEWKv7YROzDvwp98CWP3EOZz32yANDnKlZE0Gp7e', 'inactive'),
(7, 'Jamila Ibrahim', 'TSU/DEF/CT/1110', '300 Level', 'jamila@gmail.com', '$2y$10$VdF6v3kyR/tsJpEWKv7YROzDvwp98CWP3EOZz32yANDnKlZE0Gp7e', 'inactive'),
(8, 'Fatima', 'TSU/TSU/FTSUJal', '200 Level', 'fateema@gmail.com', '$2y$10$VdF6v3kyR/tsJpEWKv7YROzDvwp98CWP3EOZz32yANDnKlZE0Gp7e', 'inactive'),
(10, 'Yaro Ira Ande', 'TSU/FSC/CS/18/1039', '400 Level', 'yaroiraande@gmail.com', '$2y$10$VdF6v3kyR/tsJpEWKv7YROzDvwp98CWP3EOZz32yANDnKlZE0Gp7e', 'active'),
(11, 'Happy Rimamnyang', 'TSU/FSC/CS/18/1014', '100 Level', 'rimamnyanghappy@gmail.com', '$2y$10$VdF6v3kyR/tsJpEWKv7YROzDvwp98CWP3EOZz32yANDnKlZE0Gp7e', 'active'),
(12, 'Manasseh Ibrahim', 'ADU/15U/440413', '500 Level', 'manasseh@gmail.com', '$2y$10$VdF6v3kyR/tsJpEWKv7YROzDvwp98CWP3EOZz32yANDnKlZE0Gp7e', 'active'),
(13, 'Murtala', 'TSU/FSC/CS/18/1818', '500 Level', 'murtala@gmail.com', '$2y$10$VdF6v3kyR/tsJpEWKv7YROzDvwp98CWP3EOZz32yANDnKlZE0Gp7e', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supervisor`
--

CREATE TABLE `tbl_supervisor` (
  `id` int(11) NOT NULL,
  `regno` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `others` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `lga` varchar(100) NOT NULL,
  `saddress` text NOT NULL,
  `sphoneno` varchar(100) NOT NULL,
  `semail` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `stream` varchar(100) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `acctno` varchar(100) NOT NULL,
  `bvn` varchar(100) NOT NULL,
  `nextofkin` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phoneno` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_supervisor`
--

INSERT INTO `tbl_supervisor` (`id`, `regno`, `surname`, `others`, `password`, `gender`, `nationality`, `state`, `lga`, `saddress`, `sphoneno`, `semail`, `program`, `stream`, `picture`, `bank`, `branch`, `acctno`, `bvn`, `nextofkin`, `address`, `phoneno`, `email`) VALUES
(1, 'cs/1010/1010', 'me', 'My other name', '$2y$10$VdF6v3kyR/tsJpEWKv7YROzDvwp98CWP3EOZz32yANDnKlZE0Gp7e', 'Gender', 'Nigeria', 'Taraba', 'Jalingo', 'My permanent addr.', '070881128374', 'my@gmail.com', 'CS', 'A', 'kcclogo2.jpg', 'GT Bank', 'Jaingo', '893289428394802', '389298428739', 'Next of kin', 'next permanent address', '079879232892', 'next@gmail.com'),
(2, 'cs/1020/1020', 'he', 'His other name', '$2y$10$VdF6v3kyR/tsJpEWKv7YROzDvwp98CWP3EOZz32yANDnKlZE0Gp7e', 'Male', 'Nigeria', 'Taraba', 'Jalingo', 'His permanent addr.', '0978798709870', 'his@gmail.com', 'CS', 'B', 'logo.png', 'Zenith Bank', 'Jalingo', '089898098223', '223432343423', 'Next of kin', 'next permanent address', '1320989809', 'hisnext@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logbook`
--
ALTER TABLE `logbook`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stuid` (`stuid`);

--
-- Indexes for table `tbl_acceptance_form`
--
ALTER TABLE `tbl_acceptance_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_acceptance_letter`
--
ALTER TABLE `tbl_acceptance_letter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_siwes_notice`
--
ALTER TABLE `tbl_siwes_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_supervisor`
--
ALTER TABLE `tbl_supervisor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logbook`
--
ALTER TABLE `logbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_acceptance_form`
--
ALTER TABLE `tbl_acceptance_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_acceptance_letter`
--
ALTER TABLE `tbl_acceptance_letter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_siwes_notice`
--
ALTER TABLE `tbl_siwes_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_supervisor`
--
ALTER TABLE `tbl_supervisor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
