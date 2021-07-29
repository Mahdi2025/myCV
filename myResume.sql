-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 29, 2021 at 11:45 AM
-- Server version: 8.0.25-0ubuntu0.21.04.1
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2021`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int NOT NULL,
  `userid` int NOT NULL,
  `fromyear` varchar(20) NOT NULL,
  `toyear` varchar(20) NOT NULL,
  `college` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `userid`, `fromyear`, `toyear`, `college`, `course`, `description`) VALUES
(1, 1, '2005', '2006', 'baccalaureat degree tunisia', 'MCITP', ''),
(2, 1, '2010', '2011', 'ideeictopleidinggroep', 'MCITP', 'linux administrator');

-- --------------------------------------------------------

--
-- Table structure for table `employment`
--

CREATE TABLE `employment` (
  `id` int NOT NULL,
  `userid` int NOT NULL,
  `fromyear` varchar(20) NOT NULL,
  `toyear` varchar(20) NOT NULL,
  `company` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employment`
--

INSERT INTO `employment` (`id`, `userid`, `fromyear`, `toyear`, `company`, `designation`, `description`) VALUES
(1, 1, '2005', '2007', 'COMMODO CONSEQUAT', 'WEB developper', 'Door de studie IT heb ik geleerd\r\ncomplexe problemen pragmatisch en\r\nsystematisch op te lossen. Ik ben in staat\r\nom in verschillende situaties\r\ndaadkrachtig te blijven. Mijn omgeving\r\nvindt mij ondernemend, doordat ik thuis\r\nwerk aan verschillende opdrachten met\r\nvirtuele machines (Oracle en Vmware).\r\nOok ben ik punctueel');

-- --------------------------------------------------------

--
-- Table structure for table `hobbies`
--

CREATE TABLE `hobbies` (
  `id` int NOT NULL,
  `userid` int NOT NULL,
  `hobbies` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hobbies`
--

INSERT INTO `hobbies` (`id`, `userid`, `hobbies`) VALUES
(1, 0, 'fotographeren');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int NOT NULL,
  `userid` int NOT NULL,
  `skilltype` varchar(20) NOT NULL,
  `skill` varchar(50) NOT NULL,
  `skillvalue` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `userid`, `skilltype`, `skill`, `skillvalue`) VALUES
(1, 0, 'progskill', 'node.js', 60),
(2, 0, 'progskill', 'PHP', 60),
(3, 0, 'progskill', 'HTML', 70),
(4, 0, 'progskill', 'CSS', 70),
(5, 0, 'progskill', 'MySQL', 70),
(6, 0, 'progskill', 'JavaScript', 65),
(7, 0, 'graphskill', 'MongoDB', 70);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int NOT NULL,
  `position` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `age`, `position`, `image`) VALUES
(1, 'MAHDI BEN AMEUR', 'mahdi.benameur1@gmail.com', 39, 'webdevelopper', 'images/user_photo.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `employment`
--
ALTER TABLE `employment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `hobbies`
--
ALTER TABLE `hobbies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `position` (`position`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employment`
--
ALTER TABLE `employment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hobbies`
--
ALTER TABLE `hobbies`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;