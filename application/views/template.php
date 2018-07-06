<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>PT. Nawawi Merdeka</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <!-- Bootstrap 3.3.2 -->
  <link href="<?= base_url() ?>assets/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <!-- Custom Fonts -->
  <link href="<?= base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Ionicons 2.0.0 -->
  <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
  <!-- Theme style -->
  <link href="<?= base_url() ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link href="<?= base_url() ?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
  <!-- iCheck -->
  <link href="<?= base_url() ?>assets/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
  <!-- Date Picker -->
  <link href="<?= base_url() ?>assets/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
  <!-- Daterange picker -->
  <link href="<?= base_url() ?>assets/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
  <!-- bootstrap wysihtml5 - text editor -->
  <link href="<?= base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

  <link href="<?= base_url() ?>assets/dist/css/dataTables.bootstrap.min.css" rel="stylesheet">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>
<body class="skin-blue">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="<?= base_url() ?>" class="logo"><b>PT. </b>Nawawi Merdeka</a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?= base_url() ?>assets/img/person.png" class="user-image" alt="User Image"/>
                <span class="hidden-xs"><?= $this->session->userdata('logged_in')['nama_user']; ?></span>
              </a>
            </li>
            <li><a href="<?= base_url() ?>Login/process_logout"><i class="fa fa-sign-out fa-fw"></i> Sign Out</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?= base_url() ?>assets/img/person.png" class="img-circle" alt="User Image" />
          </div>
          <div class="pull-left info">
            <p><?= $this->session->userdata('logged_in')['nama_user']; ?></p>

            <a href="#"><?= $this->session->userdata('logged_in')['level']; ?> </a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">MAIN NAVIGATION</li>
          <li class="active treeview">
            <a href="<?= base_url() ?>Dashboard">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
            </a>
          </li>
          <li><a href="<?= base_url() ?>Absensi/insert"><i class="fa fa-circle-o text-info"></i> Absensi Pegawai</a></li>
          <?php if ($this->session->userdata('logged_in')['level'] == 'admin' || $this->session->userdata('logged_in')['level'] == 'hrd') { ?>
          <li><a href="<?= base_url() ?>Absensi/kehadiran"><i class="fa fa-circle-o text-warning"></i> Kehadiran</a></li>
          <li><a href="<?= base_url() ?>Absensi"><i class="fa fa-circle-o text-danger"></i> Data Absensi</a></li>

           <li class="treeview">
             <a href="#">
               <i class="fa fa-files-o"></i>
               <span>Data HRD</span>
               <i class="fa fa-angle-left pull-right"></i>
             </a>
             <ul class="treeview-menu">
               <li>
                 <a href="<?= base_url() ?>Karyawan"><i class="fa fa-circle-o"></i> Karyawan</a>
               </li>
               <li>
                 <a href="<?= base_url() ?>User"><i class="fa fa-circle-o"></i> User</a>
               </li>
             </ul>
           </li>

          <?php }
          if ($this->session->userdata('logged_in')['level'] == 'admin' || $this->session->userdata('logged_in')['level'] == 'logistik') { ?>
            <li class="treeview <?php ($menu == 'logistik') ? print $active : '' ?>">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Data Logistik</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php ($menu2 == 'bahan') ? print $active : '' ?>">
                  <a href="<?= base_url() ?>Bahan"><i class="fa fa-circle-o"></i> Bahan Baku</a>
                </li>
                <li>
                  <a href="<?= base_url() ?>Produk"><i class="fa fa-circle-o"></i> Produk</a>
                </li>
                <li>
                  <a href="<?= base_url() ?>Inventaris"><i class="fa fa-circle-o"></i> Inventaris</a>
                </li>
                <li>
                  <a href="<?= base_url() ?>PembelianBahanBaku"><i class="fa fa-circle-o"></i> Pembelian Bahan Baku</a>
                </li>
              </ul>
            </li>

          <?php }
          if ($this->session->userdata('logged_in')['level'] == 'admin' || $this->session->userdata('logged_in')['level'] == 'akuntansi') {
            ?>
            <li class="treeview <?php ($menu == 'keuangan') ? print $active : '' ?>">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Data Keuangan</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php ($menu2 == 'modal') ? print $active : '' ?>">
                  <a href="<?= base_url() ?>Modal"><i class="fa fa-circle-o"></i> Modal Usaha</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="<?= base_url() ?>Pemasukan"><i class="fa fa-circle-o text-info"></i> Pemasukan</a>
            </li>
            <li>
              <a href="<?= base_url() ?>Pengeluaran"><i class="fa fa-circle-o text-warning"></i> Pengeluaran</a>
            </li>
            <li>
              <a href="<?= base_url() ?>Inventaris/lap_inventaris"><i class="fa fa-circle-o text-dager"></i> Inventaris</a>
            </li>
            <li>
              <a href="<?= base_url() ?>Transaksi/cashFlow"><i class="fa fa-circle-o text-dager"></i> Cash Flow</a>
            </li>
          <?php } ?>
          <?php if ($this->session->userdata('logged_in')['level'] == 'admin') { ?>
          <li><a href="<?= base_url() ?>Pelanggan/insert"><i class="fa fa-circle-o text-info"></i> Data Pelanggan</a></li>
          <li><a href="<?= base_url() ?>Pelanggan/kehadiran"><i class="fa fa-circle-o text-warning"></i> Riwayat Pembelian</a></li>
        <?php } ?>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Right side column. Contains the navbar and content of the page -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dashboard
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <?= $content ?>
      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.0
      </div>
      <strong>Copyright &copy; 2018 .</strong> All rights reserved.
    </footer>
  </div><!-- ./wrapper -->

  <!-- jQuery 2.1.3 -->
  <script src="<?= base_url() ?>assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
  <!-- jQuery UI 1.11.2 -->
  <script src="<?= base_url() ?>assets/plugins/jQueryUI/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
  $.widget.bridge('uibutton', $.ui.button);
  </script>

  <!-- Bootstrap Core CSS -->
  <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Sparkline -->
  <script src="<?= base_url() ?>assets/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url() ?>assets/dist/js/app.min.js" type="text/javascript"></script>
  <!-- daterangepicker -->
  <script src="<?= base_url() ?>assets/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
  <!-- datepicker -->
  <script src="<?= base_url() ?>assets/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="<?= base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
  <!-- iCheck -->
  <script src="<?= base_url() ?>assets/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
  <!-- Slimscroll -->
  <script src="<?= base_url() ?>assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
  <!-- FastClick -->
  <script src='<?= base_url() ?>assets/plugins/fastclick/fastclick.min.js'></script>

  <!-- data tables -->
  <script src="<?= base_url() ?>assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
  <script src="<?= base_url() ?>assets/dist/js/dataTables.bootstrap.min.js"></script>

  <script>
  $(document).ready(function() {
    $('#dataTables').DataTable({
      responsive: true
    });
  });
  </script>
</body>
</html>
