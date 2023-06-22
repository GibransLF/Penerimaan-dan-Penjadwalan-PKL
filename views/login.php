<?php
  //koneksi ke database
  $serverhost = "localhost";
  $username = "root";
  $password = "";
  $dbname = "p2";

  //perintah koneksi ke database
  $conn = mysqli_connect($serverhost, $username, $password, $dbname);
  
  //ambil dari input form
  if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $pass     = $_POST["pass"];

    $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$pass'";

    $result = mysqli_query($conn, $sql);

    $cek = mysqli_num_rows($result);

    if($cek > 0){
      
      header('location: dashboard/admin.php');
    }
    else{
      header('location: dashboard/index.php');
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tugas | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="resaurces/plugins/fontawesome-free/css/all.min.css"
    />
    <!-- icheck bootstrap -->
    <link
      rel="stylesheet"
      href="resaurces/plugins/icheck-bootstrap/icheck-bootstrap.min.css"
    />
    <!-- Theme style -->
    <link rel="stylesheet" href="resaurces/dist/css/adminlte.min.css" />
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="/"><b>HyForzLF</b></a>
      </div>
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Sign in</p>

          <form action="/" method="post">
            <div class="input-group mb-3">
              <input name="username" type="text" class="form-control" placeholder="Username" />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input
                name="pass"
                type="password"
                class="form-control"
                placeholder="Password"
              />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button name="submit" type="submit" class="btn btn-primary btn-block">
                  Sign In
                </button>
              </div>
              <!-- /.col -->
            </div>
          </form>
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="resaurces/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="resaurces/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="resaurces/dist/js/adminlte.min.js"></script>
  </body>
</html>
