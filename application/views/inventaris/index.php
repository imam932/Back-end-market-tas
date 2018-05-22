
<?php if ($this->session->userdata('logged_in')['level'] == "admin") { ?>
	<div class="container">
		<a href="<?= base_url().'Inventaris/insert'?>" class="btn btn-primary">INPUT DATA <?php echo $judul; ?></a>
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
							<th>Nama inventaris</th>
							<th>Jumlah</th>
							<th>Usia</th>
							<th>Harga</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($inventaris as $val) { ?>
							<tr class="odd gradeX">
								<td><?= $val->nama_inventaris  ?></td>
								<td><?= $val->jumlah  ?></td>
								<td><?= $val->usia_bulan  ?> Bulan</td>
								<td>Rp. <?= $val->harga  ?></td>
								<td>
									<div class="btn-group" role="group">
	                  <a href="<?= base_url().'Inventaris/edit/'.$val->id_inventaris ?>" class="btn btn-warning btn-sm">
	                    Edit
	                  </a>

	                  <a href="<?= base_url().'Inventaris/delete/'.$val->id_inventaris ?>" class="btn btn-danger btn-sm">
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
