<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_user');
	}

	public function index()
	{
		$this->load->view('login');
	}


	public function cekLogin(){
		$result = $this->model_user->login();

    if ($result != FALSE) {

      $session_data = array(
        'id_user' 	=> $result->id_user,
        'email' 		=> $result->email,
				'nama_user' => $result->nama_user,
				'level'			=> $result->level,
				'code'			=> $result->code
      );

      $this->session->set_userdata('logged_in', $session_data);

      redirect('Dashboard');
    }else {
				redirect('/','refresh');
    }
	}

	public function process_logout(){
		$this->session->unset_userdata('logged_in');
		redirect('/');
	}

	function register (){
		$this->load->view('register');
	}

	function register_simpan(){
	$this->Model_user->insert();
		redirect('login');
	}
}
