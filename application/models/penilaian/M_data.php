<?php
class M_data extends CI_Model{
	function getNilai(){
		return $this->db->query("SELECT * FROM nilai_siswa n JOIN kategori_nilai k ON n.kategori_nilai_id=k.id_kategorinilai JOIN jenis_nilai_akhir j ON n.jenis_na_id=j.id_jenis_na JOIN mapel m ON n.mapel_id=m.id_mapel JOIN namamapel mp ON m.id_namamapel=mp.id_namamapel JOIN siswa s ON n.NISN=s.nisn");
	}
	function getNilaiKelasMapel($id_kelas_reguler_berjalan, $id_mapel){
		return $this->db->query("SELECT * FROM nilai_siswa n JOIN kategori_nilai k ON n.kategori_nilai_id=k.id_kategorinilai JOIN jenis_nilai_akhir j ON n.jenis_na_id=j.id_jenis_na JOIN mapel m ON n.mapel_id=m.id_mapel JOIN namamapel mp ON m.id_namamapel=mp.id_namamapel JOIN siswa s ON n.NISN=s.nisn JOIN siswa_kelas_reguler_berjalan sk ON s.NISN = sk.NISN WHERE m.id_mapel = '$id_mapel' AND sk.id_kelas_reguler_berjalan = '$id_kelas_reguler_berjalan'")->result();
	}
	function cekNilai($nisn, $id_mapel, $id_kategorinilai, $id_jenis_na){
		$this->db->where('nisn',$nisn);
		$this->db->where('mapel_id',$id_mapel);
		$this->db->where('kategori_nilai_id',$id_kategorinilai);
		$this->db->where('jenis_na_id',$id_jenis_na);
		return $this->db->get('nilai_siswa')->row();
	}
	function getDeskripsinilai(){
		return $this->db->query("SELECT * FROM deskripsi_nilai");
	}
	function getNamasiswa(){
		return $this->db->query("SELECT * FROM siswa s JOIN siswa_kelas_reguler_berjalan k ON s.nisn=k.nisn");
	}
	function getSiswaKelas($id_kelas_reguler_berjalan, $id_tahun_ajaran){
		$this->db->join('siswa_kelas_reguler_berjalan', 'siswa_kelas_reguler_berjalan.nisn = siswa.nisn');
		$this->db->join('kelas_reguler_berjalan', 'siswa_kelas_reguler_berjalan.id_kelas_reguler_berjalan = kelas_reguler_berjalan.id_kelas_reguler_berjalan');
		$this->db->join('kelas_reguler','kelas_reguler.id_kelas_reguler = kelas_reguler_berjalan.id_kelas_reguler');
		$this->db->where('kelas_reguler_berjalan.id_kelas_reguler_berjalan', $id_kelas_reguler_berjalan);
		$this->db->where('kelas_reguler_berjalan.id_tahun_ajaran', $id_tahun_ajaran);
		return $this->db->get('siswa')->result();
	}

	function getPrestasi($where = array()) {
		$this->db->where($where);
		return $this->db->get("prestasi")->result();
	}

	function getNilaiEsktrakurikuler($where = array()) {
		$this->db->join('nilaiekskul','nilaiekskul.id_jenis_kls_tambahan=jenis_kls_tambahan.id_jenis_kls_tambahan');
		$this->db->where($where);
		return $this->db->get("jenis_kls_tambahan")->result();
	}

	function getSiswa($nisn, $id_tahun_ajaran){
		$this->db->join('siswa_kelas_reguler_berjalan', 'siswa_kelas_reguler_berjalan.nisn = siswa.nisn');
		$this->db->join('kelas_reguler_berjalan', 'siswa_kelas_reguler_berjalan.id_kelas_reguler_berjalan = kelas_reguler_berjalan.id_kelas_reguler_berjalan');
		$this->db->join('kelas_reguler','kelas_reguler.id_kelas_reguler = kelas_reguler_berjalan.id_kelas_reguler');
		$this->db->where('siswa.nisn', $nisn);
		$this->db->where('kelas_reguler_berjalan.id_tahun_ajaran', $id_tahun_ajaran);
		return $this->db->get('siswa')->row();
	}

