-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: mysql.eecs.oregonstate.edu
-- Generation Time: Feb 15, 2017 at 03:52 PM
-- Server version: 5.5.37-MariaDB-wsrep
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs440_yeja`
--

-- --------------------------------------------------------

--
-- Table structure for table `CareerLink`
--

CREATE TABLE IF NOT EXISTS `CareerLink` (
  `CID` char(30) NOT NULL,
  `schoolID` char(20) NOT NULL,
  `careerID` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Careers`
--

CREATE TABLE IF NOT EXISTS `Careers` (
  `careerID` varchar(30) NOT NULL,
  `careerName` varchar(30) NOT NULL,
  `catergory` varchar(50) NOT NULL,
  `statistics` text NOT NULL,
  `bodyText` text NOT NULL,
  `img` char(100) NOT NULL,
  `caption` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Careers`
--

INSERT INTO `Careers` (`careerID`, `careerName`, `catergory`, `statistics`, `bodyText`, `img`, `caption`) VALUES
('', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `Desc`
--

CREATE TABLE IF NOT EXISTS `Desc` (
  `descName` char(20) NOT NULL,
  `careerID` varchar(30) NOT NULL,
  `body` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Opportunity`
--

CREATE TABLE IF NOT EXISTS `Opportunity` (
  `oppID` varchar(20) NOT NULL,
  `careerID` varchar(30) NOT NULL,
  `oppLink` varchar(200) NOT NULL,
  `oppType` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Schools`
--

CREATE TABLE IF NOT EXISTS `Schools` (
  `schoolID` char(20) NOT NULL,
  `schoolName` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Stats`
--

CREATE TABLE IF NOT EXISTS `Stats` (
  `statID` varchar(20) NOT NULL,
  `careerID` varchar(30) NOT NULL,
  `2014Emp` int(10) NOT NULL,
  `2024Emp` int(20) NOT NULL,
  `EmployChange` int(20) NOT NULL,
  `PercentChange` varchar(10) NOT NULL,
  `GrowthOpen` int(10) NOT NULL,
  `ReplacementOpen` int(10) NOT NULL,
  `TotalOpening` int(10) NOT NULL,
  `MedianWage16` varchar(10) NOT NULL,
  `EntryLvlEdu` char(50) NOT NULL,
  `CompetitiveEdu` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CareerLink`
--
ALTER TABLE `CareerLink`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `Careers`
--
ALTER TABLE `Careers`
  ADD PRIMARY KEY (`careerID`),
  ADD KEY `careerName` (`careerID`);

--
-- Indexes for table `Desc`
--
ALTER TABLE `Desc`
  ADD PRIMARY KEY (`descName`);

--
-- Indexes for table `Opportunity`
--
ALTER TABLE `Opportunity`
  ADD PRIMARY KEY (`oppID`(10));

--
-- Indexes for table `Schools`
--
ALTER TABLE `Schools`
  ADD PRIMARY KEY (`schoolID`);

--
-- Indexes for table `Stats`
--
ALTER TABLE `Stats`
  ADD PRIMARY KEY (`statID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
