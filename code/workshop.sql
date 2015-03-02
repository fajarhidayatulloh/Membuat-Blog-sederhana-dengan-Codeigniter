-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2015 at 09:41 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `workshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
`id_artikel` int(11) NOT NULL,
  `artikel_title` varchar(250) NOT NULL,
  `artikel_isi` text NOT NULL,
  `katagori` varchar(250) NOT NULL,
  `dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `artikel_title`, `artikel_isi`, `katagori`, `dibuat`) VALUES
(8, 'Hello World', 'Hello World', 'ada', '2015-01-17 07:50:34'),
(9, 'coba', 'coba', 'php', '2015-01-18 03:39:40'),
(10, 'Percabangan dan Perulangan Pada PHP', 'Menjadi seorang programmer handal tidak harus menempuh pendidikan khusus dibidang Ilmu Komputer. Itulah yang dibuktikan oleh Luri Darmawan, seorang ahli IT yang merupakan lulusan S1 Fisika di Universitas Diponegoro Semarang. Beliau mendapatkan penguasaan IT karena rajin mengikuti kegiatan-kegiatan dari berbagai komunitas serta berguru pada programmer-programmer lainnya.\r\n\r\nMeskipun menempuh pendidikan S1 dijurusan Fisika, Luri Darmawan ternyata telah tertarik memprogram sejak remaja. Berbagai bahasa telah dipelajari oleh pria kelahiran Semarang ini diantaranya  ialah Assembly, Delphi/Pascal, C, Java dan tentu saja PHP. Selain bahasa pemrograman, beberapa aplikasi database juga telah dikuasai seperti MySQL, PostreSQL, dan MsSQL.', 'php', '2015-01-19 15:59:43'),
(11, 'Catatan Rilis AngularJS 1.3.8 dan 1.2.28', 'AngularJS merupakan javascript framework yang dikembangkan oleh Misko Hevery, seorang informatic engineer dari Google, untuk membangun single page application. AngularJS merilis dua versi baru, pada 19 Desember 2014 dirilis versi 1.3.8 (Prophetic Narhwal) dan pada 15 Desember 2014 dirilis versi 1.2.28 (Finnish Disembarkation). Berikut adalah perubahan yang terdapat di versi 1.3.8 (Prophetic Narwhal):\r\n\r\nPerbaikan Bug\r\nfilterFilter: membuat $ dapat mencari properti yang cocok di tingkat dalam (bd28c74c,\r\n#10401)\r\nfilterFilter: membuat expression object cocok dengan primitive items* (bd28c74c,\r\n#10401)\r\nngAria: trigger digest pada ng-click melalui keypress melewaktkan $event ke expression (924e68c7,\r\n#10442, #10443, #10447)\r\norderBy: membandingkan timestamps ketika melakukan pengurutan objek date (661f6d9e,\r\n#10512, #10516)\r\nPeningkatan Performa\r\nlimitTo: mengganti for loop dengan slice (cd77c089)', 'php', '2015-01-20 00:53:23'),
(12, 'ini judul', 'ini judul', 'php', '2015-02-23 10:52:50');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `entry` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `email`, `entry`) VALUES
(4, 'Fajar Hidayatulloh', 'fajar', 'marlina', 'fajarhidayatulloh06@gmail.com', '2015-01-12 17:00:00'),
(8, 'Respati tri susetyo', 'respati', '3d9d1c5a0581ee8b65f08551a59c40bf', 'respati@gmail.com', '2015-01-12 17:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
 ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
