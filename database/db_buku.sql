-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2023 pada 08.42
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_buku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `isbn` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `tahun` int(11) NOT NULL,
  `id_penerbit` int(11) NOT NULL,
  `id_pengarang` int(11) NOT NULL,
  `id_katalog` int(11) NOT NULL,
  `id_suplier` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`isbn`, `judul`, `tahun`, `id_penerbit`, `id_pengarang`, `id_katalog`, `id_suplier`, `stok`, `harga`) VALUES
(901101, 'Self Love', 2022, 101, 201, 401, 301, 12, 250000),
(901103, 'Maaf Tuhan Aku Hampir Menyerah', 2020, 102, 201, 401, 302, 90, 100000),
(901104, 'Assalamualaikum Tarim', 2022, 105, 205, 406, 303, 30, 60000),
(901117, 'Struktur Data', 2021, 101, 201, 406, 302, 20, 100000),
(901118, 'Laravel', 2021, 103, 202, 406, 301, 28, 60000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `katalog`
--

CREATE TABLE `katalog` (
  `id_katalog` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `katalog`
--

INSERT INTO `katalog` (`id_katalog`, `nama`) VALUES
(401, 'Buku Motivasi'),
(402, 'Romance'),
(403, 'Thirell'),
(404, 'komik'),
(405, 'novel'),
(406, 'pelajaran'),
(407, 'islami');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerbit`
--

CREATE TABLE `penerbit` (
  `id_penerbit` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penerbit`
--

INSERT INTO `penerbit` (`id_penerbit`, `nama`, `alamat`, `telp`) VALUES
(101, 'faida', 'jember', '8574551'),
(102, 'Robi', 'Bandung', '08574551898'),
(103, 'Rizki', 'Tanggul', '1234567'),
(104, 'Maulina', 'Nganjuk', '7689876'),
(105, 'nihaya', 'surabaya', '1234678'),
(106, 'feki', 'ponorogo', '9876543'),
(107, 'alfia', 'kediri', '90777766'),
(108, 'nurul', 'madura', '7654678'),
(109, 'Husain', 'Jember', '123'),
(110, 'Husain', 'Madura', '12345'),
(111, 'Husain', 'Jember', '56789');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengarang`
--

CREATE TABLE `pengarang` (
  `id_pengarang` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `alamat` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengarang`
--

INSERT INTO `pengarang` (`id_pengarang`, `nama`, `email`, `telp`, `alamat`) VALUES
(201, 'Laili', 'laili@gmail.com', '085745516640', 'jombang'),
(202, 'silvi', 'silvi@gmail.com', '78965432', 'jakarta'),
(203, 'zidni', 'zidni@gmail.com', '54342134', 'malang'),
(205, 'masit', 'masit@gmail.com', '67543456', 'jombang'),
(206, 'rosi', 'rosi@gmail.com', '899997655', 'banyuwangi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suplier`
--

CREATE TABLE `suplier` (
  `id_suplier` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `alamat` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `suplier`
--

INSERT INTO `suplier` (`id_suplier`, `nama`, `telp`, `alamat`) VALUES
(301, 'jamitus', '7897654', 'sampang'),
(302, 'resnanda', '7865445', 'kediri'),
(303, 'rosid', '6543423', 'bali'),
(304, 'bagus', '754345', 'lamongan'),
(305, 'kanzun', '897654', 'jawatengah');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`isbn`),
  ADD KEY `id_katalog` (`id_katalog`),
  ADD KEY `id_penerbit` (`id_penerbit`),
  ADD KEY `id_suplier` (`id_suplier`),
  ADD KEY `id_pengarang` (`id_pengarang`);

--
-- Indeks untuk tabel `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`id_katalog`);

--
-- Indeks untuk tabel `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indeks untuk tabel `pengarang`
--
ALTER TABLE `pengarang`
  ADD PRIMARY KEY (`id_pengarang`);

--
-- Indeks untuk tabel `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`id_suplier`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `isbn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=901119;

--
-- AUTO_INCREMENT untuk tabel `katalog`
--
ALTER TABLE `katalog`
  MODIFY `id_katalog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=408;

--
-- AUTO_INCREMENT untuk tabel `penerbit`
--
ALTER TABLE `penerbit`
  MODIFY `id_penerbit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT untuk tabel `pengarang`
--
ALTER TABLE `pengarang`
  MODIFY `id_pengarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT untuk tabel `suplier`
--
ALTER TABLE `suplier`
  MODIFY `id_suplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=306;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`id_katalog`) REFERENCES `katalog` (`id_katalog`),
  ADD CONSTRAINT `buku_ibfk_2` FOREIGN KEY (`id_penerbit`) REFERENCES `penerbit` (`id_penerbit`),
  ADD CONSTRAINT `buku_ibfk_3` FOREIGN KEY (`id_suplier`) REFERENCES `suplier` (`id_suplier`),
  ADD CONSTRAINT `buku_ibfk_4` FOREIGN KEY (`id_pengarang`) REFERENCES `pengarang` (`id_pengarang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
