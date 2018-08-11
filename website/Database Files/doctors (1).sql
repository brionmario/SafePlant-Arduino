-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2017 at 05:47 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `safeplant`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doc_Id` int(10) NOT NULL,
  `doc_Name` varchar(50) NOT NULL,
  `doc_Post` varchar(50) NOT NULL,
  `doc_Description` varchar(500) NOT NULL,
  `doc_image` varchar(30) NOT NULL,
  `doc_Social` varchar(50) NOT NULL,
  `doc_View` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doc_Id`, `doc_Name`, `doc_Post`, `doc_Description`, `doc_image`, `doc_Social`, `doc_View`) VALUES
(1, 'DR. Kamal Perera', 'Gerneral Consultant', 'Medical Practitioner who specializes in general or internal medicine (diagnosing & treatment) other than surgical means.', 'images/gallery-img7.jpg', '', ''),
(2, 'DR. Prasanna De Silva', 'Head of the Department', 'A surgeon who has experience in kidney transplants.', 'images/doctor-img2.jpg', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doc_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doc_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
