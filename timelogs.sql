-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2022 at 03:59 AM
-- Server version: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pcaat_dtr`
--

-- --------------------------------------------------------

--
-- Table structure for table `timelogs`
--

CREATE TABLE IF NOT EXISTS `timelogs` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `qr_code` varchar(120) COLLATE latin1_general_ci NOT NULL,
  `emp_num` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `fname` varchar(35) COLLATE latin1_general_ci NOT NULL,
  `mname` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `lname` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `login_date` varchar(12) COLLATE latin1_general_ci NOT NULL,
  `timein` varchar(19) COLLATE latin1_general_ci NOT NULL,
  `timeout` varchar(19) COLLATE latin1_general_ci NOT NULL,
  `day` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `time_in` datetime NOT NULL,
  `time_out` datetime NOT NULL,
  `position` varchar(200) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=144 ;

--
-- Dumping data for table `timelogs`
--

INSERT INTO `timelogs` (`id`, `qr_code`, `emp_num`, `fname`, `mname`, `lname`, `login_date`, `timein`, `timeout`, `day`, `time_in`, `time_out`, `position`) VALUES
(108, '', '2021-097', 'Juana', 'L', 'Delos Santos', '2022-03-23', '07:33:17', '17:00:00', 'Wednesday', '2022-03-23 08:33:17', '2022-03-23 16:35:53', 'MIS Officer'),
(112, '', '2021-097', 'Juana', 'L', 'Delos Santos', '2022-03-23', '07:44:28', '17:05:00', 'Wednesday', '2022-03-23 08:44:28', '2022-03-23 16:44:28', 'MIS Officer'),
(97, '', '2021-096', 'Juan', '-', 'Dela Cruz', '2022-03-23', '09:03:52', '13:03:32', 'Wednesday', '2022-03-23 09:03:52', '2022-03-23 17:03:52', 'TVL Faculty'),
(105, '', '2021-089', 'John', 'P', 'Johnson', '2022-03-23', '09:03:52', '16:06:35', 'Wednesday', '2022-03-23 09:46:02', '2022-03-23 16:44:28', 'Registrar'),
(113, '', '2021-097', 'Juana', 'L', 'Delos Santos', '2022-03-23', '07:44:28', '', 'Wednesday', '2022-03-23 08:44:28', '2022-03-23 16:44:28', 'MIS Officer'),
(114, '', '2021-096', 'Juan', 'P', 'Dela Cruz', '2022-03-24', '08:04:25', '', 'Thursday', '2022-03-24 08:04:25', '0000-00-00 00:00:00', 'TVL Faculty'),
(120, '', '2021-089', 'John', 'P', 'Johnson', '2022-03-24', '11:03:20', '', 'Thursday', '2022-03-24 11:03:20', '0000-00-00 00:00:00', 'Registrar'),
(118, '', '2021-090', 'John', 'M', 'Smith', '2022-03-24', '10:56:26', '', 'Thursday', '2022-03-24 10:56:26', '0000-00-00 00:00:00', 'Assistant Principal'),
(119, '', '2021-097', 'Juana', 'L', 'Delos Santos', '2022-03-24', '10:57:09', '', 'Thursday', '2022-03-24 10:57:09', '0000-00-00 00:00:00', 'MIS Officer'),
(121, '', '2021-096', 'Juan', 'P', 'Dela Cruz', '2022-03-28', '09:09:31', '', 'Monday', '2022-03-28 09:09:31', '0000-00-00 00:00:00', 'TVL Faculty'),
(139, 'e6925663-6c8f-470c-9b98-77b17de6c7c1', '2021-096', 'Juan', 'P', 'Dela Cruz', '2022-04-05', '10:45:25', '', 'Tuesday', '2022-04-05 10:45:25', '0000-00-00 00:00:00', 'TVL Faculty'),
(140, 'e6925663-6c8f-470c-9b98-77b17de6c7c1', '2021-096', 'Juan', 'P', 'Dela Cruz', '2022-04-06', '16:00:16', '', 'Wednesday', '2022-04-06 16:00:16', '0000-00-00 00:00:00', 'TVL Faculty'),
(141, '', '2021-096', 'Juan', 'P', 'Dela Cruz', '2022-04-26', '09:23:31', '', 'Tuesday', '2022-04-26 09:23:31', '0000-00-00 00:00:00', 'TVL Faculty'),
(142, '', '2021-096', 'Juan', 'P', 'Dela Cruz', '2022-04-28', '09:45:35', '13:17:02', 'Thursday', '2022-04-28 09:45:35', '2022-04-28 13:17:02', 'TVL Faculty'),
(143, '', '2021-096', 'Juan', 'P', 'Dela Cruz', '2022-05-02', '10:47:55', '', 'Monday', '2022-05-02 10:47:55', '0000-00-00 00:00:00', 'TVL Faculty');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
