-- phpMyAdmin SQL Dump
-- version 2.11.9.4
-- http://www.phpmyadmin.net
--
-- Host: oniddb
-- Generation Time: May 01, 2017 at 04:16 PM
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

INSERT INTO `CareerLink` (`CID`, `schoolID`, `careerID`) VALUES
('ChmeketaCCmsm', 'ChmeketaCC', 'medicalservicemanage'),
('ClackmasCCmsm', 'ClackmasCC', 'medicalservicemanage'),
('ClastopCCmsm', 'ClastopCC', 'medicalservicemanage'),
('FGUpha', 'FGU', 'pharmacist'),
('LaneCCmsm', 'LaneCC', 'medicalservicemanage'),
('MTHoodCCmsm', 'MTHoodCC', 'medicalservicemanage'),
('OHSSDdent', 'OHSSD', 'dentist'),
('OSUpha', 'OSU', 'pharmacist'),
('PortlandCCmsm', 'PortlandCC', 'medicalservicemanage'),
('Puoptom', 'PU', 'optometrist'),
('RogueCCmsm', 'RogueCC', 'medicalservicemanage'),
('TillamookbayCCmsm', 'TillamookbayCC', 'medicalservicemanage'),
('UWSchiro', 'UWS', 'chiropractor');

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

INSERT INTO `Careers` (`careerID`, `careerName`, `entryEdu`, `compEdu`, `category`, `statistics`, `bodyText`, `img`, `caption`, `url`) VALUES
('', '', '', '', '', '', '', '', '', '.php'),
('chiropractor', 'Chiropractor', 'Doctoral or Professional degree', 'Doctoral or Professional degree', 'Health Care', 'Employment in this occupation in 2014 was at about the statewide average for all occupations. The total number of job openings is projected to be at about the statewide average number of job openings for all occupations through 2024. This occupation is expected to grow at a much faster rate than the statewide average growth rate for all occupations through 2024.  Reasonable employment opportunities exist largely due to the significant number of job openings projected for this occupation.', 'Assess, treat, and care for patients by manipulation of spine and musculoskeletal system. May provide spinal adjustment or address sacral or pelvic misalignment.', 'https://www.bls.gov/ooh/images/15335.jpg', '', 'chiropractor.php'),
('dentist', 'Dentist', 'Doctoral or Professional degree', 'Doctoral or Professional degree', 'Health Care', 'Employment in this occupation in 2014 was somewhat larger than the statewide average for all occupations. The total number of job openings is projected to be somewhat higher than the statewide average number of job openings for all occupations through 2024. This occupation is expected to grow at about the statewide average growth rate for all occupations through 2024.', 'Dentists diagnose and treat problems with patients'' teeth, gums, and related parts of the mouth. They provide advice and instruction on taking care of the teeth and gums and on diet choices that affect oral health.', 'https://www.bls.gov/ooh/images/15342.jpg', 'Dentists diagnose and treat problems with patients teeth, gums, and related parts of the mouth. They provide advice and instruction on taking care of the teeth and gums and on diet choices that affect', 'dentist.php'),
('healthcaresocialworker', 'Social Worker', 'Bachelors degree', 'Masters degree', 'Professional and Related', 'Emloyment', 'Social workers help people solve and cope with problems in their everyday lives. One group of social workers, clinical social workers, also diagnose and treat mental, behavioral, and emotional issues.', 'https://www.bls.gov/ooh/images/15187.jpg', 'Social workers help people solve and cope with problems.', 'healthcaresocialworker.php'),
('medicalservicemanager', 'Medical Service Manager', 'Bachelors degree', 'Masters degree', 'Management', 'Emloyment', 'Medical and health services managers, also called healthcare executives, or healthcare administrators, plan, direct, and coordinate medical and health services. They might manage an entire facility, a specific clinical area or department, or a medical practice for a group of physicians. Medical and health services managers must direct changes that conform to changes in healthcare laws, regulations, and technology.', 'https://www.bls.gov/ooh/images/15588.jpg', 'Medical and health services managers plan, direct, and coordinate the delivery of healthcare.', 'medicalservicemanager.php'),
('optometrist', 'Optometrist', 'Doctoral or Professional degree', 'Doctoral or Professional degree', 'Health Care', 'Emloyment', 'Dentists diagnose and treat problems with patients'' teeth, gums, and related parts of the mouth. They provide advice and instruction on taking care of the teeth and gums and on diet choices that affect oral health.', 'https://www.bls.gov/ooh/images/15342.jpg', 'Optometrists diagnose and treat eye problems in children and adults.', 'optometrist.php'),
('pharmacist', 'Pharmacist', 'Doctoral or Professional degree', 'Doctoral or Professional degree', 'Health Care', 'Emloyment', 'Pharmacists dispense prescription medications to patients and offer expertise in the safe use of prescriptions. They also may conduct health and wellness screenings, provide immunizations, oversee the medications given to patients, and provide advice on healthy lifestyles.', 'https://www.bls.gov/ooh/images/15406.jpg', 'Pharmacists fill prescriptions and instruct customers on the safe use of medications.', 'pharmacist.php'),
('physician', 'Physician', 'Doctoral or Professional degree', 'Doctoral or Professional degree', 'Health Care', 'Emloyment', 'Reasonable employment opportunities exist largely due to the significant number of job openings projected for this occupation', 'https://www.bls.gov/ooh/images/15422.jpg', 'Physicians who administer anesthetics prior to, during, or after surgery, or other medical procedures.', 'physician.php');

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

