-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2020 at 01:47 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_front`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `userid` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  `pasword` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`userid`, `nama`, `email`, `status`, `pasword`) VALUES
(1, 'admin', 'admin@admin.com', 1, '1234'),
(2, 'client', 'client@admin.com', 2, '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `kode` int(5) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `judulberita` varchar(256) NOT NULL,
  `kontent` varchar(150) NOT NULL,
  `isiberita` text NOT NULL,
  `tanggal` varchar(12) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`kode`, `kategori`, `judulberita`, `kontent`, `isiberita`, `tanggal`, `foto`) VALUES
(1, 'Headline', 'Gereja Misi injili Indonesia(GMII) mengadakan camp youth community 2017 di gereja bukit zaitun kab.sintang.', 'Dibuka pada selasa Juli 2017 acara tersebut akan berlansung hingga 7 Juli 2017.', 'pada acara pembukaan camp diresmikan lansung oleh bupati Sintang dr. H. Jarot Winarno, M.Med.Ph\r\nevent ini mengambil tema come join us Jesus is my idol, diikuti oleh seluruh pemuda-pemudi dikabupaten Sintang dan kabupaten Melawi.', '05-07-2020', 'IMG_8618.JPG'),
(4, '', 'Peresmian GMII Bukit Karmel Binjai Hulu oleh Bupati Sintang Askiman', 'Wakil Bupati Sintang, Askiman meresmikan Gedung Gereja Misi Injili Indonesia (GMII) ‘Bukit Karmel’ SP-AB di Kecamatan Binjai Hulu, Senin (4/12/2017) p', 'Wakil Bupati Sintang, Askiman meresmikan Gedung Gereja Misi Injili Indonesia (GMII) ‘Bukit Karmel’ SP-AB di Kecamatan Binjai Hulu, Senin (4/12/2017) pagi. Kegiatan peresmian ini dilanjutkan dengan acara Kebaktian Raya pada malam harinya.<br>\r\n\r\nKetua Panitia peresmian Gedung Gereja Misi Injili Indonesia (GMII) ‘Bukit Karmel’ SP-AB , Serin menyampaikan bahwa total dana yang digunakan untuk pembangunan Gedung Gereja GMII tersebut sampai satu miliar lebih.<br>\r\n\r\n“Dari dana hampir 1,5 miliar itu yang jemaat kita kumpulkan 1,2 miliar sedang 200 juta lebih itu kita dapatkan dari sumbangan donatur yang tidak mengikat,” pungkas Serin.', '06-07-2020', 'wakil-bupati-sintang-askiman_20171204_201844.jpg'),
(5, '', 'Bupati Sintang, Jarot Winarno melakukan peletakan batu pertama pembangunan gedung Gereja Misi Injil Indonesia (GMII) Bukit Zaitun', 'Bupati Sintang, Jarot Winarno melakukan peletakan batu pertama pembangunan gedung Gereja Misi Injil Indonesia (GMII) Bukit Zaitun, yang terletak di Du', 'Bupati Sintang, Jarot Winarno melakukan peletakan batu pertama pembangunan gedung Gereja Misi Injil Indonesia (GMII) Bukit Zaitun, yang terletak di Dusun Sungai Sawak, Desa Sungai Ukoi, Kecamatan Sungai Tebelian, Kabupaten Sintang, pada hari Senin, (19/8/2019).\r\n\r\nTurut mendampingi Bupati Sintang dalam kegiatan tersebut Wakil Bupati Sintang, Askiman, Anggota DPR-RI Lasarus, Ketua DPRD Sintang Jeffray Edward, Kapolres Sintang AKBP. Adhe Hariadi, Komandan Kodim 1205 Sintang, Letkol.Inf. Rachmat Basuki dan Kepala BPN Sintang.\r\nDengan adanya pembangunan gereja GMII yang baru ini, kami dari gereja berharap pelayanan GMII Bukit Zaitun akan menjadi luas, dan kami juga akan menjadi mitra Pemerintah Daerah Kabupaten Sintang dalam rangka mencerdaskan bangsa khususnya dibidang keagamaan pada jemaat GMII di wilayah ini, harapnya.\r\n\r\nKetua Umum Sinode GMII, Pendeta Jesias F. Palandi menjelaskan usia dari gedung GMII lama yang saat ini digunakan untuk kegiatan, “tepat hari ini ditanggal yang sama, 34 tahun yang lalu Gereja GMII ini berdiri, dan hari ini juga ditempat yang sama, kita memulai pembangunan gedung gereja yang baru, tentunya ini menjadi wujud nyata dalam pembangunan gereja yang baru”, kata Pendeta Jesias.', '06-07-2020', 'peletakan_batu.jpeg'),
(6, '', 'GMII Gelar Kebaktian Nasional Keluarga GMII 2018 di Pontianak', 'Gereja Misi Injil Indonesia (GMII) mengadakan Kebaktian Nasional Keluarga GMII 2018 di Hotel Kapuas Palace Pontianak.', 'Gereja Misi Injil Indonesia (GMII) mengadakan Kebaktian Nasional Keluarga GMII 2018 di Hotel Kapuas Palace Pontianak.\r\n\r\nDibuka pada Selasa 03 Juli 2018, acara tersebut akan berlangsung hingga Jumat 06 Juli 2018 dan dihadiri sekitar 600 jemaat.\r\n\r\nMemilih kata Nasional dan keluarga dalam penamaan kegiatan, Ketua Panitia, Pendeta Dr Jesias F. Palandi mengatakan bahwa kegiatan ini diikuti oleh seluruh jemaat GMII dari seluruh Indonesia.\r\n', '06-07-2020', 'jemaat_20180704_110609.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detil`
--

