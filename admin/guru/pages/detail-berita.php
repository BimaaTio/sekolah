<?php
$id = $_GET['idb'];
$dt = query("SELECT * FROM berita WHERE id_berita = $id ")[0];

?>
<div class="section-header">
    <div class="section-header-back">
        <a href="?hal=berita" class="btn btn-icon btn-outline-dark"><i class="fas fa-arrow-left"></i></a>
    </div>
    <h1>Detail Berita</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="?hal=">Home</a></div>
        <div class="breadcrumb-item"><a href="?hal=berita">Semua Berita</a></div>
        <div class="breadcrumb-item">Detail Berita</div>
    </div>
</div>

<div class="section-body">
    <h2 class="section-title">Detail Berita</h2>

    <div class="row">
        <div class="col col-md">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <img class="mr-3" src="../assets/img/berita/<?= $dt['gambar'] ?>" width="350"
                            alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0"><?= $dt['judul'] ?></h5>
                            <p class="mb-0"><?= $dt['konten'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>