-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 08, 2021 at 12:16 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `usertype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `name`, `pass`, `email`, `designation`, `address`, `usertype`) VALUES
(23, 'sid', 'Siddhesh Kamath', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'siddheshkamath40@gmail.com', 'Administrator', 'Navelim-Goa', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `usertype` varchar(100) NOT NULL,
  `state` enum('active','inactive') NOT NULL,
  `website` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `username`, `pass`, `name`, `email`, `specialization`, `description`, `address`, `usertype`, `state`, `website`) VALUES
(40, 'google', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'hkhuhk huhuh', 'rfytfa@live.com', 'zertguhijok', 'sedrftyguhijo', 'ertyuio', 'company', 'active', 'ftgyhujiok'),
(41, 'momgoooo', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'mongooooooooooo', 'wdqwdwd', 'wqsqws', 'qwsqws', 'wswqsqws', 'company', 'active', 'wsqwsqws');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `no` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `querry` varchar(100) NOT NULL,
  `state` enum('unread','read') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`no`, `name`, `email`, `querry`, `state`) VALUES
(7, 'sid', 'siddheshkamath40@gmail.com1998#Siddhesh', 'i dont wanna go home', 'read'),
(12, 'doom', '123@gmail.com', 'cthtrdjyyt', 'read'),
(13, 'doom', 'siddheshkamath40@gmail.com', 'xxAXAXA', 'read');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `event` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event`) VALUES
(0, 'NEW INTERVIEW DATE IS FRIDAY 3rd MAY 2020');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `no` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sex` enum('male','female','*') NOT NULL,
  `avg_class` enum('fail','first class','second class','distinction') NOT NULL,
  `department` enum('mechanical','electronics','computers','automobile','medical electronics') NOT NULL,
  `nationality` enum('indian','other') NOT NULL,
  `status` enum('hold','accept','reject') NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`no`, `name`, `sex`, `avg_class`, `department`, `nationality`, `status`, `date`) VALUES
(19, 'POPCORN INC.', 'male', 'fail', 'mechanical', 'indian', 'accept', 'June,2020'),
(20, 'Fabcoders', 'male', 'second class', 'mechanical', 'indian', 'accept', 'December,2021'),
(21, 'Fabcoders', 'male', 'fail', 'mechanical', 'indian', 'accept', 'December,2021'),
(22, 'Fabcoders', 'male', 'fail', 'mechanical', 'indian', 'hold', 'December,2021');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `sex` enum('male','female') NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `rollno` varchar(100) NOT NULL,
  `nationality` enum('indian','other') NOT NULL,
  `avg_class` enum('fail','first class','second class','distinction') NOT NULL,
  `department` enum('mechanical','electronics','computers','automobile','medical electronics') NOT NULL,
  `usertype` varchar(100) NOT NULL,
  `state` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `username`, `pass`, `sex`, `name`, `email`, `address`, `rollno`, `nationality`, `avg_class`, `department`, `usertype`, `state`) VALUES
(28, 'momgo', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'male', 'noodle moodle', 'rfytfCxSXca@live.com', 'adsad', '12CE99', 'indian', 'fail', 'computers', 'student', 'active'),
(29, 'gogi', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 'male', 'Aman Heridia', 'aman@gmail.com', 'Navelim-Goa', '12CE13', 'indian', 'fail', 'computers', 'student', 'active'),
(30, 'yourkk', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 'male', 'Shankar Komni', 'shankar@gmail.com', 'scvUYVALUYGI', '18ME26', 'indian', 'fail', 'mechanical', 'student', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
