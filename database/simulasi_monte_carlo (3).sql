-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jan 2024 pada 05.06
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
(53, 1, '8|8|8|8|8|8|8|8|8|8|8|8', '8|8|8|8|8|8|8|8|8|8|8|8', 2019, 2025);

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

--
-- Dumping data untuk tabel `hasil_simulasi`
--

INSERT INTO `hasil_simulasi` (`id`, `id_kategori`, `frekuensi`, `probabilitas`, `kumulatif`, `intervall`, `angka_acak`, `hasil_simulasi`, `tahun_hasil_simulasi`, `data_real`, `tahun_data_real`, `tingkat_akurasi`, `total`, `rata_rata`, `tahun_data_mentah`) VALUES
(1, 1, '6|3|4|1|3|7|8|6|8|4|6|5', '0.10|0.05|0.07|0.02|0.05|0.11|0.13|0.10|0.13|0.07|0.10|0.08', '0.10|0.15|0.22|0.24|0.29|0.40|0.53|0.63|0.76|0.83|0.93|1.01', '0  -  10|11  -  15|16  -  22|23  -  24|25  -  29|30  -  40|41  -  53|54  -  63|64  -  76|77  -  83|84  -  93|94  -  101', '98|75|25|11|15|28|95|90|49|89|21|97', '5|8|3|3|3|3|5|6|8|6|4|5', 2020, '3|3|3|4|3|2|5|3|8|9|4|4', 2020, '60%|38%|100%|75%|100%|67%|100%|50%|100%|67%|100%|80%', '61|1|59|51', '5|5|4|78', 2019),
(2, 2, '6|9|15|9|15|11|13|11|20|17|16|13', '0.04|0.06|0.10|0.06|0.10|0.07|0.08|0.07|0.13|0.11|0.10|0.08', '0.04|0.10|0.20|0.26|0.36|0.43|0.51|0.58|0.71|0.82|0.92|1.00', '0  -  4|5  -  10|11  -  20|21  -  26|27  -  36|37  -  43|44  -  51|52  -  58|59  -  71|72  -  82|83  -  92|93  -  100', '18|3|93|48|21|84|3|93|48|21|84|3', '15|6|13|13|9|16|6|13|13|9|16|6', 2020, '4|5|4|9|10|17|6|3|6|3|3|6', 2020, '27%|83%|31%|69%|90%|94%|100%|23%|46%|33%|19%|100%', '155|1|135|76', '13|11|6|60', 2019),
(3, 3, '47|36|55|31|51|41|35|35|30|41|54|45', '0.09|0.07|0.11|0.06|0.10|0.08|0.07|0.07|0.06|0.08|0.11|0.09', '0.09|0.16|0.27|0.33|0.43|0.51|0.58|0.65|0.71|0.79|0.90|0.99', '0  -  9|10  -  16|17  -  27|28  -  33|34  -  43|44  -  51|52  -  58|59  -  65|66  -  71|72  -  79|80  -  90|91  -  99', '74|48|16|68|33|28|98|9|67|47|30|70', '41|41|36|30|31|31|45|47|30|41|31|30', 2020, '12|41|34|26|31|28|21|23|29|31|35|31', 2020, '29%|100%|94%|87%|100%|90%|47%|49%|97%|76%|89%|97%', '501|1|434|342', '42|36|29|80', 2019);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT untuk tabel `hasil_simulasi`
--
ALTER TABLE `hasil_simulasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kategori_korban_kecelakaan`
--
ALTER TABLE `kategori_korban_kecelakaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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
