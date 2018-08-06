<?php
class Model_lr extends CI_Model
{

	function get2($Wyear) 
	{
		$labarugi = $this->db->query("SELECT pengeluaran.jenis_pengeluaran as Perkiraan, if(pengeluaran.jenis_pengeluaran='bahan baku', SUM(pembelian_bahan_baku.total_pengeluaran), pengeluaran.jumlah) as jumlah1, ' ' as jumlah2 FROM pengeluaran, pembelian_bahan_baku WHERE YEAR(pengeluaran.tanggal) = 2018 OR YEAR(pembelian_bahan_baku.tanggal) = ".$Wyear." GROUP BY jenis_pengeluaran");
		return $labarugi->result();
	}

	function get($Wyear) 
	{
		$labarugi2 = $this->db->query("SELECT ' ' as Perkiraan, ' ' as jumlah1, SUM(penjualan.jumlah_pembayaran) as jumlah2 FROM penjualan JOIN transaksi ON transaksi.id_transaksi = penjualan.transaksi_id_transaksi WHERE YEAR(transaksi.tanggal) = ".$Wyear."");
		return $labarugi2->result();
	}
}
?>
