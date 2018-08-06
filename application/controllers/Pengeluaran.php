<?php
class Pengeluaran extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_pengeluaran');
	}


	function index ()
	{
		$data['active'] = 'active';
		$data['menu'] = 'keuangan';
		$data['menu2'] = 'pengeluaran';
		$data['judul'] = "Pengeluaran";
		$data ['pengeluaran'] = $this->Model_pengeluaran->get();
		$data['content'] = $this->load->view('pengeluaran/index', $data, TRUE);

		$this->load->view('template', $data);

	}

	public function insert()
	{
		$data['active'] = 'active';
		$data['menu'] = 'keuangan';
		$data['menu2'] = 'pengeluaran';
		$data['judul'] = "Pengeluaran";
		$data['content'] = $this->load->view('pengeluaran/new', $data, TRUE);

		$this->load->view('template', $data);
	}

	function save_insert()
	{
		if ($_POST) {
			$this->Model_pengeluaran->insert();
			redirect('Pengeluaran', 'refresh');
		}else {
			echo "<script type='text/javascript'> alert('Form Insert Error !!! Try Again') </script>";
			redirect('Pengeluaran/insert','refresh');
		}

	}

	function edit($id){
		$data['judul'] = "Pengeluaran";
		$data['pengeluaran'] = $this->Model_pengeluaran->getById($id);
		if ($_POST) {
			$this->Model_pengeluaran->update($id);
			redirect('Pengeluaran','refresh');
		}else {
			$data['content'] = $this->load->view('pengeluaran/edit', $data, TRUE);

			$this->load->view('template', $data);
		}
	}

	public function delete($id){
		$this->Model_pengeluaran->delete($id);
		redirect('Pengeluaran','refresh');
	}
}
?>
