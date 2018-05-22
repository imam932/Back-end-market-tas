<?php
class Produk extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_produk');
	}


	function index ()
	{
		$data['judul'] = "Produk";
		$data ['produk'] = $this->Model_produk->get();
		$data['content'] = $this->load->view('produk/index', $data, TRUE);

		$this->load->view('template', $data);

	}

	public function insert()
	{
		$data['judul'] = "Produk";
		$data['content'] = $this->load->view('produk/new', $data, TRUE);

		$this->load->view('template', $data);
	}

	function save_insert()
	{
		if ($_POST) {
			$this->Model_produk->insert();
			redirect('Produk', 'refresh');
		}else {
			echo "<script type='text/javascript'> alert('Form Insert Error !!! Try Again') </script>";
			redirect('Produk/insert','refresh');
		}

	}

	function edit($id){
		$data['judul'] = "Produk";
		$data['produk'] = $this->Model_produk->getById($id);
		if ($_POST) {
			$this->Model_produk->update($id);
			redirect('Produk','refresh');
		}else {
			$data['content'] = $this->load->view('produk/edit', $data, TRUE);

			$this->load->view('template', $data);
		}
	}

	public function delete($id){
		$this->Model_produk->delete($id);
		redirect('Produk','refresh');
	}
}
?>
