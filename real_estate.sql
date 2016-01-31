-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2015 at 08:00 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE IF NOT EXISTS `contact_info` (
`id` int(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`id`, `username`, `email`, `telephone`, `subject`, `details`) VALUES
(1, 'rpranav_89', 'rpranav_89@yahoo.com', '123456', 'bill', 'welcome/save_contact_info'),
(2, 'rpranav_89', 'rpranav_89@yahoo.com', '123456', 'bill', 'welcome/save_contact_info'),
(3, 'rpranav_89', 'rpranav_89@yahoo.com', '21312', 'qs', 'success_msg'),
(4, 'pranav', 'pranav.rana@pixml.in', '123456790', '', 'testing'),
(5, 'admin', 'pranav.rana@pixml.in', '23121456465', '', 'testing...');

-- --------------------------------------------------------

--
-- Table structure for table `customer_register`
--

CREATE TABLE IF NOT EXISTS `customer_register` (
`id` int(255) NOT NULL,
  `agent_owner` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `customer_register`
--

INSERT INTO `customer_register` (`id`, `agent_owner`, `fullname`, `email`, `username`, `password`, `address`, `city`, `postal_code`, `province`, `country`, `contact_no`, `description`, `image`) VALUES
(1, 'agent', 'Prath Desaii', 'prath.desai@abc.inn', 'admin', 'admin123', '', 'cityy', '3950077', 'province', 'country', '0124563', 'Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.', 'xTqyZHKq.jpg'),
(2, 'agent', 'Ekta Patel', 'ekta.patel@abc.in', 'pranav', 'pranav', 'india', 'surat', '395007', 'province', 'india', '12346578', 'Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.', 'mMJgbVoj.jpg'),
(3, 'agent', 'John Smith', 'abc@realestete.com', 'john', 'smith', '', '', '395007', 'surat', 'india', '(9009) 899 889', 'Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.', 'k5Cj7p8l.jpg'),
(4, 'agent', 'John Smith', 'abc@realestete.com', 'john', 'smith', '', '', '395007', 'surat', 'india', '(9009) 899 889', 'Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.', 'LZ2H7KMj.jpg'),
(5, 'agent', 'prana', 'rana@gmail.com', 'pranavrana', '123456', 'surat', 'surat', '395007', 'gujarat', 'india', '963852147', 'description', '5K7n18jM.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `favourite`
--

CREATE TABLE IF NOT EXISTS `favourite` (
`id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `property_id` int(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `favourite`
--

INSERT INTO `favourite` (`id`, `user_id`, `property_id`) VALUES
(1, 1, 1),
(3, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
`id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(2, 'pranav@pixml.in'),
(3, 'pranav@pixml.in');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE IF NOT EXISTS `property` (
`id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `bedroom` varchar(255) NOT NULL,
  `living_room` varchar(255) NOT NULL,
  `parking` varchar(255) NOT NULL,
  `kitchen` varchar(255) NOT NULL,
  `logitude` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `image_1` varchar(255) NOT NULL,
  `image_2` varchar(255) NOT NULL,
  `image_3` varchar(255) NOT NULL,
  `image_4` varchar(255) NOT NULL,
  `customer_id` int(255) NOT NULL,
  `property_type` varchar(255) NOT NULL,
  `near_by` varchar(255) NOT NULL,
  `near_by_name` varchar(255) NOT NULL,
  `offer_details` text NOT NULL,
  `added_date` date NOT NULL,
  `rent_terms` varchar(255) NOT NULL,
  `monthly_rent_min` varchar(255) NOT NULL,
  `monthly_rent_max` varchar(255) NOT NULL,
  `furnished` varchar(255) NOT NULL,
  `luxury_unit` varchar(255) NOT NULL,
  `available_as_of` date NOT NULL,
  `sublease` varchar(255) NOT NULL,
  `kitchen_app` text NOT NULL,
  `laundry_app` text NOT NULL,
  `is_sold` varchar(255) NOT NULL DEFAULT 'no',
  `sold_date` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `title`, `description`, `price`, `address`, `bedroom`, `living_room`, `parking`, `kitchen`, `logitude`, `latitude`, `image_1`, `image_2`, `image_3`, `image_4`, `customer_id`, `property_type`, `near_by`, `near_by_name`, `offer_details`, `added_date`, `rent_terms`, `monthly_rent_min`, `monthly_rent_max`, `furnished`, `luxury_unit`, `available_as_of`, `sublease`, `kitchen_app`, `laundry_app`, `is_sold`, `sold_date`) VALUES
(1, 'Royal innn', 'Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.\n\nCompletely synergize resource sucking relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service', '180000', '344 Villa, Syndeyy, Australiaa', '6', '3', '3', '2', '151.211442', '-33.863578', 'LSAkvOjA.jpg', 'rUjtD4SU.jpg', 'C9hdVUy8.jpg', '5i7vTZRU.jpg', 1, 'Apartment', 'School', 'shardayatan', 'Efficiently unleash cross-media information without cross-media value. Quickly maximize timely', '2015-04-05', 'yearly', '1200', '1500', 'no', 'no', '0000-00-00', 'no', 'fridge,dishwasher,microwave', 'washer,dryer,in_premises', 'no', '0000-00-00'),
(2, 'Royal Inn', 'Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.\n\nCompletely synergize resource sucking relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service', '210000', '344 Villa, Syndey, Australia', '5', '2', '2', '1', '151.211442', '-33.863578', 'pFpoiSbM.jpg', 'ERd6yuFT.jpg', '35HT2e7Z.jpg', 'zsWjZSuP.jpg', 1, 'Building', 'Shoping Center', 'rahulraj', '', '2015-04-05', '', '', '', '', '', '0000-00-00', '', '', '', 'no', '0000-00-00'),
(3, 'Royal Inn', 'Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.\n\nCompletely synergize resource sucking relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service', '140000', '344 Villa, Syndey, Australia', '5', '2', '2', '1', '151.211442', '-33.863578', 'pFpoiSbM.jpg', 'ERd6yuFT.jpg', '35HT2e7Z.jpg', 'zsWjZSuP.jpg', 1, 'Office Space', 'Hospital', 'saurbh hospital', '', '2015-04-06', '', '', '', '', '', '0000-00-00', '', '', '', 'no', '0000-00-00'),
(4, 'Royal Inn', 'Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.\n\nCompletely synergize resource sucking relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service', '260000', '344 Villa, Syndey, Australia', '5', '2', '2', '1', '151.211442', '-33.863578', '35HT2e7Z.jpg', 'ERd6yuFT.jpg', 'pFpoiSbM.jpg', 'zsWjZSuP.jpg', 1, 'Property', 'Metro', 'surat', '', '2015-04-05', '', '', '', '', '', '0000-00-00', '', '', '', 'no', '0000-00-00'),
(5, 'Royal Inn', 'Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.\r\n\r\nCompletely synergize resource sucking relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service', '280000', '344 Villa, Syndey, Australia', '5', '2', '2', '1', '151.211442', '-33.863578', 'pFpoiSbM.jpg', 'ERd6yuFT.jpg', '35HT2e7Z.jpg', 'zsWjZSuP.jpg', 3, '', '', '', '', '2015-04-05', '', '', '', '', '', '0000-00-00', '', '', '', 'no', '0000-00-00'),
(6, 'Royal Inn', 'Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.\r\n\r\nCompletely synergize resource sucking relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service', '310000', '344 Villa, Syndey, Australia', '5', '2', '2', '1', '151.211442', '-33.863578', 'pFpoiSbM.jpg', 'ERd6yuFT.jpg', '35HT2e7Z.jpg', 'zsWjZSuP.jpg', 2, '', '', '', '', '2015-04-06', '', '', '', '', '', '0000-00-00', '', '', '', 'no', '0000-00-00'),
(7, 'Royal Inn', 'Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.\r\n\r\nCompletely synergize resource sucking relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service', '340000', '344 Villa, Syndey, Australia', '5', '2', '2', '1', '151.211442', '-33.863578', 'pFpoiSbM.jpg', 'ERd6yuFT.jpg', '35HT2e7Z.jpg', 'zsWjZSuP.jpg', 2, '', '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '', 'no', '0000-00-00'),
(8, 'Royal Inn', 'Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.\r\n\r\nCompletely synergize resource sucking relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service', '380000', '344 Villa, Syndey, Australia', '5', '2', '2', '1', '151.211442', '-33.863578', 'pFpoiSbM.jpg', 'ERd6yuFT.jpg', '35HT2e7Z.jpg', 'zsWjZSuP.jpg', 2, '', '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '', 'no', '0000-00-00'),
(9, 'Royal Inn', 'Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.\r\n\r\nCompletely synergize resource sucking relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service', '430000', '344 Villa, Syndey, Australia', '5', '2', '2', '1', '151.211442', '-33.863578', 'pFpoiSbM.jpg', 'ERd6yuFT.jpg', '35HT2e7Z.jpg', 'zsWjZSuP.jpg', 2, '', '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '', 'no', '0000-00-00'),
(10, 'Royal Inn', 'Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.\r\n\r\nCompletely synergize resource sucking relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service', '450000', '344 Villa, Syndey, Australia', '5', '2', '2', '1', '151.211442', '-33.863578', 'pFpoiSbM.jpg', 'ERd6yuFT.jpg', '35HT2e7Z.jpg', 'zsWjZSuP.jpg', 3, '', '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '', 'no', '0000-00-00'),
(11, 'Royal Inn', 'Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.\r\n\r\nCompletely synergize resource sucking relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service', '520000', '344 Villa, Syndey, Australia', '5', '2', '2', '1', '151.211442', '-33.863578', 'pFpoiSbM.jpg', 'ERd6yuFT.jpg', '35HT2e7Z.jpg', 'zsWjZSuP.jpg', 3, '', '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '', 'no', '0000-00-00'),
(12, 'Royal Inn', 'Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.\r\n\r\nCompletely synergize resource sucking relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service', '500000', '344 Villa, Syndey, Australia', '5', '2', '2', '1', '151.211442', '-33.863578', 'pFpoiSbM.jpg', 'ERd6yuFT.jpg', '35HT2e7Z.jpg', 'zsWjZSuP.jpg', 3, '', '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '', 'no', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE IF NOT EXISTS `region` (
`id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`id`, `name`) VALUES
(1, 'Cote-des-Neiges'),
(2, 'Mount-Royal'),
(3, 'Sherbrooke'),
(4, 'Ahuntsic'),
(5, 'Rosemont'),
(6, 'St-Laurent'),
(7, 'Sainte-Adele'),
(8, 'Nuns Island'),
(9, 'Old Montreal'),
(10, 'Verdun'),
(11, 'Dorval'),
(12, 'outremont '),
(13, 'Montreal East'),
(14, 'Ile-Bizard '),
(15, 'Anjou'),
(16, 'Kirkland'),
(17, 'Montreal west'),
(18, 'beaconsfield'),
(19, 'Montreal-North');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_register`
--
ALTER TABLE `customer_register`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favourite`
--
ALTER TABLE `favourite`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `customer_register`
--
ALTER TABLE `customer_register`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `favourite`
--
ALTER TABLE `favourite`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
