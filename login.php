<?php 
session_start();
require 'core/functions.php';

// Proses login admin
if( isset($_POST['login']) ) {
  $uname = $_POST['uname'];
  $pass  = $_POST['pass'];

  $cek_admin = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$uname'");
  $cek_siswa = mysqli_query($conn, "SELECT * FROM siswa WHERE username = '$uname'");
  $cek_guru = mysqli_query($conn, "SELECT * FROM guru WHERE username = '$uname'");
  $cek_sa = mysqli_query($conn, "SELECT * FROM sa WHERE username = '$uname'");

  // Login admin
  if( mysqli_num_rows($cek_admin) === 1 ) {
      // cek pass
      $row = mysqli_fetch_assoc($cek_admin);

      if( password_verify($pass, $row['password']) ) {
          // SET SESSION
          $_SESSION['admin'] = true;
          $_SESSION["uid"] = $row["id_admin"];
          $_SESSION['nama'] = $row['nama'];
          $_SESSION["uname"] = ucwords($row["username"]);

          // CEK remember
          if( isset($_POST['remember']) ){

              setcookie('id', $row['id_admin'], time() + 60);

              setcookie('key', hash('sha256', $row['username']), time() + 60);
          }

          header("Location: admin/?hal=");
          exit;
      }
  } //Login siswa
  if( mysqli_num_rows($cek_siswa) === 1 ) {
    // cek pass
    $row = mysqli_fetch_assoc($cek_siswa);

    if( password_verify($pass, $row['password']) ) {
        // SET SESSION
        $_SESSION['siswa'] = true;
        $_SESSION["uid"] = $row["id_siswa"];
        $_SESSION['nama'] = $row['nama'];
        $_SESSION["uname"] = ucwords($row["username"]);

        // CEK remember
        if( isset($_POST['remember']) ){

            setcookie('id', $row['id_users'], time() + 60);

            setcookie('key', hash('sha256', $row['username']), time() + 60);
        }

        header("Location: ../");
        exit;
    }
} //Login Guru
if( mysqli_num_rows($cek_guru) === 1 ) {
  // cek pass
  $row = mysqli_fetch_assoc($cek_guru);

  if( password_verify($pass, $row['password']) ) {
      // SET SESSION
      $_SESSION['guru'] = true;
      $_SESSION["uid"] = $row["id_guru"];
      $_SESSION['nama'] = $row['nama'];
      $_SESSION["uname"] = ucwords($row["username"]);

      // CEK remember
      if( isset($_POST['remember']) ){

          setcookie('id', $row['id_users'], time() + 60);

          setcookie('key', hash('sha256', $row['username']), time() + 60);
      }

      header("Location: admin/guru.php?hal=");
      exit;
  }
}
if( mysqli_num_rows($cek_sa) === 1 ) {
  // cek pass
  $row = mysqli_fetch_assoc($cek_sa);

  if( password_verify($pass, $row['password']) ) {
      // SET SESSION
      $_SESSION['sa'] = true;
      $_SESSION["uid"] = $row["id_sa"];
      $_SESSION['nama'] = $row['nama'];
      $_SESSION["uname"] = ucwords($row["username"]);

      // CEK remember
      if( isset($_POST['remember']) ){

          setcookie('id', $row['id_sa'], time() + 60);

          setcookie('key', hash('sha256', $row['username']), time() + 60);
      }

      header("Location: admin/sa.php?hal=");
      exit;
  }
}

  $error =  true;

}



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; SMK Mutu</title>
  <link rel="shortcut icon" href="assets/img/logo/<?= $w['favicon'] ?>" type="image/x-icon">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="admin/node_modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="admin/assets/css/style.css">
  <link rel="stylesheet" href="admin/assets/css/components.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="assets/img/SMK.png" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header">
                <h4>Login</h4>
              </div>
              <?php if(isset($_GET['msg'])) : ?>
              <div class="card-text">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Oops</strong> <?= $_GET['msg'] ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              </div>
              <?php endif; ?>
              <?php if(isset($error)) : ?>
              <div class="card-text">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Oops</strong> Username / Pass salah
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              </div>
              <?php endif; ?>

              <div class="card-body">
                <form method="POST" action="" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email">Username</label>
                    <input id="email" type="text" class="form-control" name="uname" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Masukan Username mu
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                      <!-- <div class="float-right">
                        <a href="auth-forgot-password.html" class="text-small">
                          Forgot Password?
                        </a>
                      </div> -->
                    </div>
                    <input id="password" type="password" class="form-control" name="pass" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" name="login" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>

              </div>
            </div>
            <!-- <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="">Create One</a>
            </div> -->
            <div class="simple-footer">
              Copyright &copy; SMK Mutu 2022
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="admin/assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="admin/assets/js/scripts.js"></script>
  <script src="admin/assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
</body>

</html>