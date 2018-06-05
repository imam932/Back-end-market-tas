<?php
class Absensi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_absensi');
	}


	function index ()
	{
		$data['judul'] = "Absensi";
		$data ['absensi'] = $this->Model_absensi->get();
		$data['content'] = $this->load->view('absensi/index', $data, TRUE);

		$this->load->view('template', $data);
	}

	public function insert()
	{
		$data['judul'] = "Absensi";
		$data['nama'] = $this->session->userdata('logged_in')['nama_user'];

		$data['content'] = $this->load->view('absensi/new', $data, TRUE);
		$this->load->view('template', $data);
	}

	function save_insert()
	{
		// absen di ambil dari hari/tgl sekarang
		$code = $this->session->userdata('logged_in')['code'];
		$id_user = $this->session->userdata('logged_in')['id_user'];
		// cek jika user sudah absen / belum
		$result = $this->Model_absensi->cek_absen($id_user);
		// jika user belum absen
		if ($result == FALSE) {
			// jika user belum absen proses di lanjutkan
			if ($_POST) {
				$this->Model_absensi->insert($code, $id_user);
				echo "<script type='text/javascript'> alert('Absensi Success <br><hr><br> Selamat Beraktivitas :)') </script>";
				redirect('Dashboard', 'refresh');
			}else {
				echo "<script type='text/javascript'> alert('Form Insert Error !!! Try Again') </script>";
				redirect('Absensi/insert','refresh');
			}
		}else {
			echo "<script type='text/javascript'> alert('Anda Sudah Absen !!!') </script>";
			redirect('Dashboard', 'refresh');
		}

	}

	function kehadiran(){
			$data['judul'] = "Absensi kehadiran";
			$data['kehadiran'] = $this->Model_absensi->get_absen();
			$data['content'] = $this->load->view('absensi/kehadiran', $data, TRUE);
			$this->load->view('template', $data);
	}

}
?>
