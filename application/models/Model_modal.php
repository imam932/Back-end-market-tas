	<?php
class Model_modal extends CI_Model
{

	function get()
	{
		$modal = $this->db->get('modal');
		return $modal->result();
	}

	public function getById($id){
    $this->db->where('id_modal', $id);
    $query = $this->db->get('modal');
    return $query->result();
  }

	public function insert()
	{
		$data	= array(
			'modal' 	=> $this->input->post('modal'),
			'ket'				=> $this->input->post('ket')
		);
		$this->db->insert('modal', $data);
	}

	function update($id)
	{
		$data	= array(
			'modal' 	=> $this->input->post('modal'),
			'ket'				=> $this->input->post('ket')
		);
		$this->db->where('id_modal', $id);
		$this->db->update('modal', $data);
	}

	public function delete($id){
		$this->db->where('id_modal', $id);
		$this->db->delete('modal');
	}
}
?>
