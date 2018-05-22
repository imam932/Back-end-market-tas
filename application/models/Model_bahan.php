<?php
class Model_bahan extends CI_Model
{

	function get()
	{
		$bahan = $this->db->get('bahan');
		return $bahan->result();
	}

	public function getById($id){
    $this->db->where('id_bahan', $id);
    $query = $this->db->get('bahan');
    return $query->result();
  }

	public function insert()
	{
		$data	= array(
			'nama_bahan' 		=> $this->input->post('nama_bahan'),
			'jenis'					=> $this->input->post('jenis'),
			'jumlah'				=> $this->input->post('jumlah'),
			'warna' 				=> $this->input->post('warna'),
			'satuan' 				=> $this->input->post('satuan'),
			'harga'			 		=> $this->input->post('harga')
		);
		$this->db->insert('bahan', $data);
	}

	function update($id){
		$data	= array(
			'nama_bahan' 		=> $this->input->post('nama_bahan'),
			'jenis'					=> $this->input->post('jenis'),
			'jumlah'				=> $this->input->post('jumlah'),
			'warna' 				=> $this->input->post('warna'),
			'satuan' 				=> $this->input->post('satuan'),
			'harga'			 		=> $this->input->post('harga')
		);
		$this->db->where('id_bahan', $id);
		$this->db->update('bahan', $data);
	}

	public function delete($id){
		$this->db->where('id_bahan', $id);
		$this->db->delete('bahan');
	}
}



?>
