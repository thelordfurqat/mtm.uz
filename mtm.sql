-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 16, 2019 at 08:22 AM
-- Server version: 5.7.16
-- PHP Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mtm`
--

-- --------------------------------------------------------

--
-- Table structure for table `bola`
--

CREATE TABLE `bola` (
  `id` int(11) NOT NULL,
  `fio` varchar(255) NOT NULL,
  `tugilgan_vaqti` date DEFAULT NULL,
  `guvohnoma_raqami` varchar(255) DEFAULT NULL,
  `otasi` varchar(255) DEFAULT NULL,
  `ota_pass` varchar(255) DEFAULT NULL,
  `ota_tel` varchar(255) DEFAULT NULL,
  `onasi` varchar(255) DEFAULT NULL,
  `ona_pass` varchar(255) DEFAULT NULL,
  `ona_tel` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `guruh_id` int(11) NOT NULL,
  `kelgan_vaqti` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bola`
--

INSERT INTO `bola` (`id`, `fio`, `tugilgan_vaqti`, `guvohnoma_raqami`, `otasi`, `ota_pass`, `ota_tel`, `onasi`, `ona_pass`, `ona_tel`, `phone`, `guruh_id`, `kelgan_vaqti`, `status`) VALUES
(1, 'Ahmedjanov Muhammad', '2012-12-12', 'AA3211231', 'Otasi', 'Otasiniki', 'otasiniki', 'Onasi', 'aytimman', 'aytimman', 'Yo\'q', 1, '2015-09-01', 'Qabul qilingan');

-- --------------------------------------------------------

--
-- Table structure for table `guruh`
--

CREATE TABLE `guruh` (
  `id` int(11) NOT NULL,
  `nomi` varchar(255) NOT NULL,
  `ishchi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `guruh`
--

INSERT INTO `guruh` (`id`, `nomi`, `ishchi_id`) VALUES
(1, '913-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ishchi`
--

CREATE TABLE `ishchi` (
  `id` int(11) NOT NULL,
  `fio` varchar(255) NOT NULL,
  `lavozim` varchar(255) NOT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `passport` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ishchi`
--

INSERT INTO `ishchi` (`id`, `fio`, `lavozim`, `tel`, `passport`) VALUES
(1, 'Ahmedjanov Muhammad', 'Tarbiyachi', 'asd', 'ad');

-- --------------------------------------------------------

--
-- Table structure for table `jihoz`
--

CREATE TABLE `jihoz` (
  `id` int(11) NOT NULL,
  `nomi` varchar(255) NOT NULL,
  `ishchi_id` int(11) NOT NULL,
  `cnt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jihoz`
--

INSERT INTO `jihoz` (`id`, `nomi`, `ishchi_id`, `cnt`) VALUES
(1, 'Kursi', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tolov`
--

CREATE TABLE `tolov` (
  `id` int(11) NOT NULL,
  `bola_id` int(11) NOT NULL,
  `tolov` int(11) NOT NULL,
  `sana` date NOT NULL,
  `vaqt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tolov`
--

INSERT INTO `tolov` (`id`, `bola_id`, `tolov`, `sana`, `vaqt`) VALUES
(1, 1, 321123, '2015-02-01', '2019-06-15 06:07:24');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fio` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `authKey` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fio`, `username`, `password`, `image`, `authKey`) VALUES
(1, 'Ahmedjanov Muhammad', 'admin', '$2y$13$njwKkCTwW6AWitYq0bqkEeGduEZnckX1TvUf8346AtcFyTg3bb4nS', '2019-06-15-09 30 39.jfif', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bola`
--
ALTER TABLE `bola`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guruh_id` (`guruh_id`);

--
-- Indexes for table `guruh`
--
ALTER TABLE `guruh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ishchi_id` (`ishchi_id`);

--
-- Indexes for table `ishchi`
--
ALTER TABLE `ishchi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jihoz`
--
ALTER TABLE `jihoz`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ishchi_id` (`ishchi_id`);

--
-- Indexes for table `tolov`
--
ALTER TABLE `tolov`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bola_id` (`bola_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bola`
--
ALTER TABLE `bola`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `guruh`
--
ALTER TABLE `guruh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ishchi`
--
ALTER TABLE `ishchi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jihoz`
--
ALTER TABLE `jihoz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tolov`
--
ALTER TABLE `tolov`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bola`
--
ALTER TABLE `bola`
  ADD CONSTRAINT `bola_ibfk_1` FOREIGN KEY (`guruh_id`) REFERENCES `guruh` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `guruh`
--
ALTER TABLE `guruh`
  ADD CONSTRAINT `guruh_ibfk_1` FOREIGN KEY (`ishchi_id`) REFERENCES `ishchi` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `jihoz`
--
ALTER TABLE `jihoz`
  ADD CONSTRAINT `jihoz_ibfk_1` FOREIGN KEY (`ishchi_id`) REFERENCES `ishchi` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tolov`
--
ALTER TABLE `tolov`
  ADD CONSTRAINT `tolov_ibfk_1` FOREIGN KEY (`bola_id`) REFERENCES `bola` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
