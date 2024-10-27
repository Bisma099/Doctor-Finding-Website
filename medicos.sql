-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 09:17 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicos`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `acc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`, `id`, `acc`) VALUES
('admin', '$2y$10$nWIga7jZ/xUGD4UfxRWJIeVcwWjgcwFpcM7GMED2V/ROf9riaPXXW', 1, ''),
('admin', '$2y$10$nWIga7jZ/xUGD4UfxRWJIeVcwWjgcwFpcM7GMED2V/ROf9riaPXXW', 2, ''),
('admin@google.com', '$2y$10$PDAUOTn4EWXqlkRnMSQ.vurY8772qHhqtrh6tHtqaPDVs0u3TV.dK', 3, 'Bank name: HBL private limited                      Account name: BJ                                 Credit Card Number: 4862639446832416                          IBAN: PK31HABB7675788593939839                 Branch Code: 0150                Swift code: ');

-- --------------------------------------------------------

--
-- Table structure for table `apttime`
--

CREATE TABLE `apttime` (
  `drname` varchar(255) NOT NULL,
  `dated` varchar(255) NOT NULL,
  `starttime` varchar(255) NOT NULL,
  `endtime` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `special` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `booked` varchar(255) NOT NULL,
  `drid` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `fees` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apttime`
--

INSERT INTO `apttime` (`drname`, `dated`, `starttime`, `endtime`, `total`, `special`, `gender`, `service`, `address`, `degree`, `booked`, `drid`, `id`, `profile`, `fees`) VALUES
('Akram Mughal', '2023-05-28', 'any', 'any', '10', 'Eye Specialist', 'Male', 'checkup ', 'lahore', 'MBBS', '', '14', 34, '643da3211ba921.57722650.jpg', '500'),
('Zara Khan', '2023-05-28', 'any', 'any', '10', 'Dermatologist', 'female', 'checkup ', 'hyderabad', 'MBBS', '', '15', 35, '643da53b085ed8.02955925.jpg', '500'),
('Aslam', '2023-05-28', 'any', 'any', '10', 'Cardiologist', 'Male', 'checkup ', 'karachi', 'MBBS', '', '13', 36, '643da004b198f7.54740076.jpg', '800');

-- --------------------------------------------------------

--
-- Table structure for table `bookedapt`
--

