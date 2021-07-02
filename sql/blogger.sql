-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2021 at 08:14 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogger`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `post_title` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `user_id`, `post_title`, `post_body`, `post_created_at`) VALUES
(1, 1, 'motivate quotes', 'In my younger and more vulnerable years, my father gave me some advice that I\'ve been turning over in my mind ever since. \'Whenever you feel like criticizing anyone,\' he told me, \'just remember that all the people in this world haven\'t had the advantages that you\'ve had.\'', '2021-07-02 11:04:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_bath` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_about` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_email`, `user_phone`, `date_of_bath`, `user_pass`, `user_about`, `user_created_at`) VALUES
(2, 'Sujon Ahmed', 'sujonahmed@gmail.com', '01743405982', '2000-07-02', '12345', 'hello', '2021-07-02 06:15:40'),
(3, 'Riman', 'riman@gmail.com', '01789414206', '2001-07-02', '36548', 'hi', '2021-07-02 06:32:13'),
(5, 'Alamin', 'alamin@gmail.com', '01756456488', '1999-07-15', '548613', 'hi there.', '2021-07-02 07:10:46'),
(6, 'toukir', 'toukir@gmail.com', '017789748465', '2001-07-02', '456456', 'hey what up?', '2021-07-02 07:25:48'),
(17, 'mahadi', 'mahadi@gmail.com', '01985168425', '2000-07-06', '1598736', 'hey i am mahadi.', '2021-07-02 11:11:36'),
(18, 'mahbub', 'mahbub@gmail.com', '01869284637', '2000-08-08', '52684', 'hello i am mahbub', '2021-07-02 11:15:51'),
(20, 'bidhan', 'bidhan@gmail.com', '018645465645', '2000-08-04', '89465115', 'hi i am bidhan', '2021-07-02 11:26:48'),
(21, 'soikot', 'soikot@gmail.com', '018465465356', '1999-05-29', '99885566', 'i am soikot', '2021-07-02 11:28:57'),
(22, 'asanur rahman', 'asanurrahman@gmail.com', '0176464654165', '1995-02-05', 'asanur123', 'i am asanur', '2021-07-02 11:32:58'),
(23, 'anas', 'anas@gmail.com', '018456143188', '2001-08-26', 'anas852', 'hello there!', '2021-07-02 11:57:24'),
(24, 'mahadi', 'mahadi@gmail.com', '645654654', '2021-07-02', '48dde5ad0af18b0810f36f4f92abdcff', 'hello', '2021-07-02 12:12:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
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
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
