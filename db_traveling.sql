-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jul 2020 pada 04.43
-- Versi server: 10.1.36-MariaDB
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
-- Database: `db_traveling`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_akomodasi`
--

CREATE TABLE `tb_akomodasi` (
  `id_akomodasi` int(11) NOT NULL,
  `nama_akomodasi` varchar(50) NOT NULL,
  `lokasi_akomodasi` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `jarak` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_akomodasi`
--

INSERT INTO `tb_akomodasi` (`id_akomodasi`, `nama_akomodasi`, `lokasi_akomodasi`, `gambar`, `jarak`) VALUES
(1, 'Cahaya Berlian Hotel', 'Pamekasan Madura', 'hotelpamekasan2.jpg', '68 km'),
(2, 'Odaita Hotel', 'Pamekasan', 'hotelpamekasan3.jpeg', '72 Km'),
(3, 'Hotel Resort Musdalifah', 'Sumenep', 'hotelsumenep1.jpg', '89 Km'),
(4, 'Hotel Purnama', 'Sumenep', 'hotelsumenep3.jpg', '2 Km'),
(5, 'Hotel Rose ', 'Bangkalan', 'superior room hotel rose bangkalan.jpg', '15 Km'),
(6, 'Hotel Pondok Camplong', 'Sampang', 'Hotel-Pondok-Camplong-Sampang.jpg', '42 Km'),
(7, 'Hotel Bahagia', 'Sampang', 'hotel-bahagia-3.jpg', '45 Km'),
(8, 'Hotel Ningrat', 'Bangkalan', 'hotel ningrat 1.jpg', '11 Km');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` int(11) NOT NULL,
  `nama_artikel` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_artikel`
--

