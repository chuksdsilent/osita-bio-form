-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2022 at 10:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bio_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `staff_info`
--

CREATE TABLE `staff_info` (
  `id` int(11) NOT NULL,
  `passport` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `fslc_file` varchar(255) DEFAULT NULL,
  `ssce_file` varchar(255) DEFAULT NULL,
  `under_g_file` varchar(255) DEFAULT NULL,
  `pg_file` varchar(255) DEFAULT NULL,
  `inputfirstname` varchar(255) NOT NULL,
  `checkPG` varchar(255) NOT NULL,
  `checkUNDERG` varchar(255) NOT NULL,
  `inputGradeLevel` varchar(255) NOT NULL,
  `inputTraining` varchar(255) NOT NULL,
  `inputAdhoc` varchar(255) NOT NULL,
  `inputSchedule` varchar(255) NOT NULL,
  `inputUnit` varchar(255) NOT NULL,
  `inputDivision` varchar(255) NOT NULL,
  `inputDepartment` varchar(255) NOT NULL,
  `PlaceofAp` varchar(255) NOT NULL,
  `AnyTransfer` varchar(255) NOT NULL,
  `dateofConfirm` date NOT NULL,
  `datePresentAp` date NOT NULL,
  `dateofAssuption` date NOT NULL,
  `dateFirstAp` date NOT NULL,
  `inputSalaryPaypoint` varchar(255) NOT NULL,
  `inputAccountType` varchar(255) NOT NULL,
  `inputAccountNumber` varchar(255) NOT NULL,
  `inputAccountName` varchar(255) NOT NULL,
  `inputBankName` varchar(255) NOT NULL,
  `inputIPPIS` varchar(255) NOT NULL,
  `inputQUAL` varchar(255) NOT NULL,
  `inputFSLC` varchar(255) NOT NULL,
  `inputSSCE` varchar(255) NOT NULL,
  `inputUNDERG` varchar(255) NOT NULL,
  `inputPG` varchar(255) NOT NULL,
  `inputmaritalstatus` varchar(255) NOT NULL,
  `inputgender` varchar(255) NOT NULL,
  `inputemail` varchar(255) NOT NULL,
  `inputlocalgovt` varchar(255) NOT NULL,
  `inputState` varchar(255) NOT NULL,
  `inputcountry` varchar(255) NOT NULL,
  `inputAddress2` varchar(255) NOT NULL,
  `inputAddress` varchar(255) NOT NULL,
  `inputothernames` varchar(255) NOT NULL,
  `file_no` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin@mail.com', '123456', '2022-06-18 00:55:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staff_info`
--
ALTER TABLE `staff_info`
  ADD PRIMARY KEY (`id`,`inputfirstname`),
  ADD UNIQUE KEY `file_no` (`file_no`),
  ADD UNIQUE KEY `inputemail` (`inputemail`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff_info`
--
ALTER TABLE `staff_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
