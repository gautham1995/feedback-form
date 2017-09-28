-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 28, 2017 at 08:07 PM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `response`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `rating` varchar(20) NOT NULL,
  `title` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `city` varchar(25) NOT NULL,
  `date` int(2) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` int(4) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `rating`, `title`, `name`, `mail`, `city`, `date`, `month`, `year`, `comment`) VALUES
(1, 'Good', 'sdgsdg', 'dv', 'sdf@gsm.cm', 'sgd', 11, 'Apr', 2017, 'afsgrdfgjh'),
(2, 'Good', 'sdgsdg', 'dv', 'sdf@gsm.cm', 'sgd', 11, 'Apr', 2017, 'afsgrdfgjh'),
(3, 'Poor', 'dshfdgjdfsdh', 'afsgfdf', 'fdfgsffgh@gdfg.vml', 'afsgs', 11, 'Apr', 2017, 'asdsdfsadfasdf'),
(4, 'Fair', 'vp', 'rgas', 'hsrth@dhfdgh.cm', 'erga', 11, 'Apr', 2017, 'koohusadihfasdf'),
(5, 'Excellent', 'fgksld', 'rgdhg', 'sgdsh@gsrg.vsm', 'sdgdsfh', 11, 'Apr', 2017, 'klfmglkdfthdghj'),
(6, 'Average', 'srrhdrth', 'dfhdgj', 'sfghdf@hfgh.bmq', 'hdfglkh', 11, 'Apr', 2017, 'ksdfhnkfg'),
(7, 'Excellent', 'qwerty', 'sibhi', 'sibhi@gm.cm', 'chennai', 19, 'Apr', 2017, 'qwertyasdfgzxcvb'),
(8, 'Good', 'Hellp', 'Gautham', 'gautham@aj.com', 'Chennai', 19, 'Apr', 2017, 'My comments\r\n'),
(9, 'Excellent', 'product was good', 'gautham', 'gautham@gmail.com', 'Chennai', 28, 'Sep', 2017, 'standard delivery and quality was good. I am satisfied with their service');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
