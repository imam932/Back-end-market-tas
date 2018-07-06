<?php
class Modal extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_modal');
	}


	function index ()
	{
		$data['active'] = 'active';
		$data['menu'] = 'keuangan';
		$data['menu2'] = 'modal';
		$data['judul'] = "Modal Usaha";
		$data ['modal'] = $this->Model_modal->get();
		$data['content'] = $this->load->view('modal/index', $data, TRUE);

		$this->load->view('template', $data);

	}

	public function insert()
	{
		$data['judul'] = "Modal Usaha";
		$data['content'] = $this->load->view('modal/new', $data, TRUE);

		$this->load->view('template', $data);
	}

	function save_insert()
	{
		if ($_POST) {
			$this->Model_modal->insert();
			redirect('Modal', 'refresh');
		}else {
			echo "<script type='text/javascript'> alert('Form Insert Error !!! Try Again') </script>";
			redirect('Modal/insert','refresh');
		}

	}

	function edit($id){
		$data['judul'] = "Modal Usaha";
		$data['modal'] = $this->Model_modal->getById($id);
		if ($_POST) {
			$this->Model_modal->update($id);
			redirect('Modal','refresh');
		}else {
			$data['content'] = $this->load->view('modal/edit', $data, TRUE);

			$this->load->view('template', $data);
		}
	}

	public function delete($id){
		$this->Model_modal->delete($id);
		redirect('Modal','refresh');
	}
}
?>
