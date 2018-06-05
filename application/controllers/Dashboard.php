<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('logged_in')) {
			redirect('/');
		}
		$this->load->model(array('Model_user'));
	}

	public function index()
	{
		$data['user'] = $this->Model_user->get();
		$data['content'] = $this->load->view('home', $data, TRUE);
		
		$this->load->view('template', $data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
