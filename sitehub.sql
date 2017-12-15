-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 15, 2017 at 04:52 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sitehub`
--

-- --------------------------------------------------------

--
-- Table structure for table `banking`
--

CREATE TABLE `banking` (
  `bnkid` int(4) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banking`
--

INSERT INTO `banking` (`bnkid`, `Name`, `link`) VALUES
(1, 'logo/allahabad.jpg', 'https://www.allahabadbank.in'),
(2, 'logo/axis.jpeg', 'https://www.axisbank.com/'),
(3, 'logo/bob.gif', 'http://www.bankofbaroda.co.in/'),
(4, 'logo/cnra.jpg', 'http://www.canarabank.com'),
(5, 'logo/icic.jpg', 'https://www.icicibank.com/'),
(6, 'logo/pnb.jpg', 'https://www.pnbindia.in/'),
(7, 'logo/sbi.jpg', 'https://www.sbi.co.in/'),
(8, 'logo/syndicate.jpg', 'https://www.syndicatebank.in'),
(9, 'logo/ubi.jpg', 'https://www.unionbankonline.co.in/'),
(10, 'logo/yes.jpg', 'https://www.yesbank.in/');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `cid` int(4) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`cid`, `Name`, `link`) VALUES
(1, 'Private', ''),
(2, 'Government', ''),
(3, 'Semi Government', '');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `cid` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cid`, `Email`, `date`, `msg`) VALUES
(1, 'laltusingh@gmail.com', '17-07-06 09:32:58', 'hlo'),
(2, 'laltusingh@gmail.com', '17-07-06 10:35:31', 'kjferiongcfucmioejfioejfce4\r\nlfkjero fioejkenvjeoipjeovc\r\nf ncwdfhiofhocmfcklmqnon'),
(3, 'mno@gmail.com', '17-08-20 06:56:30', 'Hello .....  ');

-- --------------------------------------------------------

--
-- Table structure for table `educational`
--

CREATE TABLE `educational` (
  `eid` int(4) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educational`
--

INSERT INTO `educational` (`eid`, `Name`, `link`) VALUES
(1, 'logo/gfg.png', 'http://www.geeksforgeeks.org/'),
(2, 'logo/tuto.png', 'https://www.tutorialspoint.com/'),
(3, 'logo/hackerrank.jpg', 'https://www.hackerrank.com/'),
(4, 'logo/LeetCode.png', 'https://leetcode.com/'),
(5, 'logo/interviewbit.jpg', 'https://www.interviewbit.com/'),
(6, 'logo/stonight.png', 'http://www.studytonight.com/'),
(7, 'logo/w3school.jpg', 'https://www.w3schools.com/');

-- --------------------------------------------------------

--
-- Table structure for table `entertainment`
--

CREATE TABLE `entertainment` (
  `Eid` int(4) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entertainment`
--

INSERT INTO `entertainment` (`Eid`, `Name`) VALUES
(1, 'logo/Movies_logo.gif'),
(2, 'logo/video-logo.png'),
(3, 'logo/music.png');

-- --------------------------------------------------------

--
-- Table structure for table `entertainment_type`
--

CREATE TABLE `entertainment_type` (
  `entid` int(4) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entertainment_type`
--

INSERT INTO `entertainment_type` (`entid`, `name`, `type`, `link`) VALUES
(1, 'MyDownloadTube.com', 'Movies', 'https://MyDownloadTube.com'),
(2, 'WorldFree4U.lol', 'Movies', 'https://WorldFree4U.lol'),
(3, '300MBMovies4U.net', 'Movies', 'https://300MBMovies4U.net'),
(4, 'DivxCrawler.tv', 'Movies', 'https://DivxCrawler.tv'),
(5, 'HDMoviesPoint.info', 'Movies', 'https://HDMoviesPoint.info'),
(6, 'FreeMovieDownloads6.com', 'Movies', 'https://FreeMovieDownloads6.com'),
(7, 'HDMoviesMP4.org', 'Movies', 'https://HDMoviesMP4.org'),
(8, 'funmaza.in', 'Videos', 'https://www.funmaza.in/'),
(9, 'youtube', 'Videos', 'https://www.youtube.com/'),
(10, 'video9.in', 'Videos', 'http://www.video9.in'),
(11, 'videoming.in', 'Videos', 'http://www.videoming.in'),
(12, 'mobmp4.com', 'Videos', 'http://www.mobmp4.com'),
(13, 'imdb.com', 'Movies', 'https://www.imdb.com/'),
(14, 'GoogleMusic', 'Music', 'https://play.google.com/store/music'),
(15, 'gaana.com', 'Music', 'http://gaana.com/'),
(16, 'funmaza.in', 'Music', 'https://www.funmaza.in/songs/bollywood-songs'),
(17, 'wapking.live', 'Music', 'http://wapking.live/'),
(18, 'songspk.io', 'Music', 'https://songspk.io/'),
(19, 'SavanMusic', 'Music', 'https://www.saavn.com/');

-- --------------------------------------------------------

--
-- Table structure for table `government`
--

CREATE TABLE `government` (
  `c_id` int(4) NOT NULL,
  `name` varchar(200) NOT NULL,
  `type` varchar(50) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `government`
--

INSERT INTO `government` (`c_id`, `name`, `type`, `link`) VALUES
(1, 'Government College of Engineering & Research, Pune', 'engineering', 'http://www.gcoeara.ac.in/'),
(2, 'Jadhavpur university', 'Engineering', 'http://www.jaduniv.edu.in/'),
(3, 'Government College Of Engineering, Aurangabaad', 'engineering', 'http://geca.ac.in/'),
(4, 'JNTUH College of Engineering Hyderabad (Autonomous)', 'engineering', 'http://www.jntuhceh.ac.in/');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hid` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Names` varchar(100) NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hid`, `Name`, `Names`, `link`) VALUES
(1, 'logo/New-Delhi.jpg', 'Apollo', 'https://www.apollohospitals.com/'),
(2, 'logo/maharashtra.jpg', 'Billroth Hospitals', 'http://www.billrothhospitals.com/'),
(3, 'logo/AP.jpeg', 'Care Hospitals', 'http://www.carehospitals.com/'),
(4, 'logo/bihar.jpg', 'Shalby Hospitals', 'http://shalby.org/'),
(5, 'logo/jharkhand.jpg', 'Indira Gandhi Institute of Medical Sciences', 'http://www.igims.org'),
(6, 'logo/Punjab.jpg', 'AIIMS', 'http://aiimspatna.org/'),
(7, 'logo/rajasthan.jpg', 'Sunrise Hospital & Medical Center', 'http://sunrisehospital.com/'),
(8, 'logo/up.cms', 'Cloudnine Hospitals', 'http://cloudninecare.com'),
(9, 'logo/west-bengal.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `Hid` int(4) NOT NULL,
  `name` varchar(150) NOT NULL,
  `state` varchar(100) NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`Hid`, `name`, `state`, `link`) VALUES
(1, 'Apollo Hospitals, Visakhapatnam', 'Andhra Pradesh', 'http://www.apollovizag.com/'),
(2, 'L. V. Prasad Eye Institute', 'Andhra Pradesh', 'http://www.lvpei.org/'),
(3, 'Sri Venkateswara Institute of Medical Sciences (SVIMS)', 'Andhra Pradesh', 'http://svimstpt.ap.nic.in/'),
(4, 'Silchar Medical College and Hospital', 'Assam', 'http://smcassam.gov.in/'),
(5, 'Assam Medical College and Hospital', 'Assam', 'http://www.assammedicalcollege.in'),
(6, 'Gauhati Medical College and Hospital', 'Assam', 'http://gmchassam.gov.in/'),
(7, 'AIIMS Patna', 'Bihar', 'http://aiimspatna.org/'),
(8, 'Patna Medical College Hospital(PMCH)\r\n', 'Bihar', 'http://patnamedicalcollege.com'),
(9, 'Indira Gandhi Institute of Medical Sciences', 'Bihar', 'http://www.igims.org'),
(10, 'Mahavir Cancer Institute and Research Centre', 'Bihar', 'http://www.mahavircancersansthan.com/'),
(11, 'Nalanda Medical College Hospital(NMCH)', 'Bihar', 'http://nmchpatna.org/'),
(12, 'Sri Krishna Medical College, Muzaffarpur', 'Bihar', 'http://www.skmedicalcollege.in/'),
(13, 'Katihar Medical College', 'Bihar', 'http://www.kmckatihar.org/'),
(14, 'Anugrah Narayan Magadh Medical College and Hospital, Gaya', 'Bihar', 'http://anmmc.bih.nic.in'),
(15, 'Jawaharlal Nehru Medical College and Hospital, Bhagalpur', 'Bihar', 'http://www.jlnmcbgp.org/'),
(16, 'AIIMS', 'New Delhi', 'http://www.aiims.edu/'),
(17, 'Sunrise Hospital & Medical Center, Kalindi colony', 'New Delhi', 'http://sunrisehospital.com/'),
(18, 'Cloudnine Hospitals, Gurgaon, Haryana', 'New Delhi', 'http://www.cloudninecare.com/'),
(19, 'Dharamshila Cancer Hospital and Research Centre', 'New Delhi', 'http://www.dhrc.in/'),
(20, 'Fortis Hospital, Gurgaon', 'New Delhi', 'http://www.fortishealthcare.com/'),
(21, 'Medanta Hospital, Ranchi', 'Jharkhand', 'http://www.medanta.org/');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `nid` int(3) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`nid`, `Name`, `link`) VALUES
(1, 'logo/toi.png', 'http://timesofindia.indiatimes.com/'),
(2, 'logo/ht.jpg', 'http://www.hindustantimes.com/'),
(3, 'logo/th.jpg', 'http://www.thehindu.com/'),
(5, 'logo/ie.png', 'http://indianexpress.com/'),
(6, 'logo/teli.png', 'https://www.telegraphindia.com/');

-- --------------------------------------------------------

--
-- Table structure for table `private`
--

CREATE TABLE `private` (
  `c_id` int(4) NOT NULL,
  `name` varchar(200) NOT NULL,
  `type` varchar(50) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `private`
--

INSERT INTO `private` (`c_id`, `name`, `type`, `link`) VALUES
(1, 'Birla Institute Of Technology,Mesra(Ranchi)', 'engineering', 'https://www.bitmesra.ac.in/'),
(2, 'BITS,Pilani', 'engineering', 'http://www.bits-pilani.ac.in/'),
(3, 'VIT university', 'engineering', 'www.vit.ac.in'),
(4, 'IIIT Hyderabad', 'engineering', 'https://www.iiit.ac.in');

-- --------------------------------------------------------

--
-- Table structure for table `shopping`
--

CREATE TABLE `shopping` (
  `sid` int(3) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopping`
--

INSERT INTO `shopping` (`sid`, `Name`, `link`) VALUES
(1, 'logo/amazon.png', 'http://www.amazon.in/'),
(2, 'logo/flipkart.jpg', 'https://www.flipkart.com/'),
(3, 'logo/snapdeal.jpg', 'https://www.snapdeal.com'),
(4, 'logo/Jabong.jpg', 'https://www.jabong.com'),
(5, 'logo/myntra.jpg', 'https://www.myntra.com/'),
(6, 'logo/ebay.jpg', 'https://www.ebay.in/');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(6) NOT NULL,
  `first` varchar(50) NOT NULL,
  `last` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first`, `last`, `Email`, `pwd`) VALUES
(11, 'Suryanand', 'Singh', 'singhsuryanand@gmail.com', '$2y$10$tOC9PbZFdDmqF'),
(12, 'abcd', 'abcd', 'abcd@gmail.com', '$2y$10$z/Xt0Fr9emdwH'),
(13, 'mno', 'mno', 'mno@gmail.com', '12345678'),
(14, 'laltu', 'singh', 'laltusingh@gmail.com', '12345678'),
(15, 'hlo', 'ram', 'hlo@gmail.com', '25d55ad283aa400af464'),
(16, '', 'jckhDKJFk', 'nfwnfhqw@mail.com', 'f3c46bba1473ea802df6'),
(17, 'jsfdjas', 'khgyi', 'khgirei@gmail.com', '8bcb1fa52dcd7e301423');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banking`
--
ALTER TABLE `banking`
  ADD PRIMARY KEY (`bnkid`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `educational`
--
ALTER TABLE `educational`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `entertainment`
--
ALTER TABLE `entertainment`
  ADD PRIMARY KEY (`Eid`);

--
-- Indexes for table `entertainment_type`
--
ALTER TABLE `entertainment_type`
  ADD PRIMARY KEY (`entid`);

--
-- Indexes for table `government`
--
ALTER TABLE `government`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`Hid`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `private`
--
ALTER TABLE `private`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `shopping`
--
ALTER TABLE `shopping`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banking`
--
ALTER TABLE `banking`
  MODIFY `bnkid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `cid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `educational`
--
ALTER TABLE `educational`
  MODIFY `eid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `entertainment`
--
ALTER TABLE `entertainment`
  MODIFY `Eid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `entertainment_type`
--
ALTER TABLE `entertainment_type`
  MODIFY `entid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `government`
--
ALTER TABLE `government`
  MODIFY `c_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `Hid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `nid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `private`
--
ALTER TABLE `private`
  MODIFY `c_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shopping`
--
ALTER TABLE `shopping`
  MODIFY `sid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
