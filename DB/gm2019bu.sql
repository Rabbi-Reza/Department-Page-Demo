-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2018 at 09:05 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gm2019bu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admingm`
--

CREATE TABLE IF NOT EXISTS `admingm` (
  `Id` int(11) NOT NULL,
  `adName` varchar(500) NOT NULL,
  `un` varchar(100) NOT NULL,
  `adEmail` varchar(100) NOT NULL,
  `adphn` varchar(50) NOT NULL,
  `ps` varchar(100) NOT NULL,
  `adagPass` varchar(50) NOT NULL,
  `Adgend` varchar(10) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admingm`
--

INSERT INTO `admingm` (`Id`, `adName`, `un`, `adEmail`, `adphn`, `ps`, `adagPass`, `Adgend`, `type`) VALUES
(4, 'Nirzhor', 'a', '45@f.com', '45', 'a', 'a', 'Male', 'Master');

-- --------------------------------------------------------

--
-- Table structure for table `contactgm`
--

CREATE TABLE IF NOT EXISTS `contactgm` (
  `Id` int(11) NOT NULL,
  `locationMap` varchar(1000) NOT NULL,
  `ContactMap` varchar(50) NOT NULL,
  `offBuild` varchar(500) NOT NULL,
  `offFloor` varchar(100) NOT NULL,
  `offRoom` varchar(70) NOT NULL,
  `offPhn1` varchar(50) NOT NULL,
  `offPhn2` varchar(50) NOT NULL,
  `offFax1` varchar(50) NOT NULL,
  `offFax2` varchar(50) NOT NULL,
  `offMail` varchar(100) NOT NULL,
  `offWork` varchar(100) NOT NULL,
  `offWNoti` varchar(500) NOT NULL,
  `offLun` varchar(100) NOT NULL,
  `UnivAddr` varchar(500) NOT NULL,
  `UnivPhn` varchar(50) NOT NULL,
  `UnivFax` varchar(50) NOT NULL,
  `UnivEmail` varchar(100) NOT NULL,
  `UnivWeb1` varchar(100) NOT NULL,
  `UnivWeb2` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactgm`
--

INSERT INTO `contactgm` (`Id`, `locationMap`, `ContactMap`, `offBuild`, `offFloor`, `offRoom`, `offPhn1`, `offPhn2`, `offFax1`, `offFax2`, `offMail`, `offWork`, `offWNoti`, `offLun`, `UnivAddr`, `UnivPhn`, `UnivFax`, `UnivEmail`, `UnivWeb1`, `UnivWeb2`) VALUES
(1, ' https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1798.4720311251176!2d90.3631867!3d22.6597763!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xafa01f648ef161da!2sDepartment+of+Geology+%26+Mining!5e1!3m2!1sen!2sbd!4v1532277444843', 'ContactMap1', 'abcd ( Academic 2 ) ', '2nd Floor', '3110 ', '0431-21777', '1234', '0431-61113', '0431-61115', 'adad@gmail.com', '10 AM - 5 PM', '( Friday , Saturday off )', '1 PM - 1.30 PM ', 'Kornokathi, (Dhaka - Patuakhali Hwy), Barisal-8200, Bangladesh ', '0431-2177771-77', '0431-61117	', 'a@s', 'https://www.barisaluniv.ac.bd', 'https://www.barisaluniv.edu.bd');

-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

CREATE TABLE IF NOT EXISTS `publication` (
  `PuID` int(11) NOT NULL,
  `Id` int(50) NOT NULL,
  `PuTitle` varchar(1000) NOT NULL,
  `PuDate` varchar(50) NOT NULL,
  `PuJour` varchar(1000) NOT NULL,
  `PuPdf` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publication`
--

INSERT INTO `publication` (`PuID`, `Id`, `PuTitle`, `PuDate`, `PuJour`, `PuPdf`) VALUES
(7, 4, 'example 1 ', '2016-07-03', 'http://www.barisaluniv.ac.bd/', 'example 1 compiler_design_tutorial.pdf 2016-07-03.pdf '),
(8, 4, 'etg yre ', '2018-07-03', 'https://www.google.com/search?q=w3school+date+picker&oq=w3school+date+&aqs=chrome.2.69i57j0l5.10135j0j7&sourceid=chrome&ie=UTF-8', 'etg yre computer_graphics_tutorial.pdf 2018-07-03.pdf '),
(9, 4, 'rt ret retwr te ', '2018-07-11', 'https://w98ow.google.com/search?q=w3school+date+picker&oq=w3school+date+&aqs=chrome.2.69i57j0l5.10135j0j7&sourceid=chrome&ie=UTF-8', 'rt ret retwr te  compiler_design_tutorial.pdf 2018-07-11.pdf ');

-- --------------------------------------------------------

--
-- Table structure for table `teachergm`
--

CREATE TABLE IF NOT EXISTS `teachergm` (
  `Id` int(11) NOT NULL,
  `tname` varchar(100) NOT NULL,
  `tcard` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `Dtype` varchar(50) NOT NULL,
  `Desig` varchar(100) NOT NULL,
  `email` varchar(70) NOT NULL,
  `phn` varchar(50) NOT NULL,
  `build` varchar(150) NOT NULL,
  `Bname1` varchar(150) NOT NULL,
  `floor` varchar(100) NOT NULL,
  `room` varchar(100) NOT NULL,
  `gend` varchar(50) NOT NULL,
  `tblood` varchar(5) NOT NULL,
  `descrip` varchar(60500) NOT NULL,
  `timg` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admingm`
--
ALTER TABLE `admingm`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contactgm`
--
ALTER TABLE `contactgm`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`PuID`);

--
-- Indexes for table `teachergm`
--
ALTER TABLE `teachergm`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admingm`
--
ALTER TABLE `admingm`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `contactgm`
--
ALTER TABLE `contactgm`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `publication`
--
ALTER TABLE `publication`
  MODIFY `PuID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `teachergm`
--
ALTER TABLE `teachergm`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
