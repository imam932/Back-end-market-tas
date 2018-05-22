<?php
class Model_inventaris extends CI_Model
{

	function get()
	{
		$inventaris = $this->db->get('inventaris');
		return $inventaris->result();
	}

	public function getById($id){
    $this->db->where('id_inventaris', $id);
    $query = $this->db->get('inventaris');
    return $query->result();
  }

	public function insert()
	{
		$data	= array(
			'nama_inventaris'	=> $this->input->post('nama_inventaris'),
			'jumlah'					=> $this->input->post('jumlah'),
			'usia_bulan' 			=> $this->input->post('usia_bulan'),
			'harga'			 			=> $this->input->post('harga')
		);
		$this->db->insert('inventaris', $data);
	}

	function update($id){
		$data	= array(
			'nama_inventaris' => $this->input->post('nama_inventaris'),
			'jumlah'					=> $this->input->post('jumlah'),
			'usia_bulan' 			=> $this->input->post('usia_bulan'),
			'harga'			 			=> $this->input->post('harga')
		);
		$this->db->where('id_inventaris', $id);
		$this->db->update('inventaris', $data);
	}

	public function delete($id){
		$this->db->where('id_inventaris', $id);
		$this->db->delete('inventaris');
	}
}



?>
