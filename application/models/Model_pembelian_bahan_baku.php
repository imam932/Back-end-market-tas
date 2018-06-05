	<?php
class Model_pembelian_bahan_baku extends CI_Model
{

	function get()
	{
		$pembelian_bahan_baku = $this->db->get('pembelian_bahan_baku');
		return $pembelian_bahan_baku->result();
	}

	public function getById($id){
    $this->db->where('id_pembelian_bahan', $id);
    $query = $this->db->get('pembelian_bahan_baku');
    return $query->result();
  }

	public function insert()
	{
		$data	= array(
			'tanggal' 	=> $this->input->post('tanggal'),
			'total_pengeluaran'				=> $this->input->post('total_pengeluaran'),
			'bahan_id_bahan'				=> $this->input->post('bahan_id_bahan'),
			'supplier_id_supplier'				=> $this->input->post('supplier_id_supplier'),
			'ket'	=> $this->input->post('ket')
		);
		$this->db->insert('pembelian_bahan_baku', $data);
	}

	function update($id){
		$data	= array(
			'tanggal' 	=> $this->input->post('tanggal'),
			'total_pengeluaran'				=> $this->input->post('total_pengeluaran'),
			'bahan_id_bahan'				=> $this->input->post('bahan_id_bahan'),
			'supplier_id_supplier'				=> $this->input->post('supplier_id_supplier'),
			'ket'	=> $this->input->post('ket')
		);
		$this->db->where('id_pembelian_bahan', $id);
		$this->db->update('pembelian_bahan_baku', $data);
	}

	public function delete($id){
		$this->db->where('id_pembelian_bahan', $id);
		$this->db->delete('pembelian_bahan_baku');
	}

}
?>
