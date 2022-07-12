<?php
if( isset($_POST['submit']) ) {
    if( editAdm($_POST) > 0 ) {
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
$p = query("SELECT * FROM admin WHERE id_admin = $id")[0];
?>
<div class="section-header">
    <h1 class="text-dark">Edit Profil</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="?hal=">Home</a></div>
        <div class="breadcrumb-item">Kepala Sekolah</div>
    </div>
</div>
<div class="section-body">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <input type="hidden" name="id" value="<?= $p['id_admin '] ?>">
            <input type="hidden" name="profilLama" value="<?= $p['foto_profil'] ?>">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-dark">Edit Admin</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="nama" class="form-control" value="<?= $p['nama'] ?>">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Username</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="uname" class="form-control" value="<?= $p['username'] ?>">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="email" name="email" class="form-control" value="<?= $p['email'] ?>">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Profil</label>
                            <div class="col-sm-12 col-md-7">
                                <!-- <label for="image-upload" id="image-label" class="form-control-file">Choose File</label> -->
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