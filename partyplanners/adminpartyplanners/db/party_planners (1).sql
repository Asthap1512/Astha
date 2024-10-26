-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2020 at 10:05 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `party_planners`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
`contact_id` int(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `massage` varchar(50) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `name`, `contact_no`, `email_id`, `massage`, `status`) VALUES
(1, 'kkkkkk', '9999', 'chetansoni@gmail.com', '', b'0'),
(2, 'chetan', '9999999999', 'hetansoni@gmail.com', 'krishna', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE IF NOT EXISTS `tbl_event` (
`event_id` int(2) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_type` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `duration` int(2) NOT NULL,
  `event_image` varchar(50) NOT NULL,
  `rag_fees` int(5) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`event_id`, `event_name`, `event_type`, `start_date`, `end_date`, `duration`, `event_image`, `rag_fees`, `status`) VALUES
(1, 'partyplanner', 'diwali', '2020-12-01', '2020-12-15', 0, 'klwelwwl', 1234, b'0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE IF NOT EXISTS `tbl_gallery` (
`gallery_id` int(3) NOT NULL,
  `gallery_image` varchar(50) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`gallery_id`, `gallery_image`, `status`) VALUES
(1, 'safdf', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
`login_id` int(4) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `type` varchar(8) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_serviceprovider`
--

CREATE TABLE IF NOT EXISTS `tbl_serviceprovider` (
  `service_name` varchar(50) NOT NULL,
  `service_category` varchar(15) NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `logo` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `adderss` text NOT NULL,
  `contact_no` varchar(13) NOT NULL,
  `booking_rate` int(5) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_serviceprovider`
--

INSERT INTO `tbl_serviceprovider` (`service_name`, `service_category`, `owner_name`, `description`, `logo`, `city`, `adderss`, `contact_no`, `booking_rate`, `status`) VALUES
('food', 'food', 'astha', 'astha', 'happy', 'mahesana', '44/a shailaja homes,radhanpur road,mahesana', '8347970789', 2200, b'0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
`user_id` int(3) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `city` varchar(50) NOT NULL,
  `adderss` text NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `id_proof` varchar(50) NOT NULL,
  `mo_number` varchar(10) NOT NULL,
  `create_date` date NOT NULL,
  `otp` varchar(6) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `full_name`, `city`, `adderss`, `email_id`, `password`, `id_proof`, `mo_number`, `create_date`, `otp`, `status`) VALUES
(7, 'chetan', 'hetan', 'sfsdf', 'soni@gmail.com', 'krishna', 'krishna', '', '0000-00-00', '', b'0'),
(8, 'Patel astha shailendrabhai', 'mahesana', '44/a shailaja homes,radhanpur road,mahesana', 'asthapatel1512@gmail.com', 'krishna', 'krishna', '8888888888', '0000-00-00', '', b'0'),
(9, 'Patel astha shailendrabhai', 'mahesana', '44/a shailaja homes,radhanpur road,mahesana', 'asthapatel1512@gmail.com', 'krishna', 'iii', '9999999999', '2020-12-10', '8888', b'0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
 ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
 ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
 ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
 ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tbl_serviceprovider`
--
ALTER TABLE `tbl_serviceprovider`
 ADD PRIMARY KEY (`service_name`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
MODIFY `contact_id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
MODIFY `event_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
MODIFY `gallery_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
MODIFY `login_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
