-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2023 pada 17.26
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simulasi_monte_carlo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_bulan_kecelakaan`
--

CREATE TABLE `data_bulan_kecelakaan` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `data_bulan_mentah` varchar(255) NOT NULL,
  `data_bulan_real` varchar(255) NOT NULL,
  `tahun_data_mentah` year(4) NOT NULL,
  `tahun_data_real` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_bulan_kecelakaan`
--

INSERT INTO `data_bulan_kecelakaan` (`id`, `id_kategori`, `data_bulan_mentah`, `data_bulan_real`, `tahun_data_mentah`, `tahun_data_real`) VALUES
(1, 1, '6|3|4|1|3|7|8|6|8|4|6|5', '3|3|3|4|3|2|5|3|8|9|4|4', 2019, 2020),
(3, 1, '3|3|3|4|3|2|5|3|8|9|4|4', '2|5|3|2|3|5|3|3|2|5|4|2', 2020, 2021),
(4, 1, '2|5|3|2|3|5|3|3|2|5|4|2', '4|2|3|1|1|2|3|4|6|1|1|1', 2021, 2022),
(5, 2, '6|9|15|9|15|11|13|11|20|17|16|13', '4|5|4|9|10|17|6|3|6|3|3|6', 2019, 2020),
(6, 2, '4|5|4|9|10|17|6|3|6|3|3|6', '3|3|3|8|7|4|4|4|9|5|5|2', 2020, 2021),
(7, 2, '3|3|3|8|7|4|4|4|9|5|5|2', '9|4|1|4|5|4|2|4|1|2|0|2', 2021, 2022),
(8, 3, '47|36|55|31|51|41|35|35|30|41|54|45', '12|41|34|26|31|28|21|23|29|31|35|31', 2019, 2020),
(9, 3, '12|41|34|26|31|28|21|23|29|31|35|31', '26|18|25|24|36|38|29|36|26|32|30|31', 2020, 2021),
(10, 3, '26|18|25|24|36|38|29|36|26|32|30|31', '29|30|25|25|35|37|41|31|58|41|37|40', 2021, 2022),
(11, 1, '9|9|9|9|9|9|9|9|9|99|9|9', '9|9|9|9|9|9|9|9|9|9|9|9', 2024, 2025),
(13, 2, '9|9|9|9|9|9|9|9|9|9|9|9', '9|9|9|9|9|9|9|9|9|9|9|9', 2024, 2025),
(14, 3, '9|9|9|9|9|9|9|9|9|9|9|9', '9|9|9|9|9|9|9|9|9|9|9|9', 2029, 2030),
(16, 3, '8|8|8|8|8|8|8|8|8|8|8|8', '8|8|8|88|8|8|8|8|8|8|8|8', 2026, 2027),
(17, 1, '9|9|9|9|9|9|9|9|9|9|9|9', '9|9|9|9|9|9|9|9|9|9|9|9', 2022, 2023);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_simulasi`
--

CREATE TABLE `hasil_simulasi` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `frekuensi` varchar(255) NOT NULL,
  `probabilitas` varchar(255) NOT NULL,
  `kumulatif` varchar(255) NOT NULL,
  `intervall` varchar(255) NOT NULL,
  `angka_acak` varchar(255) NOT NULL,
  `hasil_simulasi` varchar(255) NOT NULL,
  `tahun_hasil_simulasi` year(4) NOT NULL,
  `data_real` varchar(255) NOT NULL,
  `tahun_data_real` year(4) NOT NULL,
  `tingkat_akurasi` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `rata_rata` varchar(255) NOT NULL,
  `tahun_data_mentah` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_korban_kecelakaan`
--

CREATE TABLE `kategori_korban_kecelakaan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_korban_kecelakaan`
--

INSERT INTO `kategori_korban_kecelakaan` (`id`, `nama`) VALUES
(1, 'Meninggal'),
(2, 'Luka Berat'),
(3, 'Luka Ringan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(5, 'jeremy bessiesura', '$2y$10$MGQ3AYjspI.8M8531R/tB.IUr2oqgSzBkl/P/qHS/pE9DJOv8utvC'),
(7, 'ratna', '$2y$10$1VZ2DSU2eismYygrZpJG2uBvw/PT3RdMsgOi.8tD0wmQ5xG5cuLo2'),
(8, 'mas gio jehani', '$2y$10$s0jmYZ2te689afeLIiIXA.Kmta.mIflS44IeKpArqYs/ouRCYb2z2'),
(11, 'venan sese', '$2y$10$rJbz2MrXJlKvAYmg/nWMIOM0Ti4emSBGM8bshmb/B9agMO4PZPMDi'),
(12, 'ceri muda', '$2y$10$y3o/9HHF.EIroTEb46v5XuMijhHIkwVgRiihThkh31JNWvlIQonn2'),
(13, 'bang andre', '$2y$10$WyyNoqINCL8BSbpezOdPrunapIrLarftcuBcmn6yvcYhLfFpMWwou');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_bulan_kecelakaan`
--
ALTER TABLE `data_bulan_kecelakaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_data_korban` (`id_kategori`);

--
-- Indeks untuk tabel `hasil_simulasi`
--
ALTER TABLE `hasil_simulasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_hasilSim_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `kategori_korban_kecelakaan`
--
ALTER TABLE `kategori_korban_kecelakaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_bulan_kecelakaan`
--
ALTER TABLE `data_bulan_kecelakaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `hasil_simulasi`
--
ALTER TABLE `hasil_simulasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori_korban_kecelakaan`
--
ALTER TABLE `kategori_korban_kecelakaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_bulan_kecelakaan`
--
ALTER TABLE `data_bulan_kecelakaan`
  ADD CONSTRAINT `fk_data_korban` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_korban_kecelakaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `hasil_simulasi`
--
ALTER TABLE `hasil_simulasi`
  ADD CONSTRAINT `fk_hasilSim_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_korban_kecelakaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
