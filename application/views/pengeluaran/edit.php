
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-8">
      <div class="panel panel-default">
        <div class="panel-heading">
          Form Edit <?php echo $judul; ?>
        </div>
        <div class="panel-body">
            <div class="col-lg-12">
              <form role="form" action="<?= base_url().'Modal/edit/'.$modal[0]->id_modal?>?>" method="post">
                <div class="form-group">
                  <label>Modal</label>
                  <input class="form-control" type="text" name="modal" value ="<?= $modal[0]->modal ?>">
                </div>

                <div class="form-group">
                  <label>Keterangan</label>
                  <input class="form-control" type="text" name="ket" value ="<?= $modal[0]->ket ?>">
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
