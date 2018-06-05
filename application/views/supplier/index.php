
<?php if ($this->session->userdata('logged_in')['level'] == "admin") { ?>
	<div class="container">
		<a href="<?= base_url().'Supplier/insert'?>" class="btn btn-primary">INPUT DATA <?php echo $judul; ?></a>
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
							<th>Nama Supplier</th>
							<th>Alamat</th>
							<th>Telepon</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($supplier as $val) { ?>
							<tr class="odd gradeX">
								<td><?= $val->nama_supplier  ?></td>
								<td><?= $val->alamat  ?></td>
								<td><?= $val->telp  ?></td>
								<td>
									<div class="btn-group" role="group">
	                  <a href="<?= base_url().'Supplier/edit/'.$val->id_supplier ?>" class="btn btn-warning btn-sm">
	                    Edit
	                  </a>

	                  <a href="<?= base_url().'Supplier/delete/'.$val->id_supplier ?>" class="btn btn-danger btn-sm">
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
