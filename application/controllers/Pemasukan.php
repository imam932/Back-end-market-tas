<?php
class Pemasukan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_transaksi');
	}


	function index ()
	{
		$data['judul'] = "Pemasukan";
		$data ['pemasukan'] = $this->Model_transaksi->get();
		$data['content'] = $this->load->view('pemasukan/index', $data, TRUE);

		$this->load->view('template', $data);

	}
}
?>
