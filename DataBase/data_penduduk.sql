-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: Localhost:3306
-- Generation Time: Mar 19, 2023 at 04:04 PM
-- Server version: 10.9.2-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_penduduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` varchar(250) NOT NULL,
  `nama_kecamatan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `nama_kecamatan`) VALUES
('63.71.01', 'Banjarmasin Selatan'),
('63.71.02', 'Banjarmasin Timur'),
('63.71.03', 'Banjarmasin Barat'),
('63.71.04', 'Banjarmasin Utara'),
('63.71.05', 'Banjarmasin Tengah');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id_kelurahan` varchar(250) NOT NULL,
  `nama_kelurahan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id_kelurahan`, `nama_kelurahan`) VALUES
('63.71.01.01', 'Basirih Selatan'),
('63.71.01.02', 'Kelayan Darat'),
('63.71.01.03', 'Kelayan Dalam'),
('63.71.01.04', 'Kelayan Tengah'),
('63.71.01.05', 'Kelayan Timur'),
('63.71.01.06', 'Kelayan Selatan'),
('63.71.01.07', 'Mantuil'),
('63.71.01.08', 'Murung Raya'),
('63.71.01.09', 'Pekauman'),
('63.71.01.10', 'Pekauman'),
('63.71.01.11', 'Pemurus Baru'),
('63.71.01.12', 'Pemurus Dalam'),
('63.71.01.13', 'Tanjung Pagar'),
('63.71.02.01', 'Benua Anyar'),
('63.71.02.02', 'Karang Mekar'),
('63.71.02.03', 'Kebun Bunga'),
('63.71.02.04', 'Kuripan'),
('63.71.02.05', 'Pekapuran Raya'),
('63.71.02.06', 'Pemurus Luar'),
('63.71.02.07', 'Pangambangan'),
('63.71.02.08', 'Sungai Bilu'),
('63.71.02.09', 'Sungai Lulut'),
('63.71.03.01', 'Basirih'),
('63.71.03.02', 'Belitung Selatan'),
('63.71.03.03', 'Belitung Utara'),
('63.71.03.04', 'Kuin Cerucuk'),
('63.71.03.05', 'Kuin Selatan'),
('63.71.03.06', 'Telaga Biru'),
('63.71.03.07', 'Telawang'),
('63.71.03.08', 'Teluk Tiram'),
('63.71.04.01', 'Alalak Utara'),
('63.71.04.02', 'Alalak Tengah'),
('63.71.04.03', 'Alalak Selatan'),
('63.71.04.04', 'Antasan Kecil Timur'),
('63.71.04.05', 'Kuin Utara'),
('63.71.04.06', 'Pangeran'),
('63.71.04.07', 'Sungai Andai'),
('63.71.04.08', 'Sungai Jingah'),
('63.71.04.09', 'Sungai Miai'),
('63.71.04.10', 'Surgi Mufti'),
('63.71.05.01', 'Antasan Besar'),
('63.71.05.02', 'Gadang'),
('63.71.05.03', 'Kertak Baru Ilir'),
('63.71.05.04', 'Kertak Baru Ulu'),
('63.71.05.05', 'Kelayan Luar'),
('63.71.05.06', 'Mawar'),
('63.71.05.07', 'Melayu'),
('63.71.05.08', 'Pasar Lama'),
('63.71.05.09', 'Pekapuran Laut'),
('63.71.05.10', 'Seberang Mesjid'),
('63.71.05.11', 'Sungai Baru'),
('63.71.05.12', 'Teluk Dalam');

-- --------------------------------------------------------

--
-- Table structure for table `kota_kabupaten`
--

CREATE TABLE `kota_kabupaten` (
  `id_kota/kabupaten` varchar(250) NOT NULL,
  `nama_kota/kabupaten` varchar(250) NOT NULL,
  `Ibu Kota` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota_kabupaten`
--

