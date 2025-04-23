-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2025 at 09:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lingualeap`
--

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `id` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `time` varchar(20) NOT NULL,
  `unitID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacherID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Tel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testgrammar`
--

CREATE TABLE `testgrammar` (
  `unitID` int(11) DEFAULT NULL,
  `numquiz` int(11) DEFAULT NULL,
  `answer` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testlisten`
--

CREATE TABLE `testlisten` (
  `unitID` int(11) DEFAULT NULL,
  `numquiz` int(11) DEFAULT NULL,
  `answer` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testreading`
--

CREATE TABLE `testreading` (
  `unitID` int(11) DEFAULT NULL,
  `numquiz` int(11) DEFAULT NULL,
  `answer` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testvocab`
--

CREATE TABLE `testvocab` (
  `unitID` int(11) DEFAULT NULL,
  `numquiz` int(11) DEFAULT NULL,
  `answer` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testvocab`
--

INSERT INTO `testvocab` (`unitID`, `numquiz`, `answer`) VALUES
(1, 1, 'A'),
(1, 2, 'C'),
(1, 3, 'D'),
(1, 4, 'B'),
(1, 5, 'C'),
(1, 6, 'B'),
(1, 7, 'C'),
(1, 8, 'C'),
(1, 9, 'C'),
(1, 10, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `unitID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unitID`, `name`, `Detail`) VALUES
(1, 'บทที่1', 'toeic for fun'),
(2, 'บทที่2', 'toeic for fun'),
(3, 'บทที่3', 'toeic for fun'),
(4, 'บทที่4', 'toeic for fun');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `email`, `tel`, `faculty`, `branch`) VALUES
(3, 'fyodor', 'jjjj', 's6513031620032@email.kmutnb.ac.th', '0885804892', 'วิทยาศาสตร์ พลังงานและสิ่งแวดล้อม', 'dscbi'),
(4, 'pailin', 'utsaha', 'chutikarn11238@gmail.com', '0885804892', 'วิทยาศาสตร์ พลังงานและสิ่งแวดล้อม', 'dscbi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD KEY `id` (`id`),
  ADD KEY `unitID` (`unitID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacherID`);

--
-- Indexes for table `testgrammar`
--
ALTER TABLE `testgrammar`
  ADD KEY `unitID` (`unitID`);

--
-- Indexes for table `testlisten`
--
ALTER TABLE `testlisten`
  ADD KEY `unitID` (`unitID`);

--
-- Indexes for table `testreading`
--
ALTER TABLE `testreading`
  ADD KEY `unitID` (`unitID`);

--
-- Indexes for table `testvocab`
--
ALTER TABLE `testvocab`
  ADD KEY `unitID` (`unitID`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`unitID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `score_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `score_ibfk_2` FOREIGN KEY (`unitID`) REFERENCES `unit` (`unitID`);

--
-- Constraints for table `testgrammar`
--
ALTER TABLE `testgrammar`
  ADD CONSTRAINT `testgrammar_ibfk_1` FOREIGN KEY (`unitID`) REFERENCES `unit` (`unitID`);

--
-- Constraints for table `testlisten`
--
ALTER TABLE `testlisten`
  ADD CONSTRAINT `testlisten_ibfk_1` FOREIGN KEY (`unitID`) REFERENCES `unit` (`unitID`);

--
-- Constraints for table `testreading`
--
ALTER TABLE `testreading`
  ADD CONSTRAINT `testreading_ibfk_1` FOREIGN KEY (`unitID`) REFERENCES `unit` (`unitID`);

--
-- Constraints for table `testvocab`
--
ALTER TABLE `testvocab`
  ADD CONSTRAINT `testvocab_ibfk_1` FOREIGN KEY (`unitID`) REFERENCES `unit` (`unitID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
