
<?php if ($this->session->userdata('logged_in')['level'] == "admin") { ?>
	<div class="container">
		<a href="<?= base_url().'PembelianBahanBaku/insert'?>" class="btn btn-primary">INPUT DATA <?php echo $judul; ?></a>
	</div>
<?php } ?>

<!-- /.row -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Data <?php echo $judul; ?>
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
					<thead>
						<tr>
							<th>Tanggal</th>
							<th>Bahan</th>
							<th>Supplier</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($bahan_baku as $val) { ?>
							<tr class="odd gradeX">
								<td><?= $val->tanggal  ?></td>
								<td><?= $val->bahan_id_bahan  ?></td>
								<td><?= $val->supplier_id_supplier  ?></td>
								<td>
									<div class="btn-group" role="group">
	                  <a href="<?= base_url().'PembelianBahanBaku/edit/'.$val->id_pembelian_bahan ?>" class="btn btn-warning btn-sm">
	                    Edit
	                  </a>

	                  <a href="<?= base_url().'PembelianBahanBaku/delete/'.$val->id_pembelian_bahan ?>" class="btn btn-danger btn-sm">
	                    Delete
	                  </a>
	                </div>
								</td>

							</tr>
						<?php } ?>
					</tbody>
				</table>

			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>
