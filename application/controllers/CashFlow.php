<?php
class CashFlow extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_cf');
	}


	function index ()
	{
		$data['judul'] = "Cash Flow";
		$data['active'] = 'active';
		$data['menu'] = 'keuangan';
		$data['menu2'] = 'cashflow';
		$data ['cashflow'] = $this->Model_cf->get(2018);
		$data['tahun'] = 2018;
		$data['content'] = $this->load->view('report/cf_view', $data, TRUE);
		$this->load->view('template', $data);
	}

	function viewYear ()
	{
		if ($_POST) {
			$Wyear = $this->input->post("th");
		}
		$data['judul'] = "Cash Flow";
		$data['active'] = 'active';
		$data['menu'] = 'keuangan';
		$data['menu2'] = 'cashflow';
		$data ['cashflow'] = $this->Model_cf->get($Wyear);
		$data['tahun'] = $Wyear;
		$data['content'] = $this->load->view('report/cf_view', $data, TRUE);

		$this->load->view('template', $data);
	}
}
?>
