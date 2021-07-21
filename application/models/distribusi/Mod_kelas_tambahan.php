<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_kelas_tambahan extends CI_Model {

	public function get() {
		return $this->db->get('kelas_tambahan')->result();
	}

	public function getkelastambahan($where = array()) {
		$this->db->where($where);
		return $this->db->get('kelas_tambahan')->result();
	}

	public function insert($data) {
		return $this->db->insert_batch('kelas_tambahan', $data);
	}

	public function delete($id) {
		$this->db->where('id_kelas_tambahan', $id);
		$this->db->delete('kelas_tambahan');
	}

	public function select($id) {
		$this->db->where('id_kelas_tambahan', $id);
		return $this->db->get('siswa')->row();		
	}

	public function update($data, $id) {
		$this->db->where('id_kelas_tambahan', $id);
		$this->db->update('kelas_tambahan', $data);
	}

	public function get_kelas_berjalan() {
		return $this->db->select('s.nisn, s.nama, s.jenis_kelamin, kt.nama_kelas_tambahan')
						->from('siswa s')
						->join('kelas_tambahan_berjalan ktb', 's.nisn=ktb.nisn')
						->join('kelas_tambahan kt', 'ktb.id_kelas_tambahan=kt.id_kelas_tambahan')
						->order_by('kt.nama_kelas_tambahan, s.nisn')
						->get()->result();
	}

	public function get_pengacakan_siswa_kls_tambahan($jenjang){
		// nanti pindah ke model
		return $this->db->select('s.nisn, kt.id_kelas_tambahan')
						 ->from('siswa_kelas_reguler_berjalan s')
						 ->join('kelas_reguler_berjalan krb', 's.id_kelas_reguler_berjalan=krb.id_kelas_reguler_berjalan')
						 ->join('kelas_reguler kr', 'kr.id_kelas_reguler=krb.id_kelas_reguler')
						 ->join('kelas_tambahan kt', 'kt.nama_kelas_tambahan=kr.nama_kelas')
						 ->where('kr.jenjang', $jenjang)
						 ->order_by('s.nisn')
						 ->get()->result();

	}

	public function get_kelas($jenjang) {
		return $this->db->where('jenjang_kls_tambahan', $jenjang)
						->get('kelas_tambahan')->result();
	}

	public function get_siswa($id_kelas_tambahan)
	{
		return $this->db->select('s.nisn, s.nama, s.jenis_kelamin, s.agama')
						->from('siswa s')
						// ->join('siswa_kelas_reguler_berjalan skrb', 's.nisn=skrb.nisn')
						->join('kelas_tambahan_berjalan ktb', 's.nisn=ktb.nisn')
						->where('ktb.id_kelas_tambahan', $id_kelas_tambahan)
						->get()->result();
	}

	public function insert_berjalan($data) {
		return $this->db->insert_batch('kelas_tambahan_berjalan', $data);
	}

	// function get_siswa_perkelas(){
	// 	return $this->db->select('s.nisn, s.nama')
	// 					->from('siswa s')
	// 					->join('kelas_tambahan_berjalan ktb', 's.nisn=ktb.nisn')
	// 					->group_by('id_kelas_tambahan')	
	// 					->get()->result();

	
	// }

	public function upload_data($filename){
        ini_set('memory_limit', '-1');
        $inputFileName = './assets/distribusi/uploads/'.$filename;
        try {
        $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
        } catch(Exception $e) {
        die('Error loading file :' . $e->getMessage());
        }
 
        $worksheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
        $numRows = count($worksheet);
 
        for ($i=1; $i < ($numRows+1) ; $i++) { 
            $tgl_asli = str_replace('/', '-', $worksheet[$i]['B']);
            $exp_tgl_asli = explode('-', $tgl_asli);
            $exp_tahun = explode(' ', $exp_tgl_asli[2]);
            $tgl_sql = $exp_tahun[0].'-'.$exp_tgl_asli[0].'-'.$exp_tgl_asli[1].' '.$exp_tahun[1];
 
            $ins = array(
                    "nama"          => $worksheet[$i]["A"],
                    "waktu_absen"   => $tgl_sql
                   );
 
            $this->db->insert('data', $ins);
        }
    }
	
}


