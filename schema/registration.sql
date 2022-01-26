-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 03:03 PM
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
-- Table structure for table `helpcenter`
--

CREATE TABLE `helpcenter` (
  `id` int(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `helpcenter`
--

INSERT INTO `helpcenter` (`id`, `email`, `message`) VALUES
(1, 'tabo@gmail.com', '<p>tabo tabo tabo</p>\r\n'),
(2, 'ninjaskpasser@gmail.com', '<p>Help regarding Whatsauce</p>\r\n'),
(3, 'renren@mail.com', '<p>Need some help regarding the forums<br />\r\n<br />\r\n&quot;Hello I am unable to currently view the section of Computer Science&quot;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, 'cardo85@mail.com'),
(2, 'woketh12@mail.com'),
(3, 'ads@gmail.com'),
(4, 'ekis@gmail.com'),
(0, 'wew@gmail.com'),
(0, 'meme@gmail.com');

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
  `post_image` varchar(255) NOT NULL,
  `upvote` int(255) NOT NULL,
  `downvote` int(255) NOT NULL,
  `thread_id` int(5) NOT NULL,
  `reply_count` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `date`, `by`, `slug`, `post_image`, `upvote`, `downvote`, `thread_id`, `reply_count`) VALUES
(88, 'TEST', '<p>TEST1</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2022-01-20 17:36:22', 2, 'TEST', 'noimage.jpg', 0, 0, 3, 0),
(89, 'DONT SHOW1', '<p>DONT SHOW1</p>\r\n', '2022-01-20 17:36:31', 2, 'DONT-SHOW1', 'noimage.jpg', 2, 2, 3, 3),
(91, 'asdad', '<p>adasds</p>\r\n', '2022-01-20 20:11:22', 3, 'asdad', 'noimage.jpg', 0, 0, 2, 3),
(92, 'asdas', '<p>dasd</p>\r\n', '2022-01-20 20:33:09', 2, 'asdas', 'noimage.jpg', 0, 0, 1, 3),
(93, 'DAS SMOOTH', '<p>DS</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2022-01-20 20:38:25', 2, 'DAS-SMOOTH', 'noimage.jpg', 0, 0, 3, 3),
(94, 'DSDSADSD', '<p>hhhhhhhhhhhhhhhhh</p>\r\n', '2022-01-20 20:38:55', 3, 'DSDSADSD', 'noimage.jpg', 0, 0, 2, 1),
(95, 'asdasd', '<p>asdasd</p>\r\n', '2022-01-20 20:40:59', 3, 'asdasd', 'noimage.jpg', 0, 0, 1, 3),
(96, 'EDITEDs', '<p>EDITEDs</p>\r\n', '2022-01-20 21:19:01', 2, 'EDITEDs', 'noimage.jpg', 0, 0, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(255) NOT NULL,
  `post_id` int(255) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `by` int(255) NOT NULL,
  `upvote` int(255) NOT NULL,
  `downvote` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `post_id`, `content`, `date`, `by`, `upvote`, `downvote`) VALUES
(51, 89, 'Xasd', '2022-01-20 17:45:36', 2, 0, 0),
(56, 92, 'asdasd', '2022-01-20 20:33:19', 2, 0, 0),
(57, 92, 'asdasda', '2022-01-20 20:33:37', 3, 0, 0),
(58, 92, 'asdasd', '2022-01-20 20:34:19', 3, 0, 0),
(59, 91, 'asdasd', '2022-01-20 20:34:42', 3, 0, 0),
(60, 89, 'asdasd', '2022-01-20 20:34:48', 3, 0, 0),
(61, 89, 'REPLY BRUTE', '2022-01-20 20:36:09', 3, 0, 0),
(62, 91, 'CHECKEU\r\n', '2022-01-20 20:37:53', 2, 0, 0),
(63, 93, 'ccc', '2022-01-20 20:38:34', 2, 0, 0),
(64, 93, 'bbbbbbbbb', '2022-01-20 20:38:46', 3, 0, 0),
(65, 95, 'asdasd', '2022-01-20 20:41:07', 3, 1, 0),
(66, 94, 'asd', '2022-01-20 20:50:10', 3, 2, 4),
(67, 95, 'asdd', '2022-01-20 20:50:18', 2, 0, 0),
(68, 93, 'cc', '2022-01-20 20:58:56', 2, 0, 0),
(69, 95, 'asd', '2022-01-20 21:18:46', 2, 0, 0),
(70, 91, 'sad', '2022-01-20 21:18:52', 2, 0, 0),
(71, 96, 'EDITED', '2022-01-20 23:06:12', 2, 15, 20),
(72, 96, 'asdas', '2022-01-23 20:36:34', 2, 13, 14);

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`id`, `name`, `date`) VALUES
(1, 'Random Stuff', '2022-01-13 00:00:00'),
(2, 'TUP Stuff', '2022-01-13 00:00:00'),
(3, 'Game Stuff', '2022-01-13 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `bio` varchar(255) NOT NULL DEFAULT 'Insert your bio here'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `bio`) VALUES
(1, 'asdasd', 'asdasd@gmail.com', '202cb962ac59075b964b07152d234b70', 'Insert your bio here'),
(2, 'das', 'ads@gmail.com', '202cb962ac59075b964b07152d234b70', '<p>123</p>\r\n'),
(3, 'user0', 'user0@gmail.com', '202cb962ac59075b964b07152d234b70', 'Insert your bio here'),
(4, 'test1', 'test@gmail.com', '202cb962ac59075b964b07152d234b70', 'Insert your bio here'),
(5, 'asdasdasd', 'asdasdasd@gmail.com', '202cb962ac59075b964b07152d234b70', 'Insert your bio here'),
(9, 'Renren', 'renren@mail.com', '202cb962ac59075b964b07152d234b70', 'Insert your bio here');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `helpcenter`
--
ALTER TABLE `helpcenter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_by` (`by`),
  ADD KEY `post_image` (`post_image`),
  ADD KEY `posts_from` (`thread_id`),
  ADD KEY `post_replies` (`reply_count`);

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
-- AUTO_INCREMENT for table `helpcenter`
--
ALTER TABLE `helpcenter`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  ADD CONSTRAINT `posts_by` FOREIGN KEY (`by`) REFERENCES `user` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_from` FOREIGN KEY (`thread_id`) REFERENCES `threads` (`id`);

--
-- Constraints for table `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `replies_post_id` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
