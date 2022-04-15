-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2022 at 06:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `htunblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookpackage`
--

CREATE TABLE `bookpackage` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `img` varchar(255) NOT NULL,
  `state` int(11) NOT NULL DEFAULT 0,
  `bookingDate` date NOT NULL,
  `delegate` int(11) NOT NULL,
  `payment_methood` int(11) NOT NULL,
  `payment_state` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookpackage`
--

INSERT INTO `bookpackage` (`id`, `user_name`, `user_id`, `package_id`, `package_name`, `price`, `time`, `img`, `state`, `bookingDate`, `delegate`, `payment_methood`, `payment_state`) VALUES
(1, 'Shuvo', 2, 1, 'Mangrove Forest', 1500, '2020-02-05 06:01:44', 'sundorbon2.jpg', 2, '0000-00-00', 0, 0, 1),
(2, 'Shuvo', 2, 2, 'Sixty Dome Mosque', 1500, '2020-02-05 06:01:51', 'sixty-dome-mosque-600-gtm1.jpg', 1, '0000-00-00', 0, 0, 1),
(3, 'Shuvo', 2, 5, 'Hazrat Shah-Paran (R:) Mazar Sharif, Sylhet', 3000, '2020-02-05 06:55:44', 'poran.jpeg', 0, '0000-00-00', 0, 0, 0),
(6, 'Nitu Talukder', 4, 1, 'Mangrove Forest', 1500, '2020-01-24 03:50:16', 'sundorbon2.jpg', 0, '0000-00-00', 0, 0, 0),
(11, 'Imran', 9, 4, 'Shrine of Hazrat Shah Jalal', 2000, '2020-02-04 04:52:39', '220px-05122009_Hazrat_Shahjalal_Majar_Exit_photo2_Ranadipam_Basu.jpg', 0, '2020-02-08', 1, 0, 0),
(12, 'Imran', 9, 6, 'Lalbagh Fort', 500, '2020-02-04 04:54:42', 'BTHome11.jpg', 0, '2020-02-06', 1, 0, 0),
(13, 'Imran', 9, 1, 'Mangrove Forest', 1500, '2020-02-04 05:01:48', 'sundorbon2.jpg', 0, '2020-02-05', 1, 0, 0),
(14, 'Imran', 9, 2, 'Sixty Dome Mosque', 1500, '2020-02-05 06:02:20', 'sixty-dome-mosque-600-gtm1.jpg', 0, '0000-00-00', 5, 0, 1),
(15, 'Imran', 9, 5, 'Hazrat Shah-Paran (R:) Mazar Sharif, Sylhet', 3000, '2020-02-05 06:02:27', 'poran.jpeg', 0, '2020-02-15', 5, 2, 1),
(16, 'Nitu Talukder', 4, 2, 'Sixty Dome Mosque', 1500, '2020-02-09 08:05:49', 'sixty-dome-mosque-600-gtm1.jpg', 1, '0000-00-00', 0, 1, 0),
(17, 'Nitu Talukder', 4, 3, 'Sri Mongol', 2000, '2020-02-09 08:12:45', 'srimongol1.jpg', 1, '0000-00-00', 11, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tal_admin`
--

CREATE TABLE `tal_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tal_admin`
--

