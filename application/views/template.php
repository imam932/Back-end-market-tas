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

  <link href="<?= base_url() ?>assets/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">


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
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search..."/>
            <span class="input-group-btn">
              <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
            </span>
          </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">MAIN NAVIGATION</li>
          <li class="active treeview">
            <a href="<?= base_url() ?>Dashboard">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
            </a>
          </li>

          <li class="header">INPUT DATA</li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-files-o"></i>
              <span>INPUT DATA</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li>
                <a href="<?= base_url() ?>Bahan"><i class="fa fa-circle-o"></i> Bahan</a>
              </li>
              <li>
                <a href="<?= base_url() ?>Inventaris"><i class="fa fa-circle-o"></i> Inventaris</a>
              </li>
              <li>
                <a href="<?= base_url() ?>Karyawan"><i class="fa fa-circle-o"></i> Karyawan</a>
              </li>
              <li>
                <a href="<?= base_url() ?>User"><i class="fa fa-circle-o"></i> User</a>
              </li>
              <li>
                <a href="<?= base_url() ?>Produk"><i class="fa fa-circle-o"></i> Produk</a>
              </li>
            </ul>
          </li>

          <li class="header">LOGISTIK</li>
          <li><a href="#"><i class="fa fa-circle-o text-danger"></i> Important</a></li>
          <li><a href="#"><i class="fa fa-circle-o text-warning"></i> Warning</a></li>
          <li><a href="#"><i class="fa fa-circle-o text-info"></i> Information</a></li>

          <li class="header">HRD</li>
          <li><a href="#"><i class="fa fa-circle-o text-danger"></i> Important</a></li>
          <li><a href="#"><i class="fa fa-circle-o text-warning"></i> Warning</a></li>
          <li><a href="#"><i class="fa fa-circle-o text-info"></i> Information</a></li>

          <li class="header">KEUANGAN</li>
          <li><a href="#"><i class="fa fa-circle-o text-danger"></i> Important</a></li>
          <li><a href="#"><i class="fa fa-circle-o text-warning"></i> Warning</a></li>
          <li><a href="#"><i class="fa fa-circle-o text-info"></i> Information</a></li>

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
      <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
    </footer>
  </div><!-- ./wrapper -->

  <!-- jQuery 2.1.3 -->
  <script src="<?= base_url() ?>assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
  <!-- jQuery UI 1.11.2 -->
  <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
  $.widget.bridge('uibutton', $.ui.button);
  </script>

  <!-- Bootstrap Core CSS -->
  <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Sparkline -->
  <script src="<?= base_url() ?>assets/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
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
  <!-- AdminLTE App -->
  <script src="<?= base_url() ?>assets/dist/js/app.min.js" type="text/javascript"></script>

  <!-- data tables -->
  <script src="<?= base_url() ?>assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/datatables-responsive/dataTables.responsive.js"></script>

  <script>
  $(document).ready(function() {
    $('#dataTables').DataTable({
      responsive: true
    });
  });
  </script>
</body>
</html>
