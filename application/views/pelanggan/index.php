
<?php if ($this->session->userdata('logged_in')['level'] == "admin") { ?>
	<div class="container">
		<a href="<?= base_url().'User/insert'?>" class="btn btn-primary">INPUT DATA <?php echo $judul; ?></a>
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
							<th>Nama User</th>
							<th>Telepon</th>
							<th>Jenis kelamin</th>
							<th>Alamat</th>
							<th>email</th>
							<th>Level</th>
							<th>Kode</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($user as $val) { ?>
							<tr class="odd gradeX">
								<td><?= $val->nama_user  ?></td>
								<td><?= $val->no_hp  ?></td>
								<td>
									<?php
									if ($val->jenis_kelamin == 1) {
										echo "Laki laki";
									}else {
										echo "Perempuan";
									}
									?>
								</td>
								<td><?= $val->alamat  ?></td>
								<td><?= $val->email  ?></td>
								<td><?= $val->level ?></td>
								<td><?= $val->code ?></td>
								<td>
									<div class="btn-group" role="group">
	                  <a href="<?= base_url().'User/edit/'.$val->id_user ?>" class="btn btn-warning btn-sm">
	                    Edit
	                  </a>

	                  <a href="<?= base_url().'User/delete/'.$val->id_user ?>" class="btn btn-danger btn-sm">
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
