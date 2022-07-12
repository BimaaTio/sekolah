<?php 
if( isset($_POST['submit']) ) {
    if( editJurusan($_POST) > 0 ) {
        echo "
        <script>
            alert('Data berhasil diubah');
            document.location.href = '?hal=jurusan';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data gagal diubah');
            document.location.href = '?hal=edit-jurusan';
        </script>
        ";
    }
}


$id = $_GET['idj'];
$ej = query("SELECT * FROM jurusan WHERE id_jurusan = $id")[0];

?>

<div class="section-header">
    <div class="section-header-back">
        <a href="?hal=jurusan" class="btn btn-icon btn-outline-dark"><i class="fas fa-arrow-left"></i></a>
    </div>
    <h1>Edit Jurusan</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="?hal=">Home</a></div>
        <div class="breadcrumb-item"><a href="?hal=jurusan">Jurusan</a></div>
        <div class="breadcrumb-item">Edit Jurusan</div>
    </div>
</div>
<div class="section-body">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <input type="hidden" name="id" value="<?= $ej['id_jurusan'] ?>">
            <input type="hidden" name="logoLama" value="<?= $ej['logo'] ?>">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Jurusan</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="nama" class="form-control" value="<?= $ej['nama'] ?>">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Keterangan</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea name="keterangan"
                                    class="summernote-simple"><?= $ej['keterangan'] ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Logo</label>
                            <div class="col-sm-12 col-md-7">
                                <div id="image-preview" class="image-preview">
                                    <img src="../assets/img/logo/<?= $ej['logo'] ?>" width="100%" class="image-preview"
                                        alt="">
                                    <label for="image-upload" id="image-label">Choose File</label>
                                    <input type="file" name="logo" id="image-upload" />
                                </div>
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