INSERT INTO `kota_kabupaten` (`id_kota/kabupaten`, `nama_kota/kabupaten`, `Ibu Kota`) VALUES
('001', 'Kabupaten Balangan', 'Paringin'),
('002', 'Kabupaten Banjar', 'Martapura'),
('003', 'Kabupaten Barito Kuala', 'Marabahan'),
('004', 'Kabupaten Hulu Sungai Selatan', 'Kandangan'),
('005', 'Kabupaten Hulu Sungai Tengah', 'Barabai'),
('006', 'Kabupaten Hulu Sungai Utara', 'Amuntai'),
('007', 'Kabupaten Kotabaru', 'Kotabaru'),
('008', 'Kabupaten Tabalong', 'Tanjung'),
('009', 'Kabupaten Tanah Bumbu', 'Batulicin'),
('010', 'Kabupaten Tanah Laut', 'Pelaihari'),
('011', 'Kabupaten Tapin', 'Rantau'),
('012', 'Kota Banjarbaru', '-'),
('013', 'Kota Banjarmasin', '-');

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id_pekerjaan` varchar(250) NOT NULL,
  `nama_pekerjaan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id_pekerjaan`, `nama_pekerjaan`) VALUES
('01', 'Pelajar'),
('02', 'Guru'),
('03', 'Mahasiswa'),
('04', 'Pengusaha'),
('05', 'Pilot');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pendidikan` varchar(250) NOT NULL,
  `nama_pendidikan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id_pendidikan`, `nama_pendidikan`) VALUES
('01', 'Pendidikan umum'),
('02', 'Pendidikan Kejuruan'),
('03', 'Pendidikan Akademik'),
('04', 'Pendidikan Profesi'),
('05', 'Pendidikan Vokasi'),
('06', 'Pendidikan Keagamaan'),
('07', 'Pendidikan Khusus');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `NIK` varchar(250) NOT NULL,
  `id_pendidikan` varchar(250) NOT NULL,
  `id_pekerjaan` varchar(11) NOT NULL,
  `id_provinsi` varchar(250) NOT NULL,
  `id_kota/kabupaten` varchar(250) NOT NULL,
  `id_kecamatan` varchar(250) NOT NULL,
  `id_kelurahan` varchar(250) NOT NULL,
  `Nama` varchar(250) NOT NULL,
  `TTL` varchar(250) NOT NULL,
  `Jenis_kelamin` varchar(250) NOT NULL,
  `Alamat` varchar(250) NOT NULL,
  `RT/RW` varchar(250) NOT NULL,
  `Agama` varchar(250) NOT NULL,
  `Status_perkawinan` varchar(250) NOT NULL,
  `Kewarganegaraan` varchar(250) NOT NULL,
  `Gol_darah` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`NIK`, `id_pendidikan`, `id_pekerjaan`, `id_provinsi`, `id_kota/kabupaten`, `id_kecamatan`, `id_kelurahan`, `Nama`, `TTL`, `Jenis_kelamin`, `Alamat`, `RT/RW`, `Agama`, `Status_perkawinan`, `Kewarganegaraan`, `Gol_darah`) VALUES
('3576014403910003', ' 03', '03', '063', '013', '63.71.04', '63.71.03.03', 'Muhammad Rizky Al Farabi', 'Banjarmasin, 3 Juli 2003', 'Pria', 'JL Perdagangan Komplek HKSN Permai', '28/003', 'Islam', 'Belum kawin', 'Indonesia', 'A'),
('7876014403910007', '02', '04', '063', '006', '63.71.03', '63.71.01.03', 'Willy Nurgian', 'Banjarmasin, 14 Juni 2003', 'Pria', 'Jl Komplek Airmantan', '22/002', 'Islam', 'Belum Kawin', 'Indonesia', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` varchar(250) NOT NULL,
  `nama_provinsi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
('063', 'Kalimantan Selatan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id_kelurahan`);

--
-- Indexes for table `kota_kabupaten`
--
ALTER TABLE `kota_kabupaten`
  ADD PRIMARY KEY (`id_kota/kabupaten`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`NIK`),
  ADD KEY `fk_provinsi` (`id_provinsi`),
  ADD KEY `fk_pendidikan` (`id_pendidikan`),
  ADD KEY `fk_pekerjaan` (`id_pekerjaan`),
  ADD KEY `fk_kota/kabupaten` (`id_kota/kabupaten`),
  ADD KEY `fk_kelurahan` (`id_kelurahan`),
  ADD KEY `fk_kecamatan` (`id_kecamatan`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
