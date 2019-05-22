-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2019 at 02:24 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smecreditportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`) VALUES
(1, 'admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `fi`
--

CREATE TABLE IF NOT EXISTS `fi` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `confirm` varchar(30) NOT NULL,
  `phone` int(15) NOT NULL,
  `typeoffi` varchar(20) NOT NULL,
  `regstatus` varchar(10) NOT NULL,
  `location` varchar(20) NOT NULL,
  `scorelimit` int(5) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `fi`
--

INSERT INTO `fi` (`ID`, `name`, `email`, `username`, `password`, `confirm`, `phone`, `typeoffi`, `regstatus`, `location`, `scorelimit`) VALUES
(1, 'stanbic', 'phoebe.tina70@gmail.com', 'dkh', 'hfgjh', '', 31425, 'Bank', 'yes', 'kikoni', 24),
(2, 'stand chart', 'phoebe.tina@yahoo.com', 'pheebz', 'rtyi', '', 782456525, 'Bank', 'yes', 'kampala', 7),
(3, 'equity', 'phoebe.tina@yahoo.com', 'mima', '436', '', 89465, 'Bank', 'yes', 'kampala', 78),
(4, 'bank', 'phoebe.tina70@gmail.com', 'enid', 'uhj', 'jvbkn', 65879, 'Sacco', 'yes', 'kampala', 78);

-- --------------------------------------------------------

--
-- Table structure for table `sme`
--

CREATE TABLE IF NOT EXISTS `sme` (
  `ID` int(15) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `confirmpassword` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `nameofenterprise` varchar(30) NOT NULL,
  `regstat` varchar(4) NOT NULL,
  `typeofbusiness` varchar(15) NOT NULL,
  `dateofestablishment` date NOT NULL,
  `location` varchar(20) NOT NULL,
  `date_created` date NOT NULL,
  `account_status` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `sme`
--

INSERT INTO `sme` (`ID`, `username`, `password`, `confirmpassword`, `email`, `phone`, `nameofenterprise`, `regstat`, `typeofbusiness`, `dateofestablishment`, `location`, `date_created`, `account_status`) VALUES
(1, 'kkk', ',,..,.', 'pppppppppppp', 'phoebe.tina70@gmail.com', 4787, 'kh', 'on', '', '2019-04-09', 'kampala', '0000-00-00', ''),
(3, 'phoebe', 'rty', 'dutjy', 'phoebe.tina70@gmail.com', 980, 'dghkl', 'Yes', 'sole', '2019-04-24', 'kampala', '0000-00-00', ''),
(4, 'uyk', 'gkh', 'vb', 'phoebe.tina70@gmail.com', 31455, 'sdfff', 'Yes', 'sole', '2019-04-24', 'kikoni', '0000-00-00', ''),
(5, 'hfj', 'edrtfg', 'sadfg', 'phoebe.tina70@gmail.com', 23546, 'dfb', 'Yes', 'sole', '2019-04-16', 'kampala', '0000-00-00', ''),
(6, 'zxcvb', 'gjh', 'vhbjn', 'phoebe.tina70@gmail.com', 75867, 'vbnm', 'Yes', 'sole', '2019-04-23', 'kampala', '0000-00-00', ''),
(7, 'phhebz', 'dgsfhgh', 'zdxfcg', 'phoebe.tina@yahoo.com', 2354657, 'shdj', 'Yes', 'partnership', '2019-04-23', 'kampala', '2019-04-27', ''),
(8, '78677', 'stdfgj', 'xhfcgjvh', 'phoebe.tina@yahoo.com', 679, 'jgkh', 'No', 'sole', '2019-05-15', 'wakiso', '2019-05-16', ''),
(9, 'trdyfghjk', 'gj', 'mb', 'phoebe.tina70@gmail.com', 57687, 'hkjl', 'No', 'sole', '2019-06-03', 'kampala', '2019-05-16', ''),
(10, 'tsedfhgj', 'jhkj', 'vhkb,n', 'phoebe.tina70@gmail.com', 6879, 'jvhkb', 'No', 'other', '2019-05-15', 'kampala', '2019-05-16', ''),
(11, 'carol', 'okay', 'okay', 'phoebe.tina70@gmail.com', 700304792, 'qwerty', 'Yes', 'sole', '2019-05-23', 'kampala', '2019-05-20', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `sme_data`
--

CREATE TABLE IF NOT EXISTS `sme_data` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `TypeOfEnterprise` int(2) NOT NULL,
  `Ownership` int(2) NOT NULL,
  `Age` int(5) NOT NULL,
  `Employees` int(5) NOT NULL,
  `TypeOfBusiness` int(2) NOT NULL,
  `FixedAssets` int(10) NOT NULL,
  `turnover` int(10) NOT NULL,
  `CreditHistory` int(2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
