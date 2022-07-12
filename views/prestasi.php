<?php require '../core/functions.php' ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $w['nama_sekolah'] ?></title>
    <link rel="shortcut icon" href="../assets/img/logo/<?= $w['favicon'] ?>" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="../assets/css/style.css">

    <style>
        .list-unstyled {
            padding-left: 0;
            list-style: none;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <img src="../assets/img/logo/<?= $w['logo_sekolah'] ?>" alt="" style="width:70px; height:70px; margin:8px; box-sizing:border-box;">
            <a class="navbar-brand fw-bold" href="../"><?= $w['nama_sekolah'] ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-right" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto mb-2 mb-lg-0 fw-bold">
                    <a class="nav-link " aria-current="page" href="..">HOME</a>
                    <a class="nav-link " aria-current="page" href="all-berita.php">Berita</a>
                    <a class="nav-link " href="jurusan.php">Jurusan</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="visi-misi.php">Visi & Misi</a></li>
                            <li><a class="dropdown-item active" href="../#prestasi">Prestasi</a></li>
                            <li><a class="dropdown-item" href="../#kepala">Kepala Sekolah</a></li>
                        </ul>
                    </li>
                    <a class="nav-link" href="contact-info.php">Contact</a>
                    <a class="nav-link" href="https://ppdb-smkm1muntilan.online/">PPDB</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- END Navbar -->
    <div class="container">
        <div class="section-content-title">Jejak Prestasi</div>

        <div class="row justify-content-md-center">
            <div class="col-md-9">
                <div class="hero text-white hero-bg parralax w-100"
                    style="border-radius:5px 5px 0px 0px;background-image: linear-gradient(to right, #121113,#222725 );">
                    <div class="hero-inner">
                        <div class="row">
                            <div class="col-md-4 text-center mb-2 mt-2">
                                <h1><?= $hp3 ?></h1>
                                <p class="lead">Tingkat Provinsi</p>
                            </div>
                            <div class="col-md-4 text-center mb-2 mt-2">
                                <h1><?= $hp1 ?></h1>
                                <p class="lead">Tingkat Nasional</p>
                            </div>
                            <div class="col-md-4 text-center mb-2 mt-2">
                                <h1><?= $hp2 ?></h1>
                                <p class="lead">Tingkat Kabupaten</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <ul class="list-unstyled list-unstyled-border">
                            <?php 
                            $prestasi = mysqli_query($conn, "SELECT * FROM prestasi");
                            if( mysqli_num_rows($prestasi) > 0 ) :
                                while( $p = mysqli_fetch_assoc($prestasi) ) :
                            ?>
                            <li class="media mt-4">
                                <img src="../assets/img/prestasi/<?= $p['gambar'] ?>" alt="" class="me-3" width="70">
                                <div class="media-body">
                                    <div class="badge badge-secondary text-dark mb-1 float-right">Kategori :    <?= $p['kategori'] ?></div>
                                    <h6 class="media-title">
                                        <a href=""><?= $p['nama_lomba'] ?>
                                            <small class="text-muted"> <i
                                                    class="fas fa-map-pin m-r-5"></i><?= $p['tingkat_lomba'] ?></small>
                                        </a>
                                    </h6>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum, rem.</p>
                                    <div class="text-small text-muted">Peraih : <?= $p['peraih'] ?><div class="bullet">
                                        </div>
                                        <span class="text-primary"><?= $p['tgl_lomba'] ?></span>
                                    </div>
                                </div>
                            </li>
                            <?php endwhile; ?>
                            <?php else: ?>
                                Tidak ada data 
                            <?php endif; ?>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- bagian contact -->
    <div class="section-contact navbar-dark bg-dark" id="contact">
        <div class="logo">
        <img src="../assets/img/logo/<?= $w['logo_sekolah']?>" alt="" height="80px" width="80px" style="margin-bottom: 100px;">
        <div class="col">
            <h5><?= $w['nama_sekolah'] ?></h5>
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