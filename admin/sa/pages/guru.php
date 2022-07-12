<div class="section-header">
    <h1 class="text-dark">Akun Guru</h1>
    <div class="section-header-button">
        <a href="?hal=tambah-admin" class="btn btn-outline-dark">Tambah</a>
    </div>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="?hal=">Home</a></div>
        <div class="breadcrumb-item">Akun Guru</div>
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
                                <th>NIP</th>
                                <th>JK</th>
                                <th>Tupoksi</th>
                                <th>Foto Profil</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>IP</th>
                            </tr>
                            <?php  $admin = query("SELECT * FROM guru"); $no = 1;?>
                            <?php
                             foreach ($admin as $j)  : ?>
                            <tr>
                                <td class="text-center"><?= $no++ ?></td>
                                <td><?= $j['nama'] ?>
                                    <div class="table-links">
                                        <a href="sa/hapus.php?guru=<?= $j['id_guru'] ?>" class="text-danger"
                                            onclick="return confirm('Yakin mau di hapus?')">Hapus</a>
                                    </div>
                                </td>
                                <td><?= $j['nip'] ?></td>
                                <td><?= $j['jk'] ?></td>
                                <td><?= $j['tupoksi'] ?></td>
                                <td>
                                    <img src="../assets/img/profil/<?= $j['foto_profil'] ?>" alt="" class="img-thumbnail" width="120"
                                        data-toggle="title" title="">
                                </td>
                                <td><?= $j['email'] ?></td>
                                <td>
                                    <p><?= $j['username'] ?></p>
                                </td>
                                <td><?= $j['ip'] ?></td>
                            </tr>
                            <?php endforeach; ?>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>