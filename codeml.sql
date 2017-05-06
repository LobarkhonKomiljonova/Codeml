-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2017 at 02:39 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeml`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `media` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `place` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `tag`, `title`, `content`, `media`, `date`, `place`) VALUES
(1, 'main_goal', 'We provide experience only for you ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor   ', 'video_bg.mp4', '2017-04-27 02:38:01', 1),
(2, 'news', 'ALo ALo ', 'egvqgvqeBVEWWEWWWRRHHBWHBWRHBRHWRBH WRgwrGG4WH42H42H42GV4EGFE4Q2GQ2E4', '', '2017-04-27 02:38:01', 2),
(3, 'Know Your Level Now', 'Take Quiz', 'About Quiz  About Quiz  About Quiz  About Quiz  About Quiz  About Quiz   About Quiz  About Quiz  About Quiz  About Quiz About Quiz  About Quiz  About Quiz  About Quiz About Quiz  About Quiz  About Quiz  About Quiz About Quiz  About Quiz  About Quiz  About Quiz    ', 'csspic.jpg', '2017-04-27 02:38:01', 3),
(4, 'Keep Busy With Coding Ground', 'HTML Editor', 'About Redactor  About Redactor  About Redactor  About Redactor  About Redactor  About Redactor   About Redactor  About Redactor  About Redactor  About Redactor About Redactor  About Redactor  About Redactor  About Redactor  About Redactor', 'slide-2-1.png', '2017-04-27 02:38:01', 4),
(5, 'news ', 'Happy BIrthday ', 'ndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhb', '', '2017-04-27 03:35:29', 2),
(6, 'news', 'Happy Holiday ', 'vnjke;qwnJKNJKBKE vnjke;qwnJKNJKBKE vnjke;qwnJKNJKBKE vnjke;qwnJKNJKBKE vnjke;qwnJKNJKBKE vnjke;qwnJKNJKBKE vnjke;qwnJKNJKBKE vnjke;qwnJKNJKBKE vnjke;qwnJKNJKBKE vnjke;qwnJKNJKBKE vnjke;qwnJKNJKBKE vnjke;qwnJKNJKBKE vnjke;qwnJKNJKBKE vnjke;qwnJKNJKBKE vnjke;qwnJKNJKBKE vnjke;qwnJKNJKBKE vnjke;qwnJKNJKBKE vnjke;qwnJKNJKBKE vnjke;qwnJKNJKBKE vnjke;qwnJKNJKBKE vnjke;qwnJKNJKBKE vnjke;qwnJKNJKBKE vnjke;qwnJKNJKBKE vnjke;qwnJKNJKBKE vnjke;qwnJKNJKBKE vnjke;qwnJKNJKBKE ', '', '2017-04-27 03:35:29', 2),
(7, 'news ', 'Happy BIrthday ', 'ndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhbndbgjbdfjbgjhbhjadbjhgdfbjhb', '', '2017-04-27 03:35:33', 2),
(8, 'news', 'Hello Akbar ', 'Akbar', 'douglas_adams_full-400x225.jpg', '2017-04-27 03:35:33', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(7) NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_type` int(4) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `gender`, `birth_date`, `phone_number`, `email`, `user_name`, `user_type`, `password`) VALUES
(1, 'Rakhimjon', 'Rustamov ', 'male ', '2017-04-19', '+998973259200', 'mr.rakhimjon.iut@gamil.com', 'Daydreamer ', 1, '1212');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
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
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
