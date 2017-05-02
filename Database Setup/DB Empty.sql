-- phpMyAdmin SQL Dump
-- version 2.11.9.4
-- http://www.phpmyadmin.net
--
-- Host: oniddb
-- Generation Time: May 01, 2017 at 07:50 PM
-- Server version: 5.5.52
-- PHP Version: 5.2.6-1+lenny16

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `corbelld-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `CareerLink`
--

CREATE TABLE IF NOT EXISTS `CareerLink` (
  `CID` char(30) NOT NULL,
  `schoolID` char(20) NOT NULL,
  `careerID` char(20) NOT NULL,
  PRIMARY KEY (`CID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CareerLink`
--


-- --------------------------------------------------------

--
-- Table structure for table `Careers`
--

CREATE TABLE IF NOT EXISTS `Careers` (
  `careerID` varchar(30) NOT NULL,
  `careerName` varchar(30) NOT NULL,
  `entryEdu` varchar(50) NOT NULL,
  `compEdu` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `statistics` text NOT NULL,
  `bodyText` text NOT NULL,
  `img` char(100) NOT NULL,
  `caption` varchar(200) NOT NULL,
  `url` varchar(50) NOT NULL,
  PRIMARY KEY (`careerID`),
  KEY `careerName` (`careerID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Careers`
--


-- --------------------------------------------------------

--
-- Table structure for table `Opportunity`
--

CREATE TABLE IF NOT EXISTS `Opportunity` (
  `oppID` varchar(20) NOT NULL,
  `careerID` varchar(30) NOT NULL,
  `oppName` varchar(50) NOT NULL,
  `oppLink` varchar(200) NOT NULL,
  `oppType` varchar(10) NOT NULL,
  PRIMARY KEY (`oppID`(10))
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Opportunity`
--


-- --------------------------------------------------------

--
-- Table structure for table `Schools`
--

CREATE TABLE IF NOT EXISTS `Schools` (
  `schoolID` char(20) NOT NULL,
  `schoolName` char(30) NOT NULL,
  `url` varchar(100) NOT NULL,
  PRIMARY KEY (`schoolID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Schools`
--

