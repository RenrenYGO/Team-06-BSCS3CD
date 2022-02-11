-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2022 at 09:24 PM
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
  `whatsauce_id` int(255) NOT NULL,
  `reply_count` int(255) NOT NULL,
  `react_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '{"react_ids":[]}',
  `react2_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '{"react2_ids":[]}' CHECK (json_valid(`react2_ids`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `date`, `by`, `slug`, `post_image`, `upvote`, `downvote`, `thread_id`, `whatsauce_id`, `reply_count`, `react_ids`, `react2_ids`) VALUES
(119, 'Programming_Sauce_1', '<p><strong>[SCREENSHOT]</strong><br />\r\nARDUINO UNO PHOTORESISTOR</p>\r\n', '2022-02-03 23:48:48', 2, 'Programming_Sauce_1', '2_Programming1.jpg', 0, 0, 1, 3, 0, '{\"react_ids\":[]}', '{\"react2_ids\":[]}'),
(120, 'English_Sauce_1', '<p><strong>HOW TO USE A COMMA</strong></p>\r\n\r\n<p>To separate words, phrases, and clauses in a series. When using a comma for a series of words, the last comma you use is known as the Oxford comma and can change the meaning or relationship of the last two items in the list.</p>\r\n\r\n<p>Example:</p>\r\n\r\n<p>Boccaccio&rsquo;s tales have inspired plays, films, operas, and paintings.</p>\r\n\r\n<p><strong>Between coordinate adjectives &ndash;</strong> that is, adjectives that separately modify the same noun. Example: Critics praise the novel&rsquo;s unaffected, unadorned style.</p>\r\n\r\n<p><strong>Before a coordinating conjunction</strong> (and, but, for, nor, or, yet, or so) joining independent clauses in one sentence. Example: The poem is ironic, for the poet&rsquo;s meaning contrasts her words.</p>\r\n\r\n<p><strong>To set off a parenthetical comment</strong>, or an aside, if it is brief and closely related to the rest of the sentence. Example: The first year university, for example, is a very busy year.</p>\r\n\r\n<p><strong>To set off a nonrestrictive modifier</strong> &ndash; that is a descriptive word/phrase that is not essential to the meaning of the sentence, i.e. it could potentially be dropped without changing the main sentence. Example: J K Rowling, the author of the Harry Potter books, will offer an online reading tonight.</p>\r\n', '2022-02-04 01:06:17', 2, 'English_Sauce_1', 'noimage.jpg', 0, 0, 1, 4, 0, '{\"react_ids\":[]}', '{\"react2_ids\":[]}'),
(121, 'Programming_Sauce_2', '<p><strong>[SCREENSHOT]</strong><br />\r\nFlight Booking</p>\r\n', '2022-02-04 01:11:32', 2, 'Programming_Sauce_2', '2_FlightBooking2.jpg', 0, 0, 1, 3, 0, '{\"react_ids\":[]}', '{\"react2_ids\":[]}'),
(122, 'Programming_Sauce_3', '<p><strong>[SCREENSHOT]</strong></p>\r\n\r\n<p>CITIZEN BENEFIT</p>\r\n', '2022-02-04 01:54:20', 2, 'Programming_Sauce_3', '2_codechum.png', 0, 0, 1, 3, 0, '{\"react_ids\":[]}', '{\"react2_ids\":[]}'),
(123, 'English_Sauce_2', '<h2><strong>What is a verb?&nbsp;</strong></h2>\r\n\r\n<p>Let&rsquo;s start with the basics:&nbsp;<em>What is a verb?</em>&nbsp;Verbs are words that describe actions, whether physical or mental. Verbs also describe a &ldquo;state of being,&rdquo; like the verbs&nbsp;<em>be, become,&nbsp;</em>or<em>&nbsp;</em><em>exist</em>.&nbsp;</p>\r\n\r\n<p><em>Salah&nbsp;ran&nbsp;across the field,&nbsp;kicked&nbsp;the ball, and&nbsp;scored&nbsp;a goal.&nbsp;</em></p>\r\n\r\n<p><em>&ldquo;I&nbsp;am&nbsp;the State</em>.&rdquo; &mdash;King Louis XIV</p>\r\n\r\n<p>Some verbs also act as &ldquo;helper verbs&rdquo; to change the tense of another verb. Likewise, these helper verbs can change a positive statement to a negative one with words like &ldquo;not.&rdquo;&nbsp;</p>\r\n\r\n<p><em>She&nbsp;has been jogging&nbsp;for a month and already feels her stamina increasing.&nbsp;</em></p>\r\n\r\n<p><em>&ldquo;I&nbsp;don&rsquo;t feel&nbsp;so good.&rdquo;&nbsp;</em>&mdash;Spider-Man</p>\r\n\r\n<p>Every sentence needs at least one verb. If there&rsquo;s no verb, it&rsquo;s an incomplete sentence or a sentence fragment. Except for imperative&nbsp;<a href=\"https://www.grammarly.com/blog/sentences/\" target=\"_blank\">sentences</a>&nbsp;(commands), a sentence also needs a subject, the thing doing the action.&nbsp;</p>\r\n\r\n<p>Subjects are important for a verb because they change how it&rsquo;s conjugated, which we explain below. This is especially true for the most common verb:&nbsp;<em>be</em>.</p>\r\n', '2022-02-04 01:59:00', 2, 'English_Sauce_2', 'noimage.jpg', 0, 0, 1, 4, 0, '{\"react_ids\":[]}', '{\"react2_ids\":[]}'),
(124, 'English_Sauce_3', '<h2>What is rhetoric?</h2>\r\n\r\n<p>Rhetoric is language that&rsquo;s carefully constructed to persuade, motivate, or inform the reader or listener about the speaker or writer&rsquo;s position. You might have heard the term used in discussions about politicians and political goals. That&rsquo;s because politicians, alongside people in other roles that involve public speaking, employ rhetoric regularly. In fact, the word &ldquo;rhetoric&rdquo; comes from the Greek &ldquo;rhetorikos,&rdquo; which means &ldquo;oratory.&rdquo;</p>\r\n\r\n<p>You&rsquo;re probably familiar with the concept of a rhetorical question. A rhetorical question is a question that&rsquo;s often asked to a broad audience in an effort to get the audience thinking seriously about the question and its implications. The speaker or writer doesn&rsquo;t typically expect answers to the question; their goal is to facilitate a discussion. Here are a few examples of rhetorical questions:</p>\r\n\r\n<ul>\r\n	<li>Are we doing the right thing?</li>\r\n	<li>What is this, a joke?</li>\r\n</ul>\r\n', '2022-02-04 02:01:26', 2, 'English_Sauce_3', 'noimage.jpg', 0, 0, 1, 4, 0, '{\"react_ids\":[]}', '{\"react2_ids\":[]}'),
(125, 'Science_Sauce_1', '<p><strong>Tension Formula</strong></p>\r\n\r\n<p>In Latin, the word &quot;tension&quot; means &quot;stretching&quot;. Tension force is the force of contact which is carried with a flexible medium length. It is represented by T (occasionally also, denoted as Ft).</p>\r\n\r\n<p>T = W &plusmn; ma (upwards)</p>\r\n\r\n<p>T = W &ndash; ma (downwards)</p>\r\n\r\n<p>T = W (static)</p>\r\n', '2022-02-04 02:04:10', 2, 'Science_Sauce_1', 'noimage.jpg', 0, 0, 1, 1, 0, '{\"react_ids\":[]}', '{\"react2_ids\":[]}'),
(126, 'Science_Sauce_2', '<p><strong>Vapour Pressure Formula</strong></p>\r\n\r\n<p>&nbsp;A solution is created when a solid gets dissolved into the liquid. The vapour pressure formed from this solution is lowered by the addition of the solute. Raoult&rsquo;s law, which explains how the vapour pressure of a liquid gets changed by the addition of a solute.</p>\r\n\r\n<p>&nbsp;&nbsp; P solution = (X solvent )( Po solvent&nbsp; )&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>X solvent = the mole fraction of the solvent in the solution</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>P solution = the vapour pressure of the solution</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>P&deg;solvent = the vapour pressure of the solvent</p>\r\n', '2022-02-04 02:06:07', 2, 'Science_Sauce_2', 'noimage.jpg', 0, 0, 1, 1, 0, '{\"react_ids\":[]}', '{\"react2_ids\":[]}'),
(128, 'Science_Sauce_3', '<p><strong>[SCREENSHOT]</strong></p>\r\n\r\n<p>DRAKE&#39;S EQUATION</p>\r\n', '2022-02-04 02:13:55', 2, 'Science_Sauce_3', '2_drake.jpg', 0, 0, 1, 1, 0, '{\"react_ids\":[]}', '{\"react2_ids\":[]}'),
(131, 'Math_Sauce_1', '<p><strong>[SCREENSHOT]</strong><br />\r\nBasic Derivative Rules</p>\r\n', '2022-02-04 19:21:49', 2, 'Math_Sauce_1', '2_Math_1.jpg', 0, 0, 1, 2, 0, '{\"react_ids\":[]}', '{\"react2_ids\":[]}'),
(132, 'Math_Sauce_2', '<p><strong>[SCREENSHOT]</strong><br />\r\nProbability</p>\r\n', '2022-02-04 19:23:43', 2, 'Math_Sauce_2', '2_Math2.jpg', 0, 0, 1, 2, 0, '{\"react_ids\":[]}', '{\"react2_ids\":[]}'),
(135, 'Math_Sauce_3', '<p><strong>[SCREENSHOT]</strong><br />\r\nPermutations and Combinations</p>\r\n', '2022-02-04 19:30:52', 2, 'Math_Sauce_3', '2_Math_3.jpg', 0, 0, 1, 2, 1, '{\"react_ids\":[]}', '{\"react2_ids\":[]}'),
(136, 'Filipino_Sauce_1', '<p><strong>[SCREENSHOT]</strong><br />\r\nBaybayin</p>\r\n', '2022-02-04 19:42:42', 2, 'Filipino_Sauce_1', '2_Filipino1.jpg', 0, 0, 1, 5, 0, '{\"react_ids\":[]}', '{\"react2_ids\":[]}'),
(137, 'Filipino_Sauce_2', '<p><strong>Panghalip</strong></p>\r\n\r\n<ul>\r\n	<li>Ang panghalip ay ang salitang humahalili o pamalit sa ngalan o pangngalan na nagamit na sa parehong pangungusap o kasunod na pangungusap. Ang salitang panghalip ay nangangahulugang &quot;panghalili&quot; o &quot;pamalit&quot; kadalasan itong ginagamit sa mga talata,pangungusap at kuwento.</li>\r\n</ul>\r\n', '2022-02-04 19:45:23', 2, 'Filipino_Sauce_2', 'noimage.jpg', 0, 0, 1, 5, 0, '{\"react_ids\":[]}', '{\"react2_ids\":[]}'),
(138, 'Filipino_Sauce_3', '<p><strong>Pandiwa</strong></p>\r\n\r\n<ul>\r\n	<li>Ang pandiwa ay isang salita (bahagi ng pananalita) na nagsasaad ng kilos o galaw (lakad, takbo, dala), isang pangyayari (naging, nangyari), o isang katayuan (tindig, upo, umiral). Tinatawag ito na verb sa wikang Ingles. Mga halimbawa (naka-italiko): Pumunta ako sa tindahan. Binili ko ang tinapay. Kumain ako ng tinapay kaninang umaga. Sumakay ako sa jeep papunta sa paaralan. Ginagawa ko palagi ang aking mga takdang-aralin.</li>\r\n</ul>\r\n', '2022-02-04 19:45:50', 2, 'Filipino_Sauce_3', 'noimage.jpg', 1, 0, 1, 5, 0, '{\"react_ids\":[\"2\"]}', '{\"react2_ids\":[]}'),
(139, 'TEST 0', '<p>TEST 0</p>\r\n', '2022-02-06 21:36:30', 2, 'TEST-0', 'noimage.jpg', 0, 0, 2, 0, 2, '{\"react_ids\":[]}', '{\"react2_ids\":[]}'),
(140, 'Test 1', '<p>Test 1</p>\r\n', '2022-02-07 16:43:22', 3, 'Test-1', 'noimage.jpg', 2, 0, 2, 0, 0, '{\"react_ids\":[\"3\",\"2\"]}', '{\"react2_ids\":[]}'),
(141, 'testcase0', '<p>edited</p>\r\n', '2022-02-10 21:29:01', 13, 'testcase0', '13_MMR.jpg', 6, -5, 9, 0, 1, '{\"react_ids\":[\"2\"]}', '{\"react2_ids\":[\"2\"]}');

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
  `downvote` int(255) NOT NULL,
  `react_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '{"react_ids":[]}',
  `react2_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '{"react2_ids":[]}' CHECK (json_valid(`react2_ids`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `post_id`, `content`, `date`, `by`, `upvote`, `downvote`, `react_ids`, `react2_ids`) VALUES
(82, 135, 'ARISH', '2022-02-06 21:35:54', 2, 0, 0, '{\"react_ids\":[]}', '{\"react2_ids\":[]}'),
(83, 139, 'GAVS', '2022-02-06 21:37:05', 2, 0, 0, '{\"react_ids\":[]}', '{\"react2_ids\":[]}'),
(84, 139, 'TEST', '2022-02-07 16:46:21', 3, 0, 0, '{\"react_ids\":[]}', '{\"react2_ids\":[]}'),
(85, 141, 'Test Reply 1', '2022-02-10 21:29:44', 13, -3, 4, '{\"react_ids\":[]}', '{\"react2_ids\":[\"2\"]}');

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
(2, 'TUP', '2022-01-31 22:33:03'),
(3, 'Anime', '2022-02-04 19:16:45'),
(4, 'Manga', '2022-02-04 19:16:45'),
(5, 'Games', '2022-02-04 19:16:45'),
(6, 'Shows', '2022-02-04 19:16:45'),
(7, 'Sports', '2022-02-04 19:16:45'),
(8, 'Cybersecurity', '2022-02-04 19:16:45'),
(9, 'Academics', '2022-02-04 19:16:45');

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
  `profile_picture` varchar(255) NOT NULL DEFAULT 'noimage.jpg',
  `TPIN` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `bio`, `post_count`, `profile_picture`, `TPIN`) VALUES
(1, 'asdasd', 'asdasd@gmail.com', '$2y$10$npHij/5R/zJCU0jUmRmwUe2zoVTR3gkziMgwL8I0RJsTAvNNhQS.K', 'Insert your bio here', 2, 'noimage.jpg', '0'),
(2, 'das', 'ads@gmail.com', '$2y$10$npHij/5R/zJCU0jUmRmwUe2zoVTR3gkziMgwL8I0RJsTAvNNhQS.K', '<p>MINECRAFT</p>\r\n', 32, '2__okishock.png', '0'),
(3, 'user0', 'user0@gmail.com', '$2y$10$npHij/5R/zJCU0jUmRmwUe2zoVTR3gkziMgwL8I0RJsTAvNNhQS.K', 'Insert your bio here', 1, 'noimage.jpg', '0'),
(4, 'test1', 'test@gmail.com', '$2y$10$npHij/5R/zJCU0jUmRmwUe2zoVTR3gkziMgwL8I0RJsTAvNNhQS.K', 'Insert your bio here', 0, 'noimage.jpg', '0'),
(5, 'asdasdasd', 'asdasdasd@gmail.com', '$2y$10$npHij/5R/zJCU0jUmRmwUe2zoVTR3gkziMgwL8I0RJsTAvNNhQS.K', 'Insert your bio here', 0, 'noimage.jpg', '0'),
(9, 'Renren', 'renren@mail.com', '$2y$10$npHij/5R/zJCU0jUmRmwUe2zoVTR3gkziMgwL8I0RJsTAvNNhQS.K', 'Insert your bio here', 4, 'noimage.jpg', '0'),
(10, 'PasswordCheck0', 'pass0@gmail.com', '$2y$10$npHij/5R/zJCU0jUmRmwUe2zoVTR3gkziMgwL8I0RJsTAvNNhQS.K', 'Insert your bio here', 0, 'noimage.jpg', '0'),
(11, 'PasswordCheck1', 'pass1@gmail.com', '$2y$10$TrxUiBfGZ9D458bMKYvniOGaJMzMm3Lx2T9zOmTrQXnQYf8Qm6AR6', '<p>Insert your bio here</p>\r\n', 0, '11_6bbf245fe28be27c17d084df2f194d17-20200817155820.png', '0'),
(12, 'JOSE', 'uniportal02@gmail.com', '$2y$10$JlOdiJ/JMEFlAmckrc/KEetAGsndcx.NpaN2GqhgDCxNUeind.zci', 'Insert your bio here', 0, 'noimage.jpg', '$2y$10$y7B7WJsnrErsZZFVw3D2uekt9RqcqMbxN1rGd.p7Vm5Ws9gyTJ71O'),
(13, 'User1', 'asdd@gmail.com', '$2y$10$kOHo9XjbGQnUCidrZNi18e8PT0wq6w8.HAkUuLrndbhX/tOEb9PSa', 'Insert your bio here', 1, 'noimage.jpg', '0');

-- --------------------------------------------------------

--
-- Table structure for table `whatsauce`
--

CREATE TABLE `whatsauce` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `whatsauce`
--

INSERT INTO `whatsauce` (`id`, `name`) VALUES
(1, 'Science'),
(2, 'Math'),
(3, 'Programming'),
(4, 'English'),
(5, 'Filipino');

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
-- Indexes for table `whatsauce`
--
ALTER TABLE `whatsauce`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `whatsauce`
--
ALTER TABLE `whatsauce`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
