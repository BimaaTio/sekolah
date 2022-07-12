<?php 
$qb = mysqli_query($conn, "SELECT * FROM berita");
$hb = mysqli_num_rows($qb);
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
</div>