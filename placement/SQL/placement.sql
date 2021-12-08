-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2020 at 11:20 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(1, 'sid', 'siddhesh', '1234', 'siddheshkamath40@gmail.com', 'placement officer', 'navelim-goa', 'admin');

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
(24, 'Conexao', '1234Conexao', 'conexao Tech', 'conexao@gmail.com', 'Software Development x', 'Perfect Place For Software Developers', 'panjim -Goa', 'company', 'active', 'www.Corn.com'),
(27, 'fab', '123', 'Fabcoders', 'siddheshkamath40@gmail.com1998#Siddhesh', 'no work', 'no work for emp', 'china', 'company', 'active', 'www.china.com'),
(28, 'ssmobile', 'ss', 'SSMOBILES', 'ssmobile123@gmail.com', 'sales', 'xxxxxxxxx', 'madgao goa', 'company', 'active', 'www.ssmobile.com'),
(29, 'chai', 'chai', 'chai', 'chai', 'chai', 'chai', 'margao-Goa ', 'company', 'active', 'chai123.com'),
(30, 'hello69', 'hello69', 'hello69', 'hello69', 'hello69', 'hello69', 'hello69', 'company', 'active', 'hello69'),
(31, 'heybro', 'heybro', 'heyBHAI', 'heybro@gmail.com', 'digital Marketing', 'xxxxxx', 'margao-Goa ', 'company', 'active', 'heybro.com'),
(32, 'bluezone', 'bluezone', 'bluezone', 'bluezone', 'x', 'x', 'x', 'company', 'active', 'x.com'),
(33, 'computerx', 'computerx', 'computerx', 'computerx', 'computerx', 'x', 'x', 'company', 'active', 'x.com'),
(34, 'com', 'computerx', 'c', 'conexao@gmail.com', 'computerx', 'ccc', 'c', 'company', 'inactive', 'www.Corncc.com'),
(35, 'ascac', 'cac', 'aaaa', 'cac', 'acd', 'dcac', 'cac', 'company', 'active', 'aca'),
(36, 'popcorn', '123', 'POPCORN INC.', 'poper@gmail.com', 'packaging', 'no work for emp', 'china', 'company', 'active', 'www.popcorn.com'),
(37, 'comp', '1234', 'COMPUTERWOELD', 'siddhes40@live.com', 'packaging ', 'no work for emp', 'navelim-goa', 'company', 'active', 'www.comp.com'),
(38, 'computerx', '123', 'computerx', 'dcunhashydan1999@gmail.com', 'no work', 'hello ffrom goa', 'navelim-goa', 'company', 'active', 'www.compx.com'),
(39, 'charger', 'charger', 'CHARGER COM', 'charge@charge.com', 'packaging ', 'based in Goa since 1998', 'navelim-goa', 'company', 'active', 'www.CHARGER.com');

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
(2, 'superman', 'siddheshkamath9@gmail.com', 'how to go  to america ?', 'read'),
(5, ' nnn', 'hhh', 'hhh', 'read'),
(7, 'sid', 'siddheshkamath40@gmail.com1998#Siddhesh', 'i dont wanna go home', 'read'),
(8, 'ifoi', 'siddheshkamath98@gmail.com', 'hey baby', 'unread'),
(9, 'wantedx', 'sssxxxkksw', 'horse', 'read'),
(10, 'Siddhesh Kamath', 'siddheshkamath98@gmail.com', 'how can i apply ??', 'read');

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
(19, 'POPCORN INC.', 'male', 'fail', 'mechanical', 'indian', 'accept', 'June,2020');

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
(17, 'siddhesh', 'student', 'male', 'siddhesh', 'ssmobile123@gmail.com', 'navelim-goa', '15ce12', '', 'first class', 'computers', 'student', 'active'),
(19, 'Amancc', 'aman', 'male', 'aman', 'aman12@gmail.com', 'aman', '12ce12', '', 'second class', 'computers', 'student', ''),
(20, 'samson', '', 'male', 'sameerxxxxx', 'sameera@live.com', 'chinabbbbbb', '15ME12', 'indian', 'fail', 'computers', 'student', 'active'),
(22, 'sid', '', 'male', 'Siddhesh hom', 'sameera@live.com', 'xgcjgcj', '15ME12', 'other', 'fail', 'mechanical', 'student', ''),
(23, 'gamer', '123', 'male', 'sam', '123@n.com', '13ce12chfchchg', '12me13', 'indian', 'first class', 'mechanical', 'student', ''),
(24, 'siddhesh345', '12345', 'male', 'sameera', 'siddheshkamath40@gmail.com1998#Siddhesh', 'navelim-goa', '13CE34', 'indian', 'fail', 'computers', 'student', 'active'),
(25, 'siddhesh1234', '123', 'male', 'Siddhesh Kamath', 'siddheshkamath400@live.com', 'navelim-goa', '12CE34', 'indian', 'first class', 'computers', 'student', 'active'),
(27, 'jj', '122kks', 'male', 'mxj', 'kk@home.com', 'navelim-goa', '122CE03', 'indian', 'fail', 'mechanical', 'student', 'active');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
