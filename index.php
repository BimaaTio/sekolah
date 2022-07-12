<?php require 'core/functions.php';?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $w['nama_sekolah'] ?></title>
    <link rel="shortcut icon" href="assets/img/logo/<?= $w['favicon'] ?>" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <img src="assets/img/logo/<?= $w['logo_sekolah'] ?>" alt="" style="width:70px; height:70px; margin:8px; box-sizing:border-box;">
            <a class="navbar-brand fw-bold" href="index"><?= $w['nama_sekolah'] ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-right" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto mb-2 mb-lg-0 fw-bold">
                    <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                    <a class="nav-link" href="views/all-berita.php">Berita</a>
                    <a class="nav-link" href="views/jurusan.php">Jurusan</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="views/visi-misi.php">Visi & Misi</a></li>
                            <li><a class="dropdown-item" href="views/prestasi.php">Prestasi</a></li>
                            <li><a class="dropdown-item" href="#kepala">Kepala Sekolah</a></li>
                        </ul>
                    </li>
                    <a class="nav-link" href="views/contact-info.php">Contact</a>
                    <a class="nav-link" href="https://ppdb-smkm1muntilan.online/">PPDB</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- END Navbar -->


    <!-- Content -->

    <!-- Carrousel -->
    <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/about/<?= $w['slide1'] ?>" class="d-block w-100" alt="SLIDE 1">
                <div class="carousel-caption d-none d-md-block text-light">
                    <p>Selamat Datang di SMK Muhammadiyah 1 Muntilan</p>
                    <p>Jangan Lupa Pakai Masker</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/about/<?= $w['slide2'] ?>" class="d-block w-100" alt="SLIDE 2">
                <div class="carousel-caption d-none d-md-block text-light">
                    <p>Selamat Datang di SMK Muhammadiyah 1 Muntilan</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- End Carousel -->

    <!-- Sambutan Kepsek -->
    <div class="section-kepsek mt-4">
        <div class="container-kepsek text-center">
            <h3 id="kepala">Sambutan Kepala Sekolah</h3>
            <img src="assets/img/profil/<?= $w['foto_kepsek'] ?>" alt="" width="300px">
            <h4><?= $w['nama_kepsek'] ?></h4>
            <p><?= $w['sambutan_kepsek'] ?></p>

        </div>
    </div>
    <!-- End Sambutan -->

    <!-- Prestasi -->
    <section class="mt-4" id="prestasi">
        <div class="section-body section-awards">
            <div class="hero text-white hero-bg-image hero-bg-parallax hero-awards"
                style="background-image: url('https://ppdb-smkm1muntilan.online/wp-content/uploads/2020/10/WhatsApp-1.jpeg');background-size: cover;">
                <div class="hero-inner">
                    <div class="container">
                        <div class="section-content-title  text-center mb-4">
                            <h5>JEJAK PRESTASI</h5>
                        </div>
                        <div class="row ">
                            <div class="col-md-4 text-center mt-3 col-award level-provinsi">
                                <div>
                                    <h1><?= $hp3 ?></h1>
                                    <p class="lead">Prestasi Tingkat Provinsi</p>
                                </div>
                            </div>
                            <div class="col-md-4 text-center mt-3 col-award level-nasional">
                                <div>
                                    <h1><?= $hp1 ?></h1>
                                    <p class="lead">Prestasi Tingkat Nasional</p>
                                </div>
                            </div>
                            <div class="col-md-4 text-center mt-3 col-award level-kabupaten">
                                <div>
                                    <h1><?= $hp2 ?></h1>
                                    <p class="lead">Prestasi Tingkat Kabupaten</p>
                                </div>
                            </div>
                            <div class="col-md-12 text-center m-t-40 pt-3 mt-3">
                                <a href="views/prestasi.php"
                                    class="btn btn-outline-dark btn-lg btn-icon icon-left mt-3"><i
                                        class="m-r-5 fa fa-chevron-right"></i> Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Prestasi -->

    <!-- Berita -->
    <section class="mt-4" id="berita">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col">
                    <h3 style="font-family: viga;">Warta Sekolah</h3>
                </div>
                <div class="row row-cols-1 row-cols-md-3 mt-4 g-4">
                    <?php 
                    $berita = mysqli_query($conn, "SELECT * FROM berita WHERE status = 'Publish' ORDER BY id_berita ASC LIMIT 0,3 ");
                    if(mysqli_num_rows($berita) > 0 ) :
                        while($b = mysqli_fetch_assoc($berita)) :
                    ?>
                    <div class="col">
                        <div class="card h-100">
                            <img src="assets/img/berita/<?= $b['gambar'] ?>" class="card-img-top" alt="Project 1" width="100">
                            <div class="card-body">
                                <h6 class="card-title"><?= $b['judul'] ?></h6>
                                <p class="card-text"><?= substr($b['konten'],0, -10) ?><a href="#"> -Lebih
                                        detail</a></p>
                            </div>
                            <div class="card-footer text-muted"><small class="text-muted"><?= $b['tgl_edit'] ?></small>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php else : ?>
                        Tidak ada Berita
                    <?php endif; ?>
                </div>
                <a href="views/all-berita.php" class="text-start mt-2">Semua Berita</a>
            </div>
        </div>
    </section>
    <!-- End Berita -->



    <!-- bagian contact -->
    <div class="section-contact navbar-dark bg-dark" id="contact">
        <div class="logo">
            <img src="assets/img/logo/<?= $w['logo_sekolah']?>" alt="" height="80px" width="80px" style="margin-bottom: 100px;">
            <h5><?= $w['nama_sekolah'] ?></h5>
            <div class="col">
            <!-- <p><?= $w['tentang_sekolah'] ?></p> -->
            <p><?= $w['alamat'] ?></p>
            <p>Email : <?= $w['email'] ?></p>
            <p>Telp : <?= $w['telepon'] ?></p>
            </div>
        </div>
        <ul>
            <li><a href="https://instagram.com/smkmuhammadiyah1muntilan?utm_medium=copy_link"><i
                        class="fab fa-instagram" style="font-size: 30px; color: white;"></i></a></li>
            <li><a href="#" class="fb"><i class="fab fa-twitter-square" style="font-size: 30px; color: white;"></i></a>
            </li>
            <li><a href="#" class="ig"><i class="fab fa-facebook-square"
                        style="font-size: 30px; color: white; "></i></a>
            </li>
        </ul>

    </div>
    </div>
    <!-- bagian footer -->
    <footer class="bg-dark navbar-dark text-light" style="padding: 30px">
        <div class="container text-center">
            Copyright &copy;2021 - SMK MUH 1 MUNTILAN
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    </body>

</html>