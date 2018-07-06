<!-- Small boxes (Stat box) -->
<div class="row">
  <?php if ($this->session->userdata('logged_in')['level'] == "admin" || $this->session->userdata('logged_in')['level'] == "logistik") { ?>
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>150</h3>
          <p>Logistik</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div><!-- ./col -->
    <?php
  } else if ($this->session->userdata('logged_in')['level'] == "admin" || $this->session->userdata('logged_in')['level'] == "hrd") {
    ?>
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>53<sup style="font-size: 20px">%</sup></h3>
          <p>HRD</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div><!-- ./col -->
    <?php
  } else if ($this->session->userdata('logged_in')['level'] == "admin" || $this->session->userdata('logged_in')['level'] == "akuntansi") {
    ?>
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3>65</h3>
          <p>Keuangan</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div><!-- ./col -->
    <?php
  } else if ($this->session->userdata('logged_in')['level'] == "admin" || $this->session->userdata('logged_in')['level'] == "hrd") {
    ?>
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3><?php echo count($user); ?></h3>
          <p>User Registrations</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="<?= base_url() ?>User" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div><!-- ./col -->
  <?php } ?>
</div><!-- /.row -->
<!-- Main row -->
<div class="row">
  <div class="col-lg-6 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3>Absensi Pegawai</h3>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="<?= base_url() ?>Absensi/insert" class="small-box-footer">Input Here <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div><!-- ./col -->
</div><!-- /.row (main row) -->
