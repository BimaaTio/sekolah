<?php 
$qb = mysqli_query($conn, "SELECT * FROM berita");
$qp = mysqli_query($conn, "SELECT * FROM prestasi");
$qj = mysqli_query($conn, "SELECT * FROM jurusan");

$hb  = mysqli_num_rows($qb);
$hp = mysqli_num_rows($qp);
$hj  = mysqli_num_rows($qj);


?>
<div class="section-header">
    <h1>Dashboard SMK Mutu</h1>
</div>
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <a href="?hal=berita">
            <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                    <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Berita</h4>
                    </div>
                    <div class="card-body">
                       <?= $hb ?>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <a href="?hal=prestasi">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="fas fa-trophy"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Prestasi</h4>
                    </div>
                    <div class="card-body">
                        <?= $hp ?>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <a href="?hal=jurusan">
            <div class="card card-statistic-1">
                <div class="card-icon bg-info">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Jurusan</h4>
                    </div>
                    <div class="card-body">
                        <?= $hj ?>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <a href="?hal=setting">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="fas fa-cog"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Setting</h4>
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </a>
    </div>
</div>