-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2023 at 04:48 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pariwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `judul`, `isi`, `gambar`) VALUES
(1, 'alka', 'A2.2100015', 'sprite.jpg'),
(2, 'Dendi Suhada Irawan', 'A2.2100027', 'IMG_.jpg'),
(3, 'Rifaldi Azhar', 'A2.2100112', 'IMG_20220129_205746-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `destinasi`
--

CREATE TABLE `destinasi` (
  `id` int(11) NOT NULL,
  `nama_destinasi` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL,
  `id_kategori` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destinasi`
--

INSERT INTO `destinasi` (`id`, `nama_destinasi`, `deskripsi`, `gambar`, `id_kategori`) VALUES
(7, 'Cipanas Cileungsing Buahdua', 'Cipanas Cileungsing\r\nWisata Air Panas Cileungsing terletak di Desa Cilangkap, Kecamatan Buahdua.\r\n\r\nTur ini dipandu dengan baik dan menawarkan infrastruktur yang cukup modern. Termasuk kolam renang dengan air panas dan dingin, taman bermain anak, shelter, pancuran langsung dari mata air panas, pemandian tertutup dan infrastruktur lainnya.\r\nBanyak pengunjung selalu datang ke tempat ini. Mereka berasal dari berbagai daerah seperti Indramayu, Subang, Bandung, Majalengka dan lainnya.', 'cipanas.png', 1),
(8, 'Ci Biru Buahdaua ', 'Situ Cilembang ini kedalamannya mencapai 3 meter dan juga mendapatkan pengawasan dari pemerintah daerah setempat. Situ ini sangat berpotensi sebagai tempat wisata, sebab pesona keindahan alamnya sangat mempesona. Tak heran, bila belakangan ini banyak wisatawan yang berbondong-bondong untuk mengunjunginya.\r\n\r\nKawasan situ sangat tepat sebagai objek wisata, sebab terkenal sebagai kawasan yang bersih, indah, tertib, tenang, ramah, dan aman. Jalanan menuju ke lokasi juga sudah cukup baik dengan bangunan beton sepanjang 300 meter. Buat kamu yang ingin berburu foto selfie di sana juga dipersilahkan, tarif masuknya pun sangat-sangat terajangkau.\r\n\r\nLokasi Situ Cilembang Sumedang\r\nUntuk lokasi, wisata ini terletak di Desa Hariang, Kecamatan Buahdua, Kabupaten Sumedang, Jawa Barat. Kamu bisa melihat lokasi berdasar pada Google Map.', 'ci biru buahdua.jpg', 2),
(9, 'Sirah Cipelang ', 'Salah satu objek wisata yang berada di Desa Cipamekar Kecamatan Conggeang. Wisata ini memanfaatkan potensi mata air yang berada di kaki Gunung Tampomas bagian timur. Awalnya merupakan mata air yang menjadi sumber air bagi kawasan sekitar, namun saat ini mulai dikembangkan dengan dibangunnya kolam renang.\r\n\r\nMata air ini berlokasi di sebelah timur laut dusun yang bernama sama yaitu Dusun Sirah Cipelang. Sumber mata airnya keluar dari bukit kecil yang berada di bawah rimbunnya pepohonan yang memenuhi kawasan ini. Karena langsung bersumber dari mata air, air Sirah Cipelang ini sangat jernih. Air dari mata air Sirah Cipelang ini mengalir ke arah timur menuju ke kawasan pesawahan terhampar luas.\r\n\r\nPada tahun 1989 di mata air Sirah Cipelang ini dibangun bendungan untuk menampung air yang melimpah dari mata air sehingga berbentuk kolam. Air dari kolam ini dialirkan melalui saluran irigasi untuk mengairi pesawahan dan lahan pertanian lainnya di sebelah timurnya dengan luasan, pada saat itu mencapai 484 hektar. Selain sebagai sumber air irigasi, air dari mata air Sirah Cipelang juga dipergunakan sebagai sumber air bagi penduduk di perkampungan sekitarnya, khususnya untuk keperluan MCK (Mandi, Cuci dan Kakus). Air dari mata air ini dialirkan menggunakan pipa air dari hulu mata air Sirah Cipelang ke kawasan perkampungan sekitarnya.', 'sircip.jpg', 1),
(10, 'Batu Dua Wado', 'Sumedang mendapat kehormatan terpilih sebagai tuan rumah West Java Paragliding World Championship 2019. Kejuaraan dunia paralayang ini digelar pada 22-28 Oktober 2019. Ada tiga tempat yang dipilih sebagai venue perhelatan akbar ini, salah satunya Batudua.\r\n\r\nDestinasi wisata yang memiliki pemandangan alam eksotis ini dipilih lantaran titik lepas landas (take-off) yang sangat layak dan ideal bagi olahraga paralayang. Beberapa titik thermal (panas uap bumi) yang ada di Batudua juga sangat memungkinkan atlet paralayang terbang lebih tinggi hingga mencapai ketinggian 1.000 mdpl.', 'batu dua.jpg', 2),
(11, 'Cisema', 'Tempat pendaratan paralayang di kawasan Buricak Burinong, Cisema, Desa Pakualam, Kecamatan Darmaraja, Kabupaten Sumedang kini menjadi spot swafoto paling banyak dikunjungi oleh pengunjung wisata.\r\n\r\n\r\nHamparan area mendarat yang dibangun dari susunan kayu ditambah aksentuasi pagar kayu tersebut menjadi tempat favorit swafoto, karena memiliki keindahan dengan latar belakang hamparan air Bendungan Jatigede.\r\n\r\n“Arsitekturalnya juga sangat indah untuk difoto. Kalau di foto terkesan dimana. Pokoknya bagus banget untuk foto-foto,” ujar Safitri warga Cibatu, Garut yang sempat mengunjungi Cisema.\r\n\r\nIndahnya suasana di area pendaratan paralayang juga mengundang para pehobi foto untuk hunting foto. Para komunitas pehobi foto dari sejumlah daerah juga mendatangi tempat tersebut.', 'cisema.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id` int(10) NOT NULL,
  `nama_gambar` varchar(100) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id`, `nama_gambar`, `gambar`) VALUES
(4, 'Pemandangan', 'batu dua.jpg'),
(5, 'Pemandian', 'cipanas.png'),
(6, 'Kolam Alami', 'ci biru buahdua.jpg'),
(7, 'Danau', 'cisema.jpg'),
(8, 'Pemandian', 'sircip.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(10) NOT NULL,
  `nama_kategori` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(1, 'pemandian'),
(2, 'pemandangan'),
(3, 'penginapan');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(10) NOT NULL,
  `nama_sosmed` text NOT NULL,
  `link` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `nama_sosmed`, `link`, `gambar`) VALUES
(5, 'alkarizqyrestupb', 'https://instagram.com/alkarizqyrestupribadi?igshid=ZDc40DBmNjlmNQ==', 'instagram-1581266_1280-removebg-preview.png'),
(6, 'Dendi Suhada Irawan', 'https://instagram.com/dendi.suhada?igshid=MmIzYWVlNDQ5Yg==', 'instagram-1581266_1280-removebg-preview.png'),
(7, 'Rifaldi Azhar', 'https://instagram.com/rifaz19_?igshid=MmIzYWVlNDQ5Yg==', 'instagram-1581266_1280-removebg-preview.png'),
(8, 'Sonia', 'https://instagram.com/itttssssoniaaa?igshid=MmIzYWVlNDQ5Yg==', 'instagram-1581266_1280-removebg-preview.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `destinasi`
--
ALTER TABLE `destinasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
