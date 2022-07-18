-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 02:27 PM
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
  `checkFLSC` varchar(20) NOT NULL,
  `CheckSSCE` varchar(20) NOT NULL,
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
  `dateofRegular` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_info`
--

INSERT INTO `staff_info` (`id`, `passport`, `qualification`, `fslc_file`, `ssce_file`, `under_g_file`, `pg_file`, `inputfirstname`, `checkPG`, `checkFLSC`, `CheckSSCE`, `checkUNDERG`, `inputGradeLevel`, `inputTraining`, `inputAdhoc`, `inputSchedule`, `inputUnit`, `inputDivision`, `inputDepartment`, `PlaceofAp`, `AnyTransfer`, `dateofConfirm`, `datePresentAp`, `dateofAssuption`, `dateFirstAp`, `inputSalaryPaypoint`, `inputAccountType`, `inputAccountNumber`, `inputAccountName`, `inputBankName`, `inputIPPIS`, `inputQUAL`, `inputFSLC`, `inputSSCE`, `inputUNDERG`, `inputPG`, `inputmaritalstatus`, `inputgender`, `inputemail`, `inputlocalgovt`, `inputState`, `inputcountry`, `inputAddress2`, `inputAddress`, `inputothernames`, `file_no`, `dob`, `dateofRegular`, `created_at`, `updated_at`) VALUES
(1, 'uploads/1Gqd5BfW0r.jpg', 'uploads/LXP4Im75Mo.png', 'uploads/27pN6CbZOP.png', 'uploads/f2ZSL8KvbF.png', 'uploads/oiXkNelrO2.png', 'uploads/Jxq9oQvOMe.jpg', 'Nwafor', 'POSTGRADUATE', '', '', 'UNDERGRADUTAE', 'Second Class/Level 9', 'PMP training', 'Ad hoc', 'New Duty', 'Members', 'Host', 'Hosting', 'University School', '2022-06-25', '2022-06-24', '2022-06-24', '2022-06-24', '2022-06-24', '2000', 'Savings', '2545785878', 'Okoye Emma', 'Access Bank', '98767', 'PMP,HRM', 'University Primary', 'Unversity Secondary School', 'UNN', 'ESUT', 'Single', 'Female', 'ikenna@mail.com', 'Igbo-Eze', 'enugu', 'Nigeria', 'Beach Junction', 'ubollo road', 'Ifeoma', '54747', '2022-06-24', '2022-07-18 13:20:16', '2022-06-24 20:12:13', '2022-06-24 20:12:13'),
(39, 'uploads/LNeVOT8mPR.jpg', 'a:3:{i:0;s:22:\"uploads/CBxi3RFr2Y.jpg\";i:1;s:22:\"uploads/kZQxA8NOmt.jpg\";i:2;s:22:\"uploads/6wjV0OFeZK.jpg\";}', 'uploads/twUzKu3nSE.jpg', 'uploads/DUfNOymuLe.jpg', 'uploads/m43XUIlSdr.jpg', 'uploads/0Nr7CJsuLF.jpg', 'Okoye', 'POSTGRADUATE', 'FSLC', 'SSCE', 'UNDERGRADUTAE', '1st class', 'Under the hood', 'adhoc', '12 noon', 'Uni', 'Division', 'Sales', 'Enugu', '2022-07-13', '2022-07-13', '2022-07-13', '2022-07-13', '2022-07-13', '983939', 'Saving', '94849484938493', 'Okoye Emma', 'Access', '03748343', 'Anambra', 'boys scout', 'Learning', 'unn', 'UNN', 'Single', 'Male', 'chuksdsilenwts@gmail.com', 'Igbo-eze', 'anambra', 'Nigeria', 'address 2', 'No. 1 Anene Street', 'ifeoma', '0394', '2022-07-13', '2022-07-18 13:20:16', '2022-07-13 02:10:28', '2022-07-13 02:10:28'),
(40, 'uploads/JnxjwOgNGV.jpg', 'a:3:{i:0;s:22:\"uploads/aIyChjts05.jpg\";i:1;s:22:\"uploads/EYP6f3mUgd.jpg\";i:2;s:22:\"uploads/Fv9zlMLixG.jpg\";}', 'uploads/iy17NVOZTb.jpg', 'uploads/2WCiquXFO8.jpg', 'uploads/37EYCQhoqW.jpg', 'uploads/H4u9dfnygr.jpg', 'Okoye', 'POSTGRADUATE', 'FSLC', 'SSCE', 'UNDERGRADUTAE', '1st class', 'Under the hood', 'adhoc', '12 noon', 'Uni', 'Division', 'Sales', 'Enugu', '2022-07-14', '2022-07-14', '2022-07-14', '2022-07-14', '2022-07-14', '983939', 'Saving', '94849484938493', 'Okoye Emma', 'Access', '037483789', 'Anambra', 'boys scout', 'Learning', 'unn', 'UNN', 'Single', 'Male', 'chuksdsilent@gmail.com', 'Igbo-eze', 'anambra', 'Nigeria', 'new address', 'No. 1 Anene Street', 'ifeoma', '2548785745', '2022-07-14', '2022-07-18 13:20:16', '2022-07-14 13:11:23', '2022-07-14 13:11:23');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff_info`
--
ALTER TABLE `staff_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
