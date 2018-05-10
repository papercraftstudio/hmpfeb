-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 10, 2018 at 10:14 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `economics-uksw`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `oauth_uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` enum('Pria','Wanita') COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` enum('superuser','admin','user') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `oauth_uid` (`oauth_uid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `oauth_uid`, `email`, `first_name`, `last_name`, `gender`, `picture_url`, `role`, `created`, `modified`) VALUES
(2, '109514718829495790604', '23april96@gmail.com', 'Ricky', 'Afdita Adib Priliandana', NULL, 'https://lh3.googleusercontent.com/-yg9tiYbPALQ/AAAAAAAAAAI/AAAAAAAAABs/oGw_KDY98NE/photo.jpg', 'superuser', '2018-05-10 07:34:17', '2018-05-10 07:58:34'),
(3, '103399355393654135424', '672016290@student.uksw.edu', 'Ricky', 'Afdita Adib Priliandana', 'Pria', 'https://lh5.googleusercontent.com/-nMchg-lCLK0/AAAAAAAAAAI/AAAAAAAAALo/-6TTjm_gpSs/photo.jpg', 'user', '2018-05-10 07:36:36', '2018-05-10 07:36:36');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
