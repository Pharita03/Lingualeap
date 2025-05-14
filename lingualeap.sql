-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2025 at 09:32 AM
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
  `type` varchar(50) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `time` varchar(20) NOT NULL,
  `unitID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`id`, `type`, `score`, `time`, `unitID`) VALUES
(4, 'grammar', 3, '0.30', 1),
(4, 'grammar', 7, '1.16', 1),
(4, 'grammar', 3, '0.36', 1),
(4, 'grammar', 7, '1.9', 1),
(4, 'grammar', 0, '1.3', 1),
(4, 'grammar', 0, '1.3', 1),
(4, 'grammar', 0, '1.1', 1),
(4, 'grammar', 0, '0.38', 1),
(4, 'grammar', 0, '0.40', 1),
(4, 'grammar', 0, '0.47', 1),
(4, 'grammar', 11, '0.53', 1),
(4, 'grammar', 0, '0.47', 1),
(4, 'grammar', 10, '0.46', 1),
(4, 'grammar', 10, '0.55', 1),
(4, 'grammar', 10, '0.55', 1),
(4, 'grammar', 10, '0.55', 1),
(4, 'grammar', 3, '0.41', 2),
(4, 'grammar', 10, '1.9', 4),
(4, 'reading', 4, '1.4', 4),
(4, 'reading', 4, '0.39', 4),
(4, 'vocab', 3, '0.39', 4);

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

--
-- Dumping data for table `testgrammar`
--

INSERT INTO `testgrammar` (`unitID`, `numquiz`, `answer`) VALUES
(1, 1, 'C'),
(1, 2, 'A'),
(1, 3, 'B'),
(1, 4, 'D'),
(1, 5, 'C'),
(1, 6, 'D'),
(1, 7, 'A'),
(1, 8, 'B'),
(1, 9, 'C'),
(1, 10, 'A'),
(2, 1, 'C'),
(2, 2, 'A'),
(2, 3, 'B'),
(2, 4, 'D'),
(2, 5, 'C'),
(2, 6, 'D'),
(2, 7, 'C'),
(2, 8, 'A'),
(2, 9, 'D'),
(2, 10, 'B'),
(3, 1, 'B'),
(3, 2, 'C'),
(3, 3, 'B'),
(3, 4, 'C'),
(3, 5, 'D'),
(3, 6, 'D'),
(3, 7, 'C'),
(3, 8, 'A'),
(3, 9, 'D'),
(3, 10, 'B'),
(4, 1, 'D'),
(4, 2, 'D'),
(4, 3, 'C'),
(4, 4, 'A'),
(4, 5, 'B'),
(4, 6, 'C'),
(4, 7, 'B'),
(4, 8, 'C'),
(4, 9, 'C'),
(4, 10, 'C'),
(5, 1, 'A'),
(5, 2, 'B'),
(5, 3, 'C'),
(5, 4, 'B'),
(5, 5, 'B'),
(5, 6, 'A'),
(5, 7, 'C'),
(5, 8, 'C'),
(5, 9, 'C'),
(5, 10, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `testlisten`
--

CREATE TABLE `testlisten` (
  `unitID` int(11) DEFAULT NULL,
  `numquiz` int(11) DEFAULT NULL,
  `answer` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testlisten`
--

