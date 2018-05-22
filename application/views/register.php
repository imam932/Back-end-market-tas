<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

  <link rel="stylesheet" href="<?= base_url('assets/dist/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/font-awesome.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/styles.css') ?>">
</head>
<body>
  <div class="cover">

    <main>
      <div class="container halaman">
        <div class="col-md-12 col-lg-12">

          <div class="">

            <form class="" action="<?= base_url().'Login/register_simpan' ?>" method="post" enctype="multipart/form-data">
              <div class="row login">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title text-center">Register</h3>
                  </div>
                  <div class="panel-body">
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

                    <input class="form-control" type="hidden" name="level" value="user">

                    <div class="form-group text-center">
                      <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </main>

  </div>

  <script src="<?= base_url('assets/dist/js/jquery.js') ?>"></script>
  <script src="<?= base_url('assets/dist/js/bootstrap.min.js') ?>"></script>
</body>
</html>
