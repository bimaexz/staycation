-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 01:53 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `staycation`
--

-- --------------------------------------------------------

--
-- Table structure for table `cerita`
--

CREATE TABLE `cerita` (
  `id_cerita` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `cerita` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cerita`
--

INSERT INTO `cerita` (`id_cerita`, `id_user`, `cerita`) VALUES
(9, 14, 'Sudah 3 kali menggunakan website ini mencari tempat penginapan terdekat dengan tempat wisata yang akan kami jadikan tempat berlibur, dan selalu memuaskan.'),
(10, 15, 'Penginapan yang direkomendasikan sangat bagus,nyaman,bersih,dan pelayanana yang baik. Website yang sangat terpercaya.'),
(11, 16, 'Website yang terpercaya,selalu menggunakan website ini saat melakukan liburan dengan keluarga. Rekomendasi banget pokoknya.'),
(12, 18, 'Perjalanan kami sangat menyenangkan berkat “Staycation” dimana kami dapat mudah mencari penginapan yang dekat dengan destinasi wisata yang kami inginkan.'),
(13, 17, 'Pengalaman yang cukup menarik ketika menggunakan website ini, dengan transaksi yang mudah tanpa ribet.'),
(14, 24, 'Pengalaman yang menarik ketika pertama kali menggunakan website ini untuk mencari penginapan terdekat dari wisata yang dicari, layak menjadi rekomendasi');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id_hotel` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `hotel` varchar(100) DEFAULT NULL,
  `bintang_hotel` decimal(11,0) DEFAULT NULL,
  `jarak` int(11) DEFAULT NULL,
  `fasilitas` text DEFAULT NULL,
  `deskripsi_hotel` text DEFAULT NULL,
  `email_hotel` varchar(50) DEFAULT NULL,
  `kontak_hotel` varchar(50) DEFAULT NULL,
  `gambar_hotel` varchar(100) DEFAULT NULL,
  `gambar_interior1` varchar(100) DEFAULT NULL,
  `gambar_interior2` varchar(100) DEFAULT NULL,
  `gambar_interior3` varchar(100) DEFAULT NULL,
  `gambar_interior4` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id_hotel`, `id_user`, `id_wisata`, `hotel`, `bintang_hotel`, `jarak`, `fasilitas`, `deskripsi_hotel`, `email_hotel`, `kontak_hotel`, `gambar_hotel`, `gambar_interior1`, `gambar_interior2`, `gambar_interior3`, `gambar_interior4`) VALUES
(3, 5, 4, 'mahotel', '4', 20, 'Memiliki 100 Kamar tidur, 200 Tempat Tidur yang siap di gunakan 100 Kamar Mandi dilengkapi Dengan Air panas,70 Bathtub di Dalam Kamar ,Ruang Tamu yang Luas,Ruang keluarga dilengkapi dengan Karaoke, memiliki Private pool,kitchen set,Free Kopi teh Dan Gula, Free Mie instan, Free Susu Sapi di pagi Hari,Free WiFi. Dilengkapi Taman Mini, Rooftop Dilantai 9, Balkon. ', 'Tamu dijamin mendapatkan pengalaman menginap bebas kendala dengan semua fasilitas dan layanan yang disediakan oleh Mahotel. Tetap terhubung selama Anda menginap dengan akses internet gratis yang disediakan. Parkir disediakan untuk tamu oleh hotel. Untuk siang dan malam yang santai, fasilitas di dalam kamar seperti layanan kamar dan layanan kebersihan harian memungkinkan Anda mendapat kenyamanan maksimal di kamar Anda.Semua kamar tamu di Mahotel memberikan beragam fasilitas bagi tamu yang memastikan pengalaman tidur yang nyaman. Untuk meningkatkan pengalaman menginap Anda, beberapa kamar tertentu di hotel dilengkapi dengan layanan linen dan tirai kedap cahaya. Untuk hiburan, tamu dapat menggunakan TV dan TV kabel yang tersedia di beberapa kamar tertentu. Tidak perlu khawatir akan merasa haus karena teh instan, kopi instan dan air minum dalam botol tersedia di dalam kamar.Mengerti bahwa perlengkapan di kamar mandi memiliki peran penting dalam meningkatkan kepuasan tamu, hotel menyediakan perlengkapan mandi dan handuk di kamar-kamar tertentu.\r\n', 'mahotel@gmail.com', '0902794857', 'mahotel_besar.png', 'mahotel_interior1.png', 'mahotel_interior2.png', 'mahotel_interior3.png', 'mahotel_interior4.png'),
(4, 7, 5, 'svish apartment', '4', 15, 'Villa kami memiliki fasilitas dengan kolam renang dan juga terdapat rooftop dengan pemandangan luas di lantai 3 kolam renang rooftop, memiliki view luas yang sangat cocok untuk healing, dilengkapi dengan alat bbq. Kami menyediakan  7 kamar tidur 5 kamar mandi water heater free wifi.', 'Tamu dijamin mendapatkan pengalaman menginap bebas kendala dengan semua fasilitas dan layanan yang disediakan oleh Svish. Tetap terhubung selama Anda menginap dengan akses internet gratis yang disediakan. Parkir disediakan untuk tamu oleh hotel. Untuk siang dan malam yang santai, fasilitas di dalam kamar seperti layanan kamar dan layanan kebersihan harian memungkinkan Anda mendapat kenyamanan maksimal di kamar Anda.Semua kamar tamu di Svish memberikan beragam fasilitas bagi tamu yang memastikan pengalaman tidur yang nyaman. Untuk meningkatkan pengalaman menginap Anda, beberapa kamar tertentu di hotel dilengkapi dengan layanan linen dan tirai kedap cahaya. Untuk hiburan, tamu dapat menggunakan TV dan TV kabel yang tersedia di beberapa kamar tertentu. Tidak perlu khawatir akan merasa haus karena teh instan, kopi instan dan air minum dalam botol tersedia di dalam kamar.Mengerti bahwa perlengkapan di kamar mandi memiliki peran penting dalam meningkatkan kepuasan tamu, hotel menyediakan perlengkapan mandi dan handuk di kamar-kamar tertentu. ', 'svish@gmail.com', '086716518615', 'bromo_svish_besar.png', 'bromo_svish_interiorkecil1.png', 'bromo_svish_interiorkecil2.png', 'bromo_svish_interiorkecil3.png', 'bromo_svish_interiorkecil4.png'),
(5, 8, 7, 'villaroy', '4', 30, 'Memiliki 30 Kamar tidur,60 Tempat Tidur yang siap di gunakan 30 Kamar Mandi dilengkapi Dengan Air panas,10 Bathtub di Dalam Kamar utama,Ruang Tamu yang Luas,Ruang keluarga dilengkapi dengan Karaoke, memiliki Private pool,Kitchen set,Free Kopi teh Dan Gula, Free Mie instan, Free Susu Sapi di pagi Hari,Free WiFi. Dilengkapi Taman Mini, Rooftop Dilantai 4, Balkon. ', 'Tamu dijamin mendapatkan pengalaman menginap bebas kendala dengan semua fasilitas dan layanan yang disediakan oleh villaroy. Tetap terhubung selama Anda menginap dengan akses internet gratis yang disediakan. Parkir disediakan untuk tamu oleh hotel. Untuk siang dan malam yang santai, fasilitas di dalam kamar seperti layanan kamar dan layanan kebersihan harian memungkinkan Anda mendapat kenyamanan maksimal di kamar Anda.Semua kamar tamu di villaroy memberikan beragam fasilitas bagi tamu yang memastikan pengalaman tidur yang nyaman. Untuk meningkatkan pengalaman menginap Anda, beberapa kamar tertentu di hotel dilengkapi dengan layanan linen dan tirai kedap cahaya. Untuk hiburan, tamu dapat menggunakan TV dan TV kabel yang tersedia di beberapa kamar tertentu. Tidak perlu khawatir akan merasa haus karena teh instan, kopi instan dan air minum dalam botol tersedia di dalam kamar.Mengerti bahwa perlengkapan di kamar mandi memiliki peran penting dalam meningkatkan kepuasan tamu, hotel menyediakan perlengkapan mandi dan handuk di kamar-kamar tertentu.', 'villaroy@gmail.com', '086716518615', 'bromo_villaroy_besar.png', 'bromo_villaroy_interior1.png', 'bromo_villaroy_interior2.png', 'bromo_villaroy_interior3.png', 'bromo_villaroy_interior4.png'),
(7, 12, 10, 'horizone', '4', 15, 'Kami memiliki fasilitas dengan kolam renang dan juga terdapat rooftop dengan pemandangan luas di lantai 10 kolam renang rooftop, memiliki view luas yang sangat cocok untuk healing, dilengkapi dengan alat bbq. Kami menyediakan  100 kamar tidur 100 kamar mandi water heater free wifi.\r\n', 'Tamu dijamin mendapatkan pengalaman menginap bebas kendala dengan semua fasilitas dan layanan yang disediakan oleh horizone Hotel. Tetap terhubung selama Anda menginap dengan akses internet gratis yang disediakan. Parkir disediakan untuk tamu oleh hotel. Untuk siang dan malam yang santai, fasilitas di dalam kamar seperti layanan kamar dan layanan kebersihan harian memungkinkan Anda mendapat kenyamanan maksimal di kamar Anda.Semua kamar tamu di horizone Hotel memberikan beragam fasilitas bagi tamu yang memastikan pengalaman tidur yang nyaman. Untuk meningkatkan pengalaman menginap Anda, beberapa kamar tertentu di hotel dilengkapi dengan layanan linen dan tirai kedap cahaya. Untuk hiburan, tamu dapat menggunakan TV dan TV kabel yang tersedia di beberapa kamar tertentu. Tidak perlu khawatir akan merasa haus karena teh instan, kopi instan dan air minum dalam botol tersedia di dalam kamar.Mengerti bahwa perlengkapan di kamar mandi memiliki peran penting dalam meningkatkan kepuasan tamu, hotel menyediakan perlengkapan mandi dan handuk di kamar-kamar tertentu.', 'horizone@gmail.com', '0902794857', 'bromo_horizone_besar.png', 'bromo_horizone_interiorkecil1.png', 'bromo_horizone_interiorkecil2.png', 'bromo_horizone_interiorkecil3.png', 'bromo_horizone_interiorkecil4.png'),
(8, 20, 12, 'hestyvill', '5', 9, 'Kami memiliki fasilitas dengan kolam renang dan juga terdapat rooftop dengan pemandangan luas di lantai 10 kolam renang rooftop, memiliki view luas yang sangat cocok untuk healing, dilengkapi dengan alat bbq. Kami menyediakan  100 kamar tidur 100 kamar mandi water heater free wifi.', 'Tamu dijamin mendapatkan pengalaman menginap bebas kendala dengan semua fasilitas dan layanan yang disediakan oleh hestyvill. Tetap terhubung selama Anda menginap dengan akses internet gratis yang disediakan. Parkir disediakan untuk tamu oleh hotel. Untuk siang dan malam yang santai, fasilitas di dalam kamar seperti layanan kamar dan layanan kebersihan harian memungkinkan Anda mendapat kenyamanan maksimal di kamar Anda.Semua kamar tamu di hestyvill memberikan beragam fasilitas bagi tamu yang memastikan pengalaman tidur yang nyaman. Untuk meningkatkan pengalaman menginap Anda, beberapa kamar tertentu di hotel dilengkapi dengan layanan linen dan tirai kedap cahaya. Untuk hiburan, tamu dapat menggunakan TV dan TV kabel yang tersedia di beberapa kamar tertentu. Tidak perlu khawatir akan merasa haus karena teh instan, kopi instan dan air minum dalam botol tersedia di dalam kamar.Mengerti bahwa perlengkapan di kamar mandi memiliki peran penting dalam meningkatkan kepuasan tamu, hotel menyediakan perlengkapan mandi dan handuk di kamar-kamar tertentu.', 'hestyvill@gmail.com', '0835823656381', 'hestyvill_besar.png', 'hestyvill_interiorkecil1.png', 'hestyvill_interiorkecil2.png', 'hestyvill_interiorkecil3.png', 'hestyvill_interiorkecil4.png'),
(9, 11, 4, 'bintangvilla', '4', 16, 'Memiliki 15 Kamar tidur,15 Tempat Tidur yang siap di gunakan 25 Kamar Mandi dilengkapi Dengan Air panas,10 Bathtub di Dalam Kamar ,Ruang Tamu yang Luas,Ruang keluarga dilengkapi dengan Karaoke, memiliki Private pool,Kitchen set,Free Kopi teh Dan Gula, Free Mie instan, Free Susu Sapi di pagi Hari,Free WiFi. Dilengkapi Taman Mini, Rooftop Dilantai 4, Balkon.', 'Tamu dijamin mendapatkan pengalaman menginap bebas kendala dengan semua fasilitas dan layanan yang disediakan oleh bintangvilla. Tetap terhubung selama Anda menginap dengan akses internet gratis yang disediakan. Parkir disediakan untuk tamu oleh hotel. Untuk siang dan malam yang santai, fasilitas di dalam kamar seperti layanan kamar dan layanan kebersihan harian memungkinkan Anda mendapat kenyamanan maksimal di kamar Anda.Semua kamar tamu di bintang villa memberikan beragam fasilitas bagi tamu yang memastikan pengalaman tidur yang nyaman. Untuk meningkatkan pengalaman menginap Anda, beberapa kamar tertentu di hotel dilengkapi dengan layanan linen dan tirai kedap cahaya. Untuk hiburan, tamu dapat menggunakan TV dan TV kabel yang tersedia di beberapa kamar tertentu. Tidak perlu khawatir akan merasa haus karena teh instan, kopi instan dan air minum dalam botol tersedia di dalam kamar.Mengerti bahwa perlengkapan di kamar mandi memiliki peran penting dalam meningkatkan kepuasan tamu, hotel menyediakan perlengkapan mandi dan handuk di kamar-kamar tertentu.', 'bintangvilla@gmail.com', '082561356153', 'uluwatu_bintangvilla_besar.png', 'uluwatu_bintangvilla_interiorkecil1.png', 'uluwatu_bintangvilla_interiorkecil2.png', 'uluwatu_bintangvilla_interiorkecil3.png', 'uluwatu_bintangvilla_interiorkecil4.png'),
(10, 21, 5, 'rojviil', '4', 10, 'Memiliki 29 Kamar tidur,40 Tempat Tidur yang siap di gunakan 30 Kamar Mandi dilengkapi Dengan Air panas,10 Bathtub di Dalam Kamar ,Ruang Tamu yang Luas,Ruang keluarga dilengkapi dengan Karaoke, memiliki Private pool,Kitchen set,Free Kopi teh Dan Gula, Free Mie instan, Free Susu Sapi di pagi Hari,Free WiFi. Dilengkapi Taman Mini, Rooftop Dilantai 4, Balkon. ', 'Tamu dijamin mendapatkan pengalaman menginap bebas kendala dengan semua fasilitas dan layanan yang disediakan oleh rojviil. Tetap terhubung selama Anda menginap dengan akses internet gratis yang disediakan. Parkir disediakan untuk tamu oleh hotel. Untuk siang dan malam yang santai, fasilitas di dalam kamar seperti layanan kamar dan layanan kebersihan harian memungkinkan Anda mendapat kenyamanan maksimal di kamar Anda.Semua kamar tamu di rojviil memberikan beragam fasilitas bagi tamu yang memastikan pengalaman tidur yang nyaman. Untuk meningkatkan pengalaman menginap Anda, beberapa kamar tertentu di hotel dilengkapi dengan layanan linen dan tirai kedap cahaya. Untuk hiburan, tamu dapat menggunakan TV dan TV kabel yang tersedia di beberapa kamar tertentu. Tidak perlu khawatir akan merasa haus karena teh instan, kopi instan dan air minum dalam botol tersedia di dalam kamar.Mengerti bahwa perlengkapan di kamar mandi memiliki peran penting dalam meningkatkan kepuasan tamu, hotel menyediakan perlengkapan mandi dan handuk di kamar-kamar tertentu.', 'rojviil@gmail.com', '0815613671331', 'rojviil_besar.png', 'rojviil_interiorkecil1.png', 'rojviil_interiorkecil2.png', 'rojviil_interiorkecil3.png', 'rojviil_interiorkecil4.png'),
(11, 22, 12, 'sadantel', '4', 6, 'Kami memiliki fasilitas dengan kolam renang dan juga terdapat rooftop dengan pemandangan luas di lantai 10 kolam renang rooftop, memiliki view luas yang sangat cocok untuk healing, dilengkapi dengan alat bbq. Kami menyediakan 100 kamar tidur 100 kamar mandi water heater free wifi.', 'Tamu dijamin mendapatkan pengalaman menginap bebas kendala dengan semua fasilitas dan layanan yang disediakan oleh sadantel hotel. Tetap terhubung selama Anda menginap dengan akses internet gratis yang disediakan. Parkir disediakan untuk tamu oleh hotel. Untuk siang dan malam yang santai, fasilitas di dalam kamar seperti layanan kamar dan layanan kebersihan harian memungkinkan Anda mendapat kenyamanan maksimal di kamar Anda.Semua kamar tamu di sadantel memberikan beragam fasilitas bagi tamu yang memastikan pengalaman tidur yang nyaman. Untuk meningkatkan pengalaman menginap Anda, beberapa kamar tertentu di hotel dilengkapi dengan layanan linen dan tirai kedap cahaya. Untuk hiburan, tamu dapat menggunakan TV dan TV kabel yang tersedia di beberapa kamar tertentu. Tidak perlu khawatir akan merasa haus karena teh instan, kopi instan dan air minum dalam botol tersedia di dalam kamar.Mengerti bahwa perlengkapan di kamar mandi memiliki peran penting dalam meningkatkan kepuasan tamu, hotel menyediakan perlengkapan mandi dan handuk di kamar-kamar tertentu.', 'sadantel@gmail.com', '082757376326', 'sadantel_besar.png', 'sadantel_interiorkecil1.png', 'sadantel_interiorkecil2.png', 'sadantel_interiorkecil3.png', 'sadantel_interiorkecil4.png'),
(12, 25, 10, 'pairs', '4', 14, 'Kami memiliki fasilitas dengan kolam renang dan juga terdapat rooftop dengan pemandangan luas di lantai 10 kolam renang rooftop, memiliki view luas yang sangat cocok untuk healing, dilengkapi dengan alat bbq. Kami menyediakan 100 kamar tidur 100 kamar mandi water heater free wifi.', 'Tamu dijamin mendapatkan pengalaman menginap bebas kendala dengan semua fasilitas dan layanan yang disediakan oleh pairs hotel. Tetap terhubung selama Anda menginap dengan akses internet gratis yang disediakan. Parkir disediakan untuk tamu oleh hotel. Untuk siang dan malam yang santai, fasilitas di dalam kamar seperti layanan kamar dan layanan kebersihan harian memungkinkan Anda mendapat kenyamanan maksimal di kamar Anda.Semua kamar tamu di pairs hotel memberikan beragam fasilitas bagi tamu yang memastikan pengalaman tidur yang nyaman. Untuk meningkatkan pengalaman menginap Anda, beberapa kamar tertentu di hotel dilengkapi dengan layanan linen dan tirai kedap cahaya. Untuk hiburan, tamu dapat menggunakan TV dan TV kabel yang tersedia di beberapa kamar tertentu. Tidak perlu khawatir akan merasa haus karena teh instan, kopi instan dan air minum dalam botol tersedia di dalam kamar.Mengerti bahwa perlengkapan di kamar mandi memiliki peran penting dalam meningkatkan kepuasan tamu, hotel menyediakan perlengkapan mandi dan handuk di kamar-kamar tertentu.', 'pairs@gmail.com', '08000003742', 'pairshotel_besar.png', 'pairshotel_interiorkecil1.png', 'pairshotel_interiorkecil2.png', 'pairshotel_interiorkecil3.png', 'pairshotel_interiorkecil4.png'),
(13, 26, 7, 'vocatell', '4', 13, 'Kami memiliki fasilitas dengan kolam renang dan juga terdapat rooftop dengan pemandangan luas dengan view kolam renang, memiliki view luas yang sangat cocok untuk healing, dilengkapi dengan alat bbq. Kami menyediakan 100 kamar tidur 100 kamar mandi water heater free wifi.', '<p>Tamu dijamin mendapatkan pengalaman menginap bebas kendala dengan semua fasilitas dan layanan yang disediakan oleh vocatell. Tetap terhubung selama Anda menginap dengan akses internet gratis yang disediakan. Parkir disediakan untuk tamu oleh hotel. Untuk siang dan malam yang santai, fasilitas di dalam kamar seperti layanan kamar dan layanan kebersihan harian memungkinkan Anda mendapat kenyamanan maksimal di kamar Anda.Semua kamar tamu di vocatell memberikan beragam fasilitas bagi tamu yang memastikan pengalaman tidur yang nyaman. Untuk meningkatkan pengalaman menginap Anda, beberapa kamar tertentu di hotel dilengkapi dengan layanan linen dan tirai kedap cahaya. Untuk hiburan, tamu dapat menggunakan TV dan TV kabel yang tersedia di beberapa kamar tertentu. Tidak perlu khawatir akan merasa haus karena teh instan, kopi instan dan air minum dalam botol tersedia di dalam kamar.Mengerti bahwa perlengkapan di kamar mandi memiliki peran penting dalam meningkatkan kepuasan tamu, hotel menyediakan perlengkapan mandi dan handuk di kamar-kamar tertentu.</p>\r\n', 'vocatell@gmail.com', '08351513853893', 'vocatell_besar.png', 'vocatell_interiorkecil1.png', 'vocatell_interiorkecil2.png', 'vocatell_interiorkecil3.png', 'vocatell_interiorkecil4.png');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kamar`
--

CREATE TABLE `jenis_kamar` (
  `id_jenis_kamar` int(11) NOT NULL,
  `id_hotel` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jenis_kamar` varchar(100) DEFAULT NULL,
  `harga_kamar` int(11) DEFAULT NULL,
  `jumlah_kamar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_kamar`
--

INSERT INTO `jenis_kamar` (`id_jenis_kamar`, `id_hotel`, `id_user`, `jenis_kamar`, `harga_kamar`, `jumlah_kamar`) VALUES
(3, 3, 5, 'super suite', 2000000, 15),
(8, 3, 5, 'hello suite', 5000000, 30),
(12, 4, 7, 'sweet suite', 400000, 20),
(13, 5, 8, 'deluxe suite', 300000, 35),
(14, 7, 12, 'Single sweet', 100000, 50),
(15, 8, 20, 'Shizui Suite', 300000, 35),
(16, 9, 11, 'Luxury Suite', 400000, 20),
(17, 10, 21, 'Versatile Suite', 300000, 20),
(18, 11, 22, 'premium suite', 450000, 15),
(19, 12, 25, 'president suite', 600000, 20),
(20, 13, 26, 'Best Suite', 350000, 30);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_hotel` int(11) NOT NULL,
  `id_jenis_kamar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `bukti_transfer` varchar(100) DEFAULT NULL,
  `nama_pengirim` varchar(100) DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `tgl_checkin` date DEFAULT NULL,
  `tgl_checkout` date DEFAULT NULL,
  `tgl_pemesanan` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `kontak` varchar(50) DEFAULT NULL,
  `level` varchar(50) NOT NULL DEFAULT 'konsumen',
  `foto_profil` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `username`, `password`, `pekerjaan`, `kontak`, `level`, `foto_profil`) VALUES
(1, 'ivansuperadmin', 'ivansuperadmin@gmail.com', 'ivansuperadmin', 'b7727d252be76bc6d142e19315cfc8fd', 'software engineer', '0813000975870', 'Superadmin', 'ivansuperadmin.jpg'),
(5, 'mahotel', 'mahotel@gmail.com', 'mahotel123', '20824d1de22e11c289f1635528f6caf2', 'admin hotel', '081300097587', 'admin', 'mahotel_besar.png'),
(7, 'svish', 'svish@gmail.com', 'svish123', '384b4c5216ad419969c4564ab8d3dc25', 'admin hotel', '08835717357', 'admin', 'bromo_svish_besar.jpg'),
(8, 'villaroy', 'villaroy@gmail.com', 'villaroy123', '1038461cb8d6615f3fbf338b155a4ba9', 'admin hotel', '081300097587', 'admin', 'bromo_villaroy_besar.png'),
(11, 'bintangvilla', 'bintangvilla@gmail.com', 'bintangvilla123', '46961672d47118522fc94de8c216777d', 'admin hotel', '081300097587', 'admin', 'uluwatu_bintangvilla_besar.png'),
(12, 'horizone', 'horizone@gmail.com', 'horizone123', 'ba0f77b135c136146e38e4e811b0c935', 'admin hotel', '081300097587', 'admin', 'bromo_horizone_besar.png'),
(14, 'siska mahardika sulianto', 'siska@gmail.com', 'siska123', '40159ac8fd3c00cb696f847442264fc0', 'software engineer', '08000000056', 'konsumen', 'siska.png'),
(15, 'rozikon muafah', 'rozikon@gmail.com', 'rozikon123', 'fc49a795ef41fdb73cfbbe53d5d7fa38', 'software engineer', '08000000056', 'konsumen', 'rozikon.png'),
(16, 'desyntha hesti fitria', 'desyntha@gmail.com', 'desyntha123', 'eb1e815fd97d478a06eee94a13995027', 'software engineer', '0800000000062', 'konsumen', 'desyntha.png'),
(17, 'bima laroi bafih', 'bima@gmail.com', 'bima123', '6eedaeff2ab0a876cfe0bf1600db9207', 'software engineer', '08000000056', 'konsumen', 'bima.png'),
(18, 'sindy novianti risma widia', 'sindy@gmail.com', 'sindy123', '7fadfffd83a8e90eb54a189ea14ec4e6', 'software engineer', '08000000056', 'konsumen', 'sindy.png'),
(20, 'hestyvill', 'hestyvill@gmail.com', 'hestyvill123', '8c83efc88387a8f7b556f8f2e5657b79', 'admin hotel', '08835717357', 'admin', 'hestyvill_besar.png'),
(21, 'rojviil', 'rojviil@gmail.com', 'rojviil123', 'ad65fc6e80cb041b15789d281f41b5bf', 'admin hotel', '08835717357', 'admin', 'rojviil_besar.png'),
(22, 'sadantel', 'sadantel@gmail.com', 'sadantel123', '643e50a95c2147e9b35359a519f1424a', 'admin hotel', '08835717357', 'admin', 'sadantel_besar.png'),
(24, 'ivan wahyu anggara', 'ivan@gmail.com', 'ivan123', 'b7727d252be76bc6d142e19315cfc8fd', 'software engineer', '081330768504', 'konsumen', 'ivan.png'),
(25, 'pairs', 'pairs@gmail.com', 'pairs123', '41d0369b7a3cebb339558b8524ca3779', 'admin hotel', '08000000056', 'admin', 'pairs_besar.png'),
(26, 'vocatell', 'vocatell@gmail.com', 'vocatell123', 'a6fccf549c9ca41d267631cfdd7d02cb', 'admin hotel', '08000000056', 'admin', 'vocatell_besar.png');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `wisata` varchar(100) DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `rating_wisata` decimal(11,1) DEFAULT NULL,
  `deskripsi_wisata` text DEFAULT NULL,
  `gambar_wisata1` varchar(100) DEFAULT NULL,
  `gambar_wisata2` varchar(100) DEFAULT NULL,
  `gambar_wisata3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `wisata`, `provinsi`, `kota`, `rating_wisata`, `deskripsi_wisata`, `gambar_wisata1`, `gambar_wisata2`, `gambar_wisata3`) VALUES
(4, 'gunung bromo', 'jawa timur', 'malang', '5.0', 'Gunung Bromo merupakan salah satu dari begitu banyak Pesona Indonesia yang ada di Jawa Timur. Masuk dalam empat wilayah kabupaten, yaitu Probolinggo, Pasuruan, Lumajang, dan Malang, gunung berapi aktif ini menjadi destinasi wisata yang tak pernah sepi dari pengunjung.Gunung Bromo secara umum memiliki tinggi 2.392 meter di atas permukaan laut. Luasnya yang mencapai 5.300 hektar dilengkapi dengan lembah dan ngarai yang dikelilingi hamparan pasir. Pada musim penghujan, padang savana Bromo akan mengelurkan warna hijau yang menawan.Untuk bisa lebih dekat mengagumi keindahan Gunung Bromo, wisatawan dapat menggunakan fasilitas transportasi yang disediakan pengelola. “Ada jeep dan kuda yang disediakan bagi wisatawan yang ingin menjelajahi Gunung Bromo. Namun saat kunjungan membludak, armadanya masih kurang,” ujar Gatot, seorang pemandu wisata dari Himpunan Pramuwisata Indonesia (HPI) chapter Jawa Timur.Dengan menggunakan jeep tiap pengunjung dapat kesempatan untuk mendekati kawah Gunung Bromo. Namun sebelum menyaksikan keindahan kawah Gunung Bromo, pengunjung perlu berjalan mendaki mengarungi 250 anak tangga.', 'bromo_besar.png', 'bromo_kecil1.png', 'bromo2_kecil2.png'),
(5, 'pulau sempu', 'jawa timur', 'malang', '4.1', 'Pulau Sempu adalah sebuah pulau kecil yang terletak di sebelah selatan Pulau Jawa; secara administratif berada di Desa Tambakrejo, Kecamatan Sumbermanjing Wetan, Kabupaten Malang, Jawa Timur. Pulau yang ditumbuhi pepohonan tropis ini adalah cagar alam yang dikelola oleh Balai Besar Konservasi Sumber Daya Alam (BBKSDA) Jawa Timur di bawah KLHK RI. Secara resmi tempat ini ditetapkan sebagai cagar alam sejak 1928 pada masa pemerintahan Hindia Belanda, melalui SK Gubernur Jenderal (Besluit van den Gouverneur Generaal van Nederlandsch Indie) No. 69 dan No. 46 tanggal 15 Maret 1928 tentang Aanwijzing van het natuurmonument Poelau Sempoe seluas 877 ha.Secara geografis, Pulau Sempu terletak di antara 112°40′45″ - 112°42′45″ Bujur Timur dan 8°27′24″ - 8°24′54″ Lintang Selatan. Pulau itu berbatasan dengan Selat Sempu (Sendang Biru) di sisi utara dan dikepung Samudera Indonesia di sisi selatan, timur dan barat.\r\n', 'pulausempu_besar.png', 'pulausempu_kecil1.png', 'pulausempu_kecil2.png'),
(7, 'nusa penida', 'bali', 'denpasar', '4.8', 'Nusa Penida adalah sebuah pulau (=nusa) bagian dari negara Republik Indonesia yang terletak di sebelah tenggara Bali yang dipisahkan oleh Selat Badung. Di dekat pulau ini terdapat juga pulau-pulau kecil lainnya yaitu Nusa Ceningan dan Nusa Lembongan. Perairan pulau Nusa Penida terkenal dengan kawasan selamnya di antaranya terdapat di Crystal Bay, Manta Point, Batu Meling, Batu Lumbung, Batu Abah, Toyapakeh dan Malibu Point.Perbukitan dan kapur karang merupakan kondisi tanah di pulau ini, salah satunya gunung bukit tertinggi bernama Gunung Mundi yang terletak di Kecamatan Nusa Penida. Sumber air adalah mata air dan sungai hanya terdapat di wilayah daratan Kabupaten Klungkung yang mengalir sepanjang tahun.\r\nDesa-desa pesisir nusa penida di sepanjang pantai bagian utara berupa lahan datar dengan kemiringan 0 – 3 % dari ketinggian lahan 0-268 m dpl.Sedangkan di Kecamatan Nusa Penida sama sekali tidak ada sungai. Sumber air di Kecamatan Nusa Penida adalah mata air dan air hujan yang ditampung dalam cubang oleh penduduk setempat. Kabupaten Klungkung termasuk beriklim tropis. Bulan-bulan basah dan bulan-bulan kering antara Kecamatan Nusa Penida dan Kabupaten Klungkung daratan sangat berbeda.', 'nusapenida_besar.png', 'nusapenida_kecil1.png', 'nusapenida_kecil2.png'),
(10, 'jatim park 1', 'jawa timur', 'malang', '4.2', 'Jawa Timur Park 1 atau yang biasa disebut Jatim Park 1 merupakan salah satu tempat rekreasi dan taman belajar yang terdapat di Kota Batu, Jawa Timur Indonesia. Obyek wisata ini berada sekitar 20 km dari arah barat Kota Malang, dan kini menjadi salah satu icon wisata terkenal di daerah Kota Malang bahkan Se-Jawa Timur. Jawa Timur Park 1 memiliki lebih dari 50 wahana yang seru dan tentunya menarik, diantaranya kolam renang raksasa (dengan latar belakang patung Mpu Gandring, Ken Arok, dan Ken Dedes), spinning coaster, drop zone, jet cooster, dan masih banyak wahana lainnya yang patut Anda coba.Ada banyak wahana pendidikan Jawa Timur Park yang menjadi pusat perhatian diantaranya adalah Volcano, Galeri Nusantara Science Center Kimia & Biologi, Outdoor Science Center, Amazing Human Body, Anjungan Jatim & Irian Jaya, diorama binatang langka, sains dan miniatur candi-candi dll. Dengan memadukan secara serasi konsep pendidikan (Education) dan konsep pariwisata (Tourism) membuat objek wisata yang satu ini menjadi primadona wisata di Kota Batu. Telah terbukti  bahwa Jawa Timur Park 1 Malang merupakan objek wisata yang tidak hanya untuk objek liburan keluarga tetapi juga dapat belajar bersama di wahana pendidikan yang telah disediakan.', 'jatimpark1_besar.png', 'jatimpark1_kecil1.png', 'jatimpark1_kecil2.png'),
(12, 'uluwatu', 'bali', 'denpasar', '4.7', 'Pura Luhur Uluwatu atau Pura Uluwatu merupakan pura yang berada di wilayah Desa Adat Pecatu, Kecamatan Kuta Selatan, Kabupaten Badung.Pura yang terletak di ujung barat daya pulau Bali di atas anjungan batu karang yang terjal dan tinggi serta menjorok ke laut ini merupakan Pura Sad Kayangan yang dipercaya oleh orang Hindu sebagai penyangga dari 9 mata angin. Pura ini pada mulanya digunakan menjadi tempat memuja seorang pendeta suci dari abad ke-11 bernama Empu Kuturan. Ia menurunkan ajaran Desa Adat dengan segala aturannya.Pura ini juga dipakai untuk memuja pendeta suci berikutnya, yaitu Dang Hyang Nirartha, yang datang ke Bali pada akhir tahun 1550 dan mengakhiri perjalanan sucinya dengan apa yang dinamakan Moksa atau Ngeluhur di tempat ini. Kata inilah yang menjadi asal nama Pura Luhur Uluwatu.Pura Uluwatu terletak pada ketinggian 97 meter dari permukaan laut. Di depan pura terdapat hutan kecil yang disebut alas kekeran, berfungsi sebagai penyangga kesucian pura.Pura Uluwatu mempunyai beberapa pura pesanakan, yaitu pura yang erat kaitannya dengan pura induk. Pura pesanakan itu yaitu Pura Bajurit, Pura Pererepan, Pura Kulat, Pura Dalem Selonding dan Pura Dalem Pangleburan. Masing-masing pura ini mempunyai kaitan erat dengan Pura Uluwatu, terutama pada hari-hari piodalan-nya. Piodalan di Pura Uluwatu, Pura Bajurit, Pura Pererepan dan Pura Kulat jatuh pada Selasa Kliwon Wuku Medangsia setiap 210 hari. Manifestasi Tuhan yang dipuja di Pura Uluwatu adalah Dewa Rudra.Pura Uluwatu juga menjadi terkenal karena tepat di bawahnya adalah pantai Pecatu yang sering kali digunakan sebagai tempat untuk olahraga selancar, bahkan event internasional sering kali diadakan di sini. Ombak pantai ini terkenal amat cocok untuk dijadikan tempat selancar selain keindahan alam Bali yang memang amat cantik.', 'uluwatu_besar.png', 'uluwatu_kecil1.png', 'uluwatu_kecil2.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cerita`
--
ALTER TABLE `cerita`
  ADD PRIMARY KEY (`id_cerita`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id_hotel`),
  ADD KEY `id_wisata` (`id_wisata`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `jenis_kamar`
--
ALTER TABLE `jenis_kamar`
  ADD PRIMARY KEY (`id_jenis_kamar`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_hotel` (`id_hotel`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_hotel` (`id_hotel`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_jenis_kamar` (`id_jenis_kamar`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cerita`
--
ALTER TABLE `cerita`
  MODIFY `id_cerita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jenis_kamar`
--
ALTER TABLE `jenis_kamar`
  MODIFY `id_jenis_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cerita`
--
ALTER TABLE `cerita`
  ADD CONSTRAINT `cerita_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `hotel_ibfk_1` FOREIGN KEY (`id_wisata`) REFERENCES `wisata` (`id_wisata`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hotel_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jenis_kamar`
--
ALTER TABLE `jenis_kamar`
  ADD CONSTRAINT `jenis_kamar_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jenis_kamar_ibfk_3` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id_hotel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id_hotel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_jenis_kamar`) REFERENCES `jenis_kamar` (`id_jenis_kamar`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
