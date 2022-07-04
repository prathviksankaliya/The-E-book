-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2021 at 03:51 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thebookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_book`
--

CREATE TABLE `add_book` (
  `book_id` bigint(60) NOT NULL,
  `sub_cat_name` varchar(60) NOT NULL,
  `book_name` varchar(60) NOT NULL,
  `book_author` varchar(60) NOT NULL,
  `book_img` varchar(60) NOT NULL,
  `book_pdf` varchar(80) NOT NULL,
  `book_desc` varchar(80) NOT NULL,
  `book_time` varchar(60) NOT NULL DEFAULT current_timestamp(),
  `book_status` int(60) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_book`
--

INSERT INTO `add_book` (`book_id`, `sub_cat_name`, `book_name`, `book_author`, `book_img`, `book_pdf`, `book_desc`, `book_time`, `book_status`) VALUES
(3, 'Environment', 'Braiding Sweetgrass', ' by Robin Wall Kimmerer', 'Braiding Sweetgrass.jpg', 'Braiding Sweetgrass.pdf', '', '2021-08-26 10:44:05', 1),
(7, 'Environment', 'Climate Change and Migration', 'by World Bank Group', 'Climate Change and Migration.jpg', 'Climate Change and Migration.pdf', '', '2021-08-26 11:11:17', 1),
(8, 'Environment', 'Greening the Economy with Agriculture', 'by Schweizerische Eidgenossenschaft', 'Greening the Economy with Agriculture.jpg', 'Greening the Economy with Agriculture.pdf', '', '2021-08-26 11:17:40', 1),
(11, 'Photography', 'Creative Photography Ideas', 'By Jessica Jenny', 'Creative Photography Ideas.jpg', 'Creative Photography Ideas.pdf', '', '2021-09-03 17:25:38', 1),
(12, 'Romance', 'Half Girlfriend', 'by Chetan Bhagat', 'Half Girlfriend.jpg', 'Half Girlfriend.pdf', '', '2021-09-03 17:28:09', 1),
(13, 'Romance', 'One Indian Girl', 'by Chetan Bhagat', 'One Indian Girl.jpg', 'One Indian Girl.pdf', '', '2021-09-03 17:30:12', 1),
(14, 'Psychology', 'Psychology - A Self-Teaching Guide', 'by Frank J. Bruno', 'Psychology - A Self-Teaching Guide.jpg', 'Psychology - A Self-Teaching Guide.pdf', '', '2021-09-10 22:55:40', 1),
(15, 'Programming', 'Android Programming Tutorials', 'by Mark Murphy', 'Android Programming Tutorials.jpg', 'Android Programming Tutorials.pdf', '', '2021-09-10 22:58:20', 1),
(17, 'Self-Improvement', 'Living in the Light', 'by David Sargent', 'Living in the Light.jpg', 'Living in the Light.pdf', '', '2021-09-10 23:18:07', 1),
(18, 'Astronomy & Space', 'Galactic Astronomy', 'By Subramaniam', 'Galactic Astronomy.jpg', 'Galactic Astronomy.pdf', '', '2021-09-26 18:22:28', 1),
(19, 'History', 'A History of India, Third Edition', 'By Hermann Kulke', 'A History of India, Third Edition.jpg', 'A History of India, Third Edition.pdf', '', '2021-09-26 18:30:14', 1),
(20, 'Sociology', 'Introduction to Sociology', 'By Zerihun Doda', 'Introduction to Sociology.jpg', 'Introduction to Sociology.pdf', '', '2021-09-26 18:33:28', 1),
(21, 'Medical', 'Fundamental Nursing Skills', 'By  Penelope Ann Hilton', 'Fundamental Nursing Skills.jpg', 'Fundamental Nursing Skills.pdf', '', '2021-09-26 18:36:45', 1),
(22, 'Software', 'COMPUTER HARDWARE AND SOFTWARE', 'By Linda Crane', 'COMPUTER HARDWARE AND SOFTWARE.jpg', 'COMPUTER HARDWARE AND SOFTWARE.pdf', '', '2021-09-26 18:43:28', 1),
(23, 'Internet', 'Language and the Internet', 'By David Crystal', 'Language and the Internet.jpg', 'Language and the Internet.pdf', '', '2021-09-26 18:46:18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `add_category`
--

CREATE TABLE `add_category` (
  `cat_id` bigint(255) NOT NULL,
  `cat_name` varchar(40) NOT NULL,
  `cat_img` varchar(60) NOT NULL,
  `cat_status` int(60) NOT NULL DEFAULT 1,
  `cat_time` varchar(60) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_category`
--

INSERT INTO `add_category` (`cat_id`, `cat_name`, `cat_img`, `cat_status`, `cat_time`) VALUES
(1, 'Academic & Education', 'Academic & Education.PNG', 1, '2021-08-13 18:56:02'),
(3, 'Art', 'Art.PNG', 1, '2021-08-14 11:51:05'),
(4, 'Fiction', 'Fiction.PNG', 1, '2021-08-14 11:52:12'),
(5, 'Health & Fitness', 'Health & Fitness.PNG', 1, '2021-08-14 11:53:06'),
(6, 'Personal Growth', 'Personal Growth.PNG', 1, '2021-08-14 11:53:43'),
(7, 'Technology', 'Technology.PNG', 1, '2021-08-14 11:54:06'),
(8, 'Science & Research', 'Science & Research.PNG', 1, '2021-08-14 11:54:35'),
(10, 'Politics & Laws', 'Politics & Laws.PNG', 1, '2021-08-14 12:07:31'),
(11, 'Combo Packs', 'Combo Packs.PNG', 1, '2021-08-14 12:08:05');

-- --------------------------------------------------------

--
-- Table structure for table `add_sub_category`
--

CREATE TABLE `add_sub_category` (
  `sub_cat_id` bigint(60) NOT NULL,
  `cat_name` varchar(60) NOT NULL,
  `sub_cat_name` varchar(60) NOT NULL,
  `sub_cat_img` varchar(60) NOT NULL,
  `sub_cat_time` varchar(60) NOT NULL DEFAULT current_timestamp(),
  `sub_cat_status` int(60) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_sub_category`
--

INSERT INTO `add_sub_category` (`sub_cat_id`, `cat_name`, `sub_cat_name`, `sub_cat_img`, `sub_cat_time`, `sub_cat_status`) VALUES
(1, 'Academic & Education', 'Environment', 'Environment.PNG', '2021-08-13 18:59:48', 1),
(3, 'Academic & Education', 'History', 'History.PNG', '2021-08-14 12:22:49', 1),
(4, 'Academic & Education', 'Psychology', 'Psychology.PNG', '2021-08-14 12:23:48', 1),
(5, 'Academic & Education', 'Sociology', 'Sociology.PNG', '2021-08-14 12:24:11', 1),
(6, 'Academic & Education', 'Medical', 'Medical.PNG', '2021-08-14 12:24:32', 1),
(7, 'Art', 'Photography', 'Photography.PNG', '2021-08-14 12:31:06', 1),
(8, 'Art', 'Painting & Drawing', 'Painting & Drawing.PNG', '2021-08-14 12:34:57', 1),
(9, 'Art', 'Graphic Design', 'Graphic Design.PNG', '2021-08-14 12:35:41', 1),
(10, 'Art', 'Fashion & Beauty', 'Fashion & Beauty.PNG', '2021-08-14 12:36:12', 1),
(11, 'Fiction', 'Mystery & Crime', 'Mystery & Crime.PNG', '2021-08-14 12:36:44', 1),
(12, 'Fiction', 'Horror', 'Horror.PNG', '2021-08-14 12:37:11', 1),
(13, 'Fiction', 'peotry', 'peotry.PNG', '2021-08-14 12:37:53', 1),
(14, 'Fiction', 'Romance', 'Romance.PNG', '2021-08-14 12:38:06', 1),
(15, 'Fiction', 'Drama', 'Drama.PNG', '2021-08-14 12:38:20', 1),
(16, 'Technology', 'Software', 'Software.PNG', '2021-08-14 12:51:25', 1),
(17, 'Health & Fitness', 'Medical', 'Medical.PNG', '2021-08-14 17:24:29', 1),
(18, 'Health & Fitness', 'Fitness & Diet', 'Fitness & Diet.PNG', '2021-08-14 17:25:06', 1),
(19, 'Health & Fitness', 'Food & Nutrition', 'Food & Nutrition.PNG', '2021-08-14 17:25:31', 1),
(20, 'Personal Growth', 'Spirituality', 'Spirituality.PNG', '2021-08-14 17:26:32', 1),
(21, 'Personal Growth', 'Psychology', 'Psychology.PNG', '2021-08-14 17:26:54', 1),
(22, 'Personal Growth', 'Relationships', 'Relationships.PNG', '2021-08-14 17:27:22', 1),
(23, 'Personal Growth', 'Self-Improvement', 'Self-Improvement.PNG', '2021-08-14 17:27:47', 1),
(24, 'Technology', 'Internet', 'Internet.PNG', '2021-08-14 17:28:11', 1),
(25, 'Technology', 'Programming', 'Programming.PNG', '2021-08-14 17:28:31', 1),
(26, 'Technology', 'Tutorials', 'Tutorials.PNG', '2021-08-14 17:28:51', 1),
(27, 'Technology', 'Hardware', 'Hardware.PNG', '2021-08-14 17:29:12', 1),
(28, 'Science & Research', 'Physics', 'Physics.PNG', '2021-08-14 17:29:43', 1),
(29, 'Science & Research', 'Math', 'Math.PNG', '2021-08-14 17:30:04', 1),
(30, 'Science & Research', 'Chemistry', 'Chemistry.PNG', '2021-08-14 17:30:37', 1),
(31, 'Science & Research', 'Biology', 'Biology.PNG', '2021-08-14 17:30:51', 1),
(32, 'Science & Research', 'Astronomy & Space', 'Astronomy & Space.PNG', '2021-08-14 17:31:52', 1),
(33, 'Politics & Laws', 'Politics', 'Politics.PNG', '2021-08-14 17:34:23', 1),
(34, 'Politics & Laws', 'Law', 'Law.PNG', '2021-08-14 17:35:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_register`
--

CREATE TABLE `admin_register` (
  `a_reg_id` bigint(255) NOT NULL,
  `a_reg_name` varchar(40) NOT NULL,
  `a_reg_email` varchar(30) NOT NULL,
  `a_reg_password` varchar(30) NOT NULL,
  `a_reg_time` varchar(60) NOT NULL DEFAULT current_timestamp(),
  `a_reg_status` int(40) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_register`
--

INSERT INTO `admin_register` (`a_reg_id`, `a_reg_name`, `a_reg_email`, `a_reg_password`, `a_reg_time`, `a_reg_status`) VALUES
(1, 'user', 'user@gmail.com', '123456789', '2021-08-08', 1),
(4, 'user1', 'user1@gmail.com', '123456789', '2021-08-13 09:54:58', 1);

-- --------------------------------------------------------

--
-- Table structure for table `book_read_user`
--

CREATE TABLE `book_read_user` (
  `reader_id` bigint(60) NOT NULL,
  `reader_name` varchar(60) NOT NULL,
  `reader_book` varchar(60) NOT NULL,
  `reader_time` varchar(60) NOT NULL DEFAULT current_timestamp(),
  `reader_status` bigint(60) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_read_user`
--

INSERT INTO `book_read_user` (`reader_id`, `reader_name`, `reader_book`, `reader_time`, `reader_status`) VALUES
(1, 'savita', 'Psychology - A Self-Teaching Guide', '2021-09-26 16:15:18', 1),
(3, 'savita', 'Web Design with HTML and CSS', '2021-09-26 16:32:25', 1),
(4, 'savita', 'Android Programming Tutorials', '2021-09-26 16:33:07', 1),
(5, 'savita', 'Creative Photography Ideas', '2021-09-26 16:43:39', 1),
(6, 'savita', 'Living in the Light', '2021-09-26 16:55:06', 1),
(7, 'kishan', 'The Quantum Structure of Space and Time', '2021-09-26 17:30:40', 1),
(8, 'kishan', 'Nikola Tesla', '2021-09-26 17:39:47', 1),
(9, 'kishan', 'Steve Jobs', '2021-09-26 17:47:39', 1),
(10, 'User', 'A History of India, Third Edition', '2021-09-26 18:30:45', 1),
(11, 'user1', 'Prodigal Genius: Biography of Nikola Tesla', '2021-09-26 19:08:15', 1),
(12, 'user1', 'Prodigal Genius: Biography of Nikola Tesla', '2021-09-26 19:08:38', 1),
(13, 'user1', 'Nikola Tesla', '2021-09-26 19:18:56', 1),
(14, 'user1', 'Fundamental Nursing Skills', '2021-09-26 19:19:26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `home_biography`
--

CREATE TABLE `home_biography` (
  `bio_id` bigint(60) NOT NULL,
  `bio_name` varchar(60) NOT NULL,
  `bio_author` varchar(60) NOT NULL,
  `bio_img` varchar(60) NOT NULL,
  `bio_pdf` varchar(60) NOT NULL,
  `bio_desc` varchar(60) NOT NULL,
  `bio_time` varchar(60) NOT NULL DEFAULT current_timestamp(),
  `bio_status` int(60) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_biography`
--

INSERT INTO `home_biography` (`bio_id`, `bio_name`, `bio_author`, `bio_img`, `bio_pdf`, `bio_desc`, `bio_time`, `bio_status`) VALUES
(1, 'Swami Vivekananda', 'By Swami  Nikhilananda ', 'Swami Vivekananda.jpg', 'Swami Vivekananda.pdf', '- A Biography by Swami Nikhilananda', '2021-08-23 10:47:03', 1),
(2, 'Napoleon', 'By rank Melynn', 'Napoleon.jpg', 'Napoleon.pdf', ': A Biography', '2021-08-23 10:49:06', 1),
(4, 'Gandhi', 'By Mahadev Desai', 'Gandhi.jpg', 'Gandhi.pdf', ': Gandhi Autobiography', '2021-08-23 11:00:02', 1),
(5, 'Mother Teresa', 'By Meg Greene', 'Mother Teresa.jpg', 'Mother Teresa.pdf', '- A Biography', '2021-08-23 11:01:52', 1),
(6, 'Steve Jobs', 'By Walter Isaacson', 'Steve Jobs.jpg', 'Steve Jobs.pdf', '- A Biography', '2021-08-23 11:04:52', 1),
(7, 'Martin Luther King', 'By U.S.Embassy Nigeria', 'Martin Luther King.jpg', 'Martin Luther King.pdf', 'Biography of Martin Luther King, Jr.', '2021-08-23 11:07:22', 1),
(9, 'Barack H. Obama', 'By Webster Griffin Tarpley', 'Barack H. Obama.jpg', 'Barack H. Obama.pdf', ': the unauthorized biography\r\n', '2021-08-23 11:14:55', 1),
(10, 'APJ Abdul Kalam', 'By Arun Tiwari', 'APJ Abdul Kalam.jpg', 'APJ Abdul Kalam.pdf', 'Wings of Fire: An Autobiography', '2021-08-23 11:17:12', 1),
(12, 'Albert Einstein', 'by Wil Mara', 'Albert Einstein.jpg', 'Albert Einstein.pdf', '- A Biography', '2021-09-26 19:03:58', 1),
(13, 'Nikola Tesla', 'by John J.', 'Nikola Tesla.jpg', 'Nikola Tesla.pdf', '-A Biography of Nikola Tesla', '2021-09-26 19:18:06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `reg_id` bigint(255) NOT NULL,
  `reg_name` varchar(30) NOT NULL,
  `reg_email` varchar(30) NOT NULL,
  `reg_password` varchar(30) NOT NULL,
  `reg_time` varchar(50) NOT NULL DEFAULT current_timestamp(),
  `reg_status` bigint(255) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`reg_id`, `reg_name`, `reg_email`, `reg_password`, `reg_time`, `reg_status`) VALUES
(21, 'User', 'user@gmail.com', '123456789', '2021-08-07 19:48:28', 1),
(22, 'user1', 'user1@gmail.com', '123456789', '2021-08-07 19:59:06', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_book`
--
ALTER TABLE `add_book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `add_category`
--
ALTER TABLE `add_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `add_sub_category`
--
ALTER TABLE `add_sub_category`
  ADD PRIMARY KEY (`sub_cat_id`);

--
-- Indexes for table `admin_register`
--
ALTER TABLE `admin_register`
  ADD PRIMARY KEY (`a_reg_id`);

--
-- Indexes for table `book_read_user`
--
ALTER TABLE `book_read_user`
  ADD PRIMARY KEY (`reader_id`);

--
-- Indexes for table `home_biography`
--
ALTER TABLE `home_biography`
  ADD PRIMARY KEY (`bio_id`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_book`
--
ALTER TABLE `add_book`
  MODIFY `book_id` bigint(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `add_category`
--
ALTER TABLE `add_category`
  MODIFY `cat_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `add_sub_category`
--
ALTER TABLE `add_sub_category`
  MODIFY `sub_cat_id` bigint(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `admin_register`
--
ALTER TABLE `admin_register`
  MODIFY `a_reg_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `book_read_user`
--
ALTER TABLE `book_read_user`
  MODIFY `reader_id` bigint(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `home_biography`
--
ALTER TABLE `home_biography`
  MODIFY `bio_id` bigint(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `reg_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
