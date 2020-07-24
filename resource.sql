-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2019 at 12:42 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resource`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`name`, `email`, `id`, `password`) VALUES
('', 'hfuydi', '', ''),
('devesh', 'devesh@gmail.com', '999', 'devesh'),
('kkkkkkkkk', 'kkk@gmail.com', '22', 'kkk'),
('manish', 'manish@gmail.com', '11111', 'manish'),
('Pratiksha ', 'pratiksha.p.k.17@gmail.com', '123', 'pratiksha'),
('rahul', 'rahul@gmail.com', '777', '888');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `rctdate` date NOT NULL,
  `pname` varchar(100) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `intdate` date NOT NULL,
  `interviewer` varchar(100) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `frcd` date NOT NULL,
  `rccd` date NOT NULL,
  `type` varchar(100) NOT NULL,
  `ifd` date NOT NULL,
  `rcpcd` date NOT NULL,
  `cpd` date NOT NULL,
  `srd` date NOT NULL,
  `od` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `name`, `status`, `rctdate`, `pname`, `skills`, `intdate`, `interviewer`, `feedback`, `salary`, `frcd`, `rccd`, `type`, `ifd`, `rcpcd`, `cpd`, `srd`, `od`) VALUES
(1, 'parag', 'Hired', '0000-00-00', 'kii', 'data structure', '2019-05-27', 'chandan sir', '', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(3, 'MANISH RAJ', 'Hired & on-board', '0000-00-00', 'pool', 'arduino', '2019-05-27', 'rahul sir', '', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(4, 'akshay', 'Hired & on-board', '0000-00-00', '', 'machine learning', '2019-06-05', 'chandan sir', '', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(5, 'virat', 'Hired & on-board', '2019-05-31', '', 'data science', '2019-06-01', 'madhav sir', '', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(6, 'Pratiksha', 'Hired', '0000-00-00', '', 'python', '2019-06-04', 'santosh kumar', '', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(7, 'Pratiksha Kumari', 'Hired', '0000-00-00', 'pool', 'python', '2019-06-04', 'santosh kumar', 'good', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `Req_no` int(100) NOT NULL,
  `proj_name` varchar(100) NOT NULL,
  `skill_set` varchar(100) NOT NULL,
  `no_resc` int(11) NOT NULL,
  `requestor` varchar(50) NOT NULL,
  `req_date` date NOT NULL,
  `Status` varchar(50) NOT NULL DEFAULT 'Requested',
  `fwd_partner_date` date NOT NULL,
  `rec_cv_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`Req_no`, `proj_name`, `skill_set`, `no_resc`, `requestor`, `req_date`, `Status`, `fwd_partner_date`, `rec_cv_date`) VALUES
(1, 'Proj A', '3 HTML, 1 python', 0, '', '2019-05-22', 'CV sent from partner', '2019-05-31', '2019-05-31'),
(4, 'Project b', 'html, php', 3, 'Manish', '0000-00-00', 'CV sent from partner', '2019-05-31', '2019-05-31'),
(6, 'Project abc', 'python', 2, 'pratiksha', '2019-05-27', 'Interview processed', '0000-00-00', '0000-00-00'),
(7, 'Project abc', 'java', 2, 'pratiksha', '2019-05-27', 'Forwarded to partner', '2019-05-31', '0000-00-00'),
(8, 'Project b', 'java', 2, 'priya', '2019-05-31', 'CV sent from partner', '2019-05-31', '2019-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `resource_pool`
--

CREATE TABLE `resource_pool` (
  `res_no` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `skills` varchar(20) NOT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resource_pool`
--

INSERT INTO `resource_pool` (`res_no`, `name`, `skills`, `status`) VALUES
(3, 'MANISH RAJ', 'arduino', 'Allocated'),
(4, 'akshay', 'machine learning', 'Availaible'),
(5, 'virat', 'data science', 'Availaible');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`Req_no`);

--
-- Indexes for table `resource_pool`
--
ALTER TABLE `resource_pool`
  ADD PRIMARY KEY (`res_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `Req_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `resource_pool`
--
ALTER TABLE `resource_pool`
  MODIFY `res_no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
