<?php require '../core/functions.php';?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $w['nama_sekolah'] ?></title>
    <link rel="shortcut icon" href="../assets/img/about/<?= $w['favicon'] ?>" type="image/x-icon">

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
                    <a class="nav-link active" href="#">Berita</a>
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
    <section>
        <div class="container">
            <p class="h2 mt-2 text-center">Berita Terbaru</p>
            <hr>
            <div class="row row-cols-1 row-cols-md-3 mt-3 g-4">
                <?php 
                $recent = mysqli_query($conn, "SELECT * FROM berita WHERE status = 'Publish' ORDER BY id_berita ASC LIMIT 0, 3");
                if( mysqli_num_rows($recent) > 0 ) :
                    while( $r = mysqli_fetch_assoc($recent) ) :
                ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="../assets/img/berita/<?= $r['gambar'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $r['judul'] ?></h5>
                            <p class="card-text"><?= substr($r['konten'],0,-10) ?><a href="detail-berita.php?nb=<?= $r['id_berita'] ?>">
                                    -
                                    selengkapnya</a></p>
                            <span>
                                <p class="card-text text-end"><small class="text-muted">Upload By :
                                        <?= $r['penulis'] ?></small></p>
                            </span>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"><?= $r['tgl_edit'] ?></small>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php else: ?>
                    Tidak Ada data
                <?php endif; ?>
                
                <hr>
                <br><br>
                <p class="h2 mt-2 text-center">Semua Berita</p>
                <hr>
                <?php 
                $jmlDataPerHal = 6;
                $jmlPost = count(query("SELECT * FROM berita WHERE status = 'Publish'"));
                $jmlHal = ceil($jmlPost / $jmlDataPerHal);
                $halAktif = (isset($_GET['b'])) ? $_GET['b'] : 1;
                $awalData = ($jmlDataPerHal * $halAktif) - $jmlDataPerHal;
                $berita = mysqli_query($conn, "SELECT * FROM berita WHERE status = 'Publish' ORDER BY id_berita DESC LIMIT $awalData, $jmlDataPerHal");
                    if( mysqli_num_rows($berita) > 0 ) :
                        while( $ab = mysqli_fetch_assoc($berita) ) :
                ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="../assets/img/berita/<?= $ab['gambar'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $ab['judul'] ?></h5>
                            <p class="card-text"><?= substr($ab['konten'],0,-10) ?> <a href="#"> -
                                    selengkapnya</a></p>
                            <span>
                                <p class="card-text text-end"><small class="text-muted">Upload By :
                                        <?= $ab['penulis'] ?></small></p>
                            </span>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"><?= $ab['tgl_edit'] ?></small>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php else :?>
                    Tidak ada data
                <?php endif; ?>

            </div>
        </div>
    </section>
    <br>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <?php if ($halAktif > 1) : ?>
            <li class="page-item">
                <a class="page-link" href="?b=<?= $halAktif - 1 ?>" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <?php endif; ?>
            <?php for ($i = 1; $i <= $jmlHal; $i++) : ?>
            <?php if ($i == $halAktif) : ?>
            <li class="page-item active"><a class="page-link" href="?b=<?= $i ?>"><?= $i ?></a></li>
            <?php else : ?>
            <li class="page-item"><a class="page-link " href="?b=<?= $i ?>"><?= $i ?></a></li>
            <?php endif; ?>
            <?php endfor; ?>
            <?php if ($halAktif < $jmlHal) : ?>
            <li class="page-item">
                <a class="page-link" href="?b=<?= $halAktif + 1 ?> ">Next</a>
            </li>
            <?php endif; ?>
        </ul>
    </nav>
    <br>


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