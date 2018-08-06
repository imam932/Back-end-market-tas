
<?php if ($this->session->userdata('logged_in')['level'] == "admin") { ?>
<?php } ?>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<form action="<?= base_url().'CashFlow/viewYear'?>" method="POST" role="form">
					<table width="100%" class="table table-striped  table-hover">
						<tr>
							<td>Tahun</td>
							<td><select name="th" id="inputTh" class="form-control">
								<?php for ($i=1990; $i < (date('Y')+1); $i++) { ?>
									<option value="<?= $i ?>"><?= $i ?></option>
								<?php } ?>
							</select></td>
							<td><button type="submit" class="btn btn-primary">Submit</button></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Data <?php echo $judul; ?> Tahun <?php echo $tahun; ?>
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<table width="100%" class="table table-striped table-bordered table-hover" >
					<thead>
						<tr>
							<th>Bulan</th>
							<th>Pemasukan</th>
							<th>Pengeluaran</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$masuk = 0;
						$keluar = 0;
						foreach ($cashflow as $val) { ?>
							<tr class="odd gradeX">
								<td><?= date('F', mktime(0, 0, 0, $val->bulan, 10))  ?></td>
								<td><?= $val->pemasukan  ?></td>
								<td><?= $val->pengeluaran  ?></td>

							</tr>
						<?php 
							$masuk += $val->pemasukan;
							$keluar += $val->pengeluaran;
						} ?>
						<tr>
							<td>Jumlah</td>
							<td><?= $masuk; ?></td>
							<td><?= $keluar; ?></td>
						</tr>
					</tbody>
				</table>

			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>
