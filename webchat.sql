-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2021 at 06:35 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webchat`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `ID` int(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phoneno` varchar(100) NOT NULL,
  `Country` text NOT NULL,
  `Gender` text NOT NULL,
  `Profile` varchar(255) NOT NULL,
  `Status` varchar(7) NOT NULL,
  `Wallpaper` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`ID`, `Username`, `Password`, `Email`, `Phoneno`, `Country`, `Gender`, `Profile`, `Status`, `Wallpaper`) VALUES
(3, 'gana', '123', 'gana@gmail.com', '12354564646', 'i', 'Male', 'images/WhatsApp Image 2020-11-03 at 1.01.11 PM.jpeg', 'Offline', 'f2f2f2'),
(5, 'girl', '123', 'girl@123gamil.com', '2342343431', 'India', 'Female', 'images/women.jpg', 'Offline', 'f2f2f2'),
(6, 'kamesh', '123', 'k@gmail.com', '4565465634', 'India', 'Male', 'images/yoyo.jpg', 'Offline', 'f2f2f2'),
(7, 'gokulesh', '123', 'g@gmail.com', '4553636534', 'India', 'Male', 'images/happy.jpg', 'Offline', 'f2f2f2'),
(8, 'yoyo', '123', 'y@gmail.com', '34235353252', 'India', 'Female', 'images/yoyo.jpg', 'Offline', 'f2f2f2'),
(9, 'sweatha', '123', 's@gmail.com', '342542352', 'India', 'Female', 'images/sweatha.jpg', 'Offline', 'f2f2f2'),
(10, 'aashvina', '123', 'Aash@gmail.com', '7656789890', 'India', 'Female', 'images/women.jpg', 'Offline', 'f2f2f2'),
(11, 'Nancy', '123', 'nancy@123.com', '7667878998', 'India', 'Female', 'images/new.jpg', 'Offline', 'f2f2f2'),
(12, 'nishanth', '123', 'nish@123gmail.com', '8767987789', 'Africa', 'Male', 'images/men.jpg', '', 'f2f2f2'),
(13, 'jeeva', '321', 'jeeva@gmail.com', '6536562565', 'india', 'Male', 'images/men.jpg', 'Offline', 'f2f2f2'),
(14, 'rajesh', '321', 'rajesh@gmail.com', '7656789809', 'india', 'Male', 'images/men.jpg', 'Online', 'f2f2f2'),
(15, 'siva', '123', 'siva@gmail.com', '76756768787', 'india', 'Female', 'images/women.jpg', '', 'f2f2f2'),
(16, 'ganesh', '123', 'ganesh@gmail.com', '586758755', 'INDIA', 'Female', 'images/women.jpg', 'Offline', 'f2f2f2');

-- --------------------------------------------------------

--
-- Table structure for table `users_chat`
--

CREATE TABLE `users_chat` (
  `Msg_id` int(11) NOT NULL,
  `Sender_username` varchar(100) NOT NULL,
  `Receiver_username` varchar(100) NOT NULL,
  `Msg_content` varchar(300) NOT NULL,
  `Msg_status` text NOT NULL,
  `Msg_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_chat`
--

INSERT INTO `users_chat` (`Msg_id`, `Sender_username`, `Receiver_username`, `Msg_content`, `Msg_status`, `Msg_date`) VALUES
(14, 'gana', 'gana', 'hi', 'read', '2020-10-08 20:43:54'),
(51, 'yoyo', 'gokulesh', 'hi\r\n', 'read', '2020-10-27 15:20:40'),
(56, 'gana', 'gana', 'hi', 'read', '2020-10-30 17:57:22'),
(62, 'gana', 'gokulesh', 'hi', 'unread', '2020-10-31 10:38:40'),
(66, 'gana', 'gokulesh', 'hi', 'unread', '2020-10-31 11:07:37'),
(69, 'gana', 'girl', 'hi', 'unread', '2020-10-31 14:03:06'),
(70, 'gana', 'girl', 'hi', 'unread', '2020-10-31 15:13:23'),
(92, 'Nancy', 'kamesh', 'hi kamesh', 'read', '2020-11-02 18:42:06'),
(95, 'kamesh', 'Nancy', 'hi maam', 'unread', '2020-11-03 07:19:48'),
(102, 'gana', 'gokulesh', 'bhdasdasdbaskdjjjjjjjjjjjasdddddddddddddddddddddd', 'unread', '2020-11-11 08:35:16'),
(103, 'gana', 'kamesh', 'please carry on da lnsnks  djsndlksasd sj sd sjiisdkmk sd', 'read', '2020-11-11 08:36:18'),
(104, 'gana', 'kamesh', 'please carry on da i cant participate with you ', 'read', '2020-11-11 08:37:11'),
(108, 'gana', 'kamesh', 'ðŸ˜ŒðŸ˜ŒðŸ˜ŒðŸ˜‡ðŸ˜‡ðŸ˜‡ðŸ˜‡', 'read', '2020-11-11 09:53:03'),
(109, 'gana', 'kamesh', 'hi', 'read', '2020-11-21 14:32:14'),
(110, 'jeeva', 'gana', 'hi', 'read', '2021-01-14 14:05:51'),
(111, 'jeeva', 'gana', 'dei', 'read', '2021-01-14 14:12:10'),
(112, 'gana', 'jeeva', 'okok', 'read', '2021-01-14 14:12:34'),
(113, 'ganesh', 'gana', 'hi', 'read', '2021-03-25 13:40:22'),
(114, 'gana', 'kamesh', 'hi', 'read', '2021-03-28 05:36:28'),
(115, 'gana', 'kamesh', 'hi ', 'read', '2021-04-02 04:45:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users_chat`
--
ALTER TABLE `users_chat`
  ADD PRIMARY KEY (`Msg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users_chat`
--
ALTER TABLE `users_chat`
  MODIFY `Msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
