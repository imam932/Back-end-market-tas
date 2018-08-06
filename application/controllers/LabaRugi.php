<?php
class LabaRugi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_lr');
	}


	function index ()
	{
		$data['judul'] = "Laba Rugi";
		$data['active'] = 'active';
		$data['menu'] = 'keuangan';
		$data['menu2'] = 'labarugi';
		$data ['labarugi'] = $this->Model_lr->get(2018);
		$data ['labarugi2'] = $this->Model_lr->get2(2018);
		$data['tahun'] = 2018;
		$data['content'] = $this->load->view('report/lr_view', $data, TRUE);
		$this->load->view('template', $data);
	}

	function viewYear ()
	{
		if ($_POST) {
			$Wyear = $this->input->post("th");
		}
		$data['judul'] = "Laba Rugi";
		$data['active'] = 'active';
		$data['menu'] = 'keuangan';
		$data['menu2'] = 'labarugi';
		$data ['labarugi'] = $this->Model_lr->get($Wyear);
		$data ['labarugi2'] = $this->Model_lr->get2($Wyear);
		$data['tahun'] = $Wyear;
		$data['content'] = $this->load->view('report/lr_view', $data, TRUE);

		$this->load->view('template', $data);
	}
}
?>