	function getPegawai($where = array()){
		$this->db->join('jabatan', 'jabatan.id_jabatan = pegawai.id_jabatan');
		$this->db->where($where);
		return $this->db->get('pegawai')->result();
	}


	function getKategorinilai(){
		return $this->db->query("SELECT * FROM kategori_nilai");
	}
	function getKompetensi($id_mapel){
		//return $this->db->query("SELECT * FROM k_dasar");
		$this->db->where('k_dasar.id_mapel', $id_mapel);
		return $this->db->get('k_dasar')->result();
	}
	function getKompetensi2($id_mapel, $id_jenis_na){
		//return $this->db->query("SELECT * FROM k_dasar");
		$this->db->where('k_dasar.id_mapel', $id_mapel);
		$this->db->where('k_dasar.id_jenis_na', $id_jenis_na);
		return $this->db->get('k_dasar')->result();
	}

	function getJenisnilai(){
		return $this->db->query("SELECT * FROM jenis_nilai_akhir");
	}

	function getMapel(){
		return $this->db->query("SELECT * FROM namamapel ");
	}

	function getMatapelajaran($where = array()){
		$this->db->join('mapel', 'mapel.id_namamapel = namamapel.id_namamapel');
		$this->db->join('kelas_reguler', 'mapel.id_kelas_reguler = kelas_reguler.id_kelas_reguler');
		$this->db->join('kelas_reguler_berjalan', 'kelas_reguler.id_kelas_reguler = kelas_reguler_berjalan.id_kelas_reguler');
		$this->db->where($where);
		return $this->db->get("namamapel")->result();
	}

	// function getMatapelajaran($where = array()){
	// 	$this->db->join('mapelkkm', 'mapelkkm.id_namamapel = mapel.id_namamapel');
	// 	$this->db->join('kelas_reguler', 'mapelkkm.id_kelas_reguler = kelas_reguler.id_kelas_reguler');
	// 	$this->db->join('kelas_reguler_berjalan', 'kelas_reguler.id_kelas_reguler = kelas_reguler_berjalan.id_kelas_reguler');
	// 	$this->db->where($where);
	// 	return $this->db->get("mapel")->result();
	// }

	function getKatNilai($where=array()) {
		$this->db->where($where);
		return $this->db->get('kategori_nilai')->result();
	}

	function getNilaiSiswa($where = array()) {
		$this->db->select('(AVG(Nilai_siswa) * bobot) / 100 AS nilai');
		$this->db->join('kategori_nilai', 'nilai_siswa.kategori_nilai_id = kategori_nilai.id_kategorinilai');
		$this->db->join('jenis_nilai_akhir', 'nilai_siswa.jenis_na_id = jenis_nilai_akhir.kode_na');
		$this->db->where($where);
		return $this->db->get("nilai_siswa")->row();
	}

