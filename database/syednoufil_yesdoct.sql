-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2020 at 07:13 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `syednoufil_yesdoct`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `pass`, `updationDate`) VALUES
(1, 'admin', 'passcode', '28-12-2016 11:42:05 AM');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `doctorSpecialization` varchar(255) DEFAULT NULL,
  `doctorId` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `consultancyFees` int(11) DEFAULT NULL,
  `appointmentDate` varchar(255) DEFAULT NULL,
  `appointmentTime` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `userStatus` int(11) DEFAULT NULL,
  `doctorStatus` int(11) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `doctorSpecialization`, `doctorId`, `userId`, `consultancyFees`, `appointmentDate`, `appointmentTime`, `postingDate`, `userStatus`, `doctorStatus`, `updationDate`) VALUES
(6, 'Dentist', 10, 8, 1000, '2020-07-31', '5:30 PM', '2020-07-31 12:22:09', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `diseasedetails`
--

CREATE TABLE `diseasedetails` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `d_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `diseasename`
--

CREATE TABLE `diseasename` (
  `id` int(11) NOT NULL,
  `d_name` varchar(100) NOT NULL,
  `intro` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diseasename`
--

INSERT INTO `diseasename` (`id`, `d_name`, `intro`) VALUES
(2, 'Absence seizure', 'Absence seizure define as sudden loss of consciousness. Children are more affected to this seizure than adults. It occurs for few second patient experienced that he or she is gazing blankly into environment for a few seconds. Then after a few seconds seizure become completely disappeared. In this seizure, there is no risk of physical injury.'),
(3, 'Acanthosis Nigricans ', ' It is defining as dark and pigmented discoloration of the skin folds and creases. Mostly it affected the\r\narmpit, groin and neck area. Pigmented area become hard and thickened.\r\nIt typically affects the people who are obese and have diabetic mellitus. It is an alarming sign as it is the\r\nsign of internal organ cancer like liver and stomach. If it occurs in childhood then these children are\r\nmore prone to developed diabetic mellitus type 2 in future life.'),
(4, '', ''),
(5, '', ''),
(6, '', ''),
(7, 'Sugar', '<p>s</p>\r\n<p>s</p>\r\n<p>s</p>\r\n<p>s</p>\r\n<p>s</p>\r\n<p>s</p>\r\n<p>s</p>'),
(8, 'demo', '<ol><li>a</li><li>a</li><li>a</li><li>a</li><li>a</li><li>a</li><li>a</li><li>a</li><li>a</li><li>aa</li></ol>'),
(9, 'demo123', '<ol><li>abcs</li><li>a</li><li>a</li><li>a</li><li>a</li><li>a</li><li>a</li><li>a</li><li>a</li><li>a</li><li>a</li><li>a</li><li>a</li><li>a</li></ol>');

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `id` int(11) NOT NULL,
  `dname` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `long_desc` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`id`, `dname`, `description`, `long_desc`) VALUES
(5, 'Abdominal aortic aneurysm', 'It is a condition in which there is present a dilated lower part of aorta. Aorta arises from heart and its anatomic position is in the middle of chest and abdomen to keep it in check is extremely important because rupture of aorta is life-threatening and require emergency surgery.', 'Symptoms\r\nThere is variation in the growth pattern. Some never ruptures, some stay small, some\r\nenlarge quickly over time. It&#39;s difficult to detect thatâ€™s why it remains silent and without\r\nany clinical manifestation for a very long time.\r\na. A pulsation near the umbilicus\r\nb. Back ache\r\nc. Deep and continual pain in or side of abdomen.\r\n\r\nCauses\r\n\r\nï‚· Arteriosclerosis = when fats/lipids are deposited and hardened in the inner\r\nlining of aorta and other major vessels\r\nï‚· A bacterial and fungal infection can sometime precipitate as abdominal\r\naortic aneurysm.\r\nï‚· Hypertension\r\nï‚· Traumatic incident like car accidents may cause abdominal aortic\r\naneurysm\r\nï‚· Inflammation in the blood vessels.\r\n\r\nComplications\r\nMany complications occur when there is aortic dissection in one or more layers of aorta.\r\nFaster growing aneurysm which are more likely to rupture causes life threatening\r\ncomplication.\r\n\r\na. Acute and deep abdominal or back ache feels like tearing sensation\r\nb. Hypotens'),
(6, 'Symptoms', '', ' There is variation in the growth pattern. Some never ruptures, some stay small, some\r\nenlarge quickly over time. It&#39;s difficult to detect thatâ€™s why it remains silent and without\r\nany clinical manifestation for a very long time.\r\na. A pulsation near the umbilicus\r\nb. Back ache\r\nc. Deep and continual pain in or side of abdomen.');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) DEFAULT NULL,
  `doctorName` varchar(255) DEFAULT NULL,
  `address` longtext,
  `docFees` varchar(255) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `docEmail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `specilization`, `doctorName`, `address`, `docFees`, `contactno`, `docEmail`, `password`, `creationDate`, `updationDate`) VALUES
(10, 'Dentist', 'Dr Ejaz', 'Karachi', '1000', 333, 'drejaz@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2020-07-31 11:52:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctorslog`
--

