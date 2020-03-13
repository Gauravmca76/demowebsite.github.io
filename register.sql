-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2020 at 07:03 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(20) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `contact`, `email`, `pass`) VALUES
('Amit', 2147483647, 'amitchoudhury77@yaho', 'ss'),
('Gaurav Singh', 982298345, 'gaurav20297@gmail.com', 'gaurav'),
('Saurabh Singh', 2147483647, 'saurabh@gmail.com', 'saurabh'),
('Sujit Prasad', 2147483647, 'sujit.prasads@gmail.com', 'aa'),
('Priya Naidu', 2147483647, 'priyanaidu77@gmail.com', 'ss'),
('Ankul Joshi', 2147483647, 'ankul.joshi@gmail.com', 'abc'),
('Ankul Joshi', 2147483647, 'ankul.joshi@gmail.com', 'aaa'),
('Adarsh Singh', 2147483647, 'adarsh.singh@gmail.com', 'ad'),
('Gaurav Shetty', 2147483647, 'gaurav.shetty@gmail.com', 'guru');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
