-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Aug 05, 2023 at 04:24 PM
-- Server version: 10.10.2-MariaDB
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolioweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `Id` varchar(3) NOT NULL,
  `Title` varchar(40) NOT NULL,
  `Description` varchar(180) NOT NULL,
  `Image` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`Id`, `Title`, `Description`, `Image`) VALUES
('1', 'Title 1', 'quoto about life', 'image4.jpg'),
('P2', 'Title 2', 'Description of project 2', 'pE:\\Second Year\\2 - i sem\\Web design ICT 2204\\web technology/image5.jpg\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `userauthen`
--

DROP TABLE IF EXISTS `userauthen`;
CREATE TABLE IF NOT EXISTS `userauthen` (
  `usersId` int(12) NOT NULL AUTO_INCREMENT,
  `UsersName` varchar(40) NOT NULL,
  `usersEmail` varchar(40) NOT NULL,
  `usersUId` varchar(40) NOT NULL,
  `userspwd` varchar(40) NOT NULL,
  PRIMARY KEY (`usersId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
