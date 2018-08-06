
<?php if ($this->session->userdata('logged_in')['level'] == "admin") { ?>
<?php } ?>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<form action="<?= base_url().'LabaRugi/viewYear'?>" method="POST" role="form">
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
							<th>Perkiraan</th>
							<th>Jumlah</th>
							<th>Jumlah</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$penjualan = 0;
						foreach ($labarugi as $val) { ?>
						<tr class="odd gradeX">
							<td>PENJUALAN</td>
							<td><?= $val->jumlah1 ?></td>
							<td><?= $val->jumlah2 ?></td>
						</tr>
						<?php 
						$penjualan += $val->jumlah2; } ?>
						<?php
						$Tj1 = 0;
						foreach ($labarugi2 as $val) { ?>
						<tr class="odd gradeX">
							<td><?= $val->Perkiraan ?></td>
							<td><?= $val->jumlah1 ?></td>
							<td><?= $val->jumlah2 ?></td>
						</tr>
						<?php 
						$Tj1 += $val->jumlah1; } ?>
 						<tr>
 							<td></td>
 							<td></td>
 							<td><?= $Tj1 ?></td>
 						</tr>
 						<tr>
 							<td><?php if ($penjualan<$Tj1): ?>
 								RUGI
 								<?php else: ?>
 								LABA BERSIH
 								<?php endif ?>
 							</td>
 							<td></td>
 							<td><?= ($penjualan-$Tj1) ?></td>
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
