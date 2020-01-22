-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 01:22 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crime`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `c_id` int(11) NOT NULL,
  `a_no` varchar(12) NOT NULL,
  `location` varchar(50) NOT NULL,
  `type_crime` varchar(50) NOT NULL,
  `d_o_c` date NOT NULL,
  `description` varchar(7000) NOT NULL,
  `inc_status` varchar(50) DEFAULT 'Unassigned',
  `pol_status` varchar(50) DEFAULT 'null',
  `p_id` varchar(50) DEFAULT 'Null'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`c_id`, `a_no`, `location`, `type_crime`, `d_o_c`, `description`, `inc_status`, `pol_status`, `p_id`) VALUES
(1, '123214521452', 'Tollygunge', 'Robbery', '2018-12-06', 'My Home has been Robbed.', 'Assigned', 'ChargeSheet Filed', 't101'),
(2, '251479364V', 'Anandapur', 'Theft', '2019-12-01', 'adcadcsdcd', 'Assigned', 'In Process', 'a102'),
(3, '315479663V', 'Anandapur', 'Theft', '2020-01-14', 'ehieurfheurhfie', 'Unassigned', 'null', 'Null');

-- --------------------------------------------------------

--
-- Table structure for table `crimereg`
--

CREATE TABLE `crimereg` (
  `cid` varchar(255) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `cnickname` varchar(255) NOT NULL,
  `csex` varchar(255) NOT NULL,
  `coccupation` varchar(255) NOT NULL,
  `ctype` varchar(255) NOT NULL,
  `caddress` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crimereg`
--

INSERT INTO `crimereg` (`cid`, `cname`, `cnickname`, `csex`, `coccupation`, `ctype`, `caddress`) VALUES
('fghdg', 'dghdfgh', 'dfgdfg', 'Male', 'fgdrgf', 'Theft', 'srgdfgfb'),
('5421365417', 'Suresh muthumala', 'lamba', 'Male', 'Fisheries', 'Molestation', 'Kurunagala');

-- --------------------------------------------------------

--
-- Table structure for table `head`
--

