<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class input_all extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Rumah_sakit');
	}

	public function tambah_jurnal()
	{
		$post = $this->input->post();
		if (empty($_FILES['sampul']['name'])) {
			$pic_user                   = '';
		} else {

			$sampul = $post['penulis'];
			$config['upload_path']       = 'assets/eNnoCuy/foto';
			$config['allowed_types']     = 'png|jpg|jpeg';
			// $config['max_width']   		 = '1920';
			// $config['max_height']  		 = '1080';	
			$config['max_size']          = '100240';
			$config['file_name']         = $sampul;

			$this->upload->initialize($config);
			if (!$this->upload->do_upload('sampul')) {
				$error                   = '<div class="alert alert-danger" role="alert">Gagal Menyimpan Data !!! File Harus dengan format png,jpg,jpeg. Ukuran maksimal hanya 100 MB <br> Silahkan Periksa Apakah Nama Lengkap Memakai Titik (.) ?</div>';
				$this->session->set_flashdata('danger', $error);
				redirect('Dash/input');
			} else {
                // kode unik nama dokumen
				$data_file              = $this->upload->data();
				$pic_user               = $data_file['file_name'];
			}
		}

		$data = array(
			'judul'                        =>  $this->input->post('judul'),
			'penulis'                      =>  $this->session->userdata('username'),
			'tahun_rilis'                  =>  $this->input->post('tahun_rilis'),
			'genre'                        =>  implode(', <br>', $this->input->post('genre')),
			'createdate'                   =>  date('Y-m-d H:i:s'),
			'isi_buku'                     =>  $this->input->post('isi_buku')
		);

		if ($pic_user) {
			$data['sampul']     = $pic_user;
		}
		$this->db->insert('jurnal', $data);
		redirect('Dash/input');
	}

	public function edit_jurnal()
	{
		$post = $this->input->post();
		if (empty($_FILES['sampul']['name'])) {
			$pic_user                   = '';
		} else {

			$sampul = $post['penulis'];
			$config['upload_path']       = 'assets/eNnoCuy/foto';
			$config['allowed_types']     = 'png|jpg|jpeg';
			$config['max_size']          = '100240';
			$config['file_name']         = $sampul;

			$this->upload->initialize($config);
			if (!$this->upload->do_upload('sampul')) {
				$error                   = '<div class="alert alert-danger" role="alert">Gagal Menyimpan Data !!! File Harus dengan format png,jpg,jpeg. Ukuran maksimal hanya 100 MB <br> Silahkan Periksa Apakah Nama Lengkap Memakai Titik (.) ?</div>';
				$this->session->set_flashdata('danger', $error);
				redirect('Dash/input');
			} else {
                // kode unik nama dokumen
				$data_file              = $this->upload->data();
				$pic_user               = $data_file['file_name'];
			}
		}
        $id_buku = $this->input->post('id_buku');

		$data = array(
			'genre'                        =>  implode(', <br>', $this->input->post('genre')),
			'modifydate'                   =>  date('Y-m-d H:i:s'),
			'isi_buku'                     =>  $this->input->post('isi_buku')
		);

		if ($pic_user) {
			$data['sampul']     = $pic_user;
		}
		$this->db->where('id_buku', $id_buku);
		$this->db->update('jurnal', $data);
		redirect('Dash/input');
	}
	
}