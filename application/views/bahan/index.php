
<?php if ($this->session->userdata('logged_in')['level'] == "admin") { ?>
	<div class="container">
		<a href="<?= base_url().'Bahan/insert'?>" class="btn btn-primary">INPUT DATA <?php echo $judul; ?></a>
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
							<th>Nama Bahan</th>
							<th>Jenis</th>
							<th>Jumlah</th>
							<th>Warna</th>
							<th>Satuan</th>
							<th>Harga</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($bahan as $val) { ?>
							<tr class="odd gradeX">
								<td><?= $val->nama_bahan  ?></td>
								<td><?= $val->jenis  ?></td>
								<td><?= $val->jumlah  ?></td>
								<td><?= $val->warna  ?></td>
								<td><?= $val->satuan  ?></td>
								<td><?= $val->harga  ?></td>
								<td>
									<div class="btn-group" role="group">
	                  <a href="<?= base_url().'Bahan/edit/'.$val->id_bahan ?>" class="btn btn-warning btn-sm">
	                    Edit
	                  </a>

	                  <a href="<?= base_url().'Bahan/delete/'.$val->id_bahan ?>" class="btn btn-danger btn-sm">
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
