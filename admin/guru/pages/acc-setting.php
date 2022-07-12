<?php
if( isset($_POST['submit']) ) {
    if( editGuru($_POST) > 0 ) {
        echo "
        <script>
            alert('Data berhasil diubah');
            document.location.href = '?hal=acc';
        </script>
        ";
    } else {
        echo mysqli_error($conn);
    }
}

$id = $_SESSION['uid'];
$p = query("SELECT * FROM guru WHERE id_guru = $id")[0];
?>
<div class="section-header">
    <h1 class="text-dark">Edit Profil</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="?hal=">Home</a></div>
        <div class="breadcrumb-item">Edit Akun</div>
    </div>
</div>
<div class="section-body">
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $_SESSION['uid'] ?>">
        <input type="hidden" name="profilLama" value="<?= $p['foto_profil'] ?>">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="nama" class="form-control" required value="<?= $p['nama'] ?>">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NIP</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="nip" class="form-control" required value="<?= $p['nip'] ?>">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tugas Pokok</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="tpk" class="form-control" required value="<?= $p['tupoksi'] ?>">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Username</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="uname" class="form-control inputtags" value="<?= $p['username'] ?>" required>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="email" class="form-control inputtags" value="<?= $p['email'] ?>" required>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Kelamin</label>
                            <div class="col-sm-12 col-md-7">
                                <select name="jk" class="form-control selectric">
                                    <option value="<?= $p['jk'] ?>"><?= $p['jk'] ?></option>
                                    <option>Laki - Laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Profil</label>
                            <div class="col-sm-12 col-md-7">
                                <img src="../assets/img/profil/<?= $p['foto_profil'] ?>" alt="" class="img-thumbnail" width="40">
                                <input type="file" name="profil" id="image-upload" />
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button type="submit" name="submit" class="btn btn-outline-dark">Ubah</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>