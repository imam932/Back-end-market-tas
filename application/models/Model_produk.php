<?php
class Model_produk extends CI_Model
{

	function get()
	{
		$produk = $this->db->get('produk');
		return $produk->result();
	}

	public function getById($id){
    $this->db->where('id_produk', $id);
    $query = $this->db->get('produk');
    return $query->result();
  }

	public function insert()
	{
		$data	= array(
			'nama_produk'		=> $this->input->post('nama_produk'),
			'warna'					=> $this->input->post('warna'),
			'stok' 					=> $this->input->post('stok'),
			'satuan' 				=> $this->input->post('satuan'),
			'harga'			 		=> $this->input->post('harga')
		);
		$this->db->insert('produk', $data);
	}

	function update($id){
		$data	= array(
			'nama_produk'	=> $this->input->post('nama_produk'),
			'warna'				=> $this->input->post('warna'),
			'stok' 				=> $this->input->post('stok'),
			'satuan' 			=> $this->input->post('satuan'),
			'harga'			 	=> $this->input->post('harga')
		);
		$this->db->where('id_produk', $id);
		$this->db->update('produk', $data);
	}

	public function delete($id){
		$this->db->where('id_produk', $id);
		$this->db->delete('produk');
	}
}



?>
