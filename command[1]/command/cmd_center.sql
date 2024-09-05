-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2022 at 07:16 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmd_center`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `cid` int(11) NOT NULL,
  `ctype` varchar(100) NOT NULL,
  `plate` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Vacant',
  `did` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`cid`, `ctype`, `plate`, `status`, `did`) VALUES
(2, 'Toyota', 'UAB 678K', 'Booked', '3');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `cid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `dname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `dname`) VALUES
(3, 'Science');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `did` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `license` varchar(100) NOT NULL,
  `car` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`did`, `full_name`, `email`, `contact`, `location`, `license`, `car`) VALUES
(1, 'Bagarukayo', 'bbagarukayo5@gmail.com', '+256773155093', 'Kampala', '2187218912', ''),
(3, 'Bagarukayo', 'bbagarukayo1@gmail.com', '+256772701502', 'Kampala Road', '2192189129', '2');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `caption` text NOT NULL,
  `date_added` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `caption`, `date_added`) VALUES
(5, '475565985.jpg', 'Capture fisheries', '2021-12-14'),
(8, '692571305.jpg', 'Fish trading', '2021-12-14'),
(9, '585854485.jpg', 'Fish farming', '2021-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `nid` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `location` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `response` text NOT NULL,
  `date_added` varchar(100) NOT NULL,
  `coordinates` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`nid`, `user`, `location`, `message`, `response`, `date_added`, `coordinates`) VALUES
(5, '3750670034', 'Kampala Uganda', 'Hello today', 'cleared.... the admin will call you', '2022-10-14 16:22:28', ''),
(6, '3750670034', 'Kampala Uganda', 'Hello notification', '', '2022-10-14 18:16:26', '');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `pid` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `otp` varchar(20) NOT NULL,
  `expires_in` varchar(100) NOT NULL DEFAULT '0',
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`pid`, `name`, `email`, `phone`, `password`, `age`, `address`, `otp`, `expires_in`, `image`) VALUES
('2', 'Kakensa', 'kakensa30@gmail.com', '+256773155093', 'd033e22ae348aeb5660fc2140aec35850c4da997', 18, 'Mbarara Uganda', '31755', '1665751602', ''),
('3750670034', 'Kakensa', 'bbagarukayo5@gmail.com', '+256758169834', '66dabb35ee7d59b93269a25c4436f45f3642cd5d', 18, 'Mbarara Uganda', '29938', '1665754398', 'http://127.0.0.1:5000/static/uploads/7699509.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pID` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `cost_price` int(20) NOT NULL,
  `selling_price` int(20) NOT NULL,
  `qty` double NOT NULL,
  `cart_price` int(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `barcode` varchar(100) NOT NULL,
  `discount` int(11) NOT NULL,
  `max_price` double NOT NULL,
  `branch` int(11) NOT NULL,
  `department` varchar(200) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pID`, `product_name`, `cost_price`, `selling_price`, `qty`, `cart_price`, `image`, `barcode`, `discount`, `max_price`, `branch`, `department`, `description`) VALUES
(4374, 'TV', 30000, 32000, 1, 32000, '', '', 0, 0, 3, '', ''),
(4375, 'Kerosene', 2000, 2800, 1, 2800, '', '', 0, 2800, 4, '', ''),
(4376, 'petrol-Fuel', 4000, 4500, 1, 4500, '', '', 0, 4500, 3, 'Fuel', ''),
(4377, 'Test-Fashion', 20000, 25000, 1, 25000, '', '', 0, 0, 3, '', 'hello testing'),
(4378, 'Test-Fashion', 20000, 25000, 1, 25000, '', '', 0, 0, 6, '', 'hello testing');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `date_added` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`id`, `name`, `description`, `date_added`) VALUES
(10, 'Gillnets', '<p>Gillnets&nbsp;are currently a major and popular&nbsp;fishing gear&nbsp;widely used for fish capture in the major and minor water bodies. They are normally set at dusk and hauled in at dawn. Drift gillnetting is commonly practised on&nbsp;Lake Albert, but rarely on other water bodies. The target fish species for the gill net fishery are&nbsp;Nile Perch,&nbsp;Tilapia&nbsp;species,&nbsp;Bagrus,&nbsp;Clarias,&nbsp;Protopterus,&nbsp;Alestes,&nbsp;Hydrocynus&nbsp;and many other demersal species.</p>\r\n\r\n<p>Fish nets&nbsp;have different sizes. The small sized nets are used for fishing small fish while the big sized nets are used for fishing large fish. For instance, half inch up to one inch grade nets are used for fishing Nkejje, one inch up to 6 inch grade for fishing tilapia, and above 6 inch for Nile perch. The fishermen use boats to haul the nest. The bigger the boat, the larger the volume of fish. One net can weigh up to 10&nbsp;kg, without fish. A small boat may not be able to handle such a load.</p>\r\n', '2022-02-06'),
(11, 'Fish-traps, baskets and Weirs', '<p>Various designs of fish traps, baskets and weirs are used in fishery. Conical traps are used most commonly for catching fish species e.g. Clarias, Barbus, Schilbe in marshy shallow waters of lakes, rivers and in permanent and seasonal swamps. These are particularly used on River Nile, Lake Kyoga, swamps and other minor lakes. The gear is strategically set as a barrier and fish voluntarily or involuntarily enter it, but their escape is hindered by a special non-return valve or device. Traps set in the river estuaries and papyrus fringes indiscriminately trap fish (Barbus, Alestes, Clarias, Hydrocyrus, Protopterus, Labeo) of all sizes and ages.</p>\r\n', '2022-02-06'),
(12, 'Fishery by perforated plastic basins', '<p>Perforated basins are extensively used mainly for Alestes nurse fishery on Lake Albert. This is an emerging fishery on this lake. These basins are operated waters. Bait in form of dregs of native beer or cassava flour is splattered in water above immersed basins; fish is attracted to feed on bait and is scooped out.</p>\r\n', '2022-02-06'),
(13, 'Hooks', '<p>Hooks are used for fishing but on a small scale. The size of the hook used depends on the type of fish. Hooks have numbers. The lower the number, the bigger the hook. Hooks used for tilapia are from numbers eleven to sixteen. Those for Nile perch are from seven to 10. Lung fish are fished with hooks of numbers six and five. Bigger hooks are used for bigger fish so that they do not break free and swim away. On Lutoboka landing site on&nbsp;Bugala Island&nbsp;in&nbsp;Kalangala District, fishermen use hooks of number 12 to fish Nile perch. 1000 hooks are put in water. Sprat is put on the hook as bait. The hooks are put 5 meters apart. Not all of them get fish. Sometimes the fishermen get 10 to twenty fish of different sizes. The hooks are kept in a wooden chest.</p>\r\n', '2022-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `role` varchar(100) NOT NULL,
  `reset_code` varchar(20) NOT NULL,
  `active` int(11) NOT NULL,
  `plain_password` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `license` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstName`, `email`, `password`, `contact`, `role`, `reset_code`, `active`, `plain_password`, `location`, `license`) VALUES
(3, 'Robert', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '+256787655523', 'admin', '45841', 1, 'admin', '', ''),
(10, 'Aga Khan', 'agakhan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '+256773155093', 'Hospital', '', 1, '123456', 'Kampala Road', '2187218912');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pID`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4379;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
