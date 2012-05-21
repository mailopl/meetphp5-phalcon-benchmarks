-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 21, 2012 at 09:42 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `benchmark`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(128) NOT NULL,
  `password` char(40) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `created`) VALUES
(1, 'mailo', 'c7d4a630661cd719ea504dba56393f78278b296b', '2012-05-19 07:49:59'),
(2, 'jacob', 'f862f167b85d41b225785c70d70808bc7337c1fe', '2012-05-15 17:59:51'),
(3, 'sophia', 'c7d4a630661cd719ea504dba56393f78278b296b', '2012-05-15 17:59:51'),
(4, 'mason', 'dfb59f0c8ff950313b5e348b016c8434aeb441c7', '2012-05-15 17:59:51'),
(5, 'isabella', 'e11b7abd376817de520197b98f046ab63e9b659e', '2012-05-15 17:59:52'),
(6, 'william', 'c824fe0afe16857dd6f587aa7c4044d2642d60fb', '2012-05-15 17:59:52'),
(7, 'emma', 'efdb8f7f2fe9c47e34dfe1fb7c491d0638ec2d86', '2012-05-15 17:59:52'),
(8, 'jayden', 'da487a201657381efac8da16851cb1b253e25aba', '2012-05-15 17:59:52'),
(9, 'olivia', '5cc9dc7fa726d8d8cfa53f899984125409090863', '2012-05-15 17:59:52'),
(10, 'noah', '1db01d43e08596f43a65fb393d969b98ee5b4dc6', '2012-05-15 17:59:52'),
(11, 'ava', '9b5d4e87d8b2b90ee0d007504a8cd62eab338a58', '2012-05-15 17:59:52'),
(12, 'michael', '17b9e1c64588c7fa6419b4d29dc1f4426279ba01', '2012-05-15 17:59:52'),
(13, 'emily', '47e68180813c48be2408b98f5577fb058975820e', '2012-05-15 17:59:52'),
(14, 'ethan', '0a27e12d062ad71673d57f9c2799b207af316885', '2012-05-15 17:59:52'),
(15, 'abigail', '29fca0cd05e1837c76ff37ad2efe9ad8c1592700', '2012-05-15 17:59:53'),
(16, 'alexander', 'e46fc836cca3acec03944314d1457c2ae6c68ef3', '2012-05-15 17:59:53'),
(17, 'madison', '96773332455a5770cba61b43b62383e896c09c39', '2012-05-15 17:59:53'),
(18, 'aiden', '1faf1e8390cdac9204f160c35828cc423b7acd7b', '2012-05-15 17:59:53'),
(19, 'mia', '21aab516d69b32bfbcf9992aa0bd8d31c83eaad4', '2012-05-15 17:59:53'),
(20, 'daniel', '3d0f3b9ddcacec30c4008c5e030e6c13a478cb4f', '2012-05-15 17:59:53'),
(21, 'chloe', '7785db84585b09fc9bc5e7e763fca1095488c446', '2012-05-15 17:59:53');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