CREATE TABLE `doctorslog` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorslog`
--

INSERT INTO `doctorslog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(20, 10, 'drejaz@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-31 12:17:19', '31-07-2020 05:49:49 PM', 1),
(21, NULL, 'saleem@gmail.com', 0x3a3a3100000000000000000000000000, '2020-08-04 05:01:07', NULL, 0),
(22, NULL, 'saleem@gmail.com', 0x3a3a3100000000000000000000000000, '2020-08-04 05:01:12', NULL, 0),
(23, NULL, 'saleem@gmail.com', 0x3a3a3100000000000000000000000000, '2020-08-04 05:01:45', NULL, 0),
(24, NULL, 'saleem@gmail.com', 0x3a3a3100000000000000000000000000, '2020-08-04 05:01:51', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `doctorspecilization`
--

CREATE TABLE `doctorspecilization` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorspecilization`
--

INSERT INTO `doctorspecilization` (`id`, `specilization`, `creationDate`, `updationDate`) VALUES
(2, 'General Physician', '2016-12-28 06:38:12', '0000-00-00 00:00:00'),
(3, 'Dermatologist', '2016-12-28 06:38:48', '0000-00-00 00:00:00'),
(4, 'Homeopath', '2016-12-28 06:39:26', '0000-00-00 00:00:00'),
(6, 'Dentist', '2016-12-28 06:40:08', '0000-00-00 00:00:00'),
(7, 'Ear-Nose-Throat (Ent) Specialist', '2016-12-28 06:41:18', '0000-00-00 00:00:00'),
(10, 'Bones Specialist demo', '2017-01-07 08:07:53', '0000-00-00 00:00:00'),
(13, 'Gastroenterologist', '2020-07-31 11:49:28', '2020-07-31 11:49:41');

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
(13, 'john doe', 'johndoe@xyz.com', '12344321333', '25', 'yes', 'no', 'no', 'yes', 'demo text demo text demo text demo text demo text demo textdemo text demo text demo text demo text demo text demo text demo text demo text demo text demo text demo text demo text demo text', 0x636166652d747261636b657220283129202831292e6a7067, 'no'),
(14, 'Arif Qammar', 'ranger559@live.com', '+96871502737', '28', 'no', 'no', 'no', 'no', 'headache', '', 'no'),
(15, 'Arif Qammar', 'ranger559@live.com', '71502737', '28', 'yes', 'yes', 'yes', 'yes', 'ersgsdf sg', '', 'no'),
(16, 'Arif Qammar', 'ranger559@live.com', '71502737', '28', 'no', 'no', 'no', 'no', 'jj', '', 'no'),
(17, 'zxc', 'zxc@zxc.cvb', '112233445556', '24', 'no', 'no', 'no', 'no', 'djncsdjkcnweanca', '', 'no'),
(18, 'sdjhcbjs', 'zxjhcbh@jhbcdh.cnm', '283921998', '45', 'no', 'no', 'no', 'no', 'hellocn hjnx ncjkns sxnsh asjkhui jkdn jhdhx', '', 'no'),
(19, 'f', 'ranger559@live.com', 'f', 'f', 'no', 'no', 'no', 'no', 'cvbvbb', '', 'no'),
(20, 'Sameer chun', 'sameershk819@gmail.com', '03303908092', '26', 'no', 'yes', 'no', 'no', 'da dada dada asdasd asdadasd ad', '', 'no'),
(21, 'Zeeshan Soori', 'zeeshansoori@yahoo.com', '03132615588', '26', 'no', 'no', 'no', 'no', 'dsad sadadas da', '', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactus`
--

CREATE TABLE `tblcontactus` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` bigint(12) DEFAULT NULL,
  `message` mediumtext,
  `PostingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `AdminRemark` mediumtext,
  `LastupdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `IsRead` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblmedicalhistory`
--

CREATE TABLE `tblmedicalhistory` (
  `ID` int(10) NOT NULL,
  `PatientID` int(10) DEFAULT NULL,
  `BloodPressure` varchar(200) DEFAULT NULL,
  `BloodSugar` varchar(200) NOT NULL,
  `Weight` varchar(100) DEFAULT NULL,
  `Temperature` varchar(200) DEFAULT NULL,
  `MedicalPres` mediumtext,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblpatient`
--

CREATE TABLE `tblpatient` (
  `ID` int(10) NOT NULL,
  `Docid` int(10) DEFAULT NULL,
  `PatientName` varchar(200) DEFAULT NULL,
  `PatientContno` bigint(10) DEFAULT NULL,
  `PatientEmail` varchar(200) DEFAULT NULL,
  `PatientGender` varchar(50) DEFAULT NULL,
  `PatientAdd` mediumtext,
  `PatientAge` int(10) DEFAULT NULL,
  `PatientMedhis` mediumtext,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpatient`
--

INSERT INTO `tblpatient` (`ID`, `Docid`, `PatientName`, `PatientContno`, `PatientEmail`, `PatientGender`, `PatientAdd`, `PatientAge`, `PatientMedhis`, `CreationDate`, `UpdationDate`) VALUES
(6, 10, 'Saleem Habib', 30022224, 'saleem@gmail.com', 'male', 'Karachi', 25, 'Nothing to write', '2020-07-31 12:19:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(24, NULL, 'saleem@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-31 12:20:08', NULL, 0),
(25, 8, 'saleem@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-31 12:21:34', '31-07-2020 05:52:45 PM', 1),
(26, NULL, 'admin', 0x3a3a3100000000000000000000000000, '2020-09-27 00:01:45', NULL, 0),
(27, NULL, 'admin', 0x3a3a3100000000000000000000000000, '2020-09-27 00:03:39', NULL, 0),
(28, NULL, 'admin', 0x3a3a3100000000000000000000000000, '2020-09-27 00:03:54', NULL, 0),
(29, NULL, 'admin', 0x3a3a3100000000000000000000000000, '2020-09-27 00:04:16', NULL, 0),
(30, NULL, 'admin', 0x3a3a3100000000000000000000000000, '2020-09-27 00:06:26', NULL, 0),
(31, NULL, 'admin', 0x3a3a3100000000000000000000000000, '2020-09-27 00:08:53', NULL, 0),
(32, NULL, 'admin', 0x3a3a3100000000000000000000000000, '2020-09-27 00:10:31', NULL, 0),
(33, NULL, 'admin', 0x3a3a3100000000000000000000000000, '2020-09-27 00:10:39', NULL, 0),
(34, NULL, 'admin', 0x3a3a3100000000000000000000000000, '2020-09-27 00:11:09', NULL, 0),
(35, NULL, 'admin', 0x3a3a3100000000000000000000000000, '2020-09-27 00:11:44', NULL, 0),
(36, NULL, 'admin', 0x3a3a3100000000000000000000000000, '2020-09-27 00:12:23', NULL, 0),
(37, 1, 'admin', 0x3a3a3100000000000000000000000000, '2020-09-27 00:13:11', NULL, 1),
(38, NULL, 'admin', 0x3a3a3100000000000000000000000000, '2020-09-28 10:10:09', NULL, 0),
(39, NULL, 'admin', 0x3a3a3100000000000000000000000000, '2020-09-28 10:12:20', NULL, 0),
(40, NULL, 'admin', 0x3a3a3100000000000000000000000000, '2020-09-28 10:12:30', NULL, 0),
(41, NULL, 'admin', 0x3a3a3100000000000000000000000000, '2020-10-02 12:20:17', NULL, 0),
(42, NULL, 'admin', 0x3a3a3100000000000000000000000000, '2020-10-02 12:21:04', NULL, 0),
(43, NULL, 'admin', 0x3a3a3100000000000000000000000000, '2020-10-02 12:22:30', NULL, 0),
(44, 1, 'admin', 0x3a3a3100000000000000000000000000, '2020-10-02 12:26:24', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `address` longtext,
  `city` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `address`, `city`, `gender`, `email`, `password`, `regDate`, `updationDate`) VALUES
(8, 'saleem', 'karachi', 'Karachi', 'male', 'saleem@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2020-07-31 12:21:14', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diseasedetails`
--
ALTER TABLE `diseasedetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diseasename`
--
ALTER TABLE `diseasename`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorslog`
--
ALTER TABLE `doctorslog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
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
-- Indexes for table `tblcontactus`
--
ALTER TABLE `tblcontactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblmedicalhistory`
--
ALTER TABLE `tblmedicalhistory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpatient`
--
ALTER TABLE `tblpatient`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `diseasedetails`
--
ALTER TABLE `diseasedetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `diseasename`
--
ALTER TABLE `diseasename`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doctorslog`
--
ALTER TABLE `doctorslog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tblcontactus`
--
ALTER TABLE `tblcontactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblmedicalhistory`
--
ALTER TABLE `tblmedicalhistory`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblpatient`
--
ALTER TABLE `tblpatient`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
