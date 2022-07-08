-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2022 at 09:48 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `youtube`
--

-- --------------------------------------------------------

--
-- Table structure for table `distribute`
--

CREATE TABLE `distribute` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(48) NOT NULL,
  `password` varchar(30) NOT NULL,
  `amount` int(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `distribute`
--

INSERT INTO `distribute` (`id`, `username`, `email`, `password`, `amount`, `created_at`) VALUES
(2, 'radha', 'sk123@gmail.com', '12345', 1280, '2022-03-28 07:08:15'),
(6, 'pk', '', '12345', 13200, '2022-05-09 05:53:54'),
(7, 'rk', '', '12345', 24300, '2022-02-25 11:01:22'),
(10, 'radha', '', '12345', 1283, '2022-03-28 07:07:04'),
(11, 'mira', '', '12345', 0, '2022-02-25 11:00:40'),
(12, 'syam', '', '12345', 0, '2022-02-25 11:00:49'),
(13, 'shiv', '', '12345', 0, '2022-02-25 11:01:06'),
(14, 'rkk', '', '12345', -1620, '2022-05-09 05:53:54'),
(15, 'sanjayy', '', '12345', 2851, '2022-02-26 09:32:33'),
(16, 'rtu', '', '12345', 66503, '2022-03-02 11:09:16'),
(17, 'sanjay', 'sk1234@gmail.com', '12345', 3700524, '2022-05-09 05:53:24'),
(18, 'mahesh', 'mk123@gmail.com', '12345', 37106, '2022-05-02 09:17:20'),
(19, 'rtu', '', '12345', 0, '2022-03-02 10:19:07'),
(20, 'ramesh', '0508cse@gmail.com', '12345', 30000, '2022-03-04 08:28:54'),
(21, 'sss', 'sk12@gmail.com', 'sk12@gamil.com', 0, '2022-03-05 05:33:33'),
(22, 'kkk', '', '12345', 0, '2022-03-05 06:14:59'),
(23, 'sanju', 'sanjay12@gmail.com', '12345', 0, '2022-03-05 06:19:16'),
(24, '', '', '', 0, '2022-04-16 06:29:05'),
(25, '', '', '', 0, '2022-04-16 06:30:22'),
(26, '', '', '', 0, '2022-04-16 07:20:32'),
(27, '', '', '', 0, '2022-04-16 07:42:40'),
(28, 'sares', 'sasdf22@gmail.com', '1234567', 0, '2022-04-18 09:10:55'),
(29, 'diraj', 'sdfsdf22@gmail.com', '1111', 0, '2022-04-18 09:27:49'),
(30, 'diraj', 'sdfsdf22@gmail.com', '1111', 0, '2022-04-18 09:28:19'),
(31, 'diraj', 'sdfsdf22@gmail.com', '1111', 0, '2022-04-18 09:30:50'),
(32, 'raj', 'sdfsdf22@gmail.com', '123456', 0, '2022-04-20 08:38:05'),
(33, 'sk', 'sdfsdf22@gmail.com', '12345', 0, '2022-04-20 08:39:53'),
(34, 'sk', 'sdfsdf22@gmail.com', '12345', 0, '2022-04-20 08:40:40'),
(35, 'skk', 'sdfsdf22@gmail.com', '12345', 300000, '2022-04-20 08:41:34'),
(36, 'rajababu', 'sdfsdf22@gmail.com', '12345', 332434, '2022-05-05 11:27:08');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(77) NOT NULL,
  `username` varchar(244) NOT NULL,
  `password` varchar(255) NOT NULL,
  `amount` int(233) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `amount`, `date`) VALUES
