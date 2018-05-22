
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-8">
      <div class="panel panel-default">
        <div class="panel-heading">
          Form Tambah <?php echo $judul; ?>
        </div>
        <div class="panel-body">
            <div class="col-lg-12">
              <form role="form" action="<?= base_url().'Produk/save_insert'?>" method="post">
                <div class="form-group">
                  <label>Nama produk</label>
                  <input type="text" name="nama_produk" class="form-control" placeholder="Nama produk">
                </div>

                <div class="form-group">
                  <label>Warna</label>
                  <input type="text" name="warna" class="form-control" placeholder="Warna">
                </div>
                <div class="form-group">
                  <label>Harga</label>
                  <input type="text" name="harga" class="form-control" placeholder="Harga">
                </div>
                <div class="form-group">
                  <label>Stok</label>
                  <input type="text" name="stok" class="form-control" placeholder="Stok">
                </div>
                <div class="form-group">
                  <label>Satuan</label>
                  <input type="text" name="satuan" class="form-control" placeholder="Satuan">
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
