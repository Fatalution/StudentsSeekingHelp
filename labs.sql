-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2017 at 12:01 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `group project`
--

-- --------------------------------------------------------

--
-- Table structure for table `labs`
--

CREATE TABLE `labs` (
  `id` int(11) NOT NULL,
  `course_id` text NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `lab_description` text NOT NULL,
  `week` int(11) NOT NULL,
  `topic` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labs`
--

INSERT INTO `labs` (`id`, `course_id`, `course_name`, `lab_description`, `week`, `topic`) VALUES
(1, 'COMP16121', 'Object Oriented Programming with Java 1', 'First lab', 2, 'Introduction '),
(2, 'COMP16121', 'Object Oriented Programming with Java 1', 'Second lab', 3, 'Sequential Execution and Program Errors'),
(3, 'COMP12111', 'Object Oriented Programming with Java 1', 'Third lab', 4, 'Conditional Execution'),
(4, 'COMP16121', 'Object Oriented Programming with Java 1', 'Fourth lab', 5, 'Repeated Execution'),
(5, 'COMP16121', 'Object Oriented Programming with Java 1', 'Fifth lab', 7, 'Separate Methods and Logical Operators'),
(6, 'COMP16121', 'Object Oriented Programming with Java 1', 'Sixth lab', 8, 'Separate Classes'),
(7, 'COMP16121', 'Object Oriented Programming with Java 1', 'Seventh lab', 9, 'Object Oriented Design'),
(8, 'COMP16121', 'Object Oriented Programming with Java 1', 'Eighth lab', 10, 'Graphical User Interfaces'),
(9, 'COMP16121', 'Object Oriented Programming with Java 1', 'Ninth lab', 11, 'Graphical User Interfaces(II)'),
(10, 'COMP16121', 'Object Oriented Programming with Java 1', 'Tenth lab', 12, 'Arrays'),
(11, 'COMP15111', 'Fundamentals of Computer Architecture', 'First lab', 2, 'An Introduction to KMD'),
(12, 'COMP15111', 'Fundamentals of Computer Architecture', 'Second lab', 4, 'Control Structures'),
(13, 'COMP15111', 'Fundamentals of Computer Architecture', 'Third lab', 7, 'Addressing'),
(14, 'COMP15111', 'Fundamentals of Computer Architecture', 'Fourth lab', 9, 'Methods and (more) Control Structures'),
(15, 'COMP15111', 'Fundamentals of Computer Architecture', 'Fifth lab', 11, 'A Simple Virtual Machine'),
(16, 'COMP12111', 'Fundamentals of Computer Engineering', 'First lab', 2, 'Binary Addition'),
(17, 'COMP12111', 'Fundamentals of Computer Engineering', 'Second lab', 4, 'The Seven Segment Decoder'),
(18, 'COMP12111', 'Fundamentals of Computer Engineering', 'Third lab', 7, 'Finite State Machines and Counters'),
(19, 'COMP12111', 'Fundamentals of Computer Engineering', 'Fourth lab', 9, 'MU0 - A Microprocessor System'),
(20, 'COMP12111', 'Fundamentals of Computer Engineering', 'Fifth lab', 11, 'Programming MU0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `labs`
--
ALTER TABLE `labs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `labs`
--
ALTER TABLE `labs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
