<?php
if( isset($_POST['submit']) ) {
    if( resPassSa($_POST) > 0 ) {
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
$p = query("SELECT * FROM sa WHERE id_sa = $id")[0];
?>
<div class="section-header">
    <h1 class="text-dark">Reset Password</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="?hal=">Home</a></div>
        <div class="breadcrumb-item">Ganti Password</div>
    </div>
</div>
<div class="section-body">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <input type="hidden" name="id" value="<?= $p['id_sa'] ?>">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-dark">Reset Password</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password baru</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="password" name="pass" placeholder="Password Baru" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Konfirmasi Password baru</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="password" name="pass2" placeholder="Konfirmasi Password baru" class="form-control" required>
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