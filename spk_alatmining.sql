-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Okt 2019 pada 06.24
-- Versi server: 5.7.24
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_alatmining`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_alat`
--

CREATE TABLE `data_alat` (
  `id_alat` int(11) NOT NULL,
  `alatmining` varchar(50) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `kecepatan` varchar(20) NOT NULL,
  `listrik` varchar(20) NOT NULL,
  `keuntungan` varchar(20) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `data_alat`
--

INSERT INTO `data_alat` (`id_alat`, `alatmining`, `harga`, `kecepatan`, `listrik`, `keuntungan`, `link`) VALUES
(1, 'ASICminer 8 Nano Pro', '11600', '76000000000', '4000', '12', 'https://www.asicminervalue.com/miners/asicminer/8-nano-pro'),
(2, 'MicroBT Whatsminer M10S', '2558', '55000000000', '3500', '7', 'https://www.asicminervalue.com/miners/microbt/whatsminer-m10s'),
(3, 'FusionSilicon X7+ Miner', '2390', '320000000', '2000', '20', 'https://www.asicminervalue.com/miners/fusionsilicon/x7-miner-1'),
(4, 'Obelisk SC1 Immersion', '6323', '2200000000', '1600', '29', 'https://www.asicminervalue.com/miners/obelisk/sc1-immersion'),
(5, 'Spondoolies SPx36', '4580', '540000000', '4400', '30', 'https://www.asicminervalue.com/miners/spondoolies/spx36'),
(6, 'Innosilicon A4+ LTCMaster', '1180', '620000', '720', '-5', 'https://www.asicminervalue.com/miners/innosilicon/a4-ltcmaster'),
(7, ' Baikal BK-N240', '1553', '240', '650', '-8', 'https://www.asicminervalue.com/miners/baikal/bk-n240'),
(8, 'MicroBT Whatsminer M20S', '2153', '70000000000', '3360', '11', 'https://www.asicminervalue.com/miners/microbt/whatsminer-m20s'),
(9, 'Bitmain Antminer S17 (56Th)', '2411', '56000000000', '2520', '9', 'https://www.asicminervalue.com/miners/bitmain/antminer-s17-56th'),
(10, 'MicroBT Whatsminer M21S', '1670', '56000000000', '3360', '7', 'https://www.asicminervalue.com/miners/microbt/whatsminer-m21s'),
(11, 'MicroBT Whatsminer M10S', '2558', '55000000000', '3500', '6', 'https://www.asicminervalue.com/miners/microbt/whatsminer-m10s'),
(12, 'Bitmain Antminer S17 Pro (53Th)', '2290', '53000000000', '2094', '10', 'https://www.asicminervalue.com/miners/bitmain/antminer-s17-pro-53th'),
(13, 'Bitmain Antminer S17 (53Th)', '2170', '53000000000', '2385', '9', 'https://www.asicminervalue.com/miners/bitmain/antminer-s17-53th'),
(14, 'Innosilicon T3+ 52T', '1084', '52000000000', '2200', '-1', 'https://www.asicminervalue.com/miners/innosilicon/t3-52t'),
(15, 'Bitmain Antminer S17 Pro (50Th)', '2149', '50000000000', '1975', '9', 'https://www.asicminervalue.com/miners/bitmain/antminer-s17-pro-50th'),
(16, 'Innosilicon T3 50T', '2598', '50000000000', '3100', '6', 'https://www.asicminervalue.com/miners/innosilicon/t3-50t'),
(17, 'Bitfily Snow Panther A1', '2200', '49000000000', '5400', '-2', 'https://www.asicminervalue.com/miners/bitfily/snow-panther-a1'),
(18, 'MicroBT Whatsminer D1', '1500', '48000000000', '2200', '-1', 'https://www.asicminervalue.com/miners/microbt/whatsminer-d1'),
(19, 'StrongU STU-U8', '1615', '46000000000', '2100', '8', 'https://www.asicminervalue.com/miners/strongu/stu-u8'),
(20, 'Ebang Ebit E11++', '2400', '44000000000', '1980', '7', 'https://www.asicminervalue.com/miners/ebang/ebit-e11-2'),
(21, 'ASICminer 8 Nano 44Th', '6454', '44000000000', '2100', '7', 'https://www.asicminervalue.com/miners/asicminer/8-nano-44th'),
(22, 'Innosilicon T3 43T', '2190', '43000000000', '2100', '7', 'https://www.asicminervalue.com/miners/innosilicon/t3-43t'),
(23, 'Bitmain Antminer T17 (40Th)', '1506', '40000000000', '2200', '5', 'https://www.asicminervalue.com/miners/bitmain/antminer-t17-40th'),
(24, 'Innosilicon T3 39T', '2049', '39000000000', '2150', '5', 'https://www.asicminervalue.com/miners/innosilicon/t3-39t'),
(25, 'Bitmain Antminer DR5 (34Th)', '1499', '34000000000', '1800', '-2', 'https://www.asicminervalue.com/miners/bitmain/antminer-dr5-34th'),
(26, 'MicroBT Whatsminer M10', '1487', '33000000000', '2145', '2', ''),
(27, 'GMO miner B3', '2199', '33000000000', '3417', '-2', ''),
(28, 'Innosilicon T2 Turbo+ 32T', '2199', '32000000000', '2200', '2', ''),
(29, 'MicroBT Whatsminer M21', '850', '31000000000', '1860', '2', ''),
(30, 'Bitmain Antminer S15 (28Th)', '993', '28000000000', '1596', '2', ''),
(31, 'Innosilicon T2 Turbo 25T', '1069', '25000000000', '2050', '1', ''),
(32, 'Bitfily Snow Panther B1+', '899', '24500000000', '2100', '-1', ''),
(33, 'GMO miner B2', '3271', '24000000000', '1950', '1', ''),
(34, 'Innosilicon T2 Turbo', '1570', '24000000000', '1980', '1', ''),
(35, 'Bitmain Antminer T15 (23Th)', '695', '23000000000', '1541', '2', ''),
(36, 'Bitmain Antminer S11 (20.5Th)', '1500', '20500000000', '1530', '1', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fuzzytiapkriteria`
--

CREATE TABLE `fuzzytiapkriteria` (
  `id_fuzzykriteria` int(11) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `nilai` varchar(5) NOT NULL,
  `bilanganfuzzy` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fuzzytiapkriteria`
--

INSERT INTO `fuzzytiapkriteria` (`id_fuzzykriteria`, `kode`, `nilai`, `bilanganfuzzy`) VALUES
(1, 'SB1', '0', 'Sangat Buruk'),
(2, 'B1', '10', 'Buruk'),
(3, 'C', '20', 'Cukup'),
(4, 'B2', '30', 'Baik'),
(5, 'CB', '40', 'Cukup Baik'),
(6, 'SB2', '50', 'Sangat Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteriaharga`
--

CREATE TABLE `kriteriaharga` (
  `id_harga` int(11) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `bilanganfuzzy` varchar(15) NOT NULL,
  `nilai` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `kriteriaharga`
--

INSERT INTO `kriteriaharga` (`id_harga`, `harga`, `bilanganfuzzy`, `nilai`) VALUES
(1, '1.050', 'Sangat Baik', '50'),
(2, '2.080', 'Cukup Baik', '40'),
(3, '3.110', 'Baik', '30'),
(4, '7.110', 'Cukup', '20'),
(5, '7.111', 'Buruk', '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteriakecepatan`
--

CREATE TABLE `kriteriakecepatan` (
  `id_kecepatan` int(11) NOT NULL,
  `kecepatan` varchar(20) NOT NULL,
  `bilanganfuzzy` varchar(15) NOT NULL,
  `nilai` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `kriteriakecepatan`
--

INSERT INTO `kriteriakecepatan` (`id_kecepatan`, `kecepatan`, `bilanganfuzzy`, `nilai`) VALUES
(1, '80000000000', 'Sangat Baik', '50'),
(2, '815000000', 'Cukup Baik', '40'),
(3, '900000', 'Baik', '30'),
(4, '240', 'Cukup', '20'),
(5, '239', 'Buruk', '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteriakeuntungan`
--

CREATE TABLE `kriteriakeuntungan` (
  `id_keuntungan` int(11) NOT NULL,
  `keuntungan` varchar(20) NOT NULL,
  `bilanganfuzzy` varchar(15) NOT NULL,
  `nilai` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `kriteriakeuntungan`
--

INSERT INTO `kriteriakeuntungan` (`id_keuntungan`, `keuntungan`, `bilanganfuzzy`, `nilai`) VALUES
(1, '31', 'Sangat Baik', '50'),
(2, '30', 'Cukup Baik', '40'),
(3, '20', 'Baik', '30'),
(4, '10', 'Cukup', '20'),
(5, '1', 'Buruk', '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriterialistrik`
--

CREATE TABLE `kriterialistrik` (
  `id_listrik` int(11) NOT NULL,
  `listrik` varchar(20) NOT NULL,
  `bilanganfuzzy` varchar(15) NOT NULL,
  `nilai` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `kriterialistrik`
--

INSERT INTO `kriterialistrik` (`id_listrik`, `listrik`, `bilanganfuzzy`, `nilai`) VALUES
(1, '1000', 'Sangat Baik', '50'),
(2, '1500', 'Cukup Baik', '40'),
(3, '2100', 'Baik', '30'),
(4, '6400', 'Cukup', '20'),
(5, '6401', 'Buruk', '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_admin`
--

CREATE TABLE `log_admin` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log_admin`
--

INSERT INTO `log_admin` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `moo_alternatif`
--

CREATE TABLE `moo_alternatif` (
  `id_alternatif` tinyint(3) NOT NULL,
  `id_alat` int(11) NOT NULL,
  `alternatif` varchar(50) NOT NULL,
  `kecepatan` varchar(20) NOT NULL,
  `keuntungan` varchar(20) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `listrik` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Struktur dari tabel `moo_kriteria`
--

CREATE TABLE `moo_kriteria` (
  `id_kriteria` tinyint(3) UNSIGNED NOT NULL,
  `kode` varchar(5) NOT NULL,
  `kriteria` varchar(100) NOT NULL,
  `type` set('Benefit','Cost') NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `moo_kriteria`
--

INSERT INTO `moo_kriteria` (`id_kriteria`, `kode`, `kriteria`, `type`, `bobot`) VALUES
(1, 'K1', 'Kecepatan', 'Benefit', 2),
(2, 'K2', 'Keuntungan', 'Benefit', 2),
(3, 'K3', 'Harga', 'Cost', 1),
(4, 'K4', 'Daya Listrik', 'Cost', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `moo_nilai`
--

CREATE TABLE `moo_nilai` (
  `id_nilai` int(11) UNSIGNED NOT NULL,
  `id_alternatif` tinyint(3) UNSIGNED DEFAULT NULL,
  `id_kriteria` tinyint(3) UNSIGNED DEFAULT NULL,
  `nilai` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_alat`
--
ALTER TABLE `data_alat`
  ADD PRIMARY KEY (`id_alat`);

--
-- Indeks untuk tabel `fuzzytiapkriteria`
--
ALTER TABLE `fuzzytiapkriteria`
  ADD PRIMARY KEY (`id_fuzzykriteria`);

--
-- Indeks untuk tabel `kriteriaharga`
--
ALTER TABLE `kriteriaharga`
  ADD PRIMARY KEY (`id_harga`);

--
-- Indeks untuk tabel `kriteriakecepatan`
--
ALTER TABLE `kriteriakecepatan`
  ADD PRIMARY KEY (`id_kecepatan`);

--
-- Indeks untuk tabel `kriteriakeuntungan`
--
ALTER TABLE `kriteriakeuntungan`
  ADD PRIMARY KEY (`id_keuntungan`);

--
-- Indeks untuk tabel `kriterialistrik`
--
ALTER TABLE `kriterialistrik`
  ADD PRIMARY KEY (`id_listrik`);

--
-- Indeks untuk tabel `log_admin`
--
ALTER TABLE `log_admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `moo_alternatif`
--
ALTER TABLE `moo_alternatif`
  ADD PRIMARY KEY (`id_alternatif`),
  ADD KEY `id_alat` (`id_alat`);

--
-- Indeks untuk tabel `moo_kriteria`
--
ALTER TABLE `moo_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `moo_nilai`
--
ALTER TABLE `moo_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `fuzzytiapkriteria`
--
ALTER TABLE `fuzzytiapkriteria`
  MODIFY `id_fuzzykriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kriteriaharga`
--
ALTER TABLE `kriteriaharga`
  MODIFY `id_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kriteriakecepatan`
--
ALTER TABLE `kriteriakecepatan`
  MODIFY `id_kecepatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kriteriakeuntungan`
--
ALTER TABLE `kriteriakeuntungan`
  MODIFY `id_keuntungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kriterialistrik`
--
ALTER TABLE `kriterialistrik`
  MODIFY `id_listrik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `log_admin`
--
ALTER TABLE `log_admin`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `moo_kriteria`
--
ALTER TABLE `moo_kriteria`
  MODIFY `id_kriteria` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `moo_nilai`
--
ALTER TABLE `moo_nilai`
  MODIFY `id_nilai` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `moo_alternatif`
--
ALTER TABLE `moo_alternatif`
  ADD CONSTRAINT `moo_alternatif_ibfk_1` FOREIGN KEY (`id_alat`) REFERENCES `data_alat` (`id_alat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
