<?php 
$id = $_GET['idp'];
$dt = query("SELECT * FROM prestasi WHERE id_prestasi = $id")[0];
?>
<div class="section-header">
    <div class="section-header-back">
        <a href="?hal=prestasi" class="btn btn-icon btn-outline-dark"><i class="fas fa-arrow-left"></i></a>
    </div>
    <h1>Detail Prestasi</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="?hal=">Home</a></div>
        <div class="breadcrumb-item"><a href="?hal=berita">Semua Prestasi</a></div>
        <div class="breadcrumb-item">Detail Prestasi</div>
    </div>
</div>
<div class="section-body">

    <div class="row">
        <div class="col col-md">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <img class="mr-3" src="../assets/img/prestasi/<?= $dt['gambar'] ?>" width="350"
                            alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0"><?= $dt['nama_lomba'] ?></h5>
                            <p class="h6 mt-4">Peraih : <?= $dt['peraih'] ?></p>
                            <p class="h6 mt-4">Kategori : <?= $dt['kategori'] ?></p>
                            <p class="h6 mt-4">Tingkat : <?= $dt['tingkat_lomba'] ?></p>
                            <p class="h6 mt-4 mb-0">Juara  : <?= $dt['juara'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>