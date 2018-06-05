
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-8">
      <div class="panel panel-default">
        <div class="panel-heading">
          Form <?php echo $judul; ?>
        </div>
        <div class="panel-body">
            <div class="col-lg-12">
              <form role="form" action="<?= base_url().'Absensi/save_insert'?>" method="post">
                <div class="form-group">
                  <label>Nama Pegawai</label>
                  <input class="form-control" type="text" placeholder ="Nama Pegawai" value="<?= $nama ?>" readonly>
                </div>

                <div class="form-group">
                  <label>Kode Pegawai</label>
                  <input class="form-control" type="text" name="code" placeholder ="Kode Pegawai">
                  <p class="help-block">* Inisial 2 huruf depan nama *KAPITAL*</p>
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
