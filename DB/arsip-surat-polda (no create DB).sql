-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Des 2022 pada 07.39
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsip-surat-polda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip_surat`
--

CREATE TABLE `arsip_surat` (
  `id` int(11) NOT NULL,
  `keterangan` int(11) NOT NULL,
  `sumber_surat_id` int(11) NOT NULL,
  `nomor_surat` varchar(100) NOT NULL,
  `pelapor` varchar(50) NOT NULL,
  `terlapor_polres` int(11) NOT NULL,
  `jenis_masalah` varchar(100) NOT NULL,
  `status_surat` varchar(20) NOT NULL,
  `substansi_ket` varchar(100) DEFAULT NULL,
  `jawaban_pengadu` text DEFAULT NULL,
  `tanggal_jawaban_pengadu` date DEFAULT NULL,
  `jawaban_polres` text DEFAULT NULL,
  `tanggal_jawaban_polres` date DEFAULT NULL,
  `jawaban_satker` text DEFAULT NULL,
  `tanggal_jawaban_satker` date DEFAULT NULL,
  `tanggal_surat` date NOT NULL,
  `bukti` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `polres`
--

CREATE TABLE `polres` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `polres`
--

INSERT INTO `polres` (`id`, `name`) VALUES
(1, 'POLRES MGL KOTA'),
(2, 'POLRES MAGELANG'),
(3, 'POLRES PURWOREJO'),
(4, 'POLRES KEBUMEN'),
(5, 'POLRES TEMANGGUNG'),
(6, 'POLRES WONOSOBO'),
(7, 'POLRESTA SURAKARTA'),
(8, 'POLRES SUKOHARJO'),
(9, 'POLRES KLATEN'),
(10, 'POLRES BOYOLALI'),
(11, 'POLRES SRAGEN'),
(12, 'POLRES KARANG ANYAR'),
(13, 'POLRES WONOGIRI'),
(14, 'POLRES PATI'),
(15, 'POLRES KUDUS'),
(16, 'POLRES REMBANG'),
(17, 'POLRES BLORA'),
(18, 'POLRES JEPARA'),
(19, 'POLRES GROBOGAN'),
(20, 'POLRES PEKALONGAN KOTA'),
(21, 'POLRES BATANG'),
(22, 'POLRES PEMALANG'),
(23, 'POLRES TEGAL KOTA'),
(24, 'POLRES TEGAL '),
(25, 'POLRES BREBES'),
(26, 'POLRES PEKALONGAN'),
(27, 'POLRES BANYUMAS'),
(28, 'POLRES CILACAP'),
(29, 'POLRES PURBALINGGA'),
(30, 'POLRES BANJARNEGARA'),
(31, 'POLRESTABES SEMARANG'),
(32, 'POLRES SEMARANG'),
(33, 'POLRES SALATIGA'),
(34, 'POLRES KENDAL'),
(35, 'POLRES DEMAK');

-- --------------------------------------------------------


--
-- Struktur dari tabel `signature`
--

CREATE TABLE `signature` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nrp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `signature`
--

INSERT INTO `signature` (`id`, `name`, `nrp`) VALUES
(1, 'Drs. UNTUNG SUDARTO', 'KOMISARIS BESAR KEPOLISIAN NRP 65110554');

-- --------------------------------------------------------

--
-- Struktur dari tabel `substansi`
--

CREATE TABLE `substansi` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `substansi`
--

INSERT INTO `substansi` (`id`, `name`) VALUES
(1, 'Hukum / HAM'),
(2, 'Lahgun Wewenang'),
(3, 'Pelayanan Masyarakat'),
(4, 'Kewaspadaan Nasional'),
(5, 'Personil'),
(6, 'Pungli'),
(7, 'Sidik TP'),
(8, 'Tanah / Rumah'),
(9, 'Lain - Lain');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sumber_surat`
--

CREATE TABLE `sumber_surat` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sumber_surat`
--

INSERT INTO `sumber_surat` (`id`, `name`) VALUES
(1, 'KAPOLRI'),
(2, 'DPR RI'),
(3, 'KOMNAS AKTPEREMPUAN'),
(4, 'MENSETNEG'),
(5, 'KPK RI'),
(6, 'OMBUDSMAN'),
(7, 'KOMPOLNAS'),
(8, 'POMNASHAM'),
(9, 'KEMENPOLHUKAM'),
(10, 'KEMENKUHAM'),
(11, 'KOMLIN ANAK'),
(12, 'LSM'),
(13, 'LBH'),
(14, 'DUMAS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `arsip_surat`
--
ALTER TABLE `arsip_surat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `terlapor_polres` (`terlapor_polres`),
  ADD KEY `sumber_surat_id` (`sumber_surat_id`);

--
-- Indeks untuk tabel `polres`
--
ALTER TABLE `polres`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `signature`
--
ALTER TABLE `signature`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `substansi`
--
ALTER TABLE `substansi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sumber_surat`
--
ALTER TABLE `sumber_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `arsip_surat`
--
ALTER TABLE `arsip_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `polres`
--
ALTER TABLE `polres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `signature`
--
ALTER TABLE `signature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `substansi`
--
ALTER TABLE `substansi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `sumber_surat`
--
ALTER TABLE `sumber_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
