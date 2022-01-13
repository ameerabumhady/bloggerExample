-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 03, 2020 at 03:09 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogger`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) NOT NULL,
  `img_src` varchar(255) DEFAULT NULL,
  `details` longtext,
  `category_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_date` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subject` (`subject`),
  KEY `category_id` (`category_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `subject`, `img_src`, `details`, `category_id`, `user_id`, `created_date`) VALUES
(2, 'test add blog', '22.08.2020_11.37.38_REC.png', 'test add blog\r\nthis is test for add blog page Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis provident molestias amet quod culpa earum? Dolores fugiat asperiores aspernatur optio doloremque, iste soluta nobis, sequi assumenda voluptas facilis eum ut.', 3, 1, '09-27-2020 09:33:30 pm'),
(3, 'sport blog', '18.07.2020_23.12.10_REC.png', 'this sport blog \r\nfor testing Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis provident molestias amet quod culpa earum? Dolores fugiat asperiores aspernatur optio doloremque, iste soluta nobis, sequi assumenda voluptas facilis eum ut.', 6, 4, '09-28-2020 08:27:16 am'),
(5, 'Ù…ÙˆØ§Ø¬Ù‡Ø§Øª ÙˆØ¥ØµØ§Ø¨Ø§Øª Ø®Ù„Ø§Ù„ Ù‚Ù…Ø¹ Ø§Ù„Ø§Ø­ØªÙ„Ø§Ù„ Ù„ÙØ¹Ø§Ù„ÙŠØ§Øª Ù…Ù†Ø§Ù‡Ø¶Ø© Ù„Ù„Ø§Ø³ØªÙŠØ·Ø§Ù†', '9999077213.jpg', 'Ø§Ù†Ø¯Ù„Ø¹Øª Ù…ÙˆØ§Ø¬Ù‡Ø§Øª ÙˆØµÙØª Ø¨Ø§Ù„Ø¹Ù†ÙŠÙØ©ØŒ Ø§Ù„ÙŠÙˆÙ… Ø§Ù„Ø¬Ù…Ø¹Ø©ØŒ Ø¨ÙŠÙ† Ù‚ÙˆØ§Øª Ø§Ù„Ø§Ø­ØªÙ„Ø§Ù„ Ø§Ù„Ø¥Ø³Ø±Ø§Ø¦ÙŠÙ„ÙŠ ÙˆØ§Ù„Ù…ÙˆØ§Ø·Ù†ÙŠÙ† Ø§Ù„ÙÙ„Ø³Ø·ÙŠÙ†ÙŠÙŠÙ† ÙÙŠ Ù…Ù†Ø§Ø·Ù‚ Ù…ØªÙØ±Ù‚Ø© Ø¨Ø§Ù„Ø¶ÙØ© Ø§Ù„ØºØ±Ø¨ÙŠØ©ØŒ Ø¹Ù‚Ø¨ Ø§Ù†Ø·Ù„Ø§Ù‚ ÙØ¹Ø§Ù„ÙŠØ§Øª Ù…Ù†Ø§Ù‡Ø¶Ø© Ù„Ù„Ø§Ø³ØªÙŠØ·Ø§Ù†ÙŠØ©.\r\n\r\nÙÙÙŠ Ù‚Ù„Ù‚ÙŠÙ„ÙŠØ©ØŒ Ù‚Ù…Ø¹Øª Ù‚ÙˆØ§Øª Ø§Ù„Ø§Ø­ØªÙ„Ø§Ù„ Ù…Ø³ÙŠØ±Ø© ÙƒÙØ± Ù‚Ø¯ÙˆÙ… Ø§Ù„Ø£Ø³Ø¨ÙˆØ¹ÙŠØ© Ø´Ø±Ù‚ Ù‚Ù„Ù‚ÙŠÙ„ÙŠØ©ØŒ ÙˆØ£ØµÙŠØ¨ Ø¹Ù„Ù‰ Ø¥Ø«Ø±Ù‡Ø§ 15 Ù…ÙˆØ§Ø·Ù†Ø§ Ø¨Ø§Ù„Ø±ØµØ§Øµ Ø§Ù„Ù…Ø¹Ø¯Ù†ÙŠ ÙˆØ§Ù„Ù…Ø¹Ø¯Ù†ÙŠ Ø§Ù„Ù…ØºÙ„Ù Ø¨Ø§Ù„Ù…Ø·Ø§Ø·ØŒ ÙˆØ¹Ø¯Ø¯ Ù…Ù† Ø§Ù„Ù…ÙˆØ§Ø·Ù†ÙŠÙ† Ø¨Ø§Ù„Ø§Ø®ØªÙ†Ø§Ù‚ Ù†ØªÙŠØ¬Ø© Ø§Ø³ØªÙ†Ø´Ø§Ù‚Ù‡Ù… Ø§Ù„ØºØ§Ø² Ø§Ù„Ø³Ø§Ù….\r\n\r\n\r\nÙˆØ£ÙØ§Ø¯Øª Ù…ØµØ§Ø¯Ø± Ù…Ø­Ù„ÙŠØ© Ø¨Ø£Ù† Ø¹Ø´Ø±Ø§Øª Ù…Ù† Ø¬Ù†ÙˆØ¯ Ø§Ù„Ø§Ø­ØªÙ„Ø§Ù„ Ù‡Ø§Ø¬Ù…ÙˆØ§ Ø§Ù„Ø´Ø¨Ø§Ù† Ø¨Ø¹Ø¯ Ø§Ù†Ø·Ù„Ø§Ù‚ Ø§Ù„Ù…Ø³ÙŠØ±Ø© Ø¨Ø¥Ø·Ù„Ø§Ù‚ ÙƒØ«ÙŠÙ Ù„Ù„Ø±ØµØ§Øµ Ø§Ù„Ù…Ø¹Ø¯Ù†ÙŠ Ø§Ù„Ù…ØºÙ„Ù Ø¨Ø§Ù„Ù…Ø·Ø§Ø·ØŒ ÙˆÙ‚Ù†Ø§Ø¨Ù„ Ø§Ù„ØºØ§Ø² ÙˆØ§Ù„ØµÙˆØª Ù…Ø§ Ø£Ø³ÙØ± Ø¹Ù† Ø¥ØµØ§Ø¨Ø© 15 Ù…ÙˆØ§Ø·Ù†Ø§Ù‹ Ø¨ÙŠÙ†Ù‡Ù… Ø«Ù„Ø§Ø«Ø© ØµØ­ÙÙŠÙŠÙ† Ø¨Ø§Ù„Ø±ØµØ§Øµ Ø§Ù„Ù…Ø¹Ø¯Ù†ÙŠ.\r\n\r\nÙˆØ§Ù†Ø·Ù„Ù‚Øª Ø§Ù„Ù…Ø³ÙŠØ±Ø© Ø¨Ù…Ø´Ø§Ø±ÙƒØ© Ø£Ø¨Ù†Ø§Ø¡ Ø§Ù„Ù‚Ø±ÙŠØ© Ø§Ù„Ø°ÙŠÙ† Ø±Ø¯Ø¯ÙˆØ§ Ø§Ù„Ø´Ø¹Ø§Ø±Ø§Øª Ø§Ù„ÙˆØ·Ù†ÙŠØ© Ø§Ù„Ø±Ø§ÙØ¶Ø© Ù„Ù„Ù…Ø¤Ø§Ù…Ø±Ø§Øª Ø§Ù„Ù‡Ø§Ø¯ÙØ© Ù„Ù„Ù†ÙŠÙ„ Ù…Ù† Ø§Ù„Ù…Ø´Ø±ÙˆØ¹ Ø§Ù„ÙˆØ·Ù†ÙŠ Ø§Ù„ÙÙ„Ø³Ø·ÙŠÙ†ÙŠ.\r\n', 7, 1, '10-03-2020 03:04:41 am'),
(4, 'Barcelona beat Real Madrid', 'barcelona.jpg', 'Barcelona beat Real Madrid', 6, 4, '10-01-2020 12:42:45 am'),
(6, 'Ø§Ù„Ø£Ø³ÙŠØ± Ø§Ù„Ø£Ø®Ø±Ø³ ÙŠÙˆØ§ØµÙ„ Ø¥Ø¶Ø±Ø§Ø¨Ù‡ Ø¹Ù† Ø§Ù„Ø·Ø¹Ø§Ù… Ù„Ù„ÙŠÙˆÙ… Ø§Ù„Ù€ 68 Ø¹Ù„Ù‰ Ø§Ù„ØªÙˆØ§Ù„ÙŠ', '9999077215.jpg', 'Ù‚Ø§Ù„Øª Ù‡ÙŠØ¦Ø© Ø´Ø¤ÙˆÙ† Ø§Ù„Ø£Ø³Ø±Ù‰ ÙˆØ§Ù„Ù…Ø­Ø±Ø±ÙŠÙ†ØŒ Ø§Ù„ÙŠÙˆÙ… Ø§Ù„Ø¬Ù…Ø¹Ø©: Ø¥Ù† Ù…Ø­Ø§Ù…ÙŠÙ‡Ø§ ÙÙˆØ§Ø² Ø´Ù„ÙˆØ¯ÙŠ Ø²Ø§Ø± Ø§Ù„Ø£Ø³ÙŠØ± Ø§Ù„Ù…Ø¶Ø±Ø¨ Ø¹Ù† Ø§Ù„Ø·Ø¹Ø§Ù… Ù…Ù†Ø° 68 ÙŠÙˆÙ…Ø§ Ø¹Ù„Ù‰ Ø§Ù„ØªÙˆØ§Ù„ÙŠ Ù…Ø§Ù‡Ø± Ø§Ù„Ø§Ø®Ø±Ø³ ÙˆØ§Ù„Ù‚Ø§Ø¨Ø¹ ÙÙŠ Ù…Ø³ØªØ´ÙÙ‰ &quot;ÙƒØ§Ø¨Ù„Ù†&quot; Ø§Ù„Ø¥Ø³Ø±Ø§Ø¦ÙŠÙ„ÙŠØŒ Ù…Ø¤ÙƒØ¯Ø§ Ø£Ù†Ù‡ ÙŠÙ…Ø± Ø¨Ø¸Ø±ÙˆÙ ØµØ­ÙŠØ© ØµØ¹Ø¨Ø© ÙˆØ®Ø·ÙŠØ±Ø© ÙˆÙ…Ù‚Ù„Ù‚Ø© Ù„Ù„ØºØ§ÙŠØ©.\r\n\r\nÙˆØ£ÙƒØ¯ Ø§Ù„Ø£Ø®Ø±Ø³ Ù„Ù„Ù…Ø­Ø§Ù…ÙŠ Ø´Ù„ÙˆØ¯ÙŠØŒ &quot;Ø£Ù†Ù‡ Ù…Ø³ØªÙ…Ø± ÙÙŠ Ù‡Ø°Ù‡\r\nØ§Ù„Ù…Ø¹Ø±ÙƒØ© Ø­ØªÙ‰ ÙØµÙ„Ù‡Ø§ Ø§Ù„Ø£Ø®ÙŠØ±ØŒ Ø¨Ø£Ù† ÙŠØªÙˆØ¬ Ù‡Ø°Ø§ Ø§Ù„Ø¥Ø¶Ø±Ø§Ø¨ Ø¨Ù†ØµØ± Ø§Ù„Ø¥ÙØ±Ø§Ø¬ ÙˆØ§Ù„ØªØ­Ø±Ø± ÙˆØ¥Ù†Ù‡Ø§Ø¡ Ø§Ø¹ØªÙ‚Ø§Ù„Ù‡ Ø§Ù„Ø¥Ø¯Ø§Ø±ÙŠØŒ Ø£Ùˆ Ø§Ù„Ø°Ù‡Ø§Ø¨ Ù†Ø­Ùˆ Ø¯Ø±Ø¨ Ø§Ù„Ø´Ù‡Ø§Ø¯Ø© ÙÙŠ Ø³Ø¨ÙŠÙ„ Ø§Ù„Ø­Ø±ÙŠØ©&quot;.\r\n\r\nÙˆØ¨ÙŠÙ† Ø´Ù„ÙˆØ¯ÙŠØŒ Ø£Ù† Ø§Ù„Ø£Ø³ÙŠØ± Ø§Ù„Ø£Ø®Ø±Ø³ Ø§Ù„Ø¨Ø§Ù„Øº Ù…Ù† Ø§Ù„Ø¹Ù…Ø± 49 Ø¹Ø§Ù…Ø§ØŒ Ù„Ø§ ÙŠØ£Ø®Ø° Ø£ÙŠØ© Ù…Ø¯Ø¹Ù…Ø§Øª ÙˆÙ„Ø§ ÙŠØªÙ†Ø§ÙˆÙ„ Ø³ÙˆÙ‰ Ø§Ù„Ù…Ø§Ø¡ØŒ ÙˆÙŠØ¹Ø§Ù†ÙŠ Ù…Ù† ØµØ¯Ø§Ø¹ Ø¯Ø§Ø¦Ù… ÙˆÙ‡Ø²Ù„ Ø´Ø¯ÙŠØ¯ ÙˆÙ†Ù‚Øµ Ø­Ø§Ø¯ Ø¨Ø§Ù„ÙˆØ²Ù† ÙˆØ·Ù†ÙŠÙ† Ø¯Ø§Ø¦Ù… Ø¨Ø§Ù„Ø£Ø°Ù†ÙŠÙ† ÙˆÙ„Ø§ ÙŠØ³ØªØ·ÙŠØ¹ Ø§Ù„Ù†Ø²ÙˆÙ„ Ø¹Ù† Ø§Ù„Ø³Ø±ÙŠØ± Ø­ØªÙ‰ Ù„Ù‚Ø¶Ø§Ø¡ Ø§Ù„Ø­Ø§Ø¬Ø© Ø¨Ø³Ø¨Ø¨ Ø§Ù„Ø£ÙˆØ¬Ø§Ø¹ Ø§Ù„Ø´Ø¯ÙŠØ¯Ø© ÙÙŠ Ù…Ø¹Ø¸Ù… Ø£Ù†Ø­Ø§Ø¡ Ø¬Ø³Ø¯Ù‡.\r\n\r\nÙˆØªØ¹Ø±Ø¶ Ø§Ù„Ø£Ø®Ø±Ø³ Ù„Ù„Ø§Ø¹ØªÙ‚Ø§Ù„ Ù…Ù† Ù‚Ø¨Ù„ Ù‚ÙˆØ§Øª Ø§Ù„Ø§Ø­ØªÙ„Ø§Ù„ Ø£ÙˆÙ„ Ù…Ø±Ø©\r\nØ¹Ø§Ù… 1989Ù… ÙˆØ§Ø³ØªÙ…Ø± Ø§Ø¹ØªÙ‚Ø§Ù„Ù‡ ÙÙŠ Ø­ÙŠÙ†Ù‡ Ù„Ù…Ø¯Ø© Ø³Ø¨Ø¹Ø© Ø´Ù‡ÙˆØ±ØŒ ÙˆØ§Ù„Ù…Ø±Ø© Ø§Ù„Ø«Ø§Ù†ÙŠØ© Ø¹Ø§Ù… 2004 Ù„Ù…Ø¯Ø© Ø¹Ø§Ù…ÙŠÙ†ØŒ Ø«Ù… Ø£ÙØ¹ÙŠØ¯ Ø§Ø¹ØªÙ‚Ø§Ù„Ù‡ Ø¹Ø§Ù… 2009ØŒ ÙˆØ¨Ù‚ÙŠ Ù…Ø¹ØªÙ‚Ù„Ø§Ù‹ Ø¥Ø¯Ø§Ø±ÙŠØ§Ù‹ Ù„Ù…Ø¯Ø© 16 Ø´Ù‡Ø±Ø§Ù‹.', 5, 1, '10-03-2020 03:06:11 am');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tag`
--

DROP TABLE IF EXISTS `blog_tag`;
CREATE TABLE IF NOT EXISTS `blog_tag` (
  `b_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  PRIMARY KEY (`b_id`,`t_id`),
  KEY `t_id` (`t_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `user_id`) VALUES
(1, 'cat_1 edition', 1),
(2, 'cat_2', 2),
(3, 'cat_3 edit', 1),
(7, 'Politics', 1),
(5, 'news', 4),
(6, 'sport', 4),
(8, 'art', 1),
(9, 'cat_1 edit', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'ahmed mohamed', 'admedmohamed@gmail.com', 'my message subject', 'hell dear,\r\nthis is message for testing \r\nLorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis provident molestias amet quod culpa earum? Dolores fugiat asperiores aspernatur optio doloremque, iste soluta nobis, sequi assumenda voluptas facilis eum ut.');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `user_id`) VALUES
(1, 'news', 1),
(2, 'tag 2', 2),
(4, 'sport', 1),
(5, 'art', 1),
(6, 'arts', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'ameer', 'ameer@gmail.com', '$2y$10$yEcN9J6ZfchVYS2X3BjDg.aD1sG/E7uPsNggHql.5aHRmCd1kVxoK'),
(3, 'anyone', 'anyone@gmail.com', '$2y$10$yEcN9J6ZfchVYS2X3BjDg.aD1sG/E7uPsNggHql.5aHRmCd1kVxoK'),
(5, 'ali mohamed', 'ali@gmail.com', '$2y$10$yEcN9J6ZfchVYS2X3BjDg.aD1sG/E7uPsNggHql.5aHRmCd1kVxoK'),
(6, 'ali ali', 'ali1@gmail.com', '$2y$10$yEcN9J6ZfchVYS2X3BjDg.aD1sG/E7uPsNggHql.5aHRmCd1kVxoK'),
(7, 'khalid', 'khalid@gmail.com', '$2y$10$RahvUxZ4T8xb4Fn2/JN4LOlst.1Y0qX1Rkv.2QAbiX4ByctXZu0ey');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
