<?php
class Karyawan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_karyawan');
	}


	function index ()
	{
		$data['active'] = 'active';
		$data['menu'] = 'hrd';
		$data['menu2'] = 'karyawan';
		$data['judul'] = "Karyawan";
		$data ['karyawan'] = $this->Model_karyawan->get();
		$data['content'] = $this->load->view('karyawan/index', $data, TRUE);

		$this->load->view('template', $data);

	}

	public function insert()
	{
		$data['active'] = 'active';
		$data['menu'] = 'hrd';
		$data['menu2'] = 'karyawan';
		$data['judul'] = "Karyawan";
		$data['content'] = $this->load->view('karyawan/new', $data, TRUE);

		$this->load->view('template', $data);
	}

	function save_insert()
	{
		if ($_POST) {
			$this->Model_karyawan->insert();
			redirect('Karyawan', 'refresh');
		}else {
			echo "<script type='text/javascript'> alert('Form Insert Error !!! Try Again') </script>";
			redirect('Karyawan/insert','refresh');
		}

	}

	function edit($id)
	{
		$data['active'] = 'active';
		$data['menu'] = 'hrd';
		$data['menu2'] = 'karyawan';
		$data['judul'] = "Karyawan";
		$data['karyawan'] = $this->Model_karyawan->getById($id);
		if ($_POST) {
			$this->Model_karyawan->update($id);
			redirect('Karyawan','refresh');
		}else {
			$data['content'] = $this->load->view('karyawan/edit', $data, TRUE);

			$this->load->view('template', $data);
		}
	}

	public function delete($id){
		$this->Model_karyawan->delete($id);
		redirect('Karyawan','refresh');
	}
}
?>
