-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 31, 2020 at 07:01 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inspirasisida`
--

-- --------------------------------------------------------

--
-- Table structure for table `dbmasyarakat`
--

CREATE TABLE `dbmasyarakat` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `tahun` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `lokasi` text NOT NULL,
  `abstraksi` text NOT NULL,
  `kategori` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dbopd`
--

CREATE TABLE `dbopd` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `tahun` int(11) NOT NULL DEFAULT '0',
  `opd` varchar(50) NOT NULL,
  `lokasi` text NOT NULL,
  `abstraksi` text NOT NULL,
  `berkas` varchar(100) DEFAULT NULL,
  `kategori` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lembaga`
--

CREATE TABLE `lembaga` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nama_lembaga` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `ktp` text NOT NULL,
  `surat_pernyataan` text NOT NULL,
  `proposal` varchar(100) NOT NULL,
  `url_proposal` text NOT NULL,
  `verifikasi` varchar(3) NOT NULL,
  `ket` varchar(100) DEFAULT NULL,
  `kategori_peena` varchar(15) NOT NULL,
  `proposal_akhr` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_04_06_032427_verifiy_users_migration', 1),
(2, '2020_08_24_121331_galeri', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pena_opd`
--

CREATE TABLE `pena_opd` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgjawab` varchar(100) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `surat_pernyataan` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `proposal` varchar(100) NOT NULL,
  `url_proposal` text NOT NULL,
  `verifikasi` varchar(3) NOT NULL,
  `ket` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `ktp` text NOT NULL,
  `surat_pernyataan` text NOT NULL,
  `izin_ortu` text NOT NULL,
  `izin_sekolah` text NOT NULL,
  `pendidikan` varchar(15) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `nation` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `proposal` text,
  `url_proposal` text,
  `verifikasi` varchar(3) NOT NULL,
  `ket` varchar(100) DEFAULT NULL,
  `kelompok` int(1) NOT NULL,
  `kategori_peena` varchar(15) NOT NULL,
  `proposal_akhr` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penelitian`
--

CREATE TABLE `penelitian` (
  `id_penelitian` int(11) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `ttl` varchar(400) NOT NULL,
  `nation` varchar(500) NOT NULL,
  `pekerjaan` varchar(400) NOT NULL,
  `ktp` varchar(500) NOT NULL,
  `instansi` varchar(500) NOT NULL,
  `agama` varchar(400) NOT NULL,
  `pendidikan` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `alamat` varchar(600) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `lokus` varchar(500) NOT NULL,
  `abstrak` varchar(500) NOT NULL,
  `verifikasi` int(3) NOT NULL,
  `ket` varchar(500) NOT NULL,
  `tgl_input` datetime NOT NULL,
  `tgl_edit` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `permohonan`
--

CREATE TABLE `permohonan` (
  `id_pemohon` int(11) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `ttl` varchar(300) NOT NULL,
  `pekerjaan` varchar(500) NOT NULL,
  `alamat` varchar(600) NOT NULL,
  `ktp` varchar(200) NOT NULL,
  `pendidikan` varchar(200) NOT NULL,
  `agama` varchar(400) NOT NULL,
  `telp` varchar(100) NOT NULL,
  `nation` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `tujuan` int(4) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `tahun` varchar(30) NOT NULL,
  `instansi` varchar(500) NOT NULL,
  `kota` varchar(500) NOT NULL,
  `data` varchar(3000) NOT NULL,
  `verifikasi` int(5) NOT NULL,
  `ket` varchar(500) NOT NULL,
  `id_user` int(200) NOT NULL,
  `tgl_input` datetime NOT NULL,
  `tgl_edit` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prosedur`
--

CREATE TABLE `prosedur` (
  `id` int(11) NOT NULL,
  `judul_prosedur` varchar(800) NOT NULL,
  `narasi` text NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `berkas` varchar(800) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `unitkerja`
--

CREATE TABLE `unitkerja` (
  `id` int(10) NOT NULL,
  `nama_uk` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unitkerja`
--

INSERT INTO `unitkerja` (`id`, `nama_uk`) VALUES
(1, 'Walikota Bontang'),
(2, 'Sekretariat Daerah'),
(3, 'Sekretariat DPRD'),
(4, 'Inspektorat Daerah'),
(5, 'Dinas Pendidikan dan Kebudayaan'),
(6, 'Dinas Kesehatan dan Keluarga Berencana'),
(7, 'Dinas Pekerjaan Umum dan Penataan Ruang Kota'),
(8, 'Dinas Perumahan Kawasan Permukiman dan Pertanahan'),
(9, 'Satuan Polisi Pamong Praja'),
(10, 'Dinas Pemadam Kebakaran dan Penyelamatan'),
(11, 'Dinas Sosial Pemberdayaan Perempuan dan Pemberdayaan Masyarakat'),
(12, 'Dinas Penanaman Modal Tenaga Kerja dan Pelayanan Terpadu Satu Pintu'),
(13, 'Dinas Lingkungan Hidup'),
(14, 'Dinas Kependudukan dan Pencatatan Sipil'),
(15, 'Dinas Perhubungan'),
(16, 'Dinas Komunikasi Informatika dan Statistik'),
(17, 'Dinas Pemuda, Olahraga dan Pariwisata'),
(18, 'Dinas Perpustakaan dan Kearsipan'),
(19, 'Dinas Ketahanan Pangan Perikanan dan Pertanian'),
(20, 'Dinas Koperasi Usaha Kecil Menengah dan Perdagangan'),
(21, 'Badan Perencanaan Penelitian dan Pengembangan'),
(22, 'Badan Kepegawaian Pendidikan dan Pelatihan'),
(23, 'Badan Pengelolaan Keuangan Daerah'),
(24, 'Badan Penanggulangan Bencana Daerah'),
(25, 'RSUD Taman Husada Kota Bontang'),
(26, 'Badan Kesatuan Bangsa dan Politik'),
(27, 'Sekretariat KORPRI'),
(28, 'Kecamatan Bontang Utara'),
(29, 'Kecamatan Bontang Selatan'),
(30, 'Kecamatan Bontang Barat'),
(31, 'Kecamatan Bontang Baru'),
(32, 'Keluarahan Api - Api'),
(33, 'Kelurahan Gunung Elai'),
(34, 'Kelurahan Bontang Kuala'),
(35, 'Kelurahan Lhoktuan'),
(36, 'Kelurahan Guntung'),
(37, 'Kelurahan Satimpo'),
(38, 'Kelurahan Tanjung Laut'),
(39, 'Kelurahan Tanjut Laut Indah'),
(40, 'Kelurahan Berbas Pantai'),
(41, 'Kelurahan Berbas Tengah'),
(42, 'Kelurahan Bontang Lestari'),
(43, 'Kelurahan Kanaan'),
(44, 'Kelurahan Gunung Telihan'),
(45, 'Kelurahan Belimbing');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(1) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `email_verification_token` varchar(191) NOT NULL,
  `level` int(11) NOT NULL DEFAULT '0',
  `last_login` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `email_verified` int(11) NOT NULL DEFAULT '0',
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `nama`, `password`, `email`, `email_verified_at`, `email_verification_token`, `level`, `last_login`, `created_at`, `email_verified`, `updated_at`) VALUES
(174, NULL, 'Admin Bapelitbang', '$2y$10$xTWLhknOQjndAvTb1.taa.tG5y/Aw6ooTj3PNs8v0K98GfHXskFXm', 'bapelitbang@bontangkota.go.id', '2020-08-25 05:57:46', '', 1, '2020-08-30 22:59:43', '2020-08-31 06:59:43', 1, '2020-08-31 06:59:43'),
(175, NULL, 'Admin Kominfo', '$2y$10$H9CEhGfSb9Zwh3OqGm9bGeBqnPANsthHAsJGOoVPs5PwSUN1lpaLe', 'kominfo@bontangkota.go.id', '2020-08-25 05:59:44', '', 1, '2020-08-30 17:50:02', '2020-08-31 01:50:02', 1, '2020-08-31 01:50:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dbmasyarakat`
--
ALTER TABLE `dbmasyarakat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dbopd`
--
ALTER TABLE `dbopd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lembaga`
--
ALTER TABLE `lembaga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pena_opd`
--
ALTER TABLE `pena_opd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penelitian`
--
ALTER TABLE `penelitian`
  ADD PRIMARY KEY (`id_penelitian`);

--
-- Indexes for table `permohonan`
--
ALTER TABLE `permohonan`
  ADD PRIMARY KEY (`id_pemohon`);

--
-- Indexes for table `prosedur`
--
ALTER TABLE `prosedur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unitkerja`
--
ALTER TABLE `unitkerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dbmasyarakat`
--
ALTER TABLE `dbmasyarakat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `dbopd`
--
ALTER TABLE `dbopd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lembaga`
--
ALTER TABLE `lembaga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pena_opd`
--
ALTER TABLE `pena_opd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `penelitian`
--
ALTER TABLE `penelitian`
  MODIFY `id_penelitian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `permohonan`
--
ALTER TABLE `permohonan`
  MODIFY `id_pemohon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `prosedur`
--
ALTER TABLE `prosedur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `unitkerja`
--
ALTER TABLE `unitkerja`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
