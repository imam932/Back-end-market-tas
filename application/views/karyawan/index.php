
<?php if ($this->session->userdata('logged_in')['level'] == "admin" || $this->session->userdata('logged_in')['level'] == "hrd") { ?>
	<div class="container">
		<a href="<?= base_url().'Karyawan/insert'?>" class="btn btn-primary">INPUT DATA <?php echo $judul; ?></a>
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
							<th>Nama karyawan</th>
							<th>Bagian</th>
							<th>Telepon</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($karyawan as $val) { ?>
							<tr class="odd gradeX">
								<td><?= $val->nama_karyawan  ?></td>
								<td><?= $val->bagian  ?></td>
								<td><?= $val->telp  ?></td>
								<td>
									<div class="btn-group" role="group">
	                  <a href="<?= base_url().'Karyawan/edit/'.$val->id_karyawan ?>" class="btn btn-warning btn-sm">
	                    Edit
	                  </a>

	                  <a href="<?= base_url().'Karyawan/delete/'.$val->id_karyawan ?>" class="btn btn-danger btn-sm">
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
