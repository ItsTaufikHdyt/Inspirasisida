-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 15, 2020 at 03:32 PM
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
-- Database: `dbelitbang`
--

-- --------------------------------------------------------

--
-- Table structure for table `dbpenelitian`
--

CREATE TABLE `dbpenelitian` (
  `id_db` int(11) NOT NULL,
  `nama1` varchar(300) NOT NULL,
  `nama2` varchar(300) NOT NULL,
  `nama3` varchar(300) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `lokus` varchar(500) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `instansi` varchar(500) NOT NULL,
  `kota` varchar(300) NOT NULL,
  `abstrak` varchar(500) NOT NULL,
  `tgl_input` datetime NOT NULL,
  `tgl_edit` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

--
-- Dumping data for table `lembaga`
--

INSERT INTO `lembaga` (`id`, `nama`, `nama_lembaga`, `alamat`, `email`, `telp`, `ktp`, `surat_pernyataan`, `proposal`, `url_proposal`, `verifikasi`, `ket`, `kategori_peena`, `proposal_akhr`, `created_at`, `updated_at`) VALUES
(38, 'Budi Tabuti', 'pkt', 'jhjff', 'taufikhdyt2332@gmail.com', '08981717895', 'ktp/20200528-Budi-Tabuti-ktp.jpg', 'surat-pernyataan/20200528-Budi-Tabuti-surat-pernyataan.png', 'proposal/20200528-Budi-Tabuti-proposal.pdf', 'https://github.com/taufikhdyt17', '0', NULL, 'inovasi', NULL, '2020-05-28 03:06:36', '2020-05-28 03:06:36'),
(39, 'Rudi Tabuti', 'pt badak', 'jln', 'rudi@gmail.com', '096764474', 'ktp/20200528-Rudi-Tabuti-ktp.jpg', 'surat-pernyataan/20200528-Rudi-Tabuti-surat-pernyataan.png', 'proposal/20200528-Rudi-Tabuti-proposal.pdf', 'https://github.com/taufikhdyt17', '0', NULL, 'inovasi', NULL, '2020-05-28 06:21:56', '2020-05-28 06:21:56');

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
(1, '2020_04_06_032427_verifiy_users_migration', 1);

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

--
-- Dumping data for table `pena_opd`
--

INSERT INTO `pena_opd` (`id`, `nama`, `tgjawab`, `nip`, `jabatan`, `surat_pernyataan`, `email`, `telp`, `alamat`, `proposal`, `url_proposal`, `verifikasi`, `ket`, `created_at`, `updated_at`) VALUES
(1, 'Walikota Bontang', 'Joko Anwar', '197501182007011017', 'Kepala Seksi Data dan Statistik', 'surat-pernyataan/20200612-Walikota-Bontang-surat-pernyataan.png', 'taufikhdyt2332@gmail.com', '08981717895', 'jhkkh', 'proposal/20200612-Walikota-Bontang-proposal.pdf', 'https://github.com/taufikhdyt17', '0', NULL, '2020-06-11 18:18:09', '2020-06-11 18:18:09'),
(2, 'Dinas Lingkungan Hidup', 'andi matalata', '41041421u92', 'Kepala Seksi Data dan Statistik', 'surat-pernyataan/20200615-Dinas-Lingkungan-Hidup-surat-pernyataan.png', 'thegunners2332@yahoo.com', '096764474', 'jl ks tubun', 'proposal/20200615-Dinas-Lingkungan-Hidup-proposal.pdf', 'https://github.com/taufikhdyt17', '0', NULL, '2020-06-15 06:16:40', '2020-06-15 06:16:40'),
(3, 'Dinas Perhubungan', 'Musji', '521614616', 'Kepala Seksi Data dan Statistik', 'surat-pernyataan/20200615-Dinas-Perhubungan-surat-pernyataan.png', 'dinasperhubungan@bontangkota.go.id', '089374645312', 'jl sekambing', 'proposal/20200615-Dinas-Perhubungan-proposal.pdf', 'https://github.com/taufikhdyt17', '0', NULL, '2020-06-15 07:19:41', '2020-06-15 07:19:41');

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
  `proposal` text NOT NULL,
  `url_proposal` text NOT NULL,
  `verifikasi` varchar(3) NOT NULL,
  `ket` varchar(100) DEFAULT NULL,
  `kelompok` int(1) NOT NULL,
  `kategori_peena` varchar(15) NOT NULL,
  `proposal_akhr` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `nama`, `ttl`, `pekerjaan`, `alamat`, `ktp`, `surat_pernyataan`, `izin_ortu`, `izin_sekolah`, `pendidikan`, `agama`, `telp`, `nation`, `email`, `proposal`, `url_proposal`, `verifikasi`, `ket`, `kelompok`, `kategori_peena`, `proposal_akhr`, `created_at`, `updated_at`) VALUES
