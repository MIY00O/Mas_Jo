-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 01:21 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms-jj`
--

-- --------------------------------------------------------

--
-- Table structure for table `caraousel`
--

CREATE TABLE `caraousel` (
  `id_caraousel` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `caraousel`
--

INSERT INTO `caraousel` (`id_caraousel`, `judul`, `foto`) VALUES
(4, 'I\'M Jonathan', '20231127035247.jpg'),
(5, 'Suka Balap', '20231127035513.jpg'),
(6, 'Suka Edit', '20231127035536.jpg'),
(7, 'ayam', '20231204053716.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(5, 'Sejarah'),
(7, 'B.Jawa'),
(8, 'B.Inggris'),
(9, 'About');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `judul_website` varchar(200) NOT NULL,
  `profil_website` text NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_wa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `judul_website`, `profil_website`, `instagram`, `facebook`, `email`, `alamat`, `no_wa`) VALUES
(1, 'Mas J', 'akuu maww', 'koalabro', 'genyut', 'yudidista0@gmail.com', 'njembengen', '08564564564');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id_konten` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `tag` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id_konten`, `judul`, `keterangan`, `foto`, `slug`, `id_kategori`, `tanggal`, `username`, `tag`) VALUES
(6, 'PROKLAMASI KEMERDEKAAN INDONESIA', '<p style=\"text-align: justify;\"><strong>I. Latar Belakang Proklamasi Kemerdekaan Indonesia</strong><br>Proklamasi Kemerdekaan Indonesia pada 17 Agustus 1945 menandai titik penting dalam sejarah bangsa. Peristiwa ini terjadi di Jalan Pegangsaan Timur 56, Jakarta Pusat, dan diproklamasikan oleh Soekarno bersama Drs. Mohammad Hatta. Konteks global yang mencakup pengeboman atom di Hiroshima dan Nagasaki oleh Amerika Serikat pada 6 dan 9 Agustus 1945 menjadi pendorong utama perubahan situasi di Indonesia.</p>\r\n<p style=\"text-align: justify;\"><strong>II. Transformasi BPUPKI Menjadi PPKI</strong><br>Badan Penyelidik Usaha Persiapan Kemerdekaan Indonesia (BPUPKI) berubah menjadi Panitia Persiapan Kemerdekaan Indonesia (PPKI) pada 7 Agustus 1945. Transformasi ini merupakan respons terhadap dorongan kuat untuk mencapai kemerdekaan. Meskipun demikian, Jepang yang masih berkuasa di Indonesia berusaha menunda proklamasi hingga tanggal 24 Agustus.</p>\r\n<p style=\"text-align: justify;\"><strong>III. Perjuangan dan Kekacauan Sebelum Proklamasi</strong><br>Ketegangan semakin meningkat ketika Soekarno, Hatta, dan Radjiman Wedyodiningrat melakukan perjalanan ke Dalat, Vietnam, untuk bertemu Marsekal Terauchi, penguasa militer Jepang. Mereka berharap memperoleh konfirmasi mengenai rencana pemberian kemerdekaan oleh Jepang. Namun, ketidakpastian melanda, terutama setelah kabar Jepang menyerah kepada Sekutu.</p>\r\n<p style=\"text-align: justify;\"><strong>IV. Pertentangan di PPKI dan Tekanan Golongan Muda</strong><br>Pada 14 Agustus 1945, Jepang secara resmi menyerah kepada Sekutu di kapal USS Missouri, tetapi kekuasaan militer Jepang masih berlanjut di Indonesia. Golongan muda mendesak agar proklamasi segera dilakukan, sementara golongan tua berhati-hati untuk mencegah pertumpahan darah. Konsultasi di PPKI memperlihatkan perbedaan pendapat antara kedua golongan ini, dengan golongan muda meragukan legitimasi PPKI sebagai badan buatan Jepang.</p>\r\n<p style=\"text-align: justify;\"><strong>V. Momen Kunci Menuju Proklamasi</strong><br>Soekarno dan Hatta mencoba memperoleh konfirmasi dari penguasa militer Jepang, tetapi kantor tersebut kosong. Setelah pertemuan dengan Laksamana Muda Maeda, mereka mempersiapkan rapat PPKI pada 16 Agustus 1945. Sayangnya, rapat tersebut dibatalkan karena Soekarno dan Hatta tidak hadir. Akhirnya, pada 17 Agustus 1945, Indonesia memproklamasikan kemerdekaannya. Meskipun perjalanan menuju proklamasi penuh dengan ketidakpastian dan tekanan, momen tersebut menjadi tonggak sejarah penting bagi bangsa Indonesia.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">Link:</p>\r\n<p style=\"text-align: justify;\"><cite><a href=\"https://id.wikipedia.org/wiki/Proklamasi_Kemerdekaan_Indonesia\">https://id.wikipedia.org/wiki/<strong>Proklamasi_Kemerdekaan_Indonesia</strong></a></cite></p>', '20231127044056.jpg', 'PROKLAMASI-KEMERDEKAAN-INDONESIA', '5', '2023-11-27', 'Jonathan', 'PPKI'),
(8, 'Jonathan', '<p style=\"text-align: justify;\">Halo aku jonathan, dari SMKN 2 Karanganyar. Tinggal di Tegalasri RT07/06 Bejen, Jaranganyar. Memiliki hobi bermain motor dan suka balap</p>', '20231129050917.jpg', 'Jonathan', '9', '2023-11-29', 'Jonathan', 'akuu'),
(9, 'Bancaan Lahiran', '<p style=\"text-align: justify;\">Karifan lokal Bancakan iku warisan budaya sing tumbuh lan kembang ing wilayah Jawa, Indon&eacute;sia. Bancakan yaiku piranti sing ngarahake marang kearifan lokal sing nampa nilai-nilai tradisional, adat istiadat, lan kebijaksanaan sing wis didandani saka generasi menyang generasi ing masyarakat Jawa. Sawijining ciri khas karifan lokal Bancakan sing lahir ing Jawa melibatke aspek-aspek ing ngisor iki:</p>\r\n<ol style=\"text-align: justify;\">\r\n<li><strong>Kebijaksanaan ing Bertani</strong>:&nbsp;Karifan lokal Bancakan menehi gambaran tentang kearifan ing pertanian, sing kadang-kadang jadi tulang punggung ekonomi masyarakat Jawa. Pangsistem pertanian tradisional kaya subak, sing ngandhalkan irigasi terpadu, nuduhake kedalaman pengetahuan lokal ing ngelola sumber daya alam.</li>\r\n</ol>\r\n<p style=\"text-align: justify;\">2. <strong>Seni lan Budaya Tradisional</strong>: Seni lan budaya tradisional kaya wayang kulit, batik, tari Jawa, lan gamelan yaiku bag&eacute;an integral saka karifan lokal Bancakan. Nilai-nilai moral, crita-critane epik, lan kearifan urip kedaden ing seni iki, sing uga njabut peran&eacute; ing ngirim pesan-pesan moral lan sosial.</p>\r\n<p style=\"text-align: justify;\">3.&nbsp;<strong>Adat Istiadat</strong>: Macem-macem upacara adat, kaya slametan, siraman, lan midodareni, duw&eacute; pangerten ing kehidupan masyarakat Jawa. Upacara-upacara iki nuduhake kearifan ing nglestarike norma-norma sosial, ngajaga harmoni antarane manungsa lan alam, lan ngakoni tali persaudaraan.</p>\r\n<p style=\"text-align: justify;\">4.&nbsp;<strong>Filosofi Urup Gotong Royong</strong>: Karifan lokal Bancakan uga nuduhake filosofi urup gotong royong, ing ngendi masyarakat njaluk bahu marang kegiatan sehari-hari, kaya urup gotong royong ing pertanian, pembangunan, utawa kegiatan sosial liyane. Konsep iki menehi keharmonisan lan solidaritas ing masyarakat.</p>\r\n<p style=\"text-align: justify;\">5.&nbsp;<strong>Keramahan lan Etika Sosial</strong>: Sikap ramah tamah lan etika sosial sing dhuwur dadi nilai penting ing karifan lokal Bancakan. Sami ngormati, nginggilke norma-norma kebersamaan, lan ngajaga ronggowarsa sing apik marang tetangga yaiku bag&eacute;an saka kehidupan sehari-hari.</p>\r\n<p style=\"text-align: justify;\">Karifan lokal Bancakan ing Jawa nggambarkan kekayaan budaya lan spiritual sing melibatke nilai-nilai lokal ing kehidupan sehari-hari masyarakat Jawa. Nilai-nilai iki terus dijaga lan diwarisi saka siji generasi menyang generasi sijining bag&eacute;an sing ora bisa dipisahkan saka indentitas lan keberlanjutan budaya Jawa.</p>', '20231204020432.jpg', 'Bancaan-Lahiran', '7', '2023-12-04', 'Jonathan', 'Anak'),
(10, 'Nasi Tiwul', '<p style=\"text-align: justify;\">Nasi tiwul adalah makanan tradisional Indonesia yang dibuat dari bahan dasar tiwul, yaitu tepung ketan yang difermentasi. Proses fermentasi memberikan cita rasa khas dan tekstur yang berbeda pada tiwul. Nasi tiwul umumnya dihidangkan sebagai pengganti nasi biasa, terutama di daerah-daerah tertentu di Indonesia.</p>\r\n<p style=\"text-align: justify;\">Berikut adalah langkah-langkah umum dalam pembuatan nasi tiwul:</p>\r\n<p style=\"text-align: justify;\">1.&nbsp;<strong>Pemilihan dan Pencucian Tepung Ketan:</strong> Tepung ketan dipilih dengan teliti, lalu dicuci untuk menghilangkan kotoran dan sisa-sisa tanaman.</p>\r\n<p style=\"text-align: justify;\">2.&nbsp;<strong>Proses Fermentasi:</strong> Tepung ketan yang telah dicuci kemudian difermentasi. Fermentasi ini dapat dilakukan dengan cara alami menggunakan ragi atau bakteri tertentu. Proses ini memberikan rasa asam dan aroma khas pada tiwul.</p>\r\n<p style=\"text-align: justify;\">3. <strong>Pembentukan dan Pemasakan</strong>: Setelah proses fermentasi, tepung ketan yang telah menjadi tiwul dicetak dan dimasak. Ada berbagai cara memasak tiwul, seperti dikukus atau direbus.</p>\r\n<p style=\"text-align: justify;\">4.&nbsp;<strong>Penyajian:</strong> Nasi tiwul biasanya disajikan dengan lauk-pauk seperti sayur, sambal, atau hidangan lainnya. Beberapa daerah memiliki cara penyajian yang khas sesuai dengan budaya setempat.</p>\r\n<p style=\"text-align: justify;\">Nasi tiwul memiliki keunikan karena proses fermentasinya yang memberikan cita rasa khas dan nutrisi tambahan karena beberapa kandungan nutrisi dapat meningkat selama proses fermentasi. Makanan ini juga sering dianggap sebagai makanan yang cocok untuk dikonsumsi di daerah yang sulit mendapatkan beras atau sebagai alternatif sumber karbohidrat.<br><br>LINK:<br><a href=\"https://docs.google.com/presentation/d/108PQpODOgSo0UPpwfZEKSeU3agBS2lxf/edit?us\">https://docs.google.com/presentation/d/108PQpODOgSo0UPpwfZEKSeU3agBS2lxf/edit?us</a></p>', '20231204021726.jpg', 'Nasi-Tiwul', '7', '2023-12-04', 'Jonathan', 'Wull');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(70) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `level`) VALUES
(5, 'Jonathan', 'Jejo', 'c4cf192ff255dddf4cc2018dc622f834', 'admin'),
(6, 'Mamoy', 'Moci', 'c4cf192ff255dddf4cc2018dc622f834', 'kontributor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caraousel`
--
ALTER TABLE `caraousel`
  ADD PRIMARY KEY (`id_caraousel`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caraousel`
--
ALTER TABLE `caraousel`
  MODIFY `id_caraousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
