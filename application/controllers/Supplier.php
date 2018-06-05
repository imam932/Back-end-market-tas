<?php
class Supplier extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_supplier');
	}


	function index ()
	{
		$data['judul'] = "Supplier";
		$data ['supplier'] = $this->Model_supplier->get();
		$data['content'] = $this->load->view('supplier/index', $data, TRUE);

		$this->load->view('template', $data);

	}

	public function insert()
	{
		$data['judul'] = "Supplier";
		$data['content'] = $this->load->view('supplier/new', $data, TRUE);

		$this->load->view('template', $data);
	}

	function save_insert()
	{
		if ($_POST) {
			$this->Model_supplier->insert();
			redirect('Supplier', 'refresh');
		}else {
			echo "<script type='text/javascript'> alert('Form Insert Error !!! Try Again') </script>";
			redirect('Supplier/insert','refresh');
		}

	}

	function edit($id){
		$data['judul'] = "Supplier";
		$data['supplier'] = $this->Model_supplier->getById($id);
		if ($_POST) {
			$this->Model_supplier->update($id);
			redirect('Supplier','refresh');
		}else {
			$data['content'] = $this->load->view('supplier/edit', $data, TRUE);

			$this->load->view('template', $data);
		}
	}

	public function delete($id){
		$this->Model_supplier->delete($id);
		redirect('Supplier','refresh');
	}
}
?>
