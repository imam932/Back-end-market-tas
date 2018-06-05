
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
							<th>Alamat</th>
							<th>Telepon</th>
							<th>Tanggal hadir</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($absensi as $val) { ?>
							<tr class="odd gradeX">
								<td><?= $val->nama_user  ?></td>
								<td><?= $val->alamat  ?></td>
								<td><?= $val->no_hp  ?></td>
								<td><?= $val->tanggal  ?></td>

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
