<?php 
$qsa = mysqli_query($conn, "SELECT * FROM sa");
$hsa = mysqli_num_rows($qsa);

$qb = mysqli_query($conn, "SELECT * FROM admin");
$hb = mysqli_num_rows($qb);

$qg = mysqli_query($conn, "SELECT * FROM guru");
$hg = mysqli_num_rows($qg);

$qs = mysqli_query($conn, "SELECT * FROM siswa");
$hs = mysqli_num_rows($qs);
?>
<div class="section-header">
    <h1>Dashboard SMK Mutu</h1>
</div>
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <a href="?hal=super">
            <div class="card card-statistic-1">
                <div class="card-icon bg-dark">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Super Admin</h4>
                    </div>
                    <div class="card-body">
                        <?= $hsa ?>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <a href="?hal=admin">
            <div class="card card-statistic-1">
                <div class="card-icon bg-info">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Admin</h4>
                    </div>
                    <div class="card-body">
                        <?= $hb ?>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <a href="?hal=guru">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Guru</h4>
                    </div>
                    <div class="card-body">
                        <?= $hg ?>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <a href="?hal=siswa">
            <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Siswa</h4>
                    </div>
                    <div class="card-body">
                        <?= $hs ?>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>