CREATE TABLE `head` (
  `h_id` varchar(50) NOT NULL,
  `h_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `head`
--

INSERT INTO `head` (`h_id`, `h_pass`) VALUES
('head@kp', 'head');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msgid` int(255) NOT NULL,
  `to_user` varchar(30) DEFAULT NULL,
  `from_user` varchar(30) DEFAULT NULL,
  `deleted` varchar(3) DEFAULT 'no',
  `sent_deleted` varchar(3) DEFAULT 'no',
  `message` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msgid`, `to_user`, `from_user`, `deleted`, `sent_deleted`, `message`) VALUES
(1, 'SSDsadaswd', 'afreen@gmail.com', 'no', 'no', 'dSDSDsd'),
(2, 'tfhfj', 'afreen@gmail.com', 'no', 'no', 'hfjhghvmhbm'),
(3, 'tfhfj', 'afreen@gmail.com', 'no', 'no', 'hfjhghvmhbm'),
(4, 'tfhfj', 'afreen@gmail.com', 'no', 'no', 'hfjhghvmhbm'),
(5, 'tfhfj', 'afreen@gmail.com', 'no', 'no', 'hfjhghvmhbm'),
(6, 'tfhfj', 'afreen@gmail.com', 'no', 'no', 'hfjhghvmhbm'),
(7, 'afreen@gmail.com', 'afreen@gmail.com', 'no', 'no', 'rrsrtgsdete'),
(8, 'afreen@gmail.com', 'afreen@gmail.com', 'no', 'no', 'rrsrtgsdete');

-- --------------------------------------------------------

--
-- Table structure for table `missing`
--

CREATE TABLE `missing` (
  `mid` varchar(255) NOT NULL,
  `mfname` varchar(255) NOT NULL,
  `mnname` varchar(255) NOT NULL,
  `mage` int(100) NOT NULL,
  `msex` varchar(255) NOT NULL,
  `mheight` varchar(255) NOT NULL,
  `mweight` varchar(255) NOT NULL,
  `mlseen` varchar(255) NOT NULL,
  `mappd` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `missing`
--

INSERT INTO `missing` (`mid`, `mfname`, `mnname`, `mage`, `msex`, `mheight`, `mweight`, `mlseen`, `mappd`) VALUES
('84654165', 'kashypa', 'kapi', 54, 'Male', '114', '58', 'katunataka 10.45	', 'white shirt	'),
('84654165', 'kashypa', 'kapi', 54, 'Male', '114', '58', 'katunataka 10.45	', 'white shirt	'),
('84654165', 'kashypa', 'kapi', 54, 'Male', '114', '58', 'katunataka 10.45	', 'white shirt	');

-- --------------------------------------------------------

--
-- Table structure for table `mortem`
--

CREATE TABLE `mortem` (
  `mmid` varchar(255) NOT NULL,
  `pfname` varchar(255) NOT NULL,
  `psex` varchar(255) NOT NULL,
  `pfirno` varchar(255) NOT NULL,
  `presult` varchar(255) NOT NULL,
  `pdatedeath` date NOT NULL,
  `pdescase` varchar(255) NOT NULL,
  `pplace` varchar(255) NOT NULL,
  `pdname` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mortem`
--

INSERT INTO `mortem` (`mmid`, `pfname`, `psex`, `pfirno`, `presult`, `pdatedeath`, `pdescase`, `pplace`, `pdname`) VALUES
('62465', 'dfgdfg', 'Male', 'd3564564', 'thryhryhtyhtyhtyhb			', '2019-03-04', 'yhtyhtyhryhrty', 'rghryhtyh', 'trhryhtyh');

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

CREATE TABLE `police` (
  `p_name` varchar(50) NOT NULL,
  `p_id` varchar(50) NOT NULL,
  `spec` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `p_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police`
--

INSERT INTO `police` (`p_name`, `p_id`, `spec`, `location`, `p_pass`) VALUES
('Manish Singh', 'a101', 'Murder', 'Anandapur', 'manish'),
('Jay Singh', 'a102', 'All', 'Anandapur', 'jay'),
('Jhom', 'jhon@gmail.com', 'theft', 'Matara', '789'),
('Nimal', 'nimal@gmail.com', 'robbery', 'Galle', '876'),
('Suvendu Ghosh', 't101', 'Robbery', 'Tollygunge', 'suvendu');

-- --------------------------------------------------------

--
-- Table structure for table `police_station`
--

CREATE TABLE `police_station` (
  `i_id` varchar(50) NOT NULL,
  `i_name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `i_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police_station`
--

INSERT INTO `police_station` (`i_id`, `i_name`, `location`, `i_pass`) VALUES
('jane@gmail.com', 'Jane', 'Matara', '456'),
('mary@gmail.com', 'marry', 'Galle', '123'),
('shah@anandapur', 'Shahbaz', 'Anandapur', 'shahbaz'),
('shivam@tollygunge', 'Shivam', 'Tollygunge', 'shivam'),
('sumith@gmail.com', 'Sumith', 'Kandy', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `update_case`
--

CREATE TABLE `update_case` (
  `c_id` int(11) NOT NULL,
  `d_o_u` timestamp NOT NULL DEFAULT current_timestamp(),
  `case_update` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `update_case`
--

INSERT INTO `update_case` (`c_id`, `d_o_u`, `case_update`) VALUES
(1, '2018-12-17 10:32:06', 'Criminal Verified'),
(1, '2018-12-17 10:32:12', 'Criminal Caught'),
(1, '2018-12-17 10:32:15', 'Criminal Interrogated'),
(1, '2018-12-17 10:32:21', 'Criminal Accepted the Crime'),
(1, '2018-12-17 10:32:26', 'Criminal Charged'),
(1, '2018-12-17 10:32:51', 'The case has been moved to Court.'),
(1, '2018-12-17 10:32:59', 'Criminal Verified'),
(1, '2019-12-16 10:12:39', 'Criminal Charged'),
(1, '2019-12-16 10:15:21', 'rgtdthfjyfuj');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_name` varchar(50) NOT NULL,
  `u_id` varchar(50) NOT NULL,
  `u_pass` varchar(50) NOT NULL,
  `u_addr` varchar(100) NOT NULL,
  `a_no` varchar(12) NOT NULL,
  `gen` varchar(15) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `vkey` varchar(255) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `create_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_name`, `u_id`, `u_pass`, `u_addr`, `a_no`, `gen`, `mob`, `vkey`, `verified`, `create_date`) VALUES
('Satyansh Kumar', 'satyansh123@gmail.com', 'satyansh', 'Ranchi', '123214521452', 'Male', 9854123654, '', 0, '2020-01-19'),
('Sadani Dangamuwa', 'sadani@gmail.com', '123456789', 'Galle', '123456789101', 'Female', 771234567, '', 0, '2020-01-19'),
('srdfsr', 'asd@gmail.com', 'qwertyuiop', 'kadfgd', '1268575475', 'Male', 5285858585, '', 0, '2020-01-19'),
('Afreen Rumie', 'afreen@gmail.com', '123456789', 'Colombo', '251479364V', 'Female', 773621458, '', 0, '2020-01-19'),
('Harini Dangammuwa', 'ashminikarunarathne5@gmail.com', '1234567889', 'g', '315479663V', 'Female', 773659456, '916434a4a00814a228eddc617a3e3bfa', 1, '2020-01-21');

-- --------------------------------------------------------

--
-- Table structure for table `wanted`
--

CREATE TABLE `wanted` (
  `wid` varchar(255) NOT NULL,
  `wfname` varchar(255) NOT NULL,
  `wnname` varchar(255) NOT NULL,
  `wage` varchar(100) NOT NULL,
  `wsex` varchar(255) NOT NULL,
  `wplace` varchar(255) NOT NULL,
  `wdes` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wanted`
--

INSERT INTO `wanted` (`wid`, `wfname`, `wnname`, `wage`, `wsex`, `wplace`, `wdes`) VALUES
('52257727', 'Mahesha', 'Mahi', '78', 'Female', 'Pinnaduwa', 'Underworld gang			');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msgid`);

--
-- Indexes for table `police`
--
ALTER TABLE `police`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `police_station`
--
ALTER TABLE `police_station`
  ADD PRIMARY KEY (`i_id`),
  ADD UNIQUE KEY `location` (`location`);

--
-- Indexes for table `update_case`
--
ALTER TABLE `update_case`
  ADD UNIQUE KEY `d_o_u` (`d_o_u`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`a_no`),
  ADD UNIQUE KEY `u_id` (`u_id`),
  ADD UNIQUE KEY `mob` (`mob`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msgid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