CREATE TABLE `tb_detil` (
  `iddetil` int(11) NOT NULL,
  `kode` int(11) NOT NULL,
  `jenis` varchar(15) NOT NULL,
  `fasilitas` text NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detil`
--

INSERT INTO `tb_detil` (`iddetil`, `kode`, `jenis`, `fasilitas`, `foto`) VALUES
(5, 1, '', '<li>- Kendaraan Untuk Kegiatan Berwisata</li>\n<li>- Penginapan dengan kamar yang luas untuk bisa beristirahat bersama keluarga atau rekan rekan </li>\n<li>- Tenda Siap Pasang untuk kegiatan lomba di pekarangana </li>', 'IMG_7547.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `tb_event`
--

CREATE TABLE `tb_event` (
  `kode` int(5) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `judulevent` varchar(100) NOT NULL,
  `kontent` varchar(150) NOT NULL,
  `isiberita` text NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `fasilitas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_event`
--

INSERT INTO `tb_event` (`kode`, `kategori`, `judulevent`, `kontent`, `isiberita`, `tanggal`, `foto`, `fasilitas`) VALUES
(2, 'Event', 'Camp Youth Community', 'Camp Youth Community 2020', 'Camp Youth Community Camp Youth Community Camp Youth Community Camp Youth Community Camp Youth Community Camp Youth Community Camp Youth Community Camp Youth Community Camp Youth Community Camp Youth Community Camp Youth Community Camp Youth Community Camp Youth Community ', '04-07-2020 07:08:05', 'IMG_7631.JPG', ''),
(3, 'Event', 'KNK(Kebaktian Nasional Keluarga)', 'KNK(Kebaktian Nasional Keluarga) 2020', 'Puji Tuhan kami panjatkan kepada Tuhan kita Yesus Kristus, yang telah memberikan kesempatan bagi GMII untuk kembali melaksanakan Rapat Kerja Nasional (Kakernas) ke-5 dan Kebaktian Nasional Keluarga (KNK) ke-2 tahun 2019 di Pontianak. Kegiatan Rakernas kali ini, GMII mengambil tema “Dipersatukan dalam Persekutuan” (Kisah Para Rasul 15:1-21). Rakernas ke-5 memiliki tujuan yang utama yaitu berusaha meningkatkan hubungan persekutuan secara sinergi antara para Pendeta, Majelis Jemaat dan jemaat. Kegiatan Rakernas yang digelar di Hotel Aston Pontianak, mulai tanggal 30 Juni – 3 Juli 2019 juga mengupas hal-hal penting dalam mempersiapkan Sidang Sinode tahun depan.\r\nRakernas yang digelas selama 4 hari ini, menyuguhkan beragam kegiatan rapat, baik dalam bentuk pleno maupun dalam komisi-komisi. Tampak salah satu Pimpinan komisi memimpin rapat seperti yang tertera dibawah ini:\r\n\r\n\r\nSetelah Rakernas 2019 berlangsung, GMII lanjut menyelenggarakan kegiatan akbar ke-2 yaitu Kebaktian Nasional Keluarga (KNK) ditempat yang sama pada tanggal 3-6 Juli 2019. Kali KNK mengambil tema “Manifestasi Iman Di Tengah Tantangan Zaman (Kejadian 6:9; 1 Petrus 5:9). Dengan mengupas tema-tema mendasar ini GMII berharap setiap orang percaya dapat menghadapi tantangan pada zamannya. Ini merupakan refleksi dari pengajaran dan pemahaman yang benar sesuai Firman Tuhan terhadap permasalahan dalam hidup ini.\r\n\r\nTangan zaman yang dimaksud adalah kemajuan ilmu pengetahuan social, politik, budaya dan ekonomi serta perkembangan teknologi yang membuat manusia lebih berpikir dan bertindak lebih cepat dan praktis dengan kurang memperhatikan proses yang terjadi dalam tantangan kehidupan ini, yang berjalan secara alami. Maka perlu ditekankan etika Kristen, dan pembaharuan hidup oleh Tuhan Yesus Kristus secara pribadi dan keluarga.\r\nMelalui persekutuan yang dibangun ini kita berharap dapat saling berbagi satu sama yang lain, belajar firman Tuhan bersama-sama, dan beribadah bersama-sama, memuji dan menyembah Tuhan kita Yesus Kristus. Kiranya dengan selesainya dua acara akbar ini, GMII dapat mempersembahkan yang terbaik bagi hormat dan kemuliaan nama Tuhan. Soli Deo Gloria.', '05-07-2020 08:11:37', 'IMG_7637.JPG', ''),
(4, 'Event', 'NYC (Nazareht Youth Community)', 'NYC (Nazareht Youth Community) 2020', 'NYC (Nazareht Youth Community) NYC (Nazareht Youth Community) NYC (Nazareht Youth Community) NYC (Nazareht Youth Community) NYC (Nazareht Youth Community) NYC (Nazareht Youth Community) NYC (Nazareht Youth Community) NYC (Nazareht Youth Community) NYC (Nazareht Youth Community) NYC (Nazareht Youth Community) NYC (Nazareht Youth Community)', '04-07-2020 07:12:15', 'DSC_0441.JPG', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `kode` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tgllahir` varchar(20) NOT NULL,
  `event` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `biaya` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`kode`, `nama`, `username`, `password`, `tgllahir`, `event`, `foto`, `biaya`, `email`, `status`) VALUES
