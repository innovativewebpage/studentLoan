-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 23, 2017 at 02:06 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `loan_recovery`
--

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `pid` int(10) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pcode` varchar(255) NOT NULL,
  `ration` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adhar` varchar(255) NOT NULL,
  `pan` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `income` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `loan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `bankamount` varchar(255) NOT NULL,
  PRIMARY KEY  (`pid`),
  UNIQUE KEY `pid` (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`pid`, `name`, `address`, `city`, `dob`, `age`, `state`, `pcode`, `ration`, `email`, `adhar`, `pan`, `course`, `income`, `school`, `duration`, `loan`, `status`, `bankamount`) VALUES
(3, 'logu', 'sjdfkjasdf', 'trichy', '1992', '25', 'tamilnadu', '620020', '100', 'logu@gmail.com', '83432', '38483', 'java', '1000', 'jamal', '3yrs', '20000', '1', ''),
(4, 'Sheik', 'melachinthamani', 'trichy', '1989', '27', 'tamil nadu', '620002', '8923', 'sheik@gmail.com', '1234 8484 8329 1782', '83483342jrer', 'MCA', '2000', 'Bishop', '3yr', '30000', '1', ''),
(5, 'kj navas', 'palakarai', 'trichy', '04-08-1988', '28', 'tamil nadu', '620008', '8493', 'kjnavas@gmail.com', '2349 5483 9342 8313', '848384jfjf', 'MBA', '1000', 'St joseph', '2 yrs', '40000', '1', ''),
(6, 'logu', 'jskfj', 'trichy', '1992', '24', 'tamil nadu', '620002', '3434', 'logu@gmail.com', '82348 8348 3843 4834', '83483idf34', 'B E', '5000', 'MAM', '4 yrs', '50000', '1', ''),
(7, 'aaa', 'asdfsda', 'asdf2', '342', '343', 'asdf', 'asdf', '3434', 'asddsf@gmail.com', '234234 24234', 'asdf343f', 'B E', 'asdf', 'sdf', '3', '10000', '1', ''),
(8, 'omar', 'Subramaniapuram', 'Trichy', '07-12-1988', '28', 'tamil nadu', '620020', '273823', 'rizwan61288@gmail.com', '2234 3432 2345 5934', '28483jd3', 'MCA', '10000', 'jamal', '3yrs', '20000', '1', ''),
(9, 'bbb', 'asfd', 'bbb', 'bbb', 'bb', 'bb', 'bb', 'bbb', 'bbb', 'bbb', 'bbb', 'bbb', 'bbb', 'bbb', 'bbb', 'bbb', '1', ''),
(10, 'rrr', 'rrrrrr', 'rrrr', '07-12-1988', '28', 'tamil nadu', '620020', '100', 'rrr@gmail.com', '1123 12312 1231 12312', 'jdsfj29349', 'mca', 'yes', 'jamal', '3', '10000', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `sid` int(10) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cno` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  PRIMARY KEY  (`sid`),
  UNIQUE KEY `sid` (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`sid`, `name`, `email`, `cno`, `uname`, `pwd`) VALUES
(3, 'sheik', 'sheik123@gmail.com', '93942384', 'sheik', '12345'),
(4, 'omar', 'rizwan61288@gmail.com', '8482934923', 'omar', '12345');
