<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftarulang_ppdb extends CI_Controller {

  public function index()
  {
    $data['nama'] = $this->session->Nama;
    $data['foto'] = $this->session->foto;
    $data['username'] = $this->session->username; 

    $this->load->model('ppdb/model_pendaftar_daftarulang_ppdb');
    $data['tabel_pendaftar_daftarulang_ppdb'] = $this->model_pendaftar_daftarulang_ppdb->getnamalulusppdb();

    $this->load->model('ppdb/model_form_daftarulang_ppdb');
    $data['tabel_form_daftarulang_ppdb'] = $this->model_form_daftarulang_ppdb->get();

    foreach ($this->db->get('form_daftarulang_ppdb')->result() as $form) 
        { 
            $settingform[$form->nama_kolom] = $form->nilai;
        }
    $data['settingform'] = $settingform;

    $this->load->model('ppdb/model_ketentuan_ppdb');
    $data['tabel_ketentuan_ppdb'] = $this->model_ketentuan_ppdb->get();

    $this->load->model('ppdb/model_pengumuman_ppdb');
    $data['tabel_pengumuman_ppdb'] = $this->model_pengumuman_ppdb->get();

    $this->template->load('superadmin/dashboard', 'superadmin/ppdb/admin/view_daftarulang_ppdb', $data);
  }

  public function saveformppdb() 
    {
        $this->load->model('ppdb/model_form_daftarulang_ppdb');
        $i=1;
        foreach ($this->db->get('form_daftarulang_ppdb')->result() as $form) 
        { 
            if ($i<5) {
                if ($this->input->post('nilai'.$form->id_form_daftarulang_ppdb) == "1") 
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
                if ($this->input->post('atribut'.$form->id_form_daftarulang_ppdb) != "") 
                {
                    $arrdata['atribut'] = $this->input->post('atribut'.$form->id_form_daftarulang_ppdb); 
                }
            } else {
                if ($this->input->post('nilai'.$form->id_form_daftarulang_ppdb) == "1") 
                { //dr admin
                    $nilai = 1;
                    $atribut = $this->input->post('atribut'.$form->id_form_daftarulang_ppdb);
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
            $this->load->model('ppdb/model_form_daftarulang_ppdb');
            $this->model_form_daftarulang_ppdb->update($arrdata, $form->id_form_daftarulang_ppdb);
            $i=$i+1;
         }
        $this->session->set_flashdata('aktif', "<script>alert('Formulir berhasil diaktifkan!');</script>");
        redirect('suppdb/admin/daftarulang_ppdb');
    }

    public function nonaktif() 
    {
        $this->load->model('ppdb/model_form_daftarulang_ppdb');
        $i=1;
        foreach ($this->db->get('form_daftarulang_ppdb')->result() as $form) 
         { 
            if ($form->nilai == "1") 
             {
                $nilai = 0;
                $atribut = "";
                $arrdata = array
                (
                    'nilai' => $nilai
                );
                if ($form->id_form_daftarulang_ppdb>4) 
                {
                    $arrdata['atribut'] = '';
                }
                $this->model_form_daftarulang_ppdb->update($arrdata, $form->id_form_daftarulang_ppdb);
            }            
            $i=$i+1;
         }
        $this->load->model('ppdb/model_form_daftarulang_ppdb');     
        $this->session->set_flashdata('nonaktif', "<script>alert('Formulir berhasil dinon-aktifkan!');</script>");
        redirect('suppdb/admin/daftarulang_ppdb');
    }

    public function saveketentuan() {
		$config['upload_path']          = './assets/kesiswaan/ketentuan/';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 100000;
        // $config['max_width']            = 10240;
        // $config['max_height']           = 7680;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('isi_ketentuan'))
        {
			$isi_ketentuan = "";                
        }
        else
        {
            $isi_ketentuan = $this->upload->data('file_name');
        }

		$this->load->model('ppdb/model_tahunajaran');
		$arrdata = array(
				'id_tahun_ajaran' => $this->model_tahunajaran->getaktif()->id_tahun_ajaran, 
				'nama_ketentuan' => $this->input->post('nama_ketentuan'), 
				'isi_ketentuan' => $isi_ketentuan, 
				'tgl_berlaku' => $this->input->post('tgl_berlaku')
			);
		$this->load->model('ppdb/model_ketentuan_ppdb');
		$this->model_ketentuan_ppdb->insert($arrdata);
        $this->session->set_flashdata('pesan', "<script>alert('Ketentuan Daftar ulang PPDB berhasil disimpan!');</script>");
		redirect('suppdb/admin/daftarulang_ppdb');
	}

    public function editketentuan()
    {
        $this->load->model('ppdb/model_ketentuan_ppdb');
        $data['row_ketentuan_ppdb'] = $this->model_ketentuan_ppdb->select($this->uri->segment(5));
    
        $this->load->view('superadmin/ppdb/admin/view_edit_ketentuan_daftarulang', $data);
    }

    public function updateketentuan() {
        $this->load->model('ppdb/model_tahunajaran');
        $arrdata = array(
                'id_tahun_ajaran' => $this->model_tahunajaran->getaktif()->id_tahun_ajaran, 
                'nama_ketentuan' => $this->input->post('nama_ketentuan'), 
                'tgl_berlaku' => $this->input->post('tgl_berlaku')
            );
        
        $config['upload_path']          = './assets/kesiswaan/ketentuan/';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 100000;
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('isi_ketentuan'))
        {
            
        }
        else
        {
            $arrdata['isi_ketentuan'] = $this->upload->data('file_name');
        }

        $this->load->model('ppdb/model_ketentuan_ppdb');
        $this->model_ketentuan_ppdb->update($arrdata, $this->uri->segment(5));
        $this->session->set_flashdata('baru', "<script>alert('Ketentuan PPDB berhasil diperbarui!');</script>");
        redirect('suppdb/admin/daftarulang_ppdb');
    }

    public function deleteketentuan()
    {
        $this->load->model('ppdb/model_ketentuan_ppdb');
        $this->model_ketentuan_ppdb->delete($this->uri->segment(5));
        redirect('suppdb/admin/daftarulang_ppdb');
    }

    public function editberkas()
    {
        $this->load->model('ppdb/model_pendaftar_daftarulang_ppdb');
        $data['row_pendaftar_daftarulang_ppdb'] = $this->model_pendaftar_daftarulang_ppdb->select($this->uri->segment(5));

        foreach ($this->db->get('form_daftarulang_ppdb')->result() as $form) 
         { 
            $settingform[$form->nama_kolom] = $form->nilai;
         }
         $data['settingform'] = $settingform;

        $this->load->view('superadmin/ppdb/admin/view_edit_berkas_daftarulang', $data);
    }

    public function updateberkas() {
        $arrdata = array(
                'surat_pernyataan' => $this->input->post('surat_pernyataan'),
                'form_pendataan' => $this->input->post('form_pendataan'),
                'tanda_pembayaran' => $this->input->post('tanda_pembayaran'),
                'berkas_1' => $this->input->post('berkas_1'),
                'berkas_2' => $this->input->post('berkas_2'),
                'berkas_3' => $this->input->post('berkas_3'),
                'berkas_4' => $this->input->post('berkas_4'),
                'berkas_5' => $this->input->post('berkas_5'),
                'terverifikasi' => $this->input->post('terverifikasi')
            );

        $this->load->model('ppdb/model_pendaftar_daftarulang_ppdb');
        $this->model_pendaftar_daftarulang_ppdb->update($arrdata, $this->uri->segment(5));
        $this->session->set_flashdata('berkas', "<script>alert('Berkas pendaftar berhasil diperbarui!');</script>");
        redirect('suppdb/admin/daftarulang_ppdb');
    }

	public function savepengumuman() {
		$config['upload_path']          = './assets/kesiswaan/pengumuman/';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 100000;
        // $config['max_width']            = 10240;
        // $config['max_height']           = 7680;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('isi'))
        {
			$isi = "";                
        }
        else
        {
            $isi= $this->upload->data('file_name');
        }

		$this->load->model('ppdb/model_tahunajaran');
		$arrdata = array(
				'id_tahun_ajaran' => $this->model_tahunajaran->getaktif()->id_tahun_ajaran, 
				'judul' => $this->input->post('judul'), 
				'isi' => $isi, 
				'tanggal_berlaku' => $this->input->post('tanggal_berlaku')
			);
		$this->load->model('ppdb/model_pengumuman_ppdb');
		$this->model_pengumuman_ppdb->insert($arrdata);
        $this->session->set_flashdata('pengumuman', "<script>alert('Pengumuman PPDB berhasil disimpan!');</script>");
		redirect('suppdb/admin/daftarulang_ppdb');
	}

    public function editpengumuman()
    {
        $this->load->model('ppdb/model_pengumuman_ppdb');
        $data['row_pengumuman_ppdb'] = $this->model_pengumuman_ppdb->select($this->uri->segment(5));
    
        $this->load->view('superadmin/ppdb/admin/view_edit_pengumuman_daftarulang', $data);
    }

    public function updatepengumuman() {
        $this->load->model('ppdb/model_tahunajaran');
        $arrdata = array(
                'id_tahun_ajaran' => $this->model_tahunajaran->getaktif()->id_tahun_ajaran, 
                'judul' => $this->input->post('judul'), 
                'tanggal_berlaku' => $this->input->post('tanggal_berlaku')
            );
        
        $config['upload_path']          = './assets/kesiswaan/pengumuman/';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 100000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('isi'))
        {
            
        }
        else
        {
            $arrdata['isi'] = $this->upload->data('file_name');
        }

        $this->load->model('ppdb/model_pengumuman_ppdb');
        $this->model_pengumuman_ppdb->update($arrdata, $this->uri->segment(5));
        $this->session->set_flashdata('pengumumanupdate', "<script>alert('Pengumuman Daftar Ulang PPDB berhasil diperbarui!');</script>");
        redirect('suppdb/admin/daftarulang_ppdb');
    }

    public function deletepengumuman()
    {
        $this->load->model('ppdb/model_pengumuman_ppdb');
        $this->model_pengumuman_ppdb->delete($this->uri->segment(5));
        redirect('suppdb/admin/daftarulang_ppdb');
    }

    public function eksportujian()
    {
        $this->load->model('ppdb/model_pendaftar_daftarulang_ppdb');
        $data['tabel_pendaftar_daftarulang_ppdb'] = $this->model_pendaftar_daftarulang_ppdb->getnamalulusppdb();
        
        $this->load->view('superadmin/ppdb/admin/view_excel_daftarulang_ppdb', $data);
    }


}
