-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2019 at 11:10 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pixeladmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisemenet`
--

CREATE TABLE `advertisemenet` (
  `ad_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `file` text NOT NULL,
  `description` text NOT NULL,
  `active_flag` int(1) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisemenet`
--

INSERT INTO `advertisemenet` (`ad_id`, `title`, `url`, `file`, `description`, `active_flag`, `created_date`, `updated_date`) VALUES
(1, 'Lovely Professional University', 'https://www.lpu.in/', 'lpu.jpg', 'LPU Alumni Working at 1 Crore Package in U.S.A', 0, '2018-10-12 15:21:30', '0000-00-00 00:00:00.000000'),
(3, 'Amity University', 'http://www.amity.edu', 'amity.jpg', 'Amity University is part of the not-for-profit Amity Education Group with over 2 decades of excellence that includes 8 world-class universities, 25 schools', 0, '2018-10-22 14:03:30', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `etitle` varchar(30) NOT NULL,
  `edate` date NOT NULL,
  `etime` time NOT NULL,
  `amount` bigint(20) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `user_id`, `cname`, `etitle`, `edate`, `etime`, `amount`, `created_date`, `updated_date`) VALUES
(1, 0, 'ResoExpo', 'Elite', '2018-12-01', '11:00:00', 500, '2018-03-17 16:08:24', '0000-00-00 00:00:00'),
(2, 0, 'CarPool', 'seminar hall', '2018-12-19', '01:10:00', 2000, '2018-12-01 16:34:53', '0000-00-00 00:00:00'),
(3, 0, 'Vinay', 'jlkl', '2018-12-22', '10:05:00', 500, '2018-12-07 12:23:37', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `product` text NOT NULL,
  `r_date` date NOT NULL,
  `active_flag` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `username`, `email`, `product`, `r_date`, `active_flag`, `timestamp`) VALUES
(3, 'Vinay', 'vinay91098@gmail.com', 'Projector', '2018-03-05', 1, '2018-03-04 12:08:34'),
(6, 'vinay', 'vinay91098@gmail.com', 'Security', '2018-11-17', 1, '2018-11-15 17:22:32');

-- --------------------------------------------------------

--
-- Table structure for table `company_info`
--

CREATE TABLE `company_info` (
  `cid` int(11) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `caddress` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `fax` bigint(10) NOT NULL,
  `contactno` bigint(20) NOT NULL,
  `url` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_info`
--

INSERT INTO `company_info` (`cid`, `cname`, `caddress`, `email`, `fax`, `contactno`, `url`) VALUES
(1, 'ResoExpo Limited', 'BH4 Lovely professional university', 'email@resoexpo.com', 7, 1234567890, '');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `f_id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `photo` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`f_id`, `fname`, `photo`, `created_date`, `updated_date`) VALUES
(7, 'Gym', 'gym.JPG', '2018-04-15 03:25:34', '0000-00-00 00:00:00'),
(8, 'Cafeteria', 'canteen.JPG', '2018-04-15 03:25:58', '0000-00-00 00:00:00'),
(9, 'Loan Garden', 'loan.JPG', '2018-04-15 03:26:14', '0000-00-00 00:00:00'),
(10, 'Seminar Halls', 'seminar hall.jpg', '2018-04-15 03:26:38', '0000-00-00 00:00:00'),
(11, 'Club House', 'clubhouse.jpg', '2018-04-15 03:29:04', '0000-00-00 00:00:00'),
(12, 'Canteen', 'canteen.JPG', '2018-04-15 03:31:48', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faq_id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `active_flag` int(1) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faq_id`, `question`, `answer`, `active_flag`, `created_date`, `updated_date`) VALUES
(1, 'What is this website ?', 'This website is for Resource Management ', 0, '2018-12-06 15:37:11', '2018-12-06 17:45:11.000000'),
(2, 'Who is the Owner ?', 'Owner Of website is team ResoExpo', 0, '2018-12-06 15:37:52', '2018-12-06 17:45:22.000000'),
(3, 'jkl', 'jkl', 0, '2018-12-07 06:54:19', '2018-12-07 12:24:33.000000');

