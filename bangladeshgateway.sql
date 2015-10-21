-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2015 at 04:25 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bangladeshgateway`
--
CREATE DATABASE IF NOT EXISTS `bangladeshgateway` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bangladeshgateway`;

-- --------------------------------------------------------

--
-- Table structure for table `adb_business_plans`
--

CREATE TABLE IF NOT EXISTS `adb_business_plans` (
`id` int(10) NOT NULL,
  `discription` text NOT NULL,
  `file_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `adb_factsheet`
--

CREATE TABLE IF NOT EXISTS `adb_factsheet` (
`id` int(10) NOT NULL,
  `discription` text NOT NULL,
  `file_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `adb_strategy_program`
--

CREATE TABLE IF NOT EXISTS `adb_strategy_program` (
`id` int(10) NOT NULL,
  `discription` text NOT NULL,
  `file_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE IF NOT EXISTS `admin_users` (
`id` int(10) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` varchar(250) NOT NULL,
  `isactive` varchar(200) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `image_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `country_infos`
--

CREATE TABLE IF NOT EXISTS `country_infos` (
`id` int(10) NOT NULL,
  `country_name` varchar(250) NOT NULL,
  `flag_image_name` varchar(250) NOT NULL,
  `discription` text NOT NULL,
  `map_image_name` varchar(200) NOT NULL,
  `source` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `economic_sceneros`
--

CREATE TABLE IF NOT EXISTS `economic_sceneros` (
`id` int(10) NOT NULL,
  `title` varchar(250) NOT NULL,
  `discription` text NOT NULL,
  `image_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `five_year_plan`
--

CREATE TABLE IF NOT EXISTS `five_year_plan` (
  `id` int(10) NOT NULL,
  `discription` text NOT NULL,
  `file_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(10) NOT NULL,
  `title` varchar(250) NOT NULL,
  `textarea` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
`id` int(10) NOT NULL,
  `type_name` varchar(200) NOT NULL,
  `your_name` varchar(200) DEFAULT NULL,
  `organization_name` varchar(250) DEFAULT NULL,
  `organization_type` varchar(250) DEFAULT NULL,
  `student_name` varchar(250) DEFAULT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `comfirm_password` varchar(250) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `type_name`, `your_name`, `organization_name`, `organization_type`, `student_name`, `first_name`, `last_name`, `email`, `phone`, `password`, `comfirm_password`) VALUES
(1, 'Organization', 'dsfsd', 'afsd', 'dsaf', '', '', '', '', '', '', ''),
(2, 'Organization', 'c', 'a', 'b', '', '', '', '', '', '', ''),
(3, 'Individual', '', '', '', '', 'Sifuddin', 'Lokman', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adb_business_plans`
--
ALTER TABLE `adb_business_plans`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adb_factsheet`
--
ALTER TABLE `adb_factsheet`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adb_strategy_program`
--
ALTER TABLE `adb_strategy_program`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_infos`
--
ALTER TABLE `country_infos`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `economic_sceneros`
--
ALTER TABLE `economic_sceneros`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adb_business_plans`
--
ALTER TABLE `adb_business_plans`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `adb_factsheet`
--
ALTER TABLE `adb_factsheet`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `adb_strategy_program`
--
ALTER TABLE `adb_strategy_program`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `country_infos`
--
ALTER TABLE `country_infos`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `economic_sceneros`
--
ALTER TABLE `economic_sceneros`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
