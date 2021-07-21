<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_ekskul extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $this->load->database();
                // Your own constructor code
        }


        function data_ekskul()
        {
                $query = $this->db->get('jenis_kls_tambahan')->result();
                return $query;
        }


        function data_pembimbing()
        {
                $query = $this->db->get('pembimbing')->result();
                return $query;
        }

        function get_siswa($nisn)
        {
                //$this->db->where("nisn",$nisn);
                $this->db->where("nisn = '$nisn' OR nik = '$nisn'");
                $query = $this->db->get('siswa')->row();
                return $query;
        }

        function get_peserta($id_jenis_kls_tambahan)
        {
                $this->db->join('siswa', 'siswa.nisn=ekstrakurikuler.nisn');
                $this->db->join('jenis_kls_tambahan', 'jenis_kls_tambahan.id_jenis_kls_tambahan=ekstrakurikuler.id_jenis_kls_tambahan', 'left');
                $this->db->where("ekstrakurikuler.id_jenis_kls_tambahan = '$id_jenis_kls_tambahan'");
                $query = $this->db->get('ekstrakurikuler')->result();
                return $query;
        }

        function get_peserta2($id_jenis_kls_tambahan, $id_tahun_ajaran)
        {
                $this->db->join('siswa', 'siswa.nisn=ekstrakurikuler.nisn');
                $this->db->join('jenis_kls_tambahan', 'jenis_kls_tambahan.id_jenis_kls_tambahan=ekstrakurikuler.id_jenis_kls_tambahan', 'left');
                $this->db->where("ekstrakurikuler.id_jenis_kls_tambahan = '$id_jenis_kls_tambahan'");
                $this->db->where("ekstrakurikuler.id_tahun_ajaran = '$id_tahun_ajaran'");
                $query = $this->db->get('ekstrakurikuler')->result();
                return $query;
        }

        public function getaktif()
        {
        $this->db->limit(1);
        return $this->db->get('setting')->row();
        }


        function simpan($data)
        {
            $this->load->helper('setting_helper');
            $this->setting = get_setting();

            $id_tahun_ajaran = $this->getaktif()->id_tahun_ajaran;

            
                $nisn = $data["nisn"];
                $thn_ajaran = $data["thn_ajaran"];
                $id_tahun_ajaran = $this->setting->id_tahun_ajaran;
                $semester = $data["semester"];
                $ekskul = $data["ekskul"];
                $jdwlekskul = $data["jdwlekskul"];
                

                $this->db->delete('ekstrakurikuler', array('nisn' => $nisn, "thn_ajaran" => $thn_ajaran, "semester" => $semester, "id_tahun_ajaran" => $id_tahun_ajaran)); 

                $hasil = false;
                foreach ($ekskul as $eks => $veks)
                {
                        $data = array(
                           'nisn' => $nisn,
                           'id_jenis_kls_tambahan' => $eks,
                           'thn_ajaran' => $thn_ajaran,
                           'semester' => $semester,
                           'id_tahun_ajaran' => $id_tahun_ajaran,
                           'id_jadwal_ekskul' => $jdwlekskul[$eks] //$jadwal_ekskul,
                        );

                        $hasil = $this->db->insert('ekstrakurikuler', $data);
                }

                return $hasil;
        }

        function statistik_ekskul($semester = "")
        {
                $kueri = "select a.id_jenis_kls_tambahan, count(a.nisn) as jumlah, b.jenis_kls_tambahan
                        from ekstrakurikuler a
                        left join jenis_kls_tambahan b on b.id_jenis_kls_tambahan = a.id_jenis_kls_tambahan
                        where a.semester = '$semester'
                        group by a.id_jenis_kls_tambahan";
                return $this->db->query($kueri)->result();
        }


        function jdwal_ekskul($mode = "jadwal1")
        {
            $arrhari = array('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu');

            $hasil = array();
            foreach ($arrhari as $hari)
            {
                $kueri = "select a.*,b.jenis_kls_tambahan,c.nama_pembimbing
                            from jadwal_ekskul a
                            inner join jenis_kls_tambahan b on b.id_jenis_kls_tambahan = a.id_jenis_kls_tambahan
                            left join pembimbing c on c.id_pembimbing = a.id_pembimbing
                            where a.hari = '".$hari."'
                            order by a.jam_mulai";
                $arrjadwal = $this->db->query($kueri)->result();

                if ($mode == "jadwal1")
                {
                    $waktu = array();
                    $ekskul = array();
                    $tempat = array();
                    $pembimbing = array();
                    $id_jadwal = array();
                    foreach ($arrjadwal as $jadwal)
                    {
                        $jam1 = explode(":", $jadwal->jam_mulai);
                        $jam2 = explode(":", $jadwal->jam_selesai);
                        $waktu[] = $jam1[0].":".$jam1[1] . " - " . $jam2[0].":".$jam2[1];

                        $ekskul[] = $jadwal->jenis_kls_tambahan;
                        $tempat[] = $jadwal->tempat;
                        $pembimbing[] = $jadwal->nama_pembimbing;
                        $id_jadwal[] = $jadwal->id_jadwal_ekskul;
                    }

                    if (!empty($waktu))
                    {
                        $hasil[$hari] = array("waktu" => $waktu,
                                              "ekskul" => $ekskul,
                                              "tempat" => $tempat,
                                              "pembimbing" => $pembimbing,
                                              "id_jadwal" => $id_jadwal);
                    }
                }
                else if ($mode == "jadwal2")
                {
                    $hasil[$hari] = $arrjadwal;
                }
                    
                    
            }

            return $hasil;
                
        }

        function simpan_presensi_pembimbing($dt_save)
        {
            $data = array(
               'id_pembimbing' => $dt_save["pembimbing"],
               'id_jadwal_ekskul' => $dt_save["jadwal_id"],
               'tgl_kegiatan' => $dt_save["tanggal"],
               'status_kehadiran' => $dt_save["status"]
            );

            $hasil = $this->db->insert('presensi_kls_tambahan', $data);
            return $hasil;
        }

        function get_presensi_tahun()
        {
            $k_cari = "select year(a.tgl_kegiatan) as tahun
                        from presensi_kls_tambahan a
                        union
                        select year(current_date) - 1 as tahun
                        union
                        select year(current_date) as tahun
                        union
                        select year(current_date) + 1 as tahun
                        order by tahun";
            $q_cari = $this->db->query($k_cari)->result();
            return $q_cari;
        }

        function get_presensi_pembimbing_report($tahun, $bulan)
        {
            $k_cari = "select a.*,b.nama_pembimbing,b.jabatan
                        from presensi_kls_tambahan a
                        inner join pembimbing b on b.id_pembimbing = a.id_pembimbing
                        where year(a.tgl_kegiatan) = ".$tahun." and month(a.tgl_kegiatan) = ".$bulan."
                        order by a.tgl_kegiatan";
            $q_cari = $this->db->query($k_cari)->result();
            return $q_cari;
        }

        function get_presensi_siswa($thn_ajaran, $semester, $idjadwal, $tanggal)
        {
            $k_cari = "select a.*,c.nama,d.status_kehadiran #GROUP_CONCAT(d.status_kehadiran) as status
                        from ekstrakurikuler a
                        inner join jadwal_ekskul b on b.id_jenis_kls_tambahan = a.id_jenis_kls_tambahan and b.id_jadwal_ekskul = $idjadwal
                        inner join siswa c on c.nisn = a.nisn
                        left join presensi_kls_tambahan d on d.nisn = a.nisn and d.tgl_kegiatan = '$tanggal' and d.id_jadwal_ekskul = b.id_jadwal_ekskul
                        where a.thn_ajaran = '$thn_ajaran' and a.semester = '$semester' and a.id_jadwal_ekskul = $idjadwal
                        #group by a.nisn";
            $q_cari = $this->db->query($k_cari)->result();
            return $q_cari;
        }

        function simpan_presensi_siswa($dt_save)
        {
            $data = array(
               'nisn' => $dt_save["nisn"],
               'id_jadwal_ekskul' => $dt_save["jadwal_id"],
               'tgl_kegiatan' => $dt_save["tanggal"],
               'status_kehadiran' => $dt_save["status"]
            );

            $cari = "select * from presensi_kls_tambahan where nisn = '".$dt_save["nisn"]."' and id_jadwal_ekskul = '".$dt_save["jadwal_id"]."' and tgl_kegiatan = '".$dt_save["tanggal"]."'";
            $q_cari = $this->db->query($cari)->row();
            // print_r($q_cari);

            if (!$q_cari)
                $hasil = $this->db->insert('presensi_kls_tambahan', $data);
            else
            {
                $this->db->where('id_presensikls_tambahan', $q_cari->id_presensikls_tambahan);
                $hasil = $this->db->update('presensi_kls_tambahan', $data);
            }
            return $hasil;
        }

        function presensi_siswa($tanggal, $id_ekskul)
        {
            $cari = "select a.*,b.nama
                    from presensi_kls_tambahan a
                    inner join siswa b on b.nisn = a.nisn
                    inner join jadwal_ekskul c on c.id_jadwal_ekskul = a.id_jadwal_ekskul and c.id_jenis_kls_tambahan = $id_ekskul
                    where a.tgl_kegiatan = '$tanggal'";
            $q_cari = $this->db->query($cari)->result();
            return $q_cari;
        }

        function report_presensi($report = "", $data = array())
        {
            if ($report == "siswa_jum_pertemuan")
            {
                $thn_ajaran = isset($data["thn_ajaran"]) ? $data["thn_ajaran"] : "2016 - 2017";
                $semester = isset($data["semester"]) ? $data["semester"] : "genap";
                $jenis_kls_tambahan = isset($data["jenis_kls_tambahan"]) ? $data["jenis_kls_tambahan"] : "0";

                $k_cari_ekskul = "select group_concat(distinct a.id_jadwal_ekskul) as id_jadwal
                                from ekstrakurikuler a
                                where a.thn_ajaran = '".$thn_ajaran."' and a.semester = '".$semester."' and a.id_jenis_kls_tambahan = ".$jenis_kls_tambahan;
                $q_cari_ekskul = $this->db->query($k_cari_ekskul)->row();
                
                if ($q_cari_ekskul)
                    $id_jadwal_ekskul = $q_cari_ekskul->id_jadwal;
                else
                    $id_jadwal_ekskul = 0;

                $k_pertemuan = "select a.tgl_kegiatan
                                from presensi_kls_tambahan a
                                where a.id_jadwal_ekskul in (".$id_jadwal_ekskul.")
                                group by a.tgl_kegiatan";
                $q_pertemuan = $this->db->query($k_pertemuan)->result();

                return $q_pertemuan;
            }
            else if ($report == "siswa_pertemuan")
            {
                $thn_ajaran = isset($data["thn_ajaran"]) ? $data["thn_ajaran"] : "2016 - 2017";
                $semester = isset($data["semester"]) ? $data["semester"] : "genap";
                $jenis_kls_tambahan = isset($data["jenis_kls_tambahan"]) ? $data["jenis_kls_tambahan"] : "0";

                $k_siswa = "select a.*,b.nama
                            from ekstrakurikuler a
                            inner join siswa b on b.nisn = a.nisn
                            where a.thn_ajaran = '".$thn_ajaran."' and a.semester = '".$semester."' and a.id_jenis_kls_tambahan = ".$jenis_kls_tambahan."
                            order by b.nama";
                $q_siswa = $this->db->query($k_siswa)->result();

                $arr_hasil = array();
                foreach ($q_siswa as $siswa)
                {
                    $k_cari_ekskul = "select group_concat(distinct a.id_jadwal_ekskul) as id_jadwal
                                    from ekstrakurikuler a
                                    where a.thn_ajaran = '".$thn_ajaran."' and a.semester = '".$semester."' and a.id_jenis_kls_tambahan = ".$jenis_kls_tambahan;
                    $q_cari_ekskul = $this->db->query($k_cari_ekskul)->row();
                    
                    if ($q_cari_ekskul)
                        $id_jadwal_ekskul = $q_cari_ekskul->id_jadwal;
                    else
                        $id_jadwal_ekskul = 0;

                    $k_status = "select a.*
                                    from presensi_kls_tambahan a
                                    where a.nisn = '".$siswa->nisn."' and a.id_jadwal_ekskul in (".$id_jadwal_ekskul.")";
                    $q_status = $this->db->query($k_status)->result();

                    $arr_hasil[] = array("nisn" => $siswa->nisn,
                                         "nama" => $siswa->nama,
                                         "status" => $q_status);
                }

                return $arr_hasil;
            }
        }

        function report_presensi_pembimbing($report = "", $data = array())
        {
            if ($report == "get_tanggal")
            {
                $k_cari = "select distinct tgl_kegiatan, day(tgl_kegiatan) as tgl
                            from presensi_kls_tambahan
                            where ifnull(id_pembimbing,0) <> 0 and year(tgl_kegiatan) = ".$data["tahun"]." and month(tgl_kegiatan) = ".$data["bulan"];
                $q_cari = $this->db->query($k_cari)->result();

                $hasil = array();
                foreach ($q_cari as $cari)
                {
                    $k_presensi = "select *
                                    from presensi_kls_tambahan
                                    where ifnull(id_pembimbing,0) <> 0 and year(tgl_kegiatan) = ".$data["tahun"]." and month(tgl_kegiatan) = ".$data["bulan"]." and day(tgl_kegiatan) = ".$cari->tgl;
                    $q_presensi = $this->db->query($k_presensi)->result();

                    $arr_presensi = array();
                    foreach ($q_presensi as $presensi)
                    {
                        $arr_presensi[] = array("id_pembimbing" => $presensi->id_pembimbing,
                                                "id_jadwal_ekskul" => $presensi->id_jadwal_ekskul,
                                                "status_kehadiran" => $presensi->status_kehadiran);
                    }

                    $hasil[] = array("tanggal" => $cari->tgl_kegiatan,
                                     "tgl" => $cari->tgl,
                                     "presensi" => $arr_presensi);
                }

                return $hasil;
            }
            else if ($report == "get_pembimbing")
            {
                $k_cari = "select a.id_pembimbing, a.status_kehadiran, a.id_jadwal_ekskul, b.id_jenis_kls_tambahan, b.jam_mulai, b.jam_selesai, c.jenis_kls_tambahan, d.nama_pembimbing
                            from presensi_kls_tambahan a
                            inner join jadwal_ekskul b on b.id_jadwal_ekskul = a.id_jadwal_ekskul
                            inner join jenis_kls_tambahan c on c.id_jenis_kls_tambahan = b.id_jenis_kls_tambahan
                            inner join pembimbing d on d.id_pembimbing = a.id_pembimbing
                            where ifnull(a.id_pembimbing,0) <> 0 and year(a.tgl_kegiatan) = ".$data["tahun"]." and month(a.tgl_kegiatan) = ".$data["bulan"]."
                            group by a.id_pembimbing, a.id_jadwal_ekskul";
                $q_cari = $this->db->query($k_cari)->result();

                return $q_cari;
            }
            
        }

}