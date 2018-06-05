
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-8">
      <div class="panel panel-default">
        <div class="panel-heading">
          Form Edit <?php echo $judul; ?>
        </div>
        <div class="panel-body">
            <div class="col-lg-12">
              <form role="form" action="<?= base_url().'User/edit/'.$user[0]->id_user?>?>" method="post">
                <div class="form-group">
                  <label>Nama User</label>
                  <input class="form-control" type="text" name="nama_user" value ="<?= $user[0]->nama_user ?>">
                </div>

                <div class="form-group">
                  <label for="">Jenis Kelamin</label>
                  <div class="radio">
                    <?php
                    if ($user[0]->jenis_kelamin == 1) {
                      ?>
                      <label>
                        <input type="radio" name="jenis_kelamin"  value="1" checked> Laki laki
                      </label>
                      <label>
                        <input type="radio" name="jenis_kelamin"  value="0"> Perempuan
                      </label>
                    <?php }else { ?>
                      <label>
                        <input type="radio" name="jenis_kelamin"  value="1"> Laki laki
                      </label>
                      <label>
                        <input type="radio" name="jenis_kelamin"  value="0" checked> Perempuan
                      </label>
                    <?php } ?>
                  </div>
                </div>
                <div class="form-group">
                  <label>E-mail</label>
                  <input class="form-control" type="text" name="email" value ="<?= $user[0]->email ?>">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input class="form-control" type="text" name="alamat" value ="<?= $user[0]->alamat ?>">
                </div>

                <div class="form-group">
                  <label>Telepon</label>
                  <input class="form-control" type="text" name="no_hp" value ="<?= $user[0]->no_hp ?>">
                </div>

                <div class="form-group">
                  <label>Kode Pegawai</label>
                  <input class="form-control" type="text" name="code" value ="<?= $user[0]->code ?>">
                  <p class="help-block">* Inisial 2 huruf depan nama *KAPITAL*</p>
                </div>

                <div class="form-group">
                  <label>Tipe User</label>
                  <select name="level" class="form-control">
                    <option value="<?= $user[0]->level ?>"><?= $user[0]->level ?></option>
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
