-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2023 at 03:03 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cerdasdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `alamat_mhs`
--

CREATE TABLE `alamat_mhs` (
  `id_alamatmhs` int(11) NOT NULL,
  `alamat_now` text NOT NULL,
  `provinsi_now` int(10) NOT NULL,
  `kota_now` int(10) NOT NULL,
  `kecamatan_now` int(10) NOT NULL,
  `kelurahan_now` int(10) NOT NULL,
  `kode_pos_now` varchar(7) NOT NULL,
  `alamat_ktp` text NOT NULL,
  `provinsi_ktp` int(10) NOT NULL,
  `kecamatan_ktp` int(10) NOT NULL,
  `kelurahan_ktp` int(10) NOT NULL,
  `kode_pos_ktp` varchar(7) NOT NULL,
  `notelp` varchar(13) NOT NULL,
  `tinggal_dengan` varchar(45) NOT NULL,
  `transportasi` varchar(45) NOT NULL,
  `jarak` varchar(45) NOT NULL,
  `nim` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `id_cuti` int(11) NOT NULL,
  `nim` varchar(45) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `semester` varchar(45) NOT NULL,
  `tahun_akademik` varchar(45) NOT NULL,
  `alasan_cuti` varchar(250) NOT NULL,
  `approval` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_pt`
--

CREATE TABLE `data_pt` (
  `kd_pt` varchar(45) NOT NULL,
  `nama_pt` varchar(250) NOT NULL,
  `tahun_berdiri` varchar(25) NOT NULL,
  `pendiri` varchar(150) NOT NULL,
  `alamat_pt` text NOT NULL,
  `provinsi` varchar(15) NOT NULL,
  `kabupaten` varchar(15) NOT NULL,
  `kecamatan` varchar(15) NOT NULL,
  `desa` varchar(15) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `email` varchar(150) NOT NULL,
  `website` varchar(250) NOT NULL,
  `no_telp` int(13) NOT NULL,
  `akta_pendirian` varchar(45) NOT NULL,
  `akreditasi` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nidn` int(10) NOT NULL,
  `nama_dosen` varchar(150) NOT NULL,
  `alamat_dosen` text NOT NULL,
  `no_telp` int(13) NOT NULL,
  `tempat_lahir` varchar(45) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(45) NOT NULL,
  `jenis_kelamin` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `jabatan` varchar(45) NOT NULL,
  `pendidikan_akhir` varchar(45) NOT NULL,
  `status_ikatankerja` varchar(45) NOT NULL,
  `status_aktif` varchar(45) NOT NULL,
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `evaluasi_dosen`
--

CREATE TABLE `evaluasi_dosen` (
  `id_evaldsn` int(11) NOT NULL,
  `dosen_id` varchar(15) NOT NULL,
  `nidn` varchar(15) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `tahun_akademik` varchar(45) NOT NULL,
  `semester` varchar(45) NOT NULL,
  `prodi` varchar(45) NOT NULL,
  `kelas_id` int(15) NOT NULL,
  `matkul_id` varchar(45) NOT NULL,
  `pertanyaan1` varchar(5) NOT NULL,
  `pertanyaan2` varchar(5) NOT NULL,
  `pertanyaan3` varchar(5) NOT NULL,
  `pertanyaan4` varchar(5) NOT NULL,
  `pertanyaan5` varchar(5) NOT NULL,
  `pertanyaan6` varchar(5) NOT NULL,
  `pertanyaan7` varchar(5) NOT NULL,
  `pertanyaan8` varchar(5) NOT NULL,
  `pertanyaan9` varchar(5) NOT NULL,
  `pertanyaan10` varchar(5) NOT NULL,
  `saran` varchar(250) NOT NULL,
  `total_point` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `evaluasi_matkul`
--

CREATE TABLE `evaluasi_matkul` (
  `id_evalmk` int(11) NOT NULL,
  `kelas_id` int(15) NOT NULL,
  `matkul_id` varchar(45) NOT NULL,
  `nim` varchar(45) NOT NULL,
  `tahun_akademik` varchar(45) NOT NULL,
  `semester` varchar(45) NOT NULL,
  `prodi` varchar(45) NOT NULL,
  `pertanyaan1` varchar(5) NOT NULL,
  `pertanyaan2` varchar(5) NOT NULL,
  `pertanyaan3` varchar(5) NOT NULL,
  `pertanyaan4` varchar(5) NOT NULL,
  `pertanyaan5` varchar(5) NOT NULL,
  `total_point` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `evaluasi_tkm`
--

CREATE TABLE `evaluasi_tkm` (
  `id_evaldsn` int(11) NOT NULL,
  `nim` varchar(45) NOT NULL,
  `tahun_akademik` varchar(45) NOT NULL,
  `semester` varchar(45) NOT NULL,
  `prodi` varchar(45) NOT NULL,
  `pertanyaan1` varchar(5) NOT NULL,
  `pertanyaan2` varchar(5) NOT NULL,
  `pertanyaan3` varchar(5) NOT NULL,
  `pertanyaan4` varchar(5) NOT NULL,
  `pertanyaan5` varchar(5) NOT NULL,
  `pertanyaan6` varchar(5) NOT NULL,
  `pertanyaan7` varchar(5) NOT NULL,
  `pertanyaan8` varchar(5) NOT NULL,
  `pertanyaan9` varchar(5) NOT NULL,
  `pertanyaan10` varchar(5) NOT NULL,
  `pertanyaan11` varchar(5) NOT NULL,
  `pertanyaan12` varchar(5) NOT NULL,
  `pertanyaan13` varchar(5) NOT NULL,
  `pertanyaan14` varchar(5) NOT NULL,
  `pertanyaan15` varchar(5) NOT NULL,
  `pertanyaan16` varchar(5) NOT NULL,
  `pertanyaan17` varchar(5) NOT NULL,
  `pertanyaan18` varchar(5) NOT NULL,
  `pertanyaan19` varchar(5) NOT NULL,
  `pertanyaan20` varchar(5) NOT NULL,
  `pertanyaan21` varchar(5) NOT NULL,
  `pertanyaan22` varchar(5) NOT NULL,
  `pertanyaan23` varchar(5) NOT NULL,
  `pertanyaan24` varchar(5) NOT NULL,
  `pertanyaan25` varchar(5) NOT NULL,
  `saran` varchar(250) NOT NULL,
  `total_point` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `honor_dosen`
--

CREATE TABLE `honor_dosen` (
  `id_honordsn` int(11) NOT NULL,
  `dosen_id` int(15) NOT NULL,
  `periode` varchar(45) NOT NULL,
  `total_honor` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `honor_dosen_item`
--

CREATE TABLE `honor_dosen_item` (
  `id_itemhnrdsn` int(11) NOT NULL,
  `honordsn_id` int(15) NOT NULL,
  `matkul_id` varchar(45) NOT NULL,
  `honor` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `honor_mentor`
--

CREATE TABLE `honor_mentor` (
  `id_honormntr` int(11) NOT NULL,
  `mentor_id` int(15) NOT NULL,
  `periode` varchar(45) NOT NULL,
  `total_honor` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `honor_mentor_item`
--

CREATE TABLE `honor_mentor_item` (
  `id_itemhnrmntr` int(11) NOT NULL,
  `honormntr_id` int(15) NOT NULL,
  `matkul_id` varchar(45) NOT NULL,
  `honor` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_mhs`
--

CREATE TABLE `kegiatan_mhs` (
  `id_kegmhs` int(11) NOT NULL,
  `nim` varchar(45) NOT NULL,
  `prodi_id` varchar(45) NOT NULL,
  `jenis_kegiatan` varchar(45) NOT NULL,
  `nama_kegiatan` varchar(45) NOT NULL,
  `penyelenggara` varchar(45) NOT NULL,
  `waktu_kegiatan` varchar(45) NOT NULL,
  `penjelasan` varchar(45) NOT NULL,
  `sertifikat` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kelas_krs`
--

CREATE TABLE `kelas_krs` (
  `id_mkkrs` int(11) NOT NULL,
  `nim` varchar(45) NOT NULL,
  `kelas_id` int(15) NOT NULL,
  `matkul_id` varchar(45) NOT NULL,
  `sks` int(5) NOT NULL,
  `semester` varchar(45) NOT NULL,
  `hari` varchar(15) NOT NULL,
  `jam_kuliah` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `dosen` varchar(45) NOT NULL,
  `krs_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kelas_kuliah`
--

CREATE TABLE `kelas_kuliah` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `thn_akademik` varchar(15) NOT NULL,
  `semester` varchar(15) NOT NULL,
  `sks` int(5) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `jam` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `matkul_id` varchar(15) NOT NULL,
  `prodi_id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE `krs` (
  `id_krs` int(11) NOT NULL,
  `nim` varchar(45) NOT NULL,
  `thn_akademik` varchar(45) NOT NULL,
  `jatah_sks` varchar(45) NOT NULL,
  `sks_diambil` varchar(45) NOT NULL,
  `batas_isikrs` varchar(45) NOT NULL,
  `status_krs` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nim` varchar(45) NOT NULL,
  `nama_mahasiswa` varchar(45) NOT NULL,
  `no_telp` varchar(45) NOT NULL,
  `tempat_lahir` varchar(45) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(45) NOT NULL,
  `jenis_kelamin` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `tgl_masuk` varchar(45) NOT NULL,
  `prodi_id` varchar(45) NOT NULL,
  `angkatan` varchar(45) NOT NULL,
  `status_akademis` varchar(15) NOT NULL,
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `id_matkul` int(11) NOT NULL,
  `kd_matkul` varchar(25) NOT NULL,
  `nama_matkul` varchar(250) NOT NULL,
  `sks` int(4) NOT NULL,
  `semester` varchar(45) NOT NULL,
  `porsi_uts` int(5) NOT NULL,
  `porsi_uas` int(5) NOT NULL,
  `porsi_tugas` int(5) NOT NULL,
  `porsi_keaktifan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE `mentor` (
  `id_mentor` int(11) NOT NULL,
  `nidn` varchar(45) NOT NULL,
  `nama_mentor` varchar(45) NOT NULL,
  `alamat_mentor` varchar(45) NOT NULL,
  `no_telp` varchar(45) NOT NULL,
  `tempat_lahir` varchar(45) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(45) NOT NULL,
  `jenis_kelamin` varchar(45) NOT NULL,
  `email` text NOT NULL,
  `tgl_masuk` date NOT NULL,
  `jabatan` varchar(45) NOT NULL,
  `pendidikan_akhir` varchar(45) NOT NULL,
  `status_ikatankerja` varchar(45) NOT NULL,
  `status_aktif` varchar(45) NOT NULL,
  `foto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1681354468),
('m130524_201442_init', 1681354470),
('m190124_110200_add_verification_token_column_to_user_table', 1681354470);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `nim` varchar(45) NOT NULL,
  `kelas_id` int(15) NOT NULL,
  `matkul_id` varchar(45) NOT NULL,
  `sks` varchar(45) NOT NULL,
  `thn_akademik` varchar(45) NOT NULL,
  `semester` varchar(45) NOT NULL,
  `nilai_uts` varchar(45) NOT NULL,
  `nilai_uas` varchar(45) NOT NULL,
  `nilai_tugas` varchar(45) NOT NULL,
  `nilai_keaktifan` varchar(45) NOT NULL,
  `total_nilai` varchar(45) NOT NULL,
  `nilai_angka` varchar(5) DEFAULT NULL,
  `nilai_huruf` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ortu_mhs`
--

CREATE TABLE `ortu_mhs` (
  `id_ortumhs` int(11) NOT NULL,
  `nik_ayah` varchar(45) NOT NULL,
  `notelp_ayah` varchar(45) NOT NULL,
  `nama_ayah` varchar(45) NOT NULL,
  `tempat_lhr_ayah` varchar(45) NOT NULL,
  `tggl_lhr_ayah` varchar(45) NOT NULL,
  `agama_ayah` varchar(45) NOT NULL,
  `pekerjaan_ayah` varchar(45) NOT NULL,
  `penghasilan_ayah` varchar(45) NOT NULL,
  `pendidikan_ayah` varchar(45) NOT NULL,
  `nik_ibu` varchar(45) NOT NULL,
  `notelp_ibu` varchar(45) NOT NULL,
  `nama_ibu` varchar(45) NOT NULL,
  `tempat_lhr_ibu` varchar(45) NOT NULL,
  `tggl_lhr_ibu` varchar(45) NOT NULL,
  `agama_ibu` varchar(45) NOT NULL,
  `pekerjaan_ibu` varchar(45) NOT NULL,
  `penghasilan_ibu` varchar(45) NOT NULL,
  `pendidikan_ibu` varchar(45) NOT NULL,
  `nim` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partisipasi`
--

CREATE TABLE `partisipasi` (
  `id_presensi` int(11) NOT NULL,
  `mahasiswa_id` varchar(45) NOT NULL,
  `kelas_id` int(15) NOT NULL,
  `tahun_ajar` varchar(45) NOT NULL,
  `semester` varchar(45) NOT NULL,
  `matkul_id` varchar(45) NOT NULL,
  `p1` varchar(5) NOT NULL,
  `p2` varchar(5) NOT NULL,
  `p3` varchar(5) NOT NULL,
  `p4` varchar(5) NOT NULL,
  `p5` varchar(5) NOT NULL,
  `p6` varchar(5) NOT NULL,
  `p7` varchar(5) NOT NULL,
  `p8` varchar(5) NOT NULL,
  `p9` varchar(5) NOT NULL,
  `p10` varchar(5) NOT NULL,
  `p11` varchar(5) NOT NULL,
  `p12` varchar(5) NOT NULL,
  `p13` varchar(5) NOT NULL,
  `p14` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengabdian_masyarakat`
--

CREATE TABLE `pengabdian_masyarakat` (
  `id_pengabdian` int(11) NOT NULL,
  `dosen_id` int(15) NOT NULL,
  `judul_pengabdian` varchar(45) NOT NULL,
  `tgl_pengabdian` date NOT NULL,
  `lokasi` varchar(45) NOT NULL,
  `mitra` varchar(45) DEFAULT NULL,
  `mahasiswa_terlibat` varchar(45) DEFAULT NULL,
  `penjelasan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul` varchar(45) NOT NULL,
  `isi` varchar(45) NOT NULL,
  `jenis_user` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE `presensi` (
  `id_presensi` int(11) NOT NULL,
  `mahasiswa_id` varchar(45) NOT NULL,
  `matkul_id` varchar(45) NOT NULL,
  `tahun_ajar` varchar(45) NOT NULL,
  `semester` varchar(45) NOT NULL,
  `kelas_id` int(15) NOT NULL,
  `p1` varchar(5) NOT NULL,
  `p2` varchar(5) NOT NULL,
  `p3` varchar(5) NOT NULL,
  `p4` varchar(5) NOT NULL,
  `p5` varchar(5) NOT NULL,
  `p6` varchar(5) NOT NULL,
  `p7` varchar(5) NOT NULL,
  `p8` varchar(5) NOT NULL,
  `p9` varchar(5) NOT NULL,
  `p10` varchar(5) NOT NULL,
  `p11` varchar(5) NOT NULL,
  `p12` varchar(5) NOT NULL,
  `p13` varchar(5) NOT NULL,
  `p14` varchar(5) NOT NULL,
  `uts` varchar(5) NOT NULL,
  `uas` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `kd_prodi` varchar(45) NOT NULL,
  `nama_prodi` varchar(45) NOT NULL,
  `nomor_sk` varchar(45) NOT NULL,
  `telp_prodi` varchar(45) DEFAULT NULL,
  `email_prodi` varchar(45) DEFAULT NULL,
  `nama_pt` varchar(45) NOT NULL,
  `thn_berdiri` varchar(45) NOT NULL,
  `alamat_prodi` varchar(45) NOT NULL,
  `akreditasi` varchar(45) NOT NULL,
  `deskripsi` varchar(45) NOT NULL,
  `visi` varchar(45) DEFAULT NULL,
  `misi` varchar(45) DEFAULT NULL,
  `kompetensi` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research_interest`
--

CREATE TABLE `research_interest` (
  `id_rsch` int(11) NOT NULL,
  `dosen_id` int(15) NOT NULL,
  `judul_research` varchar(45) NOT NULL,
  `penjelasan` varchar(45) NOT NULL,
  `tahun_srch` varchar(45) NOT NULL,
  `jenis_srch` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pend_mentor`
--

CREATE TABLE `riwayat_pend_mentor` (
  `id_rwytdosen` int(11) NOT NULL,
  `dosen_id` int(15) NOT NULL,
  `jenjang_pendidikan` varchar(45) NOT NULL,
  `nama_institusi` varchar(45) NOT NULL,
  `prodi` varchar(45) NOT NULL,
  `waktu_pendidikan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pend_mhs`
--

CREATE TABLE `riwayat_pend_mhs` (
  `id_rwypend` int(11) NOT NULL,
  `nim` varchar(45) NOT NULL,
  `jenjang` varchar(45) NOT NULL,
  `nama_sekolah` varchar(45) NOT NULL,
  `jurusan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_sehat_mhs`
--

CREATE TABLE `riwayat_sehat_mhs` (
  `id_rwytsehat` int(11) NOT NULL,
  `berat` varchar(10) NOT NULL,
  `tinggi` varchar(10) NOT NULL,
  `goldar` varchar(5) NOT NULL,
  `keadaan_mata` varchar(45) NOT NULL,
  `alat_mata` varchar(45) NOT NULL,
  `keadaan_telinga` varchar(45) NOT NULL,
  `alat_telinga` varchar(45) NOT NULL,
  `sakit_berat` varchar(45) NOT NULL,
  `nim` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id_semester` int(11) NOT NULL,
  `semester` varchar(45) NOT NULL,
  `nama_semester` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skpi`
--

CREATE TABLE `skpi` (
  `id_skpi` int(11) NOT NULL,
  `nim` varchar(45) NOT NULL,
  `prodi_id` varchar(45) NOT NULL,
  `waktu_lulus` varchar(45) NOT NULL,
  `gelar_mhs` varchar(45) NOT NULL,
  `nomor_ijazah` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff_pt`
--

CREATE TABLE `staff_pt` (
  `id_staff` int(11) NOT NULL,
  `kd_staff` varchar(15) NOT NULL,
  `nama_staff` varchar(45) NOT NULL,
  `alamat_staff` text NOT NULL,
  `no_telp` varchar(45) NOT NULL,
  `tempat_lahir` varchar(45) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email` varchar(45) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `pendidikan_akhir` varchar(45) NOT NULL,
  `jabatan` varchar(45) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tahun_akademik`
--

CREATE TABLE `tahun_akademik` (
  `id_thnakademik` int(11) NOT NULL,
  `thn_akademik` varchar(45) NOT NULL,
  `status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `template_surat`
--

CREATE TABLE `template_surat` (
  `id_surat` int(11) NOT NULL,
  `nama_surat` varchar(45) NOT NULL,
  `file` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tim_kelas_kuliah`
--

CREATE TABLE `tim_kelas_kuliah` (
  `id_timkelas` int(11) NOT NULL,
  `kelas_id` int(15) NOT NULL,
  `thn_akademik` varchar(45) NOT NULL,
  `semester` varchar(45) NOT NULL,
  `dosen_id` int(15) NOT NULL,
  `mentor_id` int(15) NOT NULL,
  `matkul_id` varchar(45) NOT NULL,
  `nama_pengajar` varchar(250) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'admin_cerdas', 'a46gqQ0_dfvJ2wOqpM6mg8ca2_-mnX6V', '$2y$13$r69oLfPL1Ou5FVPfv7X4dOLP1CMsJgLdElPVeSZQmR8Ozj5mP/m3O', NULL, 'admincerdas@phbk.ac.id', 10, 1681779547, 1681779547, 'goyGZfG2MNZ8Iwy4e6V_P4s57gKCbH___1681779547');

-- --------------------------------------------------------

--
-- Table structure for table `wali_mhs`
--

CREATE TABLE `wali_mhs` (
  `id_walimhs` int(11) NOT NULL,
  `nama_wali` varchar(150) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tempat_lhr` varchar(45) NOT NULL,
  `tggl_lhr` date NOT NULL,
  `pendidikan` varchar(45) NOT NULL,
  `pekerjaan` varchar(45) NOT NULL,
  `penghasilan` varchar(45) NOT NULL,
  `notelp` varchar(13) NOT NULL,
  `nim` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamat_mhs`
--
ALTER TABLE `alamat_mhs`
  ADD PRIMARY KEY (`id_alamatmhs`),
  ADD KEY `fk_alamat_mhs_idx` (`nim`);

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id_cuti`),
  ADD KEY `fk_cuti_mahasiswa_idx` (`nim`);

--
-- Indexes for table `data_pt`
--
ALTER TABLE `data_pt`
  ADD PRIMARY KEY (`kd_pt`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD UNIQUE KEY `nidn_UNIQUE` (`nidn`);

--
-- Indexes for table `evaluasi_dosen`
--
ALTER TABLE `evaluasi_dosen`
  ADD PRIMARY KEY (`id_evaldsn`),
  ADD KEY `fk_eval_dosen_idx` (`kelas_id`);

--
-- Indexes for table `evaluasi_matkul`
--
ALTER TABLE `evaluasi_matkul`
  ADD PRIMARY KEY (`id_evalmk`),
  ADD KEY `fk_eval_matkul_idx` (`kelas_id`);

--
-- Indexes for table `evaluasi_tkm`
--
ALTER TABLE `evaluasi_tkm`
  ADD PRIMARY KEY (`id_evaldsn`),
  ADD KEY `fk_eval_tkm_idx` (`nim`);

--
-- Indexes for table `honor_dosen`
--
ALTER TABLE `honor_dosen`
  ADD PRIMARY KEY (`id_honordsn`),
  ADD KEY `fk_honor_dosen_idx` (`dosen_id`);

--
-- Indexes for table `honor_dosen_item`
--
ALTER TABLE `honor_dosen_item`
  ADD PRIMARY KEY (`id_itemhnrdsn`),
  ADD KEY `fk_honor_dosen_idx` (`honordsn_id`);

--
-- Indexes for table `honor_mentor`
--
ALTER TABLE `honor_mentor`
  ADD PRIMARY KEY (`id_honormntr`),
  ADD KEY `fk_honor_mntr_idx` (`mentor_id`);

--
-- Indexes for table `honor_mentor_item`
--
ALTER TABLE `honor_mentor_item`
  ADD PRIMARY KEY (`id_itemhnrmntr`),
  ADD KEY `fk_honor_mentor_idx` (`honormntr_id`);

--
-- Indexes for table `kegiatan_mhs`
--
ALTER TABLE `kegiatan_mhs`
  ADD PRIMARY KEY (`id_kegmhs`),
  ADD KEY `fk_keg_mahasiswa_idx` (`nim`);

--
-- Indexes for table `kelas_krs`
--
ALTER TABLE `kelas_krs`
  ADD PRIMARY KEY (`id_mkkrs`),
  ADD KEY `fk_item_krs_idx` (`krs_id`),
  ADD KEY `fk_krs_kelas_idx` (`kelas_id`);

--
-- Indexes for table `kelas_kuliah`
--
ALTER TABLE `kelas_kuliah`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `fk_kelas_mk_idx` (`matkul_id`),
  ADD KEY `fk_kelas_prodi_idx` (`prodi_id`);

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id_krs`),
  ADD KEY `fk_krs_mahasiswa_idx` (`nim`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD UNIQUE KEY `nim_UNIQUE` (`nim`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id_matkul`),
  ADD UNIQUE KEY `kd_matkul_UNIQUE` (`kd_matkul`);

--
-- Indexes for table `mentor`
--
ALTER TABLE `mentor`
  ADD PRIMARY KEY (`id_mentor`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `fk_nilai_kelas_idx` (`kelas_id`),
  ADD KEY `fk_nilai_mahasiswa_idx` (`nim`);

--
-- Indexes for table `ortu_mhs`
--
ALTER TABLE `ortu_mhs`
  ADD PRIMARY KEY (`id_ortumhs`),
  ADD KEY `fk_ortu_mhs_idx` (`nim`);

--
-- Indexes for table `partisipasi`
--
ALTER TABLE `partisipasi`
  ADD PRIMARY KEY (`id_presensi`),
  ADD KEY `fk_partisipasi_kelas_idx` (`kelas_id`),
  ADD KEY `ak_partisipasi_mahasiswa_idx` (`mahasiswa_id`);

--
-- Indexes for table `pengabdian_masyarakat`
--
ALTER TABLE `pengabdian_masyarakat`
  ADD PRIMARY KEY (`id_pengabdian`),
  ADD KEY `fk_pengabdian_dosen_idx` (`dosen_id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id_presensi`),
  ADD KEY `fk_kelas_presensi_idx` (`kelas_id`),
  ADD KEY `fk_presensi_mahasiswa_idx` (`mahasiswa_id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`),
  ADD UNIQUE KEY `kd_prodi_UNIQUE` (`kd_prodi`);

--
-- Indexes for table `research_interest`
--
ALTER TABLE `research_interest`
  ADD PRIMARY KEY (`id_rsch`),
  ADD KEY `fk_research_interest_idx` (`dosen_id`);

--
-- Indexes for table `riwayat_pend_mentor`
--
ALTER TABLE `riwayat_pend_mentor`
  ADD PRIMARY KEY (`id_rwytdosen`),
  ADD KEY `fk_riwayat_pendidikan_idx` (`dosen_id`);

--
-- Indexes for table `riwayat_pend_mhs`
--
ALTER TABLE `riwayat_pend_mhs`
  ADD PRIMARY KEY (`id_rwypend`),
  ADD KEY `fk_rwyt_pend_mhs_idx` (`nim`);

--
-- Indexes for table `riwayat_sehat_mhs`
--
ALTER TABLE `riwayat_sehat_mhs`
  ADD PRIMARY KEY (`id_rwytsehat`),
  ADD KEY `fk_riwayat_mhs_idx` (`nim`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- Indexes for table `skpi`
--
ALTER TABLE `skpi`
  ADD PRIMARY KEY (`id_skpi`),
  ADD KEY `fk_skpi_mahasiswa_idx` (`nim`);

--
-- Indexes for table `staff_pt`
--
ALTER TABLE `staff_pt`
  ADD PRIMARY KEY (`id_staff`);

--
-- Indexes for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  ADD PRIMARY KEY (`id_thnakademik`);

--
-- Indexes for table `template_surat`
--
ALTER TABLE `template_surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `tim_kelas_kuliah`
--
ALTER TABLE `tim_kelas_kuliah`
  ADD PRIMARY KEY (`id_timkelas`),
  ADD KEY `fk_item_kelas_idx` (`kelas_id`),
  ADD KEY `fk_kelas_dosen_idx` (`dosen_id`),
  ADD KEY `fk_kelas_mentor_idx` (`mentor_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `wali_mhs`
--
ALTER TABLE `wali_mhs`
  ADD PRIMARY KEY (`id_walimhs`),
  ADD KEY `fk_wali_mhs_idx` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alamat_mhs`
--
ALTER TABLE `alamat_mhs`
  MODIFY `id_alamatmhs` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id_cuti` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `evaluasi_dosen`
--
ALTER TABLE `evaluasi_dosen`
  MODIFY `id_evaldsn` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `evaluasi_matkul`
--
ALTER TABLE `evaluasi_matkul`
  MODIFY `id_evalmk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `evaluasi_tkm`
--
ALTER TABLE `evaluasi_tkm`
  MODIFY `id_evaldsn` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ortu_mhs`
--
ALTER TABLE `ortu_mhs`
  MODIFY `id_ortumhs` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengabdian_masyarakat`
--
ALTER TABLE `pengabdian_masyarakat`
  MODIFY `id_pengabdian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `riwayat_pend_mhs`
--
ALTER TABLE `riwayat_pend_mhs`
  MODIFY `id_rwypend` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `riwayat_sehat_mhs`
--
ALTER TABLE `riwayat_sehat_mhs`
  MODIFY `id_rwytsehat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wali_mhs`
--
ALTER TABLE `wali_mhs`
  MODIFY `id_walimhs` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alamat_mhs`
--
ALTER TABLE `alamat_mhs`
  ADD CONSTRAINT `fk_alamat_mhs` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cuti`
--
ALTER TABLE `cuti`
  ADD CONSTRAINT `fk_cuti_mahasiswa` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `evaluasi_dosen`
--
ALTER TABLE `evaluasi_dosen`
  ADD CONSTRAINT `fk_eval_dosen` FOREIGN KEY (`kelas_id`) REFERENCES `kelas_kuliah` (`id_kelas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `evaluasi_matkul`
--
ALTER TABLE `evaluasi_matkul`
  ADD CONSTRAINT `fk_eval_matkul` FOREIGN KEY (`kelas_id`) REFERENCES `kelas_kuliah` (`id_kelas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `evaluasi_tkm`
--
ALTER TABLE `evaluasi_tkm`
  ADD CONSTRAINT `fk_eval_tkm` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `honor_dosen`
--
ALTER TABLE `honor_dosen`
  ADD CONSTRAINT `fk_honor_dosen` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id_dosen`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `honor_dosen_item`
--
ALTER TABLE `honor_dosen_item`
  ADD CONSTRAINT `fk_honor_dosen_item` FOREIGN KEY (`honordsn_id`) REFERENCES `honor_dosen` (`id_honordsn`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `honor_mentor`
--
ALTER TABLE `honor_mentor`
  ADD CONSTRAINT `fk_honor_mntr` FOREIGN KEY (`mentor_id`) REFERENCES `mentor` (`id_mentor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `honor_mentor_item`
--
ALTER TABLE `honor_mentor_item`
  ADD CONSTRAINT `fk_honor_mentor_item` FOREIGN KEY (`honormntr_id`) REFERENCES `honor_mentor` (`id_honormntr`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kegiatan_mhs`
--
ALTER TABLE `kegiatan_mhs`
  ADD CONSTRAINT `fk_keg_mahasiswa` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kelas_krs`
--
ALTER TABLE `kelas_krs`
  ADD CONSTRAINT `fk_item_krs` FOREIGN KEY (`krs_id`) REFERENCES `krs` (`id_krs`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_krs_kelas` FOREIGN KEY (`kelas_id`) REFERENCES `kelas_kuliah` (`id_kelas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kelas_kuliah`
--
ALTER TABLE `kelas_kuliah`
  ADD CONSTRAINT `fk_kelas_mk` FOREIGN KEY (`matkul_id`) REFERENCES `mata_kuliah` (`kd_matkul`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_kelas_prodi` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`kd_prodi`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `krs`
--
ALTER TABLE `krs`
  ADD CONSTRAINT `fk_krs_mahasiswa` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `fk_nilai_kelas` FOREIGN KEY (`kelas_id`) REFERENCES `kelas_kuliah` (`id_kelas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_nilai_mahasiswa` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ortu_mhs`
--
ALTER TABLE `ortu_mhs`
  ADD CONSTRAINT `fk_ortu_mhs` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `partisipasi`
--
ALTER TABLE `partisipasi`
  ADD CONSTRAINT `ak_partisipasi_mahasiswa` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswa` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_partisipasi_kelas` FOREIGN KEY (`kelas_id`) REFERENCES `kelas_kuliah` (`id_kelas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pengabdian_masyarakat`
--
ALTER TABLE `pengabdian_masyarakat`
  ADD CONSTRAINT `fk_pengabdian_dosen` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id_dosen`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `presensi`
--
ALTER TABLE `presensi`
  ADD CONSTRAINT `fk_kelas_presensi` FOREIGN KEY (`kelas_id`) REFERENCES `kelas_kuliah` (`id_kelas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_presensi_mahasiswa` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswa` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `research_interest`
--
ALTER TABLE `research_interest`
  ADD CONSTRAINT `fk_research_interest` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id_dosen`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `riwayat_pend_mentor`
--
ALTER TABLE `riwayat_pend_mentor`
  ADD CONSTRAINT `fk_riwayat_pendidikan` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id_dosen`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `riwayat_pend_mhs`
--
ALTER TABLE `riwayat_pend_mhs`
  ADD CONSTRAINT `fk_rwyt_pend_mhs` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `riwayat_sehat_mhs`
--
ALTER TABLE `riwayat_sehat_mhs`
  ADD CONSTRAINT `fk_riwayat_mhs` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `skpi`
--
ALTER TABLE `skpi`
  ADD CONSTRAINT `fk_skpi_mahasiswa` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tim_kelas_kuliah`
--
ALTER TABLE `tim_kelas_kuliah`
  ADD CONSTRAINT `fk_item_kelas` FOREIGN KEY (`kelas_id`) REFERENCES `kelas_kuliah` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kelas_dosen` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id_dosen`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_kelas_mentor` FOREIGN KEY (`mentor_id`) REFERENCES `mentor` (`id_mentor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `wali_mhs`
--
ALTER TABLE `wali_mhs`
  ADD CONSTRAINT `fk_wali_mhs` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