INSERT INTO `testlisten` (`unitID`, `numquiz`, `answer`) VALUES
(1, 1, 'B'),
(1, 2, 'D'),
(1, 3, 'C'),
(1, 4, 'A'),
(1, 5, 'A'),
(1, 6, 'B'),
(2, 1, 'C'),
(2, 2, 'D'),
(2, 3, 'B'),
(2, 4, 'C'),
(2, 5, 'B'),
(2, 6, 'A'),
(3, 1, 'B'),
(3, 2, 'A'),
(3, 3, 'A'),
(3, 4, 'A'),
(3, 5, 'C'),
(3, 6, 'C'),
(3, 7, 'A'),
(3, 8, 'B'),
(3, 9, 'B'),
(3, 10, 'C'),
(4, 1, 'C'),
(4, 2, 'C'),
(4, 3, 'B'),
(4, 4, 'C'),
(4, 5, 'A'),
(4, 6, 'B'),
(4, 7, 'C'),
(4, 8, 'C'),
(4, 9, 'A'),
(4, 10, 'B'),
(5, 1, 'B'),
(5, 2, 'A'),
(5, 3, 'C'),
(5, 4, 'B'),
(5, 5, 'A'),
(5, 6, 'B'),
(5, 7, 'C'),
(5, 8, 'A'),
(5, 9, 'B'),
(5, 10, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `testreading`
--

CREATE TABLE `testreading` (
  `unitID` int(11) DEFAULT NULL,
  `numquiz` int(11) DEFAULT NULL,
  `answer` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testreading`
--

INSERT INTO `testreading` (`unitID`, `numquiz`, `answer`) VALUES
(1, 1, 'B'),
(1, 2, 'C'),
(1, 3, 'B'),
(1, 4, 'A'),
(1, 5, 'C'),
(1, 6, 'B'),
(1, 7, 'D'),
(2, 1, 'C'),
(2, 2, 'A'),
(2, 3, 'A'),
(2, 4, 'B'),
(2, 5, 'A'),
(2, 6, 'B'),
(3, 1, 'D'),
(3, 2, 'C'),
(3, 3, 'C'),
(3, 4, 'B'),
(3, 5, 'D'),
(3, 6, 'D'),
(3, 7, 'C'),
(3, 8, 'A'),
(3, 9, 'B'),
(3, 10, 'D'),
(3, 11, 'D'),
(4, 1, 'B'),
(4, 2, 'C'),
(4, 3, 'B'),
(4, 4, 'C'),
(4, 5, 'C'),
(4, 6, 'B'),
(4, 7, 'D'),
(4, 8, 'B'),
(4, 9, 'B'),
(4, 10, 'C'),
(5, 1, 'B'),
(5, 2, 'A'),
(5, 3, 'D'),
(5, 4, 'A'),
(5, 5, 'C'),
(5, 6, 'C'),
(5, 7, 'B'),
(5, 8, 'D'),
(5, 9, 'B'),
(5, 10, 'D'),
(5, 11, 'B'),
(5, 12, 'C');

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
(1, 10, 'C'),
(2, 1, 'B'),
(2, 2, 'A'),
(2, 3, 'C'),
(2, 4, 'A'),
(2, 5, 'C'),
(2, 6, 'B'),
(2, 7, 'D'),
(2, 8, 'B'),
(2, 9, 'C'),
(2, 10, 'C'),
(3, 1, 'B'),
(3, 2, 'C'),
(3, 3, 'A'),
(3, 4, 'D'),
(3, 5, 'A'),
(3, 6, 'C'),
(3, 7, 'B'),
(3, 8, 'A'),
(3, 9, 'C'),
(3, 10, 'B'),
(4, 1, 'B'),
(4, 2, 'C'),
(4, 3, 'D'),
(4, 4, 'D'),
(4, 5, 'C'),
(4, 6, 'A'),
(4, 7, 'A'),
(4, 8, 'D'),
(4, 9, 'C'),
(4, 10, 'B'),
(5, 1, 'B'),
(5, 2, 'C'),
(5, 3, 'D'),
(5, 4, 'C'),
(5, 5, 'C'),
(5, 6, 'C'),
(5, 7, 'B'),
(5, 8, 'A'),
(5, 9, 'A'),
(5, 10, 'D');

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
(4, 'บทที่4', 'toeic for fun'),
(5, 'บทที่ 5', 'Toeic for fun');

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
  `branch` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `email`, `tel`, `faculty`, `branch`, `password`, `profile`) VALUES
(4, 'pailin', 'utsaha', 'chutikarn11238@gmail.com', '0885804892', 'วิทยาศาสตร์ พลังงานและสิ่งแวดล้อม', 'dscbi', '', ''),
(17, 'chutikarn', 'utsaha', 'linlinny19122546@gmail.com', '0885804892', 'Faculty of Business', 'BACC', '$2y$10$62to6oFZAXrXq.YKmdLWiuQEB7WLnCu52kSsUxkoxNY', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
