<?php 
if( isset($_POST['submit']) ) {
    if( kepsek($_POST) > 0 ) {
        echo "
        <script>
            alert('Data berhasil diubah');
            document.location.href = '?hal=kepsek';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data gagal diubah');
            document.location.href = '?hal=kepsek';
        </script>
        ";
    }
}

$about = query("SELECT * FROM about")[0];
?>
<div class="section-header">
    <h1 class="text-dark">Kepala Sekolah</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="?hal=">Home</a></div>
        <div class="breadcrumb-item">Kepala Sekolah</div>
    </div>
</div>
<div class="section-body">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <input type="hidden" name="profilLama" value="<?= $about['foto_kepsek'] ?>">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-dark">Kepala Sekolah</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Kepsek</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="nama" class="form-control" value="<?= $about['nama_kepsek'] ?>">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Sambutan</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea name="sambutan" class="summernote-simple"><?= $about['sambutan_kepsek'] ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Profil</label>
                            <div class="col-sm-12 col-md-7">
                                <!-- <label for="image-upload" id="image-label" class="form-control-file">Choose File</label> -->
                                <img src="../assets/img/profil/<?= $about['foto_kepsek'] ?>" alt="" class="img-thumbnail" width="40">
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