-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 19, 2018 at 10:38 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `idComments` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`idComments`, `username`, `comment`, `date`) VALUES
(1, 'testuser', 'Hello', '2018-06-18 16:08:49'),
(2, 'tester', 'sdd', '2018-06-19 00:05:31'),
(3, 'tester', 'sdd', '2018-06-19 00:13:34'),
(4, 'tester', 'Slam jam', '2018-06-19 00:22:09'),
(5, 'Amanda Coots', '', '2018-06-20 01:30:22'),
(6, 'Amanda Coots', 'Another Test Comment', '2018-06-20 01:40:54'),
(7, 'Slam Jam', 'Test er out!', '2018-06-20 01:42:57'),
(8, 'Kyle', 'Hello', '2018-06-20 01:47:33'),
(9, 'Kyle', 'Hello Again', '2018-06-20 01:49:34'),
(10, 'Bob', 'Yes Sir', '2018-06-20 01:49:50'),
(11, 'Bob', 'Something Else', '2018-06-20 01:55:44'),
(12, 'Bob', 'Something Else', '2018-06-20 01:56:10'),
(13, 'Bob', 'Something Else', '2018-06-20 01:58:39'),
(14, 'Flapper Due', 'Napper Be', '2018-06-20 01:59:12'),
(15, 'Some Name', 'blablabla', '2018-06-20 03:09:45'),
(16, 'Frankenstien', 'Nuts and Bolts!!!', '2018-06-20 03:10:23'),
(17, 'Slacker Jacker', 'Nack nack', '2018-06-20 03:12:04'),
(18, 'Sammy Samson', 'Slam jam is the jam', '2018-06-20 03:12:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`idComments`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `idComments` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
