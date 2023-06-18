<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('login_ngab');
	}
     public function Register()
    {
        $this->load->view('register');
    }
}
