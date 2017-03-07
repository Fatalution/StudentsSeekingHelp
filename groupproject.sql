-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2017 at 11:26 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

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
  `ComputerScience` tinyint(1) NOT NULL,
  `ComputerSceinceAndMathematics` tinyint(1) NOT NULL,
  `ComputerScienceAndBusiness` tinyint(1) NOT NULL,
  `HumanComputerInteraction` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`ID`, `Name`, `Description`, `ComputerScience`, `ComputerSceinceAndMathematics`, `ComputerScienceAndBusiness`, `HumanComputerInteraction`) VALUES
(1, 'COMP15111', 'Fundamentals of Computer Architecture ', 1, 0, 0, 0),
(2, 'COMP12111', 'Fundamentals of Computer Engineering', 1, 0, 0, 0),
(3, 'COMP11120', 'Mathematical Techniques for Computer Science', 1, 1, 1, 1),
(4, 'COMP10120', 'First year project', 1, 1, 1, 1),
(5, 'COMP16121', 'Object Oriented Programming in Java', 1, 1, 1, 1);

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

--
-- Dumping data for table `help_requests`
--

INSERT INTO `help_requests` (`id`, `user_id`, `lab_id`, `date`) VALUES
(17, 4, 1, '0000-00-00'),
(16, 3, 2, '0000-00-00'),
(15, 3, 2, '0000-00-00'),
(18, 4, 1, '0000-00-00'),
(20, 4, 1, '0000-00-00'),
(21, 4, 2, '0000-00-00'),
(22, 4, 1, '0000-00-00'),
(23, 4, 2, '0000-00-00'),
(24, 4, 2, '0000-00-00'),
(25, 4, 1, '0000-00-00'),
(26, 4, 2, '0000-00-00'),
(27, 4, 2, '0000-00-00'),
(28, 4, 1, '0000-00-00'),
(29, 4, 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `labs`
--

CREATE TABLE `labs` (
  `id` int(11) NOT NULL,
  `course_id` text NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `lab_description` text NOT NULL,
  `date` date NOT NULL,
  `topic` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labs`
--

INSERT INTO `labs` (`id`, `course_id`, `course_name`, `lab_description`, `date`, `topic`) VALUES
(1, 'COMP16121', 'Java', 'First lab', '2017-03-22', 'Introduction I'),
(2, 'COMP16121', 'Java', 'Second lab', '2017-03-15', 'Introduction 2'),
(3, 'COMP12111', 'Engineering', 'fsd', '0000-00-00', ''),
(4, 'COMP16121', 'Java', 'Third lab', '0000-00-00', 'Basic operators');

-- --------------------------------------------------------

--
-- Table structure for table `subscribed_user_labs`
--

CREATE TABLE `subscribed_user_labs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `lab_id` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribed_user_labs`
--

INSERT INTO `subscribed_user_labs` (`id`, `user_id`, `lab_id`, `date`) VALUES
(1, 4, 1, '0000-00-00 00:00:00'),
(2, 4, 2, '0000-00-00 00:00:00'),
(3, 4, 2, '0000-00-00 00:00:00'),
(4, 4, 1, '0000-00-00 00:00:00'),
(5, 4, 4, '0000-00-00 00:00:00');

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
  `Surname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Email`, `Password`, `Admin`, `Course_type`, `Name`, `Surname`) VALUES
(4, 'andrej.ivanov@manchester.ac.uk', '$2y$10$zIG7S0USI651JR7JcZ7tM.SGqaHKlR1fylEAFF2q/nuF9HubemIhm', 0, 'Computer Science', 'Andrej', 'Ivanov'),
(5, 'andrej.andrej@manchester.ac.uk', '$2y$10$hNGAXQrgvZ7JO/gSw4k/vum4SlcKK5Yxk6NEliibjmnNtS93d/aiK', 0, 'Computer Sceince and Mathematics', 'Andrej ', 'Andrej'),
(6, 'aa.aa@manchester.ac.uk', '$2y$10$kQ723MD2kHKBwTZWJ/VpLOzL69Wpxlb8RqCpTGa55yC2fV5sAUzgi', 0, 'Computer Sceince and Mathematics', 'aa', 'aa'),
(7, 'jeremy.williams@manchester.ac.uk', '$2y$10$xXguVNRSHW.bBq7I8OUUueArfYvP/ODDEASZnmBVY1k30NifdacXW', 0, 'Computer Science and Business', 'jeremy', 'williams');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `help_requests`
--
ALTER TABLE `help_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labs`
--
ALTER TABLE `labs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribed_user_labs`
--
ALTER TABLE `subscribed_user_labs`
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
-- AUTO_INCREMENT for table `help_requests`
--
ALTER TABLE `help_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `labs`
--
ALTER TABLE `labs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `subscribed_user_labs`
--
ALTER TABLE `subscribed_user_labs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
