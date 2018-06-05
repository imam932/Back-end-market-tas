	<?php
class Model_supplier extends CI_Model
{

	function get()
	{
		$supplier = $this->db->get('supplier');
		return $supplier->result();
	}

	public function getById($id){
    $this->db->where('id_supplier', $id);
    $query = $this->db->get('supplier');
    return $query->result();
  }

	public function insert()
	{
		$data	= array(
			'nama_supplier' 	=> $this->input->post('nama_supplier'),
			'alamat'				=> $this->input->post('alamat'),
			'telp'	=> $this->input->post('telp')
		);
		$this->db->insert('supplier', $data);
	}

	function update($id){
		$data	= array(
			'nama_supplier' 	=> $this->input->post('nama_supplier'),
			'alamat'				=> $this->input->post('alamat'),
			'telp'	=> $this->input->post('telp')
		);
		$this->db->where('id_supplier', $id);
		$this->db->update('supplier', $data);
	}

	public function delete($id){
		$this->db->where('id_supplier', $id);
		$this->db->delete('supplier');
	}

}
?>
