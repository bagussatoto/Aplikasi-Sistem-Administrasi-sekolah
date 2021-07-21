-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2018 at 03:18 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sia_integrasi_coba_4`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi_harian`
--

CREATE TABLE `absensi_harian` (
  `id_absen_harian` int(10) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `keterangan` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi_harian`
--

INSERT INTO `absensi_harian` (`id_absen_harian`, `nisn`, `tgl_mulai`, `tgl_selesai`, `keterangan`) VALUES
(1, '1234567888', '2018-09-13', '2018-09-14', 'Health Check'),
(2, '1234568090', '2018-10-22', '2018-10-26', 'Lomba Cerdas Cermat');

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(5) NOT NULL,
  `password` varchar(50) NOT NULL,
  `NIP` varchar(20) DEFAULT NULL,
  `id_jabatan` int(5) DEFAULT NULL,
  `nisn` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `password`, `NIP`, `id_jabatan`, `nisn`) VALUES
(1, 'kepsek', '14523001', 1, NULL),
(2, 'admin', '145232677', 2, NULL),
(3, 'pegawai', '14523299', 3, NULL),
(4, 'guru', '14523271', 4, NULL),
(5, 'konseling', '13523143', 5, NULL),
(6, 'kesiswaan', '13523062', 6, NULL),
(7, 'kurikulum', '13523096', 7, NULL),
(8, 'siswa', NULL, 8, '1234567816'),
(9, 'pembimbing', '13523134', 9, NULL),
(10, 'karyawan', '13523555', 10, NULL),
(11, 'gurupiket', '13523267', 11, NULL),
(12, '55555550', NULL, 8, '55555550'),
(13, 'siswa', NULL, 8, '1234567900'),
(14, 'siswa', NULL, 8, '1234567900');

-- --------------------------------------------------------

--
-- Table structure for table `akun_siswa`
--

CREATE TABLE `akun_siswa` (
  `id_akun_siswa` int(3) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `password` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun_siswa`
--

INSERT INTO `akun_siswa` (`id_akun_siswa`, `nisn`, `password`) VALUES
(1, '123', 22),
(5, '565', 565),
(7, '787', 787);

-- --------------------------------------------------------

--
-- Table structure for table `bayar`
--

CREATE TABLE `bayar` (
  `tgl_bayar` date NOT NULL,
  `jmlh_bayar` int(10) NOT NULL,
  `tgl_habis_bayar` date NOT NULL,
  `status_bayar` enum('sudah bayar','belum bayar') NOT NULL,
  `id_siswa` int(5) NOT NULL,
  `id_kelas_tambahan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_ulang`
--

CREATE TABLE `daftar_ulang` (
  `id_daftar_ulang` int(3) NOT NULL,
  `id_tahun_ajaran` int(10) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `nomor_pendaftar_ujian` int(10) NOT NULL,
  `no_pendaftar` int(10) NOT NULL,
  `surat_pernyataan` tinyint(1) NOT NULL,
  `rapor` tinyint(1) NOT NULL,
  `formulir_pendataan` tinyint(1) NOT NULL,
  `tanda_pembayaran` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `danamandiri`
--

CREATE TABLE `danamandiri` (
  `id_danamandiri` int(3) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `keterangan` varchar(25) NOT NULL,
  `nominal` int(20) NOT NULL,
  `jenis_tagihan` varchar(50) NOT NULL,
  `batas_akhir_pembayaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deskripsi_nilai`
--

CREATE TABLE `deskripsi_nilai` (
  `id_deskripsi` int(3) NOT NULL,
  `NIlai_atas` int(3) NOT NULL,
  `Nilai_bawah` int(3) NOT NULL,
  `predikat` varchar(40) NOT NULL,
  `deskripsi` text NOT NULL,
  `mapel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dummy`
--

CREATE TABLE `dummy` (
  `id` int(1) NOT NULL,
  `nama` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dummy`
--

INSERT INTO `dummy` (`id`, `nama`) VALUES
(1, 'nadya');

-- --------------------------------------------------------

--
-- Table structure for table `ekstrakurikuler`
--

CREATE TABLE `ekstrakurikuler` (
  `id_ekstrakurikuler` int(5) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `id_jenis_kls_tambahan` int(5) NOT NULL,
  `id_jadwal_ekskul` int(5) NOT NULL,
  `request_ekskul` varchar(20) NOT NULL,
  `thn_ajaran` varchar(15) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `id_tahun_ajaran` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ekstrakurikuler`
--

INSERT INTO `ekstrakurikuler` (`id_ekstrakurikuler`, `nisn`, `id_jenis_kls_tambahan`, `id_jadwal_ekskul`, `request_ekskul`, `thn_ajaran`, `semester`, `id_tahun_ajaran`) VALUES
(14, '0031211478', 3, 5, '', '2016 - 2017', 'Genap', 1),
(15, '0031211478', 2, 4, '', '2013 - 2014', 'Genap', 1),
(26, '5130114039', 2, 4, '', '2016 - 2017', 'Genap', 1),
(27, '5130114039', 3, 5, '', '2016 - 2017', 'Genap', 1),
(28, '0159521452', 1, 2, '', '2016 - 2017', 'Genap', 1),
(29, '0159521452', 3, 5, '', '2016 - 2017', 'Genap', 1),
(34, '0188526521', 1, 1, '', '2016 - 2017', 'Genap', 1),
(35, '0188526521', 2, 4, '', '2016 - 2017', 'Genap', 1),
(36, '0188526521', 3, 5, '', '2016 - 2017', 'Genap', 1),
(41, '0001254879', 1, 2, '', '2016 - 2017', 'Genap', 1),
(42, '0001254879', 2, 4, '', '2016 - 2017', 'Genap', 1),
(43, '0001254879', 3, 5, '', '2016 - 2017', 'Genap', 1),
(44, '0001254879', 4, 6, '', '2016 - 2017', 'Genap', 1),
(45, '0059512014', 1, 1, '', '2016 - 2017', 'Genap', 1),
(46, '0059512014', 2, 4, '', '2016 - 2017', 'Genap', 1),
(47, '0059512014', 3, 5, '', '2016 - 2017', 'Genap', 1),
(49, '0084746890', 1, 2, '', '2016 - 2017', 'Genap', 1),
(51, '0172013964', 6, 7, '', '2016 - 2017', 'Genap', 1),
(54, '0147100123', 6, 7, '', '2016 - 2017', 'Genap', 1),
(55, '0162145632', 1, 1, '', '2016 - 2017', 'Genap', 1),
(56, '0162145632', 2, 4, '', '2016 - 2017', 'Genap', 1),
(57, '0162145632', 5, 3, '', '2016 - 2017', 'Genap', 1),
(58, '0162145632', 6, 7, '', '2016 - 2017', 'Genap', 1),
(59, '0023314997', 5, 3, '', '2016 - 2017', 'Genap', 1),
(60, '0023314997', 6, 7, '', '2016 - 2017', 'Genap', 1),
(61, '0101245125', 1, 2, '', '2016 - 2017', 'Genap', 1),
(62, '0101245125', 2, 4, '', '2016 - 2017', 'Genap', 1),
(63, '0118544745', 1, 1, '', '2016 - 2017', 'Genap', 1),
(64, '0118544745', 3, 5, '', '2016 - 2017', 'Genap', 1),
(65, '0059512014', 2, 4, '', '2017 - 2018', 'Ganjil', 1),
(66, '0059512014', 5, 3, '', '2017 - 2018', 'Ganjil', 1),
(67, '0126652145', 4, 6, '', '2014 - 2015', 'Ganjil', 1),
(68, '1234567833', 1, 0, '', '2016 - 2017', 'Ganjil', 1),
(69, '1234567833', 2, 0, '', '2016 - 2017', 'Ganjil', 1),
(70, '1234567816', 1, 5, '', '2010 - 2011', 'Ganjil', 2),
(72, '1234567816', 1, 5, '', '2016 - 2017', 'Ganjil', 2);

-- --------------------------------------------------------

--
-- Table structure for table `form_daftarulang_kenaikan`
--

CREATE TABLE `form_daftarulang_kenaikan` (
  `id_form_daftarulang_kenaikan` int(2) NOT NULL,
  `nama_kolom` varchar(50) NOT NULL,
  `atribut` varchar(100) DEFAULT NULL,
  `nilai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `form_daftarulang_kenaikan`
--

INSERT INTO `form_daftarulang_kenaikan` (`id_form_daftarulang_kenaikan`, `nama_kolom`, `atribut`, `nilai`) VALUES
(1, 'surat_pernyataan', 'Surat Pernyataan', 0),
(2, 'rapor', 'Rapor', 1),
(3, 'formulir_pendataan', 'Formulir Pendataan', 0),
(4, 'tanda_pembayaran', 'Tanda Pembayaran', 0),
(5, 'berkas_1', '', 0),
(6, 'berkas_2', '', 0),
(7, 'berkas_3', '', 0),
(8, 'berkas_4', '', 0),
(9, 'berkas_5', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `form_daftarulang_ppdb`
--

CREATE TABLE `form_daftarulang_ppdb` (
  `id_form_daftarulang_ppdb` int(10) NOT NULL,
  `nama_kolom` varchar(50) NOT NULL,
  `atribut` varchar(50) DEFAULT NULL,
  `nilai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_daftarulang_ppdb`
--

INSERT INTO `form_daftarulang_ppdb` (`id_form_daftarulang_ppdb`, `nama_kolom`, `atribut`, `nilai`) VALUES
(1, 'nomor_pendaftar', 'Nomor Pendaftaran', 1),
(2, 'surat_pernyataan', 'Surat Pernyataan', 0),
(3, 'form_pendataan', 'Formulir Pendataan', 0),
(4, 'tanda_pembayaran', 'Tanda Bukti Pembayaran', 0),
(5, 'berkas_1', '', 0),
(6, 'berkas_2', '', 0),
(7, 'berkas_3', '', 0),
(8, 'berkas_4', '', 0),
(9, 'berkas_5', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `form_pendaftaran_mutasi_masuk`
--

CREATE TABLE `form_pendaftaran_mutasi_masuk` (
  `id_form_pendaftaran_mutasi_masuk` int(2) NOT NULL,
  `nama_kolom` varchar(30) NOT NULL,
  `atribut` varchar(50) NOT NULL,
  `nilai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_pendaftaran_mutasi_masuk`
--

INSERT INTO `form_pendaftaran_mutasi_masuk` (`id_form_pendaftaran_mutasi_masuk`, `nama_kolom`, `atribut`, `nilai`) VALUES
(1, 'nisn', 'NISN', 1),
(2, 'nama_pendaftar_mutasi', 'Nama', 1),
(3, 'tempat_lahir', 'Tempat Lahir', 1),
(4, 'tanggal_lahir', 'Tanggal Lahir', 1),
(5, 'jenis_kelamin', 'Jenis Kelamin', 0),
(6, 'agama', 'Agama', 0),
(7, 'alamat', 'Alamat', 0),
(8, 'no_telepon', 'Nomor Telepon', 0),
(9, 'sekolah_asal', 'Asal Sekolah', 0),
(10, 'tahun_kelulusan', 'Tahun Kelulusan', 0),
(11, 'nilai_un_bahasaindonesia', 'Nilai UN Bahasa Indonesia', 0),
(12, 'nilai_un_matematika', 'Nilai UN Matematika', 0),
(13, 'nilai_un_ipa', 'Nilai UN IPA', 0),
(14, 'jumlah_nilai_un', 'Total Nilai UN', 0),
(15, 'surat_ket_nisn', 'Surat Keterangan NISN', 0),
(16, 'fc_buku_rapor', 'Fotokopi Buku Rapor', 0),
(17, 'fc_skhun', 'Fotokopi SKHUN', 0),
(18, 'surat_ket_bangku', 'Surat Keterangan Bangku Kosong', 0),
(19, 'surat_ket_pindah', 'Surat Keterangan Pindah', 0),
(20, 'skck_kepsek', 'SKCK Kepala Sekolah', 0),
(21, 'berkas_1', '', 0),
(22, 'berkas_2', '', 0),
(23, 'berkas_3', '', 0),
(24, 'berkas_4', '', 0),
(25, 'berkas_5', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `form_ppdb`
--

CREATE TABLE `form_ppdb` (
  `id_form_ppdb` int(2) NOT NULL,
  `nama_kolom` varchar(30) NOT NULL,
  `atribut` varchar(100) DEFAULT NULL,
  `nilai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `form_ppdb`
--

INSERT INTO `form_ppdb` (`id_form_ppdb`, `nama_kolom`, `atribut`, `nilai`) VALUES
(1, 'nomor_pendaftaran', 'Nomor Pendaftaran', 0),
(2, 'no_usbn', 'Nomor USBN', 0),
(3, 'nisn_pendaftar', 'NISN', 1),
(4, 'nama', 'Nama Lengkap', 1),
(5, 'jenis_kelamin', 'Jenis Kelamin', 1),
(6, 'tempat_lahir', 'Tempat Lahir', 0),
(7, 'tanggal_lahir', 'Tanggal Lahir', 0),
(8, 'alamat', 'Alamat', 0),
(9, 'asal_sekolah', 'Asal Sekolah', 0),
(10, 'tahun_lulus', 'Tahun Lulus', 0),
(11, 'nilai_un_ind', 'Nilai UN B. Indonesia', 0),
(12, 'nilai_un_mat', 'Nilai UN Matematika', 0),
(13, 'nilai_un_ipa', 'Nilai UN IPA', 0),
(14, 'nilai_prestasi', 'Nilai Prestasi', 0),
(15, 'nilai_un_nun', 'Total Nilai', 0),
(16, 'domisili', 'Domisili', 0),
(17, 'bukti_pengajuan_daftar', 'Berkas yang dilampirkan: Bukti Pengajuan Daftar', 0),
(18, 'surat_ket_penambah_nilai', 'Berkas yang dilampirkan: Surat Keterangan Penambah Nilai', 0),
(19, 'surat_ket_nisn', 'Berkas yang dilampirkan: Surat Keterangan NISN', 0),
(20, 'fc_ijazah', 'Berkas yang dilampirkan: Fotocopy Ijazah', 0),
(21, 'fc_rapor', 'Berkas yang dilampirkan: Fotocopy Rapor', 0),
(22, 'skhun', 'Berkas yang dilampirkan: SKHUN', 0),
(23, 'fc_skhun', 'Berkas yang dilampirkan: Fotocopy SKHUN', 0),
(24, 'skck_kepsek', 'Berkas yang dilampirkan: Surat Keterangan Berkelakuan Baik Kepala Sekolah', 0),
(25, 'fc_kk', 'Berkas yang dilampirkan: Fotocopy Kartu Keluarga', 0),
(26, 'fc_akta_lahir', 'Berkas yang dilampirkan: Fotocopy Akta Lahir', 0),
(27, 'surat_ket_rt', 'Berkas yang dilampirkan: Surat Keterangan RT', 0),
(28, 'surat_keterangan_napza', 'Berkas yang dilampirkan: Surat Keterangan Napza', 0),
(29, 'berkas_1', '', 0),
(30, 'berkas_2', '', 0),
(31, 'berkas_3', '', 0),
(32, 'berkas_4', '', 0),
(33, 'berkas_5', '', 0),
(34, 'pilihan_sekolah_1', 'Pilihan Sekolah 1', 0),
(35, 'pilihan_sekolah_2', 'Pilihan Sekolah 2', 0),
(36, 'pilihan_sekolah_3', 'Pilihan Sekolah 3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `form_ujian`
--

CREATE TABLE `form_ujian` (
  `id_form_ujian` int(2) NOT NULL,
  `nama_kolom` varchar(50) NOT NULL,
  `atribut` varchar(100) DEFAULT NULL,
  `nilai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_ujian`
--

INSERT INTO `form_ujian` (`id_form_ujian`, `nama_kolom`, `atribut`, `nilai`) VALUES
(1, 'ujian_1', 'Tes Administrasi', 1),
(2, 'ujian_2', 'Tes Kesehatan', 1),
(3, 'ujian_3', 'Tes Ujian Tertulis', 1),
(4, 'ujian_4', 'Tes Psikotes', 1),
(5, 'ujian_5', 'Tes Hafalan Al Quran', 1),
(6, 'ujian_6', 'Tes Wawancara', 1),
(7, 'ujian_7', '', 0),
(8, 'ujian_8', '', 0),
(9, 'ujian_9', '', 0),
(10, 'ujian_10', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hari_rentang`
--

CREATE TABLE `hari_rentang` (
  `id_rentang_jam` int(10) NOT NULL,
  `jam_ke` varchar(2) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu') NOT NULL,
  `id_tahun_ajaran` int(10) NOT NULL,
  `durasi` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hari_rentang`
--

INSERT INTO `hari_rentang` (`id_rentang_jam`, `jam_ke`, `jam_mulai`, `jam_selesai`, `hari`, `id_tahun_ajaran`, `durasi`) VALUES
(1, '1', '07:00:00', '09:30:00', 'Kamis', 2, '00:00:00'),
(2, '1', '07:30:00', '09:30:00', 'Senin', 2, '00:00:00'),
(3, '1', '07:30:00', '09:30:00', 'Senin', 1, '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(5) NOT NULL,
  `nama_jabatan` varchar(15) NOT NULL,
  `url` varchar(255) NOT NULL,
  `menuakses` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`, `url`, `menuakses`) VALUES
(1, 'Kepala Sekolah', 'kepsek', '1,2,3,4,5,6,7'),
(2, 'Superadmin', 'superadmin', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49'),
(3, 'Pegawai', 'pegawai', '35,36,37'),
(4, 'Guru', 'Guru', '16,17,22,23,24,26,27,28'),
(5, 'Konseling', 'konseling', '38,39,46,47,48,49,50'),
(6, 'Kesiswaan', 'kesiswaan', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15'),
(7, 'Kurikulum', 'kurikulum', '16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35'),
(8, 'Siswa', 'siswa', ''),
(9, 'Pembimbing', 'nonakademik', '38,39,40,41,42,43,44'),
(10, 'Karyawan', 'karyawan', '35,36,37,38,39,40'),
(11, 'Guru Piket', 'gurupiket', '16,17,21,23');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan_has_tugas`
--

CREATE TABLE `jabatan_has_tugas` (
  `jabatan_id_jabatan` int(5) NOT NULL,
  `tugas_id_tugas` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_ekskul`
--

CREATE TABLE `jadwal_ekskul` (
  `id_jadwal_ekskul` int(5) NOT NULL,
  `id_jenis_kls_tambahan` int(5) NOT NULL,
  `id_pembimbing` int(5) NOT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu') NOT NULL,
  `jumlah_peserta` int(5) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_ekskul`
--

INSERT INTO `jadwal_ekskul` (`id_jadwal_ekskul`, `id_jenis_kls_tambahan`, `id_pembimbing`, `hari`, `jumlah_peserta`, `jam_mulai`, `jam_selesai`, `tempat`, `keterangan`) VALUES
(4, 2, 2, 'Selasa', 0, '10:00:00', '12:30:00', 'sekolah', ''),
(5, 1, 1, 'Sabtu', 0, '08:00:00', '12:00:00', 'Sekolah', '');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_mapel`
--

CREATE TABLE `jadwal_mapel` (
  `NIP` varchar(20) NOT NULL,
  `id_namamapel` int(10) NOT NULL,
  `id_tahun_ajaran` int(10) NOT NULL,
  `id_kelas_reguler_berjalan` int(10) NOT NULL,
  `id_jadwal_mapel` int(10) NOT NULL,
  `id_rentang_jam` int(10) NOT NULL,
  `id_kelas_reguler` int(10) NOT NULL,
  `id_prkh` int(10) NOT NULL,
  `id_jam_mgjr` int(10) NOT NULL,
  `jam_ke` varchar(2) NOT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_piket_guru`
--

CREATE TABLE `jadwal_piket_guru` (
  `id_jdwl_piket_guru` int(10) NOT NULL,
  `NIP` varchar(20) NOT NULL,
  `id_tahun_ajaran` int(10) NOT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_piket_guru`
--

INSERT INTO `jadwal_piket_guru` (`id_jdwl_piket_guru`, `NIP`, `id_tahun_ajaran`, `hari`) VALUES
(13, '14523267', 2, 'Senin'),
(14, '87283282', 2, 'Selasa'),
(15, '13523099', 2, 'Senin'),
(18, '12345', 1, 'Senin'),
(19, '14523267', 1, 'Selasa'),
(20, '13523143', 1, 'Rabu'),
(21, '13523135', 1, 'Senin'),
(22, '14523267', 1, 'Kamis');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_tambahan`
--

CREATE TABLE `jadwal_tambahan` (
  `NIP` varchar(20) NOT NULL,
  `id_kelas_tambahan` int(10) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `tgl_tambahan` date NOT NULL,
  `id_jadwal_tambahan` int(10) NOT NULL,
  `id_tahun_ajaran` int(10) NOT NULL,
  `id_namamapel` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_tambahan`
--

INSERT INTO `jadwal_tambahan` (`NIP`, `id_kelas_tambahan`, `jam_mulai`, `jam_selesai`, `tgl_tambahan`, `id_jadwal_tambahan`, `id_tahun_ajaran`, `id_namamapel`) VALUES
('12345', 14, '10:00:00', '12:30:00', '2018-09-23', 7, 1, 4),
('14523267', 13, '08:00:00', '10:00:00', '2018-09-27', 8, 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `jam_mengajar`
--

CREATE TABLE `jam_mengajar` (
  `id_jam_mgjr` int(10) NOT NULL,
  `NIP` varchar(20) NOT NULL,
  `id_tahun_ajaran` int(10) NOT NULL,
  `id_namamapel` int(10) NOT NULL,
  `jml_jam_mgjr` int(10) NOT NULL,
  `jatah_minim_mgjr` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jam_mengajar`
--

INSERT INTO `jam_mengajar` (`id_jam_mgjr`, `NIP`, `id_tahun_ajaran`, `id_namamapel`, `jml_jam_mgjr`, `jatah_minim_mgjr`) VALUES
(6, '13523267', 1, 10, 0, 24),
(7, '13523179', 1, 7, 0, 24),
(8, '14523271', 1, 9, 0, 24),
(9, '12523001', 1, 12, 0, 24),
(10, '14523267', 1, 8, 0, 24),
(11, '123', 1, 4, 0, 24),
(12, '12345', 1, 4, 0, 24),
(13, '13523138', 1, 6, 0, 24),
(14, '123', 1, 7, 0, 24),
(15, '989234', 1, 13, 0, 24),
(16, '135231399', 1, 12, 0, 24),
(17, '13523138', 1, 11, 0, 24),
(18, '13523069', 1, 6, 0, 24),
(19, '13523136', 1, 4, 0, 24),
(20, '1231233412', 1, 5, 0, 24),
(21, '123', 1, 4, 0, 20);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kls_tambahan`
--

CREATE TABLE `jenis_kls_tambahan` (
  `id_jenis_kls_tambahan` int(5) NOT NULL,
  `jenis_kls_tambahan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_kls_tambahan`
--

INSERT INTO `jenis_kls_tambahan` (`id_jenis_kls_tambahan`, `jenis_kls_tambahan`) VALUES
(1, 'Marching Band'),
(2, 'Badminton');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_nilai_akhir`
--

CREATE TABLE `jenis_nilai_akhir` (
  `id_jenis_na` int(11) NOT NULL,
  `Jenis_na` varchar(20) NOT NULL,
  `kode_na` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_nilai_akhir`
--

INSERT INTO `jenis_nilai_akhir` (`id_jenis_na`, `Jenis_na`, `kode_na`) VALUES
(2, 'Pengetahuan', 1),
(3, 'Keterampilan', 2);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pelanggaran`
--

CREATE TABLE `jenis_pelanggaran` (
  `id_jenis_pelanggaran` int(20) NOT NULL,
  `tgl_kejadian` date NOT NULL,
  `bentuk_pelanggaran` varchar(50) NOT NULL,
  `sanksi` varchar(50) NOT NULL,
  `no_pasal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kaldik`
--

CREATE TABLE `kaldik` (
  `id_kaldik` int(4) NOT NULL,
  `nama_kaldik` varchar(30) NOT NULL,
  `simbol_kaldik` text NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kaldik`
--

INSERT INTO `kaldik` (`id_kaldik`, `nama_kaldik`, `simbol_kaldik`, `tgl_awal`, `tgl_akhir`) VALUES
(1, 'Ujian Akhir Semester', '', '2018-08-05', '2018-08-19'),
(2, 'Ujian Akhir Semester', '', '2018-08-05', '2018-08-19'),
(3, 'Ujian Akhir Semester', '', '2018-08-05', '2018-08-19'),
(4, 'AA', '', '2018-11-04', '2018-11-03'),
(5, 'Ujian Akhir Semester', '', '2018-08-31', '2018-09-11');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_nilai`
--

CREATE TABLE `kategori_nilai` (
  `id_kategorinilai` int(2) NOT NULL,
  `kategori_nilai` varchar(20) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_nilai`
--

INSERT INTO `kategori_nilai` (`id_kategorinilai`, `kategori_nilai`, `bobot`) VALUES
(2, 'Ulangan Harian', 20),
(3, 'UTS', 30),
(4, 'Ujian Akhir Semester', 30),
(7, 'Tugas', 20);

-- --------------------------------------------------------

--
-- Table structure for table `kelas_berjalan`
--

CREATE TABLE `kelas_berjalan` (
  `id_kelas_kerjalan` int(10) NOT NULL,
  `id_tahun_ajaran` int(10) NOT NULL,
  `wali_kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelas_reguler`
--

CREATE TABLE `kelas_reguler` (
  `id_kelas_reguler` int(10) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `jenjang` enum('7','8','9') NOT NULL,
  `kuota_kelas_reguler` int(5) NOT NULL,
  `jumlah_kelas_reguler` int(5) NOT NULL,
  `id_tahun_ajaran` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas_reguler`
--

INSERT INTO `kelas_reguler` (`id_kelas_reguler`, `nama_kelas`, `jenjang`, `kuota_kelas_reguler`, `jumlah_kelas_reguler`, `id_tahun_ajaran`) VALUES
(1, '7-A', '7', 0, 2, 1),
(2, '7-B', '7', 0, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kelas_reguler_berjalan`
--

CREATE TABLE `kelas_reguler_berjalan` (
  `id_kelas_reguler_berjalan` int(10) NOT NULL,
  `wali_kelas` varchar(50) NOT NULL,
  `id_kelas_reguler` int(10) NOT NULL,
  `id_tahun_ajaran` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas_reguler_berjalan`
--

INSERT INTO `kelas_reguler_berjalan` (`id_kelas_reguler_berjalan`, `wali_kelas`, `id_kelas_reguler`, `id_tahun_ajaran`) VALUES
(1, '', 1, 1),
(2, '', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kelas_tambahan`
--

CREATE TABLE `kelas_tambahan` (
  `id_kelas_tambahan` int(10) NOT NULL,
  `nama_kelas_tambahan` varchar(10) NOT NULL,
  `jenjang_kls_tambahan` enum('7','8','9') NOT NULL,
  `kuota_kelas` int(10) NOT NULL,
  `jumlah_kelas_tambahan` int(5) NOT NULL,
  `id_jenis_kls_tambahan` int(5) NOT NULL,
  `id_tahun_ajaran` int(10) NOT NULL,
  `hasil_tpm` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelas_tambahan_berjalan`
--

CREATE TABLE `kelas_tambahan_berjalan` (
  `id_kelas_tambahan_berjalan` int(10) NOT NULL,
  `id_kelas_tambahan` int(10) NOT NULL,
  `nisn` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ketentuan_ppdb`
--

CREATE TABLE `ketentuan_ppdb` (
  `id_ketentuan` int(10) NOT NULL,
  `nama_ketentuan` varchar(100) NOT NULL,
  `isi_ketentuan` text NOT NULL,
  `tgl_berlaku` date NOT NULL,
  `id_tahun_ajaran` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ketentuan_ppdb`
--

INSERT INTO `ketentuan_ppdb` (`id_ketentuan`, `nama_ketentuan`, `isi_ketentuan`, `tgl_berlaku`, `id_tahun_ajaran`) VALUES
(20, 'Ketentuan Penerimaan Peserta Didik Baru Tahun Ajaran 2015/ 2016', '02-IP_Address.pdf', '2015-09-26', 1),
(22, 'Ketentuan Penerimaan Peserta Didik Baru Tahun 2016/ 2017', '04-Model_OSI_vs_TCP_IP.pdf', '2016-09-27', 2),
(23, 'Ketentuan Daftar Ulang Penerimaan Peserta Didik Baru Tahun 2016/ 2017 Bagian 4', '04-Model_OSI_vs_TCP_IP_(ekstra).pdf', '2017-09-13', 2),
(24, 'Ketentuan Pendaftaran Penerimaan Peserta Didik Baru Tahun Ajaran 2017/ 2018', '8-NetworkLayer-Extras2.pdf', '2017-10-04', 1),
(25, 'coba ketentuan', '7stepspublic-110220190942-phpapp01.pdf', '2019-07-15', 1),
(27, 'ketentuan baru coba', '', '2018-02-02', 1),
(29, 'ketentuan ppdb ujian nasional', '01-SistemBasisDataTerdistribusi1.pdf', '2018-08-31', 2);

-- --------------------------------------------------------

--
-- Table structure for table `keterlambatan`
--

CREATE TABLE `keterlambatan` (
  `id_keterlambatan` int(15) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `tgl_terlambat` date NOT NULL,
  `jmlh_terlambat` int(20) NOT NULL,
  `keterangan` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keterlambatan`
--

INSERT INTO `keterlambatan` (`id_keterlambatan`, `nisn`, `tgl_terlambat`, `jmlh_terlambat`, `keterangan`) VALUES
(1, '1234567898', '2018-09-13', 0, 'macet'),
(2, '1234567898', '2018-09-14', 0, 'ban bocor'),
(3, '1234567900', '2018-10-19', 0, 'macet');

-- --------------------------------------------------------

--
-- Table structure for table `klinik_un`
--

CREATE TABLE `klinik_un` (
  `id_klinik_un` int(10) NOT NULL,
  `nama_siswa` varchar(20) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `req_materi` text NOT NULL,
  `jumlah_peserta` int(5) NOT NULL,
  `status_req` enum('Belum Direspon','Sudah Direspon') NOT NULL,
  `tanggal` date DEFAULT NULL,
  `respon` text NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `NIP` varchar(20) DEFAULT NULL,
  `id_tahun_ajaran` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klinik_un`
--

INSERT INTO `klinik_un` (`id_klinik_un`, `nama_siswa`, `kelas`, `req_materi`, `jumlah_peserta`, `status_req`, `tanggal`, `respon`, `nisn`, `NIP`, `id_tahun_ajaran`) VALUES
(1, 'Budi Haryanto', '7-A', 'matematika', 15, 'Belum Direspon', NULL, '', '1234567900', NULL, 1),
(2, 'Budi Haryanto', '7-A', 'apaan', 15, 'Belum Direspon', NULL, '', '1234567900', NULL, 1),
(3, 'Budi Haryanto', '7-A', 'apaan', 15, 'Belum Direspon', NULL, '', '1234567900', NULL, 1),
(4, 'Budi Haryanto', '7-A', 'materi dong', 8, 'Belum Direspon', NULL, '', '1234567900', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum`
--

CREATE TABLE `kurikulum` (
  `id_kurikulum` int(3) NOT NULL,
  `nama_kurikulum` varchar(20) NOT NULL,
  `nama_filekur` varchar(50) NOT NULL,
  `tahunajaran_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `k_dasar`
--

CREATE TABLE `k_dasar` (
  `id_kd` int(10) NOT NULL,
  `kode_kd` varchar(75) NOT NULL,
  `deskripsi_kd` varchar(255) NOT NULL,
  `id_mapel` int(10) NOT NULL,
  `id_jenis_na` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_backend`
--

CREATE TABLE `login_backend` (
  `id_user` int(11) NOT NULL,
  `username` int(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_backend`
--

INSERT INTO `login_backend` (`id_user`, `username`, `password`) VALUES
(1, 123456, 'qwerty123'),
(2, 123, '111'),
(3, 1234567, 'qwerty1234');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(10) NOT NULL,
  `id_namamapel` int(10) NOT NULL,
  `nama_mapel2` varchar(50) NOT NULL,
  `kkm` int(3) NOT NULL,
  `jam_belajar` int(2) NOT NULL,
  `id_kelas_reguler` int(10) NOT NULL,
  `id_tahun_ajaran` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `id_namamapel`, `nama_mapel2`, `kkm`, `jam_belajar`, `id_kelas_reguler`, `id_tahun_ajaran`) VALUES
(1, 4, '', 65, 24, 1, 0),
(2, 4, '', 65, 24, 2, 0),
(3, 5, '', 70, 24, 1, 0),
(4, 5, '', 70, 24, 2, 0),
(5, 6, '', 70, 24, 1, 0),
(6, 6, '', 70, 24, 2, 0),
(7, 7, '', 78, 24, 1, 0),
(8, 7, '', 78, 24, 2, 0),
(9, 10, '', 60, 24, 1, 0),
(10, 10, '', 60, 24, 2, 0),
(11, 11, '', 78, 24, 1, 0),
(12, 11, '', 78, 24, 2, 0),
(13, 12, '', 78, 24, 1, 0),
(14, 12, '', 78, 24, 2, 0),
(15, 13, '', 70, 24, 1, 0),
(16, 13, '', 70, 24, 2, 0),
(17, 4, '', 70, 24, 3, 0),
(18, 4, '', 70, 24, 4, 0),
(19, 5, '', 65, 24, 3, 0),
(20, 5, '', 65, 24, 4, 0),
(21, 6, '', 72, 24, 3, 0),
(22, 6, '', 72, 24, 4, 0),
(23, 7, '', 80, 24, 3, 0),
(24, 7, '', 80, 24, 4, 0),
(25, 4, '', 78, 24, 5, 0),
(26, 4, '', 78, 24, 6, 0),
(27, 5, '', 70, 24, 5, 0),
(28, 5, '', 70, 24, 6, 0),
(29, 6, '', 72, 24, 5, 0),
(30, 6, '', 72, 24, 6, 0),
(31, 10, '', 60, 24, 3, 0),
(32, 10, '', 60, 24, 4, 0),
(33, 7, '', 80, 24, 5, 0),
(34, 7, '', 80, 24, 6, 0),
(35, 10, '', 70, 24, 5, 0),
(36, 10, '', 70, 24, 6, 0),
(37, 11, '', 70, 24, 3, 0),
(38, 11, '', 70, 24, 4, 0),
(39, 12, '', 78, 24, 3, 0),
(40, 12, '', 78, 24, 4, 0),
(41, 13, '', 70, 24, 3, 0),
(42, 13, '', 70, 24, 4, 0),
(43, 11, '', 80, 24, 5, 0),
(44, 11, '', 80, 24, 6, 0),
(45, 12, '', 78, 22, 5, 0),
(46, 12, '', 78, 22, 6, 0),
(47, 13, '', 78, 22, 5, 0),
(48, 13, '', 78, 22, 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mutasi`
--

CREATE TABLE `mutasi` (
  `id_mutasi` int(10) NOT NULL,
  `tgl_mutasi` date NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `sekolah_asal_tujuan` varchar(100) NOT NULL,
  `id_tahun_ajaran` int(10) NOT NULL,
  `id_siswa_mutasi_keluar` int(10) NOT NULL,
  `id_pendaftar_mutasi` int(10) NOT NULL,
  `nisn` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `namamapel`
--

CREATE TABLE `namamapel` (
  `id_namamapel` int(10) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL,
  `warna` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `namamapel`
--

INSERT INTO `namamapel` (`id_namamapel`, `nama_mapel`, `warna`) VALUES
(4, 'Matematika', '#0000ff'),
(5, 'Fisika', '#d38fe8'),
(6, 'Biologi', '#00ff00'),
(7, 'PPkn', '#ba8c48'),
(10, 'Kesenian', '#e89696'),
(11, 'Bahasa Inggris', '#a331c6'),
(12, 'Bahasa Indonesia', '#eddeb8'),
(13, 'Sosiologi', '#cccccc'),
(14, 'UPACARA', '#ff0000');

-- --------------------------------------------------------

--
-- Table structure for table `nilaiekskul`
--

CREATE TABLE `nilaiekskul` (
  `id_nilaiekskul` int(5) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `id_jenis_kls_tambahan` int(5) NOT NULL,
  `nilai_ekskul` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_akhir`
--

CREATE TABLE `nilai_akhir` (
  `id_nilai_akhir` int(10) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `id_mapel` int(10) NOT NULL,
  `id_kelas_reguler_berjalan` int(10) NOT NULL,
  `nilai_akhir` int(3) NOT NULL,
  `total_nilai_akhir` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_siswa`
--

CREATE TABLE `nilai_siswa` (
  `id_nilai_siswa` int(11) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `kategori_nilai_id` int(11) NOT NULL,
  `jenis_na_id` int(11) NOT NULL,
  `mapel_id` int(11) NOT NULL,
  `Nilai_siswa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orangtua_wali`
--

CREATE TABLE `orangtua_wali` (
  `id_orangtua` int(4) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `gelar_depan_ayah` varchar(10) DEFAULT NULL,
  `gelar_belakang_ayah` varchar(10) DEFAULT NULL,
  `tempat_lahir_ayah` varchar(15) NOT NULL,
  `tanggal_lahir_ayah` date DEFAULT NULL,
  `kewarganegaraan_ayah` varchar(30) DEFAULT NULL,
  `agama_ayah` enum('Islam','Kristen','Katholik','Hindu','Budha','Lainnya') NOT NULL,
  `pendidikan_ayah` enum('Tidak Sekolah','Sekolah Dasar','Sekolah Menengah Pertama','Sekolah Menengah Atas','D1','D2','D3','D4','S1','S2','S3') NOT NULL,
  `pekerjaan_ayah` enum('Tidak Bekerja','Nelayan','Petani','Peternak','PNS/ TNI/ POLRI','Karyawan Swasta','Pedagang Kecil','Pedagang Besar','Wiraswasta','Wirausaha','Buruh','Pensiunan') NOT NULL,
  `penghasilan_ayah` enum('Kurang dari Rp. 499.999','Rp. 500.000 sd Rp. 999.999','Rp. 1.000.000 sd Rp. 1.999.999','Rp. 2.000.000 sd Rp. 3.999.999','Rp. 4.000.000 sd Rp. 9.999.999','Lebih dari Rp. 10.000.000','Tidak Ada') NOT NULL,
  `ayah_berkebutuhan_khusus` enum('Tidak','Netra','Rungu','Grahita Ringan','Grahita Sedang','Daksa Ringan','Daksa Sedang','Laras','Wicara','Tuna Ganda','Hiperaktif','Cerdas Istimewa','Kesulitan Belajar','Narkoba','Indigo','Down Syndrome','Autis','Terbelakang','Bencana Alam/ Sosial','Tidak Mampu Ekonomi','Lainnya') DEFAULT NULL,
  `no_telepon_hp_ayah` varchar(15) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `gelar_depan_ibu` varchar(10) DEFAULT NULL,
  `gelar_belakang_ibu` varchar(10) DEFAULT NULL,
  `tempat_lahir_ibu` varchar(15) NOT NULL,
  `tanggal_lahir_ibu` date DEFAULT NULL,
  `kewarganegaraan_ibu` varchar(30) DEFAULT NULL,
  `agama_ibu` enum('Islam','Kristen','Katholik','Hindu','Budha','Lainnya') NOT NULL,
  `pendidikan_ibu` enum('Tidak Sekolah','Sekolah Dasar','Sekolah Menengah Pertama','Sekolah Menengah Atas','D1','D2','D3','D4','SI','S2','S3') NOT NULL,
  `pekerjaan_ibu` enum('Tidak Bekerja','Nelayan','Petani','Peternak','PNS/ TNI/ POLRI','Karyawan Swasta','Pedagang Kecil','Pedagang Besar','Wiraswasta','Wirausaha','Buruh','Pensiunan') NOT NULL,
  `penghasilan_ibu` enum('Kurang dari Rp. 499.999','Rp. 500.000 sd Rp. 999.999','Rp. 1.000.000 sd Rp. 1.999.999','Rp. 2.000.000 sd Rp. 3.999.999','Rp. 4.000.000 sd Rp. 9.999.999','Lebih dari Rp. 10.000.000','Tidak Ada') NOT NULL,
  `ibu_berkebutuhan_khusus` enum('Tidak','Netra','Rungu','Grahita Ringan','Grahita Sedang','Daksa Ringan','Daksa Sedang','Laras','Wicara','Tuna Ganda','Hiperaktif','Cerdas Istimewa','Bakat Istimewa','Kesulitan Belajar','Narkoba','Indigo','Down Syndrome','Autis','Terbelakang','Bencana Alam/ Sosial','Tidak Mampu Ekonomi','Lainnya') DEFAULT NULL,
  `nomor_telepon_ibu` varchar(15) NOT NULL,
  `nama_wali` varchar(30) DEFAULT NULL,
  `tempat_lahir_wali` varchar(15) DEFAULT NULL,
  `tanggal_lahir_wali` date DEFAULT NULL,
  `pendidikan_wali` enum('Tidak Sekola','Sekolah Dasar','Sekolah Menengah Pertama','Sekolah Menengah Atas','D1','D2','D3','D4','S1','S2','S3') DEFAULT NULL,
  `kewarganegaraan_wali` varchar(30) DEFAULT NULL,
  `agama_wali` enum('Islam','Kristen','Katholik','Hindu','Budha','Lainnya') DEFAULT NULL,
  `pekerjaan_wali` enum('Tidak Bekerja','Nelayan','Petani','Peternak','PNS/ TNI/ POLRI','Karyawan Swasta','Pedagang Kecil','Pedagang Besar','Wiraswasta','Wirausaha','Buruh','Pensiunan') DEFAULT NULL,
  `penghasilan_wali` enum('Kurang dari Rp. 499.999','Rp. 500.000 sd Rp. 999.999','Rp. 1.000.000 sd Rp. 1.999.999','Rp. 2.000.000 sd 3.999.999','Rp. 4.000.000 sd Rp. 9.999.999','Lebih dari Rp 10.000.000','Tidak Ada') DEFAULT NULL,
  `alamat_wali` varchar(150) NOT NULL,
  `no_telepon_hp_wali` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orangtua_wali`
--

INSERT INTO `orangtua_wali` (`id_orangtua`, `nama_ayah`, `gelar_depan_ayah`, `gelar_belakang_ayah`, `tempat_lahir_ayah`, `tanggal_lahir_ayah`, `kewarganegaraan_ayah`, `agama_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `ayah_berkebutuhan_khusus`, `no_telepon_hp_ayah`, `nama_ibu`, `gelar_depan_ibu`, `gelar_belakang_ibu`, `tempat_lahir_ibu`, `tanggal_lahir_ibu`, `kewarganegaraan_ibu`, `agama_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `ibu_berkebutuhan_khusus`, `nomor_telepon_ibu`, `nama_wali`, `tempat_lahir_wali`, `tanggal_lahir_wali`, `pendidikan_wali`, `kewarganegaraan_wali`, `agama_wali`, `pekerjaan_wali`, `penghasilan_wali`, `alamat_wali`, `no_telepon_hp_wali`) VALUES
(1, 'hehe', '', '', '', '0000-00-00', '', '', '', '', '', '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '0', '', '', '0000-00-00', '', '', '', '', '', '', '0'),
(2, 'taufik', '', '', '', '0000-00-00', '', '', '', '', '', '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '0', '', '', '0000-00-00', '', '', '', '', '', '', '0'),
(3, 'gunawan', '', '', '', '0000-00-00', '', '', '', '', '', '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '0', '', '', '0000-00-00', '', '', '', '', '', '', '0'),
(4, 'rudi', '', '', '', '0000-00-00', '', '', '', '', '', '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '0', '', '', '0000-00-00', '', '', '', '', '', '', '0'),
(5, 'budiarto', '', '', '', '0000-00-00', '', '', '', '', '', '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '0', '', '', '0000-00-00', '', '', '', '', '', '', '0'),
(6, 'ridwan', '', '', '', '0000-00-00', '', '', '', '', '', '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '0', '', '', '0000-00-00', '', '', '', '', '', '', '0'),
(7, 'pranata', '', '', '', '0000-00-00', '', '', '', '', '', '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '0', '', '', '0000-00-00', '', '', '', '', '', '', '0'),
(8, 'sulayakin', '', '', '', '0000-00-00', '', '', '', '', '', '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '0', '', '', '0000-00-00', '', '', '', '', '', '', '0'),
(9, 'iqbal', '', '', '', '0000-00-00', '', '', '', '', '', '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '0', '', '', '0000-00-00', '', '', '', '', '', '', '0'),
(10, 'hendrawan', '', '', '', '0000-00-00', '', '', '', '', '', '', '0', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '0', '', '', '0000-00-00', '', '', '', '', '', '', '0'),
(11, 'dodi', '<div style', '<div style', '<div style=', '0000-00-00', '<div style=', 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', 'Tidak', '<div style=', '<div style=', '<div style', '<div style', '<div style=', '0000-00-00', '<div style=', 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', 'Tidak', '<div style=', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(12, 'lutfi', '<div style', '<div style', '<div style=', '0000-00-00', '<div style=', 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', 'Tidak', '<div style=', '<div style=', '<div style', '<div style', '<div style=', '0000-00-00', '<div style=', 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', 'Tidak', '<div style=', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(13, 'ridwan kamil', 'doktor', '', 'bumiayu', '0000-00-00', '', 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', 'Tidak', '087878909', 'rosita', '', '', 'jogja', '2018-01-25', '', 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', 'Tidak', '087898', '', '', '0000-00-00', 'D1', '', 'Islam', 'Peternak', 'Kurang dari Rp. 499.999', '', ''),
(14, 'revi bapak', 'doktor', '', 'sragen', '2018-01-10', 'indonesia', 'Kristen', 'D1', 'Pedagang Besar', 'Rp. 500.000 sd Rp. 999.999', 'Tidak', '08789098789', '', '', '', '', '0000-00-00', '', 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', 'Tidak', '', '', '', '0000-00-00', 'D1', '', 'Islam', 'Peternak', 'Kurang dari Rp. 499.999', '', ''),
(15, 'rudi hartanto', '', '', '', '0000-00-00', '', 'Islam', 'D2', 'PNS/ TNI/ POLRI', 'Rp. 500.000 sd Rp. 999.999', 'Tidak', '08122342527', 'Melly', '', '', '', '0000-00-00', '', 'Islam', 'Sekolah Menengah Atas', 'Pedagang Kecil', 'Rp. 500.000 sd Rp. 999.999', 'Tidak', '0876789', '', '', '0000-00-00', 'Sekolah Menengah Pertama', '', 'Islam', 'Wirausaha', 'Kurang dari Rp. 499.999', '', ''),
(16, 'reyhan ', '', '', 'bumiayu', '2018-02-20', '', 'Islam', 'D3', 'PNS/ TNI/ POLRI', 'Rp. 500.000 sd Rp. 999.999', 'Tidak', '', 'wendah', '', '', 'solo', '2018-02-15', '', 'Islam', 'D1', 'Tidak Bekerja', 'Tidak Ada', 'Tidak', '', '', '', '0000-00-00', 'D1', '', 'Islam', 'Karyawan Swasta', 'Rp. 1.000.000 sd Rp. 1.999.999', '', ''),
(17, 'dendi', '', '', 'tangerang', '2018-02-22', '', 'Islam', 'S1', 'Wiraswasta', 'Rp. 2.000.000 sd Rp. 3.999.999', 'Tidak', '', 'bella', '', '', '', '0000-00-00', '', 'Islam', 'D2', 'PNS/ TNI/ POLRI', 'Rp. 500.000 sd Rp. 999.999', 'Tidak', '', 'wahyu', '', '0000-00-00', 'D2', '', 'Islam', 'Pedagang Kecil', '', '', ''),
(18, 'Jason Pearce', '', '', 'SRAGEN', '0000-00-00', '', 'Kristen', 'S3', 'PNS/ TNI/ POLRI', 'Rp. 2.000.000 sd Rp. 3.999.999', 'Tidak', '08789098789', 'Resita', '', '', 'BUMIAYU', '2018-02-07', '', 'Kristen', 'D2', 'PNS/ TNI/ POLRI', 'Rp. 1.000.000 sd Rp. 1.999.999', 'Indigo', '080989999', 'Siregar', '', '0000-00-00', 'Sekolah Menengah Atas', '', 'Islam', 'Wirausaha', 'Rp. 1.000.000 sd Rp. 1.999.999', 'JAKAL KM 12,5', ''),
(19, 'siregar', '', '', '', '0000-00-00', '', 'Kristen', 'Sekolah Menengah Pertama', 'PNS/ TNI/ POLRI', 'Rp. 1.000.000 sd Rp. 1.999.999', 'Tidak', '', 'merry', '', '', '', '0000-00-00', '', 'Islam', 'D3', 'Pedagang Kecil', 'Rp. 1.000.000 sd Rp. 1.999.999', 'Tidak', '', 'reymond', '', '0000-00-00', 'S1', '', 'Islam', 'Karyawan Swasta', '', '', ''),
(20, 'yudi', '', '', 'Bumiayu', '0000-00-00', '', 'Islam', 'S1', 'PNS/ TNI/ POLRI', 'Rp. 4.000.000 sd Rp. 9.999.999', NULL, '08789098789', 'Wezi', '', '', 'Solo', '0000-00-00', '', 'Islam', 'D3', 'Karyawan Swasta', 'Rp. 2.000.000 sd Rp. 3.999.999', NULL, '08888767988', 'Rendra', '', '0000-00-00', NULL, '', NULL, NULL, NULL, 'JAKAL KM 19', '08187654321'),
(21, 'Darmawangsa', '', '', 'Bumiayu', '2018-02-22', '', 'Islam', 'D3', 'PNS/ TNI/ POLRI', 'Rp. 4.000.000 sd Rp. 9.999.999', NULL, '09876536678', 'Qiqi', '', '', 'sragen', '0000-00-00', '', 'Budha', 'D3', 'Pedagang Besar', 'Rp. 1.000.000 sd Rp. 1.999.999', NULL, '0987675443', 'Noer', '', '0000-00-00', NULL, '', NULL, NULL, NULL, 'Bantul', '098776544'),
(22, 'dwi priyatno', NULL, NULL, 'balikpapan', NULL, NULL, 'Islam', 'S1', 'Karyawan Swasta', 'Lebih dari Rp. 10.000.000', 'Tidak', '00', 'wien', NULL, NULL, 'nunukan', NULL, NULL, 'Islam', 'D3', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'j', 'k'),
(23, 'Orang Tua Siswa Baru', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', '', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(24, 'Orang Tua Siswa Baru', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', '', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(25, 'Orang Tua Siswa Baru', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', '', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(26, 'Orang Tua Siswa Baru', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', '', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(27, 'Orang Tua Siswa Baru', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', '', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(28, 'Orang Tua Siswa Baru', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', '', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(29, 'Orang Tua Siswa Baru', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', '', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(30, 'Orang Tua Siswa Baru', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', '', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(31, 'Orang Tua Siswa Baru', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', '', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(32, 'Orang Tua Siswa Baru', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', '', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(33, 'Orang Tua Siswa Baru', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', '', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(34, 'Orang Tua Siswa Baru', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', '', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(35, 'Orang Tua Siswa Baru', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', '', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(36, 'Orang Tua Siswa Baru', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', '', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(37, 'Orang Tua Siswa Baru', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', '', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(38, 'Orang Tua Siswa Baru', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', '', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(39, 'Orang Tua Siswa Baru', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', '', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(40, 'Orang Tua Siswa Baru', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', '', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(41, 'Orang Tua Siswa Baru', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', '', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(42, 'Orang Tua Siswa Baru', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', '', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(43, 'Orang Tua Siswa Baru', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', '', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(44, 'Orang Tua Siswa Baru', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', '', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(45, 'Orang Tua Siswa Baru', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', '', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(46, 'Orang Tua Siswa Baru', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', '', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(47, 'Orang Tua Siswa Baru', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', '', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(48, 'Orang Tua Siswa Baru', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', '', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(49, 'Orang Tua Siswa Baru', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', '', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(50, 'ayah gita moli', NULL, NULL, 'yogyakarta', NULL, NULL, 'Islam', 'S1', 'Wirausaha', 'Lebih dari Rp. 10.000.000', NULL, '08', 'ibu gita moli', NULL, NULL, 'yogyakarta', NULL, NULL, 'Islam', 'D4', 'Wirausaha', 'Rp. 2.000.000 sd Rp. 3.999.999', NULL, '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'as', '12'),
(51, 'ayah gita moli', '', '', 'yogyakarta', NULL, 'indonesia', 'Islam', 'S1', 'Wirausaha', 'Lebih dari Rp. 10.000.000', 'Tidak', '08', 'ibu gita moli', '', NULL, 'yogyakarta', '0000-00-00', '', 'Islam', 'D4', 'Wirausaha', 'Rp. 2.000.000 sd Rp. 3.999.999', 'Tidak', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(52, 'ayah gita moli', '', '', 'yogyakarta', NULL, 'indonesia', 'Islam', 'S1', 'Wirausaha', 'Lebih dari Rp. 10.000.000', 'Tidak', '08', 'ibu gita moli', '', NULL, 'yogyakarta', '0000-00-00', '', 'Islam', 'D4', 'Wirausaha', 'Rp. 2.000.000 sd Rp. 3.999.999', 'Tidak', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(53, '', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', '', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', 'wali', '', NULL, '', '', 'Islam', 'Tidak Bekerja', NULL, '', ''),
(54, 'Orang Tua Siswa Baru', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', '', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(55, 'Orang Tua Siswa Baru', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', '', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(56, 'Orang Tua Siswa Baru', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', '', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(57, 'Orang Tua Siswa Baru', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', '', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(58, 'Orang Tua Siswa Baru', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', '', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(59, 'ayah gita moli', '', '', 'yogyakarta', NULL, '', 'Islam', 'S1', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', 'Tidak', '08121212122', 'ibu gita moli', '', NULL, 'jakarta', '1982-08-05', '', 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', 'Tidak', '0000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(60, 'Orang Tua Siswa Baru', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', '', NULL, NULL, '', NULL, NULL, 'Islam', 'Tidak Sekolah', 'Tidak Bekerja', 'Kurang dari Rp. 499.999', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `passing_grade`
--

CREATE TABLE `passing_grade` (
  `id_grade` int(10) NOT NULL,
  `id_tahun_ajaran` int(10) NOT NULL,
  `kategori` enum('Dalam Kota','Luar Kota') NOT NULL,
  `nilai` float NOT NULL,
  `tgl_berlaku` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passing_grade`
--

INSERT INTO `passing_grade` (`id_grade`, `id_tahun_ajaran`, `kategori`, `nilai`, `tgl_berlaku`) VALUES
(1, 1, 'Luar Kota', 280, '2017-08-11'),
(2, 2, 'Dalam Kota', 100, '2017-08-22'),
(4, 2, 'Dalam Kota', 280.3, '2017-08-09'),
(5, 2, 'Dalam Kota', 190, '2017-08-20'),
(7, 2, 'Dalam Kota', 288.5, '2017-09-02'),
(8, 2, 'Luar Kota', 250.8, '2017-09-05'),
(9, 2, 'Dalam Kota', 200.9, '2017-09-27'),
(10, 2, 'Luar Kota', 280, '2017-11-06'),
(11, 3, 'Dalam Kota', 230.9, '2017-11-26'),
(12, 3, 'Luar Kota', 250.9, '2017-11-29'),
(13, 1, 'Dalam Kota', 80, '2018-03-03'),
(14, 2, 'Luar Kota', 80, '2018-08-19');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `NIP` varchar(20) NOT NULL,
  `nuptk` varchar(50) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `No_SK` varchar(20) NOT NULL,
  `Jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `Golongan` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `kontak` varchar(20) NOT NULL,
  `kompetensi` varchar(10) NOT NULL,
  `Agama` enum('Islam','Kristen','Khatolik','Budha','Hindu','Lainnya') NOT NULL,
  `tempatlahir` varchar(255) NOT NULL,
  `TTL` date NOT NULL,
  `kode_guru` int(3) NOT NULL,
  `foto` text NOT NULL,
  `TMT_capeg` date NOT NULL,
  `Pendidikan` enum('D1','D2','D3','D4','S1','S2','S3') NOT NULL,
  `Status` enum('Pegawai','Guru','','') NOT NULL,
  `Status_pensiun` varchar(255) NOT NULL,
  `nama_panggilan` varchar(255) NOT NULL,
  `pangkat` varchar(50) NOT NULL,
  `matapelajaran` varchar(255) DEFAULT NULL,
  `namaayah` varchar(50) DEFAULT NULL,
  `tempatlahirayah` varchar(255) DEFAULT NULL,
  `tanggallahirayah` date DEFAULT NULL,
  `agamaayah` enum('Islam','Kristen','Katholik','Budha','Hindu','Lainnya') DEFAULT NULL,
  `nomorayah` varchar(20) DEFAULT NULL,
  `pekerjaanayah` varchar(255) DEFAULT NULL,
  `alamatayah` text,
  `namaibu` varchar(50) DEFAULT NULL,
  `tempatlahiribu` varchar(255) DEFAULT NULL,
  `tanggallahiribu` date DEFAULT NULL,
  `agamaibu` date DEFAULT NULL,
  `nomoribu` varchar(20) DEFAULT NULL,
  `pekerjaanibu` varchar(255) DEFAULT NULL,
  `alamatibu` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`NIP`, `nuptk`, `Nama`, `No_SK`, `Jenis_kelamin`, `Golongan`, `alamat`, `kontak`, `kompetensi`, `Agama`, `tempatlahir`, `TTL`, `kode_guru`, `foto`, `TMT_capeg`, `Pendidikan`, `Status`, `Status_pensiun`, `nama_panggilan`, `pangkat`, `matapelajaran`, `namaayah`, `tempatlahirayah`, `tanggallahirayah`, `agamaayah`, `nomorayah`, `pekerjaanayah`, `alamatayah`, `namaibu`, `tempatlahiribu`, `tanggallahiribu`, `agamaibu`, `nomoribu`, `pekerjaanibu`, `alamatibu`) VALUES
('110222337', '', 'Rohmatullah Alamin', '89239129399', '', 'III/A', 'Jalan gajah mada', '08524511555', '', 'Islam', '', '1956-01-30', 9998, '', '2019-01-30', 'D3', 'Guru', 'pensiun', 'Roh', 'Guru Muda', 'Bahasa Indonesia', '', '', '0000-00-00', 'Islam', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', ''),
('1111', '923842934823498', 'Sumbawa Mukaido', '218371238', '', 'II/A', 'jakdas', '08080002020', '', 'Islam', 'Padang', '1969-11-09', 1, '', '2017-11-10', 'D3', '', '', 'Sum', 'Guru Madya', 'Bahasa Inggris', 'Rahmat ', 'kalimantan', '2018-02-07', 'Islam', '08656536373647', 'Petani', 'Jalan Kaliurang', 'harmini', 'sleman', '2018-02-07', '0000-00-00', '92938123812', 'Ibu Rumah Tangga', 'Jalan Lintas Melawai'),
('11111', '', 'Ini Kurikulum', '123123123', '', 'IV/A', 'Jl. Kaliurang 14,5', '085244424242', '', 'Islam', '', '1967-12-21', 9, 'potrait99.jpg', '2017-12-08', 'S1', 'Guru', '', 'Kurikulum', 'Guru Madya', 'Penjaskes', '', '', '0000-00-00', 'Islam', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', ''),
('111222333', '', 'Rohmatullah', '89239129399', '', 'III/A', 'Jalan gajah mada', '08524511555', '', 'Islam', '', '1950-01-30', 999, '', '2019-01-30', 'D3', 'Guru', 'pensiun', 'Roh', 'Guru Muda', 'Bahasa Inggris', '', '', '0000-00-00', 'Islam', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', ''),
('1221129', '', 'Rusida ', '9888988899', '', 'IV/A', 'asdasd', '12312312', '', 'Islam', '', '1959-01-30', 6559, '', '2018-01-30', 'S3', 'Guru', '', 'Rus', 'Guru Muda', 'IPA', '', '', '0000-00-00', 'Islam', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', ''),
('12222', '21312222', 'Munawaroh', '1231231', '', 'III/B', 'Jalan Oevang Oeray', '1213123123', '', 'Islam', 'Kalimantan', '1959-12-18', 2, '11.jpg', '1993-09-10', 'S1', '', '', 'Muna', 'Guru Madya', 'Bahasa Indonesia', 'Aayah', 'kalimantan', '1951-02-14', 'Kristen', '085726262626', 'Petani aja', 'Jalan Lintas Melawi', 'ibu goro', 'sleman', '2018-02-03', '0000-00-00', '085724242424', 'Aapa aja', 'Jalan Kaliurang'),
('123', '', 'ACAH RIANTO, S,Pd', '123123', '', 'III/B', '32131', '21323', '', '', 'Sintang', '1987-11-11', 1231231, '2.jpg', '2017-12-02', 'D3', 'Guru', '', '123123', 'Guru  Muda', 'Matematika', 'asdasd', 'asdasd', '2018-01-09', 'Islam', '21312', '123aseqw', 'asdasd', '13213', 'asdsda', '2018-01-17', '0000-00-00', '085724242424', 'buruh', 'asdasdasd'),
('1231233412', '123123736473', 'Ridho Akbar Dermawan', '18237238137837', '', 'IV/A', 'Jalan Lintas Utara', '092837823', '', 'Islam', 'Sintang', '1989-11-09', 887788, '', '2017-11-09', 'S2', 'Guru', '', 'Ridho', 'Guru Madya', 'SKI', 'Ridho', 'Sintang', '2017-11-09', 'Islam', '082323728378', 'BUMN', 'Jalan Kaliurang', 'Ida', 'Kalimantan', '2017-11-09', '0000-00-00', '129831238', 'Ibu Rumah Tangga', 'Jalan Kaliurang'),
('12312334121', '12312373647378', 'Ridho Akbar Mulawaraman', '18237238137837', '', 'IV/A', 'Jalan Lintas Utara', '092837823', '', 'Islam', 'Sintang', '1958-11-01', 88778899, '', '2017-11-09', 'S2', 'Guru', '', 'Ridho', 'Guru Madya', 'SKI', 'Ridho', 'Sintang', '2017-11-09', 'Islam', '082323728378', 'BUMN', 'Jalan Kaliurang', 'Ida', 'Kalimantan', '2017-11-09', '0000-00-00', '129831238', 'Ibu Rumah Tangga', 'Jalan Kaliurang'),
('12345', '', 'akmal joshua', '12312 1763172 18923 ', '', 'III/A', 'jl kaliurang km 7,8 sinduharjo', '085726241111', '', 'Islam', 'sleman', '1958-01-02', 2, '', '2012-06-01', 'S1', 'Guru', 'pensiun', 'akmal', 'pranata madya', 'IPA', 'paijo', 'sleman', '1958-01-01', 'Islam', '085726262626', 'Petani', 'sleman', 'harmini', 'sleman', '1965-01-05', '0000-00-00', '085724242424', 'buruh', 'sleman'),
('123456', '', 'paijo', 'A5576767', '', 'IIIB', 'jl kaliurang', '085723232323', '', 'Islam', '', '1994-12-05', 3, '', '2004-12-01', 'S1', 'Guru', '', 'paijo', 'Guru Muda', 'IPA', '', '', '0000-00-00', 'Islam', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', ''),
('12523001', '', 'Joko ', '111', '', '1', '', '', '', 'Islam', '', '1980-08-28', 0, '', '0000-00-00', 'S3', 'Guru', '', 'joko', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('13313131', '', 'Muhammad Baharudin', '21982198288121', '', 'II/A', 'Jalan Kaliurang 14,5', '08080002020', '', 'Islam', '', '1995-04-04', 15, 'potrait.jpg', '2017-04-04', 'D3', 'Guru', '', 'Udin', 'Pranata Muda', 'Kesenian', '', '', '0000-00-00', 'Islam', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', ''),
('13523000', '0', 'gery', '0', '', '1', 'w', 'k', 'k', 'Islam', 'jkt', '2018-08-02', 2, '', '2018-08-16', 'D3', 'Guru', 'blm', 'geri', 'as', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('13523062', '', 'Nadya Indi Rahesti', '567890', '', 'jajaja', 'jakal', '08292929', 'jajaja', 'Islam', '', '2017-12-13', 1, '4.jpg', '2017-12-05', 'S1', 'Pegawai', 'jajajaja', 'Bu Aya', 'jajajaja', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('13523069', '', 'Drs. Dodi Ahmad Shahrudin', '12831231', '', 'III/A', 'asdasd asd asdasd', '12323', '', 'Kristen', '', '1967-12-22', 11, '3.jpg', '2017-11-22', '', 'Guru', '', 'Dodi', 'Guru  Muda', '', '', '', '0000-00-00', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', ''),
('13523096', '', 'Mia Puspa Pertiwi', '567891', '', 'uauauaua', 'jakal', '789789', 'uuuuu', 'Islam', '', '2017-12-17', 2, '', '2017-12-26', 'S1', 'Pegawai', 'uuu', 'Bu Mia', 'yyyyy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('13523099', '', 'Annisa Dian Pertiwi', '67890', '', 'uauaua', 'jakal', '896886', 'jaja', 'Islam', '', '2017-12-19', 3, '', '2017-12-06', 'S1', 'Guru', 'uauaua', 'Bu Dian', 'uiaiaia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('13523111', '', 'Anggraeni Dias Saputri', '6276312371', '', 'IV/B', 'Jl. Bibis Raya, Tamantirto, Kasihan, Bantul, Daerah Istimewa Yogyakarta 55183, Indonesia', '0897464736', '', 'Kristen', '', '1958-09-07', 5, 'potrait2.jpg', '2018-02-08', 'D3', 'Guru', 'pensiun', 'anggrek', 'Guru  Muda', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('13523120', '', 'Ridwan Mulawarman', '988736746847', '', 'II/A', 'JLn. MT.Haryono', '12313123123', '', 'Kristen', 'Padang', '1975-12-13', 23, '4.jpg', '2000-10-14', '', '', '', 'Ridwan', 'Guru Muda', 'IPA', 'Rahmat ', 'Yogyakarta', '1951-12-18', 'Kristen', '08656536373647', 'Petani', 'Jalan Kaliurang km 14.5', 'Sutinah', 'Solo', '1955-12-15', '0000-00-00', '0862532632635', 'Ibu Rumah Tangga', 'Jalan Kaliurang km 14.5'),
('13523134', '', 'Luthfi Anggy Kurniawan', '887878', '', 'III/A', 'jksdhaksjdas das das das', '123123', '', 'Hindu', '', '1987-09-01', 55, '3.jpg', '2017-09-16', 'D3', 'Guru', '', 'Luthfi', '', '', '', '', '0000-00-00', 'Islam', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', ''),
('13523135', '123123123', 'Dr. Aulia Ahmad Urfan, S.Pd., M.Pd.', '12345678', '', 'IV/A', 'Jl. Stadion, Maguwoharjo, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281, Indonesia', '087646374847', '', 'Islam', 'Kalimantan', '1976-10-05', 1, '41.jpg', '1998-10-05', 'S3', 'Guru', '', 'Urfan', 'Penata Muda', 'Matematika', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1352313599', '', 'MoMon', '123123', '', 'II/A', 'kljijoij', '123123', '', 'Hindu', '', '1995-09-08', 98, '3.jpg', '2017-09-09', 'S1', 'Guru', '', '12312', '', '', '', '', '0000-00-00', 'Islam', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', ''),
('13523136', '', 'Drs. Fikri Abdillah Fakhrudin', '726373664', '', 'II/A', 'Jalan Jalan', '09383938', '', 'Islam', '', '1995-11-15', 33, '4.jpg', '2017-11-02', 'S1', 'Guru', '', 'Fikri', '', '', '', '', '0000-00-00', 'Islam', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', ''),
('13523138', '', 'Alfandya', '1238273', '', 'III/A', 'ajsdj asdasd ', '8996', '', 'Islam', '', '1967-07-14', 223, '1.jpg', '2017-10-09', 'D3', 'Guru', '', 'alfan', 'Guru Madya', '', '', '', '0000-00-00', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', ''),
('13523139', '', 'Aulia Ahmad Urfan, S.Ag', '12839123', '', 'III/A', 'Jalan Khatulistiwa no.4', '12323', '', '', '', '1987-10-26', 123123, '22.jpg', '2018-02-04', '', '', '', 'Brai', 'Penata Muda', 'IPS', '', '', '0000-00-00', 'Islam', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', ''),
('135231399', '', 'Cak Lontong', '123123123', '', 'IV/A', 'Jalan Kaliurang', '123132323', '', 'Kristen', '', '1986-02-27', 87, '', '2018-01-27', 'S2', 'Guru', '', 'Lontong', '', '', '', '', '0000-00-00', 'Islam', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', ''),
('13523143', '', 'Novendra Yoga Saputra 555', '193281293', '', 'III/A', 'jasdkajda sdasd', '9829389', '', '', '', '1977-09-07', 34, 'potrait99.jpg', '2017-09-18', 'S1', 'Guru', '', 'Noven', '', '', '', '', '0000-00-00', 'Islam', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', ''),
('13523179', '', 'Berlian Amalia Burhan', '78900', '', 'uauaua', 'jakalll', '7899999', 'yauaua', 'Islam', '', '2017-12-05', 4, '', '2017-12-12', 'S1', 'Guru', 'hahahaha', 'Bu Berli', 'uauauaua', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('13523267', '', 'Doni Putra', '45', '', '1', 'as', 'as', 'as', 'Kristen', '', '1990-08-09', 7, '', '0000-00-00', 'S2', 'Guru', '', 'Doni', 'GURU', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('13523555', '', 'iga', '1717', '', '2a', 'a', 's', 'd', 'Kristen', 's', '2018-08-30', 2, '', '2018-08-07', 'D2', 'Guru', 'blm', 'iga', 'guru muda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('14523001', '0', 'Kepsek', '0', '', '1', 'jljl', '0', '0', 'Islam', 'yk', '1980-08-16', 4, '', '2012-08-15', 'S2', 'Guru', 'blm', 'pak kepsek', 'kepsek', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('14523002', '1', 'pembimbing', '2', '', '2', '', '2', '1', 'Budha', 'yk', '1992-08-10', 3, '', '2018-08-10', 'D3', 'Guru', 'blm', 'pemb', 'pembimbing', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('14523267', '', 'Nadine Deskananda Sajiatmoko', '1004', '', '4a', 'jakal', '0812', 'asd', 'Islam', '', '1996-12-03', 5, '', '2018-08-28', 'D3', 'Guru', 'belum pensiun', 'Nadine', 'GURU', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('145232677', '0', 'Super Admin Nadine', '1005', 'Perempuan', '1', 'jakal', '0', '0', 'Islam', 'smd', '1996-12-03', 7, 'no-profile-picture-icon-female-3.jpg', '2016-08-24', 'S1', '', '', 'super ', 'super admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('14523271', '', 'Irna Rafidah', '12', '', '4a', '', '', '', '', '', '0000-00-00', 0, '', '0000-00-00', '', 'Guru', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('14523299', '0', 'pegawai', '0', '', '2`', 'jljl', '0', '0', 'Kristen', 'jkt', '1990-08-01', 100, '', '2018-08-08', 'D2', 'Pegawai', 'blm', 'peg', 'peg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('333444555', '', 'Mahmud Mudmud', '88773566475', '', 'IV/A', 'Jalan Kaliurang', '08656563636', '', 'Budha', '', '2017-01-30', 33, '', '2017-10-30', 'S2', '', '', 'Mudmud', 'Guru Madya', 'IPA', '', '', '0000-00-00', 'Islam', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', ''),
('566656', '', 'Awas Ada Sule', '898989', '', 'II/A', 'sajdiasjdiasjdiasjdiajsdij', '098393489', '', 'Islam', 'Sintang', '2018-01-04', 7665, '', '2018-01-04', 'S2', 'Guru', '', 'sule', 'Guru Muda', 'Penjaskes', '', '', '0000-00-00', 'Islam', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', ''),
('676888999', '', 'Rodeo Kopet Kopet Kopet', '9888988899', '', 'IV/A', 'dfsldfskdjfldkfjlsdf', '12312312', '', 'Islam', '', '2018-01-30', 6559, '', '2018-01-30', 'S3', 'Guru', '', 'Rodeo', 'Guru Muda', 'IPA', '', '', '0000-00-00', 'Islam', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', ''),
('777888666', '', 'RIDHO HUHU', '28282828', '', 'III/C', 'djaisdjaisdjias', '99988899', '', 'Islam', '', '2018-10-10', 987, '', '2018-10-10', 'S3', '', '', 'HHHH', 'Guru Muda', 'B.indonesia', '', '', '0000-00-00', 'Islam', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', ''),
('87283282', '', 'Asep Show', '12732312321', '', 'II/A', 'Jalan Kaliurang Km 10', '0862262626', '', 'Budha', 'Yogya', '2017-12-06', 777, '', '2017-12-06', 'S2', '', '', 'TPI', 'Guru Muda', 'Bahasa Indonesia', 'Sahroni', 'Klaten', '2017-12-06', 'Budha', '087267262', 'Guru', 'Jalan Kaliurang km 11', 'Rosida', 'Kalimantan', '2017-12-06', '0000-00-00', '089898889', 'Petani', 'Jalan MT Haryono'),
('888777', '', 'Ridho AAAAAA', '888877', '', 'III/A', 'sdaskjdasdkasdjaksdkj', '0293012930', '', 'Islam', '', '2018-01-10', 99999, '', '2018-01-10', 'S3', '', '', 'Ridho', 'Guru Madya', 'IPS', '', '', '0000-00-00', 'Islam', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', ''),
('989234', '', 'Amanullah Amany', '823773837', '', 'II/A', 'Jalan Lintas melawi', '83747474847', '', 'Budha', '', '2017-09-20', 23, '2.jpg', '2017-10-21', 'D3', 'Guru', '', 'Aman', '', '', '', '', '0000-00-00', 'Islam', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', ''),
('9999922', '', 'Muttaqin Gilll', '9999878', '', 'III/A', 'ljuhkgiugk.', '898989', '', 'Kristen', 'Sintang', '2017-12-01', 9667, 'potrait1.jpg', '2017-12-01', 'D3', 'Guru', '', 'taqin', 'Guru Muda', 'Matematika', 'Goro', 'kalimantan', '2017-12-28', 'Budha', '92831923891', 'Petani aja', 'asdas  asdas da s', 'ibu goro', 'Jawa', '2017-12-15', '0000-00-00', '081237123', 'Aapa aja', 'asdasdasdasdasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `id_jenis_pelanggaran` int(20) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `tgl_kejadian` date NOT NULL,
  `bentuk_pelanggaran` varchar(50) NOT NULL,
  `sanksi` varchar(50) NOT NULL,
  `no_pasal` int(10) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `poin` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggaran`
--

INSERT INTO `pelanggaran` (`id_jenis_pelanggaran`, `nisn`, `tgl_kejadian`, `bentuk_pelanggaran`, `sanksi`, `no_pasal`, `kategori`, `poin`) VALUES
(1, '1234568090', '2018-10-19', 'Atribut tidak lengkap', 'cabut rumput', 4, 'Pelanggaran Ringan', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pembimbing`
--

CREATE TABLE `pembimbing` (
  `id_pembimbing` int(5) NOT NULL,
  `NIP` int(10) DEFAULT NULL,
  `nama_pembimbing` varchar(45) NOT NULL,
  `jabatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembimbing`
--

INSERT INTO `pembimbing` (`id_pembimbing`, `NIP`, `nama_pembimbing`, `jabatan`) VALUES
(1, 14523267, 'Nadine Deskananda Sajiatmoko', 'Pembimbing'),
(2, 14523200, 'Dina', 'pembimbing');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar_daftarulang_kenaikan`
--

CREATE TABLE `pendaftar_daftarulang_kenaikan` (
  `id_daftar_ulang_kenaikan` int(10) NOT NULL,
  `id_tahun_ajaran` int(10) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `surat_pernyataan` tinyint(1) DEFAULT NULL,
  `rapor` tinyint(1) DEFAULT NULL,
  `formulir_pendataan` tinyint(1) DEFAULT NULL,
  `tanda_pembayaran` tinyint(1) DEFAULT NULL,
  `berkas_1` tinyint(1) DEFAULT NULL,
  `berkas_2` tinyint(1) DEFAULT NULL,
  `berkas_3` tinyint(1) DEFAULT NULL,
  `berkas_4` tinyint(1) DEFAULT NULL,
  `berkas_5` tinyint(1) DEFAULT NULL,
  `terverifikasi` enum('Terverifikasi','Belum','') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `pendaftar_daftarulang_kenaikan`
--

INSERT INTO `pendaftar_daftarulang_kenaikan` (`id_daftar_ulang_kenaikan`, `id_tahun_ajaran`, `nisn`, `surat_pernyataan`, `rapor`, `formulir_pendataan`, `tanda_pembayaran`, `berkas_1`, `berkas_2`, `berkas_3`, `berkas_4`, `berkas_5`, `terverifikasi`) VALUES
(12, 1, '7001', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Terverifikasi'),
(13, 1, '6001', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Belum'),
(14, 2, '1234567816', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Belum'),
(15, 3, '55555550', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Belum'),
(16, 3, '1234567816', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Belum');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar_daftarulang_ppdb`
--

CREATE TABLE `pendaftar_daftarulang_ppdb` (
  `nomor_pendaftar` int(5) DEFAULT NULL,
  `nisn` varchar(10) NOT NULL,
  `surat_pernyataan` tinyint(1) DEFAULT NULL,
  `form_pendataan` tinyint(1) DEFAULT NULL,
  `tanda_pembayaran` tinyint(1) DEFAULT NULL,
  `berkas_1` tinyint(1) DEFAULT NULL,
  `berkas_2` tinyint(1) DEFAULT NULL,
  `berkas_3` tinyint(1) DEFAULT NULL,
  `berkas_4` tinyint(1) DEFAULT NULL,
  `berkas_5` tinyint(1) DEFAULT NULL,
  `terverifikasi` enum('Terverifikasi','Belum','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar_daftarulang_ppdb`
--

INSERT INTO `pendaftar_daftarulang_ppdb` (`nomor_pendaftar`, `nisn`, `surat_pernyataan`, `form_pendataan`, `tanda_pembayaran`, `berkas_1`, `berkas_2`, `berkas_3`, `berkas_4`, `berkas_5`, `terverifikasi`) VALUES
(1000, '8001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Terverifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar_ppdb`
--

CREATE TABLE `pendaftar_ppdb` (
  `nomor_pendaftaran` int(10) DEFAULT NULL,
  `no_usbn` varchar(20) DEFAULT NULL,
  `id_tahun_ajaran` int(10) NOT NULL,
  `nisn_pendaftar` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Perempuan','Laki-Laki') DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `asal_sekolah` varchar(50) DEFAULT NULL,
  `domisili` enum('Dalam Daerah','Luar Daerah') DEFAULT NULL,
  `tahun_lulus` int(4) DEFAULT NULL,
  `nilai_un_ind` float DEFAULT NULL,
  `nilai_un_mat` float DEFAULT NULL,
  `nilai_un_ipa` float DEFAULT NULL,
  `nilai_prestasi` float DEFAULT NULL,
  `nilai_un_nun` float DEFAULT NULL,
  `pilihan_sekolah_1` varchar(50) DEFAULT NULL,
  `pilihan_sekolah_2` varchar(50) DEFAULT NULL,
  `pilihan_sekolah_3` varchar(50) DEFAULT NULL,
  `ujian_1` float DEFAULT NULL,
  `ujian_2` float DEFAULT NULL,
  `ujian_3` float DEFAULT NULL,
  `ujian_4` float DEFAULT NULL,
  `ujian_5` float DEFAULT NULL,
  `ujian_6` float DEFAULT NULL,
  `ujian_7` float DEFAULT NULL,
  `ujian_8` float DEFAULT NULL,
  `ujian_9` float DEFAULT NULL,
  `ujian_10` float DEFAULT NULL,
  `total_nilai` float DEFAULT NULL,
  `status_siswa` enum('Diterima','Tidak Diterima','Dicabut','') DEFAULT NULL,
  `fc_rapor` tinyint(1) DEFAULT NULL,
  `fc_ijazah` tinyint(1) DEFAULT NULL,
  `skhun` tinyint(1) DEFAULT NULL,
  `fc_skhun` tinyint(1) DEFAULT NULL,
  `bukti_pengajuan_daftar` tinyint(1) DEFAULT NULL,
  `surat_keterangan_penambah_nilai` tinyint(1) DEFAULT NULL,
  `surat_ket_nisn` tinyint(1) DEFAULT NULL,
  `skck_kepsek` tinyint(1) DEFAULT NULL,
  `fc_akta_lahir` tinyint(1) DEFAULT NULL,
  `fc_kk` tinyint(1) DEFAULT NULL,
  `surat_ket_rt` tinyint(1) DEFAULT NULL,
  `surat_keterangan_napza` tinyint(1) DEFAULT NULL,
  `berkas_1` tinyint(1) DEFAULT NULL,
  `berkas_2` tinyint(1) DEFAULT NULL,
  `berkas_3` tinyint(1) DEFAULT NULL,
  `berkas_4` tinyint(1) DEFAULT NULL,
  `berkas_5` tinyint(1) DEFAULT NULL,
  `terverifikasi` enum('Terverifikasi','Belum','','') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `pendaftar_ppdb`
--

INSERT INTO `pendaftar_ppdb` (`nomor_pendaftaran`, `no_usbn`, `id_tahun_ajaran`, `nisn_pendaftar`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `asal_sekolah`, `domisili`, `tahun_lulus`, `nilai_un_ind`, `nilai_un_mat`, `nilai_un_ipa`, `nilai_prestasi`, `nilai_un_nun`, `pilihan_sekolah_1`, `pilihan_sekolah_2`, `pilihan_sekolah_3`, `ujian_1`, `ujian_2`, `ujian_3`, `ujian_4`, `ujian_5`, `ujian_6`, `ujian_7`, `ujian_8`, `ujian_9`, `ujian_10`, `total_nilai`, `status_siswa`, `fc_rapor`, `fc_ijazah`, `skhun`, `fc_skhun`, `bukti_pengajuan_daftar`, `surat_keterangan_penambah_nilai`, `surat_ket_nisn`, `skck_kepsek`, `fc_akta_lahir`, `fc_kk`, `surat_ket_rt`, `surat_keterangan_napza`, `berkas_1`, `berkas_2`, `berkas_3`, `berkas_4`, `berkas_5`, `terverifikasi`) VALUES
(NULL, NULL, 3, '55555550', 'pendaftar test', 'Perempuan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, 0, 'Diterima', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Terverifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman_mutasi`
--

CREATE TABLE `pengumuman_mutasi` (
  `id_pengumuman` int(10) NOT NULL,
  `tgl_pengumuman` date NOT NULL,
  `judul_pengumuman` text NOT NULL,
  `file_pengumuman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman_mutasi`
--

INSERT INTO `pengumuman_mutasi` (`id_pengumuman`, `tgl_pengumuman`, `judul_pengumuman`, `file_pengumuman`) VALUES
(9, '2018-02-09', 'nyoba lagi ya', 'assets/distribusi/pengumuman/BAB III.docx'),
(10, '2018-02-14', 'ini sih nyoba aja', 'assets/distribusi/pengumuman/Ketentuan Import Data PPDB Jalur Ujian.pdf'),
(14, '2018-08-22', 'nadine coba', 'assets/distribusi/pengumuman/04testingperangkatlunak-100216001733-phpapp02.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman_ppdb`
--

CREATE TABLE `pengumuman_ppdb` (
  `id_pengumuman_ppdb` int(10) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `isi` text NOT NULL,
  `tanggal_berlaku` date NOT NULL,
  `id_tahun_ajaran` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman_ppdb`
--

INSERT INTO `pengumuman_ppdb` (`id_pengumuman_ppdb`, `judul`, `isi`, `tanggal_berlaku`, `id_tahun_ajaran`) VALUES
(9, 'Pengumuman Penerimaan Peserta Didik Baru Tahun Ajaran 2015/2016', 'Pedoman_KPTA_TF_UII.pdf', '2015-09-07', 3),
(10, 'Pengumuman Daftar Ulang Peserta Didik Baru Tahun Ajaran 2015/2016', '01-Tugas_Mata_Kuliah_Aljabar_Linier_Kelas_D1.pdf', '2017-09-24', 3),
(11, 'Pengumuman Penerimaan Peserta Didik Baru Tahun Ajaran 2016/ 20177', '04-Model_OSI_vs_TCP_IP_(ekstra).pdf', '2017-09-26', 3),
(14, 'Pengumuman Daftar Ulang Peserta Didik Baru Tahun Ajaran 2016/ 2017', '1__Pendahuluan_Anikom.pdf', '2017-10-04', 3),
(16, 'testingaw', '', '2019-02-02', 1),
(18, 'pengumuman jalur ujian', '01-SistemBasisDataTerdistribusi1.pdf', '2018-08-25', 2);

-- --------------------------------------------------------

--
-- Table structure for table `poin_pelanggaran`
--

CREATE TABLE `poin_pelanggaran` (
  `nisn` varchar(10) NOT NULL,
  `id_jenis_pelanggaran` int(20) NOT NULL,
  `id_poin_pelanggaran` int(20) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `poin` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `presensi_kls_tambahan`
--

CREATE TABLE `presensi_kls_tambahan` (
  `id_presensikls_tambahan` int(5) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `id_pembimbing` int(5) NOT NULL,
  `id_jadwal_ekskul` int(5) NOT NULL,
  `tgl_kegiatan` date NOT NULL,
  `status_kehadiran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presensi_kls_tambahan`
--

INSERT INTO `presensi_kls_tambahan` (`id_presensikls_tambahan`, `nisn`, `id_pembimbing`, `id_jadwal_ekskul`, `tgl_kegiatan`, `status_kehadiran`) VALUES
(1, '', 3, 6, '2018-01-04', 'h'),
(2, '', 2, 3, '2018-01-05', 'h'),
(3, '', 6, 5, '2018-01-05', 'h'),
(4, '', 5, 7, '2018-01-06', 'h'),
(5, '', 1, 4, '2018-01-06', 'h'),
(6, '', 4, 2, '2018-01-06', 'h'),
(7, '', 4, 1, '2018-01-06', 'h'),
(8, '', 3, 6, '2018-01-11', 'h'),
(9, '', 2, 3, '2018-01-12', 'h'),
(10, '', 6, 5, '2018-01-12', 'h'),
(11, '', 5, 7, '2018-01-13', 'h'),
(12, '', 1, 4, '2018-01-13', 'i'),
(13, '', 4, 2, '2018-01-13', 'h'),
(14, '', 4, 1, '2018-01-13', 'h'),
(15, '', 3, 6, '2018-01-18', 'i'),
(16, '', 2, 3, '2018-01-19', 'h'),
(17, '', 6, 5, '2018-01-19', 'h'),
(18, '', 5, 7, '2018-01-20', 'h'),
(19, '', 1, 4, '2018-01-20', 'h'),
(20, '', 4, 2, '2018-01-20', 'h'),
(21, '', 4, 1, '2018-01-20', 's'),
(22, '', 3, 6, '2018-01-25', 'h'),
(23, '', 2, 3, '2018-01-26', 'h'),
(24, '', 6, 5, '2018-01-26', 'h'),
(25, '', 5, 7, '2018-01-27', 'h'),
(26, '', 1, 4, '2018-01-27', 'h'),
(27, '', 4, 2, '2018-01-27', 's'),
(28, '', 4, 1, '2018-01-27', 's'),
(29, '0001254879', 0, 6, '2018-01-04', 'h'),
(30, '0162145632', 0, 3, '2018-01-05', 'i'),
(31, '0031211478', 0, 5, '2018-01-05', 'h'),
(32, '5130114039', 0, 5, '2018-01-05', 'h'),
(33, '0159521452', 0, 5, '2018-01-05', 'i'),
(34, '0188526521', 0, 5, '2018-01-05', 'h'),
(35, '0001254879', 0, 5, '2018-01-05', 'h'),
(36, '0059512014', 0, 5, '2018-01-05', 'h'),
(37, '0172013964', 0, 7, '2018-01-06', 'h'),
(38, '0147100123', 0, 7, '2018-01-06', 'h'),
(39, '0162145632', 0, 7, '2018-01-06', 'i'),
(40, '5130114039', 0, 4, '2018-01-06', 'h'),
(41, '0188526521', 0, 4, '2018-01-06', 'h'),
(42, '0001254879', 0, 4, '2018-01-06', 'h'),
(43, '0059512014', 0, 4, '2018-01-06', 'h'),
(44, '0162145632', 0, 4, '2018-01-06', 'h'),
(45, '0159521452', 0, 2, '2018-01-06', 'h'),
(46, '0001254879', 0, 2, '2018-01-06', 'h'),
(47, '0084746890', 0, 2, '2018-01-06', 'h'),
(48, '0188526521', 0, 1, '2018-01-06', 'h'),
(49, '0059512014', 0, 1, '2018-01-06', 'h'),
(50, '0162145632', 0, 1, '2018-01-06', 'h'),
(51, '0001254879', 0, 6, '2018-01-11', 'h'),
(52, '0162145632', 0, 3, '2018-01-12', 'i'),
(53, '0031211478', 0, 5, '2018-01-12', 'h'),
(54, '5130114039', 0, 5, '2018-01-12', 'h'),
(55, '0159521452', 0, 5, '2018-01-12', 'h'),
(56, '0188526521', 0, 5, '2018-01-12', 'h'),
(57, '0001254879', 0, 5, '2018-01-12', 'h'),
(58, '0059512014', 0, 5, '2018-01-12', 'h'),
(59, '0172013964', 0, 7, '2018-01-13', 'h'),
(60, '0147100123', 0, 7, '2018-01-13', 'h'),
(61, '0162145632', 0, 7, '2018-01-13', 'h'),
(62, '5130114039', 0, 4, '2018-01-13', 'h'),
(63, '0188526521', 0, 4, '2018-01-13', 'h'),
(64, '0001254879', 0, 4, '2018-01-13', 'h'),
(65, '0059512014', 0, 4, '2018-01-13', 'h'),
(66, '0162145632', 0, 4, '2018-01-13', 'h'),
(67, '0159521452', 0, 2, '2018-01-13', 'h'),
(68, '0001254879', 0, 2, '2018-01-13', 'h'),
(69, '0084746890', 0, 2, '2018-01-13', 'h'),
(70, '0188526521', 0, 1, '2018-01-13', 'h'),
(71, '0059512014', 0, 1, '2018-01-13', 'a'),
(72, '0162145632', 0, 1, '2018-01-13', 'h'),
(77, '', 3, 6, '2018-04-05', 'h'),
(78, '0159521452', 0, 2, '2018-04-02', 'h'),
(79, '0001254879', 0, 2, '2018-04-02', 'h'),
(80, '0084746890', 0, 2, '2018-04-02', 'h'),
(81, '0101245125', 0, 2, '2018-04-02', 'h'),
(82, '', 1, 4, '2018-08-28', 's');

-- --------------------------------------------------------

--
-- Table structure for table `presensi_pegawai`
--

CREATE TABLE `presensi_pegawai` (
  `Id_presensi` int(10) NOT NULL,
  `Tanggal_presensi` date NOT NULL,
  `Waktu_presensi` time NOT NULL,
  `Rangkuman_presensi` varchar(25) NOT NULL,
  `keterangan_presensi` text,
  `NIP` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presensi_pegawai`
--

INSERT INTO `presensi_pegawai` (`Id_presensi`, `Tanggal_presensi`, `Waktu_presensi`, `Rangkuman_presensi`, `keterangan_presensi`, `NIP`) VALUES
(1, '2018-10-10', '00:00:00', 'S', '', '1111'),
(2, '2018-10-10', '00:00:00', 'H', '', '11111'),
(3, '2018-10-10', '00:00:00', 'H', '', '1221129'),
(4, '2018-10-10', '00:00:00', 'H', '', '12222'),
(5, '2018-10-10', '00:00:00', 'H', '', '123'),
(6, '2018-10-10', '00:00:00', 'H', '', '1231233412'),
(7, '2018-10-10', '00:00:00', 'H', '', '12312334121'),
(8, '2018-10-10', '00:00:00', 'H', '', '123456'),
(9, '2018-10-10', '00:00:00', 'H', '', '12523001'),
(10, '2018-10-10', '00:00:00', 'H', '', '13313131'),
(11, '2018-10-10', '00:00:00', 'H', '', '13523069'),
(12, '2018-10-10', '00:00:00', 'H', '', '13523120'),
(13, '2018-10-10', '00:00:00', 'H', '', '13523134'),
(14, '2018-10-10', '00:00:00', 'H', '', '13523135'),
(15, '2018-10-10', '00:00:00', 'H', '', '1352313599'),
(16, '2018-10-10', '00:00:00', 'H', '', '13523136'),
(17, '2018-10-10', '00:00:00', 'H', '', '13523138'),
(18, '2018-10-10', '00:00:00', 'H', '', '13523139'),
(19, '2018-10-10', '00:00:00', 'H', '', '135231399'),
(20, '2018-10-10', '00:00:00', 'H', '', '13523143'),
(21, '2018-10-10', '00:00:00', 'H', '', '13523267'),
(22, '2018-10-10', '00:00:00', 'H', '', '145232677'),
(23, '2018-10-10', '00:00:00', 'H', '', '14523271'),
(24, '2018-10-10', '00:00:00', 'H', '', '333444555'),
(25, '2018-10-10', '00:00:00', 'H', '', '566656'),
(26, '2018-10-10', '00:00:00', 'H', '', '676888999'),
(27, '2018-10-10', '00:00:00', 'H', '', '777888666'),
(28, '2018-10-10', '00:00:00', 'H', '', '87283282'),
(29, '2018-10-10', '00:00:00', 'H', '', '888777'),
(30, '2018-10-10', '00:00:00', 'H', '', '989234'),
(31, '2018-10-10', '00:00:00', 'H', '', '9999922');

-- --------------------------------------------------------

--
-- Table structure for table `presensi_siswa`
--

CREATE TABLE `presensi_siswa` (
  `id_presensi` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status_kehadiran` enum('H','I','S','A') NOT NULL,
  `NISN` varchar(10) NOT NULL,
  `kelas_berjalan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presensi_siswa`
--

INSERT INTO `presensi_siswa` (`id_presensi`, `tanggal`, `status_kehadiran`, `NISN`, `kelas_berjalan_id`) VALUES
(1, '2018-08-01', 'H', '1234567849', 1),
(2, '2018-08-01', 'S', '1234567851', 1),
(3, '2018-10-01', 'H', '1234567900', 1),
(4, '2018-10-02', 'H', '1234567900', 1),
(5, '2018-10-03', 'H', '1234567900', 1),
(6, '2018-10-01', 'H', '1234568042', 1),
(7, '2018-10-02', 'H', '1234568042', 1),
(8, '2018-10-03', 'H', '1234568042', 1),
(9, '2018-10-01', 'H', '1234568090', 1),
(10, '2018-10-02', 'S', '1234568090', 1),
(11, '2018-10-03', 'H', '1234568090', 1),
(12, '2018-10-01', 'H', '1234568109', 1),
(13, '2018-10-02', 'H', '1234568109', 1),
(14, '2018-10-03', 'H', '1234568109', 1),
(15, '2018-10-01', 'H', '1234568110', 1),
(16, '2018-10-02', 'H', '1234568110', 1),
(17, '2018-10-03', 'H', '1234568110', 1);

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` int(20) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `jenis_prestasi` varchar(20) NOT NULL,
  `tingkat_pend` varchar(20) NOT NULL,
  `tahun` int(5) NOT NULL,
  `peringkat` int(5) NOT NULL,
  `keterangan` int(100) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id_prestasi`, `nisn`, `jenis_prestasi`, `tingkat_pend`, `tahun`, `peringkat`, `keterangan`, `foto`) VALUES
(0, '1234567888', 'ada', 'a', 2018, 1, 0, '121212.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `prioritas_khusus`
--

CREATE TABLE `prioritas_khusus` (
  `id_rentang_jam` int(10) DEFAULT NULL,
  `NIP` varchar(20) DEFAULT NULL,
  `id_prkh` int(10) NOT NULL,
  `jenis_prkh` enum('prioritas','khusus') NOT NULL,
  `id_mapel` int(10) DEFAULT NULL,
  `id_tahun_ajaran` int(10) NOT NULL,
  `jam_ke` varchar(2) NOT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu') NOT NULL,
  `id_namamapel` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id_setting` int(20) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `hari_libur` varchar(255) NOT NULL,
  `id_tahun_ajaran` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id_setting`, `nama_sekolah`, `hari_libur`, `id_tahun_ajaran`) VALUES
(1, 'SMP Negeri 5 Yogyakarta', 'Minggu', 1),
(2, 'SMP 10', 'Minggu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nisn` varchar(10) NOT NULL,
  `no_induk_siswa` int(10) NOT NULL,
  `foto` text NOT NULL,
  `nik` int(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `tempat_lahir` varchar(15) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `agama` enum('Islam','Kristen','Katholik','Hindu','Budha','Lainnya') NOT NULL,
  `berkebutuhan_khusus` enum('Tidak','Netra','Rungu','Grahita Ringan','Grahita Sedang','Daksa Ringan','Daksa Sedang','Laras','Wicara','Tuna Ganda','Hiperaktif','Cerdas Istimewa','Bakat Istimewa','Kesulitan Belajar','Narkoba','Indigo','Down Syndrome','Autis','Terbelakang','Bencana Alam/ Sosial','Tidak Mampu Ekonomi','Lainnya') NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `rt` int(3) NOT NULL,
  `rw` int(3) NOT NULL,
  `nama_dusun` varchar(20) NOT NULL,
  `desa_kelurahan` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kode_pos` int(6) NOT NULL,
  `tempat_tinggal` enum('Dengan Orang Tua','Dengan Saudara','Tinggal di Asrama','Tinggal di Kos') NOT NULL,
  `kategori_penduduk` enum('Dalam Daerah','Luar Daerah') NOT NULL,
  `transportasi` enum('Jalan Kaki','Angkutan Umum','Mobil/ Bus Antar Jemput','Sepeda','Sepeda Motor','Mobil Pribadi','Lainnya') NOT NULL,
  `no_telepon` int(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `nama_sd_mi` varchar(30) DEFAULT NULL,
  `lama_belajar_disd_mi` int(2) NOT NULL,
  `pernah_paud` enum('Ya','Tidak') NOT NULL,
  `pernah_tk` enum('Ya','Tidak') NOT NULL,
  `no_skhun_mi` int(9) NOT NULL,
  `no_seri_skhun_s` int(16) NOT NULL,
  `no_seri_ijazah_sd_mi` int(10) NOT NULL,
  `penerima_kps_kks_pkh_kip` enum('Ya','Tidak') NOT NULL,
  `no_penerima` int(17) DEFAULT NULL,
  `anak_ke` int(2) NOT NULL,
  `jumlah_saudara_kandung` int(2) NOT NULL,
  `jumlah_saudara_tiri` int(2) NOT NULL,
  `jumlah_saudara_angkat` int(2) NOT NULL,
  `status_dalam_keluarga` enum('Kandung','Angkat') NOT NULL,
  `pernah_menderita_sakit` varchar(50) NOT NULL,
  `pernah_mengaji` enum('Ya','Tidak') NOT NULL,
  `keterangan_mengaji` varchar(50) NOT NULL,
  `anak_yatim_piatu` enum('Tidak','Yatim','Piatu','Yatim Piatu') NOT NULL,
  `bahasa_sehari_hari_dirumah` varchar(50) NOT NULL,
  `prestasi_disekolah` varchar(100) NOT NULL,
  `status_siswa` enum('Aktif','Lulus','Keluar') NOT NULL,
  `terdaftar_sebagai` varchar(50) NOT NULL,
  `tinggi_badan` int(10) NOT NULL,
  `berat_badan` int(5) NOT NULL,
  `hobi` varchar(1000) NOT NULL,
  `asal_mutasi` varchar(30) NOT NULL,
  `id_orangtua` int(4) DEFAULT NULL,
  `id_tahun_ajaran` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `no_induk_siswa`, `foto`, `nik`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `berkebutuhan_khusus`, `alamat`, `rt`, `rw`, `nama_dusun`, `desa_kelurahan`, `kecamatan`, `kode_pos`, `tempat_tinggal`, `kategori_penduduk`, `transportasi`, `no_telepon`, `email`, `nama_sd_mi`, `lama_belajar_disd_mi`, `pernah_paud`, `pernah_tk`, `no_skhun_mi`, `no_seri_skhun_s`, `no_seri_ijazah_sd_mi`, `penerima_kps_kks_pkh_kip`, `no_penerima`, `anak_ke`, `jumlah_saudara_kandung`, `jumlah_saudara_tiri`, `jumlah_saudara_angkat`, `status_dalam_keluarga`, `pernah_menderita_sakit`, `pernah_mengaji`, `keterangan_mengaji`, `anak_yatim_piatu`, `bahasa_sehari_hari_dirumah`, `prestasi_disekolah`, `status_siswa`, `terdaftar_sebagai`, `tinggi_badan`, `berat_badan`, `hobi`, `asal_mutasi`, `id_orangtua`, `id_tahun_ajaran`) VALUES
('', 0, '', 0, '', NULL, NULL, NULL, 'Islam', 'Tidak', '', 0, 0, '', '', '', 0, 'Dengan Orang Tua', 'Dalam Daerah', 'Jalan Kaki', 0, '', NULL, 0, 'Ya', 'Ya', 0, 0, 0, 'Ya', NULL, 0, 0, 0, 0, 'Kandung', '', 'Ya', '', 'Tidak', '', '', 'Aktif', '', 0, 0, '', '', 45, 1),
('0426389062', 0, '', 0, 'Kartika Eka Putri Swasta', 'Perempuan', 'Pekalongan', '2000-09-14', 'Islam', 'Tidak', '', 0, 0, '', '', '', 0, 'Dengan Orang Tua', 'Dalam Daerah', 'Jalan Kaki', 0, '', NULL, 0, 'Ya', 'Ya', 0, 0, 0, 'Ya', NULL, 0, 0, 0, 0, 'Kandung', '', 'Ya', '', 'Tidak', '', '', 'Aktif', '', 0, 0, '', '', 47, 1),
('1001', 0, '', 0, 'Pendaftar satu', NULL, NULL, NULL, 'Islam', 'Tidak', '', 0, 0, '', '', '', 0, 'Dengan Orang Tua', 'Dalam Daerah', 'Jalan Kaki', 0, '', NULL, 0, 'Ya', 'Ya', 0, 0, 0, 'Ya', NULL, 0, 0, 0, 0, 'Kandung', '', 'Ya', '', 'Tidak', '', '', 'Aktif', '', 0, 0, '', '', 56, 2),
('1002', 0, '', 0, 'pendaftar dua', NULL, NULL, NULL, 'Islam', 'Tidak', '', 0, 0, '', '', '', 0, 'Dengan Orang Tua', 'Dalam Daerah', 'Jalan Kaki', 0, '', NULL, 0, 'Ya', 'Ya', 0, 0, 0, 'Ya', NULL, 0, 0, 0, 0, 'Kandung', '', 'Ya', '', 'Tidak', '', '', 'Aktif', '', 0, 0, '', '', 58, 2),
('1003', 0, '', 0, 'pendaftar tiga', NULL, NULL, NULL, 'Islam', 'Tidak', '', 0, 0, '', '', '', 0, 'Dengan Orang Tua', 'Dalam Daerah', 'Jalan Kaki', 0, '', NULL, 0, 'Ya', 'Ya', 0, 0, 0, 'Ya', NULL, 0, 0, 0, 0, 'Kandung', '', 'Ya', '', 'Tidak', '', '', 'Aktif', '', 0, 0, '', '', NULL, 0),
('1234567816', 1, 'wolf_hd_by_arma3lonewolf-d8m9rto.jpg', 87000, 'Gita Moly Ayu', 'Perempuan', 'dumai edit', '2011-05-11', 'Islam', 'Tidak', 'as', 1, 5, 'lodadi', 'a', 'a', 0, 'Dengan Orang Tua', 'Dalam Daerah', 'Jalan Kaki', 0, '', 'SDN', 0, '', '', 0, 0, 0, '', 0, 1, 0, 1, 0, 'Kandung', '', '', '', 'Tidak', '', '', '', '', 0, 0, '', '', 59, 1),
('1234567817', 2, '', 0, 'Riris Indriyani', 'Perempuan', 'duri', '0000-00-00', 'Katholik', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', 'Lulus', '', 0, 0, '', '', 2, 1),
('1234567818', 3, '', 0, 'Sidik Putra Perwira', 'Laki-Laki', 'bandung', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', 'Aktif', '', 0, 0, '', '', 3, 1),
('1234567819', 4, '', 0, 'Rahmaria Yunisa', 'Perempuan', 'bali ', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', 'Keluar', '', 0, 0, '', '', 4, 1),
('1234567820', 5, '', 0, 'Cita Wiyaninta', 'Perempuan', 'bogor', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 5, 1),
('1234567821', 6, '', 0, 'Hanggini Puri Retno', 'Perempuan', 'jakarta', '0000-00-00', 'Hindu', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 6, 1),
('1234567822', 7, '', 0, 'Yuli Rahmawati', 'Perempuan', 'sragen', '0000-00-00', 'Kristen', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 7, 1),
('1234567823', 8, '', 0, 'Pevita Pearce', 'Perempuan', 'balikpapan', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 8, 1),
('1234567824', 9, '', 0, 'Rizki Tsuma Jaya', 'Laki-Laki', 'madura', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 9, 1),
('1234567825', 10, '', 0, 'Nurdin Rezmani', 'Laki-Laki', 'aceh', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 10, 1),
('1234567826', 11, '', 0, 'Akhmad Sasongko', 'Laki-Laki', 'solo', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 1, 1),
('1234567827', 12, '', 0, 'Raisa Andriana', 'Perempuan', 'klaten', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 2, 1),
('1234567828', 13, '', 0, 'Monita Tahalea', 'Perempuan', 'tangerang', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 3, 1),
('1234567829', 14, '', 0, 'Jesika Iskandar', 'Perempuan', 'solo', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 4, 1),
('1234567830', 15, '', 0, 'Melody Amade', 'Perempuan', 'jogja', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 5, 1),
('1234567831', 16, '', 0, 'Daniel Reynando', 'Laki-Laki', 'bandar lampung', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 6, 1),
('1234567832', 17, '', 0, 'Firanti Maulida Putri', 'Perempuan', 'kalimantan', '0000-00-00', 'Hindu', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 7, 1),
('1234567833', 18, '', 0, 'Delima Indira', 'Perempuan', 'dumai', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 8, 1),
('1234567834', 19, '', 0, 'Rezki Fitrah', 'Laki-Laki', 'duri', '0000-00-00', 'Kristen', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 9, 1),
('1234567835', 20, '', 0, 'Daniel Mananta', 'Laki-Laki', 'bandung', '0000-00-00', 'Katholik', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 10, 1),
('1234567836', 21, '', 0, 'Dessy Mayang Sari', 'Perempuan', 'bali ', '0000-00-00', 'Budha', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 1, 1),
('1234567837', 22, '', 0, 'Hansa Ufairani Ramadhan', 'Perempuan', 'bogor', '0000-00-00', 'Katholik', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 2, 1),
('1234567838', 23, '', 0, 'Dewi Purmala Sari', 'Perempuan', 'jakarta', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 3, 1),
('1234567839', 24, '', 0, 'Sesarika', 'Perempuan', 'sragen', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 4, 1),
('1234567840', 25, '', 0, 'Priska Agustina', 'Perempuan', 'balikpapan', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 5, 1),
('1234567841', 26, '', 0, 'Dini Antika', 'Perempuan', 'madura', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 6, 1),
('1234567842', 27, '', 0, 'Hesti Yulia Rosadi', 'Perempuan', 'aceh', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 7, 1),
('1234567843', 28, '', 0, 'Dandi Irawan', 'Laki-Laki', 'solo', '0000-00-00', 'Katholik', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 8, 1),
('1234567844', 29, '', 0, 'Dude Harlino', 'Laki-Laki', 'klaten', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 9, 1),
('1234567845', 30, '', 0, 'Bagus Prakoso', 'Laki-Laki', 'tangerang', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 10, 1),
('1234567846', 31, '', 0, 'Yudi Waryadi', 'Laki-Laki', 'solo', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 1, 1),
('1234567847', 32, '', 0, 'Desta Reynaldi', 'Laki-Laki', 'jogja', '0000-00-00', 'Budha', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 2, 1),
('1234567848', 33, '', 0, 'Jakaria Sawerna', 'Laki-Laki', 'bandar lampung', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 3, 1),
('1234567849', 34, '', 0, 'Ruben Onsu', 'Laki-Laki', 'kalimantan', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 4, 1),
('1234567850', 35, '', 0, 'Lucky Tama', 'Laki-Laki', 'dumai', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 5, 1),
('1234567851', 36, '', 0, 'Gagah Perdana', 'Laki-Laki', 'duri', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 6, 1),
('1234567852', 37, '', 0, 'Laode Muhammad', 'Laki-Laki', 'bandung', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 7, 1),
('1234567853', 38, '', 0, 'Fawwas Kurniawan', 'Laki-Laki', 'bali ', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 8, 1),
('1234567854', 39, '', 0, 'Silvi Yuliantika', 'Perempuan', 'bogor', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 9, 1),
('1234567855', 40, '', 0, 'Fatimah Azzahra', 'Perempuan', 'jakarta', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 10, 1),
('1234567856', 41, '', 0, 'Anisa Maulida Purnama', 'Perempuan', 'sragen', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 1, 1),
('1234567857', 42, '', 0, 'Marlev Maenaki', 'Laki-Laki', 'balikpapan', '0000-00-00', 'Katholik', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 2, 1),
('1234567858', 43, '', 0, 'Setya Adi Nugroho', 'Laki-Laki', 'madura', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 3, 1),
('1234567859', 44, '', 0, 'Tsummo Aji', 'Laki-Laki', 'aceh', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 4, 1),
('1234567860', 45, '', 0, 'Nabilla Kania Ningrum', 'Perempuan', 'solo', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 5, 1),
('1234567861', 46, '', 0, 'Essy Safitri', 'Perempuan', 'klaten', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 6, 1),
('1234567862', 47, '', 0, 'Senjani Julaeshi', 'Perempuan', 'tangerang', '0000-00-00', 'Kristen', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 7, 1),
('1234567863', 48, '', 0, 'Gita Iman Sari', 'Perempuan', 'solo', '0000-00-00', 'Kristen', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 8, 1),
('1234567864', 49, '', 0, 'Risa Sarasvati', 'Perempuan', 'jogja', '0000-00-00', 'Kristen', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 9, 1),
('1234567865', 50, '', 0, 'Isyana Dwi Puwaka', 'Perempuan', 'bandar lampung', '0000-00-00', 'Kristen', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 10, 1),
('1234567866', 51, '', 0, 'Irene Andoni', 'Perempuan', 'kalimantan', '0000-00-00', 'Budha', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 1, 1),
('1234567867', 52, '', 0, 'Lala Karmela', 'Perempuan', 'dumai', '0000-00-00', 'Hindu', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 2, 1),
('1234567868', 53, '', 0, 'Petra Sihombing', 'Laki-Laki', 'duri', '0000-00-00', 'Lainnya', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 3, 1),
('1234567869', 54, '', 0, 'Hamish Daud', 'Laki-Laki', 'bandung', '0000-00-00', 'Hindu', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 4, 1),
('1234567870', 55, '', 0, 'Keenan Pearce', 'Laki-Laki', 'bali ', '0000-00-00', 'Lainnya', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 5, 1),
('1234567871', 56, '', 0, 'Donita hamiyan', 'Perempuan', 'bogor', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 6, 1),
('1234567872', 57, '', 0, 'Fachrur Rozi', 'Laki-Laki', 'jakarta', '0000-00-00', 'Hindu', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 7, 1),
('1234567873', 58, '', 0, 'Bella Nur Hidayah Aesyi', 'Perempuan', 'sragen', '0000-00-00', 'Hindu', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 8, 1),
('1234567874', 59, '', 0, 'Tatania Mellani', 'Perempuan', 'balikpapan', '0000-00-00', 'Lainnya', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 9, 1),
('1234567875', 60, '', 0, 'Sekar Melati Ayu', 'Perempuan', 'madura', '0000-00-00', 'Budha', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 10, 1),
('1234567876', 61, '', 0, 'Teguh Wahyu Anggara', 'Laki-Laki', 'aceh', '0000-00-00', 'Hindu', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 1, 1),
('1234567877', 62, '', 0, 'Murni Dwi Alfiyanti', 'Perempuan', 'solo', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 2, 1),
('1234567878', 63, '', 0, 'Fitri Ameliya', 'Perempuan', 'klaten', '0000-00-00', 'Budha', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 3, 1),
('1234567879', 64, '', 0, 'Dicky Zulianto', 'Laki-Laki', 'tangerang', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 4, 1),
('1234567880', 65, '', 0, 'Diana Rakhmawati', 'Perempuan', 'solo', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 5, 1),
('1234567881', 66, '', 0, 'Pupu Anggita Sari', 'Perempuan', 'jogja', '0000-00-00', 'Hindu', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 6, 1),
('1234567882', 67, '', 0, 'Nabil Firdaus', 'Laki-Laki', 'bandar lampung', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 7, 1),
('1234567883', 68, '', 0, 'Aditya Rahman', 'Laki-Laki', 'kalimantan', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 8, 1),
('1234567884', 69, '', 0, 'Nesya Vatty Azzahra', 'Perempuan', 'dumai', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 9, 1),
('1234567885', 70, '', 0, 'Fatmawati', 'Perempuan', 'duri', '0000-00-00', 'Budha', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 10, 1),
('1234567886', 71, '', 0, 'Fadilla Utami', 'Perempuan', 'bandung', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 1, 1),
('1234567887', 72, '', 0, 'Fahni Nesa Khulqi', 'Perempuan', 'bali ', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 2, 1),
('1234567888', 73, '', 0, 'Anggita Fitriana Ratih', 'Perempuan', 'bogor', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 3, 1),
('1234567889', 74, '', 0, 'Anggi Kusuma Putri', 'Perempuan', 'jakarta', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 4, 1),
('1234567890', 75, '', 0, 'Anggraeni Dias Saputri', 'Perempuan', 'sragen', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 5, 1),
('1234567891', 76, '', 0, 'Irma Suryani Sofyan', 'Perempuan', 'balikpapan', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 6, 1),
('1234567892', 77, '', 0, 'Yezita Kumala Wongso', 'Perempuan', 'madura', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 7, 1),
('1234567893', 78, '', 0, 'Dwi Kusumastuti', 'Perempuan', 'aceh', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 8, 1),
('1234567894', 79, '', 0, 'Nur Muhammad', 'Laki-Laki', 'solo', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 9, 1),
('1234567895', 80, '', 0, 'Tan Halim Perdana', 'Laki-Laki', 'klaten', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 10, 1),
('1234567896', 81, '', 0, 'Diki Hidayatulloh', 'Laki-Laki', 'tangerang', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 1, 1),
('1234567897', 82, '', 0, 'Audrey Bella Tantowi', 'Perempuan', 'solo', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 2, 1),
('1234567898', 83, '', 0, 'Berlian Amalia Burhan', 'Perempuan', 'jogja', '0000-00-00', 'Katholik', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 3, 1),
('1234567899', 84, '', 0, 'Annisa Dian Pertiwi', 'Perempuan', 'bandar lampung', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 4, 1),
('1234567900', 85, '', 0, 'Budi Haryanto', 'Laki-Laki', 'kalimantan', '0000-00-00', 'Budha', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 5, 1),
('1234567901', 86, '', 0, 'Dwi wira surachandra ', 'Laki-Laki', 'bandung', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 6, 1),
('1234567902', 87, '', 0, 'Denis Muhammad Irfan ', 'Laki-Laki', 'bali ', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 7, 1),
('1234567903', 88, '', 0, 'Dwi Laksana Bhakti ', 'Laki-Laki', 'bogor', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 8, 1),
('1234567904', 89, '', 0, 'muhammad yusuf ', 'Laki-Laki', 'jakarta', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 9, 1),
('1234567905', 90, '', 0, 'Gamaliel Candra Winata', 'Laki-Laki', 'sragen', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 10, 1),
('1234567906', 91, '', 0, 'delsa satya pratama ', 'Laki-Laki', 'balikpapan', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 1, 1),
('1234567907', 92, '', 0, 'Yogi Rosi Prasetyo ', 'Laki-Laki', 'madura', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 2, 1),
('1234567908', 93, '', 0, 'Juan Yoshino ', 'Laki-Laki', 'aceh', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 3, 1),
('1234567909', 94, '', 0, 'Rizal Ermanto ', 'Laki-Laki', 'solo', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 4, 1),
('1234567910', 95, '', 0, 'dinda agung apriyana ', 'Laki-Laki', 'klaten', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 5, 1),
('1234567911', 96, '', 0, 'Suherdi ', 'Laki-Laki', 'tangerang', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 6, 1),
('1234567912', 97, '', 0, 'Ahmad Hasan N ', 'Laki-Laki', 'solo', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 7, 1),
('1234567913', 98, '', 0, 'Deri Likandra Triputra ', 'Laki-Laki', 'jogja', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 8, 1),
('1234567914', 99, '', 0, 'Muhamad Rifly Robiana ', 'Laki-Laki', 'bandar lampung', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 9, 1),
('1234567915', 100, '', 0, 'Daniel Oktario ', 'Laki-Laki', 'kalimantan', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 10, 1),
('1234567916', 101, '', 0, 'Israqi Atsiruddin Sidqi Ramdhani ', 'Laki-Laki', 'dumai', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 1, 1),
('1234567917', 102, '', 0, 'Ristami annisa ', 'Perempuan', 'duri', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 2, 1),
('1234567918', 103, '', 0, 'Evelyn Tanoe', 'Perempuan', 'bandung', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 3, 1),
('1234567919', 104, '', 0, 'Dhea Novia Parhana ', 'Perempuan', 'bali ', '0000-00-00', 'Hindu', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 4, 1),
('1234567920', 105, '', 0, 'Ajeng Gerhana Wulan ', 'Perempuan', 'bogor', '0000-00-00', 'Hindu', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 5, 1),
('1234567921', 106, '', 0, 'Annisa Maretiamy ', 'Perempuan', 'jakarta', '0000-00-00', 'Hindu', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 6, 1),
('1234567922', 107, '', 0, 'Lassandra Kattyana Santos ', 'Perempuan', 'sragen', '0000-00-00', 'Hindu', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 7, 1),
('1234567923', 108, '', 0, 'Lestari pratiwi ', 'Perempuan', 'balikpapan', '0000-00-00', 'Budha', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 8, 1),
('1234567924', 109, '', 0, 'Muni Ledia Astuti ', 'Perempuan', 'madura', '0000-00-00', 'Budha', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 9, 1),
('1234567925', 110, '', 0, 'Meisa damayanti ', 'Perempuan', 'aceh', '0000-00-00', 'Budha', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 10, 1),
('1234567926', 111, '', 0, 'Sri Dewi Cahyadi ', 'Perempuan', 'solo', '0000-00-00', 'Budha', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 1, 1),
('1234567927', 112, '', 0, 'Indri Zaqiah ', 'Perempuan', 'klaten', '0000-00-00', 'Katholik', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 2, 1),
('1234567928', 113, '', 0, 'Nadya Saphira Esfandiari ', 'Perempuan', 'tangerang', '0000-00-00', 'Katholik', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 3, 1),
('1234567929', 114, '', 0, 'Winda ayulia agustina ', 'Perempuan', 'solo', '0000-00-00', 'Katholik', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 4, 1),
('1234567930', 115, '', 0, 'Rani nuryati ', 'Perempuan', 'jogja', '0000-00-00', 'Katholik', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 5, 1),
('1234567931', 116, '', 0, 'Mariam Marianti ', 'Perempuan', 'bandar lampung', '0000-00-00', 'Katholik', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 6, 1),
('1234567932', 117, '', 0, 'Gina Sonia ', 'Perempuan', 'kalimantan', '0000-00-00', 'Katholik', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 7, 1),
('1234567933', 118, '', 0, 'Aulia Rahmawaty ', 'Perempuan', 'dumai', '0000-00-00', 'Kristen', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 8, 1),
('1234567934', 119, '', 0, 'Susanti ', 'Perempuan', 'duri', '0000-00-00', 'Kristen', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 9, 1),
('1234567935', 120, '', 0, 'Putri marytha setiadi ', 'Perempuan', 'bandung', '0000-00-00', 'Kristen', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 10, 1),
('1234567936', 121, '', 0, 'Selisa Fatimah ', 'Perempuan', 'bali ', '0000-00-00', 'Kristen', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 1, 1),
('1234567937', 122, '', 0, 'Khansa R ', 'Perempuan', 'bogor', '0000-00-00', 'Kristen', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 2, 1),
('1234567938', 123, '', 0, 'Risma nopianti ', 'Perempuan', 'jakarta', '0000-00-00', 'Kristen', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 3, 1),
('1234567939', 124, '', 0, 'Lulu adilah fasya  ', 'Perempuan', 'sragen', '0000-00-00', 'Kristen', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 4, 1),
('1234567940', 125, '', 0, 'Raka nurmawan  ', 'Laki-Laki', 'balikpapan', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 5, 1),
('1234567941', 126, '', 0, 'Ridwan Raynaldi Putra ', 'Laki-Laki', 'madura', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 6, 1),
('1234567942', 127, '', 0, 'Adi Darmawan ', 'Laki-Laki', 'aceh', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 7, 1),
('1234567943', 128, '', 0, 'Avrialy kosvi ', 'Laki-Laki', 'solo', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 8, 1),
('1234567944', 129, '', 0, 'Lucky Wiratama Suganda ', 'Laki-Laki', 'klaten', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 9, 1),
('1234567945', 130, '', 0, 'Boy William Nuon ', 'Laki-Laki', 'tangerang', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 10, 1),
('1234567946', 131, '', 0, 'Rizky Irhas Firdaus ', 'Laki-Laki', 'solo', '0000-00-00', 'Katholik', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 1, 1),
('1234567947', 132, '', 0, 'Robbi sujana ', 'Laki-Laki', 'jogja', '0000-00-00', 'Katholik', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 2, 1),
('1234567948', 133, '', 0, 'Renaya Sarasti ', 'Perempuan', 'bandar lampung', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 3, 1),
('1234567949', 134, '', 0, 'Jayanti Widiastuti ', 'Perempuan', 'kalimantan', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 4, 1),
('1234567950', 135, '', 0, 'Armelia nur asyiffa  ', 'Perempuan', 'dumai', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 5, 1),
('1234567951', 136, '', 0, 'Annisa Ayu Siwi ', 'Perempuan', 'duri', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 6, 1),
('1234567952', 137, '', 0, 'Kirana Citra Destiyanti ', 'Perempuan', 'bandung', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 7, 1),
('1234567953', 138, '', 0, 'Ichsan nurmansyah ', 'Laki-Laki', 'bali ', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 8, 1),
('1234567954', 139, '', 0, 'Wahyu Aji Komara ', 'Laki-Laki', 'bogor', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 9, 1),
('1234567955', 140, '', 0, 'afgani maulana a.s. ', 'Laki-Laki', 'jakarta', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 10, 1),
('1234567956', 141, '', 0, 'Feggy Rizkiana Herman ', 'Laki-Laki', 'sragen', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 1, 1),
('1234567957', 142, '', 0, 'Raka Gustiana ', 'Laki-Laki', 'balikpapan', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 2, 1),
('1234567958', 143, '', 0, 'Deri Fauzi ', 'Laki-Laki', 'madura', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 3, 1),
('1234567959', 144, '', 0, 'Israqi Atsiruddin Sidqi Ramdhani ', 'Laki-Laki', 'aceh', '0000-00-00', 'Budha', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 4, 1),
('1234567960', 145, '', 0, 'ahmad fauzan naufal  ', 'Laki-Laki', 'solo', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 5, 1),
('1234567961', 146, '', 0, 'PujiRidwansyah ', 'Laki-Laki', 'klaten', '0000-00-00', 'Budha', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 6, 1),
('1234567962', 147, '', 0, 'moch adnand heriansyah ', 'Laki-Laki', 'tangerang', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 7, 1),
('1234567963', 148, '', 0, 'Rendi Agus Tirtana ', 'Laki-Laki', 'solo', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 8, 1),
('1234567964', 149, '', 0, 'Muhammad Rizki Alhafizh ', 'Laki-Laki', 'jogja', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 9, 1),
('1234567965', 150, '', 0, 'ari ramdani ', 'Laki-Laki', 'bandar lampung', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 10, 1),
('1234567966', 151, '', 0, 'Muhammad Itsal Septian Rahman ', 'Laki-Laki', 'kalimantan', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 1, 1),
('1234567967', 152, '', 0, 'Hilmy MaulanaRachmawan ', 'Laki-Laki', 'dumai', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 2, 1),
('1234567968', 153, '', 0, 'furqon saefulloh ', 'Laki-Laki', 'duri', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 3, 1),
('1234567969', 154, '', 0, 'Dicky Sudrajat ', 'Laki-Laki', 'bandung', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 4, 1),
('1234567970', 155, '', 0, 'muhammad aldi ramdhani ', 'Laki-Laki', 'bali ', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 5, 1),
('1234567971', 156, '', 0, 'Peter Sulaeman ', 'Laki-Laki', 'bogor', '0000-00-00', 'Lainnya', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 6, 1),
('1234567972', 157, '', 0, 'Iman  ', 'Laki-Laki', 'jakarta', '0000-00-00', 'Lainnya', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 7, 1),
('1234567973', 158, '', 0, 'Suci Ananda ', 'Perempuan', 'sragen', '0000-00-00', 'Budha', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 8, 1),
('1234567974', 159, '', 0, 'Ristya ariyani ', 'Perempuan', 'balikpapan', '0000-00-00', 'Hindu', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 9, 1),
('1234567975', 160, '', 0, 'Citra Pradita Effendi ', 'Perempuan', 'madura', '0000-00-00', 'Hindu', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 10, 1),
('1234567976', 161, '', 0, 'ita juwita ', 'Perempuan', 'aceh', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 1, 1),
('1234567977', 162, '', 0, 'Ana Muslimah ', 'Perempuan', 'solo', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 2, 1),
('1234567978', 163, '', 0, 'Siti Nurjanah ', 'Perempuan', 'klaten', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 3, 1),
('1234567979', 164, '', 0, 'Diny Maryani Hermawan ', 'Perempuan', 'tangerang', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 4, 1),
('1234567980', 165, '', 0, 'Mita Amelia ', 'Perempuan', 'solo', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 5, 1),
('1234567981', 166, '', 0, 'Ressa Pupu Handayani ', 'Perempuan', 'jogja', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 6, 1),
('1234567982', 167, '', 0, 'Anisa Ayu Parwati ', 'Perempuan', 'bandar lampung', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 7, 1),
('1234567983', 168, '', 0, 'Ira Mariana ', 'Perempuan', 'kalimantan', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 8, 1),
('1234567984', 169, '', 0, 'Tatie Mulyati ', 'Perempuan', 'dumai', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 9, 1),
('1234567985', 170, '', 0, 'Ranti Prahastanti ', 'Perempuan', 'duri', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 10, 1),
('1234567986', 171, '', 0, 'Esya Swasti Sukmatia ', 'Perempuan', 'bandung', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 1, 1),
('1234567987', 172, '', 0, 'anggi ratnasari ', 'Perempuan', 'bali ', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 2, 1),
('1234567988', 173, '', 0, 'Regina Eldinia Rahayu ', 'Perempuan', 'bogor', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 3, 1),
('1234567989', 174, '', 0, 'Rivani Asri Pratiwi ', 'Perempuan', 'jakarta', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 4, 1),
('1234567990', 175, '', 0, 'yolanda ayu syafira ', 'Perempuan', 'sragen', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 5, 1),
('1234567991', 176, '', 0, 'Nurhasannah Safitri ', 'Perempuan', 'balikpapan', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 6, 1),
('1234567992', 177, '', 0, 'Kania Anisa Lestari ', 'Perempuan', 'madura', '0000-00-00', 'Budha', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 7, 1),
('1234567993', 178, '', 0, 'nitasukmala ', 'Perempuan', 'aceh', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 8, 1),
('1234567994', 179, '', 0, 'Putri Medina Agrezta ', 'Perempuan', 'solo', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 9, 1),
('1234567995', 180, '', 0, 'wendyna oktaviani ', 'Perempuan', 'klaten', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 10, 1),
('1234567996', 181, '', 0, 'hanna tasya ', 'Perempuan', 'tangerang', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 1, 1),
('1234567997', 182, '', 0, 'Evi Hafizah Rahma ', 'Perempuan', 'solo', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 2, 1),
('1234567998', 183, '', 0, 'Erika Putri Cantika', 'Perempuan', 'jogja', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 3, 1),
('1234567999', 184, '', 0, 'zella zakiyah ', 'Perempuan', 'bandar lampung', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 4, 1),
('1234568000', 185, '', 0, 'Syahdan Dwi Cahyo ', 'Laki-Laki', 'kalimantan', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 5, 1),
('1234568001', 186, '', 0, 'yogie nugraha ', 'Laki-Laki', 'bandung', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 6, 1),
('1234568002', 187, '', 0, 'Agus Setiana ', 'Laki-Laki', 'bali ', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 7, 1),
('1234568003', 188, '', 0, 'andrian kusnadi ', 'Laki-Laki', 'bogor', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 8, 1),
('1234568004', 189, '', 0, 'irfan adi pamuji ', 'Laki-Laki', 'jakarta', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 9, 1),
('1234568005', 190, '', 0, 'Bagus Rio Prasojo ', 'Laki-Laki', 'sragen', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 10, 1);
INSERT INTO `siswa` (`nisn`, `no_induk_siswa`, `foto`, `nik`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `berkebutuhan_khusus`, `alamat`, `rt`, `rw`, `nama_dusun`, `desa_kelurahan`, `kecamatan`, `kode_pos`, `tempat_tinggal`, `kategori_penduduk`, `transportasi`, `no_telepon`, `email`, `nama_sd_mi`, `lama_belajar_disd_mi`, `pernah_paud`, `pernah_tk`, `no_skhun_mi`, `no_seri_skhun_s`, `no_seri_ijazah_sd_mi`, `penerima_kps_kks_pkh_kip`, `no_penerima`, `anak_ke`, `jumlah_saudara_kandung`, `jumlah_saudara_tiri`, `jumlah_saudara_angkat`, `status_dalam_keluarga`, `pernah_menderita_sakit`, `pernah_mengaji`, `keterangan_mengaji`, `anak_yatim_piatu`, `bahasa_sehari_hari_dirumah`, `prestasi_disekolah`, `status_siswa`, `terdaftar_sebagai`, `tinggi_badan`, `berat_badan`, `hobi`, `asal_mutasi`, `id_orangtua`, `id_tahun_ajaran`) VALUES
('1234568006', 191, '', 0, 'Bayu Nugraha Libriansyah ', 'Laki-Laki', 'balikpapan', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 1, 1),
('1234568007', 192, '', 0, 'arief sudianto ', 'Laki-Laki', 'madura', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 2, 1),
('1234568008', 193, '', 0, 'Rizky syaeful anwar ', 'Laki-Laki', 'aceh', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 3, 1),
('1234568009', 194, '', 0, 'Yugo Sudirman', 'Laki-Laki', 'solo', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 4, 1),
('1234568010', 195, '', 0, 'Nur Devi Yusiawati Gumelar ', 'Perempuan', 'klaten', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 5, 1),
('1234568011', 196, '', 0, 'juanita nurfadhillah hafyani ', 'Perempuan', 'tangerang', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 6, 1),
('1234568012', 197, '', 0, 'Kareyna Sugiono ', 'Perempuan', 'solo', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 7, 1),
('1234568013', 198, '', 0, 'Revina Sadiyyah Fatimah ', 'Perempuan', 'jogja', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 8, 1),
('1234568014', 199, '', 0, 'Anjani Meilawati Dewi ', 'Perempuan', 'bandar lampung', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 9, 1),
('1234568015', 200, '', 0, 'Kurnia Imbar Sandi .S ', 'Perempuan', 'kalimantan', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 10, 1),
('1234568016', 201, '', 0, 'Rida Himyati Hasna ', 'Perempuan', 'dumai', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 1, 1),
('1234568017', 202, '', 0, 'Citra Mega Lestari ', 'Perempuan', 'duri', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 2, 1),
('1234568018', 203, '', 0, 'Hilda Nathaniela ', 'Perempuan', 'bandung', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 3, 1),
('1234568019', 204, '', 0, 'Ninne Nuraida ', 'Perempuan', 'bali ', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 4, 1),
('1234568020', 205, '', 0, 'lusianasaraswati dewi ', 'Perempuan', 'bogor', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 5, 1),
('1234568021', 206, '', 0, 'ayudhia chandra pusparini  ', 'Perempuan', 'jakarta', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 6, 1),
('1234568022', 207, '', 0, 'Agnes Dirgantini Hakim ', 'Perempuan', 'sragen', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 7, 1),
('1234568023', 208, '', 0, 'sinta komara  ', 'Perempuan', 'balikpapan', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 8, 1),
('1234568024', 209, '', 0, 'Hazana Delfani ', 'Perempuan', 'madura', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 9, 1),
('1234568025', 210, '', 0, 'Siti Nurmala Asy\'syifa ', 'Perempuan', 'aceh', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 10, 1),
('1234568026', 211, '', 0, 'Riska Gita Suhana ', 'Perempuan', 'solo', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 1, 1),
('1234568027', 212, '', 0, 'Yolanda Novitri Setiawan ', 'Perempuan', 'klaten', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 2, 1),
('1234568028', 213, '', 0, 'Gracia vini ', 'Perempuan', 'tangerang', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 3, 1),
('1234568029', 214, '', 0, 'Novianti Warnerin ', 'Perempuan', 'solo', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 4, 1),
('1234568030', 215, '', 0, 'Ckasinta Winda S ', 'Perempuan', 'jogja', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 5, 1),
('1234568031', 216, '', 0, 'Ghita Listyawati Piayu ', 'Perempuan', 'bandar lampung', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 6, 1),
('1234568032', 217, '', 0, 'Wulan Guritno Eri ', 'Perempuan', 'kalimantan', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 7, 1),
('1234568033', 218, '', 0, 'Ayudia Bing Slamet', 'Perempuan', 'dumai', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 8, 1),
('1234568034', 219, '', 0, 'Rara Ajeng Kusumadewi', 'Perempuan', 'duri', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 9, 1),
('1234568035', 220, '', 0, 'Muhammad doddy djakaria ', 'Laki-Laki', 'bandung', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 10, 1),
('1234568036', 221, '', 0, 'Adnan Saefulloh ', 'Laki-Laki', 'bali ', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 1, 1),
('1234568037', 222, '', 0, 'Arya Mahardika ', 'Laki-Laki', 'bogor', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 2, 1),
('1234568038', 223, '', 0, 'alamda verdiyana ', 'Laki-Laki', 'jakarta', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 3, 1),
('1234568039', 224, '', 0, 'agungsaputra ', 'Laki-Laki', 'sragen', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 4, 1),
('1234568040', 225, '', 0, 'Erwin Bani Adam ', 'Laki-Laki', 'balikpapan', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 5, 1),
('1234568041', 226, '', 0, 'arif santoso ', 'Laki-Laki', 'madura', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 6, 1),
('1234568042', 227, '', 0, 'Muhammad Neval Maldini ', 'Laki-Laki', 'aceh', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 7, 1),
('1234568043', 228, '', 0, 'Zaenal Abidin ', 'Laki-Laki', 'solo', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 8, 1),
('1234568044', 229, '', 0, 'Maulana Alif Anugrah ', 'Laki-Laki', 'klaten', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 9, 1),
('1234568045', 230, '', 0, 'Ferdinand Is Suhendra ', 'Laki-Laki', 'tangerang', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 10, 1),
('1234568046', 231, '', 0, 'Saepuloh ', 'Laki-Laki', 'solo', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 1, 1),
('1234568047', 232, '', 0, 'muhammad ferdi ', 'Laki-Laki', 'jogja', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 2, 1),
('1234568048', 233, '', 0, 'Dani Irawan ', 'Laki-Laki', 'bandar lampung', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 3, 1),
('1234568049', 234, '', 0, 'Brama lessandro santos ', 'Laki-Laki', 'kalimantan', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 4, 1),
('1234568050', 235, '', 0, 'Rudi Herlambang', 'Laki-Laki', 'dumai', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 5, 1),
('1234568051', 236, '', 0, 'windi ayu ', 'Perempuan', 'duri', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 6, 1),
('1234568052', 237, '', 0, 'Yulia Nur Safitri ', 'Perempuan', 'bandung', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 7, 1),
('1234568053', 238, '', 0, 'Neneng Royani ', 'Perempuan', 'bali ', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 8, 1),
('1234568054', 239, '', 0, 'Hanasira Afifa ', 'Perempuan', 'bogor', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 9, 1),
('1234568055', 240, '', 0, 'Dwi Putri Januari ', 'Perempuan', 'jakarta', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 10, 1),
('1234568056', 241, '', 0, 'indah nur maulida ', 'Perempuan', 'sragen', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 1, 1),
('1234568057', 242, '', 0, 'Dinda Sapta Carolina ', 'Perempuan', 'balikpapan', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 2, 1),
('1234568058', 243, '', 0, 'Rosyanda Sastie Jagattri ', 'Perempuan', 'madura', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 3, 1),
('1234568059', 244, '', 0, 'Sonia Oktaviana ', 'Perempuan', 'aceh', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 4, 1),
('1234568060', 245, '', 0, 'annisa dessetiani lee ', 'Perempuan', 'solo', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 5, 1),
('1234568061', 246, '', 0, 'Rachmawati sabilarizki ', 'Perempuan', 'klaten', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 6, 1),
('1234568062', 247, '', 0, 'Bella Putri Nastiti ', 'Perempuan', 'tangerang', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 7, 1),
('1234568063', 248, '', 0, 'Pinaandriyani ', 'Perempuan', 'solo', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 8, 1),
('1234568064', 249, '', 0, 'Widi Dwi Adhawati ', 'Perempuan', 'jogja', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 9, 1),
('1234568065', 250, '', 0, 'Isnaeni Handayani Mukti ', 'Perempuan', 'bandar lampung', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 10, 1),
('1234568066', 251, '', 0, 'Dita Julianti ', 'Perempuan', 'kalimantan', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 1, 1),
('1234568067', 252, '', 0, 'Nurfa Resti Aulia ', 'Perempuan', 'dumai', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 2, 1),
('1234568068', 253, '', 0, 'Salma Nur Aisy ', 'Perempuan', 'duri', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 3, 1),
('1234568069', 254, '', 0, 'suci wulan sari ', 'Perempuan', 'bandung', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 4, 1),
('1234568070', 255, '', 0, 'Adelia Puspita', 'Perempuan', 'bali ', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 5, 1),
('1234568071', 256, '', 0, 'Alfian Dwi Sukma', 'Laki-Laki', 'bogor', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 6, 1),
('1234568072', 257, '', 0, 'Anan Winandar', 'Laki-Laki', 'jakarta', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 7, 1),
('1234568073', 258, '', 0, 'Asep Septian', 'Laki-Laki', 'sragen', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 8, 1),
('1234568074', 259, '', 0, 'Bachtiar Saeful Bachri', 'Laki-Laki', 'balikpapan', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 9, 1),
('1234568075', 260, '', 0, 'Bella Ayu Ratnasari', 'Perempuan', 'madura', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 10, 1),
('1234568076', 261, '', 0, 'Cahya Abdul Kholik', 'Laki-Laki', 'aceh', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 1, 1),
('1234568077', 262, '', 0, 'Cahyadyana Fauzi', 'Laki-Laki', 'solo', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 2, 1),
('1234568078', 263, '', 0, 'Cahyaningsih', 'Perempuan', 'klaten', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 3, 1),
('1234568079', 264, '', 0, 'Deni Priyatna', 'Laki-Laki', 'tangerang', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 4, 1),
('1234568080', 265, '', 0, 'Diky Haryanto', 'Laki-Laki', 'solo', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 5, 1),
('1234568081', 266, '', 0, 'Elvira Riana', 'Perempuan', 'jogja', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 6, 1),
('1234568082', 267, '', 0, 'Erlita Indah A', 'Perempuan', 'bandar lampung', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 7, 1),
('1234568083', 268, '', 0, 'Eviratna Ningsih', 'Perempuan', 'kalimantan', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 8, 1),
('1234568084', 269, '', 0, 'Fikri Fajra Pratama', 'Laki-Laki', 'dumai', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 9, 1),
('1234568085', 270, '', 0, 'Gugun Agus Gunawan', 'Laki-Laki', 'duri', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 10, 1),
('1234568086', 271, '', 0, 'Intan Purnama Sari', 'Perempuan', 'bandung', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 1, 1),
('1234568087', 272, '', 0, 'Isti Widiharyanti', 'Perempuan', 'bali ', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 2, 1),
('1234568088', 273, '', 0, 'Khosriyani', 'Perempuan', 'bogor', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 3, 1),
('1234568089', 274, '', 0, 'Millenia Delva Clarifta', 'Perempuan', 'jakarta', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 4, 1),
('1234568090', 275, '', 0, 'Mohammad Faisal Rosyad', 'Laki-Laki', 'sragen', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', 'Keluar', '', 0, 0, '', '', 5, 1),
('1234568091', 276, '', 0, 'Nur Shinta Dewi', 'Perempuan', 'balikpapan', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 6, 1),
('1234568092', 277, '', 0, 'Nur Indah Wulandari', 'Perempuan', 'madura', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 7, 1),
('1234568093', 278, '', 0, 'Nurul Annisa', 'Perempuan', 'aceh', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 8, 1),
('1234568094', 279, '', 0, 'Rimawati', 'Perempuan', 'solo', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 9, 1),
('1234568095', 280, '', 0, 'Robby Anwar', 'Laki-Laki', 'klaten', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 10, 1),
('1234568096', 281, '', 0, 'Rojannah', 'Perempuan', 'tangerang', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 1, 1),
('1234568097', 282, '', 0, 'Siti Aisyah', 'Perempuan', 'solo', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 2, 1),
('1234568098', 283, '', 0, 'Sujatmiko Dwi Purnomo', 'Laki-Laki', 'jogja', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 3, 1),
('1234568099', 284, '', 0, 'Wika Muliya Sari', 'Perempuan', 'bandar lampung', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 4, 1),
('1234568100', 285, '', 0, 'Yuli Triangsih', 'Perempuan', 'kalimantan', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 5, 1),
('1234568101', 286, '', 0, 'Alea Wibisono', 'Perempuan', 'bandung', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 6, 1),
('1234568102', 287, '', 0, 'Nia Tamara', 'Perempuan', 'bali ', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 7, 1),
('1234568103', 288, '', 0, 'Nizar Asharul Maulana', 'Laki-Laki', 'bogor', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 8, 1),
('1234568104', 289, '', 0, 'Ranifah Dwi Lestari', 'Perempuan', 'jakarta', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 9, 1),
('1234568105', 290, '', 0, 'Luna Maya', 'Perempuan', 'sragen', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 10, 1),
('1234568106', 291, '', 0, 'Abel Cantika', 'Perempuan', 'balikpapan', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 1, 1),
('1234568107', 292, '', 0, 'Bobby Purba', 'Laki-Laki', 'madura', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 2, 1),
('1234568108', 293, '', 0, 'Steffan William', 'Laki-Laki', 'aceh', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 3, 1),
('1234568109', 294, '', 0, 'Rifan Dwi Styawan', 'Laki-Laki', 'solo', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 4, 1),
('1234568110', 295, '', 0, 'Agung Budi Setyo', 'Laki-Laki', 'klaten', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 5, 1),
('1234568111', 296, '', 0, 'Wenila Saputri', 'Perempuan', 'tangerang', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 6, 1),
('1234568112', 297, '', 0, 'Quenta Resnawari', 'Perempuan', 'solo', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 7, 1),
('1234568113', 298, '', 0, 'Anindhyta Syefta Putri', 'Perempuan', 'jogja', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 8, 1),
('1234568114', 299, '', 0, 'Reynaldi Fero', 'Laki-Laki', 'bandar lampung', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 9, 1),
('1234568115', 300, '', 0, 'Dendi Apriadi', 'Laki-Laki', 'kalimantan', '0000-00-00', 'Islam', '', 'Yogyakarta', 0, 0, '', '', '', 0, '', '', '', 0, '', '', 0, '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 10, 1),
('125478', 0, '', 0, 'Ong Seungwoo', 'Laki-Laki', 'Seoul', '2018-07-08', 'Islam', 'Tidak', '', 0, 0, '', '', '', 0, 'Dengan Orang Tua', 'Dalam Daerah', 'Jalan Kaki', 0, '', NULL, 0, 'Ya', 'Ya', 0, 0, 0, 'Ya', NULL, 0, 0, 0, 0, 'Kandung', '', 'Ya', '', 'Tidak', '', '', 'Aktif', '', 0, 0, '', '', 49, 1),
('14045', 0, '', 0, 'mcd', 'Perempuan', NULL, NULL, 'Islam', 'Tidak', '', 0, 0, '', '', '', 0, 'Dengan Orang Tua', 'Dalam Daerah', 'Jalan Kaki', 0, '', NULL, 0, 'Ya', 'Ya', 0, 0, 0, 'Ya', NULL, 0, 0, 0, 0, 'Kandung', '', 'Ya', '', 'Tidak', '', '', 'Aktif', '', 0, 0, '', '', NULL, 0),
('14046', 0, '', 0, 'mcdu', NULL, NULL, NULL, 'Islam', 'Tidak', '', 0, 0, '', '', '', 0, 'Dengan Orang Tua', 'Dalam Daerah', 'Jalan Kaki', 0, '', NULL, 0, 'Ya', 'Ya', 0, 0, 0, 'Ya', NULL, 0, 0, 0, 0, 'Kandung', '', 'Ya', '', 'Tidak', '', '', 'Aktif', '', 0, 0, '', '', 54, 2),
('1414523', 0, '', 0, 'Nadine', 'Perempuan', 'Samarinda', '2010-05-10', 'Islam', 'Tidak', '', 0, 0, '', '', '', 0, '', '', '', 0, '', NULL, 0, '', '', 0, 0, 0, '', NULL, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 22, 0),
('14523000', 0, '', 0, 'Nadine', 'Perempuan', NULL, NULL, 'Islam', 'Tidak', '', 0, 0, '', '', '', 0, 'Dengan Orang Tua', 'Dalam Daerah', 'Jalan Kaki', 0, '', NULL, 0, 'Ya', 'Ya', 0, 0, 0, 'Ya', NULL, 0, 0, 0, 0, 'Kandung', '', 'Ya', '', 'Tidak', '', '', 'Aktif', '', 0, 0, '', '', NULL, 0),
('14523267', 0, '', 10, 'ini nadine', 'Perempuan', 'smd', '2018-05-11', 'Islam', 'Tidak', 'jakal', 1, 2, 'l', 'k', 'm', 7, 'Dengan Orang Tua', 'Luar Daerah', 'Angkutan Umum', 8, '', 'sdn 012', 6, 'Ya', 'Tidak', 0, 0, 0, 'Tidak', 0, 1, 2, 0, 0, 'Kandung', 'tdk', 'Ya', 'a', 'Tidak', 'indonesia', 'K', 'Aktif', '', 170, 50, 'KKK', 'SD', NULL, 1),
('1477', 0, '', 0, 'Coba murid baru', 'Perempuan', 'jogja', '2018-07-01', 'Islam', 'Tidak', '', 0, 0, '', '', '', 0, 'Dengan Orang Tua', 'Dalam Daerah', 'Jalan Kaki', 0, '', NULL, 0, 'Ya', 'Ya', 0, 0, 0, 'Ya', NULL, 0, 0, 0, 0, 'Kandung', '', 'Ya', '', 'Tidak', '', '', 'Aktif', '', 0, 0, '', '', 32, 1),
('5001', 0, '', 0, 'Pendaftar satu', 'Perempuan', NULL, NULL, 'Islam', 'Tidak', '', 0, 0, '', '', '', 0, 'Dengan Orang Tua', 'Dalam Daerah', 'Jalan Kaki', 0, '', NULL, 0, 'Ya', 'Ya', 0, 0, 0, 'Ya', NULL, 0, 0, 0, 0, 'Kandung', '', 'Ya', '', 'Tidak', '', '', 'Aktif', '', 0, 0, '', '', 42, 1),
('5002', 0, '', 0, 'kocheng', NULL, NULL, NULL, 'Islam', 'Tidak', '', 0, 0, '', '', '', 0, 'Dengan Orang Tua', 'Dalam Daerah', 'Jalan Kaki', 0, '', NULL, 0, 'Ya', 'Ya', 0, 0, 0, 'Ya', NULL, 0, 0, 0, 0, 'Kandung', '', 'Ya', '', 'Tidak', '', '', 'Aktif', '', 0, 0, '', '', 48, 1),
('505050', 0, '', 0, 'Naira', 'Perempuan', '', '0000-00-00', 'Islam', 'Tidak', '', 0, 0, '', '', '', 0, 'Dengan Orang Tua', 'Dalam Daerah', 'Jalan Kaki', 0, '', NULL, 0, 'Ya', 'Ya', 0, 0, 0, 'Ya', NULL, 0, 0, 0, 0, 'Kandung', '', 'Ya', '', 'Tidak', '', '', 'Aktif', '', 0, 0, '', '', NULL, 0),
('55555550', 0, '', 0, 'pendaftar test', 'Perempuan', NULL, NULL, 'Islam', 'Tidak', 'jalan alan', 0, 0, '', '', '', 0, 'Dengan Orang Tua', 'Dalam Daerah', 'Jalan Kaki', 0, '', NULL, 0, 'Ya', 'Ya', 0, 0, 0, 'Ya', NULL, 1, 1, 0, 0, 'Kandung', '', 'Ya', '', 'Tidak', '', '', 'Aktif', '', 160, 50, '', '', 60, 3),
('6001', 0, '', 0, 'Pendaftar dua', 'Laki-Laki', NULL, NULL, 'Islam', 'Tidak', 'ghu', 0, 0, '', '', '', 0, 'Dengan Orang Tua', 'Dalam Daerah', 'Jalan Kaki', 0, '', NULL, 0, 'Ya', 'Ya', 0, 0, 0, 'Ya', NULL, 2, 2, 1, 0, 'Kandung', '', 'Ya', '', 'Tidak', '', '', 'Aktif', '', 155, 45, '', '', 40, 1),
('622', 0, '', 0, 'in', NULL, NULL, NULL, 'Islam', 'Tidak', '', 0, 0, '', '', '', 0, 'Dengan Orang Tua', 'Dalam Daerah', 'Jalan Kaki', 0, '', NULL, 0, 'Ya', 'Ya', 0, 0, 0, 'Ya', NULL, 0, 0, 0, 0, 'Kandung', '', 'Ya', '', 'Tidak', '', '', 'Aktif', '', 0, 0, '', '', 46, 1),
('7001', 0, '', 0, 'pendaftar tiga', 'Laki-Laki', NULL, NULL, 'Islam', 'Tidak', 'jakalz', 0, 0, '', '', '', 0, 'Dengan Orang Tua', 'Dalam Daerah', 'Jalan Kaki', 0, '', NULL, 0, 'Ya', 'Ya', 0, 0, 0, 'Ya', NULL, 2, 1, 0, 0, 'Kandung', '', 'Ya', '', 'Tidak', '', '', 'Aktif', '', 166, 50, '', '', 43, 1),
('8001', 0, '', 0, 'Pendaftar empat', 'Perempuan', NULL, NULL, 'Islam', 'Tidak', '', 0, 0, '', '', '', 0, 'Dengan Orang Tua', 'Dalam Daerah', 'Jalan Kaki', 0, '', NULL, 0, 'Ya', 'Ya', 0, 0, 0, 'Ya', NULL, 0, 0, 0, 0, 'Kandung', '', 'Ya', '', 'Tidak', '', '', 'Aktif', '', 0, 0, '', '', 41, 1),
('980001', 0, '', 0, 'okok', NULL, NULL, NULL, 'Islam', 'Tidak', '', 0, 0, '', '', '', 0, 'Dengan Orang Tua', 'Dalam Daerah', 'Jalan Kaki', 0, '', NULL, 0, 'Ya', 'Ya', 0, 0, 0, 'Ya', NULL, 0, 0, 0, 0, 'Kandung', '', 'Ya', '', 'Tidak', '', '', 'Aktif', '', 0, 0, '', '', 44, 1);

-- --------------------------------------------------------

--
-- Table structure for table `siswa_kelas`
--

CREATE TABLE `siswa_kelas` (
  `id_siswa_kelas` int(5) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenjang` enum('7','8','9') NOT NULL,
  `agama` enum('Islam','Kristen','Katholik','Hindu','Budha','Lainnya') NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `total_nilai` float NOT NULL,
  `nilai_un_nun` float NOT NULL,
  `total_nilai_kenaikan` float NOT NULL,
  `prestasi_or` float NOT NULL,
  `prestasi_tahfidz` float NOT NULL,
  `id_tahun_ajaran` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa_kelas`
--

INSERT INTO `siswa_kelas` (`id_siswa_kelas`, `nisn`, `nama`, `jenjang`, `agama`, `jenis_kelamin`, `total_nilai`, `nilai_un_nun`, `total_nilai_kenaikan`, `prestasi_or`, `prestasi_tahfidz`, `id_tahun_ajaran`) VALUES
(1, '1234567816', 'Gita Moly Ayu', '7', 'Islam', 'Perempuan', 0, 26.3, 0, 0, 75, 1),
(2, '1234567817', 'Riris Indriyani', '7', 'Katholik', 'Perempuan', 0, 26.3, 0, 0, 78, 1),
(3, '1234567818', 'Sidik Putra Perwira', '7', 'Islam', 'Laki-Laki', 0, 26.4, 0, 0, 80, 1),
(5, '1234567820', 'Cita Wiyaninta', '7', 'Islam', 'Perempuan', 0, 25.8, 0, 0, 82, 1),
(6, '1234567821', 'Hanggini Puri Retno', '7', 'Hindu', 'Perempuan', 0, 25.8, 0, 0, 73, 1),
(7, '1234567822', 'Yuli Rahmawati', '7', 'Kristen', 'Perempuan', 0, 25.9, 0, 0, 69, 1),
(8, '1234567823', 'Pevita Pearce', '7', 'Islam', 'Perempuan', 0, 26.5, 0, 0, 91, 1),
(9, '1234567824', 'Rizki Tsuma Jaya', '7', 'Islam', 'Laki-Laki', 0, 26.5, 0, 0, 66, 1),
(10, '1234567825', 'Nurdin Rezmani', '7', 'Islam', 'Laki-Laki', 0, 26.7, 0, 0, 94, 1),
(11, '1234567826', 'Akhmad Sasongko', '7', 'Islam', 'Laki-Laki', 0, 27, 0, 0, 90, 1),
(12, '1234567827', 'Raisa Andriana', '7', 'Islam', 'Perempuan', 0, 27.1, 0, 0, 84, 1),
(13, '1234567828', 'Monita Tahalea', '7', 'Islam', 'Perempuan', 0, 27, 0, 0, 79, 1),
(14, '1234567829', 'Jesika Iskandar', '7', 'Islam', 'Perempuan', 0, 28.4, 0, 0, 87, 1),
(15, '1234567830', 'Melody Amade', '8', 'Islam', 'Perempuan', 0, 24.6, 0, 0, 81, 1),
(16, '1234567831', 'Daniel Reynando', '8', 'Islam', 'Laki-Laki', 0, 23.7, 0, 0, 83, 1),
(17, '1234567832', 'Firanti Maulida Putri', '8', 'Hindu', 'Perempuan', 0, 24.1, 0, 0, 74, 1),
(19, '1234567834', 'Rezki Fitrah', '8', 'Kristen', 'Laki-Laki', 0, 22, 0, 0, 75, 1),
(20, '1234567835', 'Daniel Mananta', '8', 'Katholik', 'Laki-Laki', 0, 26.9, 0, 0, 94, 1),
(21, '1234567836', 'Dessy Mayang Sari', '8', 'Budha', 'Perempuan', 0, 27, 0, 0, 92, 1),
(22, '1234567837', 'Hansa Ufairani Ramadhan', '9', 'Katholik', 'Perempuan', 0, 27, 0, 0, 96, 1),
(23, '1234567838', 'Dewi Purmala Sari', '9', 'Islam', 'Perempuan', 0, 27.1, 0, 0, 70, 1),
(24, '1234567839', 'Sesarika', '9', 'Islam', 'Perempuan', 0, 27.1, 0, 0, 80, 1),
(25, '1234567840', 'Priska Agustina', '9', 'Islam', 'Perempuan', 0, 27.2, 0, 0, 67, 1),
(26, '1234567841', 'Dini Antika', '9', 'Islam', 'Perempuan', 0, 27.2, 0, 0, 65, 1),
(27, '1234567842', 'Hesti Yulia Rosadi', '9', 'Islam', 'Perempuan', 0, 27.3, 0, 0, 69, 1),
(28, '1234567843', 'Dandi Irawan', '7', 'Katholik', 'Laki-Laki', 0, 27.3, 0, 0, 68, 1),
(29, '1234567844', 'Dude Harlino', '7', 'Islam', 'Laki-Laki', 0, 27.4, 0, 0, 80, 1),
(30, '1234567845', 'Bagus Prakoso', '7', 'Islam', 'Laki-Laki', 0, 27.4, 0, 0, 88, 1),
(31, '1234567846', 'Yudi Waryadi', '7', 'Islam', 'Laki-Laki', 0, 27.5, 0, 0, 95, 1),
(32, '1234567847', 'Desta Reynaldi', '7', 'Budha', 'Laki-Laki', 0, 27.5, 0, 0, 79, 1),
(33, '1234567848', 'Jakaria Sawerna', '7', 'Islam', 'Laki-Laki', 0, 27.6, 0, 0, 74, 1),
(34, '1234567849', 'Ruben Onsu', '8', 'Islam', 'Laki-Laki', 0, 27.6, 0, 0, 83, 1),
(35, '1234567850', 'Lucky Tama', '7', 'Islam', 'Laki-Laki', 0, 27.7, 0, 0, 75, 1),
(36, '1234567851', 'Gagah Perdana', '8', 'Islam', 'Laki-Laki', 0, 27.7, 0, 0, 75, 1),
(37, '1234567852', 'Laode Muhammad', '7', 'Islam', 'Laki-Laki', 0, 27.8, 0, 0, 72, 1),
(38, '1234567853', 'Fawwas Kurniawan', '8', 'Islam', 'Laki-Laki', 0, 27.8, 0, 0, 85, 1),
(39, '1234567854', 'Silvi Yuliantika', '7', 'Islam', 'Perempuan', 0, 27.9, 0, 0, 86, 1),
(40, '1234567855', 'Fatimah Azzahra', '8', 'Islam', 'Perempuan', 0, 27.9, 0, 0, 93, 1),
(41, '1234567856', 'Anisa Maulida Purnama', '8', 'Islam', 'Perempuan', 0, 28, 0, 0, 95, 1),
(42, '1234567857', 'Marlev Maenaki', '8', 'Katholik', 'Laki-Laki', 0, 28, 0, 0, 86, 1),
(43, '1234567858', 'Setya Adi Nugroho', '7', 'Islam', 'Laki-Laki', 0, 28.1, 0, 0, 79, 1),
(44, '1234567859', 'Tsummo Aji', '7', 'Islam', 'Laki-Laki', 0, 28.1, 0, 0, 75, 1),
(45, '1234567860', 'Nabilla Kania Ningrum', '7', 'Islam', 'Perempuan', 0, 28.2, 0, 0, 78, 1),
(46, '1234567861', 'Essy Safitri', '7', 'Islam', 'Perempuan', 0, 28.2, 0, 0, 80, 1),
(47, '1234567862', 'Senjani Julaeshi', '7', 'Kristen', 'Perempuan', 0, 28.3, 0, 0, 92, 1),
(48, '1234567863', 'Gita Iman Sari', '7', 'Kristen', 'Perempuan', 0, 28.3, 0, 0, 82, 1),
(49, '1234567864', 'Risa Sarasvati', '7', 'Kristen', 'Perempuan', 0, 28.4, 0, 0, 73, 1),
(50, '1234567865', 'Isyana Dwi Puwaka', '7', 'Kristen', 'Perempuan', 0, 28.4, 0, 0, 69, 1),
(51, '1234567866', 'Irene Andoni', '7', 'Budha', 'Perempuan', 0, 28.5, 0, 0, 91, 1),
(52, '1234567867', 'Lala Karmela', '7', 'Hindu', 'Perempuan', 0, 28.5, 0, 0, 66, 1),
(53, '1234567868', 'Petra Sihombing', '7', 'Lainnya', 'Laki-Laki', 0, 28.6, 0, 0, 94, 1),
(54, '1234567869', 'Hamish Daud', '7', 'Hindu', 'Laki-Laki', 0, 28.6, 0, 0, 90, 1),
(55, '1234567870', 'Keenan Pearce', '7', 'Lainnya', 'Laki-Laki', 0, 28.7, 0, 0, 84, 1),
(56, '1234567871', 'Donita hamiyan', '7', 'Islam', 'Perempuan', 0, 28.7, 0, 0, 79, 1),
(57, '1234567872', 'Fachrur Rozi', '7', 'Hindu', 'Laki-Laki', 0, 28.9, 0, 0, 87, 1),
(58, '1234567873', 'Bella Nur Hidayah Aesyi', '7', 'Hindu', 'Perempuan', 0, 28.9, 0, 0, 81, 1),
(59, '1234567874', 'Tatania Mellani', '7', 'Lainnya', 'Perempuan', 0, 30, 0, 0, 83, 1),
(60, '1234567875', 'Sekar Melati Ayu', '7', 'Budha', 'Perempuan', 0, 30, 0, 0, 74, 1),
(61, '1234567876', 'Teguh Wahyu Anggara', '7', 'Hindu', 'Laki-Laki', 0, 30.1, 0, 0, 72, 1),
(62, '1234567877', 'Murni Dwi Alfiyanti', '7', 'Islam', 'Perempuan', 0, 30.1, 0, 0, 75, 1),
(63, '1234567878', 'Fitri Ameliya', '7', 'Budha', 'Perempuan', 0, 30.2, 0, 0, 94, 1),
(64, '1234567879', 'Dicky Zulianto', '7', 'Islam', 'Laki-Laki', 0, 30.2, 0, 0, 92, 1),
(65, '1234567880', 'Diana Rakhmawati', '7', 'Islam', 'Perempuan', 0, 30.3, 0, 0, 96, 1),
(66, '1234567881', 'Pupu Anggita Sari', '7', 'Hindu', 'Perempuan', 0, 30.3, 0, 0, 70, 1),
(67, '1234567882', 'Nabil Firdaus', '7', 'Islam', 'Laki-Laki', 0, 30.4, 0, 0, 80, 1),
(68, '1234567883', 'Aditya Rahman', '7', 'Islam', 'Laki-Laki', 0, 30.4, 0, 0, 67, 1),
(69, '1234567884', 'Nesya Vatty Azzahra', '7', 'Islam', 'Perempuan', 0, 30.5, 0, 0, 65, 1),
(70, '1234567885', 'Fatmawati', '7', 'Budha', 'Perempuan', 0, 30.5, 0, 0, 69, 1),
(71, '1234567886', 'Fadilla Utami', '7', 'Islam', 'Perempuan', 0, 30.6, 0, 0, 68, 1),
(72, '1234567887', 'Fahni Nesa Khulqi', '7', 'Islam', 'Perempuan', 0, 30.6, 0, 0, 80, 1),
(73, '1234567888', 'Anggita Fitriana Ratih', '7', 'Islam', 'Perempuan', 0, 30.7, 0, 0, 88, 1),
(74, '1234567889', 'Anggi Kusuma Putri', '7', 'Islam', 'Perempuan', 0, 30.7, 0, 0, 95, 1),
(75, '1234567890', 'Anggraeni Dias Saputri', '7', 'Islam', 'Perempuan', 0, 30.8, 0, 0, 79, 1),
(76, '1234567891', 'Irma Suryani Sofyan', '7', 'Islam', 'Perempuan', 0, 30.8, 0, 0, 74, 1),
(77, '1234567892', 'Yezita Kumala Wongso', '7', 'Islam', 'Perempuan', 0, 30.9, 0, 0, 83, 1),
(78, '1234567893', 'Dwi Kusumastuti', '7', 'Islam', 'Perempuan', 0, 30.9, 0, 0, 75, 1),
(79, '1234567894', 'Nur Muhammad', '7', 'Islam', 'Laki-Laki', 0, 31, 0, 0, 75, 1),
(80, '1234567895', 'Tan Halim Perdana', '7', 'Islam', 'Laki-Laki', 0, 31.1, 0, 0, 72, 1),
(81, '1234567896', 'Diki Hidayatulloh', '7', 'Islam', 'Laki-Laki', 0, 31.1, 0, 0, 85, 1),
(82, '1234567897', 'Audrey Bella Tantowi', '7', 'Islam', 'Perempuan', 0, 31.2, 0, 0, 86, 1),
(83, '1234567898', 'Berlian Amalia Burhan', '7', 'Katholik', 'Perempuan', 0, 31.2, 0, 0, 93, 1),
(84, '1234567899', 'Annisa Dian Pertiwi', '7', 'Islam', 'Perempuan', 0, 31.3, 0, 0, 95, 1),
(85, '1234567900', 'Budi Haryanto', '7', 'Budha', 'Laki-Laki', 0, 31.3, 0, 0, 86, 1),
(86, '1234567901', 'Dwi wira surachandra ', '7', 'Islam', 'Laki-Laki', 0, 25.1, 0, 0, 79, 1),
(87, '1234567902', 'Denis Muhammad Irfan ', '7', 'Islam', 'Laki-Laki', 0, 25.1, 0, 0, 84, 1),
(88, '1234567903', 'Dwi Laksana Bhakti ', '7', 'Islam', 'Laki-Laki', 0, 25.2, 0, 0, 79, 1),
(89, '1234567904', 'muhammad yusuf ', '7', 'Islam', 'Laki-Laki', 0, 25.2, 0, 0, 87, 1),
(90, '1234567905', 'Gamaliel Candra Winata', '7', 'Islam', 'Laki-Laki', 0, 25.3, 0, 0, 81, 1),
(91, '1234567906', 'delsa satya pratama ', '7', 'Islam', 'Laki-Laki', 0, 25.3, 0, 0, 83, 1),
(92, '1234567907', 'Yogi Rosi Prasetyo ', '7', 'Islam', 'Laki-Laki', 0, 25.4, 0, 0, 74, 1),
(93, '1234567908', 'Juan Yoshino ', '7', 'Islam', 'Laki-Laki', 0, 25.7, 0, 0, 72, 1),
(94, '1234567909', 'Rizal Ermanto ', '7', 'Islam', 'Laki-Laki', 0, 25.7, 0, 0, 75, 1),
(95, '1234567910', 'dinda agung apriyana ', '7', 'Islam', 'Laki-Laki', 0, 26.2, 0, 0, 94, 1),
(96, '1234567911', 'Suherdi ', '7', 'Islam', 'Laki-Laki', 0, 26.2, 0, 0, 92, 1),
(97, '1234567912', 'Ahmad Hasan N ', '7', 'Islam', 'Laki-Laki', 0, 26.3, 0, 0, 96, 1),
(98, '1234567913', 'Deri Likandra Triputra ', '7', 'Islam', 'Laki-Laki', 0, 26.3, 0, 0, 70, 1),
(99, '1234567914', 'Muhamad Rifly Robiana ', '7', 'Islam', 'Laki-Laki', 0, 26.4, 0, 0, 80, 1),
(100, '1234567915', 'Daniel Oktario ', '7', 'Islam', 'Laki-Laki', 0, 26.1, 0, 0, 67, 1),
(101, '1234567916', 'Israqi Atsiruddin Sidqi Ramdhani ', '7', 'Islam', 'Laki-Laki', 0, 25.8, 0, 0, 65, 1),
(102, '1234567917', 'Ristami annisa ', '7', 'Islam', 'Perempuan', 0, 25.8, 0, 0, 69, 1),
(103, '1234567918', 'Evelyn Tanoe', '7', 'Islam', 'Perempuan', 0, 25.9, 0, 0, 86, 1),
(104, '1234567919', 'Dhea Novia Parhana ', '7', 'Hindu', 'Perempuan', 0, 26.5, 0, 0, 93, 1),
(105, '1234567920', 'Ajeng Gerhana Wulan ', '7', 'Hindu', 'Perempuan', 0, 26.5, 0, 0, 95, 1),
(106, '1234567921', 'Annisa Maretiamy ', '7', 'Hindu', 'Perempuan', 0, 26.7, 0, 0, 86, 1),
(107, '1234567922', 'Lassandra Kattyana Santos ', '7', 'Hindu', 'Perempuan', 0, 27, 0, 0, 79, 1),
(108, '1234567923', 'Lestari pratiwi ', '7', 'Budha', 'Perempuan', 0, 27.1, 0, 0, 84, 1),
(109, '1234567924', 'Muni Ledia Astuti ', '7', 'Budha', 'Perempuan', 0, 27, 0, 0, 79, 1),
(110, '1234567925', 'Meisa damayanti ', '7', 'Budha', 'Perempuan', 0, 28.4, 0, 0, 87, 1),
(111, '1234567926', 'Sri Dewi Cahyadi ', '7', 'Budha', 'Perempuan', 0, 24.6, 0, 0, 81, 1),
(112, '1234567927', 'Indri Zaqiah ', '7', 'Katholik', 'Perempuan', 0, 23.7, 0, 0, 83, 1),
(113, '1234567928', 'Nadya Saphira Esfandiari ', '7', 'Katholik', 'Perempuan', 0, 24.1, 0, 0, 74, 1),
(114, '1234567929', 'Winda ayulia agustina ', '7', 'Katholik', 'Perempuan', 0, 25.5, 0, 0, 72, 1),
(115, '1234567930', 'Rani nuryati ', '7', 'Katholik', 'Perempuan', 0, 22, 0, 0, 75, 1),
(116, '1234567931', 'Mariam Marianti ', '7', 'Katholik', 'Perempuan', 0, 26.9, 0, 0, 94, 1),
(117, '1234567932', 'Gina Sonia ', '7', 'Katholik', 'Perempuan', 0, 27, 0, 0, 92, 1),
(118, '1234567933', 'Aulia Rahmawaty ', '7', 'Kristen', 'Perempuan', 0, 27, 0, 0, 96, 1),
(119, '1234567934', 'Susanti ', '7', 'Kristen', 'Perempuan', 0, 27.1, 0, 0, 70, 1),
(120, '1234567935', 'Putri marytha setiadi ', '7', 'Kristen', 'Perempuan', 0, 27.1, 0, 0, 80, 1),
(121, '1234567936', 'Selisa Fatimah ', '7', 'Kristen', 'Perempuan', 0, 27.2, 0, 0, 67, 1),
(122, '1234567937', 'Khansa R ', '7', 'Kristen', 'Perempuan', 0, 27.2, 0, 0, 65, 1),
(123, '1234567938', 'Risma nopianti ', '7', 'Kristen', 'Perempuan', 0, 27.3, 0, 0, 69, 1),
(124, '1234567939', 'Lulu adilah fasya  ', '7', 'Kristen', 'Perempuan', 0, 27.3, 0, 0, 68, 1),
(125, '1234567940', 'Raka nurmawan  ', '7', 'Islam', 'Laki-Laki', 0, 27.4, 0, 0, 80, 1),
(126, '1234567941', 'Ridwan Raynaldi Putra ', '7', 'Islam', 'Laki-Laki', 0, 27.4, 0, 0, 88, 1),
(127, '1234567942', 'Adi Darmawan ', '7', 'Islam', 'Laki-Laki', 0, 27.5, 0, 0, 95, 1),
(128, '1234567943', 'Avrialy kosvi ', '7', 'Islam', 'Laki-Laki', 0, 27.5, 0, 0, 79, 1),
(129, '1234567944', 'Lucky Wiratama Suganda ', '7', 'Islam', 'Laki-Laki', 0, 27.6, 0, 0, 74, 1),
(130, '1234567945', 'Boy William Nuon ', '7', 'Islam', 'Laki-Laki', 0, 27.6, 0, 0, 83, 1),
(131, '1234567946', 'Rizky Irhas Firdaus ', '7', 'Katholik', 'Laki-Laki', 0, 27.7, 0, 0, 94, 1),
(132, '1234567947', 'Robbi sujana ', '7', 'Katholik', 'Laki-Laki', 0, 27.7, 0, 0, 92, 1),
(133, '1234567948', 'Renaya Sarasti ', '7', 'Islam', 'Perempuan', 0, 27.8, 0, 0, 96, 1),
(134, '1234567949', 'Jayanti Widiastuti ', '7', 'Islam', 'Perempuan', 0, 27.8, 0, 0, 70, 1),
(135, '1234567950', 'Armelia nur asyiffa  ', '7', 'Islam', 'Perempuan', 0, 27.9, 0, 0, 80, 1),
(136, '1234567951', 'Annisa Ayu Siwi ', '7', 'Islam', 'Perempuan', 0, 27.9, 0, 0, 67, 1),
(137, '1234567952', 'Kirana Citra Destiyanti ', '7', 'Islam', 'Perempuan', 0, 28, 0, 0, 65, 1),
(138, '1234567953', 'Ichsan nurmansyah ', '7', 'Islam', 'Laki-Laki', 0, 28, 0, 0, 69, 1),
(139, '1234567954', 'Wahyu Aji Komara ', '7', 'Islam', 'Laki-Laki', 0, 28.1, 0, 0, 68, 1),
(140, '1234567955', 'afgani maulana a.s. ', '7', 'Islam', 'Laki-Laki', 0, 28.1, 0, 0, 80, 1),
(141, '1234567956', 'Feggy Rizkiana Herman ', '7', 'Islam', 'Laki-Laki', 0, 28.5, 0, 0, 88, 1),
(142, '1234567957', 'Raka Gustiana ', '7', 'Islam', 'Laki-Laki', 0, 28.6, 0, 0, 95, 1),
(143, '1234567958', 'Deri Fauzi ', '7', 'Islam', 'Laki-Laki', 0, 28.6, 0, 0, 79, 1),
(144, '1234567959', 'Israqi Atsiruddin Sidqi Ramdhani ', '7', 'Budha', 'Laki-Laki', 0, 28.7, 0, 0, 74, 1),
(145, '1234567960', 'ahmad fauzan naufal  ', '7', 'Islam', 'Laki-Laki', 0, 28.7, 0, 0, 83, 1),
(146, '1234567961', 'PujiRidwansyah ', '7', 'Budha', 'Laki-Laki', 0, 28.9, 0, 0, 88, 1),
(147, '1234567962', 'moch adnand heriansyah ', '7', 'Islam', 'Laki-Laki', 0, 28.9, 0, 0, 95, 1),
(148, '1234567963', 'Rendi Agus Tirtana ', '7', 'Islam', 'Laki-Laki', 0, 30, 0, 0, 79, 1),
(149, '1234567964', 'Muhammad Rizki Alhafizh ', '7', 'Islam', 'Laki-Laki', 0, 30, 0, 0, 74, 1),
(150, '1234567965', 'ari ramdani ', '7', 'Islam', 'Laki-Laki', 0, 30.1, 0, 0, 83, 1),
(151, '1234567966', 'Muhammad Itsal Septian Rahman ', '7', 'Islam', 'Laki-Laki', 0, 30.1, 0, 0, 75, 1),
(152, '1234567967', 'Hilmy MaulanaRachmawan ', '7', 'Islam', 'Laki-Laki', 0, 30.2, 0, 0, 75, 1),
(153, '1234567968', 'furqon saefulloh ', '7', 'Islam', 'Laki-Laki', 0, 30.2, 0, 0, 72, 1),
(154, '1234567969', 'Dicky Sudrajat ', '7', 'Islam', 'Laki-Laki', 0, 30.3, 0, 0, 85, 1),
(155, '1234567970', 'muhammad aldi ramdhani ', '7', 'Islam', 'Laki-Laki', 0, 30.3, 0, 0, 86, 1),
(156, '1234567971', 'Peter Sulaeman ', '7', 'Lainnya', 'Laki-Laki', 0, 30.4, 0, 0, 93, 1),
(157, '1234567972', 'Iman  ', '7', 'Lainnya', 'Laki-Laki', 0, 30.4, 0, 0, 95, 1),
(158, '1234567973', 'Suci Ananda ', '7', 'Budha', 'Perempuan', 0, 30.5, 0, 0, 86, 1),
(159, '1234567974', 'Ristya ariyani ', '7', 'Hindu', 'Perempuan', 0, 30.5, 0, 0, 79, 1),
(160, '1234567975', 'Citra Pradita Effendi ', '7', 'Hindu', 'Perempuan', 0, 30.6, 0, 0, 75, 1),
(161, '1234567976', 'ita juwita ', '7', 'Islam', 'Perempuan', 0, 30.6, 0, 0, 78, 1),
(162, '1234567977', 'Ana Muslimah ', '7', 'Islam', 'Perempuan', 0, 30.7, 0, 0, 80, 1),
(163, '1234567978', 'Siti Nurjanah ', '7', 'Islam', 'Perempuan', 0, 30.7, 0, 0, 92, 1),
(164, '1234567979', 'Diny Maryani Hermawan ', '7', 'Islam', 'Perempuan', 0, 30.8, 0, 0, 82, 1),
(165, '1234567980', 'Mita Amelia ', '7', 'Islam', 'Perempuan', 0, 30.8, 0, 0, 73, 1),
(166, '1234567981', 'Ressa Pupu Handayani ', '7', 'Islam', 'Perempuan', 0, 30.9, 0, 0, 69, 1),
(167, '1234567982', 'Anisa Ayu Parwati ', '7', 'Islam', 'Perempuan', 0, 30.9, 0, 0, 91, 1),
(168, '1234567983', 'Ira Mariana ', '7', 'Islam', 'Perempuan', 0, 31, 0, 0, 66, 1),
(169, '1234567984', 'Tatie Mulyati ', '7', 'Islam', 'Perempuan', 0, 31.1, 0, 0, 94, 1),
(170, '1234567985', 'Ranti Prahastanti ', '7', 'Islam', 'Perempuan', 0, 31.1, 0, 0, 90, 1),
(171, '1234567986', 'Esya Swasti Sukmatia ', '7', 'Islam', 'Perempuan', 0, 31.2, 0, 0, 84, 1),
(172, '1234567987', 'anggi ratnasari ', '7', 'Islam', 'Perempuan', 0, 31.2, 0, 0, 79, 1),
(173, '1234567988', 'Regina Eldinia Rahayu ', '7', 'Islam', 'Perempuan', 0, 31.3, 0, 0, 87, 1),
(174, '1234567989', 'Rivani Asri Pratiwi ', '7', 'Islam', 'Perempuan', 0, 31.3, 0, 0, 81, 1),
(175, '1234567990', 'yolanda ayu syafira ', '7', 'Islam', 'Perempuan', 0, 25.1, 0, 0, 83, 1),
(176, '1234567991', 'Nurhasannah Safitri ', '7', 'Islam', 'Perempuan', 0, 25.1, 0, 0, 74, 1),
(177, '1234567992', 'Kania Anisa Lestari ', '7', 'Budha', 'Perempuan', 0, 25.2, 0, 0, 72, 1),
(178, '1234567993', 'nitasukmala ', '7', 'Islam', 'Perempuan', 0, 25.2, 0, 0, 75, 1),
(179, '1234567994', 'Putri Medina Agrezta ', '7', 'Islam', 'Perempuan', 0, 25.3, 0, 0, 94, 1),
(180, '1234567995', 'wendyna oktaviani ', '7', 'Islam', 'Perempuan', 0, 25.3, 0, 0, 92, 1),
(181, '1234567996', 'hanna tasya ', '7', 'Islam', 'Perempuan', 0, 25.4, 0, 0, 96, 1),
(182, '1234567997', 'Evi Hafizah Rahma ', '7', 'Islam', 'Perempuan', 0, 25.7, 0, 0, 70, 1),
(183, '1234567998', 'Erika Putri Cantika', '7', 'Islam', 'Perempuan', 0, 25.7, 0, 0, 80, 1),
(184, '1234567999', 'zella zakiyah ', '7', 'Islam', 'Perempuan', 0, 26.2, 0, 0, 67, 1),
(185, '1234568000', 'Syahdan Dwi Cahyo ', '7', 'Islam', 'Laki-Laki', 0, 26.2, 0, 0, 65, 1),
(186, '1234568001', 'yogie nugraha ', '7', 'Islam', 'Laki-Laki', 0, 26.3, 0, 0, 69, 1),
(187, '1234568002', 'Agus Setiana ', '7', 'Islam', 'Laki-Laki', 0, 26.3, 0, 0, 68, 1),
(188, '1234568003', 'andrian kusnadi ', '7', 'Islam', 'Laki-Laki', 0, 26.4, 0, 0, 80, 1),
(189, '1234568004', 'irfan adi pamuji ', '7', 'Islam', 'Laki-Laki', 0, 26.1, 0, 0, 78, 1),
(190, '1234568005', 'Bagus Rio Prasojo ', '7', 'Islam', 'Laki-Laki', 0, 25.8, 0, 0, 80, 1),
(191, '1234568006', 'Bayu Nugraha Libriansyah ', '7', 'Islam', 'Laki-Laki', 0, 25.8, 0, 0, 92, 1),
(192, '1234568007', 'arief sudianto ', '7', 'Islam', 'Laki-Laki', 0, 25.9, 0, 0, 82, 1),
(193, '1234568008', 'Rizky syaeful anwar ', '7', 'Islam', 'Laki-Laki', 0, 26.5, 0, 0, 73, 1),
(194, '1234568009', 'Yugo Sudirman', '7', 'Islam', 'Laki-Laki', 0, 28.5, 0, 0, 69, 1),
(195, '1234568010', 'Nur Devi Yusiawati Gumelar ', '7', 'Islam', 'Perempuan', 0, 28.6, 0, 0, 91, 1),
(196, '1234568011', 'juanita nurfadhillah hafyani ', '7', 'Islam', 'Perempuan', 0, 28.6, 0, 0, 66, 1),
(197, '1234568012', 'Kareyna Sugiono ', '7', 'Islam', 'Perempuan', 0, 28.7, 0, 0, 94, 1),
(198, '1234568013', 'Revina Sadiyyah Fatimah ', '7', 'Islam', 'Perempuan', 0, 28.7, 0, 0, 90, 1),
(199, '1234568014', 'Anjani Meilawati Dewi ', '7', 'Islam', 'Perempuan', 0, 28.9, 0, 0, 84, 1),
(200, '1234568015', 'Kurnia Imbar Sandi .S ', '7', 'Islam', 'Perempuan', 0, 28.9, 0, 0, 79, 1),
(201, '1234568016', 'Rida Himyati Hasna ', '7', 'Islam', 'Perempuan', 0, 30, 0, 0, 87, 1),
(202, '1234568017', 'Citra Mega Lestari ', '7', 'Islam', 'Perempuan', 0, 30, 0, 0, 81, 1),
(203, '1234568018', 'Hilda Nathaniela ', '7', 'Islam', 'Perempuan', 0, 30.1, 0, 0, 83, 1),
(204, '1234568019', 'Ninne Nuraida ', '7', 'Islam', 'Perempuan', 0, 30.1, 0, 0, 74, 1),
(205, '1234568020', 'lusianasaraswati dewi ', '7', 'Islam', 'Perempuan', 0, 30.2, 0, 0, 72, 1),
(206, '1234568021', 'ayudhia chandra pusparini  ', '7', 'Islam', 'Perempuan', 0, 30.2, 0, 0, 75, 1),
(207, '1234568022', 'Agnes Dirgantini Hakim ', '7', 'Islam', 'Perempuan', 0, 30.3, 0, 0, 94, 1),
(208, '1234568023', 'sinta komara  ', '7', 'Islam', 'Perempuan', 0, 30.3, 0, 0, 92, 1),
(209, '1234568024', 'Hazana Delfani ', '7', 'Islam', 'Perempuan', 0, 30.4, 0, 0, 96, 1),
(210, '1234568025', 'Siti Nurmala Asy\'syifa ', '7', 'Islam', 'Perempuan', 0, 30.4, 0, 0, 70, 1),
(211, '1234568026', 'Riska Gita Suhana ', '7', 'Islam', 'Perempuan', 0, 30.5, 0, 0, 80, 1),
(212, '1234568027', 'Yolanda Novitri Setiawan ', '7', 'Islam', 'Perempuan', 0, 30.5, 0, 0, 67, 1),
(213, '1234568028', 'Gracia vini ', '7', 'Islam', 'Perempuan', 0, 30.6, 0, 0, 65, 1),
(214, '1234568029', 'Novianti Warnerin ', '7', 'Islam', 'Perempuan', 0, 30.6, 0, 0, 69, 1),
(215, '1234568030', 'Ckasinta Winda S ', '7', 'Islam', 'Perempuan', 0, 30.7, 0, 0, 68, 1),
(216, '1234568031', 'Ghita Listyawati Piayu ', '7', 'Islam', 'Perempuan', 0, 30.7, 0, 0, 80, 1),
(217, '1234568032', 'Wulan Guritno Eri ', '7', 'Islam', 'Perempuan', 0, 30.8, 0, 0, 88, 1),
(218, '1234568033', 'Ayudia Bing Slamet', '7', 'Islam', 'Perempuan', 0, 30.8, 0, 0, 95, 1),
(219, '1234568034', 'Rara Ajeng Kusumadewi', '7', 'Islam', 'Perempuan', 0, 30.9, 0, 0, 79, 1),
(220, '1234568035', 'Muhammad doddy djakaria ', '7', 'Islam', 'Laki-Laki', 0, 30.9, 0, 0, 74, 1),
(221, '1234568036', 'Adnan Saefulloh ', '7', 'Islam', 'Laki-Laki', 0, 31, 0, 0, 83, 1),
(222, '1234568037', 'Arya Mahardika ', '7', 'Islam', 'Laki-Laki', 0, 31.1, 0, 0, 75, 1),
(223, '1234568038', 'alamda verdiyana ', '7', 'Islam', 'Laki-Laki', 0, 31.1, 0, 0, 75, 1),
(224, '1234568039', 'agungsaputra ', '7', 'Islam', 'Laki-Laki', 0, 31.2, 0, 0, 72, 1),
(225, '1234568040', 'Erwin Bani Adam ', '7', 'Islam', 'Laki-Laki', 0, 31.2, 0, 0, 85, 1),
(226, '1234568041', 'arif santoso ', '7', 'Islam', 'Laki-Laki', 0, 31.3, 0, 0, 86, 1),
(227, '1234568042', 'Muhammad Neval Maldini ', '7', 'Islam', 'Laki-Laki', 0, 31.3, 0, 0, 93, 1),
(228, '1234568043', 'Zaenal Abidin ', '7', 'Islam', 'Laki-Laki', 0, 25.1, 0, 0, 95, 1),
(229, '1234568044', 'Maulana Alif Anugrah ', '7', 'Islam', 'Laki-Laki', 0, 25.1, 0, 0, 86, 1),
(230, '1234568045', 'Ferdinand Is Suhendra ', '7', 'Islam', 'Laki-Laki', 0, 25.2, 0, 0, 79, 1),
(231, '1234568046', 'Saepuloh ', '7', 'Islam', 'Laki-Laki', 0, 25.2, 0, 0, 75, 1),
(232, '1234568047', 'muhammad ferdi ', '7', 'Islam', 'Laki-Laki', 0, 25.3, 0, 0, 78, 1),
(233, '1234568048', 'Dani Irawan ', '7', 'Islam', 'Laki-Laki', 0, 25.3, 0, 0, 80, 1),
(234, '1234568049', 'Brama lessandro santos ', '7', 'Islam', 'Laki-Laki', 0, 25.4, 0, 0, 92, 1),
(235, '1234568050', 'Rudi Herlambang', '7', 'Islam', 'Laki-Laki', 0, 25.7, 0, 0, 82, 1),
(236, '1234568051', 'windi ayu ', '7', 'Islam', 'Perempuan', 0, 25.7, 0, 0, 73, 1),
(237, '1234568052', 'Yulia Nur Safitri ', '7', 'Islam', 'Perempuan', 0, 26.2, 0, 0, 69, 1),
(238, '1234568053', 'Neneng Royani ', '7', 'Islam', 'Perempuan', 0, 26.2, 0, 0, 91, 1),
(239, '1234568054', 'Hanasira Afifa ', '7', 'Islam', 'Perempuan', 0, 26.3, 0, 0, 95, 1),
(240, '1234568055', 'Dwi Putri Januari ', '7', 'Islam', 'Perempuan', 0, 26.3, 0, 0, 86, 1),
(241, '1234568056', 'indah nur maulida ', '7', 'Islam', 'Perempuan', 0, 26.4, 0, 0, 79, 1),
(242, '1234568057', 'Dinda Sapta Carolina ', '7', 'Islam', 'Perempuan', 0, 26.1, 0, 0, 75, 1),
(243, '1234568058', 'Rosyanda Sastie Jagattri ', '7', 'Islam', 'Perempuan', 0, 25.8, 0, 0, 78, 1),
(244, '1234568059', 'Sonia Oktaviana ', '7', 'Islam', 'Perempuan', 0, 25.8, 0, 0, 80, 1),
(245, '1234568060', 'annisa dessetiani lee ', '7', 'Islam', 'Perempuan', 0, 25.9, 0, 0, 70, 1),
(246, '1234568061', 'Rachmawati sabilarizki ', '7', 'Islam', 'Perempuan', 0, 26.5, 0, 0, 80, 1),
(247, '1234568062', 'Bella Putri Nastiti ', '7', 'Islam', 'Perempuan', 0, 30.9, 0, 0, 67, 1),
(248, '1234568063', 'Pinaandriyani ', '7', 'Islam', 'Perempuan', 0, 30.9, 0, 0, 65, 1),
(249, '1234568064', 'Widi Dwi Adhawati ', '7', 'Islam', 'Perempuan', 0, 31, 0, 0, 69, 1),
(250, '1234568065', 'Isnaeni Handayani Mukti ', '7', 'Islam', 'Perempuan', 0, 31.1, 0, 0, 68, 1),
(251, '1234568066', 'Dita Julianti ', '7', 'Islam', 'Perempuan', 0, 31.1, 0, 0, 80, 1),
(252, '1234568067', 'Nurfa Resti Aulia ', '7', 'Islam', 'Perempuan', 0, 31.2, 0, 0, 88, 1),
(253, '1234568068', 'Salma Nur Aisy ', '7', 'Islam', 'Perempuan', 0, 31.2, 0, 0, 95, 1),
(254, '1234568069', 'suci wulan sari ', '7', 'Islam', 'Perempuan', 0, 31.3, 0, 0, 79, 1),
(255, '1234568070', 'Adelia Puspita', '7', 'Islam', 'Perempuan', 0, 31.3, 0, 0, 74, 1),
(256, '1234568071', 'Alfian Dwi Sukma', '7', 'Islam', 'Laki-Laki', 0, 25.1, 0, 0, 83, 1),
(257, '1234568072', 'Anan Winandar', '7', 'Islam', 'Laki-Laki', 0, 25.1, 0, 0, 75, 1),
(258, '1234568073', 'Asep Septian', '7', 'Islam', 'Laki-Laki', 0, 25.2, 0, 0, 75, 1),
(259, '1234568074', 'Bachtiar Saeful Bachri', '7', 'Islam', 'Laki-Laki', 0, 25.2, 0, 0, 69, 1),
(260, '1234568075', 'Bella Ayu Ratnasari', '7', 'Islam', 'Perempuan', 0, 25.3, 0, 0, 91, 1),
(261, '1234568076', 'Cahya Abdul Kholik', '7', 'Islam', 'Laki-Laki', 0, 25.3, 0, 0, 66, 1),
(262, '1234568077', 'Cahyadyana Fauzi', '7', 'Islam', 'Laki-Laki', 0, 25.4, 0, 0, 94, 1),
(263, '1234568078', 'Cahyaningsih', '7', 'Islam', 'Perempuan', 0, 25.7, 0, 0, 90, 1),
(264, '1234568079', 'Deni Priyatna', '7', 'Islam', 'Laki-Laki', 0, 25.7, 0, 0, 84, 1),
(265, '1234568080', 'Diky Haryanto', '7', 'Islam', 'Laki-Laki', 0, 26.2, 0, 0, 79, 1),
(266, '1234568081', 'Elvira Riana', '7', 'Islam', 'Perempuan', 0, 26.2, 0, 0, 87, 1),
(267, '1234568082', 'Erlita Indah A', '7', 'Islam', 'Perempuan', 0, 30.9, 0, 0, 81, 1),
(268, '1234568083', 'Eviratna Ningsih', '7', 'Islam', 'Perempuan', 0, 30.9, 0, 0, 83, 1),
(269, '1234568084', 'Fikri Fajra Pratama', '7', 'Islam', 'Laki-Laki', 0, 31, 0, 0, 74, 1),
(270, '1234568085', 'Gugun Agus Gunawan', '7', 'Islam', 'Laki-Laki', 0, 31.1, 0, 0, 72, 1),
(271, '1234568086', 'Intan Purnama Sari', '7', 'Islam', 'Perempuan', 0, 31.1, 0, 0, 75, 1),
(272, '1234568087', 'Isti Widiharyanti', '7', 'Islam', 'Perempuan', 0, 31.2, 0, 0, 94, 1),
(273, '1234568088', 'Khosriyani', '7', 'Islam', 'Perempuan', 0, 31.2, 0, 0, 92, 1),
(274, '1234568089', 'Millenia Delva Clarifta', '7', 'Islam', 'Perempuan', 0, 31.3, 0, 0, 96, 1),
(275, '1234568090', 'Mohammad Faisal Rosyad', '7', 'Islam', 'Laki-Laki', 0, 31.3, 0, 0, 70, 1),
(276, '1234568091', 'Nur Shinta Dewi', '7', 'Islam', 'Perempuan', 0, 25.1, 0, 0, 80, 1),
(277, '1234568092', 'Nur Indah Wulandari', '7', 'Islam', 'Perempuan', 0, 25.1, 0, 0, 67, 1),
(278, '1234568093', 'Nurul Annisa', '7', 'Islam', 'Perempuan', 0, 25.2, 0, 0, 65, 1),
(279, '1234568094', 'Rimawati', '7', 'Islam', 'Perempuan', 0, 25.2, 0, 0, 69, 1),
(280, '1234568095', 'Robby Anwar', '7', 'Islam', 'Laki-Laki', 0, 25.3, 0, 0, 68, 1),
(281, '1234568096', 'Rojannah', '7', 'Islam', 'Perempuan', 0, 25.3, 0, 0, 80, 1),
(282, '1234568097', 'Siti Aisyah', '7', 'Islam', 'Perempuan', 0, 25.4, 0, 0, 88, 1),
(283, '1234568098', 'Sujatmiko Dwi Purnomo', '7', 'Islam', 'Laki-Laki', 0, 25.7, 0, 0, 95, 1),
(284, '1234568099', 'Wika Muliya Sari', '7', 'Islam', 'Perempuan', 0, 25.7, 0, 0, 79, 1),
(285, '1234568100', 'Yuli Triangsih', '7', 'Islam', 'Perempuan', 0, 26.2, 0, 0, 74, 1),
(286, '1234568101', 'Alea Wibisono', '7', 'Islam', 'Perempuan', 0, 26.2, 0, 0, 65, 1),
(287, '1234568102', 'Nia Tamara', '7', 'Islam', 'Perempuan', 0, 30.9, 0, 0, 69, 1),
(288, '1234568103', 'Nizar Asharul Maulana', '7', 'Islam', 'Laki-Laki', 0, 30.9, 0, 0, 68, 1),
(289, '1234568104', 'Ranifah Dwi Lestari', '7', 'Islam', 'Perempuan', 0, 31, 0, 0, 80, 1),
(290, '1234568105', 'Luna Maya', '7', 'Islam', 'Perempuan', 0, 31.1, 0, 0, 88, 1),
(291, '1234568106', 'Abel Cantika', '7', 'Islam', 'Perempuan', 0, 31.1, 0, 0, 95, 1),
(292, '1234568107', 'Bobby Purba', '7', 'Islam', 'Laki-Laki', 0, 31.2, 0, 0, 79, 1),
(293, '1234568108', 'Steffan William', '7', 'Islam', 'Laki-Laki', 0, 31.2, 0, 0, 74, 1),
(294, '1234568109', 'Rifan Dwi Styawan', '7', 'Islam', 'Laki-Laki', 0, 31.3, 0, 0, 72, 1),
(295, '1234568110', 'Agung Budi Setyo', '7', 'Islam', 'Laki-Laki', 0, 31.3, 0, 0, 85, 1),
(296, '1234568111', 'Wenila Saputri', '7', 'Islam', 'Perempuan', 0, 25.1, 0, 0, 86, 1),
(297, '1234568112', 'Quenta Resnawari', '7', 'Islam', 'Perempuan', 0, 25.1, 0, 0, 93, 1),
(298, '1234568113', 'Anindhyta Syefta Putri', '7', 'Islam', 'Perempuan', 0, 25.2, 0, 0, 95, 1),
(299, '1234568114', 'Reynaldi Fero', '7', 'Islam', 'Laki-Laki', 0, 25.2, 0, 0, 86, 1),
(300, '1234568115', 'Dendi Apriadi', '7', 'Islam', 'Laki-Laki', 0, 25.3, 0, 0, 79, 1),
(301, '14523267', 'ini nadine', '7', 'Islam', 'Perempuan', 0, 0, 0, 0, 0, 1),
(302, '258', 'ini coba baru', '7', 'Islam', 'Perempuan', 0, 0, 0, 0, 0, 1),
(303, '1477', 'Coba murid baru', '7', 'Islam', 'Perempuan', 808, 0, 0, 0, 0, 1),
(304, '5001', 'Pendaftar satu', '7', 'Islam', 'Perempuan', 0, 0, 0, 80, 0, 1),
(305, '6001', 'Pendaftar dua', '7', 'Islam', 'Laki-Laki', 0, 0, 0, 80, 0, 1),
(306, '7001', 'pendaftar tiga', '7', 'Islam', 'Laki-Laki', 0, 0, 0, 93, 0, 1),
(307, '8001', 'Pendaftar empat', '7', 'Islam', 'Perempuan', 0, 0, 0, 80, 0, 1),
(308, '1234567819', 'Rahmaria Yunisa', '7', 'Islam', 'Perempuan', 0, 0, 0, 0, 0, 1),
(309, '', '', '7', 'Islam', '', 80, 0, 0, 0, 0, 1),
(310, '0426389062', 'Kartika Eka Putri Swasta', '7', 'Islam', 'Perempuan', 60, 0, 0, 0, 0, 1),
(311, '125478', 'Ong Seungwoo', '7', 'Islam', 'Laki-Laki', 0, 0, 0, 0, 0, 1),
(312, '5002', 'kocheng', '7', 'Islam', '', 6000, 0, 0, 0, 0, 1),
(313, '622', 'in', '7', 'Islam', '', 0, 0, 0, 0, 0, 1),
(314, '980001', 'okok', '7', 'Islam', '', 0, 0, 0, 0, 0, 1),
(315, '1234567833', 'Delima Indira', '7', 'Islam', 'Perempuan', 0, 0, 0, 0, 0, 1),
(316, '1001', 'Pendaftar satu', '7', 'Islam', '', 0, 0, 0, 0, 0, 2),
(317, '1002', 'pendaftar dua', '7', 'Islam', '', 0, 0, 0, 0, 0, 2),
(318, '14046', 'mcdu', '7', 'Islam', '', 0, 0, 0, 0, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `siswa_kelas_has_kelas_tambahan`
--

CREATE TABLE `siswa_kelas_has_kelas_tambahan` (
  `siswa_kelas_NISN` int(11) NOT NULL,
  `Kelas_tambahan_id_kelas_tambahan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa_kelas_reguler_berjalan`
--

CREATE TABLE `siswa_kelas_reguler_berjalan` (
  `id_siswa_kelas_reguler_berjalan` int(5) NOT NULL,
  `id_kelas_reguler_berjalan` int(10) NOT NULL,
  `nisn` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa_kelas_reguler_berjalan`
--

INSERT INTO `siswa_kelas_reguler_berjalan` (`id_siswa_kelas_reguler_berjalan`, `id_kelas_reguler_berjalan`, `nisn`) VALUES
(4, 1, '1234567900'),
(5, 1, '1234568042'),
(1, 1, '1234568090'),
(2, 1, '1234568109'),
(3, 1, '1234568110');

-- --------------------------------------------------------

--
-- Table structure for table `siswa_kelas_tambahan_berjalan`
--

CREATE TABLE `siswa_kelas_tambahan_berjalan` (
  `id_siswa_kelas_tambahan_berjalan` int(5) NOT NULL,
  `id_kelas_tambahan_berjalan` int(10) NOT NULL,
  `nisn` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa_mutasi_keluar`
--

CREATE TABLE `siswa_mutasi_keluar` (
  `id_siswa_mutasi_keluar` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `surat_ket_pindah` text,
  `surat_bebas_administrasi` text,
  `sekolah_tujuan` varchar(30) NOT NULL,
  `status_siswa` enum('Diterima','Ditolak','Dicabut','') DEFAULT NULL,
  `berkas_1` text,
  `berkas_2` text,
  `berkas_3` text,
  `berkas_4` text,
  `berkas_5` text,
  `id_tahun_ajaran` int(10) NOT NULL,
  `nisn` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa_mutasi_keluar`
--

INSERT INTO `siswa_mutasi_keluar` (`id_siswa_mutasi_keluar`, `nama`, `surat_ket_pindah`, `surat_bebas_administrasi`, `sekolah_tujuan`, `status_siswa`, `berkas_1`, `berkas_2`, `berkas_3`, `berkas_4`, `berkas_5`, `id_tahun_ajaran`, `nisn`) VALUES
(1, 'Mohammad Faisal Rosyad', 'Ketentuan Import Data Prestasi Siswa.pdf', 'Ketentuan Import Data Prestasi Siswa.pdf', 'SMP Negeri 5 yogyakarta', 'Diterima', NULL, NULL, NULL, NULL, NULL, 0, '1234568090'),
(2, '', 'Yuniar-Endah-Palupi-Pengembangan-Sistem-Informasi.pdf', 'JURNAL_SISTEM_INFORMASI_AKADEMIK_SMA_BER.pdf', 'SMP Baru', 'Diterima', 'on', 'on', 'on', NULL, NULL, 0, '1234567819'),
(3, '', 'New Picture.bmp', 'Untitled.epgz', 'ad', 'Diterima', 'on', 'on', 'on', NULL, NULL, 0, '1234567833');

-- --------------------------------------------------------

--
-- Table structure for table `siswa_mutasi_masuk`
--

CREATE TABLE `siswa_mutasi_masuk` (
  `id_pendaftar_mutasi` int(10) NOT NULL,
  `nama_pendaftar_mutasi` varchar(200) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `agama` enum('Islam','Kristen','Katholik','Hindu','Budha','Lainnya') DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `no_telepon` varchar(15) DEFAULT NULL,
  `sekolah_asal` varchar(40) DEFAULT NULL,
  `tahun_kelulusan` year(4) DEFAULT NULL,
  `nilai_un_bahasaindonesia` float DEFAULT NULL,
  `nilai_un_matematika` float DEFAULT NULL,
  `nilai_un_ipa` float DEFAULT NULL,
  `jumlah_nilai_un` float DEFAULT NULL,
  `nilai_ujian_masuk` float DEFAULT NULL,
  `status_siswa` enum('Diterima','Tidak Diterima','Dicabut') DEFAULT NULL,
  `surat_ket_nisn` text,
  `fc_buku_rapor` text,
  `fc_skhun` text,
  `surat_ket_bangku` text,
  `surat_ket_pindah` text,
  `skck_kepsek` text,
  `berkas_1` varchar(5) DEFAULT NULL,
  `berkas_2` varchar(5) DEFAULT NULL,
  `berkas_3` varchar(5) DEFAULT NULL,
  `berkas_4` varchar(5) DEFAULT NULL,
  `berkas_5` varchar(5) DEFAULT NULL,
  `terverifikasi` enum('Sudah Terverifikasi','Belum Terverifikasi') NOT NULL,
  `id_tahun_ajaran` int(10) NOT NULL,
  `nisn_pendaftar_mutasi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_sementara_simpan_prestasi`
--

CREATE TABLE `tabel_sementara_simpan_prestasi` (
  `id_tabel_sementara` int(5) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `prestasi_or` float NOT NULL,
  `prestasi_tahfidz` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tahunajaran`
--

CREATE TABLE `tahunajaran` (
  `id_tahun_ajaran` int(10) NOT NULL,
  `tahun_ajaran` varchar(15) NOT NULL,
  `semester` enum('ganjil','genap') NOT NULL,
  `nama_file_kaldik` varchar(25) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahunajaran`
--

INSERT INTO `tahunajaran` (`id_tahun_ajaran`, `tahun_ajaran`, `semester`, `nama_file_kaldik`, `tanggal_mulai`, `tanggal_selesai`) VALUES
(1, '2017/2018', 'ganjil', '2017/2018 ganjil', '2018-08-24', '2018-10-20'),
(2, '2017/2018', 'genap', '2017/2018 genap', '2018-10-24', '2018-12-31'),
(3, '2018/2019', 'ganjil', '2018/2019 ganjil', '2018-12-24', '2019-08-24');

-- --------------------------------------------------------

--
-- Table structure for table `tanggal_libur`
--

CREATE TABLE `tanggal_libur` (
  `id_tanggal_libur` int(11) NOT NULL,
  `tanggal_awal` date NOT NULL,
  `nama_libur` varchar(255) NOT NULL,
  `tanggal_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanggal_libur`
--

INSERT INTO `tanggal_libur` (`id_tanggal_libur`, `tanggal_awal`, `nama_libur`, `tanggal_akhir`) VALUES
(1, '2017-10-31', 'Hari Libur Nasional', '2017-10-31'),
(3, '2017-10-28', 'Sumpah Pemuda', '2017-10-28'),
(4, '2017-11-11', 'Hari Libur', '2017-11-15'),
(5, '2018-02-21', 'Puasa', '2018-02-24');

-- --------------------------------------------------------

--
-- Table structure for table `tanggal_libur_nasional`
--

CREATE TABLE `tanggal_libur_nasional` (
  `id_tanggal_libur_nasional` int(25) NOT NULL,
  `tanggal_libur_nasional` int(25) NOT NULL,
  `bulan_libur_nasional` int(25) NOT NULL,
  `nama_libur_nasional` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanggal_libur_nasional`
--

INSERT INTO `tanggal_libur_nasional` (`id_tanggal_libur_nasional`, `tanggal_libur_nasional`, `bulan_libur_nasional`, `nama_libur_nasional`) VALUES
(4, 1, 1, 'Tahun Baru'),
(6, 17, 8, 'Hari Kemerdekaan RI'),
(7, 6, 7, 'Tahun Baru Imlek'),
(8, 4, 8, 'Tahun Baru'),
(9, 3, 7, 'Tahun Baru'),
(10, 6, 6, 'Hari Kemerdekaan RI');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id_tugas` int(5) NOT NULL,
  `nama_tugas` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi_harian`
--
ALTER TABLE `absensi_harian`
  ADD PRIMARY KEY (`id_absen_harian`),
  ADD KEY `nisn` (`nisn`);

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`),
  ADD KEY `nisn` (`nisn`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `akun_siswa`
--
ALTER TABLE `akun_siswa`
  ADD PRIMARY KEY (`id_akun_siswa`),
  ADD KEY `nisn` (`nisn`);

--
-- Indexes for table `bayar`
--
ALTER TABLE `bayar`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `id_kelas_tambahan` (`id_kelas_tambahan`);

--
-- Indexes for table `daftar_ulang`
--
ALTER TABLE `daftar_ulang`
  ADD PRIMARY KEY (`id_daftar_ulang`),
  ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`),
  ADD KEY `nisn` (`nisn`),
  ADD KEY `nomor_pendaftar_ujian` (`nomor_pendaftar_ujian`),
  ADD KEY `no_pendaftar` (`no_pendaftar`);

--
-- Indexes for table `danamandiri`
--
ALTER TABLE `danamandiri`
  ADD PRIMARY KEY (`id_danamandiri`),
  ADD KEY `nisn` (`nisn`);

--
-- Indexes for table `deskripsi_nilai`
--
ALTER TABLE `deskripsi_nilai`
  ADD PRIMARY KEY (`id_deskripsi`),
  ADD KEY `mapel_id` (`mapel_id`);

--
-- Indexes for table `dummy`
--
ALTER TABLE `dummy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
  ADD PRIMARY KEY (`id_ekstrakurikuler`),
  ADD KEY `nisn` (`nisn`),
  ADD KEY `id_jenis_kls_tambahan` (`id_jenis_kls_tambahan`);

--
-- Indexes for table `form_daftarulang_kenaikan`
--
ALTER TABLE `form_daftarulang_kenaikan`
  ADD PRIMARY KEY (`id_form_daftarulang_kenaikan`);

--
-- Indexes for table `form_daftarulang_ppdb`
--
ALTER TABLE `form_daftarulang_ppdb`
  ADD PRIMARY KEY (`id_form_daftarulang_ppdb`);

--
-- Indexes for table `form_pendaftaran_mutasi_masuk`
--
ALTER TABLE `form_pendaftaran_mutasi_masuk`
  ADD PRIMARY KEY (`id_form_pendaftaran_mutasi_masuk`);

--
-- Indexes for table `form_ppdb`
--
ALTER TABLE `form_ppdb`
  ADD PRIMARY KEY (`id_form_ppdb`);

--
-- Indexes for table `form_ujian`
--
ALTER TABLE `form_ujian`
  ADD PRIMARY KEY (`id_form_ujian`);

--
-- Indexes for table `hari_rentang`
--
ALTER TABLE `hari_rentang`
  ADD PRIMARY KEY (`id_rentang_jam`),
  ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `jabatan_has_tugas`
--
ALTER TABLE `jabatan_has_tugas`
  ADD KEY `jabatan_id_jabatan` (`jabatan_id_jabatan`),
  ADD KEY `tugas_id_tugas` (`tugas_id_tugas`);

--
-- Indexes for table `jadwal_ekskul`
--
ALTER TABLE `jadwal_ekskul`
  ADD PRIMARY KEY (`id_jadwal_ekskul`),
  ADD KEY `id_ekstrakulikuler` (`id_jenis_kls_tambahan`),
  ADD KEY `id_pembimbing` (`id_pembimbing`);

--
-- Indexes for table `jadwal_mapel`
--
ALTER TABLE `jadwal_mapel`
  ADD PRIMARY KEY (`id_jadwal_mapel`),
  ADD KEY `id_mapel` (`id_namamapel`),
  ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`),
  ADD KEY `NIP` (`NIP`),
  ADD KEY `id_rentang_jam` (`id_rentang_jam`),
  ADD KEY `id_kelas_reguler` (`id_kelas_reguler`),
  ADD KEY `id_kelas_reguler_berjalan` (`id_kelas_reguler_berjalan`),
  ADD KEY `id_prkh` (`id_prkh`),
  ADD KEY `id_jam_mgjr` (`id_jam_mgjr`);

--
-- Indexes for table `jadwal_piket_guru`
--
ALTER TABLE `jadwal_piket_guru`
  ADD PRIMARY KEY (`id_jdwl_piket_guru`),
  ADD KEY `NIP` (`NIP`),
  ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`);

--
-- Indexes for table `jadwal_tambahan`
--
ALTER TABLE `jadwal_tambahan`
  ADD PRIMARY KEY (`id_jadwal_tambahan`),
  ADD KEY `NIP` (`NIP`),
  ADD KEY `id_kelas_tambahan` (`id_kelas_tambahan`),
  ADD KEY `jadwal_tambahan_ibfk_6` (`id_namamapel`),
  ADD KEY `jadwal_tambahan_ibfk_2` (`id_tahun_ajaran`);

--
-- Indexes for table `jam_mengajar`
--
ALTER TABLE `jam_mengajar`
  ADD PRIMARY KEY (`id_jam_mgjr`),
  ADD KEY `NIP` (`NIP`),
  ADD KEY `jam_mengajar_ibfk_2` (`id_tahun_ajaran`) USING BTREE;

--
-- Indexes for table `jenis_kls_tambahan`
--
ALTER TABLE `jenis_kls_tambahan`
  ADD PRIMARY KEY (`id_jenis_kls_tambahan`);

--
-- Indexes for table `jenis_nilai_akhir`
--
ALTER TABLE `jenis_nilai_akhir`
  ADD PRIMARY KEY (`id_jenis_na`);

--
-- Indexes for table `jenis_pelanggaran`
--
ALTER TABLE `jenis_pelanggaran`
  ADD PRIMARY KEY (`id_jenis_pelanggaran`),
  ADD KEY `tgl_kejadian` (`tgl_kejadian`);

--
-- Indexes for table `kaldik`
--
ALTER TABLE `kaldik`
  ADD PRIMARY KEY (`id_kaldik`);

--
-- Indexes for table `kategori_nilai`
--
ALTER TABLE `kategori_nilai`
  ADD PRIMARY KEY (`id_kategorinilai`);

--
-- Indexes for table `kelas_berjalan`
--
ALTER TABLE `kelas_berjalan`
  ADD PRIMARY KEY (`id_kelas_kerjalan`),
  ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`);

--
-- Indexes for table `kelas_reguler`
--
ALTER TABLE `kelas_reguler`
  ADD PRIMARY KEY (`id_kelas_reguler`);

--
-- Indexes for table `kelas_reguler_berjalan`
--
ALTER TABLE `kelas_reguler_berjalan`
  ADD PRIMARY KEY (`id_kelas_reguler_berjalan`),
  ADD KEY `id_kelas_reguler` (`id_kelas_reguler`),
  ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`);

--
-- Indexes for table `kelas_tambahan`
--
ALTER TABLE `kelas_tambahan`
  ADD PRIMARY KEY (`id_kelas_tambahan`),
  ADD UNIQUE KEY `unique_kelas_tambahan` (`nama_kelas_tambahan`);

--
-- Indexes for table `kelas_tambahan_berjalan`
--
ALTER TABLE `kelas_tambahan_berjalan`
  ADD PRIMARY KEY (`id_kelas_tambahan_berjalan`),
  ADD KEY `id_kelas_tambahan` (`id_kelas_tambahan`),
  ADD KEY `nisn` (`nisn`);

--
-- Indexes for table `ketentuan_ppdb`
--
ALTER TABLE `ketentuan_ppdb`
  ADD PRIMARY KEY (`id_ketentuan`),
  ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`);

--
-- Indexes for table `keterlambatan`
--
ALTER TABLE `keterlambatan`
  ADD PRIMARY KEY (`id_keterlambatan`),
  ADD KEY `NISN` (`nisn`);

--
-- Indexes for table `klinik_un`
--
ALTER TABLE `klinik_un`
  ADD PRIMARY KEY (`id_klinik_un`),
  ADD KEY `nisn` (`nisn`),
  ADD KEY `NIP` (`NIP`),
  ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`);

--
-- Indexes for table `kurikulum`
--
ALTER TABLE `kurikulum`
  ADD PRIMARY KEY (`id_kurikulum`),
  ADD KEY `tahunajaran_id` (`tahunajaran_id`);

--
-- Indexes for table `k_dasar`
--
ALTER TABLE `k_dasar`
  ADD PRIMARY KEY (`id_kd`);

--
-- Indexes for table `login_backend`
--
ALTER TABLE `login_backend`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`),
  ADD KEY `mapel_ibfk_1` (`id_tahun_ajaran`),
  ADD KEY `mapel_ibfk_2` (`id_kelas_reguler`),
  ADD KEY `mapel_ibfk_3` (`id_namamapel`);

--
-- Indexes for table `mutasi`
--
ALTER TABLE `mutasi`
  ADD PRIMARY KEY (`id_mutasi`),
  ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`),
  ADD KEY `id_siswa_mutasi_keluar` (`id_siswa_mutasi_keluar`),
  ADD KEY `id_pendaftar_mutasi` (`id_pendaftar_mutasi`),
  ADD KEY `nisn` (`nisn`);

--
-- Indexes for table `namamapel`
--
ALTER TABLE `namamapel`
  ADD PRIMARY KEY (`id_namamapel`);

--
-- Indexes for table `nilaiekskul`
--
ALTER TABLE `nilaiekskul`
  ADD PRIMARY KEY (`id_nilaiekskul`),
  ADD KEY `id_siswakls` (`nisn`),
  ADD KEY `id_jenis_kls_tambahan` (`id_jenis_kls_tambahan`);

--
-- Indexes for table `nilai_akhir`
--
ALTER TABLE `nilai_akhir`
  ADD PRIMARY KEY (`id_nilai_akhir`),
  ADD KEY `nisn` (`nisn`),
  ADD KEY `id_mapel` (`id_mapel`),
  ADD KEY `id_kelas_reguler_berjalan` (`id_kelas_reguler_berjalan`);

--
-- Indexes for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  ADD PRIMARY KEY (`id_nilai_siswa`),
  ADD KEY `kategori_nilai` (`kategori_nilai_id`),
  ADD KEY `nilai_akhir` (`jenis_na_id`),
  ADD KEY `mapel_id` (`mapel_id`),
  ADD KEY `nilai_siswa_ibfk_2` (`nisn`);

--
-- Indexes for table `orangtua_wali`
--
ALTER TABLE `orangtua_wali`
  ADD PRIMARY KEY (`id_orangtua`);

--
-- Indexes for table `passing_grade`
--
ALTER TABLE `passing_grade`
  ADD PRIMARY KEY (`id_grade`),
  ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`id_jenis_pelanggaran`);

--
-- Indexes for table `pembimbing`
--
ALTER TABLE `pembimbing`
  ADD PRIMARY KEY (`id_pembimbing`);

--
-- Indexes for table `pendaftar_daftarulang_kenaikan`
--
ALTER TABLE `pendaftar_daftarulang_kenaikan`
  ADD PRIMARY KEY (`id_daftar_ulang_kenaikan`),
  ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`),
  ADD KEY `nisn` (`nisn`);

--
-- Indexes for table `pendaftar_daftarulang_ppdb`
--
ALTER TABLE `pendaftar_daftarulang_ppdb`
  ADD PRIMARY KEY (`nisn`),
  ADD KEY `nisn` (`nisn`);

--
-- Indexes for table `pendaftar_ppdb`
--
ALTER TABLE `pendaftar_ppdb`
  ADD PRIMARY KEY (`nisn_pendaftar`),
  ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`);

--
-- Indexes for table `pengumuman_mutasi`
--
ALTER TABLE `pengumuman_mutasi`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `pengumuman_ppdb`
--
ALTER TABLE `pengumuman_ppdb`
  ADD PRIMARY KEY (`id_pengumuman_ppdb`),
  ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`);

--
-- Indexes for table `poin_pelanggaran`
--
ALTER TABLE `poin_pelanggaran`
  ADD KEY `NISN` (`nisn`),
  ADD KEY `id_jenis_pelanggaran` (`id_jenis_pelanggaran`);

--
-- Indexes for table `presensi_kls_tambahan`
--
ALTER TABLE `presensi_kls_tambahan`
  ADD PRIMARY KEY (`id_presensikls_tambahan`),
  ADD KEY `id_jadwal_ekskul` (`id_jadwal_ekskul`);

--
-- Indexes for table `presensi_pegawai`
--
ALTER TABLE `presensi_pegawai`
  ADD PRIMARY KEY (`Id_presensi`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `presensi_siswa`
--
ALTER TABLE `presensi_siswa`
  ADD PRIMARY KEY (`id_presensi`),
  ADD KEY `kelas_berjalan_id` (`kelas_berjalan_id`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`),
  ADD KEY `NISN` (`nisn`);

--
-- Indexes for table `prioritas_khusus`
--
ALTER TABLE `prioritas_khusus`
  ADD PRIMARY KEY (`id_prkh`),
  ADD KEY `id_rentang_jam` (`id_rentang_jam`),
  ADD KEY `NIP` (`NIP`),
  ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`),
  ADD KEY `id_mapel` (`id_mapel`),
  ADD KEY `id_namamapel` (`id_namamapel`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_setting`),
  ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`),
  ADD UNIQUE KEY `nisn` (`nisn`),
  ADD KEY `id_orangtua` (`id_orangtua`),
  ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`);

--
-- Indexes for table `siswa_kelas`
--
ALTER TABLE `siswa_kelas`
  ADD PRIMARY KEY (`id_siswa_kelas`),
  ADD KEY `nisn` (`nisn`,`id_tahun_ajaran`),
  ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`);

--
-- Indexes for table `siswa_kelas_reguler_berjalan`
--
ALTER TABLE `siswa_kelas_reguler_berjalan`
  ADD PRIMARY KEY (`id_siswa_kelas_reguler_berjalan`),
  ADD UNIQUE KEY `id_kelas_reguler_berjalan_2` (`id_kelas_reguler_berjalan`,`nisn`),
  ADD KEY `id_kelas_reguler_berjalan` (`id_kelas_reguler_berjalan`),
  ADD KEY `nisn` (`nisn`);

--
-- Indexes for table `siswa_kelas_tambahan_berjalan`
--
ALTER TABLE `siswa_kelas_tambahan_berjalan`
  ADD PRIMARY KEY (`id_siswa_kelas_tambahan_berjalan`),
  ADD UNIQUE KEY `id_kelas_tambahan_berjalan_2` (`id_kelas_tambahan_berjalan`,`nisn`),
  ADD KEY `id_kelas_tambahan_berjalan` (`id_kelas_tambahan_berjalan`),
  ADD KEY `nisn` (`nisn`);

--
-- Indexes for table `siswa_mutasi_keluar`
--
ALTER TABLE `siswa_mutasi_keluar`
  ADD PRIMARY KEY (`id_siswa_mutasi_keluar`),
  ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`),
  ADD KEY `nisn` (`nisn`);

--
-- Indexes for table `siswa_mutasi_masuk`
--
ALTER TABLE `siswa_mutasi_masuk`
  ADD PRIMARY KEY (`nisn_pendaftar_mutasi`),
  ADD UNIQUE KEY `id_pendaftar_mutasi` (`id_pendaftar_mutasi`),
  ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`);

--
-- Indexes for table `tabel_sementara_simpan_prestasi`
--
ALTER TABLE `tabel_sementara_simpan_prestasi`
  ADD PRIMARY KEY (`id_tabel_sementara`),
  ADD KEY `nisn` (`nisn`);

--
-- Indexes for table `tahunajaran`
--
ALTER TABLE `tahunajaran`
  ADD PRIMARY KEY (`id_tahun_ajaran`);

--
-- Indexes for table `tanggal_libur`
--
ALTER TABLE `tanggal_libur`
  ADD PRIMARY KEY (`id_tanggal_libur`);

--
-- Indexes for table `tanggal_libur_nasional`
--
ALTER TABLE `tanggal_libur_nasional`
  ADD PRIMARY KEY (`id_tanggal_libur_nasional`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id_tugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi_harian`
--
ALTER TABLE `absensi_harian`
  MODIFY `id_absen_harian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `danamandiri`
--
ALTER TABLE `danamandiri`
  MODIFY `id_danamandiri` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deskripsi_nilai`
--
ALTER TABLE `deskripsi_nilai`
  MODIFY `id_deskripsi` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dummy`
--
ALTER TABLE `dummy`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
  MODIFY `id_ekstrakurikuler` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `form_daftarulang_kenaikan`
--
ALTER TABLE `form_daftarulang_kenaikan`
  MODIFY `id_form_daftarulang_kenaikan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `form_daftarulang_ppdb`
--
ALTER TABLE `form_daftarulang_ppdb`
  MODIFY `id_form_daftarulang_ppdb` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `form_pendaftaran_mutasi_masuk`
--
ALTER TABLE `form_pendaftaran_mutasi_masuk`
  MODIFY `id_form_pendaftaran_mutasi_masuk` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `form_ppdb`
--
ALTER TABLE `form_ppdb`
  MODIFY `id_form_ppdb` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `form_ujian`
--
ALTER TABLE `form_ujian`
  MODIFY `id_form_ujian` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hari_rentang`
--
ALTER TABLE `hari_rentang`
  MODIFY `id_rentang_jam` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jadwal_ekskul`
--
ALTER TABLE `jadwal_ekskul`
  MODIFY `id_jadwal_ekskul` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jadwal_mapel`
--
ALTER TABLE `jadwal_mapel`
  MODIFY `id_jadwal_mapel` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal_piket_guru`
--
ALTER TABLE `jadwal_piket_guru`
  MODIFY `id_jdwl_piket_guru` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `jadwal_tambahan`
--
ALTER TABLE `jadwal_tambahan`
  MODIFY `id_jadwal_tambahan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jam_mengajar`
--
ALTER TABLE `jam_mengajar`
  MODIFY `id_jam_mgjr` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `jenis_kls_tambahan`
--
ALTER TABLE `jenis_kls_tambahan`
  MODIFY `id_jenis_kls_tambahan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_nilai_akhir`
--
ALTER TABLE `jenis_nilai_akhir`
  MODIFY `id_jenis_na` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kaldik`
--
ALTER TABLE `kaldik`
  MODIFY `id_kaldik` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori_nilai`
--
ALTER TABLE `kategori_nilai`
  MODIFY `id_kategorinilai` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kelas_reguler`
--
ALTER TABLE `kelas_reguler`
  MODIFY `id_kelas_reguler` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelas_reguler_berjalan`
--
ALTER TABLE `kelas_reguler_berjalan`
  MODIFY `id_kelas_reguler_berjalan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelas_tambahan`
--
ALTER TABLE `kelas_tambahan`
  MODIFY `id_kelas_tambahan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas_tambahan_berjalan`
--
ALTER TABLE `kelas_tambahan_berjalan`
  MODIFY `id_kelas_tambahan_berjalan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ketentuan_ppdb`
--
ALTER TABLE `ketentuan_ppdb`
  MODIFY `id_ketentuan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `keterlambatan`
--
ALTER TABLE `keterlambatan`
  MODIFY `id_keterlambatan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `klinik_un`
--
ALTER TABLE `klinik_un`
  MODIFY `id_klinik_un` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kurikulum`
--
ALTER TABLE `kurikulum`
  MODIFY `id_kurikulum` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `k_dasar`
--
ALTER TABLE `k_dasar`
  MODIFY `id_kd` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_backend`
--
ALTER TABLE `login_backend`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `namamapel`
--
ALTER TABLE `namamapel`
  MODIFY `id_namamapel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `nilaiekskul`
--
ALTER TABLE `nilaiekskul`
  MODIFY `id_nilaiekskul` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai_akhir`
--
ALTER TABLE `nilai_akhir`
  MODIFY `id_nilai_akhir` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  MODIFY `id_nilai_siswa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orangtua_wali`
--
ALTER TABLE `orangtua_wali`
  MODIFY `id_orangtua` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `passing_grade`
--
ALTER TABLE `passing_grade`
  MODIFY `id_grade` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `id_jenis_pelanggaran` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pembimbing`
--
ALTER TABLE `pembimbing`
  MODIFY `id_pembimbing` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pendaftar_daftarulang_kenaikan`
--
ALTER TABLE `pendaftar_daftarulang_kenaikan`
  MODIFY `id_daftar_ulang_kenaikan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pengumuman_mutasi`
--
ALTER TABLE `pengumuman_mutasi`
  MODIFY `id_pengumuman` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pengumuman_ppdb`
--
ALTER TABLE `pengumuman_ppdb`
  MODIFY `id_pengumuman_ppdb` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `presensi_kls_tambahan`
--
ALTER TABLE `presensi_kls_tambahan`
  MODIFY `id_presensikls_tambahan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `presensi_pegawai`
--
ALTER TABLE `presensi_pegawai`
  MODIFY `Id_presensi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `presensi_siswa`
--
ALTER TABLE `presensi_siswa`
  MODIFY `id_presensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `prioritas_khusus`
--
ALTER TABLE `prioritas_khusus`
  MODIFY `id_prkh` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id_setting` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `siswa_kelas`
--
ALTER TABLE `siswa_kelas`
  MODIFY `id_siswa_kelas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=319;

--
-- AUTO_INCREMENT for table `siswa_kelas_reguler_berjalan`
--
ALTER TABLE `siswa_kelas_reguler_berjalan`
  MODIFY `id_siswa_kelas_reguler_berjalan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `siswa_kelas_tambahan_berjalan`
--
ALTER TABLE `siswa_kelas_tambahan_berjalan`
  MODIFY `id_siswa_kelas_tambahan_berjalan` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswa_mutasi_keluar`
--
ALTER TABLE `siswa_mutasi_keluar`
  MODIFY `id_siswa_mutasi_keluar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `siswa_mutasi_masuk`
--
ALTER TABLE `siswa_mutasi_masuk`
  MODIFY `id_pendaftar_mutasi` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_sementara_simpan_prestasi`
--
ALTER TABLE `tabel_sementara_simpan_prestasi`
  MODIFY `id_tabel_sementara` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tahunajaran`
--
ALTER TABLE `tahunajaran`
  MODIFY `id_tahun_ajaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tanggal_libur`
--
ALTER TABLE `tanggal_libur`
  MODIFY `id_tanggal_libur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tanggal_libur_nasional`
--
ALTER TABLE `tanggal_libur_nasional`
  MODIFY `id_tanggal_libur_nasional` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi_harian`
--
ALTER TABLE `absensi_harian`
  ADD CONSTRAINT `absensi_harian_ibfk_1` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`);

--
-- Constraints for table `akun`
--
ALTER TABLE `akun`
  ADD CONSTRAINT `akun_ibfk_2` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