CREATE TABLE `bookedapt` (
  `drname` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pnumber` varchar(255) NOT NULL,
  `dated` varchar(255) NOT NULL,
  `services` varchar(255) NOT NULL,
  `timed` varchar(255) NOT NULL,
  `starttime` varchar(255) NOT NULL,
  `endtime` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `pid` varchar(255) NOT NULL,
  `drid` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `dprofile` varchar(255) NOT NULL,
  `paddress` varchar(255) NOT NULL,
  `pdob` varchar(255) NOT NULL,
  `pgender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookedapt`
--

INSERT INTO `bookedapt` (`drname`, `pname`, `pnumber`, `dated`, `services`, `timed`, `starttime`, `endtime`, `address`, `id`, `pid`, `drid`, `status`, `profile`, `dprofile`, `paddress`, `pdob`, `pgender`) VALUES
('Aslam', 'Ali Khan', '0323837488', '2023-04-17', 'checkup ', '07:00 PM', 'any', 'any', 'karachi', 36, '17', '13', 'confirmed', '', '643da004b198f7.54740076.jpg', '', '2022-10-18', 'Male'),
('Akram Mughal', 'Aslam', '0323455677', '2023-04-17', 'checkup ', '06:20 PM', 'any', 'any', 'lahore', 37, '18', '14', 'confirmed', '643db38084fcc2.02038201.png', '643da3211ba921.57722650.jpg', 'Hyderabad', '2023-04-13', 'Male'),
('Zara Khan', 'Ali Khan', '0323837488', '2023-04-17', 'checkup ', '07:00 PM', 'any', 'any', 'hyderabad', 38, '17', '15', 'confirmed', '', '643da53b085ed8.02955925.jpg', '', '2022-10-18', 'Male'),
('Akram Mughal', 'Aslam', '0323455677', '2023-04-17', 'checkup ', '06:20 PM', 'any', 'any', 'lahore', 39, '18', '14', 'booked', '643db38084fcc2.02038201.png', '643da3211ba921.57722650.jpg', 'Hyderabad', '2023-04-13', 'Male'),
('Aslam', 'Ali Khan', '3323894137', '2023-05-03', 'checkup ', '06:40 PM', 'any', 'any', 'karachi', 40, '19', '13', 'booked', '6441a12658b026.91026742.png', '643da004b198f7.54740076.jpg', '', '2005-11-16', 'Male'),
('Zara Khan', 'Ali Khan', '3323894137', '2023-05-28', 'checkup ', '07:00 PM', 'any', 'any', 'hyderabad', 41, '19', '15', 'confirmed', '6441a12658b026.91026742.png', '643da53b085ed8.02955925.jpg', '', '2005-11-16', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `aboutus` varchar(300) NOT NULL,
  `terms` varchar(300) NOT NULL,
  `policy` varchar(300) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cnic`
--

CREATE TABLE `cnic` (
  `id` int(111) NOT NULL,
  `cnic` varchar(255) NOT NULL,
  `nicn` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `drid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cnic`
--

INSERT INTO `cnic` (`id`, `cnic`, `nicn`, `name`, `fname`, `drid`) VALUES
(11, '643d9fec99f157.75171090.jpg', 'Asalam', 'Ali akbar', '43322134567', '13'),
(12, '643da3152042c4.77002805.jpg', 'Akram Mughal', 'Aslam Khan', '43322134567', '14'),
(13, '643da526020ff3.18085457.jpg', 'Zara Khan', 'Akbar Khan', '43322134567', '15'),
(14, '643dbeeebf6a56.79290136.jpg', 'Bilal Khan', 'Asif khan', '41203893783', '16'),
(15, '645213441ee8e2.21391469.png', 'Ali', 'Akbar', '43322134567', '17');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `timed` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`name`, `email`, `subject`, `comment`, `id`, `timed`) VALUES
('Ali', 'ali@gmail.com', 'Appreciate', '\r\n					Your website is excellent highly recommened it......					', 5, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `numbers` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `college` varchar(255) NOT NULL,
  `yearofc` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `specialization1` varchar(255) NOT NULL,
  `bal` varchar(255) NOT NULL,
  `license` varchar(255) NOT NULL,
  `fees` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`username`, `email`, `numbers`, `password`, `gender`, `DOB`, `address`, `id`, `college`, `yearofc`, `service`, `specialization`, `degree`, `profile`, `status`, `specialization1`, `bal`, `license`, `fees`) VALUES
('Aslam', 'asalam@gmail.com', '0312838373', '$2y$10$rp7JqUaqAgPnxKqhVLnA/O5QBdlzKO37P9WLlWQw/.O7BcXs3cbrK', 'Male', '2023-04-04', 'karachi', 13, 'ISRA', '2020', 'checkup ', 'Cardiologist', 'MBBS', '643da004b198f7.54740076.jpg', 'approved', '', '900', 'approved', '500-1000'),
('Akram Mughal', 'akram@gmail.com', '0323455677', '$2y$10$nKqeMIobBvJnfGncEp9gPOpIAJGsmWhqekG9Bh7DF7yke5aiWo0MS', 'Male', '2023-04-05', 'lahore', 14, 'ISRA', '2006', 'checkup ', 'Eye Specialist', 'MBBS', '643da3211ba921.57722650.jpg', 'approved', '', '1000', 'approved', '500-1000'),
('Zara Khan', 'zara@gmail.com', '0332334847', '$2y$10$CFPeC1Bq11DnyBlG9H5v9./0UwSms1ZOhVNFZU9QmP2GoxNo6SbS6', 'female', '2023-04-05', 'hyderabad', 15, 'LUMS Lahore', '2019', 'checkup ', 'Dermatologist', 'MBBS', '643da53b085ed8.02955925.jpg', 'approved', '', '1000', 'approved', '500-1000'),
('Bilal Khan', 'bilal@gmail.com', '0312289389', '$2y$10$Ls/ygpl0QKpFj5xTmSLr0eYOYVyQnptA1MIyrPXsI8byJI6kKzI0m', 'Male', '2023-04-11', '', 16, '', '', '', '', '', '643dbef9e46f66.51166840.jpg', 'registered', '', '', '', ''),
('Ali', 'ali@gmail.com', '3323894137', '$2y$10$lLFY56LSWBp0J12ZKftmA.6VLhZqTlD04qEm/.7Ls2sewhHXRloa6', 'Male', '2023-02-28', '', 17, '', '', '', '', '', '6452139a1a1b86.50733647.jpg', 'registered', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctorinfo`
--

CREATE TABLE `doctorinfo` (
  `clinicname` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `homeaddress` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `postalcode` varchar(255) NOT NULL,
  `charges` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `yearofc` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `from-h` varchar(255) NOT NULL,
  `to-h` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `membership` varchar(255) NOT NULL,
  `registration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_reviews`
--

CREATE TABLE `doctor_reviews` (
  `doctor_name` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `reviews` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `terms_accept` varchar(255) NOT NULL,
  `drid` varchar(255) NOT NULL,
  `patient` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor_reviews`
--

INSERT INTO `doctor_reviews` (`doctor_name`, `rating`, `title`, `reviews`, `id`, `status`, `terms_accept`, `drid`, `patient`) VALUES
('Aslam', '', 'Review ', ' Doctor was nice n descriptive listens to our problem psychological comfort us and also give best', 22, 'registered', 'on', '13 ', 'Ali Khan '),
('Aslam', '4', 'Review ', ' Doctor was nice n descriptive listens to our problem psychological comfort us and also give best', 23, 'approved', 'on', '13 ', 'Ali Khan '),
('Akram Mughal', '4', '', 'Comprehensive and resourceful. She has helped me to get my health back. That is priceless.', 24, 'approved', 'on', '14 ', 'Aslam '),
('Aslam', '4', 'Review', 'I am satisfied', 25, 'registered', 'on', '13 ', 'Aslam '),
('Aslam', '3', 'Review ', '\"I am Satisfied with this doctor\"', 26, 'registered', 'on', '13 ', 'Ali Khan ');

-- --------------------------------------------------------

--
-- Table structure for table `drcred`
--

CREATE TABLE `drcred` (
  `license` varchar(255) NOT NULL,
  `drid` varchar(255) NOT NULL,
  `drname` varchar(255) NOT NULL,
  `lid` varchar(255) NOT NULL,
  `ps` varchar(255) NOT NULL,
  `lisd` varchar(255) NOT NULL,
  `plo` varchar(255) NOT NULL,
  `cf` varchar(255) NOT NULL,
  `ls` varchar(255) NOT NULL,
  `bd` varchar(255) NOT NULL,
  `daily` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drcred`
--

INSERT INTO `drcred` (`license`, `drid`, `drname`, `lid`, `ps`, `lisd`, `plo`, `cf`, `ls`, `bd`, `daily`, `id`) VALUES
('643da0577208f6.86401075.jpg', '13', 'Aslam', '151552', '2023-04-05', '2023-04-12', 'Hyderabad', '500-1000', 'Urdu, Sindhi', '6', '6pm -9pm', 7),
('643da38eede531.68204937.jpg', '14', 'Akram Mughal', '76756454', '2023-04-05', '2023-04-06', 'Lahore', '500-1000', 'Urdu, Punjabi', '6', '6pm -9pm', 8),
('643da605b25073.32755648.jpg', '15', 'Zara Khan', '8877645344', '2023-04-13', '2023-04-06', 'Hyderabad', '500-1000', 'Urdu, Sindhi', 'Monday-Friday', '6pm -8pm', 9);

-- --------------------------------------------------------

--
-- Table structure for table `drinfo`
--

CREATE TABLE `drinfo` (
  `lid` varchar(255) NOT NULL,
  `lics` varchar(255) NOT NULL,
  `ps` varchar(255) NOT NULL,
  `lisd` varchar(255) NOT NULL,
  `cf` varchar(255) NOT NULL,
  `plo` varchar(255) NOT NULL,
  `ls` varchar(255) NOT NULL,
  `bd` varchar(255) NOT NULL,
  `daily` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `drid` varchar(255) NOT NULL,
  `drname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `numbers` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `bloodgroup` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `bal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `username`, `lastname`, `email`, `numbers`, `password`, `bloodgroup`, `address`, `dob`, `gender`, `zipcode`, `country`, `profile`, `status`, `bal`) VALUES
(18, 'Aslam', '', 'asalam@gmail.com', '0323455677', '$2y$10$1OumXR3aI.MVyrTv7o6IOOk3BDsBVZdaPkMiWIEp7C8pBuo2ovoBu', 'B-', 'Hyderabad', '2023-04-13', 'Male', '', '', '643db38084fcc2.02038201.png', 'active', '-1000'),
(19, 'Ali Khan', '', 'ali@gmail.com', '3323894137', '$2y$10$HgIfkR06ku/SE.QNPM5fyuCdkaqZ4/W.f8T/QPFbMJkwnqQS.IYmy', '', '', '2005-11-16', 'Male', '', '', '6441a12658b026.91026742.png', '', '-1000');

-- --------------------------------------------------------

--
-- Table structure for table `specials`
--

CREATE TABLE `specials` (
  `id` int(11) NOT NULL,
  `speciality` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `specials`
--

INSERT INTO `specials` (`id`, `speciality`, `img`) VALUES
(5, '643d9b6b58e0f6.24602238.jpg', 'Cardiologist'),
(6, '643d9b866d8281.17556710.jpg', 'Eye Specialist'),
(8, '643d9bf52f3c62.38756892.jpg', 'ENT Specialist'),
(9, '643d9c24010df3.55123628.jpg', 'Dermatologist'),
(10, '643d9c9049a8b6.96645142.jpg', 'General Physician'),
(11, '643d9dd46c4381.35087131.jpg', 'Lung Surgeon'),
(12, '643d9e14a07657.86932190.jpg', 'Gastroenterologist'),
(13, '643d9e5b12e801.97966642.jpg', 'Orthopedic Surgeon'),
(14, '643d9eafcb49c1.08108733.jpg', 'Urologist');

-- --------------------------------------------------------

--
-- Table structure for table `testimony`
--

CREATE TABLE `testimony` (
  `pprofile` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `testimony` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'registered',
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `timer`
--

CREATE TABLE `timer` (
  `dated` varchar(255) DEFAULT NULL,
  `drid` varchar(255) DEFAULT NULL,
  `selected1` varchar(255) DEFAULT NULL,
  `selected2` varchar(255) DEFAULT NULL,
  `selected3` varchar(255) DEFAULT NULL,
  `selected4` varchar(255) DEFAULT NULL,
  `timer` varchar(255) DEFAULT NULL,
  `iden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `timer`
--

INSERT INTO `timer` (`dated`, `drid`, `selected1`, `selected2`, `selected3`, `selected4`, `timer`, `iden`) VALUES
('2023-04-17', '13', '06:00 PM', '06:20 PM', '06:40 PM', '07:00 PM', NULL, 13),
('2023-04-17', '14', '06:00 PM', '06:20 PM', '06:40 PM', '07:40 PM', NULL, 14),
('2023-04-17', '15', '06:00 PM', '06:20 PM', '06:40 PM', '07:00 PM', NULL, 15),
('2023-04-18', '13', '06:20 PM', '06:40 PM', '07:00 PM', '07:20 PM', NULL, 16),
('2023-05-03', '15', '06:40 PM', '07:00 PM', '07:20 PM', '07:40 PM', NULL, 17),
('2023-05-03', '13', '06:20 PM', '06:40 PM', '07:00 PM', '07:20 PM', NULL, 18),
('2023-05-03', '14', '05:00 PM', '06:00 PM', '08:00 PM', '09:00 PM', NULL, 19),
('2023-05-03', '13', '06:00 PM', '07:00 PM', '08:00 PM', '09:00 PM', NULL, 20),
('2023-05-03', '13', '06:00 PM', '07:00 PM', '08:00 PM', '09:00 PM', NULL, 21),
('2023-05-03', '13', '07:00 PM', '07:20 PM', '07:40 PM', '08:00 PM', NULL, 22),
('2023-05-03', '15', '06:40 PM', '07:00 PM', '07:20 PM', '07:40 PM', NULL, 23),
('2023-05-03', '14', '06:40 PM', '07:00 PM', '07:20 PM', '07:40 PM', NULL, 24),
('2023-05-28', '14', '06:00 PM', '06:20 PM', '06:40 PM', '07:00 PM', NULL, 25),
('2023-05-28', '15', '06:00 PM', '06:20 PM', '06:40 PM', '07:00 PM', NULL, 26),
('2023-05-28', '13', '07:00 PM', '07:20 PM', '07:40 PM', '08:00 PM', NULL, 27);

-- --------------------------------------------------------

--
-- Table structure for table `trc`
--

CREATE TABLE `trc` (
  `trid` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `dated` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trc`
--

INSERT INTO `trc` (`trid`, `id`, `username`, `userid`, `status`, `amount`, `dated`) VALUES
('PK51ALFH2321008363762768', 6, 'Aslam', '13', 'requested', '400', '2023/04/17'),
('PK05ALFH', 7, 'Akram Mughal', '14', 'requested', '400', '2023/04/17');

-- --------------------------------------------------------

--
-- Table structure for table `trds`
--

CREATE TABLE `trds` (
  `trid` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `dated` varchar(255) NOT NULL,
  `ss` varchar(255) NOT NULL,
  `drid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trds`
--

INSERT INTO `trds` (`trid`, `username`, `userid`, `id`, `status`, `amount`, `dated`, `ss`, `drid`) VALUES
('45667774876', 'Ali Khan', '17', 21, 'transferred', '400', '2023-04-17', '643db29bf2fe82.83341391.jpg', '13'),
('45667774876', 'Aslam', '18', 22, 'transferred', '500', '2023-04-17', '643db3b8be9af1.75243206.png', '14'),
('67767675444', 'Ali Khan', '17', 23, 'transferred', '500', '2023-04-17', '643db3f2d6f3e3.63701014.png', '15'),
('PK51ALFH2321008363762', 'Aslam', '18', 24, 'transferred', '500', '2023-04-17', '643dbf5ee7e436.25719114.png', '14'),
('PK51ALFH2321008363762768', 'Ali Khan', '19', 25, 'transferred', '500', '2023-05-03', '64520a376df6f8.12315355.png', '13'),
('PK51ALFH2321008363762768', 'Ali Khan', '19', 26, 'transferred', '500', '2023-05-28', '6473374e960c90.82211705.png', '15');

-- --------------------------------------------------------

--
-- Table structure for table `trhs`
--

CREATE TABLE `trhs` (
  `trid` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `ss` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apttime`
--
ALTER TABLE `apttime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookedapt`
--
ALTER TABLE `bookedapt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cnic`
--
ALTER TABLE `cnic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_reviews`
--
ALTER TABLE `doctor_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drcred`
--
ALTER TABLE `drcred`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drinfo`
--
ALTER TABLE `drinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specials`
--
ALTER TABLE `specials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimony`
--
ALTER TABLE `testimony`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timer`
--
ALTER TABLE `timer`
  ADD PRIMARY KEY (`iden`);

--
-- Indexes for table `trc`
--
ALTER TABLE `trc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trds`
--
ALTER TABLE `trds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trhs`
--
ALTER TABLE `trhs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `apttime`
--
ALTER TABLE `apttime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `bookedapt`
--
ALTER TABLE `bookedapt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cnic`
--
ALTER TABLE `cnic`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `doctor_reviews`
--
ALTER TABLE `doctor_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `drcred`
--
ALTER TABLE `drcred`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `drinfo`
--
ALTER TABLE `drinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `specials`
--
ALTER TABLE `specials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `timer`
--
ALTER TABLE `timer`
  MODIFY `iden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `trc`
--
ALTER TABLE `trc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `trds`
--
ALTER TABLE `trds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `trhs`
--
ALTER TABLE `trhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
