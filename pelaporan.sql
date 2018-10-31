-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2017 at 09:35 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectolx`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `NAMA` varchar(255) NOT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `USERNAME` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`NAMA`, `EMAIL`, `PASSWORD`, `USERNAME`) VALUES
('AZHAR OGI', 'azharogi@gmail.com', '123admin', 'azharogi'),
('Dio Wisnu H', 'wsinudio@yahoo.com', 'dio', 'DIO');

-- --------------------------------------------------------

--
-- Table structure for table `iklan`
--

CREATE TABLE `iklan` (
  `ID_IKLAN` int(11) NOT NULL,
  `USERNAME_MEMBER` varchar(255) DEFAULT NULL,
  `JUDUL` varchar(30) DEFAULT NULL,
  `FOTO_BARANG` varchar(255) DEFAULT NULL,
  `HARGA` varchar(255) DEFAULT NULL,
  `KATEGORI` varchar(255) DEFAULT NULL,
  `DESKRIPSI` text,
  `STATUS_BARANG` varchar(30) DEFAULT NULL,
  `TANGGAL` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iklan`
--

INSERT INTO `iklan` (`ID_IKLAN`, `USERNAME_MEMBER`, `JUDUL`, `FOTO_BARANG`, `HARGA`, `KATEGORI`, `DESKRIPSI`, `STATUS_BARANG`, `TANGGAL`) VALUES
(19, 'zharlet', ' LAPORAN GENDENG ', NULL, NULL, NULL, 'kkfjsndfkjsndfkjsndfknsdkfjnsdkjfnsdkjfnskdjfnkdsjnfksjdnfkjs', 'Moderasi', '2017-10-02'),
(20, 'zharletc', ' LAPORAN COBA COBA ', NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, eum natum expetenda ne. Legimus ceteros mei ea, cu vidit facilisis signiferumque sit. Mea option scripta suscipit ea. Usu malis zril intellegat eu.\r\n\r\nEam adhuc ridens corrumpit at, has cibo solum cu, id has debet consul. In duo utinam abhorreant, est te amet facete nominavi, aperiam tibique definitionem ius ad. Ut quo purto legere expetenda, et mei congue ignota minimum. Paulo pertinax senserit his ea, usu meis possim cu, nonumes ancillae et vel.\r\n\r\nEi duo impetus dolorum civibus, hinc lucilius salutandi sea ut. Vis ne vidit euismod interpretaris, vide conclusionemque in has. Ad ferri possim eirmod eam, petentium suavitate ocurreret pro ne. Ludus sententiae sea at, solum necessitatibus ad his. Ferri postea feugiat sit ne. Cu nihil tamquam nam, ea atomorum conclusionemque eum.\r\n\r\nDicam inciderint et vel, quo vero aperiam phaedrum eu. Graeco option accusamus ad vis, dictas antiopam petentium no per. Id ius modo sententiae interesset. Nec ut iusto mundi impetus, mea ea tempor torquatos neglegentur. An nec unum semper. Ex nec malorum omnesque voluptatum, semper aperiri in ius. Sint soluta eum cu.\r\n\r\nTe legere ceteros has, eam dicam disputationi et. Ei dicit sensibus eam, ea clita elaboraret mea, ei augue elaboraret reprimique mei. Et nam mucius cetero. Eos ceteros civibus percipit te. Odio quot ipsum ad vix, ea sea fastidii iracundia.', 'Validasi', '2017-12-20'),
(23, 'zharletc', ' LAPORAN ALA ALA ', NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, eum natum expetenda ne. Legimus ceteros mei ea, cu vidit facilisis signiferumque sit. Mea option scripta suscipit ea. Usu malis zril intellegat eu.\r\n\r\nEam adhuc ridens corrumpit at, has cibo solum cu, id has debet consul. In duo utinam abhorreant, est te amet facete nominavi, aperiam tibique definitionem ius ad. Ut quo purto legere expetenda, et mei congue ignota minimum. Paulo pertinax senserit his ea, usu meis possim cu, nonumes ancillae et vel.\r\n\r\nEi duo impetus dolorum civibus, hinc lucilius salutandi sea ut. Vis ne vidit euismod interpretaris, vide conclusionemque in has. Ad ferri possim eirmod eam, petentium suavitate ocurreret pro ne. Ludus sententiae sea at, solum necessitatibus ad his. Ferri postea feugiat sit ne. Cu nihil tamquam nam, ea atomorum conclusionemque eum.\r\n\r\nDicam inciderint et vel, quo vero aperiam phaedrum eu. Graeco option accusamus ad vis, dictas antiopam petentium no per. Id ius modo sententiae interesset. Nec ut iusto mundi impetus, mea ea tempor torquatos neglegentur. An nec unum semper. Ex nec malorum omnesque voluptatum, semper aperiri in ius. Sint soluta eum cu.\r\n\r\nTe legere ceteros has, eam dicam disputationi et. Ei dicit sensibus eam, ea clita elaboraret mea, ei augue elaboraret reprimique mei. Et nam mucius cetero. Eos ceteros civibus percipit te. Odio quot ipsum ad vix, ea sea fastidii iracundia.', 'Moderasi', '2017-12-05'),
(24, 'zharlet', ' LAPORAN SILIT ', NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, eum natum expetenda ne. Legimus ceteros mei ea, cu vidit facilisis signiferumque sit. Mea option scripta suscipit ea. Usu malis zril intellegat eu.\r\n\r\nEam adhuc ridens corrumpit at, has cibo solum cu, id has debet consul. In duo utinam abhorreant, est te amet facete nominavi, aperiam tibique definitionem ius ad. Ut quo purto legere expetenda, et mei congue ignota minimum. Paulo pertinax senserit his ea, usu meis possim cu, nonumes ancillae et vel.\r\n\r\nEi duo impetus dolorum civibus, hinc lucilius salutandi sea ut. Vis ne vidit euismod interpretaris, vide conclusionemque in has. Ad ferri possim eirmod eam, petentium suavitate ocurreret pro ne. Ludus sententiae sea at, solum necessitatibus ad his. Ferri postea feugiat sit ne. Cu nihil tamquam nam, ea atomorum conclusionemque eum.\r\n\r\nDicam inciderint et vel, quo vero aperiam phaedrum eu. Graeco option accusamus ad vis, dictas antiopam petentium no per. Id ius modo sententiae interesset. Nec ut iusto mundi impetus, mea ea tempor torquatos neglegentur. An nec unum semper. Ex nec malorum omnesque voluptatum, semper aperiri in ius. Sint soluta eum cu.\r\n\r\nTe legere ceteros has, eam dicam disputationi et. Ei dicit sensibus eam, ea clita elaboraret mea, ei augue elaboraret reprimique mei. Et nam mucius cetero. Eos ceteros civibus percipit te. Odio quot ipsum ad vix, ea sea fastidii iracundia.', 'Validasi', '2017-12-05'),
(25, 'zharlet', ' ASU ', NULL, NULL, NULL, 'HJHHHHHH', 'Validasi', '2017-12-05'),
(26, 'zharlet', '   Gendeng 123   ', NULL, NULL, NULL, 'ksnfkjnsdkjfnsdf\r\nsdf\r\nsd\r\n s\r\ng \r\ns', 'Validasi', '2017-12-05'),
(27, 'zharlet', '  KAMPRET12  ', NULL, NULL, NULL, 'SDFJDSNFKJSNDFKJNSFDKJNDSKJFNSKDFNSD', 'Tolak', '2017-12-05'),
(28, 'zharlet', 'HELLO GENDENG', 'Tidak ada foto', NULL, NULL, 'KSDNFKJSDNFK\r\nSF\r\n\r\nSDFS\r\nFS\r\nDFSFDSFDSFSDFSDFSDFSDFSDFSDFSDFDSFSDFSDFSDFD', 'Moderasi', '2017-12-05'),
(29, 'zharlet', ' EA LAPORAN ', NULL, NULL, NULL, 'SHBSDJFHBSJDHFBJSDFBJHDFSBJFH', 'Validasi', '2017-12-05'),
(30, 'zharlet', ' ASW HAHA ', 'http://localhost/pelaporan/assets/image/IMG_0197.JPG', NULL, NULL, 'ampas', 'Validasi', '2017-12-05');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `ID_KOMENTAR` int(11) NOT NULL,
  `ID_IKLAN` int(11) NOT NULL,
  `USERNAME_MEMBER` varchar(255) DEFAULT NULL,
  `KOMENTAR` text NOT NULL,
  `STATUS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`ID_KOMENTAR`, `ID_IKLAN`, `USERNAME_MEMBER`, `KOMENTAR`, `STATUS`) VALUES
(1, 3, 'zharlet', 'keren gan :)', 0),
(10, 3, 'zharlet', 'anjay bos :D', 0),
(11, 4, 'zharlet', 'keren bos', 0),
(12, 7, 'zharlet', 'cok', 0),
(13, 7, 'zharlet', 'masih ?', 0),
(14, 12, 'zharletc', 'coba deh', 0),
(17, 15, 'zharlet', 'oke deh bosku yang ganteng hahakek sekuteng hay\r\n', 0),
(18, 18, 'zharletc', 'Keren Bro', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `latest_iklan`
-- (See below for the actual view)
--
CREATE TABLE `latest_iklan` (
`ID_IKLAN` int(11)
,`USERNAME_MEMBER` varchar(255)
,`JUDUL` varchar(30)
,`FOTO_BARANG` varchar(255)
,`HARGA` varchar(255)
,`KATEGORI` varchar(255)
,`DESKRIPSI` text
,`STATUS_BARANG` varchar(30)
,`TANGGAL` date
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `latest_pesan`
-- (See below for the actual view)
--
CREATE TABLE `latest_pesan` (
`ID_PESAN` int(11)
,`TO_USERNAME` varchar(255)
,`FROM_USERNAME` varchar(255)
,`PESAN` text
,`STATUS` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `ID` int(11) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `USERNAME` varchar(255) NOT NULL,
  `TANGGAL_LAHIR` date NOT NULL,
  `FOTO_PROFIL` varchar(255) NOT NULL,
  `NO_HAPE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`ID`, `NAMA`, `EMAIL`, `PASSWORD`, `USERNAME`, `TANGGAL_LAHIR`, `FOTO_PROFIL`, `NO_HAPE`) VALUES
(12, 'Azhar Ogi', 'azharogi@gmail.com', '47c23b7da9e8ba297498bee9350fa173', 'zharlet', '1992-11-11', 'http://localhost/pelaporan/assets/image/20160217_060500_copy.jpg', '081318063888'),
(17, 'Zharlet Cliff', 'ogi@gmail.com', '47c23b7da9e8ba297498bee9350fa173', 'zharletc', '1996-10-20', '', '08727272772');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `ID_PESAN` int(11) NOT NULL,
  `TO_USERNAME` varchar(255) NOT NULL,
  `FROM_USERNAME` varchar(255) NOT NULL,
  `PESAN` text NOT NULL,
  `STATUS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`ID_PESAN`, `TO_USERNAME`, `FROM_USERNAME`, `PESAN`, `STATUS`) VALUES
(2, 'zharlet', 'e', 'Masih masbro', 0),
(5, 'zharlet', 'zharlet', 'BARANG MASIH ADA BRO ?', 0),
(6, 'zharletc', 'zharlet', 'hai', 0),
(7, 'zharlet', 'e', 'GOBLOK SIA AING', 0),
(8, 'zharletc', 'zharlet', 'lagi ngapain bos ?', 0),
(9, 'zharlet', 'zharlet', 'masih cok ?', 0),
(10, 'zharlet', 'zharlet', 'masih tah', 0),
(11, 'zharletc', 'zharlet', 'masih cok ?', 0),
(12, 'zharletc', 'zharlet', 'Halo bos', 0),
(13, 'zharletc', 'zharlet', 'Hai', 0),
(14, 'zharletc', 'zharlet', 'Hai', 0),
(15, 'zharlet', 'zharletc', 'COK Masih ada ?', 0),
(16, 'zharletc', 'zharlet', 'masih bro ?', 0);

-- --------------------------------------------------------

--
-- Structure for view `latest_iklan`
--
DROP TABLE IF EXISTS `latest_iklan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `latest_iklan`  AS  select `iklan`.`ID_IKLAN` AS `ID_IKLAN`,`iklan`.`USERNAME_MEMBER` AS `USERNAME_MEMBER`,`iklan`.`JUDUL` AS `JUDUL`,`iklan`.`FOTO_BARANG` AS `FOTO_BARANG`,`iklan`.`HARGA` AS `HARGA`,`iklan`.`KATEGORI` AS `KATEGORI`,`iklan`.`DESKRIPSI` AS `DESKRIPSI`,`iklan`.`STATUS_BARANG` AS `STATUS_BARANG`,`iklan`.`TANGGAL` AS `TANGGAL` from `iklan` order by `iklan`.`ID_IKLAN` desc ;

-- --------------------------------------------------------

--
-- Structure for view `latest_pesan`
--
DROP TABLE IF EXISTS `latest_pesan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `latest_pesan`  AS  select `pesan`.`ID_PESAN` AS `ID_PESAN`,`pesan`.`TO_USERNAME` AS `TO_USERNAME`,`pesan`.`FROM_USERNAME` AS `FROM_USERNAME`,`pesan`.`PESAN` AS `PESAN`,`pesan`.`STATUS` AS `STATUS` from `pesan` order by `pesan`.`ID_PESAN` desc ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`USERNAME`),
  ADD UNIQUE KEY `USERNAME` (`USERNAME`);

--
-- Indexes for table `iklan`
--
ALTER TABLE `iklan`
  ADD PRIMARY KEY (`ID_IKLAN`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`ID_KOMENTAR`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID`,`USERNAME`),
  ADD UNIQUE KEY `USERNAME` (`USERNAME`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`ID_PESAN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `iklan`
--
ALTER TABLE `iklan`
  MODIFY `ID_IKLAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `ID_KOMENTAR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `ID_PESAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
