<?php
class Model_absensi extends CI_Model
{

	function get()
	{
		$this->db->from('absensi');
		$this->db->join('user', 'user.id_user = absensi.id_user', 'left');
		$absensi = $this->db->get();
		return $absensi->result();
	}

	public function get_absen()
	{
		$this->db->from('absensi');
		$this->db->join('user', 'user.id_user = absensi.id_user', 'left');
		$this->db->where('absensi.tanggal', date('Y-m-d'));
		$query = $this->db->get();

		return $query->result();
	}

	public function insert($code, $id_user)
	{
		$in_code = $this->input->post('code');

		if ($in_code == $code) {
			$data	= array(
				'tanggal' 	=> date('Y-m-d'),
				'id_user'				=> $id_user
			);
			$this->db->insert('absensi', $data);
		}
	}

	public function cek_absen($id_user)
	{
		$date = date('Y-m-d');
		$cek_date = $this->db->get_where('absensi', array('tanggal' => $date, 'id_user' => $id_user));
		return $cek_date->first_row();
	}

}
?>
