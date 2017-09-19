-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2017 at 05:40 PM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `qid` int(10) unsigned NOT NULL,
  `answer` longtext NOT NULL,
  `a_user` varchar(10) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`qid`, `answer`, `a_user`, `time`) VALUES
(5, ' a person who has received a degree from a school (high school or college or university)', 'B121891', '2017-04-03 09:38:50'),
(5, ' a person who has received a degree from a university.', 'B121891', '2017-04-03 09:39:01'),
(4, 'movement of tectonic plates.', 'B121354', '2017-04-04 09:56:33'),
(3, 'Hennessey Venom GT (270 mph) ', 'B121354', '2017-04-04 09:58:58'),
(3, 'Bugatti Veyron Super Sport', 'B121354', '2017-04-04 09:59:17'),
(1, 'It is a data structure implemented with FIFO methodology.', 'ADMIN', '2017-04-04 11:01:06'),
(6, 'fine', 'ADMIN', '2017-04-11 09:15:21'),
(7, 'fine', 'ADMIN', '2017-04-11 09:15:54'),
(7, 'HOW R U?', 'B121212', '2017-04-11 10:40:59');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `user` varchar(10) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `feedback` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `eid` int(10) unsigned NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `venue` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eid`, `name`, `description`, `venue`, `date`, `time`) VALUES
(1, 'Machine Learning Workshop', 'CSE Dept is going to conduct ML workshop. Cheif guests are HOD, Faculty of CSE and Thoughtworks Deligates', 'SAC Auditorium', '2017-04-10', '10 am'),
(2, 'Convocation', 'RGUKT is going to conduct 2nd Convocation Ceremony', 'Shatavahana ground', '2017-04-14', '9 AM');

-- --------------------------------------------------------

--
-- Table structure for table `opportunity`
--

CREATE TABLE IF NOT EXISTS `opportunity` (
  `oid` int(10) unsigned NOT NULL,
  `oname` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `link` text,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opportunity`
--

INSERT INTO `opportunity` (`oid`, `oname`, `description`, `link`, `time`) VALUES
(1, 'Cambridge University certification', 'This is the list of students of P1,P2,E1 batches who are selected for the 2nd level selection for the Cambridge certification exam to be conducted by Cambridge university in association with iB Group. All the selected students are requested to be present in PHI-6 room of P1 block this Sunday i.e on 2nd April in the respective time slots allocated to you. Please check the attachment for your time slot and group number.', 'https://hub.rgukt.ac.in/hub/notice/download/notice.upload_attach.9425abae87a32cd4.43616d627269646765205072656c696d616e727920526573756c7473204261736172202d326e6420726f756e642053656c65637465642073747564656e74732e706466.pdf', '2017-04-04 05:20:00'),
(2, 'Recruitememt for the Post Asst Engineer for Civil', 'It is hereby inform to all E4 civil students that please find an attachment for more details and find the below URL.', 'http://aptransco.cgg.gov.in/Documents/Detailed_Notification_transco.pdf', '2017-04-04 05:19:10'),
(3, 'ABS', 'SAJHB', 'SADJHB', '2017-04-11 10:39:06');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `fid` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `job` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `languages` varchar(30) NOT NULL,
  `img_src` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`fid`, `name`, `phone`, `email`, `job`, `dob`, `languages`, `img_src`) VALUES
(1, 'Samit Kumar Pradhan ', '8500862608 ', 'samitcs@rgukt.in ', 'Assistant Professor ', '1985-11-01', '	English, Hindi, Odiya', 'img/samit.jpg'),
(2, 'Ranjith Kumar', '9988776611', 'ranjithkumar@gmail.com', 'Assistant Professor', '1980-02-02', ' English, Hindi,Telugu', 'img/ranjith.png'),
(3, 'Venkat Raman B', '9988776612', 'venkatraman@gmail.com', 'Assistant Professor', '1981-01-01', ' English, Hindi,Telugu', 'img/venkatraman.jpg'),
(4, 'Sujoy Sarkar', '9988776613', 'sujoysarkar@gmail.com', 'Assistant Professor', '1983-03-03', 'English, Hindi, Bengali', 'img/sujoy.jpg'),
(5, 'E Anjaneyulu', '9988776614', 'anjaneyulu@gmail.com', 'Assistant Professor', '1984-04-04', ' English, Hindi,Telugu', 'img/anjaneyulu.png');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `qid` int(10) unsigned NOT NULL,
  `query` varchar(700) NOT NULL,
  `q_user` varchar(10) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `query`, `q_user`, `time`) VALUES
(1, 'What is a queue?', 'B121891', '2017-03-28 10:36:23'),
(2, 'what is python?', 'B121891', '2017-03-28 15:53:42'),
(3, 'Which is the fastest car?', 'B121891', '2017-03-28 15:54:20'),
(4, 'How earthquake occurs?', 'B121891', '2017-03-28 15:55:17'),
(5, 'what do you mean by alumni?', 'B121891', '2017-03-28 15:56:05'),
(6, 'Hello adsadja?', 'ADMIN', '2017-04-11 09:15:10'),
(7, 'Hello adsadja?', 'ADMIN', '2017-04-11 09:15:54'),
(8, 'WHAT IS FM?', 'B121212', '2017-04-11 10:40:46');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `username` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `passwd` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `name`, `passwd`, `email`, `mobile`) VALUES
('admin', 'admin', 'admin!23', 'admin.rgukt@gmail.com', '9988776655'),
('B121212', 'RAM', 'RAM009@', 'parashuram@gmail.com', '9455432323'),
('B121354', 'Devendhar', 'rgukt123', 'adevendher@gmail.com', '9494456287'),
('B121688', 'Rajashekar', 'rgukt123', 'B121688@gmail.com', '8106494968'),
('B121709', 'Srinivas', 'rgukt123', 'srinivas@gmail.com', '9988776655'),
('B121891', 'Revanth', 'qwerty', 'revanth@gmail.com', '7416286692'),
('B121942', 'Mahesh', 'rgukt123', 'mahesh@gmail.com', '9988665533');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
 ADD PRIMARY KEY (`time`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
 ADD PRIMARY KEY (`time`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
 ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `opportunity`
--
ALTER TABLE `opportunity`
 ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
 ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
 ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
 ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