INSERT INTO `tb_artikel` (`id_artikel`, `nama_artikel`, `keterangan`, `waktu`, `gambar`) VALUES
(1, 'Ali Hafidz Syahbana', 'Pemkab Sumenep Siapkan Ruangan Khusus di Gedung Islamic Center untuk Tangani Pasien Covid-19', 'Rabu, Maret 29, 2020', 'bupati-sumenep.jpg'),
(2, 'Fransisca Stefanie Chandra', '8 Potret Kecantikan Pantai Sembilan di Sumenep, Madura\r\n', 'Rabu, Desember 11, 2017', 'pantai-madura2jpg-rpcrv.jpg'),
(3, 'Ambar Purwaningrum', 'Gili Iyang, Pulau di Sumenep dengan Kadar Oksigen Tertinggi di Indonesia\r\n', 'Jumat, 2 Agustus, 2019', 'giliyang.jpg'),
(4, 'Intan Deviana', 'Ke Madura, Belum Lengkap Kalau Gak Cobain Bebek Sinjay!\r\n', 'Jumat, 2 Agustus, 2019', 'bebeksinjay.jpg'),
(5, 'Rismiyanto', 'Bukit Tinggi Daramista, Bukit Romantis Sumenep\r\n', 'Sabtu, Oktober 27, 2018', 'bukit-tinggi-daramista.jpg'),
(6, 'Januar Adi Sagita', 'Menikmati Suasana Wisata Negeri Sakura di Pamekasan Melalui Kampoeng Wisata Toron Samalem', 'Senin, Januari 14, 2019', 'kampoeng-wisata-toron-samalem.jpg'),
(7, 'Islahuddin', 'Depot Legendaris Amboina Kota Bangkalan Tak Lekang Dimakan Jaman\r\n', 'Minggu, November 19, 2017', 'amboina.jpg'),
(8, 'Kuswanto Ferdian', 'Bupati Pamekasan Datangi Pusat Keramaian, Beri Imbauan Pencegahan Virus Corona dan Social Distancing', 'Senin, Maret 23, 2020', 'baddrut-tamam.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id_galeri` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_galeri`
--

INSERT INTO `tb_galeri` (`id_galeri`, `keterangan`, `waktu`, `gambar`) VALUES
(1, ' Warung Lesehan Asela, Pesta Seafood Sambil Nikmati Indahnya Madura', '28, Jun 2019', 'warung_asela.jpg'),
(2, 'Uniknya Masjid Agung Sumenep, Gabungan Beragam Etnis', '08, Jun 2017', 'masjid_jamik.jpg'),
(3, 'Keindahan Air Terjun Toroan Sampang di Bibir Pantai', '26, Dec 2019', 'airterjun_toroan.jpg'),
(4, 'Pantai Teluk Sapoong, dari Sarang Penyamun Menjadi Surga Wisata Unggulan', '24, Dec 2019', 'Pantai_teluk.jpg'),
(5, 'Jejak Majapahit dan Aura Vihara Avalokitesvara Pamekasan Madura', '17, Dec 2019', 'vihara.jpg'),
(6, 'Bukit Jaddih, Destinasi Wisata di Madura yang Tawarkan Pemandangan Mirip Kapadokia', '26, Feb 2019', 'bukit-jaddih.jpg'),
(7, 'Bukit Cinta Pamekasan, Destinasi Kekinian nan Instagramable di Madura', '16, Nov 2019', 'bukit-cinta-pamekasan.jpg'),
(8, 'Menikmati Keindahan Biota Laut dan Snorkeling di Pulau Sapeken', '16, Dec 2019', 'pulau-sapeken.jpg'),
(9, 'yyy', '', 'background.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_itinerari`
--

CREATE TABLE `tb_itinerari` (
  `id_itinerari` int(11) NOT NULL,
  `nama_itinerari` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_itinerari`
--

INSERT INTO `tb_itinerari` (`id_itinerari`, `nama_itinerari`, `keterangan`, `waktu`, `gambar`) VALUES
(1, 'Ali Hafidz Syahbana', 'Initerary Road Trip ke Madura selama 4 hari', '15 Jam Yang Lalu', 'pulau madura.jpg'),
(2, 'Fransisca Stefanie Chandra', 'Jelajah Pulau Madura', '1 Jam Yang Lalu', 'Pantai-Gili-Labak.jpg'),
(3, 'Rosita', 'Goa Pote, Wisata Instagenic Bangkalan yang Tak Pernah Sepi Turis', '1 Jam Yang Lalu', 'IMG_20190616125411_6840.jpg'),
(4, 'Teguh Tofik Hidayat', 'Berbagai Objek Wisata Menarik di Madura', '1 Jam Yang Lalu', 'airterjun.jpg'),
(5, 'Mesi Shabrina', 'Wisata Anti Mainstream ke Madura', '1 Jam Yang Lalu', 'itinerari5.jpg'),
(6, 'Januar Adi Sagita', 'Menjelajahi Uniknya Bukit Kapur Arosbaya, Wisata Madura', '1 Jam Yang Lalu', 'itinerari6.jpg'),
(7, 'Renny Puspita', 'Berburu Spot Instagramable di Madura', '1 Jam Yang Lalu', 'itinerari7.jpg'),
(8, 'Abdul Basri', 'Wisata Pantai Camplong, Tempat Berlibur dan Bermain Bersama Keluarga', '1 Jam Yang Lalu', 'itinerari8.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kuliner`
--

CREATE TABLE `tb_kuliner` (
  `id_kuliner` int(11) NOT NULL,
  `nama_kuliner` varchar(50) NOT NULL,
  `lokasi_kuliner` text NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kuliner`
--

INSERT INTO `tb_kuliner` (`id_kuliner`, `nama_kuliner`, `lokasi_kuliner`, `gambar`) VALUES
(1, 'Bebek Sinjay', 'Bangkalan', 'bebek.jpg'),
(2, 'Bebek Songkem', 'Bangkalan', 'Bebek-Songkem.jpg'),
(3, 'Nasi Petis', 'Bangkalan', 'nasi_petis.jpg'),
(4, 'Topak Lodeh', 'Bangkalan', 'topak_ladeh.jpg'),
(5, 'Soto Lorjuk', 'Pamekasan', 'sotolorjuk.jpg'),
(6, 'Kaldu Kokot', 'Sumenep', 'Kaldu-kokot.jpg'),
(7, 'Rujak selingkuh', 'Sumenep', 'rujak selingkuh -sumenep.jpg'),
(8, 'Sate Lalat', 'Pamekasan', 'sate-lalat.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `no_telp` varchar(50) DEFAULT NULL,
  `pesan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pesan`
--

INSERT INTO `tb_pesan` (`id`, `nama`, `email`, `no_telp`, `pesan`) VALUES
(3, 'qeww', 'gwzz@eg.com', '123456', 'Wow');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_wisata`
--

CREATE TABLE `tb_wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama_wisata` varchar(50) NOT NULL,
  `lokasi_wisata` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `jarak` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_wisata`
--

INSERT INTO `tb_wisata` (`id_wisata`, `nama_wisata`, `lokasi_wisata`, `gambar`, `jarak`) VALUES
(1, 'Bukit Palalangan Arosbaya', 'Bangkalan', 'bukit-pelalangan-arosbaya.jpg', '49 km'),
(2, 'Pantai Lon Malang', 'Sampang', 'lon_malang.JPG', '56 Km'),
(3, 'Kebun Bunga Matahari', 'Pamekasan', 'bunga-matahari.jpg', '68 km'),
(4, 'Bukit Tinggi Daramista', 'Sumenep', 'bukit-tinggi.jpg', '91 Km'),
(5, 'Bukit Lampion Beramah', 'Bangkalan', 'bukit-lampion.jpg', '16 Km'),
(6, 'Taman Tectona', 'Sumenep', 'Taman-Tectona.jpg', '88 Km'),
(7, 'Api Tak Kunjung Padam', 'Pamekasan', 'api.jpg', '72 Km'),
(8, 'Puncak Ratu', 'Pamekasan', 'puncak-ratu.jpg', '75 Km');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_akomodasi`
--
ALTER TABLE `tb_akomodasi`
  ADD PRIMARY KEY (`id_akomodasi`);

--
-- Indeks untuk tabel `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `tb_itinerari`
--
ALTER TABLE `tb_itinerari`
  ADD PRIMARY KEY (`id_itinerari`);

--
-- Indeks untuk tabel `tb_kuliner`
--
ALTER TABLE `tb_kuliner`
  ADD PRIMARY KEY (`id_kuliner`);

--
-- Indeks untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_wisata`
--
ALTER TABLE `tb_wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
