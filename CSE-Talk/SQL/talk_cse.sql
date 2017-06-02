-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2016 at 01:26 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `talk_cse`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `AccountID` int(11) NOT NULL,
  `ProfileID` int(11) DEFAULT NULL,
  `StudentEmail` varchar(100) NOT NULL,
  `AccountType` text NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `CellPhone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `CompanyID` int(11) NOT NULL,
  `CompanyName` varchar(100) NOT NULL,
  `CompanyURL` text NOT NULL,
  `CompanyDescription` text NOT NULL,
  `CompanyPhone` varchar(12) NOT NULL,
  `CompanyStreetAddress` varchar(100) NOT NULL,
  `CompanyCity` text NOT NULL,
  `CompanyState` text NOT NULL,
  `CompanyZip` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`CompanyID`, `CompanyName`, `CompanyURL`, `CompanyDescription`, `CompanyPhone`, `CompanyStreetAddress`, `CompanyCity`, `CompanyState`, `CompanyZip`) VALUES
(1, 's', 's', 's', '555-555-5555', 'd', 'd', 'd', 33324),
(3, 'qws', 's', 's', '555-555-5555', 'd', 'd', 'd', 33324);

-- --------------------------------------------------------

--
-- Table structure for table `contactperson`
--

CREATE TABLE `contactperson` (
  `ContactID` int(11) NOT NULL,
  `CompanyID` int(11) NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `Email` varchar(100) NOT NULL,
  `PhoneNumber` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactperson`
--

