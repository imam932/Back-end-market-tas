<?php
class PembelianBahanBaku extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_pembelian_bahan_baku');
	}


	function index ()
	{
		$data['judul'] = "Pembelian Bahan Baku";
		$data ['bahan_baku'] = $this->Model_pembelian_bahan_baku->get();
		$data['content'] = $this->load->view('bahan_baku/index', $data, TRUE);

		$this->load->view('template', $data);

	}

	public function insert()
	{
		$data['judul'] = "Pembelian Bahan Baku";
		$data['content'] = $this->load->view('bahan_baku/new', $data, TRUE);

		$this->load->view('template', $data);
	}

	function save_insert()
	{
		if ($_POST) {
			$this->Model_pembelian_bahan_baku->insert();
			redirect('PembelianBahanBaku', 'refresh');
		}else {
			echo "<script type='text/javascript'> alert('Form Insert Error !!! Try Again') </script>";
			redirect('PembelianBahanBaku/insert','refresh');
		}

	}

	function edit($id){
		$data['judul'] = "Pembelian Bahan Baku";
		$data['bahan_baku'] = $this->Model_pembelian_bahan_baku->getById($id);
		if ($_POST) {
			$this->Model_pembelian_bahan_baku->update($id);
			redirect('PembelianBahanBaku','refresh');
		}else {
			$data['content'] = $this->load->view('bahan_baku/edit', $data, TRUE);

			$this->load->view('template', $data);
		}
	}

	public function delete($id){
		$this->Model_pembelian_bahan_baku->delete($id);
		redirect('PembelianBahanBaku','refresh');
	}
}
?>
