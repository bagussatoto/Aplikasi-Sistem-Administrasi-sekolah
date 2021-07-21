<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftarulang_kenaikan extends CI_Controller {

  public function index()
  {
    $data['nama'] = $this->session->Nama;
    $data['foto'] = $this->session->foto;
    $data['username'] = $this->session->username; 
    
    $this->load->model('ppdb/model_pendaftar_daftarulang_kenaikan');
    $data['tabel_pendaftar_daftarulang_kenaikan'] = $this->model_pendaftar_daftarulang_kenaikan->getsiswa();

    $this->load->model('ppdb/model_form_daftarulang_kenaikan');
    $data['tabel_form_daftarulang_kenaikan'] = $this->model_form_daftarulang_kenaikan->get();

    $this->load->model('ppdb/model_tahunajaran');
    $data['tabel_tahunajaran'] = $this->model_tahunajaran->getaktif();

    $this->template->load('superadmin/dashboard', 'superadmin/ppdb/admin/view_daftarulang_kenaikan', $data);
  }

  public function saveformkenaikan() {
		$this->load->model('ppdb/model_form_daftarulang_kenaikan');
		$i=1;
        foreach ($this->db->get('form_daftarulang_kenaikan')->result() as $form) 
        { 
            if ($i<5) {
                if ($this->input->post('nilai'.$form->id_form_daftarulang_kenaikan) == "1") 
                {
                    $nilai = 1;
                } 
                else 
                { 
                    $nilai = 0; 
                }
                $arrdata = array
                (
                    'nilai' => $nilai
                );
                if ($this->input->post('atribut'.$form->id_form_daftarulang_kenaikan) != "") 
                {
                    $arrdata['atribut'] = $this->input->post('atribut'.$form->id_form_daftarulang_kenaikan); 
                }
            } else {
                if ($this->input->post('nilai'.$form->id_form_daftarulang_kenaikan) == "1") 
                { //dr admin
                    $nilai = 1;
                    $atribut = $this->input->post('atribut'.$form->id_form_daftarulang_kenaikan);
                } 
                else 
                { 
                    $nilai = 0; 
                    $atribut = "";
                }
                $arrdata = array
                (
                    'nilai' => $nilai,
                    'atribut' => $atribut

                );
            }
            $this->load->model('ppdb/model_form_daftarulang_kenaikan');
            $this->model_form_daftarulang_kenaikan->update($arrdata, $form->id_form_daftarulang_kenaikan);
            $i=$i+1;
         }
        $this->session->set_flashdata('aktif', "<script>alert('Formulir daftar ulang kenaikan berhasil diaktifkan!');</script>");
		redirect('suppdb/admin/daftarulang_kenaikan');
	}

    public function nonaktif() 
    {
        $this->load->model('ppdb/model_form_daftarulang_kenaikan');
        $i=1;
        foreach ($this->db->get('form_daftarulang_kenaikan')->result() as $form) 
         { 
            if ($form->nilai == "1") 
             {
                $nilai = 0;
                $atribut = "";
                $arrdata = array
                (
                    'nilai' => $nilai
                );
                if ($form->id_form_daftarulang_kenaikan>4) 
                {
                    $arrdata['atribut'] = '';
                }
                $this->model_form_daftarulang_kenaikan->update($arrdata, $form->id_form_daftarulang_kenaikan);
            }            
            $i=$i+1;
         }
        $this->load->model('ppdb/model_form_daftarulang_kenaikan');     
        $this->session->set_flashdata('nonaktif', "<script>alert('Formulir berhasil dinon-aktifkan!');</script>");
        redirect('suppdb/admin/daftarulang_kenaikan');
    }

	public function editberkas()
    {
        $this->load->model('ppdb/model_pendaftar_daftarulang_kenaikan');
        $data['row_pendaftar_daftarulang_kenaikan'] = $this->model_pendaftar_daftarulang_kenaikan->select($this->uri->segment(5));
        
        foreach ($this->db->get('form_daftarulang_kenaikan')->result() as $form) 
         { 
            $settingform[$form->nama_kolom] = $form->nilai;
         }
         $data['settingform'] = $settingform;
        $this->load->view('superadmin/ppdb/admin/view_edit_berkas_kenaikan', $data);
    }

     public function updatependaftar() {
        $arrdata = array(
                'surat_pernyataan' => $this->input->post('surat_pernyataan'),
                'formulir_pendataan' => $this->input->post('formulir_pendataan'),
                'tanda_pembayaran' => $this->input->post('tanda_pembayaran'),
                'rapor' => $this->input->post('rapor'),
                'berkas_1' => $this->input->post('berkas_1'),
                'berkas_2' => $this->input->post('berkas_2'),
                'berkas_3' => $this->input->post('berkas_3'),
                'berkas_4' => $this->input->post('berkas_4'),
                'berkas_5' => $this->input->post('berkas_5'),
                'terverifikasi' => $this->input->post('terverifikasi')
            );

        $this->load->model('ppdb/model_pendaftar_daftarulang_kenaikan');
        $this->model_pendaftar_daftarulang_kenaikan->update($arrdata, $this->uri->segment(5));
        $this->session->set_flashdata('berkas', "<script>alert('Berkas pendaftar berhasil diperbarui!');</script>");
        redirect('suppdb/admin/daftarulang_kenaikan');
    }

}
