<?php
class Model_cf extends CI_Model
{

	function get($Wyear) 
	{
		$cashflow = $this->db->query("SELECT month(transaksi.tanggal) as bulan, SUM(penjualan.jumlah_pembayaran) as pemasukan, ifnull(pbb.tpemb,0) + ifnull(peng.jumlah,0) as pengeluaran FROM `transaksi` LEFT JOIN ( SELECT MONTH(tanggal) as bpemb,SUM(pembelian_bahan_baku.total_pengeluaran) as tpemb FROM pembelian_bahan_baku GROUP BY bpemb ) as pbb ON pbb.bpemb = month(transaksi.tanggal)LEFT JOIN (SELECT month(pengeluaran.tanggal) as bupeng, jumlah FROM pengeluaran GROUP BY bupeng) as peng on peng.bupeng = month(transaksi.tanggal) JOIN penjualan ON transaksi.id_transaksi = penjualan.transaksi_id_transaksi WHERE year(transaksi.tanggal) =".$Wyear." GROUP BY bulan ORDER BY `bulan` ASC");
		return $cashflow->result();
	}
}
?>
