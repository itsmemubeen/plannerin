-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2020 at 06:20 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plannerin`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `booked_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `catering`
--

CREATE TABLE `catering` (
  `id` int(11) NOT NULL,
  `catering_desc` text NOT NULL,
  `catering_name` varchar(50) NOT NULL,
  `catering_address` varchar(250) NOT NULL,
  `catering_cnic` varchar(25) NOT NULL,
  `catering_phone` varchar(15) NOT NULL,
  `catering_price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catering`
--

INSERT INTO `catering` (`id`, `catering_desc`, `catering_name`, `catering_address`, `catering_cnic`, `catering_phone`, `catering_price`) VALUES
(1, 'asddsadsadsadsa', 'Mubeen Khan', 'Fb Area Block 21 Gulshan E Ameen', '4210142182043', '03352155225', '5000'),
(2, 'sadsdasd', 'Mubeen Khan', 'Fb Area Block 21 Gulshan E Ameen', '4210142182043', '03352155225', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `decorations`
--

CREATE TABLE `decorations` (
  `id` int(11) NOT NULL,
  `decoration_desc` text NOT NULL,
  `decoration_name` varchar(50) NOT NULL,
  `decoration_address` varchar(250) NOT NULL,
  `decoration_cnic` varchar(25) NOT NULL,
  `decoration_phone` varchar(15) NOT NULL,
  `decoration_price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `decorations`
--

INSERT INTO `decorations` (`id`, `decoration_desc`, `decoration_name`, `decoration_address`, `decoration_cnic`, `decoration_phone`, `decoration_price`) VALUES
(1, 'SAasAS', 'Mubeen Khan', 'Fb Area Block 21 Gulshan E Ameen', '4210142182043', '03352155225', '500');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `event_privacy` varchar(25) NOT NULL,
  `event_category` varchar(40) NOT NULL,
  `event_description` text NOT NULL,
  `event_avenue` varchar(30) NOT NULL,
  `event_city` varchar(30) NOT NULL,
  `event_startdate` varchar(55) NOT NULL,
  `event_starttime` varchar(55) NOT NULL,
  `event_enddate` varchar(55) NOT NULL,
  `event_endtime` varchar(55) NOT NULL,
  `event_contact` varchar(55) NOT NULL,
  `event_email` varchar(55) NOT NULL,
  `event_website` varchar(55) NOT NULL,
  `event_facebook` varchar(225) NOT NULL,
  `event_Instagram` varchar(225) NOT NULL,
  `event_twitter` varchar(225) NOT NULL,
  `ticket_type` varchar(55) NOT NULL,
  `event_ticket_price` varchar(55) NOT NULL,
  `event_package` varchar(25) NOT NULL,
  `event_location` text NOT NULL,
  `created_at` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `event_privacy`, `event_category`, `event_description`, `event_avenue`, `event_city`, `event_startdate`, `event_starttime`, `event_enddate`, `event_endtime`, `event_contact`, `event_email`, `event_website`, `event_facebook`, `event_Instagram`, `event_twitter`, `ticket_type`, `event_ticket_price`, `event_package`, `event_location`, `created_at`) VALUES
(1, 'adsdadsadsa', 'public', 'art', '2002-03-02', 'airarabia', 'karachi', '2002-03-02', '00:00', '2019-04-02', '23:00', '123123123', 'mubeen.khan208@gmail.com', 'http://moxols.com', '123123123', 'sddsds', 'sddsfdssdf', 'paid', '500', 'Basic', '', '2020-02-08 11:42:43am');

-- --------------------------------------------------------

--
-- Table structure for table `event_review`
--

CREATE TABLE `event_review` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `event_review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `decor_id` int(11) NOT NULL,
  `catering_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment_info`
--

CREATE TABLE `payment_info` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `trax_id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(11) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`) VALUES
(1, 'mubeen', 'admin', 'admin', 1, '2020-02-04'),
(2, 'Mubeen Khan', 'mubeen.khan208@gmail.com', '123456', 1, '2020-02-07'),
(3, 'Mubeen', 'mubeen.khan208@gmail.com', '123456', 1, '2020-02-07'),
(4, 'MubeenKhan', 'mubeen.khan208@gmail.com', '123456', 1, '2020-02-07'),
(5, 'MubeenKhan', 'mubeen.khan208@gmail.com', '123456', 1, '2020-02-07'),
(6, 'MubeenKhan', 'mubeen.khan208@gmail.com', '123456', 1, '2020-02-07'),
(7, 'MubeenKhan', 'mubeen.khan208@gmail.com', 'Windows8.', 2, '2020-02-07'),
(8, 'asd', 'uzair_ansari93@hotmail.com', 'asdasd', 2, '2020-02-07'),
(9, 'sdf', 'store@moxols.com', 'admin', 1, '2020-02-07'),
(10, 'jhg', 'admin@yourdomain.com', '123456', 1, '2020-02-07'),
(11, 'Umbert', 'adeline8@germanyxon.com', '123456', 1, '2020-02-07'),
(12, 'Mubeen', 'mubeen.khan208@gmail.com', 'Windows8.', 1, '2020-02-07'),
(13, 'MubeenKhan', 'mubeen.khan208@gmail.com', '123456', 1, '2020-02-07'),
(14, 'UzairAnsari', 'uzair_ansari93@hotmail.com', 'Windows8.', 1, '2020-02-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catering`
--
ALTER TABLE `catering`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `decorations`
--
ALTER TABLE `decorations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_review`
--
ALTER TABLE `event_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_info`
--
ALTER TABLE `payment_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `catering`
--
ALTER TABLE `catering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `decorations`
--
ALTER TABLE `decorations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event_review`
--
ALTER TABLE `event_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_info`
--
ALTER TABLE `payment_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
