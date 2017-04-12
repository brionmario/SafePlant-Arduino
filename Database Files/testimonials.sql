-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 08, 2017 at 06:18 PM
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
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(5) NOT NULL,
  `comment` varchar(1024) NOT NULL,
  `img_url` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `patient_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `comment`, `img_url`, `name`, `patient_type`) VALUES
(1, 'Thank you very much! Everyone is so friendly and I am very thankful you are in this service to care for us when we need you. Your hours you are available are wonderful. The Doctors answers are very helpfull. I highly recommend it.', 'images/patient-img.png', 'Prashantha Dias', 'Transplant Patient'),
(2, 'Thank you so much for providing such wonderful service! The doctors and their respons were very helpfull and provided me with an exceptional experience. A great service. ', 'images/patient-img.png', 'Sunil Gunawardhana', 'Transplant Patient'),
(3, 'I want to express my sincere appreciation for the promptness and professional care given to my wife. Our experience at this facility was of the quickest and best we have ever encountered. The device , mobile application and web service assist to get best aftercare, I highly recommend SAFE PLANT for aftercare.', 'images/patient-img.png', 'Joshep Fransisco', 'Care Taker');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
