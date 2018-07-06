<?php
class Pelanggan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Pelanggan');
	}


	function index ()
	{
		$data['judul'] = "Pelanggan";
		$data ['pelanggan'] = $this->Model_pelanggan->get();
		$data['content'] = $this->load->view('pelanggan/index', $data, TRUE);

		$this->load->view('template', $data);

	}

	public function insert()
	{
		$data['judul'] = "Pelanggan";
		$data['content'] = $this->load->view('pelanggan/new', $data, TRUE);

		$this->load->view('template', $data);
	}

	function save_insert()
	{
		if ($_POST) {
			$this->Model_pelanggan->insert();
			redirect('Pelanggan', 'refresh');
		}else {
			echo "<script type='text/javascript'> alert('Form Insert Error !!! Try Again') </script>";
			redirect('Pelanggan/insert','refresh');
		}

	}

	function edit($id){
		$data['judul'] = "Pelanggan";
		$data['pelanggan'] = $this->Model_pelanggan->getById($id);
		if ($_POST) {
			$this->Model_pelanggan->update($id);
			redirect('Pelanggan','refresh');
		}else {
			$data['content'] = $this->load->view('pelanggan/edit', $data, TRUE);

			$this->load->view('template', $data);
		}
	}

	public function delete($id){
		$this->Model_pelanggan->delete($id);
		redirect('Pelanggan','refresh');
	}
}
?>
