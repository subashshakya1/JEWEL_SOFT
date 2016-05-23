-- phpMyAdmin SQL Dump
-- version 4.2.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 23, 2016 at 06:50 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jewel_soft`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
`bill_no` int(4) NOT NULL,
  `date` date NOT NULL,
  `gold_rate` int(20) DEFAULT NULL,
  `cust_name` varchar(30) NOT NULL,
  `prod_name` varchar(30) NOT NULL,
  `total` int(20) NOT NULL,
  `wage` int(20) DEFAULT NULL,
  `jarti` float DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_no`, `date`, `gold_rate`, `cust_name`, `prod_name`, `total`, `wage`, `jarti`) VALUES
(62, '2016-02-29', 54200, 'Sanjeeb Bajra Shakya', 'Bracelet 24 ct.', 92500, 400, 0.2),
(60, '2016-02-16', 45000, 'Kuber Bajra Shakya', 'Gold Card', 108300, 500, 0.4),
(61, '2016-02-16', 50000, 'Subash Bajra Shakya', 'Gold Chain', 151900, 500, 0.03),
(63, '0000-00-00', 60000, 'Hasta Gurung', 'Locket Buddha', 57200, 400, 0.2),
(64, '0000-00-00', 45000, 'Manish Kumar Maharajan', 'Gold ring', 60000, 400, 0.03),
(65, '0000-00-00', 45000, 'Ratish Udas Tuladhar', 'Gold Ring', 94500, 200, 0.1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
`cust_id` int(3) NOT NULL,
  `cust_name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `ph_no` int(100) NOT NULL,
  `image` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=505 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `address`, `ph_no`, `image`) VALUES
(504, 'Santosh', 'Dhalku', 9845454, 'img/12471473_951662874921374_8765856536905576945_o.jpg'),
(493, 'Jyoti Kumar Thapa', 'Bijeswori', 98084554, 'img/DSC02622.JPG'),
(491, 'Hasta Gurung', 'Khusibun', 987877878, 'img/DSC04302.JPG'),
(492, 'Elina Maharjan', 'Khusibun', 2147483647, 'img/FILE0092.jpg'),
(487, 'Kuber B', 'Bijeswori', 2147483647, 'img/SP_A0371.JPG'),
(488, 'Subash Bajra Shakya', 'Swoyambhu', 14282870, 'img/SPM_A1601.jpg'),
(489, 'Sanjeeb Bajra Shakya', 'Swoyambhu', 2147483647, 'img/FILE1693.jpg'),
(494, 'Bijay Gurung', 'White Gumba', 2147483647, 'img/SPM_A1304.jpg'),
(496, 'Sugen Tuladhar', 'Lazimpat', 2147483647, 'img/DSC04310.JPG'),
(497, 'Sanjog Bista', 'Satungal', 984651487, 'img/DSC04315.JPG'),
(498, 'Bhawaraj Rimal', 'Gongabu', 984657878, 'img/DSC04322.JPG'),
(499, 'Prajwol Ratna Shakya', 'Maru', 986547854, 'img/IMG_0046.JPG'),
(500, 'Manish Kumar Maharajan', 'Maru', 988124578, 'img/IMG_0008.JPG'),
(501, 'Mukesh Malakar', 'Janbahal', 98653245, 'img/IMG_0043.JPG'),
(502, 'Ratish Udas Tuladhar', 'Dhalku', 984651244, 'img/IMG_0042.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `owner_id` int(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`owner_id`, `username`, `password`) VALUES
(1, 'subash', 'shakya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
 ADD PRIMARY KEY (`bill_no`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
 ADD PRIMARY KEY (`owner_id`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
MODIFY `bill_no` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `cust_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=505;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