INSERT INTO `tal_admin` (`admin_id`, `admin_name`, `admin_password`) VALUES
(1, 'Shuvo', '123'),
(2, 'Nitu', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guide`
--

CREATE TABLE `tbl_guide` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobailenumber` int(11) NOT NULL,
  `area` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_guide`
--

INSERT INTO `tbl_guide` (`id`, `name`, `nationality`, `address`, `mobailenumber`, `area`, `user_name`, `pic`, `password`, `status`) VALUES
(13, 'Mg Mg', 'Mg Mg', 'Yangon', 1748613445, 'HTML/CSS', 'Mg Mg', 'elements1.jpg', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guidebook`
--

CREATE TABLE `tbl_guidebook` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `guide_id` int(11) NOT NULL,
  `state` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_guidebook`
--

INSERT INTO `tbl_guidebook` (`id`, `user_name`, `user_id`, `guide_id`, `state`) VALUES
(1, 'Nitu Talukder', 4, 5, 2),
(2, 'Nitu Talukder', 4, 8, 2),
(3, 'Nitu Talukder', 4, 9, 0),
(5, 'Shuvo', 2, 5, 0),
(6, 'Ajijul', 7, 5, 0),
(7, 'Salma', 8, 5, 0),
(8, 'Shuvo', 2, 11, 0),
(10, 'Imran', 9, 13, 0),
(11, 'Imran', 9, 9, 0),
(12, 'Imran', 9, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

CREATE TABLE `tbl_location` (
  `id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_location`
--

INSERT INTO `tbl_location` (`id`, `city_name`) VALUES
(1, 'Dhaka'),
(2, 'Sylhet'),
(3, 'Khulna'),
(4, 'Barisal'),
(5, 'Chittagong');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package`
--

CREATE TABLE `tbl_package` (
  `id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_package`
--

INSERT INTO `tbl_package` (`id`, `package_name`, `img`, `body`, `price`) VALUES
(1, 'Html', 'sundorbon2.jpg', 'This is for Html Book', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `id` int(11) NOT NULL,
  `place_name` varchar(255) NOT NULL,
  `place_description` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `category` int(11) NOT NULL,
  `area` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`id`, `place_name`, `place_description`, `img`, `status`, `category`, `area`) VALUES
(1, 'Html', '<h1>This is Html do you want to learn</h1>\r\n<p>Take a Virtual Tour, or schedule an in-person walk-through of our campus that is equipped with Student Life excitement and active sports. Research on this website a bundle of Academic, Career and Technical Education, Health Sciences, and Workforce Development offerings.</p>', 'sundorbon.jpg', 0, 2, 'Khulna');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_placetype`
--

CREATE TABLE `tbl_placetype` (
  `id` int(11) NOT NULL,
  `ptype_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_placetype`
--

INSERT INTO `tbl_placetype` (`id`, `ptype_name`) VALUES
(2, 'CSS'),
(4, 'JS'),
(5, 'Laravel'),
(6, 'PHP');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `mobaile_number` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `type` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `user_name`, `mobaile_number`, `pic`, `password`, `status`, `type`) VALUES
(2, 'Shuvo Cold', 'Shuvo', '01748613498', 'shuoVi.jpg', '123', 1, 0),
(4, 'Nitu', 'Nitu Talukder', '01749613498', 'guide5.jpg', '123', 1, 0),
(6, 'Guljer Hussen Rocket', 'Munni', '01740613498', 'guide2.jpg', '123', 1, 0),
(7, 'Ajijul', 'Ajijul', '01749613789', 'guide3.jpg', '123', 0, 0),
(8, 'Salma', 'Salma', '01749613890', '1_(3).jpg', '123', 0, 0),
(9, 'Imran', 'Imran', '01749603890', 'guide4.jpg', '123', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookpackage`
--
ALTER TABLE `bookpackage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tal_admin`
--
ALTER TABLE `tal_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_guide`
--
ALTER TABLE `tbl_guide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_guidebook`
--
ALTER TABLE `tbl_guidebook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_location`
--
ALTER TABLE `tbl_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_package`
--
ALTER TABLE `tbl_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_place`
--
ALTER TABLE `tbl_place`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_placetype`
--
ALTER TABLE `tbl_placetype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookpackage`
--
ALTER TABLE `bookpackage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tal_admin`
--
ALTER TABLE `tal_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_guide`
--
ALTER TABLE `tbl_guide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_guidebook`
--
ALTER TABLE `tbl_guidebook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_location`
--
ALTER TABLE `tbl_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_package`
--
ALTER TABLE `tbl_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_place`
--
ALTER TABLE `tbl_place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_placetype`
--
ALTER TABLE `tbl_placetype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
