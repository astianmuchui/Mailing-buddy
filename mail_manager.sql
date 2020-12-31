-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2020 at 11:47 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mail_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `my_emails`
--

CREATE TABLE `my_emails` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `my_emails`
--

INSERT INTO `my_emails` (`id`, `username`, `adress`, `time`) VALUES
(1, 'Seb Astian', 'astianseb730@gmail.com', '0000-00-00 00:00:00.000000'),
(2, 'Sebastian muchui', 'Sebastianmuchui79@gmail.com', '2020-12-31 09:35:48.917283'),
(4, 'Edwin', 'emwiti658@gmail.com', '2020-12-31 09:37:44.787206'),
(6, 'Felix mutethia', 'felixmutethia@gmail.com', '2020-12-31 09:49:51.561172'),
(11, 'shelmithmakeup', 'shelmithmakeup@gmail.com', '2020-12-31 10:20:46.399285');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `my_emails`
--
ALTER TABLE `my_emails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `my_emails`
--
ALTER TABLE `my_emails`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
