<div class="section-header">
    <h1 class="text-dark">Prestasi</h1>
    <div class="section-header-button">
        <a href="?hal=tambah-prestasi" class="btn btn-outline-dark">Tambah</a>
    </div>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="?hal=">Home</a></div>
        <div class="breadcrumb-item">Prestasi</div>
    </div>
</div>
<div class="section-body">
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-dark">Semua Prestasi</h4>
                </div>
                <div class="card-body">
                    <div class="clearfix mb-3"></div>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th class="text-center pt-2">
                                    No
                                </th>
                                <th>Kejuaraan</th>
                                <th>Gambar</th>
                                <th>Peraih</th>
                                <th>Tgl Lomba</th>
                                <th>Kategori</th>
                            </tr>
                            <?php 
                            $prestasi = query("SELECT * FROM prestasi ORDER BY id_prestasi DESC");
                            $no =  1;
                            foreach ($prestasi as $p) :
                            ?>
                            <tr>
                                <td class="text-center"><?= $no++ ?></td>
                                <td><?= $p['nama_lomba'] ?>
                                    <div class="table-links">
                                        <a href="?hal=detail-prestasi&idp=<?= $p['id_prestasi'] ?>">Detail</a>
                                        <div class="bullet"></div>
                                        <a href="?hal=edit-prestasi&idp=<?= $p['id_prestasi'] ?>">Edit</a>
                                        <div class="bullet"></div>
                                        <a href="hapus.php?idp=<?= $p['id_prestasi'] ?>" class="text-danger"
                                            onclick="return confirm('Yakin mau di hapus?')">Hapus</a>
                                    </div>
                                </td>
                                <td>
                                    <img src="../assets/img/prestasi/<?= $p['gambar'] ?>" alt="" class="img-thumbnail" width="120"
                                        data-toggle="title" title="">
                                </td>
                                <td>
                                    <div class="d-inline-block ml-1"><?= $p['peraih'] ?></div>
                                </td>
                                <td><?= $p['tgl_lomba'] ?></td>
                                <td>
                                    <?php if($p['kategori'] == 'Akademik' ) : ?>
                                    <div class="badge badge-primary">Akademik</div>
                                    <?php endif;?>
                                    <?php if($p['kategori'] == 'Teknologi' ) : ?>
                                    <div class="badge badge-info">Teknologi</div>
                                    <?php endif;?>
                                    <?php if($p['kategori'] == 'Olahraga' ) : ?>
                                    <div class="badge badge-warning">Olahraga</div>
                                    <?php endif;?>
                                    <?php if($p['kategori'] == 'Seni' ) : ?>
                                    <div class="badge badge-success">Seni</div>
                                    <?php endif;?>
                                </td>
                            </tr>
                            <?php endforeach; ?>

                        </table>
                    </div>
                    <div class="float-right">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>