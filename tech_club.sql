-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2016 at 12:33 AM
-- Server version: 5.7.11
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tech_club`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` text,
  `password` text,
  `admin` int(11) NOT NULL DEFAULT '0',
  `points` int(11) NOT NULL DEFAULT '0',
  `theme` int(11) NOT NULL DEFAULT '0',
  `colors` int(11) NOT NULL DEFAULT '0',
  `email` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `admin`, `points`, `theme`, `colors`, `email`) VALUES
(1, 'Divesh', '3a511a756f8f5dbaf92b0f23ebb26c4d', 1, 20, 0, 0, 'drchudasama26@gmail.com'),
(2, 'Romit', '6c7f413f2a5807af8ca763679906cf3f', 0, 16, 0, 4, ''),
(3, 'testuser', '6cb75f652a9b52798eb6cf2201057c73', 0, 0, 0, 0, ''),
(5, 'hojo268', 'c292ca4211d7c18f21497e3dcdc3036e', 0, 0, 0, 0, 'drchudasama26@outlook.com');

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `date` date DEFAULT NULL,
  `event` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`date`, `event`) VALUES
('2016-06-26', '2nd event test			'),
('2016-09-18', 'Testing calendar		'),
('2016-09-22', 'First Meet			');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `PID` int(11) NOT NULL,
  `username` text NOT NULL,
  `title` text,
  `content` text,
  `calendar` date DEFAULT NULL,
  `type` text,
  `question` text,
  `a` text,
  `b` text,
  `c` text,
  `d` text,
  `result` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`PID`, `username`, `title`, `content`, `calendar`, `type`, `question`, `a`, `b`, `c`, `d`, `result`) VALUES
(1, 'Divesh', 'First Ever', 'This the first post on our website!			', '2016-06-07', 'post', '', '', '', '', '', 0),
(2, 'Romit', 'Testing poll', '', '2016-06-07', 'quiz			', 'How\'s life?', 'Good', 'Bad', 'trick question', 'none of the above', 1),
(3, 'Romit', 'Test 3', 'Beta test number 3 of many more to come !) ', '2016-06-07', 'post', '', '', '', '', '', 0),
(4, 'Romit', 'Test 4', 'Beta test number 4 of many more to come !) ', '2016-06-07', 'post', '', '', '', '', '', 0),
(5, 'Romit', 'Final testing', 'Almost there!)', '2016-06-08', 'post', '', '', '', '', '', 0),
(6, 'Romit', 'Final testing', 'Almost there!)', '2016-06-08', 'post', '', '', '', '', '', 0),
(7, 'Divesh', 'Testing new form', '', '2016-06-10', 'post', 'Is this a post or a quiz?idk', 'option 1', 'option 2', 'option 3', 'option 4', 0),
(8, 'Divesh', 'test new form again', '', '2016-06-10', 'post', '', '', '', '', '', 0),
(9, 'Divesh', 'Test 3', 'I think this will work', '2016-06-10', 'post', '', '', '', '', '', 0),
(10, 'Divesh', 'Test 4 ', '', '2016-06-10', 'quiz', 'Hey do you think this website is cool?', 'yes', 'maybe so', 'no', 'idk', 1),
(11, 'Divesh', 'Trouble shooting', 'just testing some stuff	', '2016-09-18', 'post', NULL, NULL, NULL, NULL, NULL, 1),
(12, 'Divesh', 'Trouble shooting', 'just testing some stuff	', '2016-09-18', 'post', NULL, NULL, NULL, NULL, NULL, 1),
(13, 'Divesh', 'Quiz ', NULL, '2016-09-18', 'quiz', 'Are u smart?	', 'Not very', 'no', 'Yes', 'Is that an insult?', 3),
(14, 'Divesh', 'Testing', 'What u like?				', '2016-09-21', 'post', NULL, NULL, NULL, NULL, NULL, 1),
(15, 'Divesh', 'Testing2', 'What u like 		', '2016-09-21', 'post', NULL, NULL, NULL, NULL, NULL, 1),
(16, 'Divesh', 'Test101', NULL, '2016-09-21', 'poll', 'What u like', 'a', 'b', 'c', 'd', 1),
(17, 'Divesh', 'Test 202', NULL, '2016-09-21', 'poll', 'Lets see what happens with two options		', 'Lundu', 'Cadu', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `swatches`
--

CREATE TABLE `swatches` (
  `CID` int(11) NOT NULL,
  `swatch1` varchar(11) NOT NULL,
  `swatch2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `swatches`
--

INSERT INTO `swatches` (`CID`, `swatch1`, `swatch2`) VALUES
(0, '#2f80db', '#cc3399'),
(1, '#003399', '#9933ff'),
(2, '#9933ff', '#ff99ff'),
(3, '#ffcc00', '#ffff00'),
(4, '#006600', '#99ff66'),
(5, '#ff0000', '#990000'),
(6, '#663300', '#ff99ff'),
(7, '#ff6600', '#ff9933'),
(8, '#00ffcc', '#66ccff');

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `TID` int(11) NOT NULL,
  `col1` varchar(11) NOT NULL,
  `col2` varchar(11) NOT NULL,
  `col3` varchar(11) NOT NULL,
  `col4` varchar(11) NOT NULL,
  `col5` varchar(11) NOT NULL,
  `col6` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`TID`, `col1`, `col2`, `col3`, `col4`, `col5`, `col6`) VALUES
(0, '#ffffff', '#f8f8f8', '#e8e8e8', '#d8d8d8', '#808283', '#000000'),
(1, '#000000', '#333333', '#404040', '#666666', '#999999', '#ffffff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`PID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
