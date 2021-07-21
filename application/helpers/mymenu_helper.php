<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists("sismp_data_menu"))
{
	function sismp_data_menu($bagian = "all")
	{
		$menu_level_1 = array();

		// menu KESISWAAN
		$menu_level_2 = array();
		$menu_level_3 = array();
		$menu_level_3[] = array("title" => "PPDB Ujian", "link" => base_url('kesiswaan/ppdb_ujian'));
		$menu_level_3[] = array("title" => "PPDB UN", "link" => base_url('kesiswaan/ppdb_un'));
		$menu_level_2[] = array("title" => "Penerimaan Peserta Didik Baru", "child" => $menu_level_3);

		$menu_level_3 = array();
		$menu_level_3[] = array("title" => "Peserta Didik Baru", "link" => base_url('kesiswaan/daftarulang'));
		$menu_level_3[] = array("title" => "Kenaikan Kelas", "link" => base_url('kesiswaan/daftarkenaikan'));
		$menu_level_2[] = array("title" => "Daftar Ulang", "child" => $menu_level_3);

		$menu_level_3 = array();
		$menu_level_3[] = array("title" => "Kelas Reguler", "link" => base_url('kesiswaan/distribusi'));
		$menu_level_3[] = array("title" => "Kelas Tambahan", "link" => base_url('kesiswaan/distribusi2'));
		$menu_level_2[] = array("title" => "Distribusi Kelas", "child" => $menu_level_3);

		$menu_level_3 = array();
		$menu_level_3[] = array("title" => "Mutasi Masuk", "link" => base_url('kesiswaan/masuk'));
		$menu_level_3[] = array("title" => "Mutasi Keluar", "link" => base_url('kesiswaan/keluar'));
		$menu_level_2[] = array("title" => "Mutasi Siswa", "child" => $menu_level_3);

		$menu_level_1["kesiswaan"] = array("title" => "Kesiswaan", "icon" => "fa-dashboard", "child" => $menu_level_2);

		// menu KURIKULUM
		$menu_level_2 = array();
		$menu_level_3 = array();
		$menu_level_3[] = array("title" => "Manajemen Mata Pelajaran", "link" => base_url('kurikulum/mapel'));
		$menu_level_3[] = array("title" => "Manajemen Hari & Jam", "link" => "#");
		$menu_level_3[] = array("title" => "Jadwal Mapel", "link" => "#");
		$menu_level_3[] = array("title" => "Jadwal Piket Guru", "link" => "#");
		$menu_level_3[] = array("title" => "Jadwal Tambahan", "link" => "#");
		$menu_level_2[] = array("title" => "Jadwal", "child" => $menu_level_3);

		$menu_level_3 = array();
		$menu_level_3[] = array("title" => "Nilai Siswa", "link" => "#");
		$menu_level_3[] = array("title" => "Kategori Nilai", "link" => "#");
		$menu_level_3[] = array("title" => "Jenis Nilai Akhir", "link" => "#");
		$menu_level_3[] = array("title" => "Deskripsi Nilai", "link" => "#");
		$menu_level_3[] = array("title" => "Rapor", "link" => "#");
		$menu_level_2[] = array("title" => "Penilaian", "child" => $menu_level_3);

		$menu_level_1["kurikulum"] = array("title" => "Kurikulum", "icon" => "fa-dashboard", "child" => $menu_level_2);

		// menu KEPEGAWAIAN
		$menu_level_2 = array();
		$menu_level_2[] = array("title" => "Data Pegawai", "link" => "#");
		$menu_level_2[] = array("title" => "Presensi Pegawai", "link" => "#");
		$menu_level_2[] = array("title" => "Jadwal Mengajar", "link" => "#");

		$menu_level_1["kepegawaian"] = array("title" => "Kepegawaian", "icon" => "fa-dashboard", "child" => $menu_level_2);

		// menu NONAKADEMIK
		$menu_level_2 = array();
		$menu_level_3 = array();			
		$menu_level_3[] = array("title" => "Pendaftaran" , "link" => base_url('nonakademik/pendaftaran'));
		$menu_level_3[] = array("title" => "Jadwal Ekstrakurikuler", "link" => base_url('nonakademik/jadwal'));
		$menu_level_3[] = array("title" => "Presensi", "link" => base_url('nonakademik/presensi'));
		$menu_level_3[] = array("title" => "Nilai", "link" => base_url('nonakademik/nilai'));
		$menu_level_3[] = array("title" => "pendanaan", "link" => base_url('nonakademik/pembayaran'));
		$menu_level_2[] = array("title" => "Ekstrakurikuler", "child" => $menu_level_3);

		$menu_level_3 = array();
		$menu_level_3[] = array("title" => "Keterlambatan", "link" => base_url('nonakademik/keterlambatan'));
		$menu_level_3[] = array("title" => "Perizinan", "link" => base_url('nonakademik/Perizinan'));
		$menu_level_3[] = array("title" => "Pelanggaran", "link" => base_url('nonakademik/Pelanggaran'));
		$menu_level_3[] = array("title" => "Prestasi", "link" => base_url('nonakademik/Prestasi'));
		$menu_level_2[] = array("title" => "Konseling", "child" => $menu_level_3);

		$menu_level_3 = array();
		$menu_level_3[] = array("title" => "Menambah Ekstrakurikuler", "link" => base_url('nonakademik/tmbh_ekskul'));
		$menu_level_3[] = array("title" => "Menambah Pembimbing", "link" => base_url('nonakademik/tmbh_pembimbing'));
		$menu_level_3[] = array("title" => "Menambah Pelanggaran", "link" => base_url('nonakademik/tmbh_pelanggaran'));
		$menu_level_2[] = array("title" => "Kelola Ekstrakurikuler", "child" => $menu_level_3);


		$menu_level_1["nonakademik"] = array("title" => "Non akademik", "icon" => "fa-dashboard", "child" => $menu_level_2);

		// menu SISWA
		$menu_level_2 = array();
		$menu_level_3 = array();			
		$menu_level_3[] = array("title" => "Pendaftaran" , "link" => base_url('nonakademik/pendaftaran'));
		$menu_level_3[] = array("title" => "Jadwal Ekstrakurikuler", "link" => base_url('nonakademik/jadwal'));
		$menu_level_3[] = array("title" => "Presensi", "link" => base_url('nonakademik/presensi'));
		$menu_level_3[] = array("title" => "Nilai", "link" => base_url('nonakademik/nilai'));
		$menu_level_3[] = array("title" => "pendanaan", "link" => base_url('nonakademik/pembayaran'));
		$menu_level_2[] = array("title" => "Ekstrakurikuler", "child" => $menu_level_3);

		$menu_level_1["Siswa"] = array("title" => "Siswa", "icon" => "fa-dashboard", "child" => $menu_level_2);


		if ($bagian == "all")
			return $menu_level_1;
		else
			return array($menu_level_1[$bagian]);
	}
}