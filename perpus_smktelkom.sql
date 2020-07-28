-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jul 2020 pada 08.06
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus_smktelkom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_buku`
--

CREATE TABLE `master_buku` (
  `id` int(30) NOT NULL,
  `nama_buku` varchar(300) NOT NULL,
  `no_buku` int(30) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `kategori_buku` varchar(250) NOT NULL,
  `status` enum('Dipinjam','Tersedia','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_buku`
--

INSERT INTO `master_buku` (`id`, `nama_buku`, `no_buku`, `deskripsi`, `kategori_buku`, `status`) VALUES
(1, 'Desain', 101, 'Berisi tutorial desain', 'Seni', 'Tersedia'),
(2, 'Resep Masakan', 201, 'Berisi resep resep rumahan', 'Masakan', 'Tersedia'),
(3, 'Produktif RPL', 301, 'Berisi materi materi dasar kejuruan', 'Pelajaran', 'Tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_kategori_buku`
--

CREATE TABLE `master_kategori_buku` (
  `id` int(30) NOT NULL,
  `nama` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perpustakaan`
--

CREATE TABLE `perpustakaan` (
  `id` int(30) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `jam_buka` time NOT NULL,
  `jam_tutup` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perpustakaan`
--

INSERT INTO `perpustakaan` (`id`, `nama`, `jam_buka`, `jam_tutup`) VALUES
(1, 'Perpustakaan SMK Telkom', '08:00:00', '17:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id` int(30) NOT NULL,
  `nama_petugas` varchar(300) NOT NULL,
  `no_karyawan` int(250) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kelamin` enum('L','P','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id`, `nama_petugas`, `no_karyawan`, `tanggal_lahir`, `kelamin`) VALUES
(1, 'Rendi', 11001, '1989-02-12', 'L'),
(2, 'Ryna', 11002, '1998-12-12', 'P'),
(3, 'Tyno', 11003, '1890-06-20', 'L');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(30) NOT NULL,
  `nis` int(30) NOT NULL,
  `nama_siswa` varchar(300) NOT NULL,
  `kelas` varchar(250) NOT NULL,
  `jurusan` enum('RPL','TKJ','','') NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `nama_siswa`, `kelas`, `jurusan`, `status`) VALUES
(1, 1101, 'Andi', '10', 'RPL', '-'),
(2, 1201, 'Nisa', '11', 'TKJ', '-'),
(3, 1102, 'Jujo', '11', 'RPL', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_pinjambuku`
--

CREATE TABLE `transaksi_pinjambuku` (
  `id` int(30) NOT NULL,
  `perpus_id` int(30) NOT NULL,
  `buku_id` int(30) NOT NULL,
  `petugas_id` int(30) NOT NULL,
  `siswa_id` int(30) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `terpinjam_st` enum('0','1','','') NOT NULL,
  `kembali_st` enum('0','1','','') NOT NULL,
  `note` varchar(300) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi_pinjambuku`
--

INSERT INTO `transaksi_pinjambuku` (`id`, `perpus_id`, `buku_id`, `petugas_id`, `siswa_id`, `tgl_pinjam`, `tgl_kembali`, `terpinjam_st`, `kembali_st`, `note`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 2, 1, '2020-07-22', '2020-08-01', '1', '0', 'sdss', NULL, '2020-07-27 22:43:59'),
(2, 1, 1, 2, 2, '2020-07-07', '2020-07-28', '0', '0', 'sfvsdfsdf', '2020-07-27 02:13:49', '2020-07-27 02:13:49'),
(3, 1, 2, 2, 2, '2020-07-02', '2020-08-06', '0', '0', 'wrwerwer', '2020-07-27 02:17:41', '2020-07-27 02:17:41'),
(4, 1, 1, 1, 1, '2020-07-09', '2020-07-02', '0', '0', 'Halaman 1 tidak ada img', '2020-07-27 02:19:10', '2020-07-27 22:52:59'),
(5, 1, 2, 2, 2, '2020-07-09', '2020-07-31', '0', '0', 'sfvsdfsdf', '2020-07-27 02:21:03', '2020-07-27 02:21:03'),
(6, 1, 1, 1, 1, '2020-07-02', '2020-07-30', '0', '0', 'AAAAAAAAAAAA', '2020-07-27 02:21:44', '2020-07-27 02:21:44'),
(7, 1, 1, 3, 3, '2020-07-08', '2020-07-29', '0', '0', 'Halaman 1 hilang', '2020-07-27 19:20:57', '2020-07-27 19:20:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `master_buku`
--
ALTER TABLE `master_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_kategori_buku`
--
ALTER TABLE `master_kategori_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `perpustakaan`
--
ALTER TABLE `perpustakaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi_pinjambuku`
--
ALTER TABLE `transaksi_pinjambuku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perpus_id` (`perpus_id`,`buku_id`,`petugas_id`,`siswa_id`),
  ADD KEY `siswa_id` (`siswa_id`),
  ADD KEY `petugas_id` (`petugas_id`),
  ADD KEY `buku_id` (`buku_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `master_buku`
--
ALTER TABLE `master_buku`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `master_kategori_buku`
--
ALTER TABLE `master_kategori_buku`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `perpustakaan`
--
ALTER TABLE `perpustakaan`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `transaksi_pinjambuku`
--
ALTER TABLE `transaksi_pinjambuku`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi_pinjambuku`
--
ALTER TABLE `transaksi_pinjambuku`
  ADD CONSTRAINT `transaksi_pinjambuku_ibfk_1` FOREIGN KEY (`perpus_id`) REFERENCES `perpustakaan` (`id`),
  ADD CONSTRAINT `transaksi_pinjambuku_ibfk_2` FOREIGN KEY (`siswa_id`) REFERENCES `siswa` (`id`),
  ADD CONSTRAINT `transaksi_pinjambuku_ibfk_3` FOREIGN KEY (`petugas_id`) REFERENCES `petugas` (`id`),
  ADD CONSTRAINT `transaksi_pinjambuku_ibfk_4` FOREIGN KEY (`buku_id`) REFERENCES `master_buku` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
