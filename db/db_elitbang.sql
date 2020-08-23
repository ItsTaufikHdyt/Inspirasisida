-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 23, 2020 at 11:09 AM
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
-- Table structure for table `dbmasyarakat`
--

CREATE TABLE `dbmasyarakat` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `nama` varchar(50) NOT NULL,
  `lokasi` text NOT NULL,
  `kriteria` varchar(50) NOT NULL,
  `kategori` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbmasyarakat`
--

INSERT INTO `dbmasyarakat` (`id`, `judul`, `nama`, `lokasi`, `kriteria`, `kategori`, `created_at`, `updated_at`) VALUES
(5, 'Dampak langsung perkembangan industri pariwisata bagi masyarakat Bontang', 'Anindya Riezky Ayu Pribadi (inovasi)', 'Bontang', 'Perorangan', 0, '2020-08-03 18:41:41', '2020-08-03 18:41:41'),
(86, 'Possimus sit molestiae cumque numquam eos.', 'Nugraha Darimin Prasetyo', 'Psr. Cikutra Timur No. 950, Administrasi Jakarta Pusat 17300, KepR', 'Restu Ciaobella Hassanah M.TI.', 0, NULL, NULL),
(85, 'Aut nam excepturi mollitia soluta repudiandae fugiat.', 'Uchita Oliva Namaga M.M.', 'Jln. Nanas No. 362, Tasikmalaya 81023, Banten', 'Ulya Astuti', 1, NULL, NULL),
(84, 'Ab qui illo eos omnis quia ut alias ex.', 'Balangga Santoso S.Kom', 'Kpg. Bah Jaya No. 265, Jambi 70300, NTB', 'Artanto Sidiq Natsir', 1, NULL, NULL),
(83, 'Ut consequatur aut ab facere ullam est libero.', 'Nadia Yuniar S.Ked', 'Kpg. R.E. Martadinata No. 362, Kendari 27102, SulBar', 'Lala Zulfa Mayasari', 0, NULL, NULL),
(82, 'Vero omnis quis voluptas libero omnis repellendus.', 'Embuh Nugraha Ardianto S.Psi', 'Ds. Astana Anyar No. 672, Banjar 30020, SumUt', 'Farah Genta Yuliarti', 1, NULL, NULL),
(81, 'Unde ea ducimus aut enim quas possimus laboriosam ullam.', 'Intan Susanti S.E.I', 'Ki. Sutami No. 865, Ambon 51111, KalTeng', 'Taufan Baktianto Kuswoyo', 0, NULL, NULL),
(80, 'Autem magni dicta saepe perspiciatis.', 'Juli Pertiwi', 'Jln. Dahlia No. 458, Bitung 37091, Papua', 'Banawi Nugroho', 0, NULL, NULL),
(79, 'Earum atque sunt illo doloremque quisquam.', 'Paris Fitria Yulianti', 'Jr. Bacang No. 419, Batam 34308, SulBar', 'Ajimat Unggul Prasasta', 1, NULL, NULL),
(78, 'Consequatur est quos necessitatibus voluptatem numquam.', 'Azalea Elma Suryatmi M.Farm', 'Ds. Jamika No. 357, Banjarmasin 54940, KepR', 'Rina Vivi Puspita', 1, NULL, NULL),
(77, 'Doloremque eos molestiae eaque voluptatum ipsa corporis.', 'Irma Mila Laksmiwati', 'Jr. Hang No. 68, Langsa 45402, Banten', 'Winda Zizi Wijayanti', 0, NULL, NULL),
(76, 'Quia enim dicta ea sint ea.', 'Karman Makuta Pranowo S.Farm', 'Gg. Baan No. 991, Denpasar 59632, SumSel', 'Nova Yuliarti', 1, NULL, NULL),
(75, 'Facilis laboriosam veritatis maiores nisi quasi.', 'Harto Taufan Dongoran S.T.', 'Kpg. BKR No. 637, Tidore Kepulauan 86674, DKI', 'Wisnu Maheswara S.Sos', 0, NULL, NULL),
(74, 'Nesciunt totam delectus quaerat corrupti ad.', 'Murti Anom Pradana M.Farm', 'Jln. Baha No. 298, Padang 54193, Aceh', 'Karsa Cahyadi Budiyanto', 1, NULL, NULL),
(73, 'Totam eos ad molestiae corporis.', 'Nasrullah Sihombing', 'Ds. Baladewa No. 195, Surabaya 73051, SulTra', 'Maimunah Padmi Nurdiyanti', 0, NULL, NULL),
(72, 'Inventore rerum dolores est esse sunt sunt.', 'Eka Suartini S.Pt', 'Psr. Sugiono No. 670, Gunungsitoli 22278, Gorontalo', 'Yahya Manullang', 1, NULL, NULL),
(71, 'Asperiores neque debitis illum cupiditate qui.', 'Paiman Nababan M.Pd', 'Psr. Baranang Siang Indah No. 155, Banda Aceh 11209, Bali', 'Dimas Wacana S.E.', 1, NULL, NULL),
(70, 'Vel non accusamus dolorem amet.', 'Lintang Nurdiyanti', 'Jln. Dago No. 115, Administrasi Jakarta Barat 68644, JaBar', 'Nardi Cawisadi Hidayat', 1, NULL, NULL),
(69, 'Facere sed saepe illum recusandae doloremque rem aut.', 'Waluyo Pranowo', 'Dk. Baladewa No. 599, Makassar 50605, KalUt', 'Bala Adriansyah', 0, NULL, NULL),
(68, 'Sed impedit qui autem similique aut ea sit.', 'Sari Padmasari S.T.', 'Jr. Bak Air No. 115, Bima 50425, SulUt', 'Humaira Sudiati M.Pd', 1, NULL, NULL),
(67, 'Cupiditate asperiores beatae voluptatum adipisci ipsam.', 'Kenari Widodo', 'Jr. Bass No. 395, Yogyakarta 68555, SulSel', 'Dalima Widiastuti S.Psi', 1, NULL, NULL),
(66, 'Totam quos et rerum porro.', 'Unjani Najwa Puspasari S.Psi', 'Gg. Ki Hajar Dewantara No. 613, Bima 50835, DIY', 'Puti Puspita', 1, NULL, NULL),
(65, 'Ipsum delectus unde eos.', 'Cinta Yuniar', 'Ds. Sentot Alibasa No. 911, Tarakan 37416, DKI', 'Almira Nurdiyanti', 0, NULL, NULL),
(64, 'Quod iusto corrupti placeat.', 'Taufik Sihombing', 'Jln. Pacuan Kuda No. 159, Surabaya 25679, JaTim', 'Uchita Mulyani', 1, NULL, NULL),
(63, 'Eum iste repellat et unde et.', 'Kambali Prasetya', 'Ki. Gajah No. 402, Magelang 14991, DKI', 'Nugraha Yoga Prakasa S.Ked', 1, NULL, NULL),
(62, 'Sed saepe iste voluptatum dignissimos repellat aperiam.', 'Galak Januar', 'Gg. Yos No. 104, Pekanbaru 84576, SumUt', 'Muni Napitupulu', 1, NULL, NULL),
(61, 'Itaque blanditiis nam maiores.', 'Adika Prasasta S.H.', 'Jln. Adisucipto No. 42, Yogyakarta 91534, PapBar', 'Cinthia Rahimah', 0, NULL, NULL),
(60, 'Itaque unde animi enim.', 'Gabriella Ratna Laksmiwati', 'Dk. Surapati No. 522, Bekasi 23978, KalUt', 'Samiah Palastri S.H.', 1, NULL, NULL),
(59, 'Sunt nulla laboriosam quia.', 'Rahmat Haryanto', 'Jln. Industri No. 225, Tidore Kepulauan 86182, Aceh', 'Gabriella Agustina', 0, NULL, NULL),
(58, 'Et quo perferendis repellat delectus molestiae eum neque.', 'Lantar Ibrani Prayoga', 'Jr. Eka No. 191, Blitar 34308, Riau', 'Nurul Rahmi Susanti', 1, NULL, NULL),
(57, 'Magnam impedit aspernatur velit maxime quis.', 'Jatmiko Nainggolan', 'Jln. Peta No. 40, Lhokseumawe 11074, SumSel', 'Cornelia Wijayanti S.T.', 1, NULL, NULL),
(56, 'Minima sed mollitia dolor assumenda aut quibusdam et.', 'Wardaya Wibowo', 'Jln. Gajah No. 1, Dumai 18007, NTB', 'Kamidin Prakasa', 0, NULL, NULL),
(87, 'Consectetur illum at reiciendis non est quo.', 'Yusuf Rahmat Najmudin M.Ak', 'Kpg. Fajar No. 567, Banjarbaru 34754, Lampung', 'Halima Aurora Safitri S.E.', 0, NULL, NULL),
(88, 'Sunt porro dicta perferendis dolores.', 'Argono Gunarto', 'Dk. Gading No. 649, Padang 43050, Jambi', 'Jarwi Kurniawan', 1, NULL, NULL),
(89, 'Atque nostrum enim veritatis numquam.', 'Taufik Mandala', 'Jln. Pelajar Pejuang 45 No. 503, Makassar 51599, SumUt', 'Cahya Baktianto Simanjuntak M.Farm', 1, NULL, NULL),
(90, 'Non quaerat necessitatibus minus sapiente non ipsa qui.', 'Putri Uyainah', 'Gg. K.H. Maskur No. 578, Tangerang 75194, Papua', 'Yoga Utama S.Farm', 1, NULL, NULL),
(91, 'Est molestiae doloribus accusamus non numquam.', 'Cengkir Kuswoyo', 'Jr. Gambang No. 64, Banjar 17848, Papua', 'Akarsana Saptono', 0, NULL, NULL),
(92, 'Impedit quia adipisci voluptates aut sit praesentium cupiditate quia.', 'Karya Cecep Rajasa S.Psi', 'Jln. Ters. Jakarta No. 453, Tual 72523, NTT', 'Ganep Jailani S.E.', 0, NULL, NULL),
(93, 'Sit corrupti sit quas doloremque accusamus quo repudiandae sit.', 'Samiah Pudjiastuti', 'Dk. Yoga No. 530, Kendari 12424, SulUt', 'Teguh Firgantoro', 1, NULL, NULL),
(94, 'Rerum suscipit dolore harum quod.', 'Radika Simanjuntak S.E.', 'Jr. Madiun No. 91, Banjar 79834, SumSel', 'Icha Purnawati', 1, NULL, NULL),
(95, 'Quia velit error similique dolores.', 'Yani Najwa Lailasari M.Kom.', 'Ds. Panjaitan No. 962, Banda Aceh 95694, NTT', 'Laila Nasyidah', 1, NULL, NULL),
(96, 'Consequuntur cumque nulla voluptate.', 'Danu Nardi Halim M.Ak', 'Ds. Bata Putih No. 130, Padangsidempuan 85614, SumUt', 'Umi Lailasari S.E.', 0, NULL, NULL),
(97, 'Aut blanditiis qui omnis necessitatibus.', 'Mahdi Candra Sitompul', 'Jr. Dr. Junjunan No. 922, Cimahi 64615, DKI', 'Janet Anggraini', 1, NULL, NULL),
(98, 'Tempore consequatur quo quo incidunt labore.', 'Cakrabuana Firgantoro M.Pd', 'Jln. Rajawali No. 878, Banjar 28411, SumBar', 'Yessi Ciaobella Yuniar S.I.Kom', 0, NULL, NULL),
(99, 'Suscipit eveniet sunt est laudantium sint sint ex et.', 'Mariadi Irawan S.Psi', 'Gg. Supono No. 212, Sawahlunto 38304, KalSel', 'Hamzah Soleh Rajasa', 1, NULL, NULL),
(100, 'Laborum quos ipsam nam illo.', 'Yessi Suryatmi S.I.Kom', 'Gg. Abdul Muis No. 276, Kupang 77198, SulTra', 'Siti Rahimah S.T.', 1, NULL, NULL),
(101, 'Hic et aliquid et voluptatum quis incidunt autem.', 'Cindy Riyanti', 'Ds. Karel S. Tubun No. 944, Depok 14614, Banten', 'Vanya Suartini', 1, NULL, NULL),
(102, 'Facilis voluptatibus necessitatibus non distinctio impedit ullam.', 'Jarwadi Maryadi S.Kom', 'Psr. Baha No. 406, Palembang 85464, PapBar', 'Daruna Narpati S.Pt', 0, NULL, NULL),
(103, 'Veritatis sunt amet consequatur minus assumenda autem facere autem.', 'Adikara Harimurti Lazuardi S.Psi', 'Dk. Diponegoro No. 336, Batam 34950, Bali', 'Kawaca Kairav Prasasta S.Psi', 0, NULL, NULL),
(104, 'Voluptatibus et est sed id.', 'Kani Haryanti', 'Gg. Kebangkitan Nasional No. 840, Payakumbuh 20272, KalTeng', 'Balamantri Abyasa Saputra', 1, NULL, NULL),
(105, 'Eligendi quibusdam et saepe.', 'Devi Susanti', 'Psr. Supono No. 761, Denpasar 37439, KalBar', 'Laras Kusmawati', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dbopd`
--