INSERT INTO `Opportunity` (`oppID`, `careerID`, `oppName`, `oppLink`, `oppType`) VALUES
('manBF', 'management', 'Medical and Health Services Managers', 'https://www.qualityinfo.org/te-oprof/?at=1&t1=Medical%20manager~119111~4101000000~0~true~true~true~true~true~true~true~true~true~true~true~true~true~none~0~1~1', 'Oregon'),
('hthSW', 'professional', 'Social Workers', 'https://www.bls.gov/ooh/community-and-social-service/social-workers.htm', 'National'),
('chiPT', 'chiropractor', 'Chiropractors', 'https://www.qualityinfo.org/te-oprof/?at=1&t1=chiropractor~291011~4101000000~0~true~true~true~true~true~true~true~true~true~true~true~true~true~none~0~1~1', 'State'),
('denST', 'dentist', 'Dentists, General', 'https://www.qualityinfo.org/jc-oprof/?at=1&t1=Dentist~291021~4101000000~2~true~false~true~true~false~true~false~true~false~true~true~false~false~none~0~1~1', 'Oregon'),
('optMT', 'optometrist', 'Optometrists ', 'https://www.qualityinfo.org/jc-oprof/?at=1&t1=Optometrists~291041~4101000000~2~true~false~true~true~false~true~false~true~false~true~true~false~false~none~0~1~1', 'Oregon'),
('phaMT', 'pharmacist', 'Pharmacists', 'https://www.bls.gov/ooh/healthcare/pharmacists.htm', 'National'),
('phySN', 'physcician', 'Physicians and Surgeons', 'https://www.bls.gov/ooh/healthcare/physicians-and-surgeons.htm#tab-1', 'National');

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

INSERT INTO `Schools` (`schoolID`, `schoolName`, `url`) VALUES
('ChmeketaCC', 'Chmeketa Community', 'http://www.chemeketa.edu/'),
('ClackmasCC', 'Clackamas Community College', 'https://www.clackamas.edu/'),
('ClastopCC', 'Clatsop Community Coillege', 'https://www.clatsopcc.edu/'),
('FGU', 'Forest Grove University', 'https://www.pacificu.edu/about-us/campuses-and-locations/forest-grove-campus'),
('LaneCC', 'lane community college', 'https://www.lanecc.edu/'),
('MIT', 'MIT', 'www.MIT.com'),
('MTHoodCC', 'Mt. Hood Community College', 'https://www.mhcc.edu/'),
('OHSSD', 'Oregon Health Sciences School', 'http://www.ohsu.edu/xd/education/schools/school-of-dentistry/'),
('OSU', 'Oregon State Universtiy', 'www.oregonstate.edu'),
('PortlandCC', 'Portland Community College', 'https://www.pcc.edu/'),
('PU', 'Pacific University', 'https://www.pacificu.edu/'),
('RogueCC', 'Rogue Community College', 'http://www.roguecc.edu/'),
('TillamookbayCC', 'Tillamook Bay Community Colleg', 'http://tillamookbaycc.edu/'),
('UWS', 'University of Western States', 'https://www.uws.edu/');
