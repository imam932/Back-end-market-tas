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
      // $user = $this->model_user->select_byid($result->id_user);

      $session_data = array(
        'id_user' => $result->id_user,
        'username' => $result->username,
				'nama_user' => $result->nama_user,
				'level'			=> $result->level
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
		$data_user		= array(
		'nama_user' 	=> $this->input->post('nama_user'),
		'no_hp'				=> $this->input->post('no_hp'),
		'jenis_kelamin'	=> $this->input->post('jenis_kelamin'),
		'alamat' 			=> $this->input->post('alamat'),
		'username' 		=> $this->input->post('username'),
		'password' 		=> $this->input->post('password'),
		'level' 		=> $this->input->post('level')
	);
		$this->db->insert('user', $data_user);
		redirect('login');

	}
}
