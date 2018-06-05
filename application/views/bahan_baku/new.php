
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-8">
      <div class="panel panel-default">
        <div class="panel-heading">
          Form Tambah <?php echo $judul; ?>
        </div>
        <div class="panel-body">
            <div class="col-lg-12">
              <form role="form" action="<?= base_url().'Supplier/save_insert'?>" method="post">
                <div class="form-group">
                  <label>Nama Supplier</label>
                  <input class="form-control" type="text" name="nama_supplier" placeholder ="Nama Supplier">
                </div>

  							<div class="form-group">
                  <label>Alamat</label>
                  <input class="form-control" type="text" name="alamat" placeholder ="Alamat">
                </div>
                <div class="form-group">
                  <label>Telepon</label>
                  <input class="form-control" type="text" name="telp" placeholder ="Telepon">
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
