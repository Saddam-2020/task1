-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2020 at 05:06 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yesdoct`
--

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `id` int(11) NOT NULL,
  `dname` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`id`, `dname`, `description`) VALUES
(1, 'dhyrea', 'this is demo data this is demo data this is demo data. '),
(2, 'nausea', 'this is demo data this is demo data this is demo data'),
(3, 'diabetes', 'this is demo data this is demo data this is demo data this is demo data this is demo data this is demo data');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `item_number` varchar(50) NOT NULL,
  `txn_id` varchar(50) NOT NULL,
  `payment_gross` float(10,2) NOT NULL,
  `currency_code` varchar(5) NOT NULL,
  `payment_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `item_number`, `txn_id`, `payment_gross`, `currency_code`, `payment_status`) VALUES
(1, '3', '04419090WL0169404', 15.00, 'USD', 'Pending'),
(2, '3', '3WC118995X3065139', 15.00, 'USD', 'Pending'),
(3, '3', '7EE45366PP366023M', 15.00, 'USD', 'Pending'),
(4, '3', '25497036MT564352H', 15.00, 'USD', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `age` varchar(20) NOT NULL,
  `diabetes` varchar(20) NOT NULL,
  `medication` varchar(20) NOT NULL,
  `allergy` varchar(20) NOT NULL,
  `bp` varchar(20) NOT NULL,
  `message` longtext NOT NULL,
  `image` blob NOT NULL,
  `paid` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `name`, `email`, `phone`, `age`, `diabetes`, `medication`, `allergy`, `bp`, `message`, `image`, `paid`) VALUES
(1, 'waleed bhatti', 'waleed.akbarbhatti@gmail.com', '4567788', '21', '', '', 'on', 'on', 'demo', '', ''),
(2, 'waleed bhatti', 'waleed.akbarbhatti@gmail.com', '4567788', '21', '', '', 'on', 'on', 'demo', '', ''),
(3, 'Waleed Akbar Bhatti', 'waleed.akbarbhatti@gmail.com', '+923238878877', '21', '', '', 'yes', 'no', 'jiocjdio', '', ''),
(4, 'Waleed Akbar Bhattiabc', 'abc@xyz.com', '090078601', '70', '', '', 'yes', 'yes', 'scdasscmkwcmweokx', 0x6c6f676f2e706e67, ''),
(5, 'Waleed Akbar Bhatti', 'waleed.akbarbhatti@gmail.com', '+923238878877', '21', '', '', 'no', 'yes', 'nsdjk ncjksd csdkc jks', '', 'no'),
(6, 'alex', 'alex@123.com', '12345678901', '123', '', '', 'no', 'yes', 'ndsjkcnksdlmxas,', '', 'no'),
(7, 'Sign Master', 'waleed.akbarbhatti@gmail.com', '03238878877', '21', '', '', 'yes', 'yes', 'hsdncs', '', 'no'),
(8, 'Waleed Akbar Bhatti', 'waleed.akbarbhatti@gmail.com', '+923238878877', '70', '', '', 'no', 'no', 'xcnkjksd', '', 'no'),
(9, 'skdjncsj', 'sdn@ksdcn.com', '1123213342234', '12', '', '', 'no', 'no', 'smc  njknd', '', 'no'),
(10, 'Sign Master', 'acv@aw.com', '03238878877', '21', '', '', 'no', 'no', 'ghvghxfh', '', 'no'),
(11, '', '', '', '', '', '', 'no', 'no', '', '', 'no'),
(12, 'sdkmc', 'mxcm@r.com', 'sdcnjsdk', '', '', '', 'no', 'no', 'sjkdc njkwnwjk', '', 'no'),
(13, 'john doe', 'johndoe@xyz.com', '12344321333', '25', 'yes', 'no', 'no', 'yes', 'demo text demo text demo text demo text demo text demo textdemo text demo text demo text demo text demo text demo text demo text demo text demo text demo text demo text demo text demo text', 0x636166652d747261636b657220283129202831292e6a7067, 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
