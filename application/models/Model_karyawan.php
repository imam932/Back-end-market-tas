<?php
class Model_karyawan extends CI_Model
{

	function get()
	{
		$karyawan = $this->db->get('karyawan');
		return $karyawan->result();
	}

	public function getById($id){
    $this->db->where('id_karyawan', $id);
    $query = $this->db->get('karyawan');
    return $query->result();
  }

	public function insert()
	{
		$data	= array(
			'nama_karyawan'		=> $this->input->post('nama_karyawan'),
			'bagian'					=> $this->input->post('bagian'),
			'telp'			 			=> $this->input->post('telp')
		);
		$this->db->insert('karyawan', $data);
	}

	function update($id){
		$data	= array(
			'nama_karyawan' 	=> $this->input->post('nama_karyawan'),
			'bagian'					=> $this->input->post('bagian'),
			'telp'			 			=> $this->input->post('telp')
		);
		$this->db->where('id_karyawan', $id);
		$this->db->update('karyawan', $data);
	}

	public function delete($id){
		$this->db->where('id_karyawan', $id);
		$this->db->delete('karyawan');
	}
}



?>