	function getNilaiSiswa2($nisn, $mapel_id, $jenis_na_id, $id_kategorinilai) {
		//, (SELECT predikat FROM deskripsi_nilai WHERE deskripsi_nilai.mapel_id = mapel_id AND  LIMIT 1)
		return $this->db->query("SELECT *, (SELECT predikat FROM deskripsi_nilai WHERE deskripsi_nilai.mapel_id = T.mapel_id AND (T.nilai <= Nilai_atas) AND (T.nilai >=Nilai_bawah) LIMIT 1) AS predikat FROM (SELECT (AVG(Nilai_siswa) * bobot) / 100 AS nilai, nilai_siswa.mapel_id FROM `nilai_siswa` JOIN `kategori_nilai` ON `nilai_siswa`.`kategori_nilai_id` = `kategori_nilai`.`id_kategorinilai` JOIN `jenis_nilai_akhir` ON `nilai_siswa`.`jenis_na_id` = `jenis_nilai_akhir`.`kode_na` WHERE `nilai_siswa`.`nisn` = '$nisn' AND `nilai_siswa`.`mapel_id` = '$mapel_id' AND `nilai_siswa`.`jenis_na_id` = '$jenis_na_id' AND `id_kategorinilai` = '$id_kategorinilai') T")->row();

		// $this->db->select('(AVG(Nilai_siswa) * bobot) / 100 AS nilai');
		// $this->db->join('kategori_nilai', 'nilai_siswa.kategori_nilai_id = kategori_nilai.id_kategorinilai');
		// $this->db->join('jenis_nilai_akhir', 'nilai_siswa.jenis_na_id = jenis_nilai_akhir.kode_na');
		// $this->db->where($where);
		// return $this->db->get("nilai_siswa")->row();
	}

	function getPredikat($where = array()) {
		$this->db->select('*');
		$this->db->where($where);
		return $this->db->get("deskripsi_nilai")->row();
	}

	function getKelas(){
		return $this->db->get('kelas_reguler')->row();
	}

	function getKelasRegulerBerjalan($id_tahun_ajaran){
		return $this->db->query("SELECT * FROM kelas_reguler_berjalan k JOIN kelas_reguler r ON k.id_kelas_reguler=r.id_kelas_reguler WHERE k.id_tahun_ajaran = '$id_tahun_ajaran'");
	}

	function selectKelasRegulerBerjalan($id_kelas_reguler_berjalan){
		$this->db->where("id_kelas_reguler_berjalan", $id_kelas_reguler_berjalan);
		return $this->db->get("kelas_reguler_berjalan")->row();
	}

	function selectKelasRegulerBerjalan2($id_kelas_reguler_berjalan){
		$this->db->join('kelas_reguler', 'kelas_reguler.id_kelas_reguler = kelas_reguler_berjalan.id_kelas_reguler', 'left');
		$this->db->where("id_kelas_reguler_berjalan", $id_kelas_reguler_berjalan);
		return $this->db->get("kelas_reguler_berjalan")->row();
	}

	function setkategorinilai(){
		$this->db->insert('kategori_nilai',$data);
	}
	function editnilai($data,$id){
		
		
		$this->db->where('id_nilai_siswa',$id);
		$this->db->update('nilai_siswa',$data);
	}
	function editkategorinilai($data,$id){
		
		
		$this->db->where('id_kategorinilai',$id);
		$this->db->update('kategori_nilai',$data);
	}

	function editdesknilai($data,$id){
		
		
		$this->db->where('id_deskripsi',$id);
		$this->db->update('deskripsi_nilai',$data);
	}
	
	function editjenisnilai($data,$id){
		
		
		$this->db->where('id_jenis_na',$id);
		$this->db->update('jenis_nilai_akhir',$data);
	}
	function editkompetensi($data,$id){
		
		
		$this->db->where('id_kd',$id);
		$this->db->update('kategori_nilai',$data);
	}
	
	public function selectNilai($id)
	{
		$this->db->where('id_nilai_siswa', $id);
		return $this->db->get('nilai_siswa')->row(); 
	}

	public function selectKatnilai($id)
	{
		$this->db->where('id_kategorinilai', $id);
		return $this->db->get('kategori_nilai')->row(); 
	}
	public function selectDesknilai($id)
	{
		$this->db->where('id_deskripsi', $id);
		return $this->db->get('deskripsi_nilai')->row(); 
	}

	public function selectJenisnilai($id)
	{
		$this->db->where('id_jenis_na', $id);
		return $this->db->get('jenis_nilai_akhir')->row(); 
	}
	public function selectKompetensi($id)
	{
		$this->db->where('id_kd', $id);
		return $this->db->get('k_dasar')->row(); 
	}

