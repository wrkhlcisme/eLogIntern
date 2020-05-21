-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2020 at 10:15 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `logid` int(11) NOT NULL,
  `logdate` date NOT NULL,
  `logreport` varchar(1000) NOT NULL,
  `remark` varchar(1000) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`logid`, `logdate`, `logreport`, `remark`, `userid`) VALUES
(1, '2020-05-21', 'I create a website today using HTML and CSS', 'Student has potential to do frontend', 3),
(2, '2020-05-20', 'I create a website today using HTML', '', 3),
(3, '2020-05-20', 'asdqwe', 'test', 3),
(4, '2020-05-18', 'this is test case', '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `userid` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`userid`, `username`, `password`) VALUES
(3, '123', 'zaq123'),
(4, '456', 'zaq123');

-- --------------------------------------------------------

--
-- Table structure for table `sv`
--

CREATE TABLE `sv` (
  `svId` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sv`
--

INSERT INTO `sv` (`svId`, `username`, `password`) VALUES
(1, 'svabc', 'zaq123'),
(2, 'sv', 'zaq123');

-- --------------------------------------------------------

--
-- Table structure for table `_manage`
--

CREATE TABLE `_manage` (
  `userid` int(11) NOT NULL,
  `svId` int(11) NOT NULL,
  `manageid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_manage`
--

INSERT INTO `_manage` (`userid`, `svId`, `manageid`) VALUES
(3, 2, 1),
(4, 1, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`logid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `sv`
--
ALTER TABLE `sv`
  ADD PRIMARY KEY (`svId`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `_manage`
--
ALTER TABLE `_manage`
  ADD PRIMARY KEY (`manageid`),
  ADD UNIQUE KEY `svId` (`svId`),
  ADD UNIQUE KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `logid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sv`
--
ALTER TABLE `sv`
  MODIFY `svId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `_manage`
--
ALTER TABLE `_manage`
  MODIFY `manageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `record`
--
ALTER TABLE `record`
  ADD CONSTRAINT `record_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `student` (`userid`);

--
-- Constraints for table `_manage`
--
ALTER TABLE `_manage`
  ADD CONSTRAINT `_manage_ibfk_1` FOREIGN KEY (`svId`) REFERENCES `sv` (`svId`),
  ADD CONSTRAINT `_manage_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `student` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
