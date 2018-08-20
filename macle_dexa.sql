-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 16, 2018 at 11:30 AM
-- Server version: 5.6.39
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `macle_dexa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(260) NOT NULL,
  `phone` bigint(13) NOT NULL,
  `role` int(11) NOT NULL COMMENT '1-superadmin,2-admin',
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `phone`, `role`, `status`) VALUES
(11, 'admin', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 9876543210, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `aj`
--

CREATE TABLE `aj` (
  `id` int(11) NOT NULL,
  `n` int(155) NOT NULL,
  `gst` varchar(155) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aj`
--

INSERT INTO `aj` (`id`, `n`, `gst`, `email`) VALUES
(335, 14, '21', 'maclestudio4@gmail.com'),
(336, 15, '31', 'maclestudio4@gmail.com'),
(337, 17, '11', 'maclestudio4@gmail.com'),
(338, 73, '1010', 'maclestudio4@gmail.com'),
(339, 14, '9164942431', 'maclestudio5@gmail.com'),
(340, 16, '9164942431', 'maclestudio5@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ajj`
--

CREATE TABLE `ajj` (
  `id` int(11) NOT NULL,
  `na` varchar(155) NOT NULL,
  `n` int(155) NOT NULL,
  `gst` int(155) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ajj`
--

INSERT INTO `ajj` (`id`, `na`, `n`, `gst`, `email`) VALUES
(1, '8', 123, 123, 'a@gmail.com'),
(2, '9', 1890, 1564, 'a@gmail.com'),
(3, '0', 1, 2, '3'),
(4, 'C/C++,Java,PHP,HTML/CSS', 1, 2, '3'),
(5, 'C/C++,Java,PHP', 1, 2, '3'),
(6, '14,15,16,17', 1, 2, '3'),
(7, '14,15,16', 1, 2, '3'),
(8, '14,15,16', 1, 2, '3'),
(9, '14,15', 1, 2, '3'),
(10, '14,17', 1, 2, '3'),
(11, '14,16,17', 1, 2, '3'),
(12, '13', 0, 0, ''),
(13, '14', 0, 0, ''),
(14, '15', 0, 0, ''),
(15, '16', 0, 0, ''),
(16, '17', 0, 0, ''),
(17, '18', 0, 0, ''),
(18, '19', 0, 0, ''),
(19, '20', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `apply_form`
--

CREATE TABLE `apply_form` (
  `id` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `name` varchar(250) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `email` varchar(250) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `education` text NOT NULL,
  `role` text NOT NULL,
  `domain` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply_form`
--

INSERT INTO `apply_form` (`id`, `date_created`, `name`, `gender`, `dob`, `email`, `nationality`, `number`, `education`, `role`, `domain`) VALUES
(6, '2017-03-25 15:45:09', '1', 'male', '03/01/2017', '1@gmail.com', '1', 1, '1111', '111122', '2223');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(15) NOT NULL,
  `date_created` datetime NOT NULL,
  `area` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `date_created`, `area`) VALUES
(3, '2018-08-01 14:52:01', 'vijayanagar'),
(4, '2018-08-01 14:52:12', 'shishadripuram'),
(5, '2018-08-01 14:52:20', 'majestic');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `pkg_cat_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `blog_title` varchar(225) NOT NULL,
  `blog_desc` text NOT NULL,
  `blog_image` varchar(225) NOT NULL,
  `blog_image_details` varchar(250) NOT NULL,
  `deleted` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `pkg_cat_id`, `date_created`, `date_updated`, `blog_title`, `blog_desc`, `blog_image`, `blog_image_details`, `deleted`) VALUES
(20, 8, '2018-07-05 07:24:28', '2018-08-14 19:42:14', 'Kid\'s Room', 'A Stylish and Sophisticated Kidâ€™s Room Youâ€™ll Want to Live In', '1533980871dexa.jpg', '1533980871dexa.jpg', 0),
(21, 0, '2018-08-11 11:02:09', '2018-08-16 10:57:04', 'Home Tour: Bohemian Living Room.', 'Even after half a year in my new apartment, I am not through with my promised home tour here on the blog. Letâ€™s say life was in my way, ha! No seriously, I am way behind but I am working on it.', '1533980847db.jpg', '1533980858db.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_form`
--

CREATE TABLE `enquiry_form` (
  `id` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry_form`
--

INSERT INTO `enquiry_form` (`id`, `date_created`, `name`, `email`, `phone`, `message`) VALUES
(7, '2018-08-06 14:42:22', 'anil', 'maclestudio4@gmail.com', '9164942431', 'as asdas ds fg gdh khgk jl'),
(8, '2018-08-09 10:58:34', 'anil', 'maclestudio4@gmail.com', '9164942431', 'hi this is for testing');

-- --------------------------------------------------------

--
-- Table structure for table `facts`
--

CREATE TABLE `facts` (
  `id` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `facts_title` varchar(225) NOT NULL,
  `facts_desc` text NOT NULL,
  `facts_image` varchar(225) NOT NULL,
  `deleted` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facts`
--

INSERT INTO `facts` (`id`, `date_created`, `date_updated`, `facts_title`, `facts_desc`, `facts_image`, `deleted`) VALUES
(1, '2018-07-19 05:51:57', '0000-00-00 00:00:00', 'test', 'testing', '1531959717Penguins.jpg', 0),
(2, '2018-07-19 06:09:45', '0000-00-00 00:00:00', 'test2', 'testing2', '1531960785Lighthouse.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `folders`
--

CREATE TABLE `folders` (
  `id` int(12) NOT NULL,
  `date_created` datetime NOT NULL,
  `product_id` int(250) NOT NULL,
  `quantity` int(250) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `folders`
--

INSERT INTO `folders` (`id`, `date_created`, `product_id`, `quantity`, `email`) VALUES
(1, '2018-08-06 18:09:26', 14, 170, 'maclestudio5@gmail.com'),
(2, '2018-08-06 18:09:26', 17, 140, 'maclestudio5@gmail.com'),
(3, '2018-08-06 18:36:20', 15, 111, 'maclestudio4@gmail.com'),
(4, '2018-08-06 18:36:20', 16, 222, 'arjise01@gmail.com'),
(5, '2018-08-08 20:39:22', 14, 21, 'arjise01@gmail.com'),
(6, '2018-08-08 20:39:22', 15, 41, 'arjise01@gmail.com'),
(7, '2018-08-08 20:39:22', 17, 31, 'arjise01@gmail.com'),
(8, '2018-08-08 10:55:09', 14, 100, 'arjise01@gmail.com'),
(9, '2018-08-08 10:55:09', 15, 100, 'arjise01@gmail.com'),
(10, '2018-08-08 15:02:28', 14, 1401, 'arjise01@gmail.com'),
(11, '2018-08-08 15:02:28', 16, 1502, 'arjise01@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `country` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `products_number` int(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `date_created`, `name`, `email`, `phone`, `country`, `message`, `products_number`, `status`) VALUES
(6, '2018-07-17 10:01:50', 'p1', 'janawad@gmail.com', 9164942431, 'india', 'product need', 200, 'pending'),
(7, '2018-07-17 10:03:12', 'p2', 'maclestudio4@gmail.com', 9164942431, 'india', 'product need', 50, 'complete');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `pkg_cat_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `icon_image` varchar(250) NOT NULL,
  `package_title` varchar(225) NOT NULL,
  `package_price` varchar(250) NOT NULL,
  `slider_desc1` varchar(250) NOT NULL,
  `slider_image1` varchar(250) NOT NULL,
  `number_of_qty` int(255) NOT NULL,
  `qty_left` int(255) NOT NULL,
  `deleted` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `pkg_cat_id`, `date_created`, `date_updated`, `icon_image`, `package_title`, `package_price`, `slider_desc1`, `slider_image1`, `number_of_qty`, `qty_left`, `deleted`) VALUES
(14, 8, '2018-07-05 09:29:38', '2018-08-16 10:52:46', '153425396343.jpg', 'DG3002', '2000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '153424541938.jpg', 350, 2000, 0),
(15, 8, '2018-07-17 13:12:53', '2018-08-14 19:09:39', '153425397939.jpg', 'DG3001', '100', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '153424553237.jpg', 50, 1600, 0),
(16, 9, '2018-07-19 06:29:47', '2018-08-14 19:09:59', '1534253999da1011-3.jpg', 'DS903', '100', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1534245603903.jpg', 200, 0, 0),
(17, 10, '2018-07-20 12:51:44', '2018-08-14 19:10:18', '1534254018dl954.jpg', 'db99904', '1000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1534245714db0098.jpg', 193, 0, 0),
(18, 8, '2018-08-14 18:53:08', '0000-00-00 00:00:00', '153425298839.jpg', 'DG3003', '1000', 'ECOLAM has high flexual modulus,and superior dimensional stability making its a versatile for interior designing', '153425298839.jpg', 1000, 0, 0),
(19, 8, '2018-08-14 18:56:12', '0000-00-00 00:00:00', '153425317239.jpg', 'DG3004', '500', 'ECOLAM has high flexual modulus,and superior dimensional stability making its a versatile for interior designing', '153425317240.jpg', 1050, 0, 0),
(20, 8, '2018-08-14 18:57:15', '0000-00-00 00:00:00', '153425323540.jpg', 'DG3006', '2000', 'ECOLAM has high flexual modulus,and superior dimensional stability making its a versatile for interior designing', '153425323542.jpg', 1500, 0, 0),
(21, 9, '2018-08-14 18:59:29', '0000-00-00 00:00:00', '1534253369s901.jpg', 'S901', '1000', 'These laminates are easy to apply using convertional adhesive normally used with plastic laminates maybe water based & solvent based. We strongly do not recommend use of heat activeted adhesives.', '1534253369s901.jpg', 500, 0, 0),
(22, 9, '2018-08-14 19:00:30', '0000-00-00 00:00:00', '1534253430s901.jpg', 's902', '1500', 'These laminates are easy to apply using convertional adhesive normally used with plastic laminates maybe water based & solvent based. We strongly do not recommend use of heat activeted adhesives.', '1534253430s902.jpg', 10000, 0, 0),
(23, 11, '2018-08-14 19:03:41', '0000-00-00 00:00:00', '15342536215021.jpg', 'REFLEXIONS', '800', 'REFLEXIONS', '1534253621dl954.jpg', 8000, 0, 0),
(24, 11, '2018-08-14 19:04:34', '0000-00-00 00:00:00', '1534253674dl954.jpg', 'VELVETTO', '400', 'VELVETTO', '15342536745021.jpg', 500, 0, 0),
(25, 12, '2018-08-14 19:07:01', '0000-00-00 00:00:00', '1534253821da1012-3.jpg', 'DA1012', '900', 'Home & Office interiors, Showrooms, Restaurants, Lounges, Malls, Hotels, etc...\r\nCan be used on walls as well as ceilings with great ease.', '1534253821da1011-3.jpg', 9000, 0, 0),
(26, 12, '2018-08-14 19:07:51', '0000-00-00 00:00:00', '1534253871da1012-3.jpg', 'DA1011', '4000', 'Home & Office interiors, Showrooms, Restaurants, Lounges, Malls, Hotels, etc...\r\nCan be used on walls as well as ceilings with great ease.', '1534253871da1011-3.jpg', 3500, 0, 0),
(27, 8, '2018-08-14 19:11:04', '0000-00-00 00:00:00', '153425406440.jpg', 'DG3007', '500', 'ECOLAM has high flexual modulus,and superior dimensional stability making its a versatile for interior designing ', '153425406443.jpg', 1500, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `packages_category`
--

CREATE TABLE `packages_category` (
  `id` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `packages_category_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `packages_category_image` varchar(225) NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0 = active ,1 = inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages_category`
--

INSERT INTO `packages_category` (`id`, `date_created`, `date_updated`, `packages_category_name`, `description`, `packages_category_image`, `deleted`) VALUES
(8, '2018-07-05 07:23:31', '2018-08-14 16:22:53', 'DUROGLAZE', 'DUROGLAZE-ECOLAM sheets are simple to process and easy in handling that makes it so application friendly to use in unlimited ways in unlimited areas. Whether it may be a home , office, mall, showroom, salon, restaurant hotel or just about anything.', '1534243973dg.jpg', 0),
(9, '2018-07-19 06:27:06', '2018-08-14 16:24:21', 'DEXARTE', 'DEXARTE is committed to innovate new products...We bring to you a product so visually vibrant & magnificently magical, luscious laminate namely DEXARTE, High Quality Decorative Laminates which truly transform the interior of your house.', '1534244061dexa.jpg', 0),
(10, '2018-07-20 12:50:51', '2018-08-14 16:25:39', 'DUROBLIZE', 'DUROBLIZE sheets are simple to process & easy in handling that makes it so application friendly to use in unlimited ways in unlimited areas.Whether it may be a home, office, mall, showroom, salon, restaurant, hotel or just about anything.', '1534244139db.jpg', 0),
(11, '2018-08-14 18:37:55', '0000-00-00 00:00:00', 'DUROLUXE', 'Enchanting glossy solid colours throughout are ideal for use in high traffic areas, offering vast potential for innovative & stylish interiors.', '1534252075dl.jpg', 0),
(12, '2018-08-14 18:39:28', '2018-08-16 10:49:29', 'DUROARTE', 'DUROARTE Guaranteed to cast a spell with its alluring beauty, these surface decorative panels are made of mixture of high level standard Polystyrene and Charcoal.', '1534252379da9010-3.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `package_highlight`
--

CREATE TABLE `package_highlight` (
  `id` int(11) NOT NULL,
  `pkg_cat_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `highlights_title` varchar(250) NOT NULL,
  `highlights_desc` text NOT NULL,
  `highlights_image` varchar(255) NOT NULL,
  `deleted` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_highlight`
--

INSERT INTO `package_highlight` (`id`, `pkg_cat_id`, `date_created`, `date_updated`, `highlights_title`, `highlights_desc`, `highlights_image`, `deleted`) VALUES
(9, 1, '2017-01-31 18:27:20', '2017-01-31 19:50:31', 'Experiences', 'Journey\'s that are designed to transcend you through architecture of gods, the kings and the masters of contemporary world.', '1485872431akshardhamtemple.jpg', 0),
(11, 2, '2017-01-31 18:27:51', '2017-01-31 20:03:48', 'soul', 'Journey\'s that are designed to transcend you through architecture of gods, the kings and the masters of contemporary world.setterrty', '1485873228ece3a71384c310e984ff9ff2927931ae.jpg', 0),
(12, 3, '2017-01-31 18:28:03', '2017-01-31 20:01:57', 'Exuberance', 'Journey\'s that are designed to transcend you through architecture of gods, the kings and the masters of contemporary world.\r\nJourney\'s that are designed to transcend you through architecture of gods, the kings and the masters of contemporary world.', '1485873117download.jpg', 0),
(13, 5, '2017-01-31 18:28:20', '2017-01-31 19:07:52', 'Timeless', 'Journey\'s that are designed to transcend you through architecture of gods, the kings and the masters of contemporary world.dsftdt', '14858675009.jpg', 0),
(14, 1, '2017-01-31 18:28:34', '2017-01-31 19:52:05', 'Places covered', 'Journey\'s that are designed to transcend you through architecture of gods, the kings and the masters of contemporary world.try6uurt', '1485872525ancient-india-city1.jpg', 0),
(17, 1, '2017-01-31 19:53:48', '0000-00-00 00:00:00', 'Overnight activities', 'As we try to get more out of your tour, we try to have maximum journeys over night. In the case that we have a bight halt, you could take a pick between me time and group networking events.', '1485872628classical_india_1.jpg', 0),
(18, 3, '2017-01-31 19:55:51', '0000-00-00 00:00:00', 'Food', 'Mostly local fare; Networking nights planned around eating experiences; \'Me time\' advice /ood guide to best restaurants in town. Look for how many meals covered in the detailed tour guide.', '1485872751vitthala-temple-hampi-ancient-india-s.jpg', 0),
(21, 1, '2017-01-31 20:00:10', '2017-01-31 20:01:07', 'questerra', 'Most of journey are on board air conditioned state of the art german coaches; as journeys are overnight, we hope you rest well to be up for an action packed day!', '1485873067architecture-of-india.jpg', 0),
(22, 2, '2017-01-31 20:02:45', '2017-01-31 20:04:32', 'Tours', 'Most of journey are on board air conditioned state of the art german coaches; as journeys are overnight, we hope you rest well to be up for an action packed day!', '1485873272f61dd72149f3fbf548b5822e5bf15473.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `press_media`
--

CREATE TABLE `press_media` (
  `id` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `press_media_title` varchar(250) NOT NULL,
  `press_media_desc` text NOT NULL,
  `press_media_image` varchar(250) NOT NULL,
  `press_media_link` varchar(250) NOT NULL,
  `deleted` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `press_media`
--

INSERT INTO `press_media` (`id`, `date_created`, `date_updated`, `press_media_title`, `press_media_desc`, `press_media_image`, `press_media_link`, `deleted`) VALUES
(10, '2018-07-05 07:27:48', '2018-07-05 07:28:21', 'testing.', 'testing.', '1530755868Chrysanthemum.jpg', 'testing.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `package_title` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `number_of_qty` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `gst` varchar(255) NOT NULL,
  `pan` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `servece_name` varchar(255) NOT NULL,
  `product_track_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `date_created`, `package_title`, `amount`, `qty`, `number_of_qty`, `product_id`, `image`, `gst`, `pan`, `name`, `email`, `address`, `status`, `servece_name`, `product_track_no`) VALUES
(62, '2018-07-20 12:53:01', 'new products', '1000', 50, 1000, 17, '1532071304Desert.jpg', '9164942431', '9164942431', 'anil', 'maclestudio4@gmail.com', 'bangalore', 'Success', 'testing transport`', '#00000124620#4'),
(64, '2018-07-21 06:42:01', 'new products', '1000', 147, 847, 17, '1532071304Desert.jpg', '9164942431', '9164942431', 'anil', 'maclestudio4@gmail.com', 'bangalore', 'shipping', 'Amazon Transportation Services', '211197520794'),
(65, '2018-07-21 07:07:07', 'new products', '1000', 50, 700, 17, '1532071304Desert.jpg', '123456789', '123456789', 'anij', 'maclestudio5@gmail.com', '560040', 'Success', 'amazon', '#1234567890123'),
(66, '2018-07-21 07:10:38', 'product', '100', 50, 523, 16, '1531961987Jellyfish.jpg', '123456789', '123456789', 'anij', 'maclestudio5@gmail.com', '560040', 'Success', '', ''),
(67, '2018-07-24 11:19:19', 'testing', '200', 50, 500, 14, '1530767079Jellyfish.jpg', '9164942431', '9164942431', 'anil', 'maclestudio4@gmail.com', 'bangalore', 'Success', '', ''),
(68, '2018-07-24 11:58:06', 'new products', '1000', 60, 600, 17, '1532071304Desert.jpg', '9164942431', '9164942431', 'anil', 'maclestudio4@gmail.com', 'bangalore', 'Success', 'testing', '#order0123456'),
(69, '2018-07-24 11:58:59', 'new products', '1000', 61, 540, 17, '1532071304Desert.jpg', '9164942431', '9164942431', 'anil', 'maclestudio4@gmail.com', 'bangalore', 'shipping', '', ''),
(70, '2018-07-24 12:00:38', 'product', '100', 73, 473, 16, '1531961987Jellyfish.jpg', '9164942431', '9164942431', 'anil', 'maclestudio4@gmail.com', 'bangalore', 'place', '', ''),
(71, '2018-07-24 19:13:12', 'new products', '1000', 51, 479, 17, '1532071304Desert.jpg', '9164942431', '9164942431', 'anil', 'maclestudio4@gmail.com', 'bangalore', 'place', '', ''),
(72, '2018-07-25 15:44:08', 'new products', '1000', 78, 428, 17, '1532071304Desert.jpg', '1452145145214512', '1451451451451', 'anil janawad', 'arjise01@gmail.com', 'babalada', 'Success', 'Amazon Transportation Services', '01234567899852410'),
(73, '2018-07-25 15:45:39', 'new products', '1000', 50, 350, 17, '1532071304Desert.jpg', '1452145145214512', '1451451451451', 'anil janawad', 'arjise01@gmail.com', 'babalada', 'shipping', 'DTDC', '#00123456007890'),
(75, '2018-07-25 15:49:28', 'product', '100', 50, 350, 16, '1531961987Jellyfish.jpg', '9164942431', '9164942431', 'anil', 'maclestudio4@gmail.com', 'bangalore', 'place', '', ''),
(76, '2018-07-25 19:21:07', 'testing', '200', 50, 450, 14, '1530767079Jellyfish.jpg', '9164942431', '9164942431', 'anil', 'maclestudio4@gmail.com', 'bangalore', 'packing', '', ''),
(77, '2018-07-26 16:08:32', 'product', '100', 100, 300, 16, '1531961987Jellyfish.jpg', '123456', '123456', 'macle', 'maclestudio3@gmail.com', 'shishadripuram Bangalore', 'packing', 'flipkart', '12547895142368'),
(78, '2018-07-31 18:27:36', 'new products', '1000', 50, 300, 17, '1532071304Desert.jpg', '1452145145214512', '1451451451451', 'anil janawad', 'arjise01@gmail.com', 'babalada', 'place', '', ''),
(79, '2018-08-04 12:14:43', 'tested', '100', 50, 50, 15, '1531813373Koala.jpg', '9164942431', '9164942431', 'anil', 'maclestudio4@gmail.com', 'bangalore', 'place', '', ''),
(80, '2018-08-08 16:39:49', 'tested', '100', 50, 100, 15, '1531813373Koala.jpg', '1452145145214512', '1451451451451', 'anil janawad', 'arjise01@gmail.com', 'babalada', 'place', '', ''),
(81, '2018-08-08 16:48:28', 'testing', '200', 50, 400, 14, '1530767079Jellyfish.jpg', '1452145145214512', '1451451451451', 'anil janawad', 'arjise01@gmail.com', 'babalada', 'place', '', ''),
(82, '2018-08-09 11:03:10', 'new products', '1000', 57, 250, 17, '1532071304Desert.jpg', '9164942431', '9164942431', 'anil', 'maclestudio4@gmail.com', 'bangalore', 'place', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) CHARACTER SET utf32 NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `gst` varchar(200) NOT NULL,
  `pan` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `tel` varchar(150) NOT NULL,
  `register_type` varchar(255) NOT NULL,
  `salesemail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `date_created`, `name`, `email`, `password`, `cpassword`, `gst`, `pan`, `address`, `tel`, `register_type`, `salesemail`) VALUES
(6, '0000-00-00 00:00:00', 'anil', 'maclestudio4@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '123456', '9164942431', '9164942431', 'bangalore', '9164942431', 'sales', ''),
(8, '0000-00-00 00:00:00', 'anij', 'maclestudio5@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '123456', '123456789', '123456789', '560040', '', 'sales', ''),
(9, '2018-07-25 14:29:03', 'anil janawad', 'arjise01@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '123456', '1452145145214512', '1451451451451', 'babalada', '', 'distributor', 'maclestudio4@gmail.com'),
(10, '2018-07-26 16:08:07', 'macle', 'maclestudio3@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '123456', '123456', '123456', 'shishadripuram Bangalore', '', 'distributor', 'maclestudio4@gmail.com'),
(30, '2018-07-31 15:26:41', 'janawad', 'janawadanil@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '123456', '123456', '123456', '123456', '', 'sales', ''),
(37, '2018-07-31 15:49:37', 'sdgh', 'janawadq@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '123456', '9164942431', '9164942431', 'dfkg', '9164942431', 'distributor', 'janawadanil@gmail.com'),
(38, '2018-07-31 15:58:01', 'janawadanil', 'ajanawad@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '123456', '9164942431', '9164942431', 'fghjk dgjkh', '9164942431', 'distributor', 'maclestudio4@gmail.com'),
(39, '2018-08-01 11:08:49', 'macle', 'ajanawadanil@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '123456', '9164942431', '9164942431', 'india', '9164942431', 'sales', ''),
(40, '2018-08-07 23:35:17', 'ani janawad r', 'ani@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '123456', '123456789', '9242647940', 'bijapur', '123456789', 'distributor', 'maclestudio5@gmail.com'),
(41, '2018-08-09 11:33:58', 'anil macle', 'maclestudio1@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '123456', '1010101010', '0101010101', 'macle grafics', '9164942431', 'sales', ''),
(42, '2018-08-09 11:35:43', 'macle developer', 'maclestudio11@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '123456', '1414141414', '9242647940', 'macle grafics pvt ltd', '1515414515', 'distributor', 'maclestudio1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `testimonials_name` varchar(255) NOT NULL,
  `position` varchar(250) NOT NULL,
  `testimonials_desc` text NOT NULL,
  `testimonials_image` varchar(255) NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = active , 0 = inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `date_created`, `date_updated`, `testimonials_name`, `position`, `testimonials_desc`, `testimonials_image`, `deleted`) VALUES
(16, '2018-07-05 07:19:10', '2018-08-16 09:48:43', 'Testimonials 3', 'macle', 'Fusce molestie urna eu lacus sollicitudin, ut finibus magna pharetra. Donec nec fringilla sapien. Proin volutpat lectus in l. Ut elementum quam ut vulputate molestie. Interdum et malesuada fames ', '1530755350Hydrangeas.jpg', 1),
(20, '2018-08-10 18:32:02', '2018-08-14 19:44:15', 'Testimonials 2', 'ceo', 'Fusce molestie urna eu lacus sollicitudin, ut finibus magna pharetra. Donec nec fringilla sapien. Proin volutpat lectus in l. Ut elementum quam ut vulputate molestie. Interdum et malesuada fames', '1533906122Koala.jpg', 1),
(21, '2018-08-10 18:32:31', '2018-08-14 19:44:06', 'Testimonials 1', 'manager', 'Fusce molestie urna eu lacus sollicitudin, ut finibus magna pharetra. Donec nec fringilla sapien. Proin volutpat lectus in l. Ut elementum quam ut vulputate molestie. Interdum et malesuada fames', '1533906151Penguins.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aj`
--
ALTER TABLE `aj`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ajj`
--
ALTER TABLE `ajj`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply_form`
--
ALTER TABLE `apply_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry_form`
--
ALTER TABLE `enquiry_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facts`
--
ALTER TABLE `facts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `folders`
--
ALTER TABLE `folders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages_category`
--
ALTER TABLE `packages_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_highlight`
--
ALTER TABLE `package_highlight`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `press_media`
--
ALTER TABLE `press_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `aj`
--
ALTER TABLE `aj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=341;

--
-- AUTO_INCREMENT for table `ajj`
--
ALTER TABLE `ajj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `apply_form`
--
ALTER TABLE `apply_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `enquiry_form`
--
ALTER TABLE `enquiry_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `facts`
--
ALTER TABLE `facts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `folders`
--
ALTER TABLE `folders`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `packages_category`
--
ALTER TABLE `packages_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `package_highlight`
--
ALTER TABLE `package_highlight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `press_media`
--
ALTER TABLE `press_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
