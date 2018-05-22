
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-8">
      <div class="panel panel-default">
        <div class="panel-heading">
          Form Edit <?php echo $judul; ?>
        </div>
        <div class="panel-body">
            <div class="col-lg-12">
              <form role="form" action="<?= base_url().'Karyawan/edit/'.$karyawan[0]->id_karyawan?>?>" method="post">
                <div class="form-group">
                  <label>Nama karyawan</label>
                  <input type="text" name="nama_karyawan" class="form-control" placeholder="Nama karyawan"  value="<?php echo $karyawan[0]->nama_karyawan; ?>">
                </div>

                <div class="form-group">
                  <label>Bagian</label>
                  <select class="form-control" name="bagian">
                      <option value="<?php echo $karyawan[0]->bagian; ?>"><?php echo $karyawan[0]->bagian; ?></option>
                      <option value="gudang">Gudang</option>
                      <option value="produksi">Produksi</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Telepon</label>
                  <input type="number" name="telp" class="form-control" placeholder="Telepon"  value="<?php echo $karyawan[0]->telp; ?>">
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
