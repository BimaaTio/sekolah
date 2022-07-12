<?php require '../core/functions.php';
$id = $_GET['nb'];
$db = query("SELECT * FROM berita WHERE id_berita = $id ")[0];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMK Mutu MTL</title>
    <link rel="shortcut icon" href="../assets/img/SMK.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body">
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
                    <a class="nav-link active" aria-current="page" href="all-berita.php">BERITA</a>
                    <a class="nav-link " href="jurusan.php">Jurusan</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="visi-misi.php">Visi & Misi</a></li>
                            <li><a class="dropdown-item" href="prestasi.php">Prestasi</a></li>
                            <li><a class="dropdown-item" href="../#kepala">Kepala Sekolah</a></li>
                        </ul>
                    </li>
                    <a class="nav-link " href="contact-info.php">Contact</a>
                    <a class="nav-link" href="https://ppdb-smkm1muntilan.online/">PPDB</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- END Navbar -->
    <div class="container mt-4">
        <div class="row">
            <br>
            <br>
            <div class="card mt-4">
                <img src="../assets/img/berita/<?= $db['gambar'] ?>" class="card-img-top" alt="..." width="18rem">
                <div class="card-body">
                    <h5 class="card-title"><?= $db['judul'] ?></h5>
                    <p class="card-text"><?= $db['konten'] ?></p>
                    <p class="card-text"><small class="text-muted"><?= $db['tgl_edit'] ?></small></p>
                    <span>
                        <p class="card-text text-end"><small class="text-muted">Upload By :
                                <?= $db['penulis'] ?></small></p>
                    </span>
                    <span>
                        <small class="card-text text-start"><a href="all-berita.php">Back</a></small>
                    </span>
                </div>
            </div>
        </div>
    </div><br><br>

    <!-- bagian contact -->
    <div class="section-contact navbar-dark bg-dark" id="contact">
        <div class="logo">
            <img src="../assets/img/SMK.png" alt="" height="80px" width="80px" style="margin-bottom: 100px;">
            <h5>SMK Muhammadiyah 1 Muntilan</h5>
            <p>JALAN KHA DAHLAN GATAK GAMOL,
                MUNTILAN, MAGELANG, JAWA TENGAH (56413)</p>
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