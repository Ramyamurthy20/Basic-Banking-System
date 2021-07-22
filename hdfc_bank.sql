-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2021 at 06:29 AM
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
-- Database: `hdfc_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(30) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `CurrentBalance` int(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `CurrentBalance`) VALUES
(1, 'Ramya', 'ramya@gmail.com', 1211),
(2, 'Kiran', 'Kiran125120@gmail.com', 3000),
(3, 'VINIT', 'Vinit14444@gmail.com', 32000),
(4, 'Ranju', 'Ranju23233@gmail.com', 54045),
(5, 'Goru', 'Goru23334@gmail.com', 97100),
(6, 'Himani', 'Himani23232@gmail.com', 47401),
(7, 'Naveen', 'Naveen2343@gmail.com', 80188),
(8, 'AMAN', 'Aman34534@gmail.com', 405000),
(9, 'ACHA', 'ACha125120@gmail.com', 80000),
(10, 'Lucky', 'Luckymehta14555@gmail.com', 450000);

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `transfer_date` text NOT NULL,
  `from_acc` varchar(255) NOT NULL,
  `from_acc_name` varchar(255) NOT NULL,
  `to_acc` varchar(255) NOT NULL,
  `transfer_amt` int(11) NOT NULL,
  `transfer_msg` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`transfer_date`, `from_acc`, `from_acc_name`, `to_acc`, `transfer_amt`, `transfer_msg`) VALUES
('05-12-2020 12:13:36 pm', '2', 'Kush', '4', 800, 'hlo'),
('05-12-2020 12:14:07 pm', '2', 'Kush', '1', 100, 'hlo'),
('05-12-2020 13:53:31 pm', '4', 'Ranju', '5', 4000, 'gateway'),
('05-12-2020 14:59:39 pm', '2', 'Kush', '1', 1000, 'cash'),
('21-07-2021 20:57:19 pm', '2', 'Kiran', '1', 100, 'enjoy'),
('21-07-2021 21:08:40 pm', '1', 'Ramya', '4', 100, 'enjoy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