--
-- Triggers `faq`
--
DELIMITER $$
CREATE TRIGGER `update_faq` BEFORE UPDATE ON `faq` FOR EACH ROW SET NEW.updated_date = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `comments` varchar(60) NOT NULL,
  `active_flag` int(2) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_`, `name`, `email`, `subject`, `comments`, `active_flag`, `created_date`, `updated_date`) VALUES
(5, 'Vinaykumar', 'vinay076@outlook.com', 'Shortcut', 'Easy to Use and fastest website', 0, '2018-12-01 11:01:28', '2018-12-06');

--
-- Triggers `feedback`
--
DELIMITER $$
CREATE TRIGGER `updated_feedback` BEFORE UPDATE ON `feedback` FOR EACH ROW SET NEW.updated_date = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `forgot`
--

CREATE TABLE `forgot` (
  `forgot_id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `token` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `g_id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `title` varchar(30) NOT NULL,
  `active_flag` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`g_id`, `image`, `title`, `active_flag`, `created_date`, `updated_date`) VALUES
(9, 'Seminar Room1.jpg', 'Seminar Room', 0, '2018-12-06 12:24:41', '0000-00-00'),
(10, 'gym.JPG', 'Gym', 0, '2018-12-06 12:25:20', '0000-00-00'),
(11, 'canteen.JPG', 'Cafeteria', 0, '2018-12-06 12:25:42', '0000-00-00'),
(12, 'clubhouse.jpg', 'Club House', 0, '2018-12-06 12:26:01', '0000-00-00');

--
-- Triggers `gallery`
--
DELIMITER $$
CREATE TRIGGER `updated_gallery` BEFORE UPDATE ON `gallery` FOR EACH ROW SET NEW.updated_date = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `hall_booking`
--

CREATE TABLE `hall_booking` (
  `id` int(11) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `stime` time NOT NULL,
  `etime` time NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hall_booking`
--

INSERT INTO `hall_booking` (`id`, `cname`, `name`, `date`, `stime`, `etime`, `created_date`) VALUES
(1, 'Softech Infosys', 'Seminar Hall 1', '2018-04-23', '00:00:00', '00:00:00', '2018-04-22 03:37:35'),
(4, 'ResoExpo', 'Seminar Hall 2', '2018-12-01', '00:00:00', '00:00:00', '2018-04-22 04:56:18'),
(5, 'CarPool', 'Seminar hall 3', '2018-11-01', '00:00:00', '00:00:00', '2018-04-22 05:21:24'),
(6, 'Vinay', 'Seminar Hall 1', '2018-08-31', '00:00:00', '00:00:00', '2018-12-06 19:27:53');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `c_id` int(11) NOT NULL,
  `cname` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `cperson` text NOT NULL,
  `contactno` bigint(10) NOT NULL,
  `address` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `file` text NOT NULL,
  `active_flag` int(2) NOT NULL,
  `ttime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`c_id`, `cname`, `email`, `cperson`, `contactno`, `address`, `username`, `password`, `file`, `active_flag`, `ttime`, `updated_date`) VALUES
(10, 'Vinay', 'vinay91098@gmail.com', 'vinay', 9898255180, 'Ahmedabad', 'vinay123', 'jkl', 'WhatsApp Image 2018-10-16 at 11.24.03 PM.jpeg', 0, '2018-12-05 15:00:48', '2018-12-07'),
(14, 'Poolmyride', 'carpool@poolmyride.com', 'carpool', 9953395712, 'B-4/8, Block B, Rajouri Garden,New Delhi', 'Poolmyride123', 'ride123', 'pool.jpg', 0, '2018-12-06 13:30:45', '2018-12-06'),
(16, 'jkl', 'jkl@jkl.jkl', 'jkl', 9876386345, '305D BH4 Lovely professional University,', 'vinayk7', '13dce076', 'module_table_bottom.png', 0, '2018-12-07 06:46:38', '2018-12-07');

--
-- Triggers `members`
--
DELIMITER $$
CREATE TRIGGER `updated_company` BEFORE UPDATE ON `members` FOR EACH ROW SET NEW.updated_date = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `m_id` int(11) NOT NULL,
  `message` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `by1` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`m_id`, `message`, `name`, `image`, `timestamp`, `by1`) VALUES
(33, 'Add Resources', 'carpool', '', '2018-12-06 12:09:27', 'vinay'),
(34, 'Add Resources', 'vinay123', 'WhatsApp Image 2018-10-16 at 11.24.03 PM.jpeg', '2018-12-06 12:53:11', 'vinay');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `active_flag` int(11) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post_query`
--

