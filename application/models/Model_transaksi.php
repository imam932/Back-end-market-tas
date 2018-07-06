<?php
class Model_transaksi extends CI_Model
{

	function get()
	{
		$pemasukan = $this->db->get('transaksi');
		return $pemasukan->result();
	}

	public function cash_flow_get()
	{
		$this->db->select('month(pengeluaran.tanggal) as bupeng, jumlah');

	$query = $this->db->get('transaksi');
	return $query->result();
}
}
?>
