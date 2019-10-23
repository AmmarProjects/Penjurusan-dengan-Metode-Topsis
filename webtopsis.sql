-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Okt 2019 pada 08.41
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtopsis`
--

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `alternatif_d`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `alternatif_d` (
`id_uji` int(11)
,`id_alternatif` int(11)
,`dplus` double
,`dminus` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `hasil_akhir`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `hasil_akhir` (
`id_uji` int(11)
,`id_alternatif` int(11)
,`hasil_akhir` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `hasil_bobot`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `hasil_bobot` (
`id_uji` int(11)
,`id_alternatif` int(11)
,`id_bobot` int(11)
,`bobot` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `hasil_matrik`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `hasil_matrik` (
`id_uji` int(11)
,`id_alternatif` int(11)
,`id_bobot` int(11)
,`matrik` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `hasil_minmax`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `hasil_minmax` (
`id_uji` int(11)
,`id_bobot` int(11)
,`hasil_max` double
,`hasil_min` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `hasil_pembagi`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `hasil_pembagi` (
`id_uji` int(11)
,`id_bobot` int(11)
,`hasil_bagi` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `hminus`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `hminus` (
`id_uji` int(11)
,`id_alternatif` int(11)
,`id_bobot` int(11)
,`hminus` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `hplus`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `hplus` (
`id_uji` int(11)
,`id_alternatif` int(11)
,`id_bobot` int(11)
,`hplus` double
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_alternatif`
--

CREATE TABLE `tabel_alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `nm_alternatif` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_alternatif`
--

INSERT INTO `tabel_alternatif` (`id_alternatif`, `nm_alternatif`) VALUES
(1, 'Computer Science'),
(2, 'Multimedia'),
(3, 'Software Enginering'),
(4, 'Information System');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_bobot`
--

CREATE TABLE `tabel_bobot` (
  `id_bobot` int(11) NOT NULL,
  `id_kriteria` int(11) DEFAULT NULL,
  `skala` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_bobot`
--

