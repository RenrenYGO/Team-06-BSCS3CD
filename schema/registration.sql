-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2021 at 03:41 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `by` int(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `post_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `date`, `by`, `slug`, `post_image`) VALUES
(12, 'lols', 'lols again\r\n', '2021-12-05 23:17:43', 1, 'lols', ''),
(26, 'aaa', 'aaaa', '2021-12-16 17:25:30', 1, 'aaa', '1_sadGriff.png'),
(27, 'aaaaaa', 'aaaaa', '2021-12-16 17:55:09', 1, 'aaaaaa', '1_umu.png'),
(33, 'aaaaaaaaaaaaaaaaaaaaaaaaaaa', 'qwerty', '2021-12-16 19:34:29', 2, 'aaaaaaaaaaaaaaaaaaaaaaaaaaa', '_umulovereverse.png'),
(34, 'a', 'a', '2021-12-16 19:40:06', 2, 'a', '_umugakita.png'),
(35, 'qqq', 'qqq', '2021-12-16 19:42:35', 2, 'qqq', '_2Q.png'),
(36, 'das', 'das', '2021-12-16 19:47:41', 2, 'das', '_umugakita.png'),
(37, 'binay jejomar', '69', '2021-12-16 19:49:57', 1, 'binay-jejomar', '_umugakita.png'),
(38, 'bobo', 'ako', '2021-12-16 19:57:05', 1, 'bobo', '_sadGriff.png'),
(39, 'daishouri', 'daishouri', '2021-12-16 20:01:53', 1, 'daishouri', '_okishock.png'),
(40, 'f', 'f', '2021-12-16 20:04:04', 1, 'f', '_frogmouth.png'),
(41, 'sadgriff', 'sad', '2021-12-16 20:07:48', 1, 'sadgriff', '1_sadGriff.png'),
(42, 'sadgriff 2', 'pogi parin si ramon', '2021-12-16 20:08:35', 2, 'sadgriff-2', '2_sadGriff.png'),
(43, 'sadgriff 3', 'asdasdasd', '2021-12-16 20:09:13', 2, 'sadgriff-3', '2_sadGriff.png'),
(44, 'obob', 'a', '2021-12-16 20:12:32', 2, 'obob', 'noimage.jpg'),
(45, 'tf', 'fffff', '2021-12-16 20:16:15', 2, 'tf', '2_sadGriff.png'),
(46, 'sadboi si ', 'ariel', '2021-12-16 20:17:20', 2, 'sadboi-si', '2_sadGriff.png'),
(47, 'a', 'a', '2021-12-16 20:18:32', 2, 'a', '2_sadGriff.png'),
(48, 'aaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaa', '2021-12-16 20:19:14', 2, 'aaaaaaaaaa', '2_sadGriff.png');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(255) NOT NULL,
  `post_id` int(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `by` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `post_id`, `title`, `content`, `date`, `by`) VALUES
(17, 27, 'aaaa', 'aaa', '2021-12-16 18:13:57', 0),
(18, 27, 'rrrrrrrrrrrrrrr', 'aaaaaaaaaaaaaaaaaaa', '2021-12-16 18:14:01', 0),
(20, 46, 'totoo', 'oo nga eh', '2021-12-19 22:29:27', 0);

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'asdasd', 'asdasd@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'das', 'ads@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'user0', 'user0@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'test1', 'test@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'asdasdasd', 'asdasdasd@gmail.com', '202cb962ac59075b964b07152d234b70'),
(9, 'Renren', 'renren@mail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_by` (`by`),
  ADD KEY `post_image` (`post_image`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `replies_by` (`by`),
  ADD KEY `replies_post_id` (`post_id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_by` FOREIGN KEY (`by`) REFERENCES `user` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `replies_post_id` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
