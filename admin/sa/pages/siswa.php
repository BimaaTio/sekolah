<div class="section-header">
    <h1 class="text-dark">Siswa</h1>
    <div class="section-header-button">
        <a href="?hal=tambah-siswa" class="btn btn-outline-dark">Tambah</a>
    </div>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="?hal=">Home</a></div>
        <div class="breadcrumb-item">Siswa</div>
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
                    <div class="float-right">
                        
                            <div class="input-group">
                                <input type="text" id="key" class="form-control" placeholder="Search">
                                
                            </div>
                        </form>
                    </div>

                    <div class="clearfix mb-3"></div>
                    <div class="table-responsive" id="contain">
                        <table class="table table-striped">
                            <tr>
                                <th class="text-center pt-2">
                                    No
                                </th>
                                <th>Nama</th>
                                <th>NISN</th>
                                <th>JK</th>
                                <th>Jurusan</th>
                                <th>Foto Profil</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>IP</th>
                            </tr>
                            <?php  $admin = query("SELECT * FROM siswa"); $no = 1;?>
                            <?php
                             foreach ($admin as $j)  : ?>
                            <tr>
                                <td class="text-center"><?= $no++ ?></td>
                                <td><?= $j['nama'] ?>
                                    <div class="table-links">
                                        <a href="sa/hapus.php?ssw=<?= $j['id_siswa'] ?>" class="text-danger"
                                            onclick="return confirm('Yakin mau di hapus?')">Hapus</a>
                                    </div>
                                </td>
                                <td><?= $j['nisn'] ?></td>
                                <td><?= $j['jk'] ?></td>
                                <td><?= $j['jurusan'] ?></td>
                                <td>
                                    <img src="../assets/img/profil/<?= $j['foto_profile'] ?>" alt="" class="img-thumbnail" width="120"
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