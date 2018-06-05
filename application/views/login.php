<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

  <link rel="stylesheet" href="<?= base_url('assets/dist/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/font-awesome.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/style.css') ?>">
</head>
<body bg-color="#ff00ff">
  <div class="">

    <main>
      <div class="container halaman">
        <div class="col-md-12 col-lg-12">

          <div class="">

            <form class="" action="<?= base_url().'Login/cekLogin' ?>" method="post" enctype="multipart/form-data">
              <div class="row login">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title text-center">Login</h3>
                  </div>
                  <div class="panel-body">
                    <div class="form-group">
                      <label for="">E-mail</label>
                      <input type="text" name="email" class="form-control" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                      <label for="">Password</label>
                      <input type="password" name="password" class="form-control" placeholder="password">
                    </div>

                    <div class="form-group text-center">
                      <button type="submit" class="btn btn-primary">Login</button>
                      <a href="<?= base_url().'Login/register' ?>" class="btn btn-info">Register</a>
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
