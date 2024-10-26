-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 19, 2023 at 12:48 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `LearningPHP.`
--

-- --------------------------------------------------------

--
-- Table structure for table `52_profile_img_status`
--

CREATE TABLE `52_profile_img_status` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `52_profile_img_status`
--

INSERT INTO `52_profile_img_status` (`id`, `userid`, `status`) VALUES
(1, 1, 0),
(2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `52_user_img`
--

CREATE TABLE `52_user_img` (
  `id` int(11) NOT NULL,
  `firstName` varchar(256) NOT NULL,
  `lastName` varchar(256) NOT NULL,
  `userName` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `52_user_img`
--

INSERT INTO `52_user_img` (`id`, `firstName`, `lastName`, `userName`, `password`) VALUES
(1, 'Fahd', 'Ogunnaike', 'ibn-sadiq', '1234567890'),
(2, 'Jannah', 'Aspirant', 'Muslim', 'islam');

-- --------------------------------------------------------

--
-- Table structure for table `53_profile_img_status`
--

CREATE TABLE `53_profile_img_status` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `53_profile_img_status`
--

INSERT INTO `53_profile_img_status` (`id`, `userid`, `status`) VALUES
(1, 1, 0),
(2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `53_user_img`
--

CREATE TABLE `53_user_img` (
  `id` int(11) NOT NULL,
  `firstName` varchar(256) NOT NULL,
  `lastName` varchar(256) NOT NULL,
  `userName` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `53_user_img`
--

INSERT INTO `53_user_img` (`id`, `firstName`, `lastName`, `userName`, `password`) VALUES
(1, 'Fahd', 'Ogunnaike', 'ibn-sadiq', '1234567890'),
(11, 'Jannah', 'Aspirant', 'Muslim', 'islam');

-- --------------------------------------------------------

--
-- Table structure for table `Article_57`
--

CREATE TABLE `Article_57` (
  `a_id` int(11) NOT NULL,
  `a_title` varchar(256) NOT NULL,
  `a_text` text NOT NULL,
  `a_author` varchar(256) NOT NULL,
  `a_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Article_57`
--

INSERT INTO `Article_57` (`a_id`, `a_title`, `a_text`, `a_author`, `a_date`) VALUES
(1, 'How to Make Tigernut Milk', '1. Blend fresh soft tigernut to paste adding enough water just for things to move about in the blender 2. Strain it in a sieve cloth to extract milk into a container. And done !', 'Fahd Ibn-Sadiq', '2022-08-25 18:41:11'),
(2, 'How to Make Bean Sauce', '1. Blend fresh Bell Pepper, Chilli Pepper and Onions till smooth paste 2. Heat Palm Oil in pan 3. Fry sliced Onions in the oil till golden brown 4. Add the content of the blender to fry 5. Add seasoning and salt as desired 6. Fry while stiring from time to time till dark brown and till foam forms on top. And done ! Bean Sauce in ready.', 'Me, as in I myself', '2022-08-25 18:49:30');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(100) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `text`) VALUES
(1, 'Abdullah'),
(2, 'Musa'),
(3, 'Muhammad'),
(4, 'Farouq'),
(5, 'Abdu-l-Qoyyuum'),
(6, 'Jamiu'),
(7, 'Abdu-l-Basit'),
(8, 'Fawas'),
(9, 'Abdu-s-Samad');

-- --------------------------------------------------------

--
-- Table structure for table `Keystring_61`
--

CREATE TABLE `Keystring_61` (
  `keystringId` int(11) NOT NULL,
  `keystringKey` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Keystring_61`
--

INSERT INTO `Keystring_61` (`keystringId`, `keystringKey`) VALUES
(1, 'a'),
(2, 'b'),
(3, 'c');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `subject` varchar(128) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `subject`, `content`, `date`) VALUES
(1, 'This is 1st subject', 'This is the content This is the content This is the content This is the content This is the content This is the content This is the content This is the content This is the content This is the content This is the content This is the content This is the content This is the content This is the content This is the content This is the content This is the content This is the content This is the content This is the content.', '2022-07-25 11:09:02'),
(2, 'This is the 2nd subject', 'This is 2nd content This is 2nd content This is 2nd content This is 2nd content This is 2nd content This is 2nd content This is 2nd content This is 2nd content This is 2nd content This is 2nd content This is 2nd content This is 2nd content This is 2nd content This is 2nd content This is 2nd content .', '2022-07-25 11:25:58'),
(4, 'This is the 2nd subject', 'This is 2nd content This is 2nd content This is 2nd content This is 2nd content This is 2nd content This is 2nd content This is 2nd content This is 2nd content This is 2nd content This is 2nd content This is 2nd content This is 2nd content This is 2nd content This is 2nd content This is 2nd content .', '2022-07-25 11:25:58');

-- --------------------------------------------------------

--
-- Table structure for table `userz`
--

CREATE TABLE `userz` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(256) NOT NULL,
  `user_last` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_uid` varchar(256) NOT NULL,
  `user_pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userz`
--

INSERT INTO `userz` (`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`) VALUES
(1, 'Fahd', 'Ibn-Sadiq', 'fahd@gmail.com', 'Admin', 'password'),
(2, 'Abu Masjid', '`Abdullah', 'abumasjid@gmail.com', 'Admin2', 'password2'),
(3, '', '', '', '', ''),
(4, '', '', '', '', ''),
(5, '', '', '', '', ''),
(6, '', '', '', '', ''),
(7, '', '', '', '', ''),
(8, '', '', '', '', ''),
(9, '', '', '', '', ''),
(10, '', '', '', '', ''),
(11, '', '', '', '', ''),
(12, 'Fahd', 'Ibn-Sadiq', 'fahd@gmail.com', 'Admin', 'password'),
(13, 'Fatimah', '', '', 'Fahd', 'Decipher3210'),
(14, 'Fatimah', 'Misbaudeen', 'bintumuhammad@gmail.com', 'Fahd', 'Decipher3210'),
(16, 'Fatimah', 'Misbaudeen', 'bintumuhammad@gmail.com', 'Azzahrah', 'muslimah'),
(17, 'Fatimah', 'Misbaudeen', 'bintumuhammad@gmail.com', 'Azzahrah', 'muslimah'),
(18, 'Tin', 'Zaytoon', 'thamaraah', 'thamar', 'fruit'),
(19, 'DESTROY userz', '', '', 'Fahd', 'Decipher3210'),
(20, 'DESTROY user_uid', '', '', 'Fahd', 'Decipher3210'),
(21, 'DESTROY TABLE userz', '', '', 'Fahd', 'Decipher3210'),
(22, 'DELETE * FROM ROW ', '', '', 'Fahd', 'Decipher3210'),
(23, 'First', 'Last', 'ogunnaike.abiola.181114@fuoye.edu.ng', 'Fahd', 'Decipher3210'),
(24, '', 'DELETE FROM `userz`', '', 'Fahd', 'Decipher3210'),
(25, 'DELETE FROM ROW', '', '', 'Fahd', 'Decipher3210'),
(26, 'salman', 'saud', 'ibnsaud@mail.com', 'ss', '123'),
(27, 'a', 'b', 'c', 'd', 'e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `52_profile_img_status`
--
ALTER TABLE `52_profile_img_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `52_user_img`
--
ALTER TABLE `52_user_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `53_profile_img_status`
--
ALTER TABLE `53_profile_img_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `53_user_img`
--
ALTER TABLE `53_user_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Article_57`
--
ALTER TABLE `Article_57`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Keystring_61`
--
ALTER TABLE `Keystring_61`
  ADD PRIMARY KEY (`keystringId`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userz`
--
ALTER TABLE `userz`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `52_profile_img_status`
--
ALTER TABLE `52_profile_img_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `52_user_img`
--
ALTER TABLE `52_user_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `53_profile_img_status`
--
ALTER TABLE `53_profile_img_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `53_user_img`
--
ALTER TABLE `53_user_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `Article_57`
--
ALTER TABLE `Article_57`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Keystring_61`
--
ALTER TABLE `Keystring_61`
  MODIFY `keystringId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userz`
--
ALTER TABLE `userz`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
