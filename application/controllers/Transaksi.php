<?php
class Transaksi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_transaksi');
	}


	function cashFlow()
	{
		$data['judul'] = "Pemasukan";
		$data['cashflow'] = $this->Model_transaksi->cash_flow_get();
		// $data['content'] = $this->load->view('pemasukan/index', $data, TRUE);
var_dump($data['cashflow']);
		$this->load->view('template', $data);

	}
}
?>
