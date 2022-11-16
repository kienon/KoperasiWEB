-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 02:43 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `federasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `paragraph` longtext NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `name`, `count`) VALUES
(1, 'Pembekal', 100),
(2, 'Kedai', 2577),
(3, 'Unit Penyimpanan Stok', 5000),
(4, 'DC & SUB-DC', 29);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_name`, `uploaded_on`, `status`) VALUES
(1, 'portfolio-2.jpg', '2022-11-02 09:54:13', '1'),
(2, 'portfolio-3.jpg', '2022-11-02 09:54:48', '1'),
(3, 'portfolio-4.jpg', '2022-11-02 09:54:54', '1'),
(4, 'portfolio-5.jpg', '2022-11-02 09:54:59', '1'),
(5, 'portfolio-6.jpg', '2022-11-02 09:55:04', '1'),
(6, 'portfolio-7.jpg', '2022-11-02 09:55:09', '1'),
(7, 'portfolio-8.jpg', '2022-11-02 09:55:15', '1'),
(8, 'portfolio-details-1.jpg', '2022-11-02 09:55:24', '1'),
(9, 'portfolio-details-3.jpg', '2022-11-02 09:58:20', '1');

-- --------------------------------------------------------

--
-- Table structure for table `jawatan`
--

CREATE TABLE `jawatan` (
  `id` int(12) NOT NULL,
  `job` text NOT NULL,
  `overview` longtext NOT NULL,
  `responsibilities` mediumtext NOT NULL,
  `requirements` mediumtext NOT NULL,
  `date` date NOT NULL,
  `location` varchar(255) NOT NULL,
  `salary` varchar(30) NOT NULL,
  `category` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jawatan`
--

INSERT INTO `jawatan` (`id`, `job`, `overview`, `responsibilities`, `requirements`, `date`, `location`, `salary`, `category`) VALUES
(4, 'Sales Associate', 'Utama Jualan harian Job Requirement: Degree Holder Job Description: jual-jual bina hubungan bisnes kepada bisnes', 'jual-jual menjalin hubungan bisnes kepada bisnes, mobilityone', 'Master Degree Holder', '2022-12-22', 'Kuala Lumpur', 'RM2000 - RM3000', 1),
(6, 'IT executive ', 'support all it related', 'responsible', 'degree with 2 years experiences', '2022-11-30', 'Kota Kinabalu - Sabah', 'RM3000 - RM5000', 2),
(7, 'Admin executive', 'support HR department', 'responsible', 'degree with 2 years experiences', '2022-12-16', 'Shah Alam - Selangor', 'RM2000 - RM3500', 3),
(8, 'Business Development', 'Handling Business to Business relations', 'responsible', 'degree with 2 years experiences', '2022-12-30', '', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `keahlian`
--

CREATE TABLE `keahlian` (
  `Id` int(11) NOT NULL,
  `Koperasi` varchar(1000) NOT NULL,
  `Pemborong` tinyint(11) DEFAULT NULL COMMENT '1=Ya, 2= Tidak',
  `Peruncitan` tinyint(11) DEFAULT NULL COMMENT '1=Ya, 2=Tidak',
  `ModalSyer` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keahlian`
--

INSERT INTO `keahlian` (`Id`, `Koperasi`, `Pemborong`, `Peruncitan`, `ModalSyer`) VALUES
(16, 'Kop. Serbaguna Anak-Anak Selangor Berhad (KOSAS)', 2, 2, 5000),
(17, 'Kop. Al Hilal (M) Berhad', 2, 1, NULL),
(18, 'Kop. Peserta Felcra Paloh Berhad', 2, 2, 5000),
(19, 'Kop. Jabatan Penjara (M) Berhad', 2, 1, NULL),
(20, 'Kop. Peserta Felda Sg Koyan 02 Berhad', 1, 1, NULL),
(21, 'Kop. Warga Komuniti Sains Malaysia Berhad', 2, 1, NULL),
(22, 'Kop. Tenaga Muda Hulu Besut Berhad', 2, 1, 5000),
(23, 'Kop. Kakitangan Petronas Berhad. (KOPETRO)', 2, 1, NULL),
(24, 'Kop. Peneroka Felda Tersang 03 Berhad', 1, 1, NULL),
(25, 'Kop. Emas Tawau Sabah Berhad', 2, 1, NULL),
(26, 'Kop. Permodalan Felda (M) Berhad (KPF)', 1, 1, 5000),
(27, 'Kop. Perbadanan Putrajaya Berhad', 2, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `image`) VALUES
(7, 'images/hero-bg.jpg'),
(13, 'images/image 1.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `status`) VALUES
(3, 'admin', 'admin@min.com', '$2y$10$GBoD2oKmJtGYc/HGoolt7.zynvcalGMN1ln04uyeeP/sbpBeRkmWy', 1),
(5, 'amsari', 'sari@demo.com', '$2y$10$la4/D3omfv8MlUyVe5Way.Pd40k3mG9u99JkVgrM5bJ2sBi.pjGde', 2),
(6, 'kienon', 'kienon@tfp.com', '$2y$10$V.J41rlrSXVjj/uERyot4Ofr0maOeKjk355.0uTkKhsDQVYWAQhpy', 1),
(7, 'azwan', 'wan@demo.com', '$2y$10$8sHtB.jkYrd4RrKShY1xjebHQHvU5V8DrmgLd8hhdAt64jbIpy8tq', 1),
(8, 'alya', 'alya@tfp.com', '$2y$10$BdTbxYpJCIPeMwPxhIl1tOmT3wBIS3gGwaDC96THBfBHWUAC.bxO2', 2),
(9, 'admin2', 'admin@fedborong.com.my', '$2y$10$rfqUrWBW870DHXEzH6OGPON/zMx4K4eQE4Yu2DHoVH0RTJr5vFUdi', 2);

-- --------------------------------------------------------

--
-- Table structure for table `website_setting`
--

CREATE TABLE `website_setting` (
  `id` int(10) NOT NULL,
  `website_title` varchar(255) NOT NULL,
  `website_name` varchar(255) NOT NULL,
  `visible_website_name` int(10) NOT NULL DEFAULT 0,
  `website_logo` varchar(255) NOT NULL,
  `website_favicon` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `google_varification_code` text NOT NULL,
  `google_analytics_code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `website_setting`
--

INSERT INTO `website_setting` (`id`, `website_title`, `website_name`, `visible_website_name`, `website_logo`, `website_favicon`, `meta_keyword`, `meta_description`, `google_varification_code`, `google_analytics_code`) VALUES
(1, 'Federasi SKM', 'Federasi', 0, 'Capture.PNG', '2020_TFPLogo-1.png', 'borong, federasi, supply, wholesale, food supply, cooperative, koperasi, malaysia, malay.', 'Federasi membekalkan borongan untuk koperasi di Malaysia, supply wholesale for cooperative in Malaysia.', 'null', 'null');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jawatan`
--
ALTER TABLE `jawatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keahlian`
--
ALTER TABLE `keahlian`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_setting`
--
ALTER TABLE `website_setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jawatan`
--
ALTER TABLE `jawatan`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `keahlian`
--
ALTER TABLE `keahlian`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `website_setting`
--
ALTER TABLE `website_setting`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
