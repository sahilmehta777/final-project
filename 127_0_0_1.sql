-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2024 at 01:22 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u221388083_ranjana`
--
CREATE DATABASE IF NOT EXISTS `u221388083_ranjana` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `u221388083_ranjana`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sno` int(200) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sno`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `sno` int(200) NOT NULL,
  `question` text NOT NULL,
  `keyword` mediumtext NOT NULL,
  `sdetail` mediumtext NOT NULL,
  `image` varchar(900) NOT NULL,
  `detail` longtext NOT NULL,
  `slogan` text NOT NULL,
  `tag` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`sno`, `question`, `keyword`, `sdetail`, `image`, `detail`, `slogan`, `tag`) VALUES
(1, 'Designers should always keep their users in mind ?', 'PHP,PYTHON,JAVA,NODE JS', 'We want to make it easier to learn more about a question and highlight key facts about it — such as how popular the question is, how many people are interested in it, and who the audience is. To accomplish that, today we’re introducing Question Overview, a new section on the question page that will make it easier to find the most important information about a question and its audience.\r\n\r\nSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum.', 'img7.jpg$img6.jpg', 'We want to make it easier to learn more about a question and highlight key facts about it — such as how popular the question is, how many people are interested in it, and who the audience is. To accomplish that, today we’re introducing Question Overview, a new section on the question page that will make it easier to find the most important information about a question and its audience.\r\n\r\nSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum.', 'Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla.\r\n\r\nSomeone famous in Source Title', 'PHP,PYTHON,JAVA,NODE JS'),
(2, 'Which Programming Language inTrending ?', 'PHP,PYTHON,JAVA,NODE JS', 'We want to make it easier to learn more about a question and highlight key facts about it — such as how popular the question is, how many people are interested in it, and who the audience is. To accomplish that, today we’re introducing Question Overview, a new section on the question page that will make it easier to find the most important information about a question and its audience.\r\n\r\nSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum.', 'img7.jpg$img6.jpg', 'We want to make it easier to learn more about a question and highlight key facts about it — such as how popular the question is, how many people are interested in it, and who the audience is. To accomplish that, today we’re introducing Question Overview, a new section on the question page that will make it easier to find the most important information about a question and its audience.\r\n\r\nSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum.', 'Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla.\r\n\r\nSomeone famous in Source Title', 'PHP,PYTHON,JAVA,NODE JS');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `sno` int(200) NOT NULL,
  `user_id` int(200) NOT NULL,
  `keyword_search` varchar(900) NOT NULL,
  `open_question_id` int(200) NOT NULL,
  `date` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`sno`, `user_id`, `keyword_search`, `open_question_id`, `date`) VALUES
(1, 1, 'Programming Language Trending', 2, '03 Feb 2024 | 6:00pm'),
(2, 1, 'Programming Language Trending', 1, '03 Feb 2024 | 6:00pm'),
(3, 1, 'php', 2, '06 Mar 2024|17:44 PM');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sno` int(200) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(900) NOT NULL,
  `password` varchar(600) NOT NULL,
  `profile_image` varchar(900) NOT NULL,
  `location` varchar(800) NOT NULL,
  `web` varchar(900) NOT NULL,
  `fb` varchar(700) NOT NULL,
  `insta` varchar(700) NOT NULL,
  `twitter` varchar(900) NOT NULL,
  `youtube` varchar(700) NOT NULL,
  `vimeo` varchar(900) NOT NULL,
  `github` varchar(600) NOT NULL,
  `status` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sno`, `name`, `email`, `password`, `profile_image`, `location`, `web`, `fb`, `insta`, `twitter`, `youtube`, `vimeo`, `github`, `status`) VALUES
(1, 'Harshit', 'harshit@gmail.com', '123', 'img6.jpg', 'Jaipur', 'https://www.bhartiyacoders.com', 'https://www.fb.com', 'https://www.insta.com', 'https://www.twitter.com', '', '', 'https://www.github.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
