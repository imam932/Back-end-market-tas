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
							<th>Total Transaksi</th>
							<th>Keterangan</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($pemasukan as $val) { ?>
							<tr class="odd gradeX">
								<td><?= $val->tanggal  ?></td>
								<td><?= $val->total_transaksi  ?></td>
								<td><?= $val->ket  ?></td>

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
