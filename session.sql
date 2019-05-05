-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2018 at 06:24 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `session`
--

-- --------------------------------------------------------

--
-- Table structure for table `engg_info`
--

CREATE TABLE `engg_info` (
  `id` int(11) NOT NULL,
  `sem1` int(11) NOT NULL,
  `sem2` int(11) NOT NULL,
  `fyback` varchar(255) NOT NULL,
  `sem3` int(11) NOT NULL,
  `sem4` int(11) NOT NULL,
  `syback` varchar(255) NOT NULL,
  `sem5` int(11) NOT NULL,
  `sem6` int(11) NOT NULL,
  `tyback` varchar(255) NOT NULL,
  `sem7` int(11) NOT NULL,
  `sem8` int(11) NOT NULL,
  `foyback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `engg_info`
--

INSERT INTO `engg_info` (`id`, `sem1`, `sem2`, `fyback`, `sem3`, `sem4`, `syback`, `sem5`, `sem6`, `tyback`, `sem7`, `sem8`, `foyback`) VALUES
(12, 3311, 22111, 'm', 3411, 311, 'm', 211, 111, 'm3,daa,dbms,cao', 211, 1111, 'kk,jsj1'),
(13, 33, 22, 'm', 34, 3, 'm', 2, 1, 'm3,daa,dbms,cao', 2, 11, 'kk,jsj1'),
(14, 33, 22, 'm', 34, 3, 'm', 2, 1, 'm3,daa,dbms,cao', 2, 11, 'kk,jsj1'),
(15, 23, 22111, 'm1', 3411, 3, 'm2', 230, 322, 'lskj,skjh', 23, 168, 'acpl,m4'),
(16, 23, 22111, 'm1', 3411, 3, 'm2', 230, 322, 'lskj,skjh', 23, 168, 'acpl,m4'),
(17, 23, 22111, 'm1', 3411, 3, 'm', 230, 322, 'lskj,skjh', 211, 1111, '5651'),
(18, 23, 333, 'fgh,fghj,g', 34, 324, 'm2', 230, 111, 'm3,daa,dbms,cao', 1, 1111, '5651'),
(19, 23, 333, 'fgh,fghj,g', 34, 324, 'm2', 230, 111, 'm3,daa,dbms,cao', 1, 1111, '5651'),
(20, 23, 22111, 'm1', 3411, 3, 'm', 2, 111, 'm3,daa,dbms,cao', 211, 1111, '5651'),
(21, 23, 333, 'm1', 3411, 3, 'm', 2, 111, 'm3,daa,dbms,cao', 23, 168, 'acpl,m4'),
(22, 23, 333, 'm1', 3411, 3, 'm', 2, 111, 'm3,daa,dbms,cao', 23, 168, 'acpl,m4'),
(23, 23, 333, '23', 34, 324, 'm', 2, 111, 'm3,daa,dbms,cao', 211, 1111, '5651'),
(24, 2331, 223, '23', 34, 324, '451', 1, 1, '561', 1, 11, 'kk,jsj'),
(25, 3, 3, '543', 3, 4, '3', 3, 4, '35', 3, 45, '5'),
(26, 333, 333, 'fgh,fghj,g', 34, 324, 'm2', 230, 111, 'lskj,skjh', 23, 168, 'acpl,m4'),
(27, 32, 32, '23', 23, 32, 'cxv', 23, 2, 'ccc', 23, 23, 'xcv'),
(28, 43, 34, '34', 43, 34, '3443', 34, 34, '34', 34, 43, '34'),
(29, 3, 3, '3', 3, 3, '3', 3, 3, '3', 3, 3, '3');

-- --------------------------------------------------------

--
-- Table structure for table `extra_info`
--

CREATE TABLE `extra_info` (
  `id` int(11) NOT NULL,
  `internship` varchar(255) NOT NULL,
  `ncc` varchar(5) NOT NULL,
  `paperpresentation_details` varchar(255) NOT NULL,
  `project_competition` varchar(255) NOT NULL,
  `edc_camp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `extra_info`
--

INSERT INTO `extra_info` (`id`, `internship`, `ncc`, `paperpresentation_details`, `project_competition`, `edc_camp`) VALUES
(12, 'ffffffffffffffff', 'Yes', 'ffffffff', 'ffffffff', 'fffffffffffff'),
(13, 'ssssqa', 'Yes', 'sadsad', 'sssasdads', 'asdadada'),
(14, 'asdfgh', 'Yes', 'dfgh', 'sdfgh', 'sddddf'),
(15, 'fd', 'Yes', 'g', 'ssss', 'sss'),
(16, 'fd', 'Yes', 'g', 'ssss', 'sss'),
(17, 's', 'Yes', 'dsda', 'dassasad', 'adsasad'),
(18, 'fv', 'No', 'aa', 'sss', 'rr'),
(19, 'fv', 'No', 'aa', 'sss', 'rr'),
(20, 'ff', 'Yes', 'fff', 'fff', 'fff'),
(21, 'qq', 'No', 'qq', 'q', 'q'),
(22, 'qq', 'No', 'qq', 'q', 'q'),
(23, 'qq', 'No', 'qq', 'qqqq', 'qq'),
(24, 'ff', 'No', 'ff', 'qqq', 'fff'),
(25, '3', 'Yes', 'h', 'd', 'f'),
(26, 'fdgdfg', 'Yes', 'dfgdgd', 'gfsdg', 'dggdf'),
(27, 'sdfsd', 'Yes', 'dds', 'd', 'df'),
(28, 'efgvdcvn', 'No', 'fdghfh', 'fgh', 'hgfhhgf'),
(29, '3', 'Yes', 'egdfg', 'gfdg', 'dg');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` bigint(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `category` varchar(100) NOT NULL,
  `caste` varchar(100) NOT NULL,
  `adharno` bigint(20) NOT NULL,
  `bloodgrp` varchar(5) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`id`, `fullname`, `branch`, `address`, `mobile`, `gender`, `email`, `dob`, `category`, `caste`, `adharno`, `bloodgrp`, `image`) VALUES
(12, 'ppppppppppppp', 'Computer Science And Engineering', 'asdcvf', 9999999999, 'FEMALE', 'vaibhavpawade5@gmail.com', '1986-08-01', 'obcWERF', 'kunbiFDSG', 3636374484449944, 'ab+GD', 'upload/aHR0cDovL3d3dy5zcGFjZS5jb20vaW1hZ2VzL2kvMDAwLzA3Ni8wNjgvb3JpZ2luYWwvZ2FueW1lZGUtaW1hZ2UtZnJvbS1nYWxpbGVvLXNwYWNlY3JhZnQtd2lkZS5qcGc=.jpg'),
(13, 'aman', 'Computer Science And Engineering', 'de shattaraka', 7777777777, 'MALE', 'aman@gmail.com', '2018-09-13', 'open', 'wjjjjjjjjjjj', 1234565432234567, 'o+', 'upload/bulb3.jpg'),
(14, 'gaurao', 'Computer Science And Engineering', 'chandrapur', 9448847366, 'FEMALE', 'gaurao@gmail.in', '2004-07-03', 'obc', 'kunbi', 1234565432234567, 'o+', 'upload/J246C7.jpg'),
(15, 'asd', 'Electronics And Telecommunication', 'asd', 9448847366, 'FEMALE', 'vaibhav@gmail.in', '2010-07-09', 'open', 'wjjjjjjjjjjj', 3444444453525443, 'o+', 'upload/'),
(16, 'asd', 'Electronics And Telecommunication', 'asd', 9448847366, 'FEMALE', 'vaibhav@gmail.in', '2010-07-09', 'open', 'wjjjjjjjjjjj', 3444444453525443, 'o+', 'upload/'),
(17, 'sddd', 'Electronics And Telecommunication', 'sa', 6666666666, 'FEMALE', 'sdd@gmail.com', '2015-06-08', 'open', 'wjjjjjjjjjjj', 1234565432234567, 'o+', 'upload/bulb(1).jpg'),
(18, 'Vaibhav Pawade', 'Mechanical Engineering', 'ss', 6666666666, 'FEMALE', 'FVBGF@h', '2016-07-11', 'open', 'wjjjjjjjjjjj', 1234565432234567, 'o+', 'upload/bulb(1).jpg'),
(19, 'Vaibhav Pawade', 'Computer Science And Engineering', 'fgb', 6666666666, 'FEMALE', '', '2016-07-11', 'open', 'wjjjjjjjjjjj', 1234565432234567, 'o+', 'upload/android.png'),
(20, 'Vaibhav Pawade', 'Computer Science And Engineering', 'qqq', 6666666666, 'FEMALE', '', '2017-09-04', 'obc', 'wjjjjjjjjjjj', 1234565432234567, 'o+', 'upload/bulb(1).jpg'),
(21, 'vaibhav', 'Mechanical Engineering', 'mk', 6666666666, 'MALE', '', '2016-07-11', 'obc', 'kunbi', 1234565432234567, 'o+', 'upload/android.png'),
(22, 'vaibhav', 'Mechanical Engineering', 'mk', 6666666666, 'MALE', '', '2016-07-11', 'obc', 'kunbi', 1234565432234567, 'o+', 'upload/android.png'),
(23, 'vaibhav', 'Electrical Engineering', 'll', 6666666666, 'FEMALE', '', '2009-06-10', 'open', 'wjjjjjjjjjjj', 1111111111111111, 'b+', 'upload/android.png'),
(24, 'abc', 'Mechanical Engineering', 'sss', 6666666666, 'MALE', 'abc@gmail.in', '1997-06-30', 'open', 'wjjjjjjjjjjj', 1234565432234567, 'o+', 'upload/bulb(1).jpg'),
(25, 'd', 'Computer Science And Engineering', 'sfgfsdf', 4366666666, 'MALE', 'd@gmail.com', '2018-10-23', 'fg', 'dgd', 456255555555, 'rt', 'upload/PHOTO JEE.jpg'),
(26, 'f', 'Electrical Engineering', 'dfs', 5432545254, 'MALE', 'f@gmail.com', '2018-10-23', 'egffd', 'dsfgs', 5436423414444444, 'ds', 'upload/tma^nb^n.png'),
(27, 'dfsd', 'Electronics And Telecommunication', 'sdffsdfdsa', 2335423435, 'MALE', 'e@gmail.com', '1999-05-11', 'dsafsf', 'sdfsadf', 111111111111, 'sfsfs', 'upload/startup-survival-rules.png'),
(28, 'g', 'Electronics And Telecommunication', 'sdv', 3245244235, 'MALE', 'g@gmail.in', '0034-03-05', 'sdfdsf', 'fdsfsdf', 2134433131, 'df', 'upload/J246C7.jpg'),
(29, 'nidhi', 'Computer Science And Engineering', 'swf', 3544345335, 'MALE', 'nidhi@gmail.com', '2018-10-16', 'dsf', 'sfgf', 423523543543543, 'dfvbs', 'upload/ab5398cf5eee70433c1fe2cd7ff299e7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `preacademic_info`
--

CREATE TABLE `preacademic_info` (
  `id` int(11) NOT NULL,
  `ssctm` int(5) NOT NULL,
  `sscom` int(5) NOT NULL,
  `sscp` int(5) NOT NULL,
  `hsctm` int(5) NOT NULL,
  `hscom` int(5) NOT NULL,
  `hscp` int(5) NOT NULL,
  `mhtcettm` int(5) NOT NULL,
  `mhtcetom` int(5) NOT NULL,
  `jeetm` int(5) NOT NULL,
  `jeeom` int(5) NOT NULL,
  `polytm` int(11) NOT NULL,
  `polyom` int(11) NOT NULL,
  `polyp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `preacademic_info`
--

INSERT INTO `preacademic_info` (`id`, `ssctm`, `sscom`, `sscp`, `hsctm`, `hscom`, `hscp`, `mhtcettm`, `mhtcetom`, `jeetm`, `jeeom`, `polytm`, `polyom`, `polyp`) VALUES
(12, 1311, 14511, 5011, 1311, 111, 1111, 1411, 1011, 3411, 1411, 0, 0, 0),
(13, 13, 145, 50, 13, 1, 11, 14, 10, 34, 14, 0, 0, 0),
(14, 13, 145, 50, 13, 1, 11, 14, 10, 34, 14, 0, 0, 0),
(15, 1311, 231, 23, 360, 56, 89, 144, 444, 444, 44, 0, 0, 0),
(16, 1311, 231, 23, 360, 56, 89, 144, 444, 444, 44, 0, 0, 0),
(17, 1311, 23, 50, 369, 159, 22, 44, 444, 444, 44, 0, 0, 0),
(18, 1311, 231, 50, 369, 159, 22, 200, 444, 444, 44, 0, 0, 0),
(19, 1311, 231, 50, 369, 1, 11, 44, 10, 34, 44, 0, 0, 0),
(20, 1311, 231, 50, 369, 159, 11, 200, 1011, 444, 44, 0, 0, 0),
(21, 1311, 231, 50, 360, 56, 89, 144, 444, 444, 44, 0, 0, 0),
(22, 1311, 231, 50, 360, 56, 89, 144, 444, 444, 44, 0, 0, 0),
(23, 1311, 145, 1150, 13, 111, 1111, 200, 1011, 444, 44, 0, 0, 0),
(24, 1311, 23, 23, 369, 1, 1111, 200, 1011, 34, 14, 0, 0, 0),
(25, 4, 3, 34, 35, 3, 3, 53, 43, 35, 4, 0, 0, 0),
(26, 34, 231, 23, 360, 56, 89, 144, 244, 344, 144, 0, 0, 0),
(27, 13, 231, 32, 23, 23, 32, 32, 32, 23, 23, 0, 0, 0),
(28, 433, 34, 34, 34, 34, 43, 43, 43, 43, 43, 0, 0, 0),
(29, 343, 34, 34, 360, 3, 3, 3, 3, 3, 3, 32, 432, 34232);

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`id`, `name`, `password`, `email`) VALUES
(5, 'vaibhav', 'xxx', 'vaibhavpawade5@gmail.com'),
(6, 'aman', 'aaa', 'aman@gmail.com'),
(7, 'gaurao', 'aaa', 'gaurao@gmail.in'),
(8, 'asd', 'zzz', 'asd@gmail.com'),
(9, 'sdd', 'zzz', 'sdd@gmail.com'),
(10, 'sgf', 'zzz', 'fgfdnh@gmail.in'),
(11, 'ba', 'aaa', 'ba@gmail.com'),
(12, 'vaibhav pawade', 'zzz', 'vaibhav@yahoo.in'),
(13, 'aman', 'zzz', 'aman@yahoo.in'),
(14, 'abc', 'aaa', 'abc@gmail.in'),
(15, 'd', '40fa37ec00c761c7dbb6ebdee6d4a260b922f5f4', 'd@gmail.com'),
(16, 'e', '40fa37ec00c761c7dbb6ebdee6d4a260b922f5f4', 'e@gmail.com'),
(19, 'aasa', '40fa37ec00c761c7dbb6ebdee6d4a260b922f5f4', 'ad@gmail.in'),
(20, 'sd', '7e240de74fb1ed08fa08d38063f6a6a91462a815', 'aman@gmail.in'),
(23, 'g', '7e240de74fb1ed08fa08d38063f6a6a91462a815', 'g@gmail.in'),
(24, 'h', '40fa37ec00c761c7dbb6ebdee6d4a260b922f5f4', 'h@gmail.com'),
(25, 'i', '40fa37ec00c761c7dbb6ebdee6d4a260b922f5f4', 'i@gmail.com'),
(32, 'f', '7e240de74fb1ed08fa08d38063f6a6a91462a815', 'f@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `engg_info`
--
ALTER TABLE `engg_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extra_info`
--
ALTER TABLE `extra_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preacademic_info`
--
ALTER TABLE `preacademic_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `engg_info`
--
ALTER TABLE `engg_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `extra_info`
--
ALTER TABLE `extra_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `preacademic_info`
--
ALTER TABLE `preacademic_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
