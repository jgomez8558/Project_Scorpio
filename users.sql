-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 17, 2018 at 05:14 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `classId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `category` varchar(40) NOT NULL,
  `class` varchar(40) NOT NULL,
  `location` varchar(40) NOT NULL,
  `date` varchar(25) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`classId`, `userId`, `category`, `class`, `location`, `date`, `description`) VALUES
(1, 1, 'Technology', 'CISCO', 'CEED', '9/12/18', 'Networking to your heart desire.'),
(2, 1, 'Technology', 'Networking', 'CEED', '10/23/18', 'How to subnet in 3 easy steps'),
(3, 2, 'Art', 'How', 'South Texas College', '8/24/18', 'Making wonderful paintings for kids.'),
(4, 6, 'Cooking', 'Kirby\'s Kitchen', 'STC', '9/16/18', 'How to cook everything into one bowl.');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `userId` int(11) NOT NULL,
  `firstName` varchar(40) NOT NULL,
  `lastName` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `role` varchar(1) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`userId`, `firstName`, `lastName`, `address`, `email`, `phone`, `role`, `password`) VALUES
(1, 'Jon', 'Gomez', 'P.O. BOX 711', 'test86@gmail.com', '5552346789', '2', '$2y$11$Cz4Z8V.spMwE5/Zq7I'),
(2, 'antonio', 'estrada', 'asdas street', 'antonio@gmail.com', '1234567890', '1', '$2y$11$xjIkRxPanHHZrod76L'),
(3, 'Gom', 'Joe', 'P.O. BOX 334', 'test777@gmail.com', '5552346789', '2', '$2y$11$bT5PagczAr1WB2KnqwYJwOP4yLVvEhtTPGNGJ3C9DpERJAi0Wek4m'),
(4, 'Fefnir', 'Gomez', 'palm street', 'feftest@gmail.com', '5552347890', '2', '$2y$11$ViGEsS.ReaZUA95tAHWnte37QITTVG10xrKnRZD2aHSXPpK4XawIK'),
(5, 'sample', 'sample', 'sample', 'sample@gmail.com', '123456789', '2', '$2y$11$6JM5zY3wsoYBfG.sY2EYVevIn0ll9GoAHr04VvN0M4rr3sFeHy4eW'),
(6, 'Riru', 'Gomez', 'sample', 'plusplus@gmail.com', '1112345678', '', '$2y$11$2i1lt1efewR3fmxttrs9p.hN2ptq7wTc1t.EF.bSVX6K1ZEJvdfY6'),
(7, 'Lena', 'Gomez', '12345 street', 'test86@gmail.com', '5551235678', '2', '$2y$11$t8wKwkJo1IQ0yI8X4Y7H/utU9Eh0LX3pv2gK4Z2wyvQBTaRUl4TTu');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `registerId` int(11) NOT NULL,
  `classId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `firstName`, `lastName`, `email`, `password`) VALUES
(2, 'Lenalee', 'Gomez', 'test2@gmail.com', ''),
(3, 'Fefnir', 'Gomez', 'test3@gmail.com', '$2y$11$wgSFB7xj5tMUdcNPrGeRUOtHwuMdGl1BY9xE57JJ9KrXfn/Eb7kUK'),
(4, 'Krory', 'tom', 'test4@gmail.com', '$2y$11$tKY1FIluUz4BPSizMqO/XezEvG6BLKLbHkJV9qVr/VRXswTCcYh.C'),
(5, 'Riru', 'Gomez', 'test86@gmail.com', '$2y$11$hWLY9NovbcfwkHc6Cz/LLeMUKg0DW2Ohv/DelWQwWPqAJgL91FUGa'),
(6, 'Jon', 'Gom', 'test77@gmail.com', '$2y$11$3uzxvPnxHE6zNJ2y9Rj.oeaS5MHXjSfp2.h55kKIkbPviWxHyH5ii'),
(7, 'Gom', 'Joe', 'test8558@gmail.com', '$2y$11$I.meshV0/NpuPkwSRYWUVeZ0eZZByCVFhZHy0TEdy2h4sG0OL3Oje'),
(8, 'antonio', 'estrada', 'antonio@gmail.com', '$2y$11$0jEZdv2d4.Ox913dwEHHROYnG4Lyw9z.wqxy35d9eHWvUis8HkEGG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`classId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`registerId`),
  ADD KEY `classId` (`classId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `classId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `registerId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
