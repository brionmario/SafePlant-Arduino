-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2017 at 12:13 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

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
-- Table structure for table `blog_column2_homepage`
--

CREATE TABLE `blog_column2_homepage` (
  `id` int(11) NOT NULL DEFAULT '0',
  `img_url` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `month_year` varchar(255) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_url` varchar(255) NOT NULL,
  `admin` varchar(255) NOT NULL,
  `admin_url` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_column2_homepage`
--

INSERT INTO `blog_column2_homepage` (`id`, `img_url`, `day`, `month_year`, `blog_title`, `blog_url`, `admin`, `admin_url`, `tags`, `description`) VALUES
(1, 'images/latest-news2.jpg', '3', 'MAR 2', 'Meka Test 1', 'http://www.apareciumlabs.com', 'brion', 'http://brion.apareciumlabs.com', 'Kidney, Chronic', 'This is a test');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
