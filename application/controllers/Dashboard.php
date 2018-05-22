<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('logged_in')) {
			redirect('/');
		}
	}

	public function index()
	{
		$data['content'] = $this->load->view('home', array(), TRUE);
		// print_r($this->session->userdata('logged_in'));
		$this->load->view('template', $data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