(131, 'Budi Tabuti', '2020-05-12', 'Programmer', 'jln', 'ktp/20200528-Budi-Tabuti-ktp.jpg', 'surat-pernyataan/20200528-Budi-Tabuti-surat-pernyataan.png', 'izin-ortu/20200528-Budi-Tabuti-izin-ortu.jpg', 'izin-sekolah/20200528-Budi-Tabuti-izin-sekolah.JPG', 'smk', 'Islam', '08981717895', 'Indonesia', 'budi@hotmail.com', 'proposal/20200528-Budi-Tabuti-proposal.pdf', 'https://github.com/taufikhdyt17', '0', NULL, 1, 'inovasi', NULL, '2020-05-28 06:20:25', '2020-05-28 06:20:25'),
(130, 'Taufik Hidayat', '2020-05-20', 'Programmer', 'jln', 'ktp/20200528-Taufik-Hidayat-ktp.jpg', 'surat-pernyataan/20200528-Taufik-Hidayat-surat-pernyataan.png', 'izin-ortu/20200528-Taufik-Hidayat-izin-ortu.jpg', 'izin-sekolah/20200528-Taufik-Hidayat-izin-sekolah.jpg', 'smk', 'Islam', '08981717895', 'Indonesia', 'taufikhdyt2332@gmail.com', 'proposal/20200528-Taufik-Hidayat-proposal.pdf', 'https://github.com/taufikhdyt17', '2', NULL, 0, 'inovasi', NULL, '2020-05-28 06:17:59', '2020-05-28 06:17:59'),
(133, 'elocos', '2020-06-10', 'Sultan Minyak', 'mmmm', 'ktp/20200609-eloco-ktp.jpg', 'surat-pernyataan/20200609-eloco-surat-pernyataan.png', 'izin-ortu/20200609-eloco-izin-ortu.jpg', 'izin-sekolah/20200609-eloco-izin-sekolah.JPG', 's4', 'Lainnya', '08981717895', 'Indonesia', 'tes@gmail.com', 'proposal/20200609-eloco-proposal.pdf', 'https://github.com/taufikhdyt17', '1', NULL, 0, 'penelitian', NULL, '2020-06-09 01:08:09', '2020-06-09 01:08:09'),
(135, 'Taufik Hidayat', '2020-06-08', 'Programmer', 'Jl Ks Tubun', 'ktp/20200615-Taufik-Hidayat-ktp.jpg', 'surat-pernyataan/20200615-Taufik-Hidayat-surat-pernyataan.png', 'izin-ortu/20200615-Taufik-Hidayat-izin-ortu.jpg', 'izin-sekolah/20200615-Taufik-Hidayat-izin-sekolah.JPG', 'SMK', '-Pilih Agama-', '08981717895', 'Indonesia', 'taufikhdyt2332@gmail.com', 'proposal/20200615-Taufik-Hidayat-proposal.pdf', 'https://github.com/taufikhdyt17', '-1', NULL, 0, 'inovasi', NULL, '2020-06-15 15:07:17', '2020-06-15 15:07:17');

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
  `berkas` varchar(800) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prosedur`
--

INSERT INTO `prosedur` (`id`, `judul_prosedur`, `narasi`, `berkas`, `created_at`, `updated_at`) VALUES
(1, 'Daftar Finalis Lomba SI PEENA 2018', 'Kepada Seluruh Peserta Lomba SI PEENA, tahapan verifikasi proposal awal lomba inovasi, penelitian dan teknologi tepat guna (siPEENA) telah selesai dilaksanakan (dapat dilihat pada menu \"Daftar Verifikasi\" / sudah diumumkan melalui email masing - masing peserta). Tahapan Selanjutnya adalah peserta wajib mengupload Proposal Akhir/Makalah Akhir, paling lambat pada tanggal 24 Juli 2018 pukul 23.59', 'berkas-prosedur/20200615-Daftar-Finalis-Lomba-SI-PEENA-2018.pdf', '2020-06-15 12:53:42', '2020-06-15 13:02:05'),
(44, 'Pendaftaran Lomba SI PEENA 2019', 'Lomba Inovasi dan Penelitian (SI PEENA) Tahun 2019 Dimulai!!!.\r\n\r\nLomba SIPEENA dimaksudkan untuk meningkatkan minat dan kepedulian masyarakat kota bontang dalam berinovasi melaakukan penelitian dan mengembangkan IPTEK yang berkontribusi pada kemajuan pembangunan, peningkatan perekonomian dan kesejahteraan masyarakat Kota Bontang.\r\n\r\nLomba SIPEENA 2019 yang mengusung tema \"Inovasi Pemerintah dan Masyarakat Dalam Meningkatkan Daya Saing Ekonomi Yang Berwawasan Lingkungan\" ini diperuntukkan bagi seluruh masyarakat  dengan berbagai latar belakang profesi (Pelajar/Mahasiswa, Guru/Akademisi, Pegawai Pemerintahan/Swasta, Tokoh Agama dan Budaya, dan Profesi lainnya.)  dan Lembaga/Instansi/Organisasi/Komunitas serta Perangkat Daerah dilingkungan kota bontang.\r\n\r\nOleh karna itu tunggu apalagi, segera daftar dan rebut total hadiah 69Juta rupiah!!!.omba Inovasi dan Penelitian (SI PEENA) Tahun 2019 Dimulai!!!.', 'berkas-prosedur/20200615-Pendaftaran-Lomba-SI-PEENA-2019.pdf', '2020-06-15 10:44:23', '2020-06-15 13:04:07');

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
(5, 'Dinas Pendidikan'),
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
  `password` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `email_verification_token` varchar(191) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `level` varchar(40) NOT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `email_verified` varchar(20) NOT NULL DEFAULT '0',
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `email_verified_at`, `email_verification_token`, `nama`, `level`, `last_login`, `created_at`, `email_verified`, `updated_at`) VALUES
(161, NULL, '$2y$10$yJxLHDZv3bgya3/YXkU7.ePttzfLfPXUpCdalhHwwaytjg5rT..we', 'taufikhdyt2332@gmail.com', '2020-04-20 21:15:56', '', 'Taufik Hidayat', '2', '2020-06-15 07:18:39', '2020-06-15 15:18:39', '1', '2020-06-15 15:18:39'),
(162, NULL, '$2y$10$L9xv.D0nnfCWFe12hzCO6uXTp2jwlKOHbKtOiBv1IyoyoOo8IJ1M2', 'admin@gmail.com', '2020-05-09 21:23:56', '', 'Taufik Hidayat', '1', '2020-06-15 07:21:54', '2020-06-15 15:21:54', '1', '2020-06-15 15:21:54'),
(163, NULL, '$2y$10$hiXlSriCKfIpstA8YfyOL..RKhDVQ9spY4N49wRy4dkN5HZPWp3/G', 'carolinemcowart@rhyta.com', '2020-06-15 06:18:42', '', 'Caroline M. Cowart', '2', '2020-06-15 06:19:15', '2020-06-15 14:19:15', '1', '2020-06-15 14:19:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dbpenelitian`
--
ALTER TABLE `dbpenelitian`
  ADD PRIMARY KEY (`id_db`);

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
-- AUTO_INCREMENT for table `dbpenelitian`
--
ALTER TABLE `dbpenelitian`
  MODIFY `id_db` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lembaga`
--
ALTER TABLE `lembaga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pena_opd`
--
ALTER TABLE `pena_opd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `unitkerja`
--
ALTER TABLE `unitkerja`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
