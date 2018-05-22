<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PT. Nawawi Merdeka</title>

  <!-- Bootstrap Core CSS -->
  <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- MetisMenu CSS -->
  <link href="<?= base_url() ?>assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="<?= base_url() ?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

 <!-- Custom CSS -->
 <link href="<?= base_url() ?>assets/dist/css/compiled.min.css" rel="stylesheet">
 <link href="<?= base_url() ?>assets/dist/css/styles.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="<?= base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <link href="<?= base_url() ?>assets/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">


</head>

<body>

  <div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">PT. Nawawi Merdeka</a>
      </div>
      <!-- /.navbar-header -->

      <ul class="nav navbar-top-links navbar-right">

        <li><a href="<?= base_url() ?>Login/process_logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
        </ul>
        <!-- /.dropdown-user -->
      </li>
      <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
      <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
        <li class="nav-header">
						<div class="dropdown profile-element">
							<span>
								<!-- <img alt="image" class="img-circle" src="../images/profil/i.jpg"> -->
								<div>
									<p>
										<i class="fa fa-user fa-5x" style="color: #ccc"></i>
									</p>
								</div>
							</span>
							<a data-toggle="dropdown" class="" href="#" aria-expanded="false">
								<span class="clear">
									<span class="block m-t-xs">
										<strong class="font-bold"><?= $this->session->userdata('logged_in')['nama_user']; ?></strong>
									</span>
									<span class="text-muted text-xs block"><?= $this->session->userdata('logged_in')['level']; ?> </span>
								</span>
							</a>
						</div>
					</li>
          <li>
            <a href="<?= base_url() ?>Dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
          </li>
          <li>
            <a href="<?= base_url() ?>Bahan"><i class="fa fa-dashboard fa-fw"></i> Bahan</a>
          </li>
          <!-- <?php if ($this->session->userdata('logged_in')['level'] == "admin") { ?>
            <li>
              <a href="<?= base_url() ?>Driver"><i class="fa fa-dashboard fa-fw"></i> Driver</a>
            </li>
            <li>
              <a href="<?= base_url() ?>Kondektur"><i class="fa fa-dashboard fa-fw"></i>Kondektur</a>
            </li>
            <li>
              <a href="<?= base_url() ?>User"><i class="fa fa-dashboard fa-fw"></i> User</a>
            </li>
          <?php } ?>
          <li>
            <a href="<?= base_url() ?>Rute"><i class="fa fa-dashboard fa-fw"></i> Rute</a>
          </li> -->

        </ul>
      </div>
      <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
  </nav>

  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
      </div>
      <!-- /.col-lg-12 -->
    </div>

    <?= $content ?>

  </div>
  <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>

<script>
$(document).ready(function() {
  $('#dataTables').DataTable({
    responsive: true
  });
});
</script>

<!-- Bootstrap Core JavaScript -->
<script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?= base_url() ?>assets/vendor/metisMenu/metisMenu.min.js"></script>

<script src="<?= base_url() ?>assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/datatables-responsive/dataTables.responsive.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?= base_url() ?>assets/dist/js/sb-admin-2.js"></script>

</body>

</html>
