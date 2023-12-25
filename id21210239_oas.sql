-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 25, 2023 at 07:50 PM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id21210239_oas`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `ques` varchar(500) DEFAULT NULL,
  `a1` varchar(100) DEFAULT NULL,
  `a2` varchar(100) DEFAULT NULL,
  `a3` varchar(100) DEFAULT NULL,
  `a4` varchar(100) DEFAULT NULL,
  `val` int(11) DEFAULT NULL,
  `Qno` int(11) DEFAULT NULL,
  `Sett` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`ques`, `a1`, `a2`, `a3`, `a4`, `val`, `Qno`, `Sett`) VALUES
('What is the full form of SQL?', 'Structured Question Language', 'Standard Query Language', 'Structured Query Language', 'Sequential Question Language', 3, 1, 1),
('Which of the following can read and render HTML web pages?', 'server', 'head tak', 'web browser', 'empty', 3, 2, NULL),
('The latest HTML standard is', 'HTML 4.0', 'HTML 5.0', 'XML', 'SGML', 2, 3, 1),
('Who is the father of Computers?', 'James Gosling', 'Charles Babbage', 'Dennis Ritchie', 'Bjarne Stroustrup', 2, 4, 1),
(' Which of the following language does the computer understand?', 'C Language', 'Assembly Language', 'only Binary Language', 'only BASIC', 3, 5, 1),
('Which of the following is the smallest unit of data in a computer?', 'Bit', 'KB', 'Nibble', 'Byte', 1, 6, 1),
('Which of the following is the device used for converting maps, pictures, and drawings into digital form for storage in computers?', 'Image Scanner', 'Digitizer', 'MICR', 'Scanner', 2, 7, 1),
('Which of the following service allows a user to log in to another computer somewhere on the Internet?', 'e-mail', 'UseNet', 'Telnet', 'FTP', 3, 8, 1),
('A small data file in the browser.', 'Cookie', 'Web Server', 'FTP', 'Database', 1, 9, 1),
('Which of the following natural element is the primary element in computer chips?', 'Silicon', 'Carbon', 'Iron', 'Uranium', 1, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `Slno` int(5) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `pswd` varchar(100) DEFAULT NULL,
  `img` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`Slno`, `name`, `dob`, `address`, `email`, `pswd`, `img`) VALUES
(1, 'Rahul', '2000-07-07', 'Pune', 'rahul1234@gmail.com', '1234', 'rahul.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `uid` int(11) NOT NULL,
  `date` varchar(20) DEFAULT NULL,
  `sett` date DEFAULT NULL,
  `correct_answer` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`Slno`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `Slno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
