-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2017 at 06:16 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` varchar(20) NOT NULL,
  `book_title` varchar(200) NOT NULL,
  `Dept` varchar(20) NOT NULL,
  `Pub` varchar(30) NOT NULL,
  `shell` varchar(5) NOT NULL,
  `Auth` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_title`, `Dept`, `Pub`, `shell`, `Auth`) VALUES
('112464', 'Data Structures and Algorithms Second Edition (2015)', 'Computer Eng.', 'Career Monk Publication', '1(C)', 'Narasimha Karumanchi'),
('124515', 'Formwork For Concrete Structures (2016)', 'Civil Eng.', 'McGraw Hill', '3(B)', 'Garold (Gary) D. Oberlender and Robert L Peurifoy'),
('231451', 'Object Oriented Software Engineering (2015)', 'Computer Eng.', 'McGraw Hill', '2(C)', 'David C. Kung'),
('353124', 'Introduction To Computing And Problem Solving Using Python (2016)', 'Computer Eng.', 'McGraw Hill', '2(A)', 'E. Balaguruswamy'),
('415346', 'Groundwater Hydrology (2012)', 'Civil Eng.', 'McGraw Hill', '3(D)', 'Bhagu R Chahar'),
('451346', 'Building Materials And Construction (2016)', 'Civil Eng.', 'McGraw Hill', '3(B)', 'G. C Sahu and Joygopal Jenna'),
('501236', 'Insttrumenttion Measurement & Analysis (2016)', 'Electronic Eng.', 'McGraw Hill', '3(C)', 'B.C. Nakra and K.K. Chaudhry'),
('501346', 'Digital Signal Processing \r\n(2015)', 'Electronic Eng.', 'McGraw Hill', '2(D)', 'S Salivahanans'),
('784265', 'Programming In Ansi C (2016)', 'Computer Eng.', 'McGraw Hill', '2(C)', 'David C. Kung'),
('824631', 'Intro To Embedded Systems (2016)', 'Computer Eng.', 'McGraw Hill', '2(B)', 'K. V Shibu'),
('863214', 'Linear Integrated Circuits (2015)', 'Electronic Eng.', 'McGraw Hill', '2(E)', 'S Salivahanans and V. S. Kanchana Bhaaskaran'),
('954132', 'Operating Systems', 'Computer Eng.', 'Nandu Publications', '5(A)', 'Amar Panchal'),
('973164', 'Computer Networks Simplified', 'Computer Eng.', 'Nandu Publications', '5(B)', 'Sushil Chandiramani');

-- --------------------------------------------------------

--
-- Table structure for table `b_list`
--

CREATE TABLE `b_list` (
  `B_id` varchar(20) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `book_id` varchar(30) NOT NULL,
  `b_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lib`
--

CREATE TABLE `lib` (
  `Userid` varchar(100) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lib`
--

INSERT INTO `lib` (`Userid`, `Username`, `Password`, `Type`) VALUES
('admin', 'Admin', 'admin', 1),
('pvpp1234', 'Aniket B. Ballal', '123456', 0),
('pvpp1235', 'Shirish M. Patil', '123456', 0),
('pvpp2345', 'Sanjay Attarde', '123456', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Userid` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Borrowed` int(11) NOT NULL,
  `B_limit` int(11) NOT NULL,
  `Overdue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Userid`, `Username`, `Borrowed`, `B_limit`, `Overdue`) VALUES
('0231031', 'Arjun Sahani', 0, 3, 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `b_list`
--
ALTER TABLE `b_list`
  ADD PRIMARY KEY (`B_id`);

--
-- Indexes for table `lib`
--
ALTER TABLE `lib`
  ADD PRIMARY KEY (`Userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
