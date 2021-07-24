<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Signup Page</title>

  <link rel="shortcut icon" href="<?php echo base_url("assets/img/") ?>favicon.ico" type="image/x-icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url("assets/") ?>plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url("assets/") ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url("assets/") ?>css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box" style="width:400px;">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="<?php echo base_url("log/in") ?>" class="h1"><b>Signup</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Silahkan Signup Untuk Dapat Login</p>
      <p>
          <?php 
        
          if(!empty($this->session->flashdata("message"))){ ?>
            <div class="alert alert-danger alert-dismissible" role="alert">
                <?php echo $this->session->flashdata("message"); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
          <?php } ?>
      </p>
      <form action="<?php echo site_url("log/submit_signup") ?>" method="post">
        <div class="input-group mb-3">
          <input required type="text" class="form-control" name="firstname" placeholder="Firstname">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input required type="text" class="form-control" name="lastname" placeholder="Lastname">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <select required name="gender" class="form-control">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-restroom"></span>
            </div>
          </div>
        </div>
        
        <div class="input-group mb-3">
          <input required type="email" class="form-control" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input required type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url("assets/") ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url("assets/") ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url("assets/") ?>js/adminlte.min.js"></script>
</body>
</html>