(1, 'sanjay', '123', 8250, '2022-05-09 10:13:25'),
(2, 'bits', '123', 600, '2022-05-10 06:57:12'),
(3, 'raja', 'dd', 0, '2022-05-03 06:24:10'),
(4, 'sila', 'QQ', 0, '2022-05-03 06:25:47'),
(5, 'suresh', 'DFGF', 600, '2022-05-09 10:10:35'),
(7, 'ggg', '111', 0, '2022-05-03 06:43:40'),
(9, 'nnn', 'nnn', 0, '2022-05-03 06:45:09'),
(11, 'raja', 'sds', 0, '2022-05-03 06:46:06'),
(14, 'sam', '123', 13500, '2022-05-09 10:13:25'),
(15, 'samesh', '12345', 0, '2022-05-07 13:16:36'),
(16, 'mala', '12345', 9800, '2022-05-10 11:31:15'),
(17, 'mahesh', '12345', 4010083, '2022-05-10 11:31:58'),
(18, 'ss', '123', 0, '2022-05-17 06:11:55'),
(19, 'ss', '123', 0, '2022-05-17 06:15:56'),
(20, 'bitsd', '1234', 0, '2022-05-17 06:19:43'),
(21, 'bitskkk', 'kkkk', 0, '2022-05-17 06:21:23'),
(22, 'bitskkk', 'kkkk', 0, '2022-05-17 06:22:01'),
(23, 'bitskk', 'kkkk', 0, '2022-05-17 06:22:10'),
(24, 'bitskk', 'kkkk', 0, '2022-05-17 06:22:30'),
(25, 'bits', 'jj', 0, '2022-05-17 06:22:39'),
(26, 'bits', 'jj', 0, '2022-05-17 06:23:58'),
(27, 'bitskk', 'kkkk', 0, '2022-05-17 06:28:02'),
(28, '', '', 0, '2022-05-17 06:28:34'),
(29, 'bits', 'jkhjk', 0, '2022-05-17 06:32:33'),
(30, '', '', 0, '2022-05-17 06:32:42'),
(31, 'bits', 'sss', 0, '2022-05-17 06:33:24'),
(32, '', '', 0, '2022-05-17 06:33:34'),
(33, 'bits', '122w', 0, '2022-05-17 09:57:23');

-- --------------------------------------------------------

--
-- Table structure for table `vallet`
--

CREATE TABLE `vallet` (
  `id` int(11) NOT NULL,
  `user1` varchar(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `current` int(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vallet`
--

INSERT INTO `vallet` (`id`, `user1`, `user_id`, `current`, `amount`, `create_at`) VALUES
(3, 'sam', 'mala', 800, 2900, '2022-05-09 07:27:09'),
(4, 'sam', 'bits', 300, 2600, '2022-05-09 07:27:56'),
(5, 'sam', 'bits', 300, 300, '2022-05-09 07:27:56'),
(6, 'sam', 'sanjay', 700, 3100, '2022-05-09 07:29:42'),
(7, 'sam', 'mala', 6000, 8900, '2022-05-09 08:18:55'),
(8, 'sam', 'mala', 200, 9100, '2022-05-09 08:40:55'),
(9, 'sam', 'mala', 200, 9300, '2022-05-09 08:43:27'),
(10, 'sam', 'sanjay', 40, 3140, '2022-05-09 09:13:31'),
(11, 'sam', 'mala', 50, 9350, '2022-05-09 09:14:27'),
(12, 'sam', 'bits', 100, 400, '2022-05-09 09:14:51'),
(13, 'sam', 'sanjay', 3444, 6584, '2022-05-09 09:44:03'),
(14, 'sam', 'sanjay', 966, 7550, '2022-05-09 09:44:27'),
(15, 'sam', 'sanjay', 200, 15000, '2022-05-09 09:45:55'),
(16, 'sam', 'sanjay', 200, 14600, '2022-05-09 09:47:10'),
(17, 'sam', 'suresh', 600, 14000, '2022-05-09 10:10:35'),
(18, 'sam', 'sanjay', 100, 13900, '2022-05-09 10:11:37'),
(19, 'sam', 'bits', 200, 13700, '2022-05-09 10:12:26'),
(20, 'sam', 'sanjay', 200, 13500, '2022-05-09 10:13:25'),
(21, 'bits', 'mala', 200, 400, '2022-05-10 05:12:20'),
(22, 'mahesh', 'bits', 200, 4010100, '2022-05-10 06:57:12'),
(23, 'mahesh', 'mala', 200, 4009900, '2022-05-10 11:28:02'),
(24, 'mahesh', 'mala', 50, 4009850, '2022-05-10 11:31:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `distribute`
--
ALTER TABLE `distribute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vallet`
--
ALTER TABLE `vallet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `distribute`
--
ALTER TABLE `distribute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(77) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `vallet`
--
ALTER TABLE `vallet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
