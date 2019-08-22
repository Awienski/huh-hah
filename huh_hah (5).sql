-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 24, 2019 at 06:22 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `huh_hah`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangjual`
--

CREATE TABLE `barangjual` (
  `id_barangjual` int(10) NOT NULL,
  `hidangan_id` int(8) NOT NULL,
  `id_supplier` int(10) DEFAULT NULL,
  `nama_barangjual` varchar(50) NOT NULL,
  `harga_jual` int(10) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `stok` int(20) NOT NULL,
  `is_available` int(8) NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barangjual`
--

INSERT INTO `barangjual` (`id_barangjual`, `hidangan_id`, `id_supplier`, `nama_barangjual`, `harga_jual`, `keterangan`, `stok`, `is_available`, `image`) VALUES
(109, 0, 22, 'Tenda eiger', 799993, 'Baru', 3, 0, ''),
(110, 0, 21, 'Rei dailypack', 500000, 'Baru', -16, 0, ''),
(111, 0, 23, 'Sepatu Consina', 600000, 'Baru', 13, 0, ''),
(112, 1, 21, 'Sambal Terong', 6000, 'Sambal nikmat', -34, 1, ''),
(113, 1, 21, 'Nasi', 4000, 'Nasi Putih Pulen', -244, 1, ''),
(116, 1, NULL, 'Sambal Bawang', 4000, '', 0, 1, ''),
(117, 2, NULL, 'Ayam Kampung Dada', 10000, '', -13, 1, ''),
(118, 2, NULL, 'Ayam Kampung Paha', 10000, '', -5, 1, ''),
(119, 2, NULL, 'Ayam Dada', 10000, '', -35, 1, ''),
(120, 3, NULL, 'Tumis Jamur', 8000, '', 0, 1, ''),
(122, 3, NULL, 'Ca Kangkung', 6000, '', -17, 1, ''),
(123, 4, NULL, 'Jus Alpukat', 12000, '', -18, 1, ''),
(124, 4, NULL, 'Jus Apel', 8000, '', -22, 1, ''),
(125, 5, NULL, 'Buah Nanas', 7000, '', -9, 1, ''),
(127, 5, NULL, 'Buah Semangka', 6000, '', -8, 1, ''),
(128, 1, NULL, 'Sambal Pete', 8000, '', -5, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `hidangan_id`
--

CREATE TABLE `hidangan_id` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hidangan_id`
--

INSERT INTO `hidangan_id` (`id`, `name`) VALUES
(1, 'Sambal'),
(2, 'Lauk'),
(3, 'Sayur'),
(4, 'Minum'),
(5, 'Buah');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id_invoice` varchar(32) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `total` int(8) NOT NULL,
  `nama_pelanggan` varchar(30) NOT NULL,
  `bayar` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id_invoice`, `tanggal`, `nama_user`, `total`, `nama_pelanggan`, `bayar`) VALUES
('20190722000102', '2019-07-22', 'Admin', 38000, 'a2', 0),
('20190722000103', '2019-07-22', 'Admin', 20000, 'silur', 0),
('20190722000104', '2019-07-22', 'Admin', 50000, 'g20', 0),
('20190722000105', '2019-07-22', 'Admin', 68000, 'Ginanjar', 0),
('20190722000106', '2019-07-22', 'Admin', 25000, 'Bayu', 0),
('20190722000107', '2019-07-22', 'Admin', 19000, 'Awie', 0),
('20190722000108', '2019-07-22', 'Admin', 30000, 'Awie 2', 0),
('20190722000109', '2019-07-22', 'Admin', 26000, 'C1', 0),
('20190722000110', '2019-07-22', 'Admin', 30000, 'c2', 0),
('20190722000111', '2019-07-22', 'Admin', 42000, 'c3', 0),
('20190722000112', '2019-07-22', 'Admin', 19000, 'c4', 0),
('20190722000113', '2019-07-22', 'Admin', 48000, 'c5', 0),
('20190722000114', '2019-07-22', 'Admin', 144000, 'c5', 0),
('20190722000115', '2019-07-22', 'Admin', 58000, 'c6', 0),
('20190722000117', '2019-07-22', 'Admin', 48000, 'Ginziy 123', 0),
('20190722000118', '2019-07-22', 'Admin', 30000, 'Ginziy 124', 0),
('20190722000119', '2019-07-22', 'Admin', 98000, 'c9', 0),
('20190722000120', '2019-07-22', 'Admin', 30000, 'c10', 0),
('20190722000121', '2019-07-22', 'Admin', 32000, 'brian', 0),
('20190722000122', '2019-07-22', 'Admin', 38000, 'r', 0),
('20190722000123', '2019-07-22', 'Admin', 70000, 'e', 0),
('20190722000124', '2019-07-22', 'Admin', 92000, 'ei', 0),
('20190722000125', '2019-07-22', 'Admin', 32000, 'Ginziy dong', 0),
('20190722000126', '2019-07-22', 'Admin', 18000, 'asd', 0),
('20190722000127', '2019-07-22', 'Admin', 38000, 'Ginanjar', 0),
('20190722000128', '2019-07-22', 'Admin', 43000, 'cek cek cek', 0),
('20190722000131', '2019-07-22', 'Admin', 26000, 'Eko', 0),
('20190722000132', '2019-07-22', 'Admin', 46000, 'Ayu', 0),
('20190722000133', '2019-07-22', 'Admin', 18000, 'Dya', 0),
('20190723000134', '2019-07-23', 'Admin', 82000, 'saya sendiri', 1),
('20190723000135', '2019-07-23', 'Admin', 40000, 'Saya aja', 1),
('20190723000137', '2019-07-23', 'Admin', 22000, 'coba', 1),
('20190723000138', '2019-07-23', 'Admin', 24000, 'Linggar', 1),
('20190723000139', '2019-07-23', 'Admin', 20000, 'Ayudya', 1),
('20190723000140', '2019-07-23', 'Admin', 35000, 'Ginanjar', 1),
('20190723000141', '2019-07-23', 'Admin', 78000, 'Ginziy', 1),
('20190723000142', '2019-07-23', 'Admin', 18000, 'dfdfdf', 1),
('20190724000143', '2019-07-24', 'Admin', 64000, 'Pendadaran', 1),
('20190724000144', '2019-07-24', 'Admin', 140000, 'Eko Seftianto', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nota`
--

CREATE TABLE `nota` (
  `id_carinota` int(20) NOT NULL,
  `nama_pelayan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nota`
--

INSERT INTO `nota` (`id_carinota`, `nama_pelayan`) VALUES
(1, 'Admin'),
(2, 'Admin'),
(5, 'Admin'),
(6, 'Admin'),
(7, 'Admin'),
(8, 'Admin'),
(9, 'Admin'),
(10, 'Admin'),
(11, 'Admin'),
(12, 'Admin'),
(13, 'Admin'),
(14, 'Admin'),
(15, 'Admin'),
(16, 'Admin'),
(17, 'Admin'),
(18, 'Admin'),
(19, 'Admin'),
(20, 'Admin'),
(21, 'Admin'),
(22, 'Admin'),
(23, 'Admin'),
(24, 'Admin'),
(25, 'Admin'),
(26, 'Admin'),
(27, 'Admin'),
(28, 'Admin'),
(29, 'Admin'),
(30, 'Admin'),
(31, 'Admin'),
(32, 'Admin'),
(33, 'Admin'),
(34, 'Admin'),
(35, 'Admin'),
(36, 'Admin'),
(37, 'Admin'),
(38, 'Admin'),
(39, 'Admin'),
(40, 'Admin'),
(41, 'Admin'),
(42, 'Admin'),
(43, 'Admin'),
(44, 'Admin'),
(45, 'Admin'),
(46, 'Admin'),
(47, 'Admin'),
(48, 'Admin'),
(49, 'Admin'),
(50, 'Admin'),
(51, 'Admin'),
(52, 'Admin'),
(53, 'Admin'),
(54, 'Admin'),
(55, 'Admin'),
(56, 'Admin'),
(57, 'Admin'),
(58, 'Admin'),
(59, 'Admin'),
(60, 'Admin'),
(61, 'Admin'),
(62, 'Admin'),
(63, 'Admin'),
(64, 'Admin'),
(65, 'Admin'),
(66, 'Admin'),
(67, 'Admin'),
(68, 'Admin'),
(69, 'Admin'),
(70, 'Admin'),
(71, 'Admin'),
(72, 'Admin'),
(73, 'Admin'),
(74, 'Admin'),
(75, 'Admin'),
(76, 'Admin'),
(77, 'Admin'),
(78, 'Admin'),
(79, 'Admin'),
(80, 'Admin'),
(81, 'Admin'),
(82, 'Admin'),
(83, 'Admin'),
(84, 'Admin'),
(85, 'Admin'),
(86, 'Admin'),
(87, 'Admin'),
(88, 'Admin'),
(89, 'Admin'),
(90, 'Admin'),
(91, 'Admin'),
(92, 'Admin'),
(93, 'Admin'),
(94, 'Admin'),
(95, 'Admin'),
(96, 'Admin'),
(97, 'Admin'),
(98, 'Admin'),
(99, 'Admin'),
(100, 'Admin'),
(101, 'Admin'),
(102, 'Admin'),
(103, 'Admin'),
(104, 'Admin'),
(105, 'Admin'),
(106, 'Admin'),
(107, 'Admin'),
(108, 'Admin'),
(109, 'Admin'),
(110, 'Admin'),
(111, 'Admin'),
(112, 'Admin'),
(113, 'Admin'),
(114, 'Admin'),
(115, 'Admin'),
(116, 'Admin'),
(117, 'Admin'),
(118, 'Admin'),
(119, 'Admin'),
(120, 'Admin'),
(121, 'Admin'),
(122, 'Admin'),
(123, 'Admin'),
(124, 'Admin'),
(125, 'Admin'),
(126, 'Admin'),
(127, 'Admin'),
(128, 'Admin'),
(129, 'Admin'),
(130, 'Admin'),
(131, 'Admin'),
(132, 'Admin'),
(133, 'Admin'),
(134, 'Admin'),
(135, 'Admin'),
(136, 'Admin'),
(137, 'Admin'),
(138, 'Admin'),
(139, 'Admin'),
(140, 'Admin'),
(141, 'Admin'),
(142, 'Admin'),
(143, 'Admin'),
(144, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(10) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `no_hp`, `alamat`) VALUES
(21, 'Rei Jogjakarta', '08977337373', 'Jl.gejayan '),
(22, 'Mahkota Adventure', '08976869093', 'Jl.Affandi No.5'),
(23, 'Premature Adventure', '089626262', 'jl.janti no 9');

-- --------------------------------------------------------

--
-- Table structure for table `transaksijual`
--

CREATE TABLE `transaksijual` (
  `id_transaksijual` int(10) NOT NULL,
  `id_barangjual` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `pemesan` varchar(30) NOT NULL,
  `no_nota` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL,
  `nama_barangjual` varchar(50) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `harga_jual` int(10) NOT NULL,
  `status` int(10) NOT NULL DEFAULT '1',
  `masak` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksijual`
--

INSERT INTO `transaksijual` (`id_transaksijual`, `id_barangjual`, `id_user`, `nama_lengkap`, `pemesan`, `no_nota`, `tanggal`, `nama_barangjual`, `jumlah`, `harga_jual`, `status`, `masak`) VALUES
(141, 111, 11, 'Admin', '', '20190716192344', '2019-07-16 19:23:44', 'Sepatu Consina', 2, 600000, 0, 1),
(143, 109, 11, 'Admin', '', '20190716192557', '2019-07-16 19:25:57', 'Tenda eiger', 5, 799993, 0, 1),
(144, 112, 11, 'Admin', '', '20190716200113', '2019-07-16 20:01:13', 'Sambal Terong', 5, 6000, 0, 1),
(145, 112, 11, 'Admin', '', '20190716205515', '2019-07-16 20:55:15', 'Sambal Terong', 1, 6000, 0, 1),
(146, 112, 11, 'Admin', '', '20190717085024', '2019-07-17 08:50:24', 'Sambal Terong', 5, 6000, 0, 1),
(168, 110, 11, 'Admin', '', '2019071800018', '2019-07-18 16:02:10', 'Rei dailypack', 1, 500000, 0, 1),
(169, 112, 11, 'Admin', '', '2019071800018', '2019-07-18 16:02:16', 'Sambal Terong', 5, 6000, 0, 1),
(170, 110, 11, 'Admin', '', '2019071900019', '2019-07-19 20:27:26', 'Rei dailypack', 1, 500000, 0, 1),
(171, 111, 11, 'Admin', '', '2019071900019', '2019-07-19 20:27:41', 'Sepatu Consina', 1, 600000, 0, 1),
(172, 112, 11, 'Admin', '', '2019071900020', '2019-07-19 20:30:23', 'Sambal Terong', 10, 6000, 0, 1),
(173, 110, 11, 'Admin', '', '2019071900020', '2019-07-19 20:30:32', 'Rei dailypack', 2, 500000, 0, 1),
(174, 113, 11, 'Admin', '', '2019072000026', '2019-07-20 00:00:00', 'Nasi', 4, 4000, 0, 1),
(178, 113, 11, 'Admin', '', '2019072000030', '2019-07-20 00:00:00', 'Nasi', 4, 4000, 0, 1),
(179, 113, 11, 'Admin', '', '2019072000031', '2019-07-20 00:00:00', 'Nasi', 4, 4000, 0, 1),
(180, 113, 11, 'Admin', 'Ginanjar', '2019072000032', '2019-07-20 00:00:00', 'Nasi', 4, 4000, 0, 1),
(181, 113, 11, 'Admin', 'Ginanjar', '2019072000033', '2019-07-20 00:00:00', 'Nasi', 4, 4000, 0, 1),
(182, 113, 11, 'Admin', 'Ginanjar', '2019072000034', '2019-07-20 00:00:00', 'Nasi', 3, 4000, 0, 1),
(183, 113, 11, 'Admin', 'Awie', '2019072000035', '2019-07-20 00:00:00', 'Nasi', 3, 4000, 0, 1),
(184, 113, 11, 'Admin', 'Gilang', '2019072000036', '2019-07-20 00:00:00', 'Nasi', 6, 4000, 0, 1),
(185, 113, 11, 'Admin', 'Dirga', '2019072000037', '2019-07-20 00:00:00', 'Nasi', 7, 4000, 0, 1),
(186, 113, 11, 'Admin', 'Awie', '2019072000038', '2019-07-20 00:00:00', 'Nasi', 7, 4000, 0, 1),
(187, 113, 11, 'Admin', 'Eiwa', '2019072000039', '2019-07-20 00:00:00', 'Nasi', 2, 4000, 0, 1),
(189, 113, 11, 'Admin', 'Ibu', '2019072000041', '2019-07-20 00:00:00', 'Nasi', 3, 4000, 0, 1),
(190, 113, 11, 'Admin', 'Ginzi b', '2019072000042', '2019-07-20 00:00:00', 'Nasi', 3, 4000, 0, 1),
(191, 113, 11, 'Admin', 'Ginzi c', '2019072000043', '2019-07-20 00:00:00', 'Nasi', 4, 4000, 0, 1),
(192, 113, 11, 'Admin', 'Ginzi d', '2019072000044', '2019-07-20 00:00:00', 'Nasi', 4, 4000, 0, 1),
(193, 112, 11, 'Admin', '', '2019072000044', '2019-07-20 00:00:00', 'Sambal Terong', 1, 6000, 0, 1),
(194, 111, 11, 'Admin', '', '2019072000044', '2019-07-20 00:00:00', 'Sepatu Consina', 10, 600000, 0, 1),
(195, 113, 11, 'Admin', 'Ginziy g', '2019072000045', '2019-07-20 00:00:00', 'Nasi', 7, 4000, 0, 1),
(196, 112, 11, 'Admin', '', '2019072000045', '2019-07-20 00:00:00', 'Sambal Terong', 1, 6000, 0, 1),
(197, 113, 11, 'Admin', 'Ginziy h', '2019072000046', '2019-07-20 00:00:00', 'Nasi', 1, 4000, 0, 1),
(198, 110, 11, 'Admin', '', '2019072000046', '2019-07-20 00:00:00', 'Rei dailypack', 10, 500000, 0, 1),
(199, 113, 11, 'Admin', 'Ginziy i', '2019072000047', '2019-07-20 00:00:00', 'Nasi', 7, 4000, 0, 1),
(200, 112, 11, 'Admin', '', '2019072000047', '2019-07-20 00:00:00', 'Sambal Terong', 7, 6000, 0, 1),
(201, 113, 11, 'Admin', 'Ginziy j', '2019072000048', '2019-07-20 00:00:00', 'Nasi', 6, 4000, 0, 1),
(202, 113, 11, 'Admin', 'Ginziy j', '2019072000049', '2019-07-20 00:00:00', 'Nasi', 6, 4000, 0, 1),
(203, 113, 11, 'Admin', 'Ginziy j', '2019072000050', '2019-07-20 00:00:00', 'Nasi', 6, 4000, 0, 1),
(204, 110, 11, 'Admin', 'Ginziy j', '2019072000050', '2019-07-20 00:00:00', 'Rei dailypack', 1, 500000, 0, 1),
(205, 111, 11, 'Admin', 'Ginziy j', '2019072000050', '2019-07-20 00:00:00', 'Sepatu Consina', 1, 600000, 0, 1),
(206, 113, 11, 'Admin', 'Ginziy k', '2019072000052', '2019-07-20 00:00:00', 'Nasi', 2, 4000, 0, 1),
(207, 111, 11, 'Admin', 'Ginziy k', '2019072000052', '2019-07-20 00:00:00', 'Sepatu Consina', 1, 600000, 0, 1),
(208, 113, 11, 'Admin', 'Ginziy l', '2019072000053', '2019-07-20 00:00:00', 'Nasi', 7, 4000, 0, 1),
(209, 110, 11, 'Admin', 'Ginziy l', '2019072000053', '2019-07-20 00:00:00', 'Rei dailypack', 1, 500000, 0, 1),
(210, 113, 11, 'Admin', 'Ginziy l', '2019072100054', '2019-07-21 00:00:00', 'Nasi', 9, 4000, 0, 1),
(211, 113, 11, 'Admin', 'Ginziy l', '2019072100055', '2019-07-21 00:00:00', 'Nasi', 9, 4000, 0, 1),
(212, 113, 11, 'Admin', 'Ginziy l', '2019072100056', '2019-07-21 00:00:00', 'Nasi', 9, 4000, 0, 1),
(213, 113, 11, 'Admin', 'Ginziy cek', '2019072100057', '2019-07-21 00:00:00', 'Nasi', 7, 4000, 0, 1),
(214, 113, 11, 'Admin', 'Ginziy satu', '2019072100058', '2019-07-21 00:00:00', 'Nasi', 7, 4000, 0, 1),
(215, 110, 11, 'Admin', 'Ginziy satu', '2019072100058', '2019-07-21 00:00:00', 'Rei dailypack', 1, 500000, 0, 1),
(216, 113, 11, 'Admin', 'Ginziy dua', '2019072100059', '2019-07-21 00:00:00', 'Nasi', 7, 4000, 0, 1),
(217, 112, 11, 'Admin', 'Ginziy dua', '2019072100059', '2019-07-21 00:00:00', 'Sambal Terong', 7, 6000, 0, 1),
(218, 110, 11, 'Admin', 'Ginziy dua', '2019072100059', '2019-07-21 00:00:00', 'Rei dailypack', 1, 500000, 0, 1),
(219, 113, 11, 'Admin', 'Ginzi dua', '2019072100060', '2019-07-21 00:00:00', 'Nasi', 2, 4000, 0, 1),
(220, 111, 11, 'Admin', 'Ginzi dua', '2019072100060', '2019-07-21 00:00:00', 'Sepatu Consina', 1, 600000, 0, 1),
(221, 113, 11, 'Admin', 'Ginzi 11', '2019072100061', '2019-07-21 00:00:00', 'Nasi', 11, 4000, 0, 1),
(222, 113, 11, 'Admin', 'Ginziy 12', '2019072100062', '2019-07-21 00:00:00', 'Nasi', 12, 4000, 0, 1),
(223, 110, 11, 'Admin', 'Ginziy 12', '2019072100062', '2019-07-21 00:00:00', 'Rei dailypack', 1, 500000, 0, 1),
(224, 113, 11, 'Admin', 'Ginziy 13', '2019072100063', '2019-07-21 00:00:00', 'Nasi', 13, 4000, 0, 1),
(225, 110, 11, 'Admin', 'Ginziy 13', '2019072100063', '2019-07-21 00:00:00', 'Rei dailypack', 1, 500000, 0, 1),
(226, 113, 11, 'Admin', 'Ginziy 14', '2019072100064', '2019-07-21 00:00:00', 'Nasi', 14, 4000, 0, 1),
(227, 110, 11, 'Admin', 'Ginziy 14', '2019072100064', '2019-07-21 00:00:00', 'Rei dailypack', 1, 500000, 0, 1),
(228, 113, 11, 'Admin', 'Ginziy 15', '2019072100065', '2019-07-21 00:00:00', 'Nasi', 15, 4000, 0, 1),
(229, 110, 11, 'Admin', 'Ginziy 15', '2019072100065', '2019-07-21 00:00:00', 'Rei dailypack', 1, 500000, 0, 1),
(230, 113, 11, 'Admin', 'Ginziy 16', '2019072100066', '2019-07-21 00:00:00', 'Nasi', 16, 4000, 0, 1),
(231, 113, 11, 'Admin', 'Ginziy 17', '2019072100067', '2019-07-21 00:00:00', 'Nasi', 17, 4000, 0, 1),
(232, 110, 11, 'Admin', 'Ginziy 17', '2019072100067', '2019-07-21 00:00:00', 'Rei dailypack', 1, 500000, 0, 1),
(233, 113, 11, 'Admin', 'Ginziy 18', '2019072100068', '2019-07-21 00:00:00', 'Nasi', 1, 4000, 0, 1),
(234, 110, 11, 'Admin', 'Ginziy 18', '2019072100068', '2019-07-21 00:00:00', 'Rei dailypack', 1, 500000, 0, 1),
(235, 113, 11, 'Admin', 'Ginziy 19', '2019072100069', '2019-07-21 00:00:00', 'Nasi', 4, 4000, 0, 1),
(236, 110, 11, 'Admin', 'Ginziy 19', '2019072100069', '2019-07-21 00:00:00', 'Rei dailypack', 1, 500000, 0, 1),
(237, 113, 11, 'Admin', 'Ginziy 20', '2019072100070', '2019-07-21 00:00:00', 'Nasi', 7, 4000, 0, 1),
(238, 110, 11, 'Admin', 'Ginziy 20', '2019072100070', '2019-07-21 00:00:00', 'Rei dailypack', 1, 500000, 0, 1),
(239, 113, 11, 'Admin', 'Ginziy 21', '2019072100071', '2019-07-21 00:00:00', 'Nasi', 7, 4000, 0, 1),
(240, 112, 11, 'Admin', 'Ginziy 21', '2019072100071', '2019-07-21 00:00:00', 'Sambal Terong', 5, 6000, 0, 1),
(241, 113, 11, 'Admin', 'Ginziy 22', '2019072100072', '2019-07-21 00:00:00', 'Nasi', 2, 4000, 0, 1),
(242, 110, 11, 'Admin', 'Ginziy 22', '2019072100072', '2019-07-21 00:00:00', 'Rei dailypack', 1, 500000, 0, 1),
(243, 113, 11, 'Admin', 'Ginziy 23', '2019072100073', '2019-07-21 00:00:00', 'Nasi', 2, 4000, 0, 1),
(244, 109, 11, 'Admin', 'Ginziy 23', '2019072100073', '2019-07-21 00:00:00', 'Tenda eiger', 1, 799993, 0, 1),
(245, 113, 11, 'Admin', 'Ginziy 24', '2019072100074', '2019-07-21 00:00:00', 'Nasi', 7, 4000, 0, 1),
(246, 113, 11, 'Admin', 'Ginziy 25', '2019072100075', '2019-07-21 00:00:00', 'Nasi', 3, 4000, 0, 1),
(247, 110, 11, 'Admin', 'Ginziy 25', 'Ginziy 25', '2019-07-21 00:00:00', 'Rei dailypack', 5, 500000, 0, 1),
(248, 110, 11, 'Admin', 'Ginziy 25', 'Ginziy 25', '2019-07-21 00:00:00', 'Rei dailypack', 1, 500000, 0, 1),
(249, 110, 11, 'Admin', 'Ginziy 25', 'Ginziy 25', '2019-07-21 00:00:00', 'Rei dailypack', 1, 500000, 0, 1),
(250, 110, 11, 'Admin', 'Ginziy 25', 'Ginziy 25', '2019-07-21 00:00:00', 'Rei dailypack', 5, 500000, 0, 1),
(251, 110, 11, 'Admin', 'Ginziy 25', 'Ginziy 25', '2019-07-21 00:00:00', 'Rei dailypack', 1, 500000, 0, 1),
(252, 113, 11, 'Admin', 'Ginziy 26', '2019072100076', '2019-07-21 00:00:00', 'Nasi', 3, 4000, 0, 1),
(253, 110, 11, 'Admin', 'Ginziy 26', 'Ginziy 26', '2019-07-21 00:00:00', 'Rei dailypack', 1, 500000, 0, 1),
(254, 112, 11, 'Admin', 'Ginziy 26', '2019072100076', '2019-07-21 00:00:00', 'Sambal Terong', 1, 6000, 0, 1),
(255, 113, 11, 'Admin', 'Ginziy 27', '2019072100077', '2019-07-21 00:00:00', 'Nasi', 4, 4000, 0, 1),
(258, 112, 11, 'Admin', 'Ginziy 27', '2019072100077', '2019-07-21 00:00:00', 'Sambal Terong', 1, 6000, 0, 1),
(259, 113, 11, 'Admin', 'Ginziy 28', '2019072100078', '2019-07-21 00:00:00', 'Nasi', 4, 4000, 0, 1),
(264, 113, 11, 'Admin', 'Ginziy 29', '2019072100079', '2019-07-21 00:00:00', 'Nasi', 3, 4000, 0, 1),
(265, 110, 11, 'Admin', 'Ginziy 29', '2019072100079', '2019-07-21 00:00:00', 'Rei dailypack', 1, 500000, 0, 1),
(266, 113, 11, 'Admin', 'Ginziy 30', '2019072100080', '2019-07-21 00:00:00', 'Nasi', 3, 4000, 0, 1),
(268, 113, 11, 'Admin', 'Ginziy 31', '2019072100081', '2019-07-21 00:00:00', 'Nasi', 7, 4000, 0, 1),
(269, 110, 11, 'Admin', 'Ginziy 31', '2019072100081', '2019-07-21 00:00:00', 'Rei dailypack', 1, 500000, 0, 1),
(272, 113, 11, 'Admin', 'Ginziy 32', '2019072100084', '2019-07-21 00:00:00', 'Nasi', 3, 4000, 0, 1),
(274, 113, 11, 'Admin', 'Ginziy 34', '2019072100085', '2019-07-21 00:00:00', 'Nasi', 7, 4000, 0, 1),
(276, 112, 11, 'Admin', 'Ginziy 34', '2019072100085', '2019-07-21 00:00:00', 'Sambal Terong', 1, 6000, 0, 1),
(277, 113, 11, 'Admin', 'Ginzy 50', '2019072100086', '2019-07-21 00:00:00', 'Nasi', 2, 4000, 0, 1),
(278, 113, 11, 'Admin', 'Ginzy 51', '2019072100087', '2019-07-21 00:00:00', 'Nasi', 3, 4000, 0, 1),
(279, 113, 11, 'Admin', 'G1', '2019072100088', '2019-07-21 00:00:00', 'Nasi', 7, 4000, 0, 1),
(280, 113, 11, 'Admin', 'g2', '2019072100089', '2019-07-21 00:00:00', 'Nasi', 2, 4000, 0, 1),
(281, 112, 11, 'Admin', 'g2', '2019072100089', '2019-07-21 00:00:00', 'Sambal Terong', 1, 6000, 0, 1),
(282, 113, 11, 'Admin', 'g8', '2019072100090', '2019-07-21 00:00:00', 'Nasi', 3, 4000, 0, 1),
(283, 112, 11, 'Admin', 'g8', '2019072100090', '2019-07-21 00:00:00', 'Sambal Terong', 10, 6000, 0, 1),
(284, 113, 11, 'Admin', 'G12', '2019072100091', '2019-07-21 00:00:00', 'Nasi', 7, 4000, 0, 1),
(285, 110, 11, 'Admin', 'G12', '2019072100091', '2019-07-21 00:00:00', 'Rei dailypack', 5, 500000, 0, 1),
(286, 113, 11, 'Admin', 'g3', '2019072200092', '2019-07-22 00:00:00', 'Nasi', 6, 4000, 0, 1),
(287, 111, 11, 'Admin', 'g3', '2019072200092', '2019-07-22 00:00:00', 'Sepatu Consina', 1, 600000, 0, 1),
(288, 113, 11, 'Admin', 'g4', '2019072200093', '2019-07-22 00:00:00', 'Nasi', 1, 4000, 0, 1),
(289, 110, 11, 'Admin', 'g4', '2019072200093', '2019-07-22 00:00:00', 'Rei dailypack', 1, 500000, 0, 1),
(290, 113, 11, 'Admin', 'G23', '2019072200094', '2019-07-22 00:00:00', 'Nasi', 1, 4000, 0, 1),
(291, 112, 11, 'Admin', 'G23', '2019072200094', '2019-07-22 00:00:00', 'Sambal Terong', 1, 6000, 0, 1),
(292, 113, 11, 'Admin', 'G24', '2019072200096', '2019-07-22 00:00:00', 'Nasi', 7, 4000, 0, 1),
(293, 112, 11, 'Admin', 'G24', '2019072200096', '2019-07-22 00:00:00', 'Sambal Terong', 7, 6000, 0, 1),
(294, 113, 11, 'Admin', 'g25', '2019072200098', '2019-07-22 00:00:00', 'Nasi', 7, 4000, 0, 1),
(295, 110, 11, 'Admin', 'g25', '2019072200098', '2019-07-22 00:00:00', 'Rei dailypack', 7, 500000, 0, 1),
(296, 113, 11, 'Admin', 'g22', '20190722000100', '2019-07-22 00:00:00', 'Nasi', 7, 4000, 0, 1),
(297, 110, 11, 'Admin', 'g22', '20190722000100', '2019-07-22 00:00:00', 'Rei dailypack', 7, 500000, 0, 1),
(298, 113, 11, 'Admin', 'a1', '20190722000101', '2019-07-22 00:00:00', 'Nasi', 7, 4000, 0, 1),
(299, 110, 11, 'Admin', 'a1', '20190722000101', '2019-07-22 00:00:00', 'Rei dailypack', 1, 500000, 0, 1),
(300, 113, 11, 'Admin', 'a2', '20190722000102', '2019-07-22 00:00:00', 'Nasi', 2, 4000, 0, 1),
(301, 112, 11, 'Admin', 'a2', '20190722000102', '2019-07-22 00:00:00', 'Sambal Terong', 5, 6000, 0, 1),
(302, 113, 11, 'Admin', 'silur', '20190722000103', '2019-07-22 00:00:00', 'Nasi', 2, 4000, 0, 1),
(303, 112, 11, 'Admin', 'silur', '20190722000103', '2019-07-22 00:00:00', 'Sambal Terong', 2, 6000, 0, 1),
(304, 113, 11, 'Admin', 'g20', '20190722000104', '2019-07-22 00:00:00', 'Nasi', 5, 4000, 0, 1),
(305, 112, 11, 'Admin', 'g20', '20190722000104', '2019-07-22 00:00:00', 'Sambal Terong', 5, 6000, 0, 1),
(306, 113, 11, 'Admin', 'Ginanjar', '20190722000105', '2019-07-22 00:00:00', 'Nasi', 7, 4000, 0, 1),
(307, 118, 11, 'Admin', 'Ginanjar', '20190722000105', '2019-07-22 00:00:00', 'Ayam Kampung Paha', 4, 10000, 0, 1),
(308, 113, 11, 'Admin', 'Bayu', '20190722000106', '2019-07-22 00:00:00', 'Nasi', 2, 4000, 0, 1),
(309, 125, 11, 'Admin', 'Bayu', '20190722000106', '2019-07-22 00:00:00', 'Buah Nanas', 1, 7000, 0, 1),
(310, 119, 11, 'Admin', 'Bayu', '20190722000106', '2019-07-22 00:00:00', 'Ayam Dada', 1, 10000, 0, 1),
(311, 113, 11, 'Admin', 'Awie', '20190722000107', '2019-07-22 00:00:00', 'Nasi', 3, 4000, 0, 1),
(312, 125, 11, 'Admin', 'Awie', '20190722000107', '2019-07-22 00:00:00', 'Buah Nanas', 1, 7000, 0, 0),
(313, 113, 11, 'Admin', 'Awie 2', '20190722000108', '2019-07-22 00:00:00', 'Nasi', 5, 4000, 0, 1),
(314, 117, 11, 'Admin', 'Awie 2', '20190722000108', '2019-07-22 00:00:00', 'Ayam Kampung Dada', 1, 10000, 0, 1),
(315, 113, 11, 'Admin', 'C1', '20190722000109', '2019-07-22 00:00:00', 'Nasi', 4, 4000, 0, 1),
(316, 119, 11, 'Admin', 'C1', '20190722000109', '2019-07-22 00:00:00', 'Ayam Dada', 1, 10000, 0, 0),
(317, 113, 11, 'Admin', 'c2', '20190722000110', '2019-07-22 00:00:00', 'Nasi', 5, 4000, 0, 1),
(318, 118, 11, 'Admin', 'c2', '20190722000110', '2019-07-22 00:00:00', 'Ayam Kampung Paha', 1, 10000, 0, 0),
(319, 113, 11, 'Admin', 'c3', '20190722000111', '2019-07-22 00:00:00', 'Nasi', 3, 4000, 0, 1),
(320, 122, 11, 'Admin', 'c3', '20190722000111', '2019-07-22 00:00:00', 'Ca Kangkung', 5, 6000, 0, 0),
(321, 113, 11, 'Admin', 'c4', '20190722000112', '2019-07-22 00:00:00', 'Nasi', 3, 4000, 0, 1),
(322, 125, 11, 'Admin', 'c4', '20190722000112', '2019-07-22 00:00:00', 'Buah Nanas', 1, 7000, 0, 0),
(323, 113, 11, 'Admin', 'c5', '20190722000113', '2019-07-22 00:00:00', 'Nasi', 2, 4000, 0, 1),
(324, 124, 11, 'Admin', 'c5', '20190722000113', '2019-07-22 00:00:00', 'Jus Apel', 5, 8000, 0, 0),
(325, 113, 11, 'Admin', 'c5', '20190722000114', '2019-07-22 00:00:00', 'Nasi', 6, 4000, 0, 1),
(326, 123, 11, 'Admin', 'c5', '20190722000114', '2019-07-22 00:00:00', 'Jus Alpukat', 10, 12000, 0, 0),
(327, 113, 11, 'Admin', 'c6', '20190722000115', '2019-07-22 00:00:00', 'Nasi', 2, 4000, 0, 1),
(328, 119, 11, 'Admin', 'c6', '20190722000115', '2019-07-22 00:00:00', 'Ayam Dada', 5, 10000, 0, 0),
(329, 113, 11, 'Admin', 'c6', '20190722000116', '2019-07-22 00:00:00', 'Nasi', 7, 4000, 0, 1),
(330, 113, 11, 'Admin', 'Ginziy 123', '20190722000117', '2019-07-22 00:00:00', 'Nasi', 3, 4000, 0, 1),
(331, 123, 11, 'Admin', 'Ginziy 123', '20190722000117', '2019-07-22 00:00:00', 'Jus Alpukat', 3, 12000, 0, 0),
(332, 113, 11, 'Admin', 'Ginziy 124', '20190722000118', '2019-07-22 00:00:00', 'Nasi', 3, 4000, 0, 1),
(333, 122, 11, 'Admin', 'Ginziy 124', '20190722000118', '2019-07-22 00:00:00', 'Ca Kangkung', 3, 6000, 0, 0),
(334, 113, 11, 'Admin', 'c9', '20190722000119', '2019-07-22 00:00:00', 'Nasi', 7, 4000, 0, 1),
(335, 119, 11, 'Admin', 'c9', '20190722000119', '2019-07-22 00:00:00', 'Ayam Dada', 7, 10000, 0, 0),
(336, 113, 11, 'Admin', 'c10', '20190722000120', '2019-07-22 00:00:00', 'Nasi', 3, 4000, 0, 1),
(337, 127, 11, 'Admin', 'c10', '20190722000120', '2019-07-22 00:00:00', 'Buah Semangka', 3, 6000, 0, 0),
(338, 113, 11, 'Admin', 'brian', '20190722000121', '2019-07-22 00:00:00', 'Nasi', 2, 4000, 0, 1),
(339, 123, 11, 'Admin', 'brian', '20190722000121', '2019-07-22 00:00:00', 'Jus Alpukat', 2, 12000, 0, 0),
(340, 113, 11, 'Admin', 'r', '20190722000122', '2019-07-22 00:00:00', 'Nasi', 7, 4000, 0, 1),
(341, 119, 11, 'Admin', 'r', '20190722000122', '2019-07-22 00:00:00', 'Ayam Dada', 1, 10000, 0, 0),
(342, 113, 11, 'Admin', 'e', '20190722000123', '2019-07-22 00:00:00', 'Nasi', 7, 4000, 0, 1),
(343, 122, 11, 'Admin', 'e', '20190722000123', '2019-07-22 00:00:00', 'Ca Kangkung', 7, 6000, 0, 0),
(344, 113, 11, 'Admin', 'ei', '20190722000124', '2019-07-22 00:00:00', 'Nasi', 3, 4000, 0, 1),
(345, 124, 11, 'Admin', 'ei', '20190722000124', '2019-07-22 00:00:00', 'Jus Apel', 10, 8000, 0, 0),
(346, 113, 11, 'Admin', 'Ginziy dong', '20190722000125', '2019-07-22 00:00:00', 'Nasi', 5, 4000, 0, 1),
(347, 112, 11, 'Admin', 'Ginziy dong', '20190722000125', '2019-07-22 00:00:00', 'Sambal Terong', 2, 6000, 0, 1),
(348, 113, 11, 'Admin', 'asd', '20190722000126', '2019-07-22 00:00:00', 'Nasi', 2, 4000, 1, 1),
(349, 119, 11, 'Admin', 'asd', '20190722000126', '2019-07-22 00:00:00', 'Ayam Dada', 1, 10000, 1, 0),
(350, 113, 11, 'Admin', 'Ginanjar', '20190722000127', '2019-07-22 00:00:00', 'Nasi', 7, 4000, 1, 1),
(351, 117, 11, 'Admin', 'Ginanjar', '20190722000127', '2019-07-22 00:00:00', 'Ayam Kampung Dada', 1, 10000, 1, 1),
(352, 113, 11, 'Admin', 'cek cek cek', '20190722000128', '2019-07-22 00:00:00', 'Nasi', 2, 4000, 1, 1),
(353, 125, 11, 'Admin', 'cek cek cek', '20190722000128', '2019-07-22 00:00:00', 'Buah Nanas', 5, 7000, 1, 0),
(354, 113, 11, 'Admin', 'Wie', '20190722000129', '2019-07-22 00:00:00', 'Nasi', 3, 4000, 1, 1),
(355, 124, 11, 'Admin', 'Wie', '20190722000129', '2019-07-22 00:00:00', 'Jus Apel', 5, 8000, 1, 0),
(356, 113, 11, 'Admin', 'Nus', '20190722000130', '2019-07-22 00:00:00', 'Nasi', 2, 4000, 1, 1),
(357, 122, 11, 'Admin', 'Nus', '20190722000130', '2019-07-22 00:00:00', 'Ca Kangkung', 1, 6000, 1, 0),
(358, 113, 11, 'Admin', 'Eko', '20190722000131', '2019-07-22 00:00:00', 'Nasi', 4, 4000, 1, 1),
(359, 119, 11, 'Admin', 'Eko', '20190722000131', '2019-07-22 00:00:00', 'Ayam Dada', 1, 10000, 1, 0),
(360, 113, 11, 'Admin', 'Ayu', '20190722000132', '2019-07-22 00:00:00', 'Nasi', 4, 4000, 1, 1),
(361, 127, 11, 'Admin', 'Ayu', '20190722000132', '2019-07-22 00:00:00', 'Buah Semangka', 5, 6000, 1, 0),
(362, 113, 11, 'Admin', 'Dya', '20190722000133', '2019-07-22 00:00:00', 'Nasi', 3, 4000, 0, 1),
(363, 122, 11, 'Admin', 'Dya', '20190722000133', '2019-07-22 00:00:00', 'Ca Kangkung', 1, 6000, 0, 0),
(364, 113, 11, 'Admin', 'saya sendiri', '20190723000134', '2019-07-23 00:00:00', 'Nasi', 3, 4000, 0, 1),
(365, 119, 11, 'Admin', 'saya sendiri', '20190723000134', '2019-07-23 00:00:00', 'Ayam Dada', 7, 10000, 0, 0),
(366, 113, 11, 'Admin', 'Saya aja', '20190723000135', '2019-07-23 00:00:00', 'Nasi', 4, 4000, 0, 1),
(367, 123, 11, 'Admin', 'Saya aja', '20190723000135', '2019-07-23 00:00:00', 'Jus Alpukat', 2, 12000, 0, 0),
(368, 113, 11, 'Admin', 'dfdf', '20190723000136', '2019-07-23 00:00:00', 'Nasi', 3, 4000, 1, 1),
(369, 117, 11, 'Admin', 'dfdf', '20190723000136', '2019-07-23 00:00:00', 'Ayam Kampung Dada', 5, 10000, 1, 1),
(370, 113, 11, 'Admin', 'coba', '20190723000137', '2019-07-23 00:00:00', 'Nasi', 3, 4000, 0, 1),
(371, 119, 11, 'Admin', 'coba', '20190723000137', '2019-07-23 00:00:00', 'Ayam Dada', 1, 10000, 0, 0),
(372, 113, 11, 'Admin', 'Linggar', '20190723000138', '2019-07-23 00:00:00', 'Nasi', 2, 4000, 0, 1),
(376, 124, 11, 'Admin', 'Linggar', '20190723000138', '2019-07-23 00:00:00', 'Jus Apel', 2, 8000, 0, 0),
(377, 113, 11, 'Admin', 'Ayudya', '20190723000139', '2019-07-23 00:00:00', 'Nasi', 2, 4000, 0, 1),
(378, 123, 11, 'Admin', 'Ayudya', '20190723000139', '2019-07-23 00:00:00', 'Jus Alpukat', 1, 12000, 0, 0),
(379, 113, 11, 'Admin', 'Ginanjar', '20190723000140', '2019-07-23 00:00:00', 'Nasi', 7, 4000, 0, 1),
(380, 125, 11, 'Admin', 'Ginanjar', '20190723000140', '2019-07-23 00:00:00', 'Buah Nanas', 1, 7000, 0, 0),
(381, 113, 11, 'Admin', 'Ginziy', '20190723000141', '2019-07-23 00:00:00', 'Nasi', 7, 4000, 0, 1),
(382, 117, 11, 'Admin', 'Ginziy', '20190723000141', '2019-07-23 00:00:00', 'Ayam Kampung Dada', 5, 10000, 0, 1),
(383, 113, 11, 'Admin', 'dfdfdf', '20190723000142', '2019-07-23 00:00:00', 'Nasi', 2, 4000, 0, 1),
(384, 117, 11, 'Admin', 'dfdfdf', '20190723000142', '2019-07-23 00:00:00', 'Ayam Kampung Dada', 1, 10000, 0, 1),
(385, 113, 11, 'Admin', 'Pendadaran', '20190724000143', '2019-07-24 00:00:00', 'Nasi', 6, 4000, 0, 0),
(386, 128, 11, 'Admin', 'Pendadaran', '20190724000143', '2019-07-24 00:00:00', 'Sambal Pete', 5, 8000, 0, 0),
(387, 113, 11, 'Admin', 'Eko Seftianto', '20190724000144', '2019-07-24 00:00:00', 'Nasi', 10, 4000, 1, 0),
(388, 119, 11, 'Admin', 'Eko Seftianto', '20190724000144', '2019-07-24 00:00:00', 'Ayam Dada', 10, 10000, 1, 0);

--
-- Triggers `transaksijual`
--
DELIMITER $$
CREATE TRIGGER `INSERT` AFTER INSERT ON `transaksijual` FOR EACH ROW BEGIN
	UPDATE barangjual SET stok=stok-NEW.jumlah
    WHERE id_barangjual=NEW.id_barangjual;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `delete` BEFORE DELETE ON `transaksijual` FOR EACH ROW BEGIN
	UPDATE barangjual SET stok=stok+old.jumlah
    WHERE id_barangjual=old.id_barangjual;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(11, 'Admin', 'admin@gmail.com', 'default.jpg', '$2y$10$Ezl.o/AkUk5jZwldppktBemo73OTnmBkLnRmnSgf8zshCGNs2VLXO', 1, 1, 1560973408),
(12, 'Bayu Cahyono', 'bayu@gmail.com', 'default.jpg', '$2y$10$Qi5/yvBVVUGdqfKszf6t9.0KcgmiDfjtFB7Cbh1BUMU02bDinxI.u', 1, 1, 1561030045),
(13, 'Linggar Ayudya', 'linggar@gmail.com', 'default.jpg', '$2y$10$bOvxxL1VoX9VSEVlB2ADjeCh2uLGCiDDM9vB94DhlM54eKfVzmFRe', 1, 1, 1561030092),
(15, 'Pegawai Kasir', 'kasir@email.com', 'default.jpg', '$2y$10$01q5ojznsO89ypgyXtsbCeHrsXlR2.BtBp3pS2VrIXujMGr33Ac.S', 7, 1, 1563806455),
(16, 'Pelayan', 'pelayan@email.com', 'default.jpg', '$2y$10$sJSsQEL2571W9c54.ElGne1.B7BAibG8mAO6RXe1CFyEaWem5BhN2', 6, 1, 1563806924),
(17, 'Staff Dapur', 'stdapur@gmail.com', 'default.jpg', '$2y$10$DCjAdtP4MensYSiRoiD0lufPIy8EEQjRwab4XsaZS/n1Cuvt.bzby', 5, 1, 1563855187),
(18, 'Awie Nuswatama', 'awienuswatama@gmail.com', 'default.jpg', '$2y$10$tBo4Q5HPSPuhifHPVbXPVuLTMAdnqo7JlJkD0JniloMoZEED6RYWG', 5, 1, 1563873185),
(19, 'Ricky Sukma', 'rickysukma9a@gmail.com', 'default.jpg', '$2y$10$5alV9e8l.hMXqplw5YJuI.LGYFFrJ2e3bemR.3Ch9t1foIRW0jLNK', 1, 1, 1563878426);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(6, 1, 3),
(7, 1, 5),
(8, 1, 6),
(11, 5, 2),
(12, 1, 7),
(14, 1, 8),
(15, 5, 7),
(16, 1, 9),
(17, 1, 10),
(18, 6, 10),
(19, 6, 2),
(20, 7, 2),
(21, 7, 9),
(22, 9, 2),
(23, 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(6, 'Hidangan'),
(7, 'Kitchen'),
(9, 'Kasir'),
(10, 'Pemesanan');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member'),
(5, 'Dapur'),
(6, 'Pemesanan'),
(7, 'Kasir');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user-alt', 1),
(3, 2, 'Edit Profile', 'user/edit_profile', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-compass', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(9, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(13, 2, 'Change Password', 'user/change_password', 'fas fa-fw fa-unlock-alt', 1),
(14, 1, 'User Management', 'admin/user_management', 'fas fa-fw fa-user-edit', 1),
(15, 6, 'Sambal', 'hidangan/sambal', 'fas fa-fw fa-pepper-hot', 1),
(16, 6, 'Lauk', 'hidangan/lauk', 'fas fa-fw fa-drumstick-bite', 1),
(17, 6, 'Sayur', 'hidangan/sayur', 'fas fa-fw fa-carrot', 1),
(18, 6, 'Minum', 'hidangan/minum', 'fas fa-fw fa-wine-glass-alt', 1),
(19, 6, 'Buah', 'hidangan/buah', 'fas fa-fw fa-apple-alt', 1),
(20, 7, 'Ketersediaan Menu', 'kitchen/ketersediaan', 'fas fa-fw fa-folder-open', 1),
(21, 8, 'Pemesanan', 'pemesanan', 'fab fa-fw fa-youtube', 1),
(22, 10, 'Pesan Hidangan', 'pemesanan', 'fas fa-fw fa-folder-open', 1),
(23, 1, 'Laporan', 'admin/laporan', 'fas fa-fw fa-folder-open', 1),
(24, 9, 'Bayar', 'kasir', 'fas fa-fw fa-folder-open', 1),
(25, 7, 'Daftar Masak', 'kitchen/masak', 'fas fa-fw fa-folder-open', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangjual`
--
ALTER TABLE `barangjual`
  ADD PRIMARY KEY (`id_barangjual`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indexes for table `hidangan_id`
--
ALTER TABLE `hidangan_id`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id_invoice`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_carinota`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `transaksijual`
--
ALTER TABLE `transaksijual`
  ADD PRIMARY KEY (`id_transaksijual`),
  ADD KEY `id_barangjual` (`id_barangjual`),
  ADD KEY `no_nota` (`no_nota`),
  ADD KEY `id_barangjual_2` (`id_barangjual`),
  ADD KEY `id_transaksijualdetail` (`id_transaksijual`),
  ADD KEY `id_kasir` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangjual`
--
ALTER TABLE `barangjual`
  MODIFY `id_barangjual` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `hidangan_id`
--
ALTER TABLE `hidangan_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
  MODIFY `id_carinota` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `transaksijual`
--
ALTER TABLE `transaksijual`
  MODIFY `id_transaksijual` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=389;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barangjual`
--
ALTER TABLE `barangjual`
  ADD CONSTRAINT `barangjual_ibfk_1` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksijual`
--
ALTER TABLE `transaksijual`
  ADD CONSTRAINT `transaksijual_ibfk_1` FOREIGN KEY (`id_barangjual`) REFERENCES `barangjual` (`id_barangjual`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
