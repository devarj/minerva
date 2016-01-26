-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2016 at 03:33 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shops_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `domains`
--

CREATE TABLE IF NOT EXISTS `domains` (
  `domain_id` int(11) NOT NULL,
  `domains` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '1=active, 0=inactive',
  `shop` varchar(250) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `domains`
--

INSERT INTO `domains` (`domain_id`, `domains`, `status`, `shop`) VALUES
(1, 'shop100.88db.ph', 1, 'Shop 4'),
(2, 'shop101.88db.ph', 0, 'none'),
(3, 'shop102.88db.ph', 0, 'none'),
(4, 'shop103.88db.ph', 0, 'none'),
(5, 'shop104.88db.ph', 0, 'none'),
(6, 'shop105.88db.ph', 0, 'none'),
(7, 'shop106.88db.ph', 0, 'none'),
(8, 'shop107.88db.ph', 0, 'none'),
(9, 'shop108.88db.ph', 0, 'none'),
(10, 'shop109.88db.ph', 0, 'none'),
(11, 'shop110.88db.ph', 0, 'none'),
(12, 'shop111.88db.ph', 0, 'none'),
(13, 'shop112.88db.ph', 0, 'none'),
(14, 'shop113.88db.ph', 0, 'none'),
(15, 'shop114.88db.ph', 0, 'none'),
(16, 'shop115.88db.ph', 0, 'none'),
(17, 'shop116.88db.ph', 0, 'none'),
(18, 'shop117.88db.ph', 0, 'none'),
(19, 'shop118.88db.ph', 0, 'none'),
(20, 'shop119.88db.ph', 0, 'none'),
(21, 'shop120.88db.ph', 0, 'none'),
(22, 'shop121.88db.ph', 0, 'none'),
(23, 'shop122.88db.ph', 0, 'none'),
(24, 'shop123.88db.ph', 0, 'none'),
(25, 'shop124.88db.ph', 0, 'none'),
(26, 'shop125.88db.ph', 0, 'none'),
(27, 'shop126.88db.ph', 0, 'none'),
(28, 'shop127.88db.ph', 0, 'none'),
(29, 'shop128.88db.ph', 0, 'none'),
(30, 'shop129.88db.ph', 0, 'none'),
(31, 'shop130.88db.ph', 0, 'none'),
(32, 'shop131.88db.ph', 0, 'none'),
(33, 'shop132.88db.ph', 0, 'none'),
(34, 'shop133.88db.ph', 0, 'none'),
(35, 'shop134.88db.ph', 0, 'none'),
(36, 'shop135.88db.ph', 0, 'none'),
(37, 'shop136.88db.ph', 0, 'none'),
(38, 'shop137.88db.ph', 0, 'none'),
(39, 'shop138.88db.ph', 0, 'none'),
(40, 'shop139.88db.ph', 0, 'none'),
(41, 'shop140.88db.ph', 0, 'none'),
(42, 'shop141.88db.ph', 0, 'none'),
(43, 'shop142.88db.ph', 0, 'none'),
(44, 'shop143.88db.ph', 0, 'none'),
(45, 'shop144.88db.ph', 0, 'none'),
(46, 'shop145.88db.ph', 0, 'none'),
(47, 'shop146.88db.ph', 0, 'none'),
(48, 'shop147.88db.ph', 0, 'none'),
(49, 'shop148.88db.ph', 0, 'none'),
(50, 'shop149.88db.ph', 0, 'none');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE IF NOT EXISTS `shops` (
  `id` int(150) NOT NULL,
  `shopname` varchar(250) NOT NULL,
  `domainname` varchar(250) NOT NULL,
  `hostname` varchar(250) NOT NULL,
  `dbname` varchar(250) NOT NULL,
  `ecomm` int(2) NOT NULL,
  `vc` int(2) NOT NULL,
  `enabled` int(2) NOT NULL,
  `datecreated` datetime NOT NULL,
  `url` varchar(250) DEFAULT NULL,
  `domain_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `shopname`, `domainname`, `hostname`, `dbname`, `ecomm`, `vc`, `enabled`, `datecreated`, `url`, `domain_id`) VALUES
(10, 'shops apollo', '', 'localhost', 'apollo', 1, 1, 0, '2015-06-03 13:35:55', NULL, NULL),
(11, 'shops athena', '192.21.0.57', 'localhost', 'athena', 1, 1, 1, '2015-06-03 13:38:54', 'athena', NULL),
(12, 'shops artemis', 'x', 'localhost', 'artemis', 1, 1, 1, '2015-08-20 10:31:01', 'x', NULL),
(38, 'Gamer', '', 'localhost', 'gamer', 1, 1, 1, '0000-00-00 00:00:00', NULL, NULL),
(39, 'Shop 1', 'shop1.88db.ph', 'localhost', 'shop1', 1, 1, 1, '0000-00-00 00:00:00', NULL, NULL),
(40, 'Shop 2', 'shop2.88db.ph', 'localhost', 'shop2', 1, 1, 1, '0000-00-00 00:00:00', NULL, NULL),
(41, 'shop 3', 'shop3.88db.ph', 'localhost', 'shop3', 1, 1, 1, '0000-00-00 00:00:00', 'shop3.com', NULL),
(58, 'Shop 4', 'shop100.88db.ph', 'localhost', 'Shop4', 1, 1, 1, '0000-00-00 00:00:00', 'shop4.com', 1),
(59, 'One', 'localhost', 'localhost', 'one', 0, 0, 1, '0000-00-00 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'admin', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'arjohn.official@gmail.com', '', '-9MiFsZ.-CEpLKS-Jsuiu.c5d5e5edafcfb8d6e6', 1433406720, 'Oe9QGBhlH47nGih/C8/7xe', 1268889823, 1453788250, 1, 'Admin', 'istrator', 'ADMIN', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `domains`
--
ALTER TABLE `domains`
  ADD PRIMARY KEY (`domain_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`), ADD KEY `domains` (`domain_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`), ADD KEY `fk_users_groups_users1_idx` (`user_id`), ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `domains`
--
ALTER TABLE `domains`
  MODIFY `domain_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `shops`
--
ALTER TABLE `shops`
ADD CONSTRAINT `domains` FOREIGN KEY (`domain_id`) REFERENCES `domains` (`domain_id`);

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
