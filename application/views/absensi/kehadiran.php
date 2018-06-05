
  <!-- /.row -->
  <div class="row">
    <div class="container">
      <h3><?= $judul ?> pada tanggal <?php $dt = new DateTime(); echo $dt->format('d-M-Y');?></h3>
      <p><hr></p>
      <?php foreach ($kehadiran as $key) { ?>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <p><?= $key->nama_user; ?></p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
        </div>
      </div><!-- ./col -->
    <?php } ?>
    </div>
  </div>
  <!-- /.row -->
