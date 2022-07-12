<?php 
session_start();
require '../core/functions.php';
if (!isset($_SESSION["admin"])) {
    echo "<script>window.location = '../login.php?msg=Login Terlebih Dahulu!'</script>";
    exit;
  }
  $profil = query("SELECT * FROM admin")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>SMK Mutu &mdash; Dashboard</title>
  <link rel="shortcut icon" href="../assets/img/logo/<?= $w['favicon'] ?>" type="image/x-icon">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

   <!-- CSS Libraries -->
   <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg bg-dark"></div>
      <nav class="navbar navbar-expand-lg main-navbar navbar-dark bg-dark">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <!-- <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li> -->
          </ul>
          
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="../assets/img/profil/<?= $profil['foto_profil'] ?>" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, <?= $_SESSION['uname'] ?> 👋</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="?hal=acc&id=<?= $_SESSION['uid'] ?>" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="?hal=reset&id=<?= $_SESSION['uid'] ?>" class="dropdown-item has-icon">
                <i class="fa fa-lock"></i> Reset Password
              </a>
              <div class="dropdown-divider"></div>
              <a href="logout.php" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="../">SMK Mutu MTL</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="../">Mutu</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li><a class="nav-link" href="?hal="><i class="fas fa-fire"></i> <span>Home</span></a></li>
              <li class="menu-header">Menu</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Halaman</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="?hal=berita">Berita</a></li>
                  <li><a class="nav-link" href="?hal=prestasi">Prestasi</a></li>
                  <li><a class="nav-link" href="?hal=jurusan">Jurusan</a></li>
                  <!-- <li><a class="nav-link" href="layout-top-navigation.html"></a></li> -->
                </ul>
              </li>
              <li class=""><a class="nav-link" href="?hal=kepsek"><i class="fas fa-user"></i> <span>Kepala Sekolah</span></a></li>
              <li class=""><a class="nav-link" href="?hal=setting"><i class="fas fa-cog"></i> <span>Setting</span></a></li>
              
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <?php include 'config.php'?>
        </section>
      </div>
      
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2022 <div class="bullet"></div>  <a href="../">SMK Mutu Muntilan</a>
        </div>
        <div class="footer-right">
          Powered By Stisla
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="plugins/summernote/summernote-bs4.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script type="text/javascript" src="../assets/js/script.js"></script>
</body>
</html>
