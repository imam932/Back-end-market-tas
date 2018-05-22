<?php
class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_user');
	}


	function index ()
	{
		$data['judul'] = "User";
		$data ['user'] = $this->Model_user->get();
		$data['content'] = $this->load->view('user/index', $data, TRUE);

		$this->load->view('template', $data);

	}

	public function insert()
	{
		$data['judul'] = "User";
		$data['content'] = $this->load->view('user/new', $data, TRUE);

		$this->load->view('template', $data);
	}

	function save_insert()
	{
		if ($_POST) {
			$this->Model_user->insert();
			redirect('User', 'refresh');
		}else {
			echo "<script type='text/javascript'> alert('Form Insert Error !!! Try Again') </script>";
			redirect('User/insert','refresh');
		}

	}

	function edit($id){
		$data['judul'] = "User";
		$data['user'] = $this->Model_user->getById($id);
		if ($_POST) {
			$this->Model_user->update($id);
			redirect('User','refresh');
		}else {
			$data['content'] = $this->load->view('user/edit', $data, TRUE);

			$this->load->view('template', $data);
		}
	}

	public function delete($id){
		$this->Model_user->delete($id);
		redirect('User','refresh');
	}
}
?>
