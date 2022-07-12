<div class="section-header">
    <h1 class="text-dark">Berita</h1>
    <div class="section-header-button">
        <a href="?hal=tambah-berita" class="btn btn-outline-dark">Tambah</a>
    </div>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="?hal=">Home</a></div>
        <div class="breadcrumb-item">Semua Berita</div>
    </div>
</div>
<div class="section-body">
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-dark">Semua Berita</h4>
                </div>
                <div class="card-body">
                    <div class="float-right">
                        <form method="post">
                            <div class="input-group">
                                <input type="text" class="form-control" id="key" placeholder="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-dark" id="cari" type="submit" name="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="clearfix mb-3"></div>
                    <div class="table-responsive" id="container">
                        <table class="table table-striped">
                            <tr>
                                <th class="text-center pt-2">
                                    No
                                </th>
                                <th>Judul</th>
                                <th>Gambar</th>
                                <th>Penulis</th>
                                <th>Tgl Upload</th>
                                <th>Status</th>
                            </tr>
                            <?php
                           $jmlDataPerHal = 10;
                           $jmlPost = count(query("SELECT * FROM berita"));
                           $jmlHal = ceil($jmlPost / $jmlDataPerHal);
                           $halAktif = (isset($_GET['b'])) ? $_GET['b'] : 1;
                           $awalData = ($jmlDataPerHal * $halAktif) - $jmlDataPerHal;
                           $berita = mysqli_query($conn, "SELECT * FROM berita ORDER BY id_berita DESC LIMIT $awalData, $jmlDataPerHal");
                            $no = 1;

                            foreach ($berita as $b) :
                            ?>
                            <tr>
                            
                                <td><?= $no++ ?></td>
                                <td><?= $b['judul'] ?>
                                    <div class="table-links">
                                        <a href="?hal=detail-berita&idb=<?= $b['id_berita'] ?>">Detail</a>
                                        <div class="bullet"></div>
                                        <a href="?hal=edit-berita&idb=<?= $b['id_berita'] ?>">Edit</a>
                                        <div class="bullet"></div>
                                        <a href="hapus.php?idb=<?= $b['id_berita'] ?>" class="text-danger"  onclick="return confirm('Yakin mau di hapus?')">Hapus</a>
                                    </div>
                                </td>
                                <td>
                                    <img src="../assets/img/berita/<?= $b['gambar'] ?>" alt="" class="img-thumbnail" width="120" data-toggle="title" title="">
                                </td>
                                <td>
                                    <a href="#">
                                        <img alt="image" src="../assets/img/profil/<?= $profil['foto_profil'] ?>" class="rounded-circle"
                                            width="35" data-toggle="title" title="">
                                        <div class="d-inline-block ml-1"><?= $b['penulis'] ?></div>
                                    </a>
                                </td>
                                <td>
                                    <?php if($b['tgl_edit'] == '' ) : echo '-' ?>
                                    <?php else :?>
                                    <?= $b['tgl_edit'] ?>
                                    <?php endif; ?>
                                </td>   
                                <td>
                                    <?php if($b['status'] == 'Publish') :?>
                                    <div class="badge badge-primary">Published</div>
                                    <?php else :?>
                                    <div class="badge badge-warning">Pending</div>
                                    <?php endif;?>
                                </td>
                            </tr>
                            
                            <?php endforeach; ?>
                        </table>
                    </div>
                    <div class="float-right">
                        <nav>
                            <ul class="pagination">
                            <?php if ($halAktif > 1) : ?>
                                <li class="page-item">
                                    <a class="page-link" href="?hal=berita&b=<?= $halAktif - 1 ?>" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php for ($i = 1; $i <= $jmlHal; $i++) : ?>
                            <?php if ($i == $halAktif) : ?>
                                <li class="page-item active">
                                    <a class="page-link" href="?hal=berita&b=<?= $i ?>"><?= $i ?></a>
                                </li>
                            <?php else : ?>
                                <li class="page-item">
                                    <a class="page-link" href="?hal=berita&b=<?= $i ?>"><?= $i ?></a>
                                </li>
                            <?php endif; ?>
                            <?php endfor; ?>
                            <?php if ($halAktif < $jmlHal) : ?>
                                <li class="page-item">
                                    <a class="page-link" href="?hal=berita&b=<?= $halAktif + 1 ?>" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            <?php endif; ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>