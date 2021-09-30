-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2021 at 04:58 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id` int(11) NOT NULL,
  `nama_pengunjung` varchar(200) NOT NULL,
  `alamat_pengunjung` varchar(200) NOT NULL,
  `nm_tmptwisata` varchar(200) NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id`, `nama_pengunjung`, `alamat_pengunjung`, `nm_tmptwisata`, `saran`) VALUES
(5, 'resiaa', 'madiun', 'Pinus Nongko Ijo', 'Terdapat sampah yang menumpuk disekitar pedagang, jadi sesekali tercium bau tidak sedap dari sampah yang menumpuk tersebut. saran saya pedagang dihimbau untuk lebih menjaga kebersihan disekitar barang jualannya'),
(7, 'Jay', 'Kediri', 'Watu Rumpuk', 'Terdapat sampah yang menumpuk disekitar pedagang, jadi sesekali tercium bau tidak sedap dari sampah yang menumpuk tersebut. saran saya pedagang dihimbau untuk lebih menjaga kebersihan disekitar barang jualannya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
