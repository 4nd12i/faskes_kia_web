-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 23, 2020 at 03:15 PM
-- Server version: 5.7.31-0ubuntu0.18.04.1
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faskeskia`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_bidan`
--

CREATE TABLE `m_bidan` (
  `id_bidan` int(11) NOT NULL,
  `no_sipb` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat_ktp` varchar(255) NOT NULL,
  `alamat_domisili` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `tlp` varchar(15) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `gol_darah` varchar(3) NOT NULL,
  `pendidikan_terakhir` varchar(10) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tgl_masuk_bidan` date NOT NULL,
  `ST` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_bidan`
--

INSERT INTO `m_bidan` (`id_bidan`, `no_sipb`, `nama`, `no_ktp`, `tempat_lahir`, `tgl_lahir`, `alamat_ktp`, `alamat_domisili`, `longitude`, `latitude`, `tlp`, `hp`, `agama`, `gol_darah`, `pendidikan_terakhir`, `nama_sekolah`, `jurusan`, `foto`, `tgl_masuk_bidan`, `ST`) VALUES
(1, '446/619/SDK/XI/2012', 'Riska Dewi', '35781321329291', 'Gresik', '1980-05-07', '<p>Jl. Panglima Sudirman No. 1</p>\n\n<p>Kelurahan Banten</p>\n\n<p>Kecamatan Gati</p>\n\n<p>Kota Gresik</p>\n', '<p>Jl. Panglima Sudirman No. 1</p>\n\n<p>Kelurahan Banten</p>\n\n<p>Kecamatan Gati</p>\n\n<p>Kota Gresik</p>\n', '-6.954991', '112.504573', '031228123', '0812121098', 'Islam', 'B', 'S3', 'Universitas Muhammadyah', 'Kebidanan', '', '2020-06-15', 1),
(2, '1212121', 'dona', '111111111', 'Gresik', '1980-06-16', '<p>Jl. Panglima Sudirman No. 1</p>  <p>Kelurahan Banten</p>  <p>Kecamatan Gati</p>  <p>Kota Gresik</p>', '<p>Jl. Panglima Sudirman No. 1</p>  <p>Kelurahan Banten</p>  <p>Kecamatan Gati</p>  <p>Kota Gresik</p>', '-6.968100', '112.514500', '', '', 'Islam', 'A', 'S1', 'UINSA', 'Kebidanan', '', '2020-06-15', 1),
(3, '123451', 'donaa', '11211212', 'Surabaya', '1991-03-01', '<p>Jl. Panglima Sudirman No. 1</p>  <p>Kelurahan Banten</p>  <p>Kecamatan Gati</p>  <p>Kota Gresik</p>', '<p>Jl. Panglima Sudirman No. 1</p>  <p>Kelurahan Banten</p>  <p>Kecamatan Gati</p>  <p>Kota Gresik</p>', '-6.961704', '112.521887', '', '', 'Islam', 'AB', 'S1', 'UMSIDA', 'Kebidanan', '', '2020-06-15', 1),
(4, '99999999999', 'Febrianti Selena', '1122334455667788', 'Gresik', '1990-06-12', '<p>JL. Abdul Rahman Wahid No 121</p>\r\n', '<p>JL. Abdul Rahman Wahid No 121</p>\r\n', '-6.990294', '112.561008', '031582782', '08129289283', 'Islam', 'AB', 'S1', 'UNIVERSITAS GRESIK', 'kebidanan', '', '2020-06-16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_pasien_anak`
--

CREATE TABLE `m_pasien_anak` (
  `id_pasien_anak` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `alamat_orangtua` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `usia` varchar(255) NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `berat_lahir` varchar(5) NOT NULL,
  `panjang_badan` varchar(5) NOT NULL,
  `ST` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_pasien_anak`
--

INSERT INTO `m_pasien_anak` (`id_pasien_anak`, `nama`, `nama_ayah`, `nama_ibu`, `alamat_orangtua`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `usia`, `anak_ke`, `berat_lahir`, `panjang_badan`, `ST`) VALUES
(1, 'Ferdiawan', 'Baskoro', 'Rina', '', 'L', 'Surabaya', '2019-05-05', '', 1, '3,15', '15,2', 1),
(2, 'Boni', 'Wito', 'Heni', '<p>Jl. Indragiri No 000</p>\r\n', 'P', 'Surabaya', '1989-03-15', '', 1, '3,1', '15,1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_pasien_ibu`
--

CREATE TABLE `m_pasien_ibu` (
  `id_pasien_ibu` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` varchar(255) NOT NULL,
  `tlp` varchar(20) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `kehamilan_ke` int(11) NOT NULL,
  `usia` int(11) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pendidikan` varchar(10) NOT NULL,
  `gol_darah` varchar(3) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `no_jkn` varchar(255) NOT NULL,
  `ST` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_pasien_ibu`
--

INSERT INTO `m_pasien_ibu` (`id_pasien_ibu`, `nik`, `nama`, `alamat`, `longitude`, `latitude`, `tempat_lahir`, `tgl_lahir`, `tlp`, `hp`, `kehamilan_ke`, `usia`, `agama`, `pendidikan`, `gol_darah`, `pekerjaan`, `no_jkn`, `ST`) VALUES
(1, '111111', 'Donna', '<p>Jl. Musi No 123</p>\r\n', '-6.981969', '112.522846', 'Gresik', '1981-02-22', '', '8559218390', 2, 39, 'Kristen Protestan', 'SMK', 'A', 'SWASTA', '11111111', 1),
(2, '2222222', 'Indri', '<p>Jl. Menganti No 1</p>\r\n', '-6.985437', '112.521006', 'Gresik', '1990-05-02', '0315562762', '08129892832', 1, 30, 'Islam', 'SMK', 'A', 'IRT', '555 2727 12223', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_pengguna`
--

CREATE TABLE `m_pengguna` (
  `username` varchar(15) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hak` varchar(50) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `id_bidan` int(11) NOT NULL,
  `ST` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_pengguna`
--

INSERT INTO `m_pengguna` (`username`, `nik`, `nama`, `password`, `hak`, `foto`, `id_bidan`, `ST`) VALUES
('admin', '111111', 'Administrator', 'admin', 'administrator', '', 1, 1),
('user', '1234567890', 'dona', '123', 'bidan', NULL, 2, 1),
('user1', '1122334455667788', 'Febrianti Selena', 'user1', 'bidan', NULL, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_setting`
--

CREATE TABLE `m_setting` (
  `id` int(11) NOT NULL,
  `nama_aplikasi` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tlp` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `nama_perusahaan` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) NOT NULL,
  `web` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_setting`
--

INSERT INTO `m_setting` (`id`, `nama_aplikasi`, `email`, `tlp`, `fax`, `nama_perusahaan`, `alamat`, `web`, `logo`) VALUES
(1, 'FASKES KIA', 'faskeskia@ymail.com', '03155176271', '031555555', 'POSYANDU', 'Jl. Rahman Wahid No 121', 'www.faskeskia.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_berita`
--

CREATE TABLE `t_berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `fotosampul` varchar(255) DEFAULT NULL,
  `penulis` varchar(255) DEFAULT NULL,
  `isi` varchar(255) DEFAULT NULL,
  `tanggal_posting` date DEFAULT NULL,
  `tanggal_update` date DEFAULT NULL,
  `ST` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_imunisasi_anak`
--

CREATE TABLE `t_imunisasi_anak` (
  `id_cek` int(11) NOT NULL,
  `id_pasien_anak` int(11) DEFAULT NULL,
  `id_bidan` int(11) DEFAULT NULL,
  `tgl_periksa` date NOT NULL,
  `usia` int(11) DEFAULT NULL,
  `berat_badan` double DEFAULT NULL,
  `tinggi_badan` double NOT NULL,
  `jenis_imunisasi` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `ST` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_imunisasi_anak`
--

INSERT INTO `t_imunisasi_anak` (`id_cek`, `id_pasien_anak`, `id_bidan`, `tgl_periksa`, `usia`, `berat_badan`, `tinggi_badan`, `jenis_imunisasi`, `keterangan`, `ST`) VALUES
(1, 1, 1, '2020-06-26', 4, 3, 15, 'DPT-HB-Hib 2', '<p>Tidak Ada</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_kesehatan_ibu`
--

CREATE TABLE `t_kesehatan_ibu` (
  `id_cek` int(11) NOT NULL,
  `id_pasien_ibu` int(11) NOT NULL,
  `id_bidan` int(11) NOT NULL,
  `hpht` varchar(50) DEFAULT NULL,
  `htp` varchar(50) DEFAULT NULL,
  `tinggi_badan` double DEFAULT NULL,
  `berat_badan` double DEFAULT NULL,
  `riwayat_penyakit` varchar(255) DEFAULT NULL,
  `tgl_periksa` date DEFAULT NULL,
  `keluhan_sekarang` varchar(255) DEFAULT NULL,
  `tekanan_darah` varchar(10) DEFAULT NULL,
  `umur_kehamilan` varchar(255) DEFAULT NULL,
  `tinggi_fundus` varchar(255) DEFAULT NULL,
  `letak_janin` varchar(255) DEFAULT NULL,
  `denyut_jantung` varchar(255) DEFAULT NULL,
  `kaki_bengkak` varchar(255) DEFAULT NULL,
  `beri_vitamin` varchar(255) DEFAULT NULL,
  `nasihat` varchar(255) DEFAULT NULL,
  `kapan_kembali` date DEFAULT NULL,
  `ST` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_kesehatan_ibu`
--

INSERT INTO `t_kesehatan_ibu` (`id_cek`, `id_pasien_ibu`, `id_bidan`, `hpht`, `htp`, `tinggi_badan`, `berat_badan`, `riwayat_penyakit`, `tgl_periksa`, `keluhan_sekarang`, `tekanan_darah`, `umur_kehamilan`, `tinggi_fundus`, `letak_janin`, `denyut_jantung`, `kaki_bengkak`, `beri_vitamin`, `nasihat`, `kapan_kembali`, `ST`) VALUES
(1, 2, 1, '12121', '12222', 165, 59, '<p>Tidak Ada</p>\r\n', '2020-06-15', '<p>Kaki Sakit</p>\n', '120', '7', '10', '<p>Rahim Atas</p>', '90', 'Iya', 'Iya', '<p>Harus Banyak Istirahat</p>\r\n', '2020-06-22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_log`
--

CREATE TABLE `t_log` (
  `id_log` int(11) NOT NULL,
  `id_bidan` int(11) DEFAULT NULL,
  `id_pasien_ibu` int(11) DEFAULT NULL,
  `id_pasien_anak` int(11) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `jam` time NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_log`
--

INSERT INTO `t_log` (`id_log`, `id_bidan`, `id_pasien_ibu`, `id_pasien_anak`, `nama`, `tanggal`, `jam`, `jabatan`, `status`) VALUES
(1, 1, NULL, NULL, 'Administrator', '2020-07-07', '19:55:21', 'administrator', 'Login'),
(2, 1, NULL, NULL, 'Administrator', '2020-07-07', '20:12:08', 'administrator', 'Login'),
(3, 2, NULL, NULL, 'dona', '2020-07-07', '20:20:21', 'bidan', 'Login'),
(4, 1, NULL, NULL, 'Administrator', '2020-07-07', '11:16:00', 'administrator', 'Login'),
(5, 1, NULL, NULL, 'Administrator', '2020-07-07', '04:18:14', 'administrator', 'Login'),
(6, 1, NULL, NULL, 'Administrator', '2020-07-08', '06:18:28', 'administrator', 'Login'),
(7, 1, NULL, NULL, 'Administrator', '2020-07-08', '04:43:15', 'administrator', 'Login'),
(8, 1, NULL, NULL, 'Administrator', '2020-07-08', '05:04:53', 'administrator', 'Login'),
(9, 1, NULL, NULL, 'Administrator', '2020-07-13', '07:43:31', 'administrator', 'Login'),
(10, 1, NULL, NULL, 'Administrator', '2020-07-15', '09:20:07', 'administrator', 'Login'),
(11, 1, NULL, NULL, 'Administrator', '2020-07-18', '11:27:54', 'administrator', 'Login'),
(12, 1, NULL, NULL, 'Administrator', '2020-07-21', '04:38:25', 'administrator', 'Login'),
(13, 1, NULL, NULL, 'Administrator', '2020-07-21', '12:13:51', 'administrator', 'Login'),
(14, 1, NULL, NULL, 'Administrator', '2020-07-21', '12:27:28', 'administrator', 'Login'),
(15, 1, NULL, NULL, 'Administrator', '2020-07-21', '02:53:05', 'administrator', 'Login'),
(16, 1, NULL, NULL, 'Administrator', '2020-07-21', '04:13:32', 'administrator', 'Login'),
(17, 1, NULL, NULL, 'Administrator', '2020-08-04', '07:58:27', 'administrator', 'Login'),
(18, 1, NULL, NULL, 'Administrator', '2020-08-11', '05:09:38', 'administrator', 'Login'),
(19, 1, NULL, NULL, 'Administrator', '2020-08-25', '10:56:22', 'administrator', 'Login'),
(20, 1, NULL, NULL, 'Administrator', '2020-08-25', '11:18:42', 'administrator', 'Login'),
(21, 1, NULL, NULL, 'Administrator', '2020-08-25', '01:05:58', 'administrator', 'Login'),
(22, 1, NULL, NULL, 'Administrator', '2020-08-25', '03:30:46', 'administrator', 'Login'),
(23, 1, NULL, NULL, 'Administrator', '2020-08-27', '01:43:31', 'administrator', 'Login'),
(24, 1, NULL, NULL, 'Administrator', '2020-08-27', '02:00:51', 'administrator', 'Login'),
(25, 1, NULL, NULL, 'Administrator', '2020-08-27', '02:52:27', 'administrator', 'Login'),
(26, 1, NULL, NULL, 'Administrator', '2020-08-27', '03:19:05', 'administrator', 'Login'),
(27, 1, NULL, NULL, 'Administrator', '2020-09-03', '07:46:44', 'administrator', 'Login'),
(28, 1, NULL, NULL, 'Administrator', '2020-09-05', '09:11:39', 'administrator', 'Login'),
(29, 1, NULL, NULL, 'Administrator', '2020-09-05', '09:35:15', 'administrator', 'Login'),
(30, 1, NULL, NULL, 'Administrator', '2020-09-10', '08:30:08', 'administrator', 'Login'),
(31, 1, NULL, NULL, 'Administrator', '2020-09-10', '08:30:21', 'administrator', 'Login'),
(32, 1, NULL, NULL, 'Administrator', '2020-09-10', '08:52:15', 'administrator', 'Login'),
(33, 1, NULL, NULL, 'Administrator', '2020-09-10', '08:56:57', 'administrator', 'Login'),
(34, 1, NULL, NULL, 'Administrator', '2020-09-11', '07:11:43', 'administrator', 'Login'),
(35, 1, NULL, NULL, 'Administrator', '2020-09-11', '08:27:25', 'administrator', 'Login'),
(36, 1, NULL, NULL, 'Administrator', '2020-09-14', '07:55:11', 'administrator', 'Login'),
(37, 1, NULL, NULL, 'Administrator', '2020-09-15', '08:27:36', 'administrator', 'Login'),
(38, 1, NULL, NULL, 'Administrator', '2020-09-15', '08:47:49', 'administrator', 'Login'),
(39, 1, NULL, NULL, 'Administrator', '2020-09-15', '09:33:27', 'administrator', 'Login'),
(40, 1, NULL, NULL, 'Administrator', '2020-09-16', '10:32:06', 'administrator', 'Login'),
(41, 1, NULL, NULL, 'Administrator', '2020-09-17', '02:37:25', 'administrator', 'Login'),
(42, 1, NULL, NULL, 'Administrator', '2020-09-17', '07:04:14', 'administrator', 'Login');

-- --------------------------------------------------------

--
-- Table structure for table `t_persalinan`
--

CREATE TABLE `t_persalinan` (
  `id_persalinan` int(11) NOT NULL,
  `id_pasien_ibu` int(11) DEFAULT NULL,
  `id_bidan` int(11) DEFAULT NULL,
  `tgl_persalinan` date DEFAULT NULL,
  `usia_kehamilan` int(11) DEFAULT NULL,
  `penolong_persalinan` varchar(255) DEFAULT NULL,
  `cara_persalinan` varchar(255) DEFAULT NULL,
  `keadaan_ibu` varchar(255) DEFAULT NULL,
  `ST` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_persalinan`
--

INSERT INTO `t_persalinan` (`id_persalinan`, `id_pasien_ibu`, `id_bidan`, `tgl_persalinan`, `usia_kehamilan`, `penolong_persalinan`, `cara_persalinan`, `keadaan_ibu`, `ST`) VALUES
(1, 2, 1, '2020-06-16', 8, 'Suster', 'Persalinan Normal', '<p>Sehat</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_programkb`
--

CREATE TABLE `t_programkb` (
  `id_programkb` int(11) NOT NULL,
  `no_registrasi` varchar(255) DEFAULT NULL,
  `nama_peserta` varchar(255) DEFAULT NULL,
  `usia` int(11) DEFAULT NULL,
  `suami_istri` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `tempat_pelayanan` varchar(255) DEFAULT NULL,
  `metode_kontrasepsi` varchar(255) DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_tindakan` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `ST` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_programkb`
--

INSERT INTO `t_programkb` (`id_programkb`, `no_registrasi`, `nama_peserta`, `usia`, `suami_istri`, `alamat`, `tempat_pelayanan`, `metode_kontrasepsi`, `tgl_mulai`, `tgl_tindakan`, `tgl_kembali`, `keterangan`, `ST`) VALUES
(1, 'KB/001/VI/2020', 'William', 34, 'Eva', '<p>Jl. Kebraon No 11</p>\r\n', 'Posyandu Bunga', 'Kondom', '2020-06-23', '2020-06-24', '2020-06-30', '<p>Sehat</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_tips`
--

CREATE TABLE `t_tips` (
  `id_tips` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `fotosampul` varchar(255) DEFAULT NULL,
  `penulis` varchar(255) DEFAULT NULL,
  `isi` varchar(255) DEFAULT NULL,
  `tanggal_posting` date DEFAULT NULL,
  `tanggal_update` date DEFAULT NULL,
  `ST` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_bidan`
--
ALTER TABLE `m_bidan`
  ADD PRIMARY KEY (`id_bidan`);

--
-- Indexes for table `m_pasien_anak`
--
ALTER TABLE `m_pasien_anak`
  ADD PRIMARY KEY (`id_pasien_anak`);

--
-- Indexes for table `m_pasien_ibu`
--
ALTER TABLE `m_pasien_ibu`
  ADD PRIMARY KEY (`id_pasien_ibu`);

--
-- Indexes for table `m_pengguna`
--
ALTER TABLE `m_pengguna`
  ADD PRIMARY KEY (`username`),
  ADD KEY `id_bidan` (`id_bidan`);

--
-- Indexes for table `m_setting`
--
ALTER TABLE `m_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_berita`
--
ALTER TABLE `t_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `t_imunisasi_anak`
--
ALTER TABLE `t_imunisasi_anak`
  ADD PRIMARY KEY (`id_cek`),
  ADD KEY `id_pasien_anak` (`id_pasien_anak`),
  ADD KEY `id_bidan` (`id_bidan`);

--
-- Indexes for table `t_kesehatan_ibu`
--
ALTER TABLE `t_kesehatan_ibu`
  ADD PRIMARY KEY (`id_cek`),
  ADD KEY `id_pasien_ibu` (`id_pasien_ibu`),
  ADD KEY `id_bidan` (`id_bidan`);

--
-- Indexes for table `t_log`
--
ALTER TABLE `t_log`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `id_bidan` (`id_bidan`);

--
-- Indexes for table `t_persalinan`
--
ALTER TABLE `t_persalinan`
  ADD PRIMARY KEY (`id_persalinan`),
  ADD KEY `id_bidan` (`id_bidan`),
  ADD KEY `id_pasien_ibu` (`id_pasien_ibu`);

--
-- Indexes for table `t_programkb`
--
ALTER TABLE `t_programkb`
  ADD PRIMARY KEY (`id_programkb`);

--
-- Indexes for table `t_tips`
--
ALTER TABLE `t_tips`
  ADD PRIMARY KEY (`id_tips`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_bidan`
--
ALTER TABLE `m_bidan`
  MODIFY `id_bidan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `m_pasien_anak`
--
ALTER TABLE `m_pasien_anak`
  MODIFY `id_pasien_anak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m_pasien_ibu`
--
ALTER TABLE `m_pasien_ibu`
  MODIFY `id_pasien_ibu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m_setting`
--
ALTER TABLE `m_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_berita`
--
ALTER TABLE `t_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_imunisasi_anak`
--
ALTER TABLE `t_imunisasi_anak`
  MODIFY `id_cek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_kesehatan_ibu`
--
ALTER TABLE `t_kesehatan_ibu`
  MODIFY `id_cek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_log`
--
ALTER TABLE `t_log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `t_persalinan`
--
ALTER TABLE `t_persalinan`
  MODIFY `id_persalinan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_programkb`
--
ALTER TABLE `t_programkb`
  MODIFY `id_programkb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_tips`
--
ALTER TABLE `t_tips`
  MODIFY `id_tips` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `m_pengguna`
--
ALTER TABLE `m_pengguna`
  ADD CONSTRAINT `m_pengguna_ibfk_1` FOREIGN KEY (`id_bidan`) REFERENCES `m_bidan` (`id_bidan`);

--
-- Constraints for table `t_imunisasi_anak`
--
ALTER TABLE `t_imunisasi_anak`
  ADD CONSTRAINT `t_imunisasi_anak_ibfk_1` FOREIGN KEY (`id_pasien_anak`) REFERENCES `m_pasien_anak` (`id_pasien_anak`),
  ADD CONSTRAINT `t_imunisasi_anak_ibfk_2` FOREIGN KEY (`id_bidan`) REFERENCES `m_bidan` (`id_bidan`);

--
-- Constraints for table `t_kesehatan_ibu`
--
ALTER TABLE `t_kesehatan_ibu`
  ADD CONSTRAINT `t_kesehatan_ibu_ibfk_1` FOREIGN KEY (`id_pasien_ibu`) REFERENCES `m_pasien_ibu` (`id_pasien_ibu`),
  ADD CONSTRAINT `t_kesehatan_ibu_ibfk_2` FOREIGN KEY (`id_bidan`) REFERENCES `m_bidan` (`id_bidan`);

--
-- Constraints for table `t_log`
--
ALTER TABLE `t_log`
  ADD CONSTRAINT `t_log_ibfk_1` FOREIGN KEY (`id_bidan`) REFERENCES `m_bidan` (`id_bidan`);

--
-- Constraints for table `t_persalinan`
--
ALTER TABLE `t_persalinan`
  ADD CONSTRAINT `t_persalinan_ibfk_1` FOREIGN KEY (`id_bidan`) REFERENCES `m_bidan` (`id_bidan`),
  ADD CONSTRAINT `t_persalinan_ibfk_2` FOREIGN KEY (`id_pasien_ibu`) REFERENCES `m_pasien_ibu` (`id_pasien_ibu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