INSERT INTO `tabel_bobot` (`id_bobot`, `id_kriteria`, `skala`) VALUES
(1, 1, 4),
(2, 2, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_kriteria`
--

CREATE TABLE `tabel_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nm_kriteria` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_kriteria`
--

INSERT INTO `tabel_kriteria` (`id_kriteria`, `nm_kriteria`) VALUES
(1, 'Nilai IP'),
(2, 'Nilai Angket');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_matkul`
--

CREATE TABLE `tabel_matkul` (
  `id_matkul` int(11) NOT NULL,
  `nama_matkul` varchar(50) NOT NULL,
  `id_alternatif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_matkul`
--

INSERT INTO `tabel_matkul` (`id_matkul`, `nama_matkul`, `id_alternatif`) VALUES
(1, 'Pemrograman Game', 2),
(2, 'Grafika Komputer', 2),
(3, 'Sistem Komputer', 1),
(4, 'Pemrograman Berbasis Obyek', 1),
(5, 'Sistem Informasi', 4),
(6, 'Rekayasa Perangkat Lunak', 4),
(7, 'Computer Vision', 3),
(8, 'Sistem Terdistribusi dan Keamanan', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_penilaian`
--

CREATE TABLE `tabel_penilaian` (
  `id_nilai` int(11) NOT NULL,
  `id_alternatif` int(11) DEFAULT NULL,
  `id_bobot` int(11) DEFAULT NULL,
  `nilai` double DEFAULT NULL,
  `id_uji` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_penilaian`
--

INSERT INTO `tabel_penilaian` (`id_nilai`, `id_alternatif`, `id_bobot`, `nilai`, `id_uji`) VALUES
(1, 1, 1, 3.5, 1),
(17, 2, 1, 4, 1),
(18, 3, 1, 3, 1),
(20, 4, 1, 2, 1),
(21, 1, 2, 8, 1),
(22, 2, 2, 16, 1),
(23, 3, 2, 12, 1),
(24, 4, 2, 14, 1),
(41, 1, 1, 2, 2),
(42, 2, 1, 3, 2),
(43, 3, 1, 4, 2),
(44, 4, 1, 2, 2),
(45, 1, 2, 8, 2),
(46, 2, 2, 10, 2),
(47, 3, 2, 12, 2),
(48, 4, 2, 12, 2),
(53, 1, 1, 3.75, 3),
(54, 2, 1, 3.75, 3),
(55, 3, 1, 3.5, 3),
(56, 4, 1, 3, 3),
(57, 1, 2, 3, 3),
(58, 2, 2, 3, 3),
(59, 3, 2, 3, 3),
(60, 4, 2, 3.25, 3),
(69, 1, 1, 3.75, 4),
(70, 2, 1, 4, 4),
(71, 3, 1, 3.75, 4),
(72, 4, 1, 3.5, 4),
(73, 1, 2, 2.75, 4),
(74, 2, 2, 2.5, 4),
(75, 3, 2, 2.5, 4),
(76, 4, 2, 3, 4),
(77, 1, 1, 3.75, 5),
(78, 2, 1, 3.75, 5),
(79, 3, 1, 3.5, 5),
(80, 4, 1, 3.75, 5),
(81, 1, 2, 3.25, 5),
(82, 2, 2, 3.25, 5),
(83, 3, 2, 1.75, 5),
(84, 4, 2, 3.5, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_soal`
--

CREATE TABLE `tabel_soal` (
  `id_soal` int(11) NOT NULL,
  `pertanyaan` varchar(100) NOT NULL,
  `id_alternatif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_soal`
--

INSERT INTO `tabel_soal` (`id_soal`, `pertanyaan`, `id_alternatif`) VALUES
(1, 'Mampu memahami konsep animasi atau game', 2),
(2, 'Mampu memahami tahapan pembuatan animas atau game', 2),
(3, 'Mampu membuat narasi animasi atau game kreatif', 2),
(4, 'Mampu menerapkan algoritma pada game', 2),
(5, 'Mampu dalam menganalisis sistem yang berhubungan dengan visual', 1),
(6, 'Mampu mengintegrasikan proses bisnis kedalam sistem', 1),
(7, 'Mampu memahami cara penggunaan hardware secara mendalam', 1),
(8, 'Mampu menyelesaikan permasalahan rumit', 1),
(9, 'Mampu memahami dalam menganalisis suatu sistem', 4),
(10, 'Mampu memahami dalam menganalisis suatu sistem', 4),
(11, 'Mampu mengembangkan aplikasi berbasis sistem informasi', 4),
(12, 'Memahami penerapan algoritma dalam menyelesaikan masalah', 4),
(13, 'Mampu membangun algoritma komputer dan program komputer', 3),
(14, 'Mampu mengembangkan aplikasi dan sistem komputer berdasarkan rekayasa perangkat lunak', 3),
(15, 'Memahami konsep pemrograman berbasis objek', 3),
(16, 'Mampu memahami manajemen database', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur untuk view `alternatif_d`
--
DROP TABLE IF EXISTS `alternatif_d`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `alternatif_d`  AS  select `hasil_bobot`.`id_uji` AS `id_uji`,`hasil_bobot`.`id_alternatif` AS `id_alternatif`,sqrt(sum(`hplus`.`hplus`)) AS `dplus`,sqrt(sum(`hminus`.`hminus`)) AS `dminus` from ((`hplus` join `hminus`) join `hasil_bobot`) where ((`hplus`.`id_alternatif` = `hasil_bobot`.`id_alternatif`) and (`hplus`.`id_bobot` = `hasil_bobot`.`id_bobot`) and (`hplus`.`id_uji` = `hasil_bobot`.`id_uji`) and (`hminus`.`id_alternatif` = `hasil_bobot`.`id_alternatif`) and (`hminus`.`id_bobot` = `hasil_bobot`.`id_bobot`) and (`hminus`.`id_uji` = `hasil_bobot`.`id_uji`)) group by `hplus`.`id_uji`,`hplus`.`id_alternatif` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `hasil_akhir`
--
DROP TABLE IF EXISTS `hasil_akhir`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `hasil_akhir`  AS  select `alternatif_d`.`id_uji` AS `id_uji`,`alternatif_d`.`id_alternatif` AS `id_alternatif`,(`alternatif_d`.`dminus` / (`alternatif_d`.`dminus` + `alternatif_d`.`dplus`)) AS `hasil_akhir` from `alternatif_d` group by `alternatif_d`.`id_uji`,`alternatif_d`.`id_alternatif` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `hasil_bobot`
--
DROP TABLE IF EXISTS `hasil_bobot`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `hasil_bobot`  AS  select `hasil_matrik`.`id_uji` AS `id_uji`,`hasil_matrik`.`id_alternatif` AS `id_alternatif`,`hasil_matrik`.`id_bobot` AS `id_bobot`,(`hasil_matrik`.`matrik` * `tabel_bobot`.`skala`) AS `bobot` from (`hasil_matrik` join `tabel_bobot`) where (`hasil_matrik`.`id_bobot` = `tabel_bobot`.`id_bobot`) group by `hasil_matrik`.`id_uji`,`hasil_matrik`.`id_bobot`,`hasil_matrik`.`id_alternatif` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `hasil_matrik`
--
DROP TABLE IF EXISTS `hasil_matrik`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `hasil_matrik`  AS  select `hasil_pembagi`.`id_uji` AS `id_uji`,`tabel_penilaian`.`id_alternatif` AS `id_alternatif`,`hasil_pembagi`.`id_bobot` AS `id_bobot`,(`tabel_penilaian`.`nilai` / `hasil_pembagi`.`hasil_bagi`) AS `matrik` from (`hasil_pembagi` join `tabel_penilaian`) where ((`tabel_penilaian`.`id_uji` = `hasil_pembagi`.`id_uji`) and (`tabel_penilaian`.`id_bobot` = `hasil_pembagi`.`id_bobot`)) group by `hasil_pembagi`.`id_uji`,`hasil_pembagi`.`id_bobot`,`tabel_penilaian`.`id_alternatif` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `hasil_minmax`
--
DROP TABLE IF EXISTS `hasil_minmax`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `hasil_minmax`  AS  select `hasil_bobot`.`id_uji` AS `id_uji`,`hasil_bobot`.`id_bobot` AS `id_bobot`,max(`hasil_bobot`.`bobot`) AS `hasil_max`,min(`hasil_bobot`.`bobot`) AS `hasil_min` from `hasil_bobot` group by `hasil_bobot`.`id_uji`,`hasil_bobot`.`id_bobot` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `hasil_pembagi`
--
DROP TABLE IF EXISTS `hasil_pembagi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `hasil_pembagi`  AS  select `tabel_penilaian`.`id_uji` AS `id_uji`,`tabel_penilaian`.`id_bobot` AS `id_bobot`,sqrt(sum(pow(`tabel_penilaian`.`nilai`,2))) AS `hasil_bagi` from `tabel_penilaian` group by `tabel_penilaian`.`id_bobot`,`tabel_penilaian`.`id_uji` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `hminus`
--
DROP TABLE IF EXISTS `hminus`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `hminus`  AS  select `hasil_bobot`.`id_uji` AS `id_uji`,`hasil_bobot`.`id_alternatif` AS `id_alternatif`,`hasil_bobot`.`id_bobot` AS `id_bobot`,pow((`hasil_bobot`.`bobot` - `hasil_minmax`.`hasil_min`),2) AS `hminus` from (`hasil_bobot` join `hasil_minmax`) where ((`hasil_bobot`.`id_bobot` = `hasil_minmax`.`id_bobot`) and (`hasil_minmax`.`id_uji` = `hasil_bobot`.`id_uji`)) group by `hasil_bobot`.`id_uji`,`hasil_bobot`.`id_bobot`,`hasil_bobot`.`id_alternatif` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `hplus`
--
DROP TABLE IF EXISTS `hplus`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `hplus`  AS  select `hasil_bobot`.`id_uji` AS `id_uji`,`hasil_bobot`.`id_alternatif` AS `id_alternatif`,`hasil_bobot`.`id_bobot` AS `id_bobot`,pow((`hasil_bobot`.`bobot` - `hasil_minmax`.`hasil_max`),2) AS `hplus` from (`hasil_bobot` join `hasil_minmax`) where ((`hasil_bobot`.`id_bobot` = `hasil_minmax`.`id_bobot`) and (`hasil_minmax`.`id_uji` = `hasil_bobot`.`id_uji`)) group by `hasil_bobot`.`id_uji`,`hasil_bobot`.`id_bobot`,`hasil_bobot`.`id_alternatif` ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_alternatif`
--
ALTER TABLE `tabel_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indeks untuk tabel `tabel_bobot`
--
ALTER TABLE `tabel_bobot`
  ADD PRIMARY KEY (`id_bobot`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indeks untuk tabel `tabel_kriteria`
--
ALTER TABLE `tabel_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `tabel_matkul`
--
ALTER TABLE `tabel_matkul`
  ADD PRIMARY KEY (`id_matkul`),
  ADD KEY `id_alternatif` (`id_alternatif`);

--
-- Indeks untuk tabel `tabel_penilaian`
--
ALTER TABLE `tabel_penilaian`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_alternatif` (`id_alternatif`),
  ADD KEY `id_bobot` (`id_bobot`);

--
-- Indeks untuk tabel `tabel_soal`
--
ALTER TABLE `tabel_soal`
  ADD PRIMARY KEY (`id_soal`),
  ADD KEY `id_alternatif` (`id_alternatif`);

--
-- Indeks untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_alternatif`
--
ALTER TABLE `tabel_alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tabel_bobot`
--
ALTER TABLE `tabel_bobot`
  MODIFY `id_bobot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tabel_kriteria`
--
ALTER TABLE `tabel_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tabel_matkul`
--
ALTER TABLE `tabel_matkul`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tabel_penilaian`
--
ALTER TABLE `tabel_penilaian`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT untuk tabel `tabel_soal`
--
ALTER TABLE `tabel_soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tabel_bobot`
--
ALTER TABLE `tabel_bobot`
  ADD CONSTRAINT `tabel_bobot_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `tabel_kriteria` (`id_kriteria`);

--
-- Ketidakleluasaan untuk tabel `tabel_matkul`
--
ALTER TABLE `tabel_matkul`
  ADD CONSTRAINT `tabel_matkul_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `tabel_alternatif` (`id_alternatif`);

--
-- Ketidakleluasaan untuk tabel `tabel_penilaian`
--
ALTER TABLE `tabel_penilaian`
  ADD CONSTRAINT `tabel_penilaian_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `tabel_alternatif` (`id_alternatif`),
  ADD CONSTRAINT `tabel_penilaian_ibfk_2` FOREIGN KEY (`id_bobot`) REFERENCES `tabel_bobot` (`id_bobot`);

--
-- Ketidakleluasaan untuk tabel `tabel_soal`
--
ALTER TABLE `tabel_soal`
  ADD CONSTRAINT `tabel_soal_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `tabel_alternatif` (`id_alternatif`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
