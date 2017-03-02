-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2017 at 04:17 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `groupproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `ID` int(200) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `computer_science` tinyint(1) NOT NULL DEFAULT '0',
  `computer_science_maths` tinyint(1) NOT NULL DEFAULT '0',
  `computer_science_business` tinyint(1) NOT NULL DEFAULT '0',
  `human_computer_interaction` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`ID`, `Name`, `Description`, `computer_science`, `computer_science_maths`, `computer_science_business`, `human_computer_interaction`) VALUES
(1, 'COMP15112', 'Fundamentals of Computer Architecture is the best course to not understand shit', 0, 0, 0, 0),
(2, 'COMP1211', 'Fundamentals of Computer Engineering is the best course to not understand shit', 0, 0, 0, 0),
(3, 'COMP1112', 'Maths, what the fuck is this', 0, 0, 0, 0),
(4, 'COMP10120', 'First year project, where no one goes to the lectures', 0, 0, 0, 0),
(5, 'COMP16112', 'java, where Latham makes dad jokes and only he laughs at them', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `help_requests`
--

CREATE TABLE `help_requests` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `lab_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `labs`
--

CREATE TABLE `labs` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `lab_description` text NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscribed_user_labs`
--

CREATE TABLE `subscribed_user_labs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `lab_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL,
  `Admin` tinyint(1) NOT NULL DEFAULT '0',
  `Course_type` varchar(200) NOT NULL,
  `Name` text NOT NULL,
  `Surname` text NOT NULL,
  `points` int(11) NOT NULL,
  `ranking` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Email`, `Password`, `Admin`, `Course_type`, `Name`, `Surname`, `points`, `ranking`) VALUES
(1, 'andrej.ivanov@manchester.ac.uk', '$2y$10$NQNhTwRg/C98lrpo9inrj.aHFU5MVEk7Bv6Q7TGmikPKU8ASM7V0O', 0, 'Computer Science', 'Andrej', 'Ivanov', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `labs`
--
ALTER TABLE `labs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `labs`
--
ALTER TABLE `labs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