CREATE TABLE `dbopd` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `opd` varchar(50) NOT NULL,
  `lokasi` text NOT NULL,
  `abstraksi` text NOT NULL,
  `kategori` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dbopd`
--

INSERT INTO `dbopd` (`id`, `judul`, `tahun`, `opd`, `lokasi`, `abstraksi`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'Sinergi Membangun Bontang Bersama (SI BANGGA)', '2016', 'Badan Perencanaan, Penelitian dan Pengembangan', 'Bontang', '<p>Sinkronisasi penyelenggaraan program pembangunan yang dilakukan oleh Pemerintah Daerah dengan program-program CSR yang dilaksanakan oleh<br />\r\nPerusahaan melalui Forum CSR. Pengembangan: CSR Kolaborasi, yaitu kolaborasi perusahaan-perusahaan untuk melakukan kegiatan dengan lokus atau sasaran yang sama.</p>', 0, '2020-08-03 18:02:29', '2020-08-03 18:02:29'),
(52, 'Qui occaecati rerum qui deserunt iusto.', '2018', 'UD Andriani Pradana', 'Manado', 'Alice rather unwillingly took the watch and looked at poor Alice, and looking at the frontispiece if you hold it too long; and that if something wasn\'t done about it while the rest of the window.', 0, NULL, NULL),
(53, 'Doloremque ea eligendi eligendi ipsum et.', '2015', 'UD Latupono', 'Pariaman', 'VERY long claws and a sad tale!\' said the last few minutes, and began smoking again. This time Alice waited till the Pigeon in a sorrowful tone; \'at least there\'s no use in talking to him,\' said.', 1, NULL, NULL),
(54, 'Sunt ipsum quam corrupti aut.', '2019', 'PT Mayasari Tbk', 'Bitung', 'Hatter. \'He won\'t stand beating. Now, if you cut your finger VERY deeply with a sigh: \'it\'s always tea-time, and we\'ve no time she\'d have everybody executed, all round. (It was this last remark.', 0, NULL, NULL),
(55, 'Tempora optio omnis expedita id est voluptates corporis vitae.', '2016', 'PD Budiyanto Wijaya', 'Lubuklinggau', 'Caterpillar. Here was another puzzling question; and as the March Hare, who had followed him into the way down one side and up I goes like a serpent. She had not attended to this last remark that.', 0, NULL, NULL),
(56, 'Tempore dolor eligendi eos exercitationem aut.', '2017', 'Perum Anggraini Sitorus (Persero) Tbk', 'Parepare', 'So she began very cautiously: \'But I don\'t think,\' Alice went on muttering over the list, feeling very glad to find my way into that lovely garden. First, however, she again heard a little recovered.', 1, NULL, NULL),
(57, 'Accusantium illum nulla ipsam quos nesciunt commodi.', '2019', 'Perum Narpati Mardhiyah', 'Bogor', 'I don\'t put my arm round your waist,\' the Duchess said in a tone of great surprise. \'Of course not,\' said the Mouse, frowning, but very politely: \'Did you say things are worse than ever,\' thought.', 0, NULL, NULL),
(58, 'Laudantium consequuntur laborum molestias eum dolor et dolor.', '2015', 'PD Suryatmi Tarihoran', 'Pekanbaru', 'You see the Queen. \'I haven\'t opened it yet,\' said Alice; \'that\'s not at all for any of them. However, on the trumpet, and then a great many teeth, so she sat down at once, with a great letter.', 0, NULL, NULL),
(59, 'Velit quo amet quas aliquid facere.', '2018', 'Perum Jailani Tbk', 'Binjai', 'I\'d hardly finished the goose, with the Queen,\' and she felt that this could not taste theirs, and the Hatter said, tossing his head off outside,\' the Queen of Hearts, carrying the King\'s crown on a.', 0, NULL, NULL),
(60, 'Sed enim cupiditate dolor rerum est.', '2016', 'CV Megantara Yulianti (Persero) Tbk', 'Administrasi Jakarta Barat', 'ME, and told me he was obliged to have no answers.\' \'If you do. I\'ll set Dinah at you!\' There was certainly too much of a well?\' \'Take some more bread-and-butter--\' \'But what did the archbishop.', 0, NULL, NULL),
(61, 'Ipsam cupiditate similique et accusantium adipisci quia possimus.', '2015', 'CV Puspasari Aryani', 'Parepare', 'Caterpillar. Alice thought to herself. At this moment Five, who had been broken to pieces. \'Please, then,\' said the Dodo. Then they all crowded round her head. Still she went back for a rabbit! I.', 1, NULL, NULL),
(62, 'Officiis laborum magnam sint velit dolor et occaecati voluptatem.', '2019', 'CV Permadi Tbk', 'Sukabumi', 'Caterpillar. \'Not QUITE right, I\'m afraid,\' said Alice, swallowing down her flamingo, and began bowing to the shore, and then the puppy began a series of short charges at the great puzzle!\' And she.', 1, NULL, NULL),
(63, 'Vel suscipit atque debitis voluptas.', '2018', 'Perum Rajasa', 'Lubuklinggau', 'But, now that I\'m doubtful about the right words,\' said poor Alice, \'when one wasn\'t always growing larger and smaller, and being ordered about in the same age as herself, to see what the moral of.', 1, NULL, NULL),
(64, 'Repellendus esse alias autem et fugit.', '2020', 'CV Firgantoro', 'Singkawang', 'Alice led the way, was the Rabbit coming to look over their shoulders, that all the jurymen on to himself in an undertone, \'important--unimportant--unimportant--important--\' as if it wasn\'t very.', 1, NULL, NULL),
(65, 'Sed earum laboriosam voluptatum nam similique voluptas et in.', '2020', 'CV Sitorus', 'Sawahlunto', 'PLENTY of room!\' said Alice indignantly. \'Ah! then yours wasn\'t a bit of mushroom, and raised herself to some tea and bread-and-butter, and then unrolled the parchment scroll, and read out from his.', 1, NULL, NULL),
(66, 'Quam harum est molestias dolores consequuntur et.', '2016', 'Perum Situmorang Hastuti (Persero) Tbk', 'Gorontalo', 'When I used to queer things happening. While she was a dead silence instantly, and Alice was just saying to her great delight it fitted! Alice opened the door between us. For instance, if you like,\'.', 0, NULL, NULL),
(67, 'Nihil corrupti ex adipisci corrupti sunt saepe.', '2017', 'PD Agustina Utami', 'Probolinggo', 'QUITE as much as serpents do, you know.\' \'Not at first, perhaps,\' said the Dormouse: \'not in that ridiculous fashion.\' And he added in a great interest in questions of eating and drinking. \'They.', 1, NULL, NULL),
(68, 'Rerum distinctio voluptatem maxime.', '2020', 'PD Maheswara (Persero) Tbk', 'Balikpapan', 'How the Owl and the Gryphon added \'Come, let\'s hear some of the garden, and marked, with one finger for the baby, it was quite silent for a dunce? Go on!\' \'I\'m a poor man, your Majesty,\' he began.', 0, NULL, NULL),
(69, 'Occaecati consectetur voluptate repellat explicabo eveniet.', '2020', 'Perum Prasetya', 'Samarinda', 'This seemed to be talking in a large fan in the sun. (IF you don\'t explain it is to France-- Then turn not pale, beloved snail, but come and join the dance? Will you, won\'t you join the dance?\"\'.', 0, NULL, NULL),
(70, 'Veniam consequatur et asperiores dignissimos.', '2019', 'Perum Utama', 'Administrasi Jakarta Selatan', 'Mock Turtle: \'why, if a fish came to ME, and told me you had been to her, \'if we had the door and went back to the part about her any more HERE.\' \'But then,\' thought she, \'what would become of you?.', 1, NULL, NULL),
(71, 'Quia qui vel rerum distinctio.', '2018', 'Perum Zulaika Nasyiah Tbk', 'Palembang', 'Alice coming. \'There\'s PLENTY of room!\' said Alice indignantly, and she put them into a butterfly, I should like to be a LITTLE larger, sir, if you only kept on good terms with him, he\'d do almost.', 0, NULL, NULL),
(72, 'Ut consequatur pariatur autem aut facere nulla impedit.', '2018', 'Perum Budiyanto (Persero) Tbk', 'Padangsidempuan', 'Then followed the Knave was standing before them, in chains, with a cart-horse, and expecting every moment to be otherwise than what you would seem to put down her flamingo, and began talking again.', 1, NULL, NULL),
(73, 'Quas hic pariatur magni explicabo deserunt et dolorum.', '2020', 'Perum Marbun', 'Banjarbaru', 'Mouse did not notice this question, but hurriedly went on, looking anxiously round to see how he did with the words \'DRINK ME\' beautifully printed on it in a languid, sleepy voice. \'Who are YOU?\'.', 0, NULL, NULL),
(74, 'Alias est quibusdam vel minima.', '2018', 'PD Prasetyo (Persero) Tbk', 'Tanjung Pinang', 'I\'m better now--but I\'m a hatter.\' Here the Dormouse turned out, and, by the little passage: and THEN--she found herself safe in a very short time the Mouse only shook its head impatiently, and.', 1, NULL, NULL),
(75, 'Vitae omnis blanditiis ut dolor explicabo.', '2020', 'CV Hariyah (Persero) Tbk', 'Jambi', 'Table doesn\'t signify: let\'s try Geography. London is the driest thing I ever saw one that size? Why, it fills the whole head appeared, and then she noticed that one of them attempted to explain the.', 0, NULL, NULL),
(76, 'Consequatur nulla et animi similique magni sint.', '2018', 'Perum Nasyiah Prayoga (Persero) Tbk', 'Manado', 'Queen, who were lying on the floor, as it was too dark to see its meaning. \'And just as she heard the Rabbit was no longer to be done, I wonder?\' Alice guessed in a whisper.) \'That would be quite as.', 0, NULL, NULL),
(77, 'Ut explicabo reprehenderit et libero natus deserunt impedit.', '2017', 'PT Sudiati (Persero) Tbk', 'Gorontalo', 'I tell you, you coward!\' and at last she stretched her arms round it as you go to law: I will tell you just now what the moral of that is--\"Birds of a globe of goldfish she had somehow fallen into a.', 1, NULL, NULL),
(78, 'Et ipsam et libero adipisci quos perferendis architecto.', '2017', 'PD Laksmiwati Sihombing Tbk', 'Tangerang Selatan', 'There was a large one, but the Mouse replied rather impatiently: \'any shrimp could have been ill.\' \'So they were,\' said the Gryphon. \'--you advance twice--\' \'Each with a little of her head through.', 0, NULL, NULL),
(79, 'Id vel voluptates eius neque aut est.', '2019', 'Perum Yulianti (Persero) Tbk', 'Palopo', 'I suppose Dinah\'ll be sending me on messages next!\' And she began nursing her child again, singing a sort of a bottle. They all sat down in an undertone to the door, she found herself in the back.', 0, NULL, NULL),
(80, 'Incidunt nihil itaque eos quasi non fuga sit.', '2019', 'Perum Sirait', 'Padangpanjang', 'Quadrille?\' the Gryphon repeated impatiently: \'it begins \"I passed by his garden.\"\' Alice did not dare to disobey, though she felt that this could not think of nothing else to do, and in another.', 1, NULL, NULL),
(81, 'Ut blanditiis in qui sint ratione error provident.', '2020', 'Perum Samosir (Persero) Tbk', 'Yogyakarta', 'Hatter, \'you wouldn\'t talk about her pet: \'Dinah\'s our cat. And she\'s such a nice soft thing to get an opportunity of adding, \'You\'re looking for the fan and gloves--that is, if I might venture to.', 1, NULL, NULL),
(82, 'Eius aut voluptatibus dolorem qui distinctio.', '2017', 'PD Wahyuni Wulandari (Persero) Tbk', 'Banjar', 'I beg your acceptance of this ointment--one shilling the box-- Allow me to sell you a song?\' \'Oh, a song, please, if the Mock Turtle, capering wildly about. \'Change lobsters again!\' yelled the.', 1, NULL, NULL),
(83, 'Vero praesentium provident nisi laboriosam architecto facere odio numquam.', '2016', 'UD Hassanah', 'Tebing Tinggi', 'HIM TWO--\" why, that must be on the top with its mouth open, gazing up into hers--she could hear him sighing as if she meant to take out of its voice. \'Back to land again, and Alice heard it.', 1, NULL, NULL),
(84, 'Inventore pariatur omnis ut magnam consequatur.', '2015', 'PD Nasyidah Tbk', 'Mojokerto', 'King, going up to her feet as the Dormouse began in a hurry: a large one, but it puzzled her too much, so she went back to her: first, because the chimneys were shaped like ears and the Hatter were.', 1, NULL, NULL),
(85, 'Fugit reiciendis voluptas in accusantium iure enim.', '2016', 'CV Hastuti', 'Sabang', 'HIS time of life. The King\'s argument was, that anything that had slipped in like herself. \'Would it be of any use, now,\' thought poor Alice, \'when one wasn\'t always growing larger and smaller, and.', 1, NULL, NULL),
(86, 'Aperiam in veritatis voluptas.', '2019', 'UD Budiyanto Tbk', 'Gorontalo', 'King. \'It began with the words a little, and then dipped suddenly down, so suddenly that Alice quite hungry to look through into the air. This time there could be beheaded, and that you had been.', 1, NULL, NULL),
(87, 'Eligendi hic quis expedita ab ipsa excepturi earum.', '2016', 'UD Utami (Persero) Tbk', 'Pangkal Pinang', 'Oh my fur and whiskers! She\'ll get me executed, as sure as ferrets are ferrets! Where CAN I have none, Why, I wouldn\'t be so kind,\' Alice replied, rather shyly, \'I--I hardly know, sir, just at.', 0, NULL, NULL),
(88, 'Nam maiores fuga autem nostrum.', '2017', 'CV Padmasari Tbk', 'Semarang', 'Alice, \'we learned French and music.\' \'And washing?\' said the Cat, as soon as there was a general clapping of hands at this: it was quite surprised to find that she was peering about anxiously among.', 0, NULL, NULL),
(89, 'Quo expedita at doloribus sint.', '2015', 'Perum Yuliarti Mangunsong', 'Makassar', 'Alice. \'And ever since that,\' the Hatter continued, \'in this way:-- \"Up above the world you fly, Like a tea-tray in the lock, and to stand on your head-- Do you think, at your age, it is to give the.', 0, NULL, NULL),
(90, 'Suscipit corporis natus odit in.', '2020', 'PT Ardianto (Persero) Tbk', 'Probolinggo', 'But if I\'m not particular as to prevent its undoing itself,) she carried it out to sea. So they went on muttering over the edge with each hand. \'And now which is which?\' she said to Alice, and.', 0, NULL, NULL),
(91, 'Aut ratione iusto eaque et.', '2020', 'CV Nasyidah (Persero) Tbk', 'Padangpanjang', 'March Hare. Alice sighed wearily. \'I think you might do very well as if a dish or kettle had been to the company generally, \'You are not attending!\' said the Queen. \'I haven\'t opened it yet,\' said.', 0, NULL, NULL),
(92, 'Eum vel sint quaerat ut.', '2016', 'CV Budiyanto', 'Kupang', 'Alice was not even get her head to feel a little before she gave one sharp kick, and waited till the puppy\'s bark sounded quite faint in the distance. \'And yet what a dear little puppy it was!\' said.', 1, NULL, NULL),
(93, 'Veritatis expedita est non assumenda et modi.', '2019', 'PD Salahudin Winarno (Persero) Tbk', 'Kendari', 'I\'m talking!\' Just then she walked up towards it rather timidly, saying to herself, \'to be going messages for a minute or two, she made out the answer to shillings and pence. \'Take off your hat,\'.', 1, NULL, NULL),
(94, 'Eum sequi voluptate vel.', '2015', 'CV Prasetyo Najmudin (Persero) Tbk', 'Serang', 'Next came the royal children, and everybody else. \'Leave off that!\' screamed the Pigeon. \'I can tell you how the game was going a journey, I should understand that better,\' Alice said very politely.', 1, NULL, NULL),
(95, 'Est in saepe corrupti sapiente magnam repudiandae sit.', '2020', 'UD Hidayanto Hastuti', 'Madiun', 'Alice. The King and the reason they\'re called lessons,\' the Gryphon said, in a tone of great relief. \'Call the next moment she quite forgot you didn\'t sign it,\' said the White Rabbit interrupted.', 0, NULL, NULL),
(96, 'In aspernatur tempore sunt qui qui.', '2019', 'CV Melani Dongoran', 'Tomohon', 'Mock Turtle yet?\' \'No,\' said Alice. \'I mean what I eat\" is the same as the jury wrote it down \'important,\' and some of the Lobster; I heard him declare, \"You have baked me too brown, I must be kind.', 0, NULL, NULL),
(97, 'Vel natus molestias temporibus corporis quam in velit nihil.', '2020', 'Perum Usamah', 'Ternate', 'Alice to find that her flamingo was gone in a very difficult question. However, at last the Gryphon remarked: \'because they lessen from day to day.\' This was quite silent for a minute or two, it was.', 1, NULL, NULL),
(98, 'Ea magni cum rerum et.', '2015', 'Perum Uyainah Prasetya Tbk', 'Batam', 'King, \'and don\'t be nervous, or I\'ll have you executed, whether you\'re a little nervous about it while the Dodo replied very solemnly. Alice was not quite sure whether it would like the Mock.', 0, NULL, NULL),
(99, 'Omnis itaque voluptatum et atque explicabo.', '2020', 'PT Wijayanti Agustina', 'Prabumulih', 'Duchess: \'flamingoes and mustard both bite. And the Gryphon said to the other: the Duchess said after a few minutes that she had sat down and began to tremble. Alice looked all round her at the end.', 0, NULL, NULL),
(100, 'Pariatur eligendi velit atque repudiandae excepturi voluptate.', '2019', 'UD Haryanti', 'Administrasi Jakarta Selatan', 'Alice. \'Of course they were\', said the King, the Queen, stamping on the other two were using it as to size,\' Alice hastily replied; \'only one doesn\'t like changing so often, of course you know I\'m.', 1, NULL, NULL),
(101, 'Asperiores est quasi quisquam.', '2016', 'CV Rahayu Gunawan', 'Madiun', 'Gryphon only answered \'Come on!\' and ran the faster, while more and more sounds of broken glass. \'What a funny watch!\' she remarked. \'It tells the day of the house opened, and a large piece out of.', 0, NULL, NULL);

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
(38, 'Budi Tabuti', 'pkt', 'jhjff', 'taufikhdyt2332@gmail.com', '08981717895', 'ktp/20200528-Budi-Tabuti-ktp.jpg', 'surat-pernyataan/20200528-Budi-Tabuti-surat-pernyataan.png', 'proposal/20200528-Budi-Tabuti-proposal.pdf', 'https://github.com/taufikhdyt17', '2', NULL, 'inovasi', NULL, '2020-05-28 03:06:36', '2020-06-15 16:42:44'),
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
(1, 'Walikota Bontang', 'Joko Anwar', '197501182007011017', 'Kepala Seksi Data dan Statistik', 'surat-pernyataan/20200612-Walikota-Bontang-surat-pernyataan.png', 'taufikhdyt2332@gmail.com', '08981717895', 'jhkkh', 'proposal/20200612-Walikota-Bontang-proposal.pdf', 'https://github.com/taufikhdyt17', '1', 'tess', '2020-06-11 18:18:09', '2020-06-15 08:14:26'),
(2, 'Dinas Lingkungan Hidup', 'andi matalata', '41041421u92', 'Kepala Seksi Data dan Statistik', 'surat-pernyataan/20200615-Dinas-Lingkungan-Hidup-surat-pernyataan.png', 'thegunners2332@yahoo.com', '096764474', 'jl ks tubun', 'proposal/20200615-Dinas-Lingkungan-Hidup-proposal.pdf', 'https://github.com/taufikhdyt17', '0', NULL, '2020-06-15 06:16:40', '2020-06-15 06:16:40'),
(3, 'Dinas Perhubungan', 'Musji', '521614616', 'Kepala Seksi Data dan Statistik', 'surat-pernyataan/20200615-Dinas-Perhubungan-surat-pernyataan.png', 'dinasperhubungan@bontangkota.go.id', '089374645312', 'jl sekambing', 'proposal/20200615-Dinas-Perhubungan-proposal.pdf', 'https://github.com/taufikhdyt17', '2', NULL, '2020-06-15 07:19:41', '2020-06-15 16:04:44');

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

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `nama`, `ttl`, `pekerjaan`, `alamat`, `ktp`, `surat_pernyataan`, `izin_ortu`, `izin_sekolah`, `pendidikan`, `agama`, `telp`, `nation`, `email`, `proposal`, `url_proposal`, `verifikasi`, `ket`, `kelompok`, `kategori_peena`, `proposal_akhr`, `created_at`, `updated_at`) VALUES
(131, 'Budi Tabuti', '2020-05-12', 'Programmer', 'jln', 'ktp/20200528-Budi-Tabuti-ktp.jpg', 'surat-pernyataan/20200528-Budi-Tabuti-surat-pernyataan.png', 'izin-ortu/20200528-Budi-Tabuti-izin-ortu.jpg', 'izin-sekolah/20200528-Budi-Tabuti-izin-sekolah.JPG', 'smk', 'Islam', '08981717895', 'Indonesia', 'budi@hotmail.com', 'proposal/20200528-Budi-Tabuti-proposal.pdf', 'https://github.com/taufikhdyt17', '0', NULL, 1, 'inovasi', NULL, '2020-05-28 06:20:25', '2020-05-28 06:20:25'),
(130, 'Taufik Hidayat', '2020-05-20', 'Programmer', 'jln', 'ktp/20200528-Taufik-Hidayat-ktp.jpg', 'surat-pernyataan/20200528-Taufik-Hidayat-surat-pernyataan.png', 'izin-ortu/20200528-Taufik-Hidayat-izin-ortu.jpg', 'izin-sekolah/20200528-Taufik-Hidayat-izin-sekolah.jpg', 'smk', 'Islam', '08981717895', 'Indonesia', 'taufikhdyt2332@gmail.com', 'proposal/20200528-Taufik-Hidayat-proposal.pdf', 'https://github.com/taufikhdyt17', '2', NULL, 0, 'inovasi', NULL, '2020-05-28 06:17:59', '2020-06-15 16:34:03'),
(133, 'elocos', '2020-06-10', 'Sultan Minyak', 'mmmm', 'ktp/20200609-eloco-ktp.jpg', 'surat-pernyataan/20200609-eloco-surat-pernyataan.png', 'izin-ortu/20200609-eloco-izin-ortu.jpg', 'izin-sekolah/20200609-eloco-izin-sekolah.JPG', 's4', 'Lainnya', '08981717895', 'Indonesia', 'tes@gmail.com', 'proposal/20200609-eloco-proposal.pdf', 'https://github.com/taufikhdyt17', '-1', NULL, 0, 'penelitian', NULL, '2020-06-09 01:08:09', '2020-06-15 15:49:01'),
(136, 'Budi Binomo', '2001-06-06', 'Pegawai', 'jl ks tubun', 'ktp/20200708-Budi-Binomo-ktp.jpg', 'surat-pernyataan/20200708-Budi-Binomo-surat-pernyataan.png', 'izin-ortu/20200708-Budi-Binomo-izin-ortu.jpg', 'izin-sekolah/20200708-Budi-Binomo-izin-sekolah.JPG', 's1', 'Islam', '08123456789', 'Indonesia', 'budibinomo@gmail.com', 'proposal/20200708-Budi-Binomo-proposal.pdf', NULL, '0', NULL, 0, 'inovasi', NULL, '2020-07-08 01:10:11', '2020-07-08 01:10:11');

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
(44, 'Pendaftaran Lomba SI PEENA 2019', 'Lomba Inovasi dan Penelitian (SI PEENA) Tahun 2019 Dimulai!!!.\r\n\r\nLomba SIPEENA dimaksudkan untuk meningkatkan minat dan kepedulian masyarakat kota bontang dalam berinovasi melaakukan penelitian dan mengembangkan IPTEK yang berkontribusi pada kemajuan pembangunan, peningkatan perekonomian dan kesejahteraan masyarakat Kota Bontang.\r\n\r\nLomba SIPEENA 2019 yang mengusung tema \"Inovasi Pemerintah dan Masyarakat Dalam Meningkatkan Daya Saing Ekonomi Yang Berwawasan Lingkungan\" ini diperuntukkan bagi seluruh masyarakat  dengan berbagai latar belakang profesi (Pelajar/Mahasiswa, Guru/Akademisi, Pegawai Pemerintahan/Swasta, Tokoh Agama dan Budaya, dan Profesi lainnya.)  dan Lembaga/Instansi/Organisasi/Komunitas serta Perangkat Daerah dilingkungan kota bontang.\r\n\r\nOleh karna itu tunggu apalagi, segera daftar dan rebut total hadiah 69Juta rupiah!!!.omba Inovasi dan Penelitian (SI PEENA) Tahun 2019 Dimulai!!!.', 'berkas-prosedur/20200615-Pendaftaran-Lomba-SI-PEENA-2019.pdf', '2020-06-15 10:44:23', '2020-06-15 13:04:07'),
(46, 'daftar Finalis 2017', 'Kepada Seluruh Peserta Lomba SI PEENA, tahapan verifikasi proposal awal lomba inovasi, penelitian dan teknologi tepat guna (siPEENA) telah selesai dilaksanakan (dapat dilihat pada menu \"Daftar Verifikasi\" / sudah diumumkan melalui email masing - masing peserta). Tahapan Selanjutnya adalah peserta wajib mengupload Proposal Akhir/Makalah Akhir, paling lambat pada tanggal 24 Juli 2018 pukul 23.59', 'berkas-prosedur/20200708-daftar-Finalis-2017.pdf', '2020-07-08 01:30:53', '2020-07-08 01:30:53');

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
  `level` varchar(40) NOT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `email_verified` varchar(20) NOT NULL DEFAULT '0',
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `nama`, `password`, `email`, `email_verified_at`, `email_verification_token`, `level`, `last_login`, `created_at`, `email_verified`, `updated_at`) VALUES
(161, NULL, 'Taufik Hidayat', '$2y$10$yJxLHDZv3bgya3/YXkU7.ePttzfLfPXUpCdalhHwwaytjg5rT..we', 'taufikhdyt2332@gmail.com', '2020-04-20 21:15:56', '', '2', '2020-08-09 18:49:51', '2020-08-10 02:49:51', '1', '2020-08-10 02:49:51'),
(162, NULL, 'Taufik Hidayat', '$2y$10$L9xv.D0nnfCWFe12hzCO6uXTp2jwlKOHbKtOiBv1IyoyoOo8IJ1M2', 'admin@gmail.com', '2020-05-09 21:23:56', '', '1', '2020-08-05 17:35:49', '2020-08-06 01:35:49', '1', '2020-08-06 01:35:49'),
(173, NULL, 'Taufik Hidayat', '$2y$10$yRqHar6JvoysgmgNxwkQBe.BPwDYhqoLlel6jvJTYtuClA7Skh79C', 'taufikhdyt2332@gmail.com', NULL, 'qtQb87953lN2gkJ0NwTbWmBRFs5AvEBE', '2', NULL, '2020-07-21 18:46:44', '0', '2020-07-22 02:46:44');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `dbopd`
--
ALTER TABLE `dbopd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `unitkerja`
--
ALTER TABLE `unitkerja`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
