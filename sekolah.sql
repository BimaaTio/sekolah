-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2022 at 07:40 AM
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
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `nama_sekolah` varchar(30) NOT NULL,
  `visi` varchar(60) NOT NULL,
  `misi` varchar(60) NOT NULL,
  `tujuan` varchar(60) NOT NULL,
  `tentang_sekolah` text NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `nama_kepsek` varchar(40) NOT NULL,
  `sambutan_kepsek` text NOT NULL,
  `logo_sekolah` varchar(50) NOT NULL,
  `favicon` varchar(50) NOT NULL,
  `foto_kepsek` varchar(50) NOT NULL,
  `slide1` varchar(50) NOT NULL,
  `slide2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`nama_sekolah`, `visi`, `misi`, `tujuan`, `tentang_sekolah`, `alamat`, `email`, `telepon`, `nama_kepsek`, `sambutan_kepsek`, `logo_sekolah`, `favicon`, `foto_kepsek`, `slide1`, `slide2`) VALUES
('SMK Muhammadiyah 1 Muntilan', '<p>mencerdaskan</p><p>- 123</p><p>- 456</p><p>- 789</p>', '<p>mencersdaskan</p><p>- 123</p><p>- 456</p><p>- 789</p>', '<p>mencerdaskan</p><p>- 123</p><p>- 456</p><p>- 789</p>', 'SMK ini dibuat sakdasdasd', 'JALAN KHA DAHLAN GATAK GAMOL, MUNTILAN, MAGELANG, JAWA TENGAH (56413)', 'esemkamutu@gmail.com', '01234567', 'Sutrisna St', '<div Style=\"line-height: 19px;\"><div Style=\"\">Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Quae Sequi Molestiae Blanditiis, Aut</div><div Style=\"\">                Reprehenderit</div><div Style=\"\">                Mollitia Quaerat Voluptatum Amet Cumque Harum Nulla, Ipsam Aperiam. Animi Exercitationem Sapiente,</div><div Style=\"\">                Praesentium Earum Eveniet Dignissimos!</div></div>', '62ca8f1f9215e.png', 'smk.png', '62cad5cd0ed20.jpg', 'slide.jpg', 'slide2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ip` varchar(18) NOT NULL,
  `foto_profil` varchar(50) NOT NULL,
  `tgl_dibuat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `email`, `password`, `ip`, `foto_profil`, `tgl_dibuat`) VALUES
(1, 'Bimaa Tio', 'bim', 'Omahrica@gmail.com', '$2y$10$BgDaTFojt2tx4u7OKJ52AuoSN0KX5SwgHLZPo45Y.M5Qb9.SlIqTi', '::1', 'profil.png', '08-07-2022 14:45:19');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `konten` text NOT NULL,
  `penulis` varchar(20) NOT NULL,
  `ip` varchar(18) NOT NULL,
  `status` varchar(12) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `tgl_upload` varchar(25) NOT NULL,
  `tgl_edit` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `konten`, `penulis`, `ip`, `status`, `gambar`, `tgl_upload`, `tgl_edit`) VALUES
(1, 'Penerimaan Raport UKK ', '<p>Diberitahukan kepada <b>seluruh wali siswa</b> untuk mengambil raport sesuai jadwal</p>', 'Bima', '::1', 'Publish', '62ca8e789ee07.jpeg', '10/07/2022 13.49 WIB', '10-07-2022 15.31 WIB'),
(2, 'Penerimaan Raport UKK ', '<p>Jadwal Penerimaan raport untuk seluruh siswa</p>', 'Bima', '::1', 'Publish', '62ca7e0308605.jpeg', '10/07/2022 14.21 WIB', '10-07-2022 17.38 WIB'),
(3, 'One  PIeceee🏴‍☠️', '<p>aaaaaaaaaaaaaaaa</p>', 'Bima', '::1', 'Publish', '62ca7ef10cbab.png', '10/07/2022 14.25 WIB', '10-07-2022 15.29 WIB'),
(4, 'One  PIeceee', '<p>asdsadasdasdasd</p>', 'Haryo Gunawan', '::1', 'Publish', '62ca7f88c2ef3.jpg', '10/07/2022 14.28 WIB', '11-07-2022 19.08 WIB');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `nip` varchar(16) NOT NULL,
  `jk` varchar(16) NOT NULL,
  `tupoksi` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ip` varchar(18) NOT NULL,
  `foto_profil` varchar(50) NOT NULL,
  `tgl_dibuat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama`, `nip`, `jk`, `tupoksi`, `email`, `username`, `password`, `ip`, `foto_profil`, `tgl_dibuat`) VALUES
