-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2018 at 08:00 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ncfsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `fold_ministry`
--

CREATE TABLE IF NOT EXISTS `fold_ministry` (
`id` int(11) NOT NULL,
  `ministry_name` varchar(200) NOT NULL,
  `ministry_role` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invites`
--

CREATE TABLE IF NOT EXISTS `invites` (
`id` int(11) NOT NULL,
  `invite_by_id` int(11) NOT NULL,
  `invited_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
`id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `birthday` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `water_bap` varchar(50) NOT NULL,
  `hg_bap` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `prof_pic` varchar(100) NOT NULL,
  `add_date` datetime NOT NULL,
  `life_verse` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `lastname`, `firstname`, `middlename`, `age`, `birthday`, `address`, `water_bap`, `hg_bap`, `gender`, `prof_pic`, `add_date`, `life_verse`) VALUES
(1, 'Sevilla', 'Syndee Ann', 'S', 22, '1995/04/24', 'Sta. Fe, Leyte', '2016/02/14', '2016/04/21', 'Female', '1.jpg', '2017-08-05 10:23:24', 'Be still and know that I am God -Psams 46:10'),
(2, 'Go', 'Mark Flourence', 'A', 56, '1999/07/24', 'Jaro', '2005/09/09', '2005/09/09', 'Male', '2.jpg', '2017-08-05 10:24:55', 'God is my Shepeherd I shall not want -Psalms 23:1'),
(3, 'Marquez', 'Ruth Kimberly', 'O', 21, '1996/12/02', 'Jaro', '2005/09/09', '2005/09/09', 'Female', '3.jpg', '2017-08-05 10:36:00', 'Jesus Wept -John 11:35'),
(4, 'Mondal', 'Christine Joy', 'C', 21, '1996/11/15', 'Jaro', '2005/09/09', '2005/09/09', 'Female', '4.jpg', '2017-08-06 05:44:00', 'In the beginning, God created the heaven and the earth -Genesis 1:1'),
(5, 'Mondal', 'Hazel', 'C', 22, '1996/11/15', 'Jaro', '1996/11/15', '1996/11/15', 'Female', '5.jpg', '2017-08-06 05:52:26', 'In the beginning was the Word and the Word was  with God and the Word was God -John 1:1'),
(6, 'Pace', 'Abigail Jane', 'M', 100, '1996/11/15', 'Jaro', '1996/11/15', '1996/11/15', 'Female', '6.jpg', '2017-08-06 05:52:59', 'Except a man be born again, he cannot see the kingdom of God -John 3:3'),
(7, 'Go', 'Jezreel', 'A', 18, '1996/11/15', '1996/11/15', '1996/11/15', '1996/11/15', 'Female', '7.jpg', '2017-08-06 05:53:11', 'Judge not that ye be not judged. -Matthew 7:1'),
(8, 'Sevilla', 'Joanna Marie', 'S', 21, 'hgf', 'hgfjh', 'ghfjgh', 'khgf', 'gf', '8.jpg', '2017-08-06 05:59:30', 'Whatsoever you do, do it for the glory of God -Colossians 3:17'),
(9, 'Villajuan', 'Karen', 'J', 85, 'hgf', 'hgfjh', 'ghfjgh', 'khgf', 'gf', '9.jpg', '2017-08-06 06:01:02', 'Seek ye first the kingdom of God and His righteousness and all these things shall be added unto you'),
(10, 'Egoy', 'Carl Jeffrey', 'E', 85, 'hgf', 'hgfjh', 'ghfjgh', 'khgf', 'hgf', '10.jpg', '2017-08-06 06:04:10', 'Humble youselves in the sight of the Lord and He shall lift You up -James 4:10'),
(11, 'Sevilla', 'Ranilo', 'Sales', 19, '06/27/1999', 'Sta. Fe, Leyte', '11/21/16', '11/21/16', 'Male', '11.jpg', '2017-08-27 09:58:52', 'John 1:1');

-- --------------------------------------------------------

--
-- Table structure for table `ministries`
--

CREATE TABLE IF NOT EXISTS `ministries` (
`id` int(11) NOT NULL,
  `ministry_name` varchar(50) NOT NULL,
  `ministry_desc` varchar(255) NOT NULL,
  `main_ministry` int(11) NOT NULL,
  `ministry_address` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ministries`
--

INSERT INTO `ministries` (`id`, `ministry_name`, `ministry_desc`, `main_ministry`, `ministry_address`) VALUES
(1, 'Music Ministry', 'gkjhaghg', 0, 'Jaro, Leyte'),
(2, 'Multimedia and Programming Ministry', 'dfgj', 0, 'Jaro, Leyte');

-- --------------------------------------------------------

--
-- Table structure for table `ministry_members`
--

CREATE TABLE IF NOT EXISTS `ministry_members` (
`id` int(11) NOT NULL,
  `ministry_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `position` varchar(100) NOT NULL,
  `date_from` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ministry_members`
--

INSERT INTO `ministry_members` (`id`, `ministry_id`, `member_id`, `position`, `date_from`, `status`) VALUES
(1, 1, 1, 'Guitarist', '08/06/2016', 'Ongoing');

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE IF NOT EXISTS `mission` (
`id` int(11) NOT NULL,
  `mission_date` date NOT NULL,
  `mission_place` varchar(255) NOT NULL,
  `mission_num` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`id`, `mission_date`, `mission_place`, `mission_num`) VALUES
(3, '2018-07-22', 'Alangalang, Leyte', 52),
(4, '2018-07-29', 'Alangalang, Leyte', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fold_ministry`
--
ALTER TABLE `fold_ministry`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invites`
--
ALTER TABLE `invites`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ministries`
--
ALTER TABLE `ministries`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ministry_members`
--
ALTER TABLE `ministry_members`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mission`
--
ALTER TABLE `mission`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `fold_ministry`
--
ALTER TABLE `fold_ministry`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `invites`
--
ALTER TABLE `invites`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `ministries`
--
ALTER TABLE `ministries`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ministry_members`
--
ALTER TABLE `ministry_members`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mission`
--
ALTER TABLE `mission`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
