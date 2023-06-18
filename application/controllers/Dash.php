<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dash extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Epide');
        $this->load->model('Rumah_sakit');
    }

    public function index()
    {
        $data = array(
            'title'                 => 'E-Library',
            'user'                  => $this->Global_model->selectidsimplemaster_user($this->session->userdata('id_user')),
            'content'               => 'home/home',
        );
        $this->load->view('layout_home/wrapper', $data);
    }
    public function admin($id_user = NULL)
    {
        $data = array(
            'title'                 => 'Account',
            'user'                  => $this->Global_model->selectidsimplemaster_user($this->session->userdata('id_user')),
            'content'               => 'user_admin/admin',
            'rsk'                   => $this->Rumah_sakit->cari_data($id_user)
        );
        $this->load->view('layout_user/wrapper', $data);
    }
    public function pilih_buku()
    {
        $data = array(
            'title'                 => 'Pilih Buku',
            'user'                  => $this->Global_model->selectidsimplemaster_user($this->session->userdata('id_user')),

            'content'               => 'home/pilih_buku',
            // 'search'                   => $this->Rumah_sakit->search($keyword)
        );
        $this->load->view('layout_home/wrapper', $data);
    }
    
    public function login_regis()
    {
        $data = array(
            'title'                 => 'Sign in And Register',
        );
        $this->load->view('login/login_ngab', $data);
    }
    public function input()
    {
        $data = array(
            'title'                 => 'Tambah',
            'user'                  => $this->Global_model->selectidsimplemaster_user($this->session->userdata('id_user')),
            'content'               => 'user/list_buku',
            // 'rsk'                   => $this->Rumah_sakit->display()
        );
        $this->load->view('layout_user/wrapper', $data);
    }
    // public function live_prievew($id_buku)
    // {
    //     $data = array(
    //         'title'                 => 'Display',
    //         'content'               => 'user/live_prievew',
    //         'rsk'                   => $this->Rumah_sakit->live_prievew($id_buku)
    //     );

    //     $this->load->view('layout_user/wrapper', $data);
    // }
    public function tambah_buku()
    {
        $data = array(
            'title'                 => 'Tambah Buku',
            'user'                  => $this->Global_model->selectidsimplemaster_user($this->session->userdata('id_user')),
            'content'               => 'user/inputan',
            'rsk'                   => $this->Rumah_sakit->display()
        );
        $this->load->view('layout_user/wrapper', $data);
    }
    public function list_account()
    {
        $data = array(
            'title'                 => 'List Account',
            'user'                  => $this->Global_model->selectidsimplemaster_user($this->session->userdata('id_user')),
            'content'               => 'user_admin/list_account',   
        );
        $this->load->view('layout_user/wrapper', $data);
    }
    public function hapus_account_admin($id_user)
    {
        $where = array('id_user' => $id_user);
        $this->Rumah_sakit->hapus_account_admin($where, 'tblogin1');

        redirect('forms/display');
    }

    public function edit_account_admin($id_user)
    {
        $data = array(
            'title'                 => 'Edit Account Admin',
            'user'                  => $this->Global_model->selectidsimplemaster_user($id_user),
            'content'               => 'user_admin/edit_account_admin',   
        );
        $this->load->view('layout_user/wrapper', $data);
    }

    public function edit_buku($id_buku)
    {
        $data = array(
            'title'                 => 'Edit Buku',
            // 'user'                  => $this->Global_model->selectidsimplemaster_user($id_user),
            'content'               => 'user/edit_buku',
            'rsk'                   => $this->Rumah_sakit->cari_data1($id_buku)
        );
        $this->load->view('layout_user/wrapper', $data);
    }

    public function lihat_buku($id_buku)
    {
        $data = array(
            'title'                 => 'Lihat Buku',
            'user'                  => $this->Global_model->selectidsimplemaster_user($this->session->userdata('id_user')),
            'content'               => 'home/lihat_buku',
            'buku'                  => $this->Rumah_sakit->cari_data1($id_buku)
        );
        $this->load->view('layout_home/wrapper', $data);
    }
}
