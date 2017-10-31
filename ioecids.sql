-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2017 at 12:34 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ioecids`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `phone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `address`, `phone`, `status`, `added_date`, `update_date`) VALUES
(1, 'info1@cids.com', 'sdvasdvfsbafbv', '0987654321', NULL, '2017-10-15 14:38:35', '2017-10-15 14:47:06');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci,
  `status` tinyint(4) DEFAULT NULL,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `email`, `phone`, `message`, `status`, `added_date`, `update_date`) VALUES
(2, 'admin', 'admin@cids.com', '123456789', 'this is test from database', NULL, '2017-10-15 14:30:09', NULL),
(3, 'ansuman', 'pokharel@gmail.com', 'asldfkl', 'kalsdfalsdkfjasdf', NULL, '2017-10-27 16:41:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `pos_title` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pos_description` text COLLATE utf8_unicode_ci,
  `message` text COLLATE utf8_unicode_ci,
  `added_by` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `role_id` int(11) DEFAULT NULL,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `status`, `role_id`, `added_date`, `updated_date`) VALUES
(1, 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227', 1, 1, '2017-10-14 14:53:55', '2017-10-15 15:41:44'),
(2, 'ioecids', '60944e5702bdafb74ec9614120a88bdfa7084da0', 1, NULL, '2017-10-15 15:43:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `youtube`
--

CREATE TABLE `youtube` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `videoId` text COLLATE utf8_unicode_ci,
  `status` int(11) DEFAULT NULL,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `youtube`
--

INSERT INTO `youtube` (`id`, `title`, `description`, `videoId`, `status`, `added_date`, `updated_date`) VALUES
(1, 'Too good at goodbye by Sam Smith', '', 'J_ub7Etch2U', NULL, '2017-10-23 13:18:52', NULL),
(2, 'Something Just like this', '', 'FM7MFYoylVs', NULL, '2017-10-23 13:22:45', NULL),
(3, 'Attention by Charlie Puth', '', 'nfs8NYg7yQM', NULL, '2017-10-23 13:40:33', NULL),
(5, 'Too good at goodbye by Sam Smith', '&lt;p&gt;&lt;strong&gt;Theres Nothing Holdin Me Back&lt;/strong&gt;&lt;/p&gt;\r\n&lt;div&gt;I wanna follow where she goes&lt;br /&gt;I think about her and she knows it&lt;br /&gt;I wanna let her take control&lt;br /&gt;Cause every time that she gets close, yeah&lt;br /&gt;&lt;br /&gt;She pulls me in enough to keep me guessing, mmm&lt;br /&gt;And maybe I should stop and start confessing&lt;br /&gt;Confessing, yeah&lt;br /&gt;&lt;br /&gt;Oh, Ive been shaking&lt;br /&gt;I love it when you go crazy&lt;br /&gt;You take all my inhibitions&lt;br /&gt;Baby, theres nothing holdin me back&lt;br /&gt;&lt;br /&gt;You take me places that tear up my reputation&lt;br /&gt;Manipulate my decisions&lt;br /&gt;Baby, theres nothing holdin me back&lt;br /&gt;&lt;br /&gt;Theres nothing holdin me back&lt;br /&gt;Theres nothing holdin me back&lt;br /&gt;&lt;br /&gt;She says that she is never afraid&lt;br /&gt;Just picture everybody naked&lt;br /&gt;She really does not like to wait&lt;br /&gt;Not really into hesitation&lt;br /&gt;&lt;br /&gt;Pulls me in enough to keep me guessing, whoa&lt;br /&gt;And maybe I should stop and start confessing&lt;br /&gt;Confessing, yeah&lt;br /&gt;&lt;br /&gt;Oh, I have been shaking&lt;br /&gt;I love it when you go crazy&lt;br /&gt;You take all my inhibitions&lt;br /&gt;Baby, there is nothing holding me back&lt;br /&gt;&lt;br /&gt;You take me places that tear up my reputation&lt;br /&gt;Manipulate my decisions&lt;br /&gt;Baby, there is nothing holding me back&lt;br /&gt;&lt;br /&gt;There is nothing holding me back&lt;br /&gt;&lt;br /&gt;Cause if we lost our minds&lt;br /&gt;And we took it way too far&lt;br /&gt;I know we would be alright,&lt;br /&gt;Know we would be alright&lt;br /&gt;&lt;br /&gt;If you were by my side&lt;br /&gt;And we stumbled in the dark&lt;br /&gt;I know we would be alright,&lt;br /&gt;I know we would be alright&lt;br /&gt;&lt;br /&gt;Cause if we lost our minds&lt;br /&gt;And we took it way too far&lt;br /&gt;I know we would be alright,&lt;br /&gt;I know we would be alright&lt;br /&gt;&lt;br /&gt;If you were by my side&lt;br /&gt;And we stumbled in the dark&lt;br /&gt;I know we would be alright,&lt;br /&gt;We would be alright&lt;br /&gt;&lt;br /&gt;Oh, I have been shaking&lt;br /&gt;I love it when you go crazy&lt;br /&gt;You take all my inhibitions&lt;br /&gt;Baby, there is nothing holding me back&lt;br /&gt;&lt;br /&gt;You take me places that tear up my reputation&lt;br /&gt;Manipulate my decisions&lt;br /&gt;Baby, there is nothing holding me back&lt;br /&gt;&lt;br /&gt;There is nothing holding me back&lt;br /&gt;&lt;br /&gt;I feel so free&lt;br /&gt;When you are with me,&lt;br /&gt;Baby&lt;br /&gt;&lt;br /&gt;Baby, there is nothing holding me back&lt;/div&gt;', 'dT2owtxkU8k', NULL, '2017-10-23 13:58:14', NULL),
(6, 'Treat you better', '', 'lY2yjAdbvdQ', NULL, '2017-10-23 14:00:32', NULL),
(8, 'Shawn Mendes - Stitches (Official Video)', '&amp;lt;p&amp;gt;&amp;lt;strong&amp;gt;&amp;quot;Stitches&amp;quot;&amp;lt;/strong&amp;gt;&amp;lt;br /&amp;gt;&amp;lt;br /&amp;gt;&amp;lt;/p&amp;gt;\r\n&amp;lt;div&amp;gt;I thought that I&amp;#39;d been hurt before&amp;lt;br /&amp;gt;But no one&amp;#39;s ever left me quite this sore&amp;lt;br /&amp;gt;Your words cut deeper than a knife&amp;lt;br /&amp;gt;Now I need someone to breathe me back to life&amp;lt;br /&amp;gt;&amp;lt;br /&amp;gt;Got a feeling that I&amp;#39;m going under&amp;lt;br /&amp;gt;But I know that I&amp;#39;ll make it out alive&amp;lt;br /&amp;gt;If I quit calling you my lover&amp;lt;br /&amp;gt;Move on&amp;lt;br /&amp;gt;&amp;lt;br /&amp;gt;You watch me bleed until I can&amp;#39;t breathe&amp;lt;br /&amp;gt;Shaking, falling onto my knees&amp;lt;br /&amp;gt;And now that I&amp;#39;m without your kisses&amp;lt;br /&amp;gt;I&amp;#39;ll be needing stitches&amp;lt;br /&amp;gt;Tripping over myself&amp;lt;br /&amp;gt;Aching, begging you to come help&amp;lt;br /&amp;gt;And now that I&amp;#39;m without your kisses&amp;lt;br /&amp;gt;I&amp;#39;ll be needing stitches&amp;lt;br /&amp;gt;&amp;lt;br /&amp;gt;Just like a moth drawn to a flame&amp;lt;br /&amp;gt;Oh, you lured me in, I couldn&amp;#39;t sense the pain&amp;lt;br /&amp;gt;Your bitter heart cold to the touch&amp;lt;br /&amp;gt;Now I&amp;#39;m gonna reap what I sow&amp;lt;br /&amp;gt;I&amp;#39;m left seeing red on my own&amp;lt;br /&amp;gt;&amp;lt;br /&amp;gt;Got a feeling that I&amp;#39;m going under&amp;lt;br /&amp;gt;But I know that I&amp;#39;ll make it out alive&amp;lt;br /&amp;gt;If I quit calling you my lover&amp;lt;br /&amp;gt;Move on&amp;lt;br /&amp;gt;&amp;lt;br /&amp;gt;You watch me bleed until I can&amp;#39;t breathe&amp;lt;br /&amp;gt;Shaking, falling onto my knees&amp;lt;br /&amp;gt;And now that I&amp;#39;m without your kisses&amp;lt;br /&amp;gt;I&amp;#39;ll be needing stitches&amp;lt;br /&amp;gt;Tripping over myself,&amp;lt;br /&amp;gt;Aching, begging you to come help&amp;lt;br /&amp;gt;And now that I&amp;#39;m without your kisses&amp;lt;br /&amp;gt;I&amp;#39;ll be needing stitches&amp;lt;br /&amp;gt;&amp;lt;br /&amp;gt;&amp;lt;em&amp;gt;[x3:]&amp;lt;/em&amp;gt;&amp;lt;br /&amp;gt;Needle and the thread,&amp;lt;br /&amp;gt;Gotta get you out of my head&amp;lt;br /&amp;gt;Needle and the thread,&amp;lt;br /&amp;gt;Gonna wind up dead&amp;lt;br /&amp;gt;&amp;lt;br /&amp;gt;Needle and the thread,&amp;lt;br /&amp;gt;Gotta get you out of my head, get you out of my head&amp;lt;br /&amp;gt;&amp;lt;br /&amp;gt;You watch me bleed until I can&amp;#39;t breathe&amp;lt;br /&amp;gt;Shaking, falling onto my knees (falling on my knees)&amp;lt;br /&amp;gt;And now that I&amp;#39;m without your kisses&amp;lt;br /&amp;gt;I&amp;#39;ll be needing stitches (and I&amp;#39;ll be needing stitches)&amp;lt;br /&amp;gt;Tripping over myself,&amp;lt;br /&amp;gt;Aching, begging you to come help (begging, &amp;quot;Baby, please.&amp;quot;)&amp;lt;br /&amp;gt;And now that I&amp;#39;m without your kisses&amp;lt;br /&amp;gt;I&amp;#39;ll be needing stitches&amp;lt;br /&amp;gt;&amp;lt;br /&amp;gt;(And now that)&amp;lt;br /&amp;gt;I&amp;#39;m without your kisses&amp;lt;br /&amp;gt;I&amp;#39;ll be needing stitches&amp;lt;br /&amp;gt;(And now that)&amp;lt;br /&amp;gt;I&amp;#39;m without your kisses&amp;lt;br /&amp;gt;I&amp;#39;ll be needing stitches&amp;lt;/div&amp;gt;', 'VbfpW0pbvaU', NULL, '2017-10-23 14:16:32', NULL),
(9, 'Shawn Mendes - Stitches (Official Video)', '&lt;p&gt;&lt;strong&gt;&quot;There&amp;amp;#39;s Nothing Holdin&amp;amp;#39; Me Back&quot;&lt;/strong&gt;&lt;br /&gt;&lt;br /&gt;&lt;/p&gt;\r\n&lt;div&gt;I wanna follow where she goes&lt;br /&gt;I think about her and she knows it&lt;br /&gt;I wanna let her take control&lt;br /&gt;&amp;amp;#39;Cause every time that she gets close, yeah&lt;br /&gt;&lt;br /&gt;She pulls me in enough to keep me guessing, mmm&lt;br /&gt;And maybe I should stop and start confessing&lt;br /&gt;Confessing, yeah&lt;br /&gt;&lt;br /&gt;Oh, I&amp;amp;#39;ve been shaking&lt;br /&gt;I love it when you go crazy&lt;br /&gt;You take all my inhibitions&lt;br /&gt;Baby, there&amp;amp;#39;s nothing holdin&amp;amp;#39; me back&lt;br /&gt;&lt;br /&gt;You take me places that tear up my reputation&lt;br /&gt;Manipulate my decisions&lt;br /&gt;Baby, there&amp;amp;#39;s nothing holdin&amp;amp;#39; me back&lt;br /&gt;&lt;br /&gt;There&amp;amp;#39;s nothing holdin&amp;amp;#39; me back&lt;br /&gt;There&amp;amp;#39;s nothing holdin&amp;amp;#39; me back&lt;br /&gt;&lt;br /&gt;She says that she&amp;amp;#39;s never afraid&lt;br /&gt;Just picture everybody naked&lt;br /&gt;She really doesn&amp;amp;#39;t like to wait&lt;br /&gt;Not really into hesitation&lt;br /&gt;&lt;br /&gt;Pulls me in enough to keep me guessing, whoa&lt;br /&gt;And maybe I should stop and start confessing&lt;br /&gt;Confessing, yeah&lt;br /&gt;&lt;br /&gt;Oh, I&amp;amp;#39;ve been shaking&lt;br /&gt;I love it when you go crazy&lt;br /&gt;You take all my inhibitions&lt;br /&gt;Baby, there&amp;amp;#39;s nothing holdin&amp;amp;#39; me back&lt;br /&gt;&lt;br /&gt;You take me places that tear up my reputation&lt;br /&gt;Manipulate my decisions&lt;br /&gt;Baby, there&amp;amp;#39;s nothing holdin&amp;amp;#39; me back&lt;br /&gt;&lt;br /&gt;There&amp;amp;#39;s nothing holdin&amp;amp;#39; me back&lt;br /&gt;&lt;br /&gt;&amp;amp;#39;Cause if we lost our minds&lt;br /&gt;And we took it way too far&lt;br /&gt;I know we&amp;amp;#39;d be alright,&lt;br /&gt;Know we would be alright&lt;br /&gt;&lt;br /&gt;If you were by my side&lt;br /&gt;And we stumbled in the dark&lt;br /&gt;I know we&amp;amp;#39;d be alright,&lt;br /&gt;I know we would be alright&lt;br /&gt;&lt;br /&gt;&amp;amp;#39;Cause if we lost our minds&lt;br /&gt;And we took it way too far&lt;br /&gt;I know we&amp;amp;#39;d be alright,&lt;br /&gt;I know we would be alright&lt;br /&gt;&lt;br /&gt;If you were by my side&lt;br /&gt;And we stumbled in the dark&lt;br /&gt;I know we&amp;amp;#39;d be alright,&lt;br /&gt;We would be alright&lt;br /&gt;&lt;br /&gt;Oh, I&amp;amp;#39;ve been shaking&lt;br /&gt;I love it when you go crazy&lt;br /&gt;You take all my inhibitions&lt;br /&gt;Baby, there&amp;amp;#39;s nothing holdin&amp;amp;#39; me back&lt;br /&gt;&lt;br /&gt;You take me places that tear up my reputation&lt;br /&gt;Manipulate my decisions&lt;br /&gt;Baby, there&amp;amp;#39;s nothing holdin&amp;amp;#39; me back&lt;br /&gt;&lt;br /&gt;There&amp;amp;#39;s nothing holdin&amp;amp;#39; me back&lt;br /&gt;&lt;br /&gt;I feel so free&lt;br /&gt;When you&amp;amp;#39;re with me,&lt;br /&gt;Baby&lt;br /&gt;&lt;br /&gt;Baby, there&amp;amp;#39;s nothing holdin&amp;amp;#39; me back&lt;/div&gt;', 'VbfpW0pbvaU', NULL, '2017-10-23 14:23:33', NULL),
(10, 'Just like you', '', 'qvXXMsiQBDg', NULL, '2017-10-23 14:56:00', NULL),
(11, 'Imagine Dragons - Thunder (Lyrics / Lyric Video)', '', 'wFhs7WVvuXk', NULL, '2017-10-30 17:05:35', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `added_by` (`added_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youtube`
--
ALTER TABLE `youtube`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `youtube`
--
ALTER TABLE `youtube`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `positions`
--
ALTER TABLE `positions`
  ADD CONSTRAINT `positions_ibfk_1` FOREIGN KEY (`added_by`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
