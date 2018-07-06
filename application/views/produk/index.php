
<?php if ($this->session->userdata('logged_in')['level'] == "admin" || $this->session->userdata('logged_in')['level'] == "logistik") { ?>
	<div class="container">
		<a href="<?= base_url().'Produk/insert'?>" class="btn btn-primary">INPUT DATA <?php echo $judul; ?></a>
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
							<th>No</th>
							<th>Nama produk</th>
							<th>Warna</th>
							<th>harga</th>
							<th>Stok</th>
							<th>Satuan</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 0;
						foreach ($produk as $val) { ?>
							<tr class="odd gradeX">
								<td><?= $i +1 ?></td>
								<td><?= $val->nama_produk  ?></td>
								<td><?= $val->warna  ?></td>
								<td><?= $val->harga  ?></td>
								<td><?= $val->stok  ?></td>
								<td><?= $val->satuan ?></td>
								<td>
									<div class="btn-group" role="group">
	                  <a href="<?= base_url().'Produk/edit/'.$val->id_produk ?>" class="btn btn-warning btn-sm">
	                    Edit
	                  </a>

	                  <a href="<?= base_url().'Produk/delete/'.$val->id_produk ?>" class="btn btn-danger btn-sm">
	                    Delete
	                  </a>
	                </div>
								</td>

							</tr>
						<?php $i++; } ?>
					</tbody>
				</table>

			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>
