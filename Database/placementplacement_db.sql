-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2019 at 07:05 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

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
-- Table structure for table `hlogin`
--

CREATE TABLE `hlogin` (
  `Id` int(3) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(6) NOT NULL,
  `Branch` varchar(50) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hlogin`
--

INSERT INTO `hlogin` (`Id`, `Username`, `Password`, `Branch`, `Question`, `Answer`) VALUES
(1, 'swati', 'swati', 'ise', '', ''),
(1, 'swati', 'swati', 'ise', '', ''),
(2, 'ayushi', 'tank', 'ISE', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `plogin`
--

CREATE TABLE `plogin` (
  `Id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plogin`
--

INSERT INTO `plogin` (`Id`, `Username`, `Password`, `Email`, `Question`, `Answer`) VALUES
(1, 'ayushi', 'ayushi123', '', '', ''),
(2, 'swati', 'swati123', 'swati@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `prilogin`
--

CREATE TABLE `prilogin` (
  `Id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prilogin`
--

INSERT INTO `prilogin` (`Id`, `Username`, `Password`, `Email`, `Question`, `Answer`) VALUES
(1, 'swati', 'swati123', 'swati@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `registereduser`
--

CREATE TABLE `registereduser` (
  `userId` int(11) NOT NULL,
  `enrollment` varchar(256) NOT NULL,
  `fullName` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `mobile` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `semester` varchar(256) NOT NULL,
  `department` varchar(256) NOT NULL,
  `tenthPercentage` varchar(256) NOT NULL,
  `cpi` varchar(256) NOT NULL,
  `backlog` varchar(256) NOT NULL,
  `currentBacklog` varchar(256) NOT NULL,
  `technology` varchar(256) NOT NULL,
  `jobLocation` varchar(256) NOT NULL,
  `interestArea` varchar(256) NOT NULL,
  `firstName` varchar(256) NOT NULL,
  `lastName` varchar(256) NOT NULL,
  `phoneAddress` varchar(256) NOT NULL,
  `address1` varchar(256) NOT NULL,
  `address2` varchar(256) NOT NULL,
  `city` varchar(256) NOT NULL,
  `state` varchar(256) NOT NULL,
  `zipcode` varchar(256) NOT NULL,
  `country` varchar(256) NOT NULL,
  `otherActivity` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registereduser`
--

INSERT INTO `registereduser` (`userId`, `enrollment`, `fullName`, `email`, `mobile`, `password`, `semester`, `department`, `tenthPercentage`, `cpi`, `backlog`, `currentBacklog`, `technology`, `jobLocation`, `interestArea`, `firstName`, `lastName`, `phoneAddress`, `address1`, `address2`, `city`, `state`, `zipcode`, `country`, `otherActivity`) VALUES
(11, '150200107043', 'Bhavik Kalariya', 'bhavikkalariya103@gmail.com', '09409360641', '53acf5f531943514246a7ed92f496a7d', '8th', 'Computer', '82.10%', '7.45', '0', '0', 'PHP/MYSQL/Javascript/Angular', 'Rajkot/Ahmedabad/Abroad', 'Web Development', 'Bhavik', 'Kalariya', '09409360641', 'University Road', '', 'Rajkot', 'GJ', '360005', 'IN', 'Happy Coding with PHP :)\r\n'),
(12, '150200107005', 'Abhay Bangoria', 'patelabhi510@gmail.com', '8866557266', '2f01618053cddf6b97f4f88df0d2d6af', '8th', 'Computer', '84%', '7.45', '0', '0', 'PHP', 'Rajkot', 'Web Design', 'Abhay', 'Bangoria', '8866557266', 'University Road', '', 'Rajkot', 'GJ', '360005', 'IN', 'Love Coding'),
(13, '456', 'aushi', 'abc@g.com', '978787878', 'abc123', '6', 'comp', '96', '9.21', '0', '0', 'designing', 'jamnagar', 'managemnet', 'ausi', 'tank', '7mckl445', 'bbbhhjjj', 'jbbhbj', 'jamnagar', '', '', '', ''),
(14, '160203107004', 'chauhan swati', 'chauhan.swati104@gmail.com', '7383697987', 'f823937995b27ffcbf668da4a22d5bd3', '8', 'Computer', '88', '9.5', '0', '0', 'java', 'rajkot', 'web designing', 'swati', 'chauhan', '789654123', 'mochi bazar', 'bhadarvani street', 'dhrol', 'gujarat', '361210', 'india', 'kfwhenkhfisudhnjknwkefbsduohnfocwkls'),
(15, '160203107004', 'Swati chauhan', 'chuahan.swati104@gmail.com', '7383697987', 'e194cedae58a18ef2d109d69e8f72fd5', '8th', 'computer', '99', '99', '0', '0', 'web designer', 'Rajkot', 'designing', 'swati', 'chuahan', '987654321', 'mochi bazar', 'bhadarvani street', 'dhrol', 'gujrat', '361210', 'india', 'SEO workshop'),
(16, '160203107001', 'gec student', 'student@gmail.com', '7383697987', 'student', '8th', 'computer', '90', '90', '0', '0', 'python', 'Ahmedabad', 'coding', 'student', 'gec', '987989897', 'Gec-rajkot', 'mavdi road', 'rajkot', 'hujarat', '12345', 'india', 'hfjehj');

-- --------------------------------------------------------

--
-- Table structure for table `slogin`
--

CREATE TABLE `slogin` (
  `id` int(11) NOT NULL,
  `USN` varchar(10) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slogin`
--

INSERT INTO `slogin` (`id`, `USN`, `PASSWORD`, `Email`, `Question`, `Answer`) VALUES
(1, 'Swati', 'swati', 'chauhan@gmail.com', '', 'manchurian'),
(2, 'swati', '123', 'swati@gmail.com', '52', '46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `plogin`
--
ALTER TABLE `plogin`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Username` (`Username`,`Email`);

--
-- Indexes for table `prilogin`
--
ALTER TABLE `prilogin`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Username` (`Username`,`Email`);

--
-- Indexes for table `registereduser`
--
ALTER TABLE `registereduser`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `slogin`
--
ALTER TABLE `slogin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `USN` (`USN`,`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `plogin`
--
ALTER TABLE `plogin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prilogin`
--
ALTER TABLE `prilogin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registereduser`
--
ALTER TABLE `registereduser`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `slogin`
--
ALTER TABLE `slogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
