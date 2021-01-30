-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2020 at 09:09 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_name` varchar(25) NOT NULL,
  `admin_pass` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_pass`) VALUES
(1, 'kausar', 'virus75');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `name` varchar(50) NOT NULL,
  `blood_group` varchar(15) NOT NULL,
  `last_donation_date` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact_no` int(15) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `date_of_birth` date NOT NULL,
  `living_district` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`name`, `blood_group`, `last_donation_date`, `gender`, `contact_no`, `weight`, `date_of_birth`, `living_district`, `email`, `id`) VALUES
('Md. Abu Kausar', 'A+', '2019-12-07', 'Male', 1920455692, '90', '1995-12-01', 'Dhaka', 'abu.kausar01@northsouth.edu', 5),
('abu', 'A+', '2017-12-10', 'Male', 1920455692, '90', '1997-12-10', 'Dhaka', 'abukausar33@gmail.com', 6),
('Istiaq', 'AB+', '2019-12-18', 'Male', 1718795440, '60', '2016-07-06', 'Magura', 'khalidistiaq237@gmail.com', 11),
('nasif reza', 'B_', '2019-12-03', 'Male', 0, '55', '2020-02-12', 'Dhaka', 'nasif.reza@northsouth.edu', 12);

-- --------------------------------------------------------

--
-- Table structure for table `request_for_blood`
--

CREATE TABLE `request_for_blood` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `blood_group` varchar(20) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `contact` int(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `complete` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_for_blood`
--

INSERT INTO `request_for_blood` (`id`, `name`, `blood_group`, `amount`, `contact`, `address`, `date`, `complete`) VALUES
(12, 'david malan', 'A+', '2', 1521446055, 'Bashundhara, Dhaka', '2019-12-10', 'Yes'),
(14, 'david malan', 'A+', '2', 1521446055, 'Bashundhara, Dhaka', '2019-12-21', 'Yes'),
(17, 'abu', 'A+', '2', 1521446055, 'Dhaka', '2019-12-26', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(10) UNSIGNED NOT NULL,
  `group_name` varchar(5) NOT NULL,
  `avail` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `group_name`, `avail`) VALUES
(1, 'A+', 'Yes'),
(2, 'A-', 'Yes'),
(3, 'AB+', 'Yes'),
(4, 'AB-', 'No'),
(5, 'B+', 'No'),
(6, 'B-', 'No'),
(7, 'O+', 'No'),
(8, 'O-', 'No');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_for_blood`
--
ALTER TABLE `request_for_blood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `group_name` (`group_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `request_for_blood`
--
ALTER TABLE `request_for_blood`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
