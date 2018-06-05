
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-8">
      <div class="panel panel-default">
        <div class="panel-heading">
          Form Edit <?php echo $judul; ?>
        </div>
        <div class="panel-body">
            <div class="col-lg-12">
              <form role="form" action="<?= base_url().'Supplier/edit/'.$supplier[0]->id_supplier?>?>" method="post">
                <div class="form-group">
                  <label>Nama Supplier</label>
                  <input class="form-control" type="text" name="nama_supplier" value ="<?= $supplier[0]->nama_supplier ?>">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <input class="form-control" type="text" name="alamat" value ="<?= $supplier[0]->alamat ?>">
                </div>
                <div class="form-group">
                  <label>Telepon</label>
                  <input class="form-control" type="text" name="telp" value ="<?= $supplier[0]->telp ?>">
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