INSERT INTO `contactperson` (`ContactID`, `CompanyID`, `FirstName`, `LastName`, `Email`, `PhoneNumber`) VALUES
(1, 1, '1', '1', '1', '1'),
(2, 3, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `CourseID` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `Name` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `currentrecord`
--

CREATE TABLE `currentrecord` (
  `RecordID` int(11) NOT NULL,
  `workingRecord` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currentrecord`
--

INSERT INTO `currentrecord` (`RecordID`, `workingRecord`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `internship`
--

CREATE TABLE `internship` (
  `InternshipID` int(11) NOT NULL,
  `CompanyID` int(11) NOT NULL,
  `ContactID` int(11) NOT NULL,
  `JobTitle` text NOT NULL,
  `Description` text NOT NULL,
  `DegreeWanted` text NOT NULL,
  `Salary` int(11) NOT NULL,
  `WorkHours` int(100) NOT NULL,
  `CollegeCredit` tinyint(1) NOT NULL,
  `DatePosted` date NOT NULL,
  `DateExpired` date NOT NULL,
  `SkillsNeeded` text NOT NULL,
  `ApplicationInstructions` text NOT NULL,
  `Active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internship`
--

INSERT INTO `internship` (`InternshipID`, `CompanyID`, `ContactID`, `JobTitle`, `Description`, `DegreeWanted`, `Salary`, `WorkHours`, `CollegeCredit`, `DatePosted`, `DateExpired`, `SkillsNeeded`, `ApplicationInstructions`, `Active`) VALUES
(10, 1, 1, 'programmer', 'programmer', 'programmer', 1, 1, 0, '2016-04-01', '2016-04-29', 'none', 'programmer', 1),
(11, 1, 1, 'programmer', 'programmer', 'programmer', 1, 1, 0, '2016-04-01', '2016-04-29', 'none', 'programmer', 1),
(12, 1, 1, 'programmer', 'programmer', 'programmer', 1, 1, 0, '2016-04-01', '2016-04-29', 'none', 'programmer', 1),
(13, 1, 1, 'caads', 'asdasd', 'werwerwe', 0, 234, 0, '2016-04-01', '2016-04-29', 'asda', 'sasdasd', 1),
(14, 1, 1, 'caads', 'asdasd', 'werwerwe', 0, 234, 0, '2016-04-01', '2016-04-29', 'asda', 'sasdasd', 1),
(15, 1, 1, 'caads', 'asdasd', 'werwerwe', 0, 234, 0, '2016-04-01', '2016-04-29', 'asda', 'sasdasd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `internship2`
--

CREATE TABLE `internship2` (
  `ID` int(11) NOT NULL,
  `JobTitle` varchar(50) NOT NULL,
  `JobDescription` varchar(255) NOT NULL,
  `CompanyName` varchar(50) NOT NULL,
  `CompanyURL` varchar(100) NOT NULL,
  `DatePosted` date NOT NULL,
  `DateExpired` date NOT NULL,
  `SkillsNeeded` varchar(255) NOT NULL,
  `ApplicationInstructions` varchar(255) NOT NULL,
  `ContactPerson` varchar(100) NOT NULL,
  `ContactEmail` varchar(100) NOT NULL,
  `ContactPhone` varchar(12) NOT NULL,
  `Salary` float NOT NULL,
  `WorkHours` int(11) NOT NULL,
  `Credit` tinyint(1) NOT NULL,
  `CompanyDescription` varchar(255) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `DegreeWanted` varchar(255) NOT NULL,
  `Active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internship2`
--

INSERT INTO `internship2` (`ID`, `JobTitle`, `JobDescription`, `CompanyName`, `CompanyURL`, `DatePosted`, `DateExpired`, `SkillsNeeded`, `ApplicationInstructions`, `ContactPerson`, `ContactEmail`, `ContactPhone`, `Salary`, `WorkHours`, `Credit`, `CompanyDescription`, `Address`, `DegreeWanted`, `Active`) VALUES
(1, 'mark', 'blah', 'blahblah', 'www.broward.edu', '2016-04-12', '2016-04-20', 'blahing', 'blah', 'jkdsj;a', 'f@v.com', '333-333-3333', 23000, 4, 0, 'fhdkls;hafkl', 'jdksaj;', 'fdkjsa;l', 0),
(2, 'tim', 'blah', 'blahblah', 'www.broward.edu', '2016-04-12', '2016-04-20', 'blahing', 'blah', 'jkdsj;a', 'f@v.com', '333-333-3333', 23000, 4, 0, 'fhdkls;hafkl', 'jdksaj;', 'fdkjsa;l', 1),
(3, 'jhon', 'blah ', 'blahblah', 'www.broward.edu', '2016-04-12', '2016-04-20', 'blahing', 'blah', 'jkdsj;a', 'f@v.com', '333-333-3333', 23000, 4, 1, 'fhdkls;hafkl', 'jdksaj;', 'fdkjsa;l', 1),
(4, 'pedro', 'blah', 'blahblah', 'www.broward.edu', '2016-04-12', '2016-04-20', 'blahing', 'blah', 'jkdsj;a', 'f@v.com', '333-333-3333', 23000, 4, 0, 'fhdkls;hafkl', 'jdksaj;', 'fdkjsa;l', 0),
(5, 'jose', 'dfgdfg', 'wefef', 'www.a.com', '2016-04-21', '2016-04-30', 'kjklj', 'jkljkj', 'kojo', 'w@w.com', '100-100-0000', 23, 3, 0, 'joj', 'joj', 'ojkojo', 0),
(6, 'temp web master', 'dfgdfg', 'wefef', 'www.a.com', '2016-04-21', '2016-04-30', 'kjklj', 'jkljkj', 'kojo', 'w@w.com', '100-100-0000', 23, 3, 0, 'joj', 'joj', 'ojkojo', 1),
(7, 'IT support', 'Fix computers', 'support corp', 'www.support.com', '2016-04-04', '2016-04-30', 'all', 'please go to your din office', 'your din', 'din@broward.edu', '111-111-2222', 25000, 10, 0, 'global support company', '23456', 'as', 0),
(8, 'IT', ' computers', 'charly corp', 'www.charly.com', '2016-04-04', '2016-04-30', 'all', 'please visit our website', 'call men', 'me@me.edu', '111-111-2222', 25000, 10, 1, 'global support company', '23456', 'as', 1),
(9, 'xc', 'vfhvgb', 'bvh bj', 'www.nw.com', '2016-04-13', '2016-04-30', 'vghv bn', 'vv bn', 'oinjkl', 'm@m.edu', '999-999-9999', 45, 3, 0, 'huh', 'ibhnimkl', 'hunj', 1);

-- --------------------------------------------------------

--
-- Table structure for table `internshipmajor`
--

CREATE TABLE `internshipmajor` (
  `InternshipID` int(11) NOT NULL,
  `MajorID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internshipmajor`
--

INSERT INTO `internshipmajor` (`InternshipID`, `MajorID`) VALUES
(4, 2149),
(4, 2506),
(5, 2149),
(5, 2195),
(5, 2196),
(5, 2506),
(6, 2503),
(6, 2507),
(9, 2149),
(9, 2506);

-- --------------------------------------------------------

--
-- Table structure for table `major`
--

CREATE TABLE `major` (
  `id` int(11) NOT NULL,
  `name` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `major`
--

INSERT INTO `major` (`id`, `name`) VALUES
(2149, 'Computer Information Technology AS'),
(2195, 'Computer Programming and Analysis AS'),
(2196, 'Internet Services Technology AS'),
(2503, 'Networking Systems Technology AS'),
(2506, 'Computer and Network Security AS'),
(2507, 'Technology Project Management AS');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `ProfileID` int(11) NOT NULL,
  `Interests` text NOT NULL,
  `AboutMe` text NOT NULL,
  `Photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resource`
--

CREATE TABLE `resource` (
  `ResourceID` int(11) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `AuthorType` varchar(125) NOT NULL,
  `Path` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`AccountID`),
  ADD KEY `ProfileID` (`ProfileID`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`CompanyID`),
  ADD UNIQUE KEY `CompanyName` (`CompanyName`);

--
-- Indexes for table `contactperson`
--
ALTER TABLE `contactperson`
  ADD PRIMARY KEY (`ContactID`),
  ADD KEY `CompanyID` (`CompanyID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`CourseID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- Indexes for table `internship`
--
ALTER TABLE `internship`
  ADD PRIMARY KEY (`InternshipID`),
  ADD KEY `CompanyID` (`CompanyID`),
  ADD KEY `ContactID` (`ContactID`);

--
-- Indexes for table `internship2`
--
ALTER TABLE `internship2`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `internshipmajor`
--
ALTER TABLE `internshipmajor`
  ADD PRIMARY KEY (`InternshipID`,`MajorID`),
  ADD KEY `InternshipID` (`InternshipID`),
  ADD KEY `MajorID` (`MajorID`);

--
-- Indexes for table `major`
--
ALTER TABLE `major`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`ProfileID`);

--
-- Indexes for table `resource`
--
ALTER TABLE `resource`
  ADD PRIMARY KEY (`ResourceID`),
  ADD KEY `CategoryID` (`CourseID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `AccountID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `CompanyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contactperson`
--
ALTER TABLE `contactperson`
  MODIFY `ContactID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `internship`
--
ALTER TABLE `internship`
  MODIFY `InternshipID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `internship2`
--
ALTER TABLE `internship2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `ProfileID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `resource`
--
ALTER TABLE `resource`
  MODIFY `ResourceID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`ProfileID`) REFERENCES `profile` (`ProfileID`);

--
-- Constraints for table `contactperson`
--
ALTER TABLE `contactperson`
  ADD CONSTRAINT `contactperson_ibfk_1` FOREIGN KEY (`CompanyID`) REFERENCES `company` (`CompanyID`);

--
-- Constraints for table `internship`
--
ALTER TABLE `internship`
  ADD CONSTRAINT `internship_ibfk_1` FOREIGN KEY (`CompanyID`) REFERENCES `company` (`CompanyID`),
  ADD CONSTRAINT `internship_ibfk_2` FOREIGN KEY (`ContactID`) REFERENCES `contactperson` (`ContactID`);

--
-- Constraints for table `internshipmajor`
--
ALTER TABLE `internshipmajor`
  ADD CONSTRAINT `internshipmajor_ibfk_2` FOREIGN KEY (`MajorID`) REFERENCES `major` (`id`),
  ADD CONSTRAINT `internshipmajor_ibfk_3` FOREIGN KEY (`InternshipID`) REFERENCES `internship2` (`ID`);

--
-- Constraints for table `resource`
--
ALTER TABLE `resource`
  ADD CONSTRAINT `resource_ibfk_1` FOREIGN KEY (`CourseID`) REFERENCES `course` (`CourseID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
