<?php
class Bahan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_bahan');
	}


	function index ()
	{
		$data['judul'] = "Bahan";
		$data ['bahan'] = $this->Model_bahan->get();
		$data['content'] = $this->load->view('bahan/index', $data, TRUE);

		$this->load->view('template', $data);

	}

	public function insert()
	{
		$data['judul'] = "Bahan";
		$data['content'] = $this->load->view('bahan/new', $data, TRUE);

		$this->load->view('template', $data);
	}

	function save_insert()
	{
		if ($_POST) {
			$this->Model_bahan->insert();
			redirect('Bahan', 'refresh');
		}else {
			echo "<script type='text/javascript'> alert('Form Insert Error !!! Try Again') </script>";
			redirect('Bahan/insert','refresh');
		}

	}

	function edit($id){
		$data['judul'] = "Bahan";
		$data['bahan'] = $this->Model_bahan->getById($id);
		if ($_POST) {
			$this->Model_bahan->update($id);
			redirect('Bahan','refresh');
		}else {
			$data['content'] = $this->load->view('bahan/edit', $data, TRUE);

			$this->load->view('template', $data);
		}
	}

	public function delete($id){
		$this->Model_bahan->delete($id);
		redirect('Bahan','refresh');
	}
}
?>
