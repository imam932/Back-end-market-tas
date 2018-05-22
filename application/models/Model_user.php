<?php
class Model_user extends CI_Model
{

	function get()
	{
		$user = $this->db->get('user');
		return $user->result();
	}

	public function getById($id){
    $this->db->where('id_user', $id);
    $query = $this->db->get('user');
    return $query->result();
  }

	public function insert()
	{
		$data	= array(
			'nama_user' 	=> $this->input->post('nama_user'),
			'no_hp'				=> $this->input->post('no_hp'),
			'jenis_kelamin'	=> $this->input->post('jenis_kelamin'),
			'alamat' 			=> $this->input->post('alamat'),
			'username' 		=> $this->input->post('username'),
			'password' 		=> $this->input->post('password'),
			'level' 		=> $this->input->post('level')
		);
		$this->db->insert('user', $data);
	}

	function update($id){
		$data	= array(
			'nama_user' 	=> $this->input->post('nama_user'),
			'no_hp'				=> $this->input->post('no_hp'),
			'jenis_kelamin'	=> $this->input->post('jenis_kelamin'),
			'alamat' 			=> $this->input->post('alamat'),
			'username' 		=> $this->input->post('username'),
			'password' 		=> $this->input->post('password'),
			'level' 		=> $this->input->post('level')
		);
		$this->db->where('id_user', $id);
		$this->db->update('user', $data);
	}

	public function delete($id){
		$this->db->where('id_user', $id);
		$this->db->delete('user');
	}
}



?>
