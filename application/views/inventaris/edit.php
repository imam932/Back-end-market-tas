
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-8">
      <div class="panel panel-default">
        <div class="panel-heading">
          Form Edit <?php echo $judul; ?>
        </div>
        <div class="panel-body">
            <div class="col-lg-12">
              <form role="form" action="<?= base_url().'Inventaris/edit/'.$inventaris[0]->id_inventaris?>" method="post">
                <div class="form-group">
                  <label>Nama inventaris</label>
                  <input type="text" name="nama_inventaris" class="form-control" placeholder="Nama inventaris" value="<?php echo $inventaris[0]->nama_inventaris; ?>">
                </div>

                <div class="form-group">
                  <label>Jumlah</label>
                  <input type="number" name="jumlah" class="form-control" placeholder="Jumlah" value="<?php echo $inventaris[0]->jumlah; ?>">
                </div>

                <div class="form-group">
                  <label>Usia / Bulan</label>
                  <input type="text" name="usia_bulan" class="form-control" placeholder="Usia / Bulan" value="<?php echo $inventaris[0]->usia_bulan; ?>">
                </div>
                <div class="form-group">
                  <label>Harga</label>
                  <input type="number" name="harga" class="form-control" placeholder="Harga" value="<?php echo $inventaris[0]->harga; ?>">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-default">Reset</button>
              </form>
            </div>

        </div>
        <!-- /.panel-body -->
      </div>
      <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
