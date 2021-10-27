-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 05:58 PM
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
(1, 25, 'motivate quotes', 'In my younger and more vulnerable years, my father gave me some advice that I\'ve been turning over in my mind ever since. \'Whenever you feel like criticizing anyone,\' he told me, \'just remember that all the people in this world haven\'t had the advantages that you\'ve had.\'', '2021-07-02 11:04:42'),
(5, 25, 'Why we should learn programming?', '&quot; Everybody in this country should learn how to program a computer...\r\n Because it teaches how to think. &quot;', '2021-07-03 16:33:16'),
(11, 25, 'About this blog.', 'Hi,\r\nI am Sujon Ahmed a Student of Faridpur Polytechnic Institute Computer Technology. Today I am very happy because I complete the dynamic of this site. this is my first dynamic blogging site.\r\nthanks, DoelCampus Owner, Admin, members, and specially thanks Md Ashanaur Rahman Vai. He is the best web developer tutor. when I design and develop this site he helps me a lot.', '2021-07-03 21:01:35'),
(12, 27, 'Think about Yourself', 'â€œIt never ceases to amaze me: We all love ourselves more than other people, but care more about their opinion than our own.â€', '2021-07-07 12:39:06'),
(13, 25, 'à¦à¦•à¦¾à¦•à¦¿à¦¤à§à¦¬', '&quot; à¦à¦•à¦¾à¦•à¦¿à¦¤à§à¦¬ à¦¹à§Ÿ à¦¤à§‹à¦®à¦¾à¦•à§‡ à¦…à¦¨à§‡à¦• à¦¬à§œ à¦•à¦¿à¦›à§ à¦¦à¦¿à¦¬à§‡ à¦¨à§Ÿà¦¤à§‹ à¦¸à¦¬à¦•à¦¿à¦›à§ à¦•à§‡à§œà§‡ à¦¨à¦¿à¦¬à§‡à¥¤ &quot;', '2021-07-14 09:13:58'),
(14, 25, 'Todo here', 'Today Tuesday ðŸ˜', '2021-07-27 10:31:34'),
(15, 30, 'hello', 'Hi, I am Shagor from Dhaka.', '2021-07-27 10:37:26');

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
(25, 'Sujon Ahmed', 'admin@gmail.com', '01743405982', '2000-02-27', '21232f297a57a5a743894a0e4a801fc3', 'I am an admin in this project.', '2021-07-02 19:11:33'),
(26, 'mahadi hasan', 'mahadi@gmail.com', '01985168425', '1999-07-03', '827ccb0eea8a706c4c34a16891f84e7b', 'Hey,\r\nI am mahadi hasan.', '2021-07-03 12:51:52'),
(27, 'Alamin Islam', 'alamin@gmail.com', '01869284637', '2000-10-02', 'd061f4891bd39deb65390f62677c38d1', 'I am alamin cse student of faridpur polytechnic institute.', '2021-07-03 16:39:49'),
(30, 'Shagor Islam', 'shagor@gmail.com', '01789414206', '2000-01-20', '6ff86cfdd91815c9e65cdf71db2f9ec0', 'I am Shagor Islam', '2021-07-27 10:35:19');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