	function tambahdata($data,$table){
		$this->db->insert($table,$data);
	}

	function tambahdatabatch($data,$table){
		$this->db->insert_batch($table,$data);
	}

	function hapusdata($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}	

	function getKurikulum(){
		$this->db->join('tahunajaran', 'tahunajaran.id_tahun_ajaran = kurikulum.tahunajaran_id');
		return $this->db->get('kurikulum')->result();
	}

	function getkaldik($tgl_awal, $tgl_akhir){
		$this->db->where("tgl_awal>='$tgl_awal' AND tgl_awal<='$tgl_akhir' OR tgl_akhir>='$tgl_awal' AND tgl_akhir<='$tgl_akhir'");
		return $this->db->get('kaldik')->result();
	}

	function gettanggallibur($tanggal_awal, $tanggal_akhir){
		$this->db->where("tanggal_awal>='$tanggal_awal' AND tanggal_awal<='$tanggal_akhir' OR tanggal_akhir>='$tanggal_awal' AND tanggal_akhir<='$tanggal_akhir'");
		return $this->db->get('tanggal_libur')->result();
	}

	function gettanggalliburnasional($bulan){
		$this->db->where("bulan_libur_nasional='$bulan'");
		return $this->db->get('tanggal_libur_nasional')->result();
	}

	public function selectKaldik($id)
	{
		$this->db->where('id_kaldik', $id);
		return $this->db->get('kaldik')->row(); 
	}

	public function selectKurikulum($id)
	{
		$this->db->where('id_kurikulum', $id);
		return $this->db->get('kurikulum')->row(); 
	}

	function editkaldik($data,$id){
		$this->db->where('id_kaldik',$id);
		$this->db->update('kaldik',$data);
	}
	function editkurikulum($data,$id){
		$this->db->where('id_kurikulum',$id);
		$this->db->update('kurikulum',$data);
	}

	function getsetting() {
		$this->db->join('tahunajaran', 'setting.id_tahun_ajaran=tahunajaran.id_tahun_ajaran');
		return $this->db->get('setting')->row();
	}
	function getTahunajaran(){
		return $this->db->get('tahunajaran')->row();
	}

	function getkelasreguler($where = array()) {
		$this->db->where($where);
		return $this->db->get('kelas_reguler')->result();
	}

	function getpresensihari($tanggal, $nisn, $id_kelas_reguler_berjalan){
		$this->db->where("tanggal='$tanggal' AND nisn='$nisn' AND kelas_berjalan_id='$id_kelas_reguler_berjalan'");
		return $this->db->get('presensi_siswa')->row();
	}
	function editpresensi($data,$id){
		$this->db->where('id_presensi',$id);
		$this->db->update('presensi_siswa',$data);
	}
	public function getpresensibulan($bulan, $tahun, $nisn, $status, $id_kelas_reguler_berjalan) {
		$this->db->select('COUNT(id_presensi) AS jml');
		$this->db->where('status_kehadiran', $status);
		$this->db->where('NISN', $nisn);
		$this->db->where('MONTH(tanggal)', $bulan);
		$this->db->where('YEAR(tanggal)', $tahun);
		$this->db->where('kelas_berjalan_id', "$id_kelas_reguler_berjalan");
		return $this->db->get('presensi_siswa')->row();
	}

	public function getpresensisemester($tanggal_mulai, $tanggal_selesai, $nisn, $status, $id_kelas_reguler_berjalan) {
		$this->db->select('COUNT(id_presensi) AS jml');
		$this->db->where('status_kehadiran', $status);
		$this->db->where('NISN', $nisn);
		$this->db->where("tanggal >= '$tanggal_mulai'");
		$this->db->where("tanggal <= '$tanggal_selesai'");
		$this->db->where('kelas_berjalan_id', "$id_kelas_reguler_berjalan");
		return $this->db->get('presensi_siswa')->row();
	}
}
?>