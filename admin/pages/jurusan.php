<div class="section-header">
    <h1 class="text-dark">Jurusan</h1>
    <div class="section-header-button">
        <a href="?hal=tambah-jurusan" class="btn btn-outline-dark">Tambah</a>
    </div>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="?hal=">Home</a></div>
        <div class="breadcrumb-item">Jurusan</div>
    </div>
</div>
<div class="section-body">
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <!-- <div class="card-header">
                    <h4 class="text-dark">Jurusan</h4>
                </div> -->
                <div class="card-body">
                    <div class="clearfix mb-3"></div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th class="text-center pt-2">
                                    No
                                </th>
                                <th>Nama</th>
                                <th>Logo</th>
                                <th>Keterangan</th>
                            </tr>
                            <?php  $jurusan = query("SELECT * FROM jurusan"); $no = 1;?>
                            <?php
                             foreach ($jurusan as $j)  : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $j['nama'] ?>
                                    <div class="table-links">
                                        <a href="?hal=edit-jurusan&idj=<?= $j['id_jurusan'] ?>">Edit</a>
                                        <div class="bullet"></div>
                                        <a href="hapus.php?idj=<?= $j['id_jurusan'] ?>" class="text-danger"
                                            onclick="return confirm('Yakin mau di hapus?')">Hapus</a>
                                    </div>
                                </td>
                                <td>
                                    <img src="../assets/img/logo/<?= $j['logo'] ?>" alt="" class="img-thumbnail" width="120"
                                        data-toggle="title" title="">
                                </td>
                                <td>
                                    <p><?= $j['keterangan'] ?></p>
                                </td>
                            </tr>
                            <?php endforeach; ?>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>