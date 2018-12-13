-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2018 at 01:10 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `admin_name` varchar(150) NOT NULL,
  `admin_pass` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `admin_name`, `admin_pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(120) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `deskripsi_berita` text NOT NULL,
  `img_berita` varchar(255) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `deskripsi_berita`, `img_berita`, `tanggal`) VALUES
(32, 'ggg', '<p>&nbsp;Internet-related services and products, which include online advertising technologies, search engine, cloud computing, software, and hardware</p>', '_didOnxQ.jpg', '2018-12-02 06:04:51'),
(35, 'kk', '<p>&nbsp;Internet-related services and products, which include online advertising technologies, search engine, cloud computing, software, and hardware</p>', '_didOnxQ.jpg', '2018-12-02 06:37:53'),
(36, 'hh', '<p>&nbsp;Internet-related services and products, which include online advertising technologies, search engine, cloud computing, software, and hardware</p>', '_didOnxQ.jpg', '2018-12-02 06:38:20'),
(37, 'kk', '<p>&nbsp;Internet-related services and products, which include online advertising technologies, search engine, cloud computing, software, and hardware</p>', '_didOnxQ.jpg', '2018-12-02 06:38:39'),
(39, 'pp', '<p>&nbsp;Internet-related services and products, which include online advertising technologies, search engine, cloud computing, software, and hardware</p>', 'Bijuu_Mode.png', '2018-12-02 06:58:27'),
(40, 'wasd', '<p>hjgsadashdjmandmnahdiuwhdqkjdhiqdjaksjdkjawu</p>', '_didOnxQ.jpg', '2018-12-03 05:06:16'),
(41, 'wad', '<p>The <strong>Dynamic Host Configuration Protocol</strong> (<strong>DHCP</strong>) is a <a class=\"mw-redirect\" title=\"Network protocol\" href=\"https://en.wikipedia.org/wiki/Network_protocol\">network management protocol</a> used on <a class=\"mw-redirect\" title=\"UDP/IP\" href=\"https://en.wikipedia.org/wiki/UDP/IP\">UDP/IP</a> networks whereby a DHCP server dynamically assigns an <a title=\"IP address\" href=\"https://en.wikipedia.org/wiki/IP_address\">IP address</a> and other network configuration parameters to each device on a network so they can communicate with other IP networks.<sup id=\"cite_ref-TechTarget_1-0\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Dynamic_Host_Configuration_Protocol#cite_note-TechTarget-1\">[1]</a></sup> A DHCP server enables computers to request IP addresses and networking parameters automatically from the <a title=\"Internet service provider\" href=\"https://en.wikipedia.org/wiki/Internet_service_provider\">Internet service provider</a> (ISP), reducing the need for a <a title=\"Network administrator\" href=\"https://en.wikipedia.org/wiki/Network_administrator\">network administrator</a> or a user to manually assign IP addresses to all network devices.<sup id=\"cite_ref-TechTarget_1-1\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Dynamic_Host_Configuration_Protocol#cite_note-TechTarget-1\">[1]</a></sup> In the absence of a DHCP server, a computer or other device on the network needs to be manually assigned an IP address, or to assign itself an <a class=\"mw-redirect\" title=\"APIPA\" href=\"https://en.wikipedia.org/wiki/APIPA\">APIPA</a> address, which will not enable it to communicate outside its local subnet.</p>', '_didOnxQ.jpg', '2018-12-03 05:07:57');

-- --------------------------------------------------------

--
-- Table structure for table `forum_balas_komentar`
--

CREATE TABLE `forum_balas_komentar` (
  `id_balas_komentar` int(100) NOT NULL,
  `id_komentar` int(100) NOT NULL,
  `id_topic` int(100) NOT NULL,
  `Username` varchar(225) NOT NULL,
  `deskripsi_balas_komentar` text NOT NULL,
  `waktu_balas_komentar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_balas_komentar`
--

INSERT INTO `forum_balas_komentar` (`id_balas_komentar`, `id_komentar`, `id_topic`, `Username`, `deskripsi_balas_komentar`, `waktu_balas_komentar`) VALUES
(16, 0, 2, 'rt', '', '2018-12-05 02:28:06'),
(17, 0, 2, 'rt', '', '2018-12-05 02:40:32');

-- --------------------------------------------------------

--
-- Table structure for table `forum_komentar`
--

CREATE TABLE `forum_komentar` (
  `id_komentar` int(100) NOT NULL,
  `id_topic` int(100) NOT NULL,
  `Username` varchar(225) NOT NULL,
  `deskripsi_komentar` text NOT NULL,
  `waktu_komentar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_komentar`
--

INSERT INTO `forum_komentar` (`id_komentar`, `id_topic`, `Username`, `deskripsi_komentar`, `waktu_komentar`) VALUES
(45, 2, 'rt', 'bla', '2018-12-02 16:36:18'),
(46, 2, 'rw', 'hai', '2018-12-02 16:38:32'),
(51, 2, 'rw', 'hello', '2018-12-02 17:21:57'),
(52, 2, 'rt', 'apa', '2018-12-02 17:22:25'),
(53, 2, 'wasd', 'hai', '2018-12-03 04:10:48'),
(54, 2, 'rt', 'hola', '2018-12-05 01:18:38'),
(60, 2, 'rt', 'sawadikap', '2018-12-05 02:40:32');

-- --------------------------------------------------------

--
-- Table structure for table `forum_topic`
--

CREATE TABLE `forum_topic` (
  `id_topic` int(100) NOT NULL,
  `judul_topic` varchar(225) NOT NULL,
  `Username` varchar(225) NOT NULL,
  `deskripsi_topic` text NOT NULL,
  `waktu_topic` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_topic`
--

INSERT INTO `forum_topic` (`id_topic`, `judul_topic`, `Username`, `deskripsi_topic`, `waktu_topic`) VALUES
(2, 'Bahasa Inggris', 'rt', 'apa itu \" what are you ?? \"', '2018-12-02 15:39:42'),
(3, 'bahasa jepang', 'wasd', 'arigatou', '2018-12-03 04:12:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id_user` int(100) NOT NULL,
  `Username` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `NIM` int(7) NOT NULL,
  `Img_user` varchar(150) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `Divisi` varchar(150) NOT NULL,
  `Jurusan` varchar(150) NOT NULL,
  `Angkatan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id_user`, `Username`, `Email`, `NIM`, `Img_user`, `Gender`, `Password`, `Divisi`, `Jurusan`, `Angkatan`) VALUES
(12, 'rt', 'rt@gmail.com', 1223456, '', 'Female', '123', 'Divisi Jepang', 'Teknik Pendingin dan Tata Udara', '2018'),
(13, 'rw', 'rw@gmail.com', 179372, '', 'Male', '123', 'Divisi Jepang', 'Teknik Mesin', '2018'),
(14, 'wasd', 'wasd@gmail.com', 1233, '', 'Male', '123', 'Divisi Inggris', 'Teknik Rekayasa Perangkat Lunak', '2018');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `forum_balas_komentar`
--
ALTER TABLE `forum_balas_komentar`
  ADD PRIMARY KEY (`id_balas_komentar`);

--
-- Indexes for table `forum_komentar`
--
ALTER TABLE `forum_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `forum_topic`
--
ALTER TABLE `forum_topic`
  ADD PRIMARY KEY (`id_topic`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `Username` (`Username`,`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `forum_balas_komentar`
--
ALTER TABLE `forum_balas_komentar`
  MODIFY `id_balas_komentar` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `forum_komentar`
--
ALTER TABLE `forum_komentar`
  MODIFY `id_komentar` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `forum_topic`
--
ALTER TABLE `forum_topic`
  MODIFY `id_topic` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
