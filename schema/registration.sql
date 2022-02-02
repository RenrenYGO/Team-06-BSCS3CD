-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2022 at 05:22 PM
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
(3, 'renren@mail.com', '<p>Need some help regarding the forums<br />\r\n<br />\r\n&quot;Hello I am unable to currently view the section of Computer Science&quot;</p>\r\n'),
(4, 'jollibee@gmail.com', '<p>kulang ng sauce yung spaghetti</p>\r\n'),
(5, 'jollibee2@gmail.com', '<p>kulang ng sauce yung spaghetti</p>\r\n');

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
(5, 'wew@gmail.com'),
(6, 'meme@gmail.com'),
(7, 'yatap@gmail.com'),
(8, 'yatap2@gmail.com'),
(9, 'Sinio@gmail.com'),
(14, 'lunaravoidance12@gmail.com'),
(15, 'Loonie420@gmail.com'),
(16, 'qwerty@gmail.com'),
(17, 'sql@gmail.com'),
(18, 'pogi@gmail.com'),
(19, 'umu@gmail.com'),
(20, 'clefcutie@gmail.com');

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
(101, 'BATAS', '<p>AKO ANG BATAYAN NG HURADO</p>\r\n', '2022-01-28 21:44:25', 2, 'BATAS', 'noimage.jpg', 0, 0, 1, 0),
(102, 'asdad', '<p>asdasd</p>\r\n', '2022-01-28 21:47:07', 1, 'asdad', 'noimage.jpg', 0, 0, 1, 0),
(103, 'ddd', '<p>dd</p>\r\n', '2022-01-28 21:47:15', 1, 'ddd', 'noimage.jpg', 0, 0, 1, 0),
(104, 'PAGSAMO', '<p>PARA SA ISA&#39;T ISA</p>\r\n', '2022-01-31 22:01:33', 9, 'PAGSAMO', 'noimage.jpg', 0, 0, 1, 0),
(105, 'PRICKLY TRAP', '<p>TAMAAN MO AKO NG PRICKLY MO MARK</p>\r\n', '2022-01-31 22:06:23', 9, 'PRICKLY-TRAP', 'noimage.jpg', 0, 0, 1, 0),
(106, 'VEGI BITE', '<p>KAGATIN MO AKO NG VEGI BITE MARK</p>\r\n', '2022-01-31 22:06:54', 9, 'VEGI-BITE', 'noimage.jpg', 0, 0, 1, 0),
(107, 'OCTOBER TREAT', '<p>ANG LAKI NG PUMPKIN MO MARK</p>\r\n', '2022-01-31 22:07:47', 9, 'OCTOBER-TREAT', 'noimage.jpg', 3, 0, 1, 3),
(111, 'POGI CONTEST', '<p>Pogi Ni Mark</p>\r\n', '2022-01-31 22:34:14', 2, 'POGI-CONTEST', 'noimage.jpg', 0, 0, 2, 0),
(112, 'Ano ang Sabaw', '<p>Bakit may Sabaw</p>\r\n', '2022-01-31 22:34:37', 2, 'Ano-ang-Sabaw', 'noimage.jpg', 0, 0, 1, 0),
(113, 'das', '<p>asdasd</p>\r\n', '2022-02-02 00:21:30', 2, 'das', '2__sadGriff.png', 0, 0, 2, 0),
(114, 'asd', '<p>asdasd</p>\r\n', '2022-02-02 00:58:42', 2, 'asd', '2__okishock.png', 0, 0, 2, 0),
(115, 'daaas', '<p>ssssssssssaaaaaaaa</p>\r\n', '2022-02-02 01:34:44', 2, 'daaas', 'noimage.jpg', 0, 0, 2, 2);

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
(76, 107, 'MAS MALAKI UNG KAY ANO', '2022-01-31 22:10:09', 9, 3, 0),
(77, 107, 'MAS MALAKI UNG KAY ANO', '2022-01-31 22:10:37', 9, 0, 0),
(78, 107, 'MAS MALAKI UNG KAY ANO', '2022-01-31 22:24:43', 2, 0, 0),
(79, 115, 'this is das', '2022-02-02 23:58:03', 2, 0, 0),
(80, 115, 'MAS MALAKI AKIN', '2022-02-02 23:58:32', 9, 0, 0);

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
(1, 'WhatSauce', '2022-01-28 20:25:25'),
(2, 'NSFW', '2022-01-31 22:33:03');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `bio` varchar(255) NOT NULL DEFAULT 'Insert your bio here',
  `post_count` int(255) NOT NULL,
  `profile_picture` varchar(255) NOT NULL DEFAULT 'noimage.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `bio`, `post_count`, `profile_picture`) VALUES
(1, 'asdasd', 'asdasd@gmail.com', '202cb962ac59075b964b07152d234b70', 'Insert your bio here', 2, 'noimage.jpg'),
(2, 'das', 'ads@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '<p>MINECRAFT</p>\r\n', 9, '2__okishock.png'),
(3, 'user0', 'user0@gmail.com', '202cb962ac59075b964b07152d234b70', 'Insert your bio here', 0, 'noimage.jpg'),
(4, 'test1', 'test@gmail.com', '202cb962ac59075b964b07152d234b70', 'Insert your bio here', 0, 'noimage.jpg'),
(5, 'asdasdasd', 'asdasdasd@gmail.com', '202cb962ac59075b964b07152d234b70', 'Insert your bio here', 0, 'noimage.jpg'),
(9, 'Renren', 'renren@mail.com', '202cb962ac59075b964b07152d234b70', 'Insert your bio here', 4, 'noimage.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `helpcenter`
--
ALTER TABLE `helpcenter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
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
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `profile_picture` (`profile_picture`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `helpcenter`
--
ALTER TABLE `helpcenter`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

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
