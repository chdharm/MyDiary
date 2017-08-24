-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2015 at 08:34 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `diary`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `name` varchar(32) NOT NULL,
  `username` varchar(64) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`name`, `username`, `age`, `gender`, `email`, `password`) VALUES
('hello', 'hello', 20, 'm', 'hello', '5d41402abc4b2a76b9719d911017c592'),
('hi', 'hi', 20, 'm', 'test', '098f6bcd4621d373cade4e832627b4f6'),
('ko', 'ko', 4, 'm', 'ko', 'ed73f6b46391b95e1d03c6818a73b8b9'),
('l', 'l', 20, 'l', 'll', '2db95e8e1a9267b7a1188556b2013b33'),
('Prateek Singh', 'laststringx', 20, 'm', 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229'),
('lo', 'lo', 5, 'm', 'lo@lo.lo', '25d55ad283aa400af464c76d713c07ad'),
('n', 'n', 0, 'n', 'n', '632ed9515fb18441d9ead12c5687bde9'),
('nitish', 'nitish', 20, 'm', 'nitish', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE IF NOT EXISTS `notes` (
  `username` varchar(64) NOT NULL,
  `title` varchar(64) NOT NULL,
  `notepath` varchar(128) NOT NULL,
  `imagepath` varchar(128) NOT NULL,
  `timestamp` timestamp(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`username`, `title`, `notepath`, `imagepath`, `timestamp`) VALUES
('ko', 'hi', './userdata/ko/hi.txt', './userdata/ko/', '2015-03-29 14:27:16.000000'),
('ko', 'testing', './userdata/ko/testing.txt', './userdata/ko/Picture1.png', '2015-03-29 14:44:17.000000'),
('hello', 'ji', './userdata/hello/ji.txt', './userdata/hello/', '2015-03-29 14:57:25.000000'),
('laststringx', 'chutiyapa', './userdata/laststringx/chutiyapa.txt', './userdata/laststringx/upload.png', '2015-03-31 10:27:58.000000'),
('lo', 'Title ', './userdata/lo/Title .txt', './userdata/lo/', '2015-04-02 05:51:17.000000'),
('lo', 'Title ', './userdata/lo/Title .txt', './userdata/lo/', '2015-04-02 05:52:35.000000'),
('lo', 'wer', './userdata/lo/wer.txt', './userdata/lo/', '2015-04-02 05:52:44.000000'),
('nitish', 'my first note', './userdata/nitish/my first note.txt', './userdata/nitish/', '2015-04-02 13:56:25.000000'),
('nitish', 'my second note', './userdata/nitish/my second note.txt', './userdata/nitish/1.png', '2015-04-02 13:57:15.000000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
