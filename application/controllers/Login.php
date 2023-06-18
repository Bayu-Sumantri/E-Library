<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Global_model');
    }
    public function index()
    {
        $this->form_validation->set_rules('email_user', 'email_user', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        // $this->form_validation->set_rules('Password', 'Password', 'trim|required|min_length[3]', ['min_length' => 'Password Terlalu Sedikit !']);
        // $this->form_validation->set_rules('KdRuangan', 'KdRuangan', 'required');

        if ($this->form_validation->run() == false) {
            $data = array(
                'title'         => 'E-Library | Login',


                // 'content'         => 'user_admin/admin',
                // 'list_ruangan'  => $this->Global_model->selectAllruangan()
            );
            // $this->load->view('user_admin/admin', $data, FALSE);
            $this->load->view('login/login_ngab', $data);

        } else {
            $email_user    = $this->input->post('email_user');
            $password    = sha1($this->input->post('password'));
            // Proses login
            // echo $email_user;
            // echo $password;
            // die;
            $this->simple_login->login($email_user, $password);
        }
    }
    public function register()
    {

        $this->load->view('login/register-v2');

    }
    public function my_profile()
    {
        $data = array(
            'title'                 => 'E-Library - MY PROFILE',
            'content'               => 'user/myprofile',
            'user'                  => $this->Global_model->selectidsimplemaster_user($this->session->userdata('id_user')),
            'list'                  => $this->Global_model->alluser(),
            'profile'               => $this->Global_model->selectidmaster_user(array('id_user' => $this->session->userdata('id_user'))),
            // 'list'                  => $this->Global_model->asd(),
            'leveluser'             => $this->Global_model->selectallmaster_leveluser(),
        );
        /*  print_r($data['nosurat']);
        die; */
        $this->load->view('layout/wrapper', $data, FALSE);
    }
    public function view_user()
    {
        $data = array(
            'title'                 => 'SIMAIN - USER',
            'content'               => 'user_admin/admin',
            // 'content'               => 'user/index',
            'list'                  => $this->Global_model->alluser(),
            'user'                  => $this->Global_model->selectidsimplemaster_user($this->session->userdata('id_user')),
            // 'leveluser'             => $this->Global_model->selectallmaster_leveluser(),
        );
        /*  print_r($data['nosurat']);
        die; */
        $this->load->view('layout_user/wrapper', $data, FALSE);
    }
    public function add_user()
    {
        $post = $this->input->post();
        if (empty($_FILES['pic_user']['name'])) {
            $pic_user                   = '';
        } else {

            $namdok = $post['nama_user'];
            $config['upload_path']       = 'assets/eNnoCuy/foto';
            // $config['upload_path']       = 'puy/images/user';
            $config['allowed_types']     = 'png|jpg|jpeg';
            $config['max_size']          = '100240';
            $config['file_name']         = $namdok;

            $this->upload->initialize($config);
            if (!$this->upload->do_upload('pic_user')) {
                $error                  = '<div class="alert alert-danger" role="alert">Gagal Menyimpan Data !!! File Harus dengan format png,jpg,jpeg. Ukuran maksimal hanya 100 MB <br> Silahkan Periksa Apakah Nama Lengkap Memakai Titik (.) ?</div>';
                $this->session->set_flashdata('danger', $error);
                redirect('login/view_user');
            } else {
                // kode unik nama dokumen
                $data_file              = $this->upload->data();
                $pic_user            = $data_file['file_name'];
            }
        }

        $data = array(
            // 'id_replika'    => $this->input->post('id_replika'),
            'id_level'          => 2,
            'nama_user'         => $this->input->post('nama_user'),
            'email_user'        => $this->input->post('email_user'),
            'username'          => $this->input->post('username'),
            'password'          => sha1($this->input->post('password')),
            'status_user'        => 1,
            'createdate'      => date('Y-m-d H:i:s'),
        );
    //     print_r($_POST);
    // die();
        if ($pic_user) {
            $data['pic_user']     = $pic_user;
            // unlink('load/ok_dok/foto'.$namapic_userold);
        }
        $this->db->insert('tblogin1', $data);
        // $this->User_model->insertuser($data);
        $this->session->set_flashdata('oke', 'Data Berhasil Di Simpan');
        redirect('login/'); 
        // stop disini
    }


    public function add_user_admin()
    {
        $post = $this->input->post();
        if (empty($_FILES['pic_user']['name'])) {
            $pic_user                   = '';
        } else {

            $namdok = $post['nama_user'];
            $config['upload_path']       = 'assets/eNnoCuy/foto';
            // $config['upload_path']       = 'puy/images/user';
            $config['allowed_types']     = 'png|jpg|jpeg';
            $config['max_size']          = '100240';
            $config['file_name']         = $namdok;

            $this->upload->initialize($config);
            if (!$this->upload->do_upload('pic_user')) {
                $error                  = '<div class="alert alert-danger" role="alert">Gagal Menyimpan Data !!! File Harus dengan format png,jpg,jpeg. Ukuran maksimal hanya 100 MB <br> Silahkan Periksa Apakah Nama Lengkap Memakai Titik (.) ?</div>';
                $this->session->set_flashdata('danger', $error);
                redirect('login/view_user');
            } else {
                // kode unik nama dokumen
                $data_file              = $this->upload->data();
                $pic_user            = $data_file['file_name'];
            }
        }

        $data = array(
            // 'id_replika'    => $this->input->post('id_replika'),
            'id_level'          => $this->input->post('id_level'),
            'nama_user'         => $this->input->post('nama_user'),
            'email_user'        => $this->input->post('email_user'),
            'username'          => $this->input->post('username'),
            'password'          => sha1($this->input->post('password')),
            'status_user'       => $this->input->post('status_user'),
            'createdate'      => date('Y-m-d H:i:s'),
        );
    //     print_r($_POST);
    // die();
        if ($pic_user) {
            $data['pic_user']     = $pic_user;
            // unlink('load/ok_dok/foto'.$namapic_userold);
        }
        $this->db->insert('tblogin1', $data);
        // $this->User_model->insertuser($data);
        $this->session->set_flashdata('oke', 'Data Berhasil Di Simpan');
        redirect('Dash/list_account'); 
        // stop disini
    }


    public function edit_user()
    {
        $post = $this->input->post();
        if (empty($_FILES['pic_user']['name'])) {
            $pic_user                   = '';
        } else {

            $namdok = $post['nama_user'];
            $config['upload_path']       = 'assets/eNnoCuy/foto';
            // $config['upload_path']       = 'puy/images/user';
            $config['allowed_types']     = 'png|jpg|jpeg';
            $config['max_size']          = '100240';
            $config['file_name']         = $namdok;

            $this->upload->initialize($config);
            if (!$this->upload->do_upload('pic_user')) {
                $error                  = '<div class="alert alert-danger" role="alert">Gagal Menyimpan Data !!! File Harus dengan format png,jpg,jpeg. Ukuran maksimal hanya 100 MB <br> Silahkan Periksa Apakah Nama Lengkap Memakai Titik (.) ?</div>';
                $this->session->set_flashdata('danger', $error);
                redirect('login/view_user');
            } else {
                // kode unik nama dokumen
                $data_file              = $this->upload->data();
                $pic_user            = $data_file['file_name'];
            }
        }

        $id_user          = $this->input->post('id_user');
        $data = array(
            // 'id_replika'    => $this->input->post('id_replika'),
            // 'id_level'          => $this->input->post('id_level'),
            'nama_user'         => $this->input->post('nama_user'),
            'email_user'        => $this->input->post('email_user'),
            // 'username'          => $this->input->post('username'),
            'modifydate'      => date('Y-m-d H:i:s'),
        );
        if ($pic_user) {
            $data['pic_user']     = $pic_user;
            // unlink('load/ok_dok/foto'.$namapic_userold);
        }
        if ($this->input->post('password')) {
            $data['password']     = sha1($this->input->post('password'));
            // unlink('load/ok_dok/foto'.$namapic_userold);
        }
        // if ($this->input->post('id_level')) {
        //     $data['id_level']     = $this->input->post('id_level');
        //     // unlink('load/ok_dok/foto'.$namapic_userold);
        // }
        print_r($data);
        // echo  "$id_user";
        // echo '<br>';
        // print_r($_POST);
        // die;
        $this->Global_model->updatemaster_user($id_user, $data);
        $data_session = array(
                'id_user'       => $id_user,
                'nama_lengkap'      => $this->input->post('nama_user'),
                'email'         => $this->input->post('email_user'),
            );

        //print_r($data_session);
        //print_r($_SESSION);
        

            // die();

            $this->session->set_userdata($data_session);

        // $this->User_model->insertuser($data);
        $this->session->set_flashdata('oke', 'Data Berhasil Di Simpan');
        redirect('login/view_user');
    }



    public function edit_user_admin()
    {
        $post = $this->input->post();
        if (empty($_FILES['pic_user']['name'])) {
            $pic_user                   = '';
        } else {

            $namdok = $post['nama_user'];
            $config['upload_path']       = 'assets/eNnoCuy/foto';
            $config['allowed_types']     = 'png|jpg|jpeg';
            $config['max_size']          = '100240';
            $config['file_name']         = $namdok;

            $this->upload->initialize($config);
            if (!$this->upload->do_upload('pic_user')) {
                $error                  = '<div class="alert alert-danger" role="alert">Gagal Menyimpan Data !!! File Harus dengan format png,jpg,jpeg. Ukuran maksimal hanya 100 MB <br> Silahkan Periksa Apakah Nama Lengkap Memakai Titik (.) ?</div>';
                $this->session->set_flashdata('danger', $error);
                redirect('login/view_user');
            } else {
                // kode unik nama dokumen
                $data_file              = $this->upload->data();
                $pic_user            = $data_file['file_name'];
            }
        }

        $id_user          = $this->input->post('id_user');
        $data = array(
            // 'id_replika'    => $this->input->post('id_replika'),
            'id_level'          => $this->input->post('id_level'),
            'nama_user'         => $this->input->post('nama_user'),
            'email_user'        => $this->input->post('email_user'),
            'modifydate'      => date('Y-m-d H:i:s'),
        );
        if ($pic_user) {
            $data['pic_user']     = $pic_user;
            // unlink('load/ok_dok/foto'.$namapic_userold);
        }
        if ($this->input->post('password')) {
            $data['password']     = sha1($this->input->post('password'));
            // unlink('load/ok_dok/foto'.$namapic_userold);
        }
        // if ($this->input->post('id_level')) {
        //     $data['id_level']     = $this->input->post('id_level');
        //     // unlink('load/ok_dok/foto'.$namapic_userold);
        // }
        // print_r($data);
        // echo '<br>';
        // print_r($_POST);
        // die;
        $this->Global_model->updatemaster_user($id_user, $data);
        // $this->User_model->insertuser($data);
        $this->session->set_flashdata('oke', 'Data Berhasil Di Simpan');
        redirect('Dash/edit_account_admin/'.$id_user);

    }


    public function logout()
    {
        $this->simple_login->logout();
    }
}

/* End of file Login.php */