(2, 'Haryo Gunawan', '1234567', 'Laki - Laki', 'Guru Olahraga', 'contoh@gmail.com', 'har', '$2y$10$6IgbH5pki6OyoNtUiwFvBur8nXawaubAnqou8qdFDYp78EpXvVtmC', '::1', 'profil.png', '11-07-2022 11:37:10');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama`, `keterangan`, `logo`) VALUES
(1, 'Rekayasa Perangkat Lunak', '<p>Rekayasa Perangkat Lunak (RPL)</p><p>Jurusan mengacu ilmu software enginering</p>', '62c7e94247d3d.png'),
(2, 'Teknik Permesinan', '<p>Teknik Permesinan</p><p>Teknik mbubut</p>', '62c7e9a99d6f3.jpg'),
(3, 'Teknik Kendaraan Ringan', '<p>Teknik Kendaraan Ringan (TKR)</p><p><br></p>', '62c7e9d88298b.jpg'),
(4, 'Teknik Sepeda Motor', '<p>Teknik Sepeda Motor (TSM)</p>', '62c7ea2ed8a35.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` double NOT NULL,
  `nama_lomba` varchar(40) NOT NULL,
  `tingkat_lomba` varchar(15) NOT NULL,
  `peraih` varchar(20) NOT NULL,
  `juara` varchar(20) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `ip` varchar(18) NOT NULL,
  `tgl_lomba` varchar(25) NOT NULL,
  `tgl_dibuat` varchar(25) NOT NULL,
  `tgl_edit` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id_prestasi`, `nama_lomba`, `tingkat_lomba`, `peraih`, `juara`, `kategori`, `gambar`, `ip`, `tgl_lomba`, `tgl_dibuat`, `tgl_edit`) VALUES
(1, 'LKS Tahun 2022', 'Kabupaten', 'Arief Prasetyo', '1', 'Akademik', '62caae90c3bea.jpg', '::1', '2022-02-15', '10/07/2022 17.48', '12-07-2022 00.26 WIB');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nisn` varchar(18) NOT NULL,
  `jk` varchar(16) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ip` varchar(18) NOT NULL,
  `foto_profile` varchar(50) NOT NULL,
  `tgl_dibuat` varchar(25) NOT NULL,
  `tgl_edit` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama`, `nisn`, `jk`, `jurusan`, `username`, `email`, `password`, `ip`, `foto_profile`, `tgl_dibuat`, `tgl_edit`) VALUES
(2, 'Rizky Berkah', '12345', 'Laki - Laki', 'TKR', 'zer', 'contoh@gmail.com', '$2y$10$Z.4dkiHGX1FPpMoe/LLUJux3ZlCvVY7.fge4Vlybo9l2c0cFY2ACW', '', 'profil.png', '11-07-2022 12:27:11', ''),
(3, 'Raka Prihantoro', '12345', 'Laki - Laki', 'RPL', 'raka', 'contoh@gmail.com', '$2y$10$1W5AMyDq2akqMrqt.8oPJus8S48OUGnX1MikpF112w7RROi23vC/y', '', 'profil.png', '11-07-2022 12:29:03', ''),
(4, 'Raka Prihantoro', '12345', 'Laki - Laki', 'RPL', 'rak', 'contoh@gmail.com', '$2y$10$0CoNx00lKl04Ovkx3NBxSeIzN7eTqewRrWtcpIc8ciLnE73tKzBvO', '', 'profil.png', '11-07-2022 18:30:09', '');

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
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