(1, 'asdasd', 'admin@admin.com', '1234', '2020-07-05', 'sdad', '2.jpg', 0, 'a@f.com', 1),
(2, 'Lea', 'lea@gmail.com', '1234', '2020-07-05', 'sdad', '2019255_Juni_20201.jpg', 0, 'lea@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_setting`
--

CREATE TABLE `tb_setting` (
  `kode` int(11) NOT NULL,
  `namaweb` varchar(100) NOT NULL,
  `logoweb` varchar(100) NOT NULL,
  `corosal1` varchar(50) NOT NULL,
  `corosal2` varchar(50) NOT NULL,
  `corosal3` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `konsep` text NOT NULL,
  `visimisi` text NOT NULL,
  `tujuan` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_setting`
--

INSERT INTO `tb_setting` (`kode`, `namaweb`, `logoweb`, `corosal1`, `corosal2`, `corosal3`, `alamat`, `telepon`, `konsep`, `visimisi`, `tujuan`, `status`) VALUES
(1, 'Event Camp GMII', 'logo.jpg', 'corosal1.jpg', 'corosal2.jpg', 'ktp1.jpg', 'Jl. Sintang-Pontianak KM 15', '0812-6352-0136', 'Sejak tahun 1969, YPPII telah melayani di Kalimantan Barat. Dan pada tahun 1974 YPPII mulai membuka pelayanannya di Kabupaten Sintang. Akibat pelayanan YPPII ini, sampai awal tahun 1984 di Kabupaten Sintang telah bertumbuh puluhan jemaat baru. Pada tanggal 12 April 1984, di hadapan Pembimas (Kristen) Protestan Kalimantan Barat dan Muspida Kab. Sintang, wakil-wakil jemaat tersebut menentukan sikap supaya dilayani langsung oleh YPPII.\r\n\r\nPada tanggal 16 - 21 Oktober 1984 YPPII menyelenggarakan Rapat Kerja di Batu, Jawa Timur. Dalam Rapat Kerja ini disepakati bahwa YPPII akan mendirikan gereja. Tindak lanjut dari hasil Rapat Kerja ini, Majelis Pusat YPPII bersama wakil-wakil dari Majelis Daerah dan Majelis Perwakilan YPPII yang dipimpin oleh Pdt. DR. Petrus Octavianus mengadakan pertemuan tanggal 10-11 November 1984, yang membahas dan menyepakati untuk mendirikan gereja yang dimulai di Kalimantan Barat. Tanggal 15 November 1984, Pimpinan YPPII menghadap Dirjen Bimas (Kristen) Protestan untuk berkonsultasi tentang rencana pendirian gereja ini. Dirjen menyetujui YPPII mendirikan gereja.\r\n\r\nTanggal 30 November 1984 di Sintang, Kalimantan Barat, 57 orang wakil-wakil Jemaat dan Pos PI yang dipimpin oleh Pdt. Hans S. Rapar dan Pdt. Ngang Ibo menyepakati untuk membentuk dan mendirikan Gereja Pekabaran Injil Indonesia. Gereja ini mempunyai hubungan historis dan kerjasama organisatoris dengan YPPII yang kemudian hari dikenal dengan ', 'visi<br>\r\n“Gereja yang Misioner dan Apostolik.”<br>\r\n\r\nmisi<br>\r\n1. ''‘Menggembalakan Jemaat menjadi murid Kristus yang setia''<br>\r\n2. ‘Menatakembangkan potensi Gereja-gereja lokal untuk mendukung Pengutusan Misionaris’<br>\r\n3 ‘Menggembalakan jemaat untuk membawa damai di Indonesia dan suku-suku bangsa di dunia.', 'memiliki identitas Injili karena pokok-pokok theologia yang diakui sebagai ciri-ciri khas kofensi Injili sedunia, yaitu kesaksian, pertobatan, pengudusan dan kelahiran baru. GMII adalah gereja yang Missioner senantiasa mengabarkan Injil.', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tb_detil`
--
ALTER TABLE `tb_detil`
  ADD PRIMARY KEY (`iddetil`);

--
-- Indexes for table `tb_event`
--
ALTER TABLE `tb_event`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tb_setting`
--
ALTER TABLE `tb_setting`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `kode` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_detil`
--
ALTER TABLE `tb_detil`
  MODIFY `iddetil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_event`
--
ALTER TABLE `tb_event`
  MODIFY `kode` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_setting`
--
ALTER TABLE `tb_setting`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
