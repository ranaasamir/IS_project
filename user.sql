-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2018 at 08:37 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samplelogindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `profession` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `profession`) VALUES
('abc', '202cb962ac59075b964b07152d234b70', 'abc@hotmail.com', 'Doctor'),
('gigi', 'ec0c8fe7ad80dfe93c0de35448b1d581', 'gigi@hotmail.com', 'Student'),
('ingy', '202cb962ac59075b964b07152d234b70', 'nehalsamir@gmail.com', 'TA'),
('Laila', '202cb962ac59075b964b07152d234b70', 'laila@gmail.com', 'Student'),
('layan', '202cb962ac59075b964b07152d234b70', 'layan@hotmail.com', 'TA'),
('mohamed', '202cb962ac59075b964b07152d234b70', 'mohamed@hotmail.com', 'TA'),
('nehal', '81dc9bdb52d04dc20036dbd8313ed055', 'nehal@hotmail.com', 'Student'),
('rana', '900150983cd24fb0d6963f7d28e17f72', 'rana_samir97@hotmail.com', 'Student'),
('shorouk', '47bce5c74f589f4867dbd57e9ca9f808', 'mohanad_rana@hotmail.com', 'Doctor'),
('soliman', '202cb962ac59075b964b07152d234b70', 'soliman@gmail.com', 'Doctor'),
('yasmine', '698d51a19d8a121ce581499d7b701668', 'yasmeen.samir90@gmail.com', 'Doctor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
