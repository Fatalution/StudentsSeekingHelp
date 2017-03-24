-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2017 at 04:56 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ssh`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `user1_id` int(11) NOT NULL,
  `user2_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `request_id`, `user1_id`, `user2_id`) VALUES
(3, 27, 0, 4),
(4, 28, 0, 0),
(5, 28, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `ID` int(200) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `ComputerScience` tinyint(1) NOT NULL,
  `ComputerScienceAndMathematics` tinyint(1) NOT NULL,
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
  `date` date NOT NULL,
  `helper_id` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `help_requests`
--

INSERT INTO `help_requests` (`id`, `user_id`, `lab_id`, `date`, `helper_id`, `status`) VALUES
(27, 20, 1, '2017-03-10', 4, 'pending'),
(28, 4, 1, '0000-00-00', 0, 'unresolved'),
(29, 4, 1, '0000-00-00', 0, 'unresolved');

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

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `request_id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscribed_user_labs`
--

CREATE TABLE `subscribed_user_labs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `lab_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `status` text NOT NULL,
  `request_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribed_user_labs`
--

INSERT INTO `subscribed_user_labs` (`id`, `user_id`, `lab_id`, `date`, `status`, `request_id`) VALUES
(11, 4, 1, '0000-00-00 00:00:00', 'active', 27);

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
(7, 'jeremy.williams@manchester.ac.uk', '$2y$10$xXguVNRSHW.bBq7I8OUUueArfYvP/ODDEASZnmBVY1k30NifdacXW', 0, 'Computer Science and Business', 'jeremy', 'williams'),
(8, 'tsvetan.mirkov@manchester.ac.uk', '$2y$10$FSOoVHOBjaM5ZLKt9fWbAOkOORSwUK5695rLSWAg8IlwEp80pc3DG', 0, 'Computer Science', 'Tsvetan', 'Mirkov'),
(9, 'a@student.manchester.ac.uk', '$2y$10$CUPLgRTmhHWkjqtig8MFhev9PX5HqRwMGB/dUcUSdEKBzPFxBjIJG', 0, 'Computer Science', 'fd', 'df'),
(10, 'a.b@student.manchester.ac.uk', '$2y$10$.7.ltLT8eQoS2cBNP9Lp1O1dn95f1NCq3EMytZfCvSOXTqmyXJEE.', 0, 'Computer Sceince and Mathematics', 'a', 'b'),
(11, 'simon.paul@student.manchester.ac.uk', '$2y$10$ACN4.XXZEFMY/mcwGX8/H.AoiHoYvFKIaBaM5wcmY1hDyUso1cBD.', 0, 'Computer Science', 'Simon', 'Paul');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

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
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subscribed_user_labs`
--
ALTER TABLE `subscribed_user_labs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