CREATE TABLE `post_query` (
  `query_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `file` varchar(100) NOT NULL,
  `reply` text NOT NULL,
  `active_flag` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_query`
--

INSERT INTO `post_query` (`query_id`, `name`, `email`, `title`, `description`, `file`, `reply`, `active_flag`, `created_date`, `updated_date`) VALUES
(1, 'vinay', 'vinay91098@gmail.com', 'What names are allowed on website?', 'What name can''t include?', '', 'Symbols, numbers, unusual capitalization, repeating characters or punctuation are not allowed.', 0, '2018-12-04 18:39:13', '2018-12-07 01:09:53.000000'),
(2, 'Shah Rukh Khan', 'srkfans@redchillies.com', 'How do I change or reset my password?', 'Want to Change my Password', '', '', 0, '2018-12-05 04:50:36', '2018-12-06 12:04:17.000000');

--
-- Triggers `post_query`
--
DELIMITER $$
CREATE TRIGGER `updated_post_query` BEFORE UPDATE ON `post_query` FOR EACH ROW SET NEW.updated_date = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pname` text NOT NULL,
  `product` text NOT NULL,
  `image` varchar(40) NOT NULL,
  `active_flag` int(2) NOT NULL,
  `tdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `product`, `image`, `active_flag`, `tdate`) VALUES
(1, 'Foods', 'FMCG', 'food.jpeg', 0, '2018-12-05 20:13:00'),
(2, 'furniture', 'Elite', 'elite.jpg', 0, '2018-12-04 15:40:04');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role` text NOT NULL,
  `active_flag` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role`, `active_flag`, `created_date`, `updated_date`) VALUES
(1, 'Admin', 0, '2018-11-15 11:04:06', '2018-12-06'),
(3, 'Members', 0, '2018-11-15 11:04:23', '2018-12-06'),
(4, 'Company', 0, '2018-12-06 12:15:37', '0000-00-00');

--
-- Triggers `role`
--
DELIMITER $$
CREATE TRIGGER `updated_role` BEFORE UPDATE ON `role` FOR EACH ROW SET NEW.updated_date = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `seminar_hall`
--

CREATE TABLE `seminar_hall` (
  `s_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seminar_hall`
--

INSERT INTO `seminar_hall` (`s_id`, `id`, `name`, `file`) VALUES
(1, 1, 'Seminar Hall 1', 'Seminar Room1.jpg'),
(2, 2, 'Seminar Hall 2', 'seminar hall 2.jpg\r\n'),
(3, 3, 'Seminar hall 3', 'seminar hall 3.jpg\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `s_id` int(11) NOT NULL,
  `sname` text NOT NULL,
  `image` varchar(30) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`s_id`, `sname`, `image`, `time`) VALUES
(2, 'Security', 'security.jpg', '2018-04-14 21:54:03'),
(3, 'Lift', 'lift.jpg', '2018-04-14 21:54:24'),
(4, 'Maintainance', 'building-maintenance.jpg', '2018-04-14 21:55:08');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `s_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `file` text NOT NULL,
  `active_flag` int(11) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`s_id`, `title`, `file`, `active_flag`, `created_date`, `updated_date`) VALUES
(1, 'We are team of highly skilled people', '26912432_ml.jpg', 0, '2018-11-15 03:36:06', '0000-00-00 00:00:00'),
(2, 'available 24x7', 'contact3.jpg', 0, '2018-11-15 03:36:50', '0000-00-00 00:00:00'),
(3, 'Get Your query resolved', 'test.jpg', 0, '2018-11-15 03:39:48', '0000-00-00 00:00:00'),
(4, 'Centralize Management  ', 'solution-small-img.jpg', 0, '2018-11-15 03:40:54', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `reg_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `role_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `file` text NOT NULL,
  `active_flag` int(11) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`reg_id`, `name`, `email`, `role_id`, `username`, `password`, `file`, `active_flag`, `created_date`, `updated_date`) VALUES
(1, 'vinay prajapati', 'vinay91098@gmail.com', 1, 'vinay', 'prajapati', 'WhatsApp Image 2018-10-16 at 11.24.03 PM.jpeg', 0, '2018-10-25 16:10:24', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisemenet`
--
ALTER TABLE `advertisemenet`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `company_info`
--
ALTER TABLE `company_info`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_`);

--
-- Indexes for table `forgot`
--
ALTER TABLE `forgot`
  ADD PRIMARY KEY (`forgot_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `hall_booking`
--
ALTER TABLE `hall_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `post_query`
--
ALTER TABLE `post_query`
  ADD PRIMARY KEY (`query_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `seminar_hall`
--
ALTER TABLE `seminar_hall`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisemenet`
--
ALTER TABLE `advertisemenet`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `company_info`
--
ALTER TABLE `company_info`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `forgot`
--
ALTER TABLE `forgot`
  MODIFY `forgot_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `hall_booking`
--
ALTER TABLE `hall_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `post_query`
--
ALTER TABLE `post_query`
  MODIFY `query_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `seminar_hall`
--
ALTER TABLE `seminar_hall`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
