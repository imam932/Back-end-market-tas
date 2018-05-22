
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-8">
      <div class="panel panel-default">
        <div class="panel-heading">
          Form Tambah <?php echo $judul; ?>
        </div>
        <div class="panel-body">
            <div class="col-lg-12">
              <form role="form" action="<?= base_url().'User/save_insert'?>" method="post">
                <div class="form-group">
                  <label>Nama User</label>
                  <input class="form-control" type="text" name="nama_user" placeholder ="Nama User">
                </div>

                <div class="form-group">
                  <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenis_kelamin"  value="1" checked> Laki laki
                      </label>
                      <label>
                        <input type="radio" name="jenis_kelamin"  value="0"> Perempuan
                      </label>
                    </div>
                  </div>
                </div>
  							<div class="form-group">
                  <label>Username</label>
                  <input class="form-control" type="text" name="username" placeholder ="Username">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input class="form-control" type="password" name="password" placeholder ="Password">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input class="form-control" type="text" name="alamat" placeholder ="Alamat">
                </div>

                <div class="form-group">
                  <label>Telepon</label>
                  <input class="form-control" type="text" name="no_hp" placeholder ="Telepon">
                </div>

                <div class="form-group">
                  <label>Tipe User</label>
                  <select name="level" class="form-control">
                    <option value="admin">Admin</option>
                    <option value="hrd">HRD</option>
                    <option value="inventory">Inventory / Logistik</option>
                    <option value="akuntansi">Akuntansi</option>
                  </select>
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
