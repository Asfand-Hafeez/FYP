-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2018 at 01:52 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`) VALUES
(7, 'Xiaomi'),
(10, 'Sony'),
(11, 'LG'),
(12, 'Samsung'),
(13, 'Huawei'),
(14, 'Nokia'),
(16, 'QMobile'),
(17, 'HTC'),
(19, 'Apple iPhone'),
(23, 'Oppo'),
(30, 'Motorola'),
(31, 'One Plus');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'sasa', 'adas', 'aas');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `status` varchar(255) NOT NULL,
  `posted_date` varchar(255) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `mobile` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `views` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `status`, `posted_date`, `img1`, `img2`, `title`, `price`, `mobile`, `city`, `detail`, `user_id`, `category`, `views`) VALUES
(4, 'Pending', '', 'images.jpg', 'images.jpg', 'Samsung1', 12, '12212', 'Faisalabad', 'want to sale', 1, '12', 1012),
(5, 'Active', '', 'download.jpg', 'download.jpg', 'Iphone X', 123, '1313113', 'Lahore', 'sale', 2, '19', 798),
(6, 'Pending', '', '25.jpg', '25.jpg', 'One Plus 3 new', 25000, '1221212', 'Faisalabad', 'hello', 1, '35', 78),
(7, 'Pending', '', '1.jpg', '3.jpg', 'Samsung J7 Max', 24000, '321457511', 'Lahore', 'Condition 10/10\r\nOriginal Accesories', 1, '12', 94),
(8, 'Pending', '', '7.jpg', '6.jpg', 'Samsung J8 Max', 27000, '212121212', 'Faisalabad', 'Excelent', 1, '12', 680),
(9, 'Pending', '', '`24.jpg', '25.jpg', 'One plus 3', 35000, '321457511', 'Faisalabad', '100% Oky No Fault', 3, '35', 81),
(10, 'Pending', '', '10.jpg', '11.jpeg', 'Samsung J7 Pro', 23000, '321457511', 'Faisalabad', 'no fault', 3, '12', 32),
(11, 'Pending', '', '23.jpg', '23.jpg', 'One Plus 6', 550000, '032154523', 'Faisalabad', 'hello', 3, '31', 2),
(13, 'Active', '', '23.jpg', '23.jpg', 'Xiaomi', 25000, '03214567890', 'Faisalabad', 'Excellent condition', 2, '7', 12),
(14, 'Active', '10-Jul-2018 03:30:00pm', '11.jpeg', '10.jpg', 'Samsung J7 Pro', 28000, '0321457612', 'Faisalabad', 'Condition 10/10', 2, '12', 15),
(15, 'Pending', '11-Jul-2018 02:01:03pm', '16.jpg', '15.jpg', 'Oppo A57', 20000, '032154674', 'Faisalabad', 'condition 10/10', 3, '23', 1),
(16, 'Pending', '11-Jul-2018 03:10:33pm', '25.jpg', '25.jpg', 'One Plus 3', 25000, '03213456781', 'Faisalabad', 'helo', 1, '31', 0),
(17, 'Pending', '', '`24.jpg', '`24.jpg', 'Huawei ', 122111, '12121', 'Pindi', 'Shoaib Don', 1, '13', 0),
(18, 'active', '11-Jul-2018 03:31:03pm', '21.jpg', '21.jpg', 'Note 4', 20000, '032145321', 'Faisalabad', 'Excellent', 5, '7', 0),
(19, 'active', '', '2.jpg', '2.jpg', 'J7 max', 222222, '1212121', 'Faisalabad', '10/10hu9g9 6yhuji09u8jimko,lp', 5, '12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `status` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `img`, `email`, `pass`, `gender`, `mobile`, `city`, `address`, `role`, `status`) VALUES
(1, 'mujahid', 'muj.jpg', 'mujahid@gmail.com', '123', '', '03148617631', 'Faisalabad', 'Faisalabad', 'user', 0),
(2, 'asfand hafeez', '30264893_419806091795655_6779506110743746193_n.jpg', 'asfand@gmail.com', '123', 'male', '121212', 'fsd', 'aadasa', 'admin', 0),
(3, 'Jalil Khan', 'jal.jpg', 'jalil@gmail.com', '123', 'male', '15761234', 'Jhang', 'Jhang', 'user', 0),
(4, 'umer', '1.jpg', 'umer@gmail.com', '123', 'male', '032145742', 'Faisalabad', 'shop2', 'user', 0),
(5, 'Majid', '1.jpg', 'majid@gmail.com', '123', 'male', '0321122121', 'Faisalabad', 'SHop no 2 ', 'user', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
