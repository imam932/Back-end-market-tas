<?php
class Inventaris extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_inventaris');
	}


	function index ()
	{
		$data['judul'] = "Inventaris";
		$data ['inventaris'] = $this->Model_inventaris->get();
		$data['content'] = $this->load->view('inventaris/index', $data, TRUE);

		$this->load->view('template', $data);

	}

	public function insert()
	{
		$data['judul'] = "Inventaris";
		$data['content'] = $this->load->view('inventaris/new', $data, TRUE);

		$this->load->view('template', $data);
	}

	function save_insert()
	{
		if ($_POST) {
			$this->Model_inventaris->insert();
			redirect('Inventaris', 'refresh');
		}else {
			echo "<script type='text/javascript'> alert('Form Insert Error !!! Try Again') </script>";
			redirect('Inventaris/insert','refresh');
		}

	}

	function edit($id){
		$data['judul'] = "Inventaris";
		$data['inventaris'] = $this->Model_inventaris->getById($id);
		if ($_POST) {
			$this->Model_inventaris->update($id);
			redirect('Inventaris','refresh');
		}else {
			$data['content'] = $this->load->view('inventaris/edit', $data, TRUE);

			$this->load->view('template', $data);
		}
	}

	public function delete($id){
		$this->Model_inventaris->delete($id);
		redirect('Inventaris','refresh');
	}

	//------------Keuangan------------
	function lap_inventaris ()
	{
		$data['judul'] = "Laporan Inventaris";
		$data ['inventaris'] = $this->Model_inventaris->get();
		$data['content'] = $this->load->view('inventaris/lap_inventaris', $data, TRUE);

		$this->load->view('template', $data);

	}
}
?>
