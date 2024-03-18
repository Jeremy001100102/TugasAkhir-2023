-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Mar 2024 pada 17.13
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
-- Database: `simulasi_monte_carlo2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_detail_kecelakaan`
--

CREATE TABLE `data_detail_kecelakaan` (
  `id` int(11) NOT NULL,
  `id_data_kecelakaan` int(11) NOT NULL,
  `data_bulan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_detail_kecelakaan`
--

INSERT INTO `data_detail_kecelakaan` (`id`, `id_data_kecelakaan`, `data_bulan`) VALUES
(10957, 1867, '1'),
(10958, 1867, '5'),
(10959, 1867, '6'),
(10960, 1867, '3'),
(10961, 1867, '5'),
(10962, 1867, '6'),
(10963, 1867, '8'),
(10964, 1867, '3'),
(10965, 1867, '5'),
(10966, 1867, '3'),
(10967, 1867, '3'),
(10968, 1867, '9'),
(10969, 1868, '9'),
(10970, 1868, '10'),
(10971, 1868, '3'),
(10972, 1868, '8'),
(10973, 1868, '6'),
(10974, 1868, '13'),
(10975, 1868, '16'),
(10976, 1868, '8'),
(10977, 1868, '11'),
(10978, 1868, '7'),
(10979, 1868, '10'),
(10980, 1868, '8'),
(10981, 1869, '9'),
(10982, 1869, '6'),
(10983, 1869, '6'),
(10984, 1869, '5'),
(10985, 1869, '6'),
(10986, 1869, '14'),
(10987, 1869, '16'),
(10988, 1869, '3'),
(10989, 1869, '3'),
(10990, 1869, '5'),
(10991, 1869, '10'),
(10992, 1869, '12'),
(10993, 1870, '5'),
(10994, 1870, '4'),
(10995, 1870, '6'),
(10996, 1870, '4'),
(10997, 1870, '5'),
(10998, 1870, '6'),
(10999, 1870, '9'),
(11000, 1870, '4'),
(11001, 1870, '6'),
(11002, 1870, '2'),
(11003, 1870, '10'),
(11004, 1870, '7'),
(11005, 1871, '7'),
(11006, 1871, '3'),
(11007, 1871, '12'),
(11008, 1871, '6'),
(11009, 1871, '14'),
(11010, 1871, '13'),
(11011, 1871, '13'),
(11012, 1871, '13'),
(11013, 1871, '7'),
(11014, 1871, '10'),
(11015, 1871, '8'),
(11016, 1871, '8'),
(11017, 1872, '1'),
(11018, 1872, '6'),
(11019, 1872, '13'),
(11020, 1872, '15'),
(11021, 1872, '14'),
(11022, 1872, '12'),
(11023, 1872, '9'),
(11024, 1872, '8'),
(11025, 1872, '6'),
(11026, 1872, '10'),
(11027, 1872, '8'),
(11028, 1872, '12'),
(11029, 1873, '2'),
(11030, 1873, '3'),
(11031, 1873, '4'),
(11032, 1873, '3'),
(11033, 1873, '6'),
(11034, 1873, '9'),
(11035, 1873, '7'),
(11036, 1873, '6'),
(11037, 1873, '5'),
(11038, 1873, '6'),
(11039, 1873, '4'),
(11040, 1873, '7'),
(11041, 1874, '9'),
(11042, 1874, '7'),
(11043, 1874, '3'),
(11044, 1874, '3'),
(11045, 1874, '5'),
(11046, 1874, '6'),
(11047, 1874, '2'),
(11048, 1874, '1'),
(11049, 1874, '1'),
(11050, 1874, '0'),
(11051, 1874, '3'),
(11052, 1874, '2'),
(11053, 1875, '6'),
(11054, 1875, '5'),
(11055, 1875, '4'),
(11056, 1875, '4'),
(11057, 1875, '7'),
(11058, 1875, '13'),
(11059, 1875, '5'),
(11060, 1875, '0'),
(11061, 1875, '5'),
(11062, 1875, '2'),
(11063, 1875, '0'),
(11064, 1875, '1'),
(11065, 1876, '3'),
(11066, 1876, '6'),
(11067, 1876, '3'),
(11068, 1876, '2'),
(11069, 1876, '4'),
(11070, 1876, '2'),
(11071, 1876, '4'),
(11072, 1876, '5'),
(11073, 1876, '2'),
(11074, 1876, '5'),
(11075, 1876, '5'),
(11076, 1876, '1'),
(11077, 1877, '3'),
(11078, 1877, '8'),
(11079, 1877, '4'),
(11080, 1877, '2'),
(11081, 1877, '1'),
(11082, 1877, '0'),
(11083, 1877, '6'),
(11084, 1877, '4'),
(11085, 1877, '1'),
(11086, 1877, '1'),
(11087, 1877, '1'),
(11088, 1877, '0'),
(11089, 1878, '1'),
(11090, 1878, '7'),
(11091, 1878, '3'),
(11092, 1878, '2'),
(11093, 1878, '2'),
(11094, 1878, '1'),
(11095, 1878, '5'),
(11096, 1878, '2'),
(11097, 1878, '0'),
(11098, 1878, '5'),
(11099, 1878, '3'),
(11100, 1878, '0'),
(11101, 1879, '1'),
(11102, 1879, '2'),
(11103, 1879, '1'),
(11104, 1879, '4'),
(11105, 1879, '3'),
(11106, 1879, '1'),
(11107, 1879, '10'),
(11108, 1879, '8'),
(11109, 1879, '3'),
(11110, 1879, '3'),
(11111, 1879, '3'),
(11112, 1879, '4'),
(11113, 1880, '1'),
(11114, 1880, '5'),
(11115, 1880, '1'),
(11116, 1880, '0'),
(11117, 1880, '1'),
(11118, 1880, '2'),
(11119, 1880, '3'),
(11120, 1880, '2'),
(11121, 1880, '0'),
(11122, 1880, '0'),
(11123, 1880, '0'),
(11124, 1880, '1'),
(11125, 1881, '2'),
(11126, 1881, '9'),
(11127, 1881, '3'),
(11128, 1881, '35'),
(11129, 1881, '0'),
(11130, 1881, '0'),
(11131, 1881, '7'),
(11132, 1881, '7'),
(11133, 1881, '1'),
(11134, 1881, '1'),
(11135, 1881, '7'),
(11136, 1881, '1'),
(11137, 1882, '4'),
(11138, 1882, '2'),
(11139, 1882, '4'),
(11140, 1882, '4'),
(11141, 1882, '5'),
(11142, 1882, '11'),
(11143, 1882, '6'),
(11144, 1882, '5'),
(11145, 1882, '6'),
(11146, 1882, '6'),
(11147, 1882, '3'),
(11148, 1882, '4'),
(11149, 1883, '2'),
(11150, 1883, '1'),
(11151, 1883, '1'),
(11152, 1883, '1'),
(11153, 1883, '3'),
(11154, 1883, '11'),
(11155, 1883, '15'),
(11156, 1883, '2'),
(11157, 1883, '7'),
(11158, 1883, '5'),
(11159, 1883, '5'),
(11160, 1883, '4'),
(11161, 1884, '4'),
(11162, 1884, '3'),
(11163, 1884, '2'),
(11164, 1884, '2'),
(11165, 1884, '22'),
(11166, 1884, '53'),
(11167, 1884, '18'),
(11168, 1884, '9'),
(11169, 1884, '57'),
(11170, 1884, '21'),
(11171, 1884, '28'),
(11172, 1884, '15'),
(11173, 1885, '1'),
(11174, 1885, '8'),
(11175, 1885, '1'),
(11176, 1885, '2'),
(11177, 1885, '8'),
(11178, 1885, '6'),
(11179, 1885, '3'),
(11180, 1885, '5'),
(11181, 1885, '6'),
(11182, 1885, '2'),
(11183, 1885, '5'),
(11184, 1885, '3'),
(11185, 1886, '0'),
(11186, 1886, '4'),
(11187, 1886, '3'),
(11188, 1886, '2'),
(11189, 1886, '4'),
(11190, 1886, '8'),
(11191, 1886, '1'),
(11192, 1886, '7'),
(11193, 1886, '2'),
(11194, 1886, '2'),
(11195, 1886, '1'),
(11196, 1886, '0'),
(11197, 1887, '18'),
(11198, 1887, '20'),
(11199, 1887, '9'),
(11200, 1887, '9'),
(11201, 1887, '31'),
(11202, 1887, '31'),
(11203, 1887, '18'),
(11204, 1887, '13'),
(11205, 1887, '23'),
(11206, 1887, '25'),
(11207, 1887, '23'),
(11208, 1887, '20'),
(11209, 1888, '10'),
(11210, 1888, '2'),
(11211, 1888, '5'),
(11212, 1888, '3'),
(11213, 1888, '8'),
(11214, 1888, '2'),
(11215, 1888, '3'),
(11216, 1888, '5'),
(11217, 1888, '5'),
(11218, 1888, '6'),
(11219, 1888, '5'),
(11220, 1888, '5'),
(11221, 1889, '5'),
(11222, 1889, '3'),
(11223, 1889, '5'),
(11224, 1889, '5'),
(11225, 1889, '5'),
(11226, 1889, '2'),
(11227, 1889, '2'),
(11228, 1889, '1'),
(11229, 1889, '6'),
(11230, 1889, '2'),
(11231, 1889, '3'),
(11232, 1889, '4'),
(11233, 1890, '23'),
(11234, 1890, '9'),
(11235, 1890, '33'),
(11236, 1890, '27'),
(11237, 1890, '22'),
(11238, 1890, '8'),
(11239, 1890, '20'),
(11240, 1890, '12'),
(11241, 1890, '5'),
(11242, 1890, '11'),
(11243, 1890, '10'),
(11244, 1890, '8'),
(11245, 1891, '4'),
(11246, 1891, '6'),
(11247, 1891, '5'),
(11248, 1891, '8'),
(11249, 1891, '4'),
(11250, 1891, '8'),
(11251, 1891, '3'),
(11252, 1891, '6'),
(11253, 1891, '1'),
(11254, 1891, '6'),
(11255, 1891, '7'),
(11256, 1891, '2'),
(11257, 1892, '4'),
(11258, 1892, '1'),
(11259, 1892, '1'),
(11260, 1892, '7'),
(11261, 1892, '0'),
(11262, 1892, '7'),
(11263, 1892, '1'),
(11264, 1892, '4'),
(11265, 1892, '1'),
(11266, 1892, '0'),
(11267, 1892, '1'),
(11268, 1892, '1'),
(11269, 1893, '15'),
(11270, 1893, '24'),
(11271, 1893, '29'),
(11272, 1893, '33'),
(11273, 1893, '33'),
(11274, 1893, '40'),
(11275, 1893, '38'),
(11276, 1893, '43'),
(11277, 1893, '43'),
(11278, 1893, '33'),
(11279, 1893, '47'),
(11280, 1893, '27'),
(11281, 1894, '5'),
(11282, 1894, '2'),
(11283, 1894, '1'),
(11284, 1894, '7'),
(11285, 1894, '5'),
(11286, 1894, '7'),
(11287, 1894, '1'),
(11288, 1894, '5'),
(11289, 1894, '5'),
(11290, 1894, '7'),
(11291, 1894, '2'),
(11292, 1894, '4'),
(11293, 1895, '3'),
(11294, 1895, '0'),
(11295, 1895, '1'),
(11296, 1895, '1'),
(11297, 1895, '1'),
(11298, 1895, '1'),
(11299, 1895, '1'),
(11300, 1895, '0'),
(11301, 1895, '0'),
(11302, 1895, '2'),
(11303, 1895, '0'),
(11304, 1895, '0'),
(11305, 1896, '37'),
(11306, 1896, '48'),
(11307, 1896, '50'),
(11308, 1896, '44'),
(11309, 1896, '48'),
(11310, 1896, '63'),
(11311, 1896, '37'),
(11312, 1896, '63'),
(11313, 1896, '31'),
(11314, 1896, '47'),
(11315, 1896, '67'),
(11316, 1896, '57'),
(11317, 1897, '11'),
(11318, 1897, '4'),
(11319, 1897, '2'),
(11320, 1897, '2'),
(11321, 1897, '6'),
(11322, 1897, '4'),
(11323, 1897, '7'),
(11324, 1897, '5'),
(11325, 1897, '6'),
(11326, 1897, '5'),
(11327, 1897, '2'),
(11328, 1897, '4'),
(11329, 1898, '1'),
(11330, 1898, '0'),
(11331, 1898, '1'),
(11332, 1898, '0'),
(11333, 1898, '0'),
(11334, 1898, '2'),
(11335, 1898, '1'),
(11336, 1898, '1'),
(11337, 1898, '1'),
(11338, 1898, '0'),
(11339, 1898, '0'),
(11340, 1898, '0'),
(11341, 1899, '49'),
(11342, 1899, '64'),
(11343, 1899, '42'),
(11344, 1899, '53'),
(11345, 1899, '46'),
(11346, 1899, '43'),
(11347, 1899, '56'),
(11348, 1899, '45'),
(11349, 1899, '44'),
(11350, 1899, '59'),
(11351, 1899, '50'),
(11352, 1899, '60'),
(11353, 1900, '4'),
(11354, 1900, '5'),
(11355, 1900, '4'),
(11356, 1900, '3'),
(11357, 1900, '6'),
(11358, 1900, '6'),
(11359, 1900, '5'),
(11360, 1900, '9'),
(11361, 1900, '6'),
(11362, 1900, '3'),
(11363, 1900, '3'),
(11364, 1900, '5'),
(11365, 1901, '0'),
(11366, 1901, '0'),
(11367, 1901, '0'),
(11368, 1901, '3'),
(11369, 1901, '4'),
(11370, 1901, '4'),
(11371, 1901, '7'),
(11372, 1901, '8'),
(11373, 1901, '17'),
(11374, 1901, '15'),
(11375, 1901, '7'),
(11376, 1901, '17'),
(11377, 1902, '54'),
(11378, 1902, '64'),
(11379, 1902, '83'),
(11380, 1902, '73'),
(11381, 1902, '69'),
(11382, 1902, '82'),
(11383, 1902, '43'),
(11384, 1902, '40'),
(11385, 1902, '37'),
(11386, 1902, '64'),
(11387, 1902, '38'),
(11388, 1902, '68'),
(11389, 1903, '6'),
(11390, 1903, '3'),
(11391, 1903, '4'),
(11392, 1903, '1'),
(11393, 1903, '3'),
(11394, 1903, '7'),
(11395, 1903, '8'),
(11396, 1903, '6'),
(11397, 1903, '8'),
(11398, 1903, '4'),
(11399, 1903, '6'),
(11400, 1903, '5'),
(11401, 1904, '6'),
(11402, 1904, '9'),
(11403, 1904, '15'),
(11404, 1904, '9'),
(11405, 1904, '15'),
(11406, 1904, '11'),
(11407, 1904, '13'),
(11408, 1904, '11'),
(11409, 1904, '20'),
(11410, 1904, '17'),
(11411, 1904, '16'),
(11412, 1904, '13'),
(11413, 1905, '47'),
(11414, 1905, '36'),
(11415, 1905, '55'),
(11416, 1905, '31'),
(11417, 1905, '51'),
(11418, 1905, '41'),
(11419, 1905, '35'),
(11420, 1905, '35'),
(11421, 1905, '30'),
(11422, 1905, '41'),
(11423, 1905, '54'),
(11424, 1905, '45'),
(11425, 1906, '6'),
(11426, 1906, '3'),
(11427, 1906, '4'),
(11428, 1906, '1'),
(11429, 1906, '3'),
(11430, 1906, '7'),
(11431, 1906, '8'),
(11432, 1906, '6'),
(11433, 1906, '8'),
(11434, 1906, '4'),
(11435, 1906, '6'),
(11436, 1906, '5'),
(11437, 1907, '6'),
(11438, 1907, '9'),
(11439, 1907, '15'),
(11440, 1907, '9'),
(11441, 1907, '15'),
(11442, 1907, '11'),
(11443, 1907, '13'),
(11444, 1907, '11'),
(11445, 1907, '20'),
(11446, 1907, '17'),
(11447, 1907, '16'),
(11448, 1907, '13'),
(11449, 1908, '47'),
(11450, 1908, '36'),
(11451, 1908, '55'),
(11452, 1908, '31'),
(11453, 1908, '51'),
(11454, 1908, '41'),
(11455, 1908, '35'),
(11456, 1908, '35'),
(11457, 1908, '30'),
(11458, 1908, '41'),
(11459, 1908, '54'),
(11460, 1908, '45'),
(11461, 1909, '2'),
(11462, 1909, '5'),
(11463, 1909, '3'),
(11464, 1909, '2'),
(11465, 1909, '3'),
(11466, 1909, '5'),
(11467, 1909, '3'),
(11468, 1909, '3'),
(11469, 1909, '2'),
(11470, 1909, '5'),
(11471, 1909, '4'),
(11472, 1909, '2'),
(11473, 1910, '3'),
(11474, 1910, '3'),
(11475, 1910, '3'),
(11476, 1910, '8'),
(11477, 1910, '7'),
(11478, 1910, '4'),
(11479, 1910, '4'),
(11480, 1910, '4'),
(11481, 1910, '9'),
(11482, 1910, '5'),
(11483, 1910, '5'),
(11484, 1910, '2'),
(11485, 1911, '26'),
(11486, 1911, '18'),
(11487, 1911, '25'),
(11488, 1911, '24'),
(11489, 1911, '36'),
(11490, 1911, '38'),
(11491, 1911, '29'),
(11492, 1911, '36'),
(11493, 1911, '26'),
(11494, 1911, '32'),
(11495, 1911, '30'),
(11496, 1911, '31'),
(11497, 1912, '4'),
(11498, 1912, '2'),
(11499, 1912, '3'),
(11500, 1912, '1'),
(11501, 1912, '1'),
(11502, 1912, '2'),
(11503, 1912, '3'),
(11504, 1912, '4'),
(11505, 1912, '6'),
(11506, 1912, '1'),
(11507, 1912, '1'),
(11508, 1912, '1'),
(11509, 1913, '9'),
(11510, 1913, '4'),
(11511, 1913, '1'),
(11512, 1913, '4'),
(11513, 1913, '5'),
(11514, 1913, '4'),
(11515, 1913, '2'),
(11516, 1913, '4'),
(11517, 1913, '1'),
(11518, 1913, '2'),
(11519, 1913, '0'),
(11520, 1913, '2'),
(11521, 1914, '29'),
(11522, 1914, '30'),
(11523, 1914, '25'),
(11524, 1914, '25'),
(11525, 1914, '35'),
(11526, 1914, '37'),
(11527, 1914, '41'),
(11528, 1914, '31'),
(11529, 1914, '58'),
(11530, 1914, '41'),
(11531, 1914, '37'),
(11532, 1914, '40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_hasil_simulasi`
--

CREATE TABLE `data_hasil_simulasi` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `hasil_simulasi` varchar(255) NOT NULL,
  `tahun_hasil_simulasi` year(4) NOT NULL,
  `data_real` varchar(255) NOT NULL,
  `tahun_data_real` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kategori`
--

CREATE TABLE `data_kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_kategori`
--

INSERT INTO `data_kategori` (`id`, `nama`) VALUES
(1, 'Meninggal Dunia'),
(2, 'Luka Berat'),
(3, 'Luka Ringan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kecelakaan`
--

CREATE TABLE `data_kecelakaan` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_kecelakaan`
--

INSERT INTO `data_kecelakaan` (`id`, `id_kategori`, `tahun`) VALUES
(1867, 1, 2007),
(1868, 2, 2007),
(1869, 3, 2007),
(1870, 1, 2008),
(1871, 2, 2008),
(1872, 3, 2008),
(1873, 1, 2009),
(1874, 2, 2009),
(1875, 3, 2009),
(1876, 1, 2010),
(1877, 2, 2010),
(1878, 3, 2010),
(1879, 1, 2011),
(1880, 2, 2011),
(1881, 3, 2011),
(1882, 1, 2012),
(1883, 2, 2012),
(1884, 3, 2012),
(1885, 1, 2013),
(1886, 2, 2013),
(1887, 3, 2013),
(1888, 1, 2014),
(1889, 2, 2014),
(1890, 3, 2014),
(1891, 1, 2015),
(1892, 2, 2015),
(1893, 3, 2015),
(1894, 1, 2016),
(1895, 2, 2016),
(1896, 3, 2016),
(1897, 1, 2017),
(1898, 2, 2017),
(1899, 3, 2017),
(1900, 1, 2018),
(1901, 2, 2018),
(1902, 3, 2018),
(1903, 1, 2019),
(1904, 2, 2019),
(1905, 3, 2019),
(1906, 1, 2020),
(1907, 2, 2020),
(1908, 3, 2020),
(1909, 1, 2021),
(1910, 2, 2021),
(1911, 3, 2021),
(1912, 1, 2022),
(1913, 2, 2022),
(1914, 3, 2022);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_users`
--

CREATE TABLE `data_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_users`
--

INSERT INTO `data_users` (`id`, `username`, `password`) VALUES
(1, 'jeremy bessiesura', '$2y$10$Wbwv6oxqvNCdeVGmw3dDvub2TFA5FA.U3jhPxH/p8ZR8EYnWhRHV2'),
(2, 'admin', '$2y$10$Lo31YBz17vzo7BNQdB/rRuHZLah7kopK4sSxbxzyrT/.0V6CPPPNC');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_detail_kecelakaan`
--
ALTER TABLE `data_detail_kecelakaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_kecelakaan_detail` (`id_data_kecelakaan`);

--
-- Indeks untuk tabel `data_hasil_simulasi`
--
ALTER TABLE `data_hasil_simulasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_kecelakaan_hasil_simulasi` (`id_kategori`);

--
-- Indeks untuk tabel `data_kategori`
--
ALTER TABLE `data_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_kecelakaan`
--
ALTER TABLE `data_kecelakaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_data_kecelakaan` (`id_kategori`);

--
-- Indeks untuk tabel `data_users`
--
ALTER TABLE `data_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_detail_kecelakaan`
--
ALTER TABLE `data_detail_kecelakaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11533;

--
-- AUTO_INCREMENT untuk tabel `data_hasil_simulasi`
--
ALTER TABLE `data_hasil_simulasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_kategori`
--
ALTER TABLE `data_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `data_kecelakaan`
--
ALTER TABLE `data_kecelakaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1915;

--
-- AUTO_INCREMENT untuk tabel `data_users`
--
ALTER TABLE `data_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_detail_kecelakaan`
--
ALTER TABLE `data_detail_kecelakaan`
  ADD CONSTRAINT `data_kecelakaan_detail` FOREIGN KEY (`id_data_kecelakaan`) REFERENCES `data_kecelakaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_hasil_simulasi`
--
ALTER TABLE `data_hasil_simulasi`
  ADD CONSTRAINT `data_kecelakaan_hasil_simulasi` FOREIGN KEY (`id_kategori`) REFERENCES `data_kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_kecelakaan`
--
ALTER TABLE `data_kecelakaan`
  ADD CONSTRAINT `kategori_data_kecelakaan` FOREIGN KEY (`id_kategori`) REFERENCES `data_kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
