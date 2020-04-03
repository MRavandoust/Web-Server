-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 03, 2020 at 08:13 PM
-- Server version: 5.7.28
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `coversation`
--

DROP TABLE IF EXISTS `coversation`;
CREATE TABLE IF NOT EXISTS `coversation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `message` varchar(600) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `coversation`
--

INSERT INTO `coversation` (`id`, `pseudo`, `message`) VALUES
(1, 'Masoud', 'Bonjour tout le monde'),
(2, 'Masoud', 'Bonjour tout le monde'),
(3, 'Masoud', 'Est-ce-que Ã§a marche?'),
(4, 'Masoud', 'Est-ce-que Ã§a marche?'),
(5, 'Masoud', 'Est-ce-que Ã§a marche?'),
(6, 'Masoud', 'Est-ce-que Ã§a marche?'),
(7, 'Masoud', 'Bonjour tout le monde'),
(8, 'Ali', 'Bonjour'),
(9, 'Masoud', 'Bonjour'),
(10, 'Ali', 'Vous etes ou?'),
(11, 'Masoud', 'Je suis lÃ '),
(12, 'Ali', 'Can you go to Mulhouse?'),
(13, 'Ali', 'Can you go to Mulhouse?'),
(14, 'Masoud', 'Yes je peux'),
(15, 'Ali', 'thanks'),
(16, 'Masoud', 'De rien'),
(17, 'Ali', 'merci'),
(18, 'Ali', 'sfsf '),
(19, 'Masoud', 'dddd'),
(20, 'Masoud', 'fffffff'),
(21, 'Ali', 'kkkkkk'),
(22, 'Masoud', '11111111111111111111111'),
(23, '', ''),
(24, '', ''),
(25, '', ''),
(26, 'Masoud', '44444444444'),
(27, 'Masoud', '44444444444'),
(28, 'Masoud', '44444444444'),
(29, 'Masoud', '44444444444'),
(30, 'Masoud', '55555'),
(31, 'Masoud', '55555'),
(32, 'Masoud', '55555'),
(33, '', ''),
(34, '', ''),
(35, 'Masoud', 'Bonjour'),
(36, 'Masoud', 'Bonjour'),
(37, 'Masoud', 'Bonjour'),
(38, 'Masoud', 'Bonjour'),
(39, 'Masoud', 'Bonjour'),
(40, 'Masoud', 'Bonjour'),
(41, 'Masoud', 'Bonjour'),
(42, 'Masoud', 'Bonjour'),
(43, 'Masoud', 'Bonjour'),
(44, '', ''),
(45, 'Masoud', '44444444444'),
(46, 'Masoud', '44444444444'),
(47, '', ''),
(48, 'Masoud', '55555'),
(49, 'Ali', 'uuuuu'),
(50, 'Masoud', 'Est-ce-que vous pouvez nous aider? '),
(51, 'Masoud', 'Est-ce-que vous pouvez nous aider? '),
(52, 'Masoud', 'Est-ce-que vous pouvez nous aider? '),
(53, 'Masoud', 'Est-ce-que vous pouvez nous aider? '),
(54, 'Masoud', 'Est-ce-que vous pouvez nous aider? '),
(55, 'Masoud', 'Est-ce-que vous pouvez nous aider? '),
(56, 'Masoud', '7777777777'),
(57, 'Masoud', '7777777777'),
(58, 'Masoud', '7777777777'),
(59, 'Ali', '44444444444'),
(60, 'Ali', '44444444444'),
(61, 'Ali', '44444444444'),
(62, 'Ali', '44444444444'),
(63, 'Ali', '44444444444'),
(64, 'Ali', '7777777777'),
(65, 'Masoud', 'Est-ce-que vous pouvez nous aider? '),
(66, 'Ali', '55555'),
(67, 'Ali', '55555'),
(68, 'Ali', '55555'),
(69, 'Ali', '55555'),
(70, 'Masoud', 'Bonjour'),
(71, 'Masoud', '7777777777'),
(72, 'Ali', 'Bonjour tout le monde'),
(73, 'Masoud', 'Bonjour'),
(74, 'Masoud', 'Bonjour'),
(75, 'Masoud', '7777777777'),
(76, 'Masoud', '11111'),
(77, 'Masoud', 'Do you want to learn php?'),
(78, 'Ali', 'Yes of cors'),
(79, 'Ali', 'Yes I want'),
(80, 'Ù…Û•Ø³Ø¹ÙˆÙˆØ¯', 'Ø³ÚµØ§Ùˆ Ù‡Ø§ÙˆÚ•ÛŽÛŒØ§Ù†ÛŒ Ø¨Û•Ú•ÛŽØ². Ø¦Û•ÙˆÛ• Ø¨Û•Ø±Ù†Ø§Ù…Û•ÛŒ Ú†Û•ØªÛŒ Ù…Ù†Û• Ùˆ Ø¨Û† Ø®Ø²Ù…Û•Øª Ø¨Û• Ø¦ÛŽÙˆÛ•ÛŒ Ø¨Û•Ú•ÛŽØ² Ù†ÙˆÙˆØ³Ø±Ø§ÙˆÛ•.'),
(81, 'Ø³Û†Ù…Ø§', 'Ø³ÚµØ§Ùˆ Ø¨Ø§Ø¨Û• Ú¯ÛŒØ§Ù†. Ú†Û†Ù†ÛŒØŸ'),
(82, 'Ø³Û†Ù…Ø§', 'Ø³ÚµØ§Ùˆ Ø¨Ø§Ø¨Û• Ú¯ÛŒØ§Ù†. Ú†Û†Ù†ÛŒØŸ'),
(83, 'Ù…Û•Ø³Ø¹ÙˆÙˆØ¯', 'Ø´Û•ÙˆØ¨Ø§Ø´');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
