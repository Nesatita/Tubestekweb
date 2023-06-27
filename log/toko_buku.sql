-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 05:35 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `toko_buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `Kode_Buku` char(5) NOT NULL,
  `Kode_Kategori` char(5) NOT NULL,
  `Judul_Buku` varchar(50) NOT NULL,
  `Pengarang` varchar(50) NOT NULL,
  `Penerbit` varchar(50) NOT NULL,
  `Harga` int(11) NOT NULL,
  `Gambar` varchar(100) NOT NULL,
  `Stok` varchar(20) NOT NULL,
  `Sinopsis` text NOT NULL,
  PRIMARY KEY (`Kode_Buku`),
  KEY `Kode_Kategori` (`Kode_Kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`Kode_Buku`, `Kode_Kategori`, `Judul_Buku`, `Pengarang`, `Penerbit`, `Harga`, `Gambar`, `Stok`, `Sinopsis`) VALUES
('KB001', 'KG001', 'Pulang', 'Tere Liye', 'PT.Gramedia Indonesia', 82000, 'novel1.jpg', '14', 'Seorang anak remaja yang sangat pendiam. Dia tinggal bersama kedua orang tuanya di wilayah Bukit Barisan. Cerita ini menggunakan sudut pandang orang pertama pelaku utama. Semua tokoh menggunakan dialek daerah yang membuat setting tempat dan suasana semakin kuat. Nama para tokoh juga sangat khas, unik, dan mudah diingat. Semua berawal ketika Bujang si tokoh utama berada di sebuah hutan bersama para pemburu bernama Teuke Muda.'),
('KB002', 'KG001', 'Jingga dan Senja', 'Esti Kinasih', 'PT.Gramedia Indonesia', 39500, 'novel21.jpg', '15', 'Novel ini menceritakan tentang kehidupan percintaan dan kenakalan remaja SMA. Cerita ini bermula dari pertemuan Tari dan Ari yang tidak sengaja bertemu ketika upacara di sekolah. Ari pun tertarik dan berencana untuk mendekati Tari si anak baru di SMA Airlangga. Ari melakukan segala usaha untuk bisa dekat dengan Tari. Alasan Ari mendekati Tari adalah karena namanya yang mirip .'),
('KB003', 'KG002', 'One Piece', 'Eiichiro Oda', 'PT.Gramedia Indonesia', 35000, 'komik11.jpg', '14', 'Komik ini menceritakan seorang bajak laut amatiran bernama Luffy yang ingin mencari sebuah harta karun legendaris dengan mencari anggota yang lain agar ikut bergabung. Tetapi mereka semua harus menghadapi banyak rintangan selama di lautan karena ada banyak lautan ganas di berbagai daerah, serta banyak juga bajak laut yang menghadang mereka karena pemikiran berbeda. '),
('KB004', 'KG002', 'My Hero Academia', 'Kohei Horikoshi', 'PT.Gramedia Indonesia', 40000, 'komik2.jpg', '0', 'Komik ini menceritakan tentang Izuku Midoriya, pemuda yang hidup di dunia di mana hampir semua orang memiliki kekuatan super atau Quirk dan sebagian besarnya menjadi pahlawan super dengan kekuatan mereka. Di sisi lain, Izuku Midoriya justru terlahir tanpa Quirk, sehingga impiannya menjadi pahlawan nomor satu seperti All Might sangat sulit terwujud.'),
('KB005', 'KG003', 'Ensiklopedia Geografi', 'Julian Holland ', 'PT.Gramedia Indonesia', 90000, 'ens11.jpg', '25', 'Buku ensiklopedia geografi membahas pengetahuan tentang belahan bumi dengan rinci.'),
('KB006', 'KG003', 'Ensiklopedia Fauna', 'Shafa Faizah', 'PT.Gramedia Indonesia', 85000, 'ens2.jpg', '17', 'Buku ini hanya memuat sebagian kecil fauna yang tumbuh di dunia ini, sebanyak 183 hewan, antara lain : kasuari, maleo, kanguru, panda, piranha, tapir, siamang, kuda laut, berang-berang, buaya, dll. Dengan dilengkapi gambar dan ulasan singkat ciri-ciri berbagai keunikan hewan yang mungkin belum pernah kita tahu, bahkan yang belum pernah kita bayangkan.'),
('KB007', 'KG004', 'Menggambar Rekayasa II', 'Rudy Yoga Lesmana', 'PT.Gramedia Indonesia', 55000, 'bp11.jpg', '35', '-'),
('KB008', 'KG004', 'Digital Marketing', 'Drs. Usman Chamdani ', 'PT.Gramedia Indonesia', 58000, 'bp2.jpg', '23', '-'),
('KB009', 'KG005', 'Agama dan Sosial', 'Wahyuni', 'PT.Gramedia Indonesia', 77000, 'ba11.jpg', '14', 'Uraian-uraian materi dari buku ini, sebagian adalah hasil observasi dan elaborasi pemikiran dari penulis yang dikembangkan dengan meminjam hasil-hasil pemikiran para ahli yang memiliki perhatian terhadap persoalan agama dan kebudayaan'),
('KB010', 'KG005', 'Mengenal Rasulullah', 'Imam At-Tarmidzi', 'PT.Gramedia Indonesia', 110000, 'ba2.jpg', '15', 'Buku yang membahas tentang keperibadian dan akhlak Rasulullah. Di dalamnya tersaji sosok Rasulullah secara utuh. Mulai dari bentuk karakterisitik fisik, tubuh, hidung, rambut, pakaian, sandal, dan pedang. Serta cara beliau berjalan, makan, minum dan lain sebagainya. Buku ini didukung oleh hadits-hadits yang shahih, diriwayatkan oleh perawi yang masyhur, seperti Anas ibn Malik dan lain-lain.'),
('KB011', 'KG006', 'Finding Dory', 'Disney ', 'PT.Gramedia Indonesia', 49000, 'bk11.jpg', '30', '-'),
('KB012', 'KG006', 'Cerita Anak Hebat', 'Tim Penulis Jatim', 'PT.Gramedia Indonesia', 30000, 'bk22.jpg', '64', '-'),
('KB013', 'KG001', 'Hujan', 'Tere Liye', 'PT.Gramedia Indonesia', 70000, 'novel31.jpg', '40', 'Seorang gadis bernama Lail yang hidup di masa depan. Ia hidup di masa dengan teknologi tinggi sepanjang peradaban dunia. Pada novel ini menggunakan sudut pandang orang ketiga pelaku utama. Namun, alur cerita yang dimiliki menggunakan alur maju mundur, karena menceritakan masa kecil dari tokoh Lail.'),
('KB014', 'KG001', 'Rahasia Hujan', 'Adham T.Fusama', 'PT.Gramedia Indonesia', 68000, 'novel9.jpg', '30', 'Sekolah Pandu kedatangan murid baru dari Jepang, seorang anak pendiam yang misterius. Sebagai teman sebangku, Pandu merasa harus bersikap ramah, meski Anggi – si murid baru- terus bersikap dingin.  Pada akhirnya, kebaikan hati Pandu membuat Anggi jatuh cinta. Tapi Pandu sudah punya pacar – seorang gadis cantik bernama Nadine. Ketika rasa sayang Anggi berubah menjadi obsesi berbahaya, Pandu dan teman-temannya terseret ke dalam sebuah permainan mengerikan.'),
('KB015', 'KG002', 'Attack On Titan', 'Hajime Isayama', 'PT.Gramedia Indonesia', 40000, 'komik3.jpg', '33', 'Anime Attack on Titan bercerita tentang umat manusia yang dibantai sejak berabad-abad yang lalu hingga hampir punah oleh makhluk mengerikan menyerupai manusia yang disebut Titan. Hal ini memaksa manusia untuk bersembunyi dan diam dalam ketakutan di balik tembok konsentris yang sangat tinggi dan besar.'),
('KB016', 'KG002', 'Kungfu Boy Legends', 'Takeshi Maekawa', 'PT.Gramedia Indonesia', 33000, 'komik4.jpg', '15', 'Diceritakan bahwa seorang ahli kungfu yang akan menyempurnakan ilmu kungfu Kuil Dairin akan muncul setelah 100 tahun berdirinya Kuil Dairin. Dia mempunyai ciri - ciri berupa tahi lalat di kening. Seorang Pak Tua melakukan pengembaraan untuk mencari sang calon ahli kungfu tersebut dan akan mengajaknya untuk mendalami Kungfu Kuil Dairin.'),
('KB017', 'KG003', 'Ensiklopedia Pendidikan', 'Zainal Aqib & Ahmad Amrullah', 'PT.Gramedia Indonesia', 75000, 'ens3.jpg', '16', 'Buku ini berisi sumber ilmu dari beragam disiplin ilmu dan 196 istilah pendidikan juga 75 istilah psikologi.'),
('KB018', 'KG003', 'Ensiklopedia Indonesia', 'Dr.Furqanul A,Dr.Maman', 'PT.Gramedia Indonesia', 67000, 'ens4.jpg', '17', 'Ensiklopedia ini memuat lebih dari 1.140 istilah atau konsep yang digunakan dalam dunia pendidikan. Istilah atau konsep tersebut mencakup berbagai bidang ilmu seperti teknologi, psikologi, dan sosiologi.'),
('KB019', 'KG004', 'Buku Ekonomi', 'Endang Mulyani & Asep Nurcahyanto', 'PT.Gramedia Indonesia', 50000, 'bp3.jpg', '20', '-'),
('KB020', 'KG004', 'Bahasa Indonesia', 'Samidi & Tri Puspitasari', 'PT.Gramedia Indonesia', 50000, 'bp4.jpg', '15', '-'),
('KB021', 'KG005', 'Agama untuk Peradaban ', 'Komaruddin Hidayat', 'PT.Gramedia Indonesia', 66000, 'ba3.jpg', '14', 'Melalui buku ini, Komaruddin Hidayat meletakkan fungsi dan peran agama di tempat yang selayaknya, sekaligus meresapkan nilai-nilai dan etos agama dalam wacana sosial, politik, dan pendidikan mutakhir. Agama dibumikan menjadi daya penggerak, pendorong dan elan vital kemajuan. Harapannya, agama dapat tetap menjadi suluh bagi peradaban.'),
('KB022', 'KG005', 'Fiqih Al-Hijrah ', 'DR.Zulkifli Mohamad Al-Bakri', 'PT.Gramedia Indonesia', 90000, 'ba4.jpg', '2', 'Buku ini menceritakan mukaddimah hijrah Rasulullah SAW sehinggalah baginda saw sampai ke kota suci madinah al-munawwarah. Sekalipun ia bersifat kecil, tetapi ianya penuh dengan iktibar dan pengajaran.'),
('KB023', 'KG006', 'Aku Anak Istimewa', 'Shahaja Putri', 'PT.Gramedia Indonesia', 43000, 'bk3.jpeg', '23', '-'),
('KB024', 'KG006', 'Kenapa Ya ?', 'Sophie de Mullenheim', 'PT.Gramedia Indonesia', 40000, 'bk4.jpg', '15', '-');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(15, 'Wijaya', 'Jl Gegerkalong ilir no 155', '2022-01-10 23:34:12', '2022-01-11 23:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE IF NOT EXISTS `pesanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_invoice` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `id_invoice`, `id_buku`, `nama_buku`, `jumlah`, `harga`, `pilihan`) VALUES
(21, 15, 0, 'Pulang', 1, 82000, '');

--
-- Triggers `pesanan`
--
DROP TRIGGER IF EXISTS `pesanan_penjualan`;
DELIMITER //
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `pesanan`
 FOR EACH ROW BEGIN
	UPDATE buku SET Stok = Stok-NEW.jumlah
    WHERE Kode_Buku = NEW.id_buku;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_user`, `username`, `password`, `role_id`) VALUES
(1, 'Admin', 'admin', '$2y$10$4/PIhU0auuV3bBSnU7cnSePdG1qLLf6CeezBktWrOkNrg0EvxOy/i', 1),
(2, 'Wijaya', 'Wijaya', '$2y$10$XidhPsYr5Q2VvmAvF3RvKOPQTp7uTzn5pkV9nDD/QiqOSmFRbrwMm', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
