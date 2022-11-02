-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 01:54 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jawatan`
--

INSERT INTO `jawatan` (`id`, `job`, `overview`, `responsibilities`, `requirements`, `date`) VALUES
(3, 'PEMBANTU JURUAUDIT GRED W19', 'Bertanggungjawab menjalankan pengauditan secara profesional, mengesahkan penyata kewangan, mengeluarkan sijil audit dan laporan berkaitannya, menyediakan laporan audit yang berkualiti, timely dan seimbang, menguruskan aktiviti pengauditan dengan cekap dan berkesan serta memberi khidmat nasihat, memenuhi keperluan dan harapan stakeholders.\r\nLPPKN bertanggungjawab dalam menasihati Kerajaan mengenai perkara-perkara berkaitan dasar dan program kependudukan, pembangunan keluarga dan reproduksi manusia.', 'LPPKN juga bertanggungjawab dalam merancang, melaksana dan menyelaras program dan aktiviti kependudukan, pembangunan keluarga dan reproduksi manusia disamping menyebar pengetahuan, memberi didikan dan menggalakkan tingkah laku positif dalam bidang kependudukan, pembangunan keluarga dan reproduksi manusia.\r\nSPM / O Level / SKM Level 1 / SKM Level 2 / SKM Level 3 or Equivalent', '1. Calon bagi lantikan hendaklah memiliki kelayakan seperti berikut:\r\n\r\n(a) warganegara Malaysia;\r\n(b) berumur tidak kurang dari 18 tahun pada tarikh tutup iklan jawatan; dan\r\n(c) (i) Sijil Pelajaran Malaysia atau kelayakan yang diiktiraf setaraf dengannya oleh\r\nKerajaan serta Kepujian dalam subjek Matematik pada peringkat peperiksaan\r\ntersebut; (Gaji permulaan ialah pada Gred W19:1,353.00); atau\r\n(ii) Sijil Pelajaran Malaysia atau kelayakan yang diiktiraf setaraf dengannya oleh\r\nKerajaan serta Sijil Perdagangan Malaysia peringkat Pertengahan (Simpan Kira-\r\nkira) atau kelayakan yang diiktiraf setaraf dengannya. (Gaji permulaan ialah pada\r\nGred W19:1,409.40); atau\r\n(iii) Sijil Pelajaran Malaysia atau kelayakan yang diiktiraf setaraf dengannya oleh\r\nKerajaan serta Sijil Kemahiran Malaysia Tahap 2 dalam bidang berkaitan atau\r\nkelayakan yang diiktiraf setaraf dengannya. (Gaji permulaan ialah pada Gred\r\nW19: 1,409.40); atau\r\n(iv) Sijil Pelajaran Malaysia atau kelayakan yang diiktiraf setaraf dengannya oleh\r\nKerajaan serta Sijil Perdagangan Malaysia peringkat Tertinggi (Perakaunan) atau\r\nkelayakan yang diiktiraf setaraf dengannya. (Gaji permulaan ialah pada Gred', '2022-12-08'),
(4, 'Sales Associate', ' Jualan harian Job Requirement: Degree Holder Job Description: jual-jual bina hubungan bisnes kepada bisnes', 'Degree Holder', 'jual-jual menjalin hubungan bisnes kepada bisnes', '2022-12-16');

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
(15, 'Kop. Perbadanan Putrajaya Bhd', 2, 1, NULL),
(16, 'Kop. Serbaguna Anak-Anak Selangor Bhd (KOSAS)', 2, 2, 5000),
(17, 'Kop. Al Hilal (M) Bhd', 2, 1, NULL),
(18, 'Kop. Peserta Felcra Paloh Bhd', 2, 2, 5000),
(19, 'Kop. Jabatan Penjara (M) Bhd', 2, 1, NULL),
(20, 'Kop. Peserta Felda Sg Koyan 02 Bhd', 1, 1, NULL),
(21, 'Kop. Warga Komuniti Sains Malaysia Bhd', 2, 1, NULL),
(22, 'Kop. Tenaga Muda Hulu Besut Bhd', 2, 1, 5000),
(23, 'Kop. Kakitangan Petronas Bhd. (KOPETRO)', 2, 1, NULL),
(24, 'Kop. Peneroka Felda Tersang 03 Bhd', 1, 1, NULL),
(25, 'Kop. Emas Tawau Sabah Bhd', 2, 1, NULL),
(26, 'Kop. Permodalan Felda (M) Bhd (KPF)', 1, 1, 5000);

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
(4, 'images/hero-bg.jpg'),
(5, 'images/team.jpg');

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
(4, 'kokok', 'kokok@demo.com', '$2y$10$vyrMbeOnTa6KwCZ6td2.hOoXK2JHlpCu8R/hpcJ8LEoXPVkzmu3nK', 2),
(5, 'amsari', 'sari@demo.com', '$2y$10$STlzgLPIVgEcKTNkElexnOAnX.gjDH3Ro8UxCd18MxmMbBdZ.aAly', 2),
(6, 'admin2', 'admin2@demo.com', '$2y$10$aHlivgWGRROc3wYXvZrgBebEZ23BYJBuOoCdZWOv1MXzVqSZjoZhC', 1);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jawatan`
--
ALTER TABLE `jawatan`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `keahlian`
--
ALTER TABLE `keahlian`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `website_setting`
--
ALTER TABLE `website_setting`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
