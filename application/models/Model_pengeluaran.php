	<?php
class Model_pengeluaran extends CI_Model
{

	function get()
	{
		$pengeluaran = $this->db->get('pengeluaran');
		return $pengeluaran->result();
	}

	public function getById($id){
    $this->db->where('id_pengeluaran', $id);
    $query = $this->db->get('pengeluaran');
    return $query->result();
  }

	public function insert()
	{
		$data	= array(
			'jenis_pengeluaran' 	=> $this->input->post('jenis_pengeluaran'),
			'tanggal'				=> $this->input->post('tanggal'),
			'jumlah'				=> $this->input->post('jumlah'),
			'ket'				=> $this->input->post('ket')
		);
		$this->db->insert('pengeluaran', $data);
	}

	function update($id)
	{
		$data	= array(
			'jenis_pengeluaran' 	=> $this->input->post('jenis_pengeluaran'),
			'tanggal'				=> $this->input->post('tanggal'),
			'jumlah'				=> $this->input->post('jumlah'),
			'ket'				=> $this->input->post('ket')
		);
		$this->db->where('id_pengeluaran', $id);
		$this->db->update('pengeluaran', $data);
	}

	public function delete($id){
		$this->db->where('id_pengeluaran', $id);
		$this->db->delete('pengeluaran');
	}
}
?>
