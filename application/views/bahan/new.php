
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-8">
      <div class="panel panel-default">
        <div class="panel-heading">
          Form Tambah <?php echo $judul; ?>
        </div>
        <div class="panel-body">
            <div class="col-lg-12">
              <form role="form" action="<?= base_url().'Bahan/save_insert'?>" method="post">
                <div class="form-group">
                  <label>Nama Bahan</label>
                  <input type="text" name="nama_bahan" class="form-control" placeholder="Nama Bahan">
                </div>

                <div class="form-group">
                  <label>Jenis</label>
                  <select class="form-control" name="jenis">
                      <option>Pilih jenis ...</option>
                      <option value="kain kanvas bagus">Kain kanvas bagus</option>
                      <option value="kain kanvas biasa">Kain kanvas biasa</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Jumlah</label>
                  <input type="number" name="jumlah" class="form-control" placeholder="Jumlah">
                </div>

                <div class="form-group">
                  <label>Warna</label>
                  <select class="form-control" name="warna">
                      <option>Pilih warna ...</option>
                      <option value="merah">Merah</option>
                      <option value="kuning">Kuning</option>
                      <option value="hijau">Hijau</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Satuan</label>
                  <input type="text" name="satuan" class="form-control" placeholder="Satuan">
                </div>
                <div class="form-group">
                  <label>Harga</label>
                  <input type="number" name="harga" class="form-control" placeholder="Harga">
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
