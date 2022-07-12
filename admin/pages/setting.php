<?php 
if( isset($_POST['submit']) ) {
    if( setting($_POST) > 0 ) {
        echo "
        <script>
            alert('Data berhasil diubah');
            document.location.href = '?hal=setting';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data gagal diubah');
            document.location.href = '?hal=setting';
        </script>
        ";
    }
}

$about = query("SELECT * FROM about")[0];
?>

<div class="section-header">
    <h1 class="text-dark">Setting</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="?hal=">Home</a></div>
        <div class="breadcrumb-item">Setting</div>
    </div>
</div>
<div class="section-body">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <input type="hidden" name="favLama" value="<?= $about['favicon'] ?>">
            <input type="hidden" name="logoLama" value="<?= $about['logo_sekolah'] ?>">
            <input type="hidden" name="slideLama" value="<?= $about['slide1'] ?>">
            <input type="hidden" name="slide2Lama" value="<?= $about['slide2'] ?>">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-dark">Pengaturan Website</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Sekolah</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="nama" class="form-control" value="<?= $about['nama_sekolah'] ?>">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Visi</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea name="visi" class="summernote-simple"><?= $about['visi'] ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Misi</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea name="misi" class="summernote-simple"><?= $about['misi'] ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tujuan</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea name="tujuan" class="summernote-simple"><?= $about['tujuan'] ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea name="deskripsi" class="summernote-simple"><?= $about['tentang_sekolah'] ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="alamat" class="form-control inputtags" value="<?= $about['alamat'] ?>">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="email" class="form-control inputtags" value="<?= $about['email'] ?>">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Telp</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="telp" class="form-control inputtags" value="<?= $about['telepon'] ?>">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Favicon</label>
                            <div class="col-sm-12 col-md-7">
                                <!-- <label for="image-upload" id="image-label" class="form-control-file">Choose File</label> -->
                                <img src="../assets/img/about/<?= $about['favicon'] ?>" alt="" class="img-thumbnail" width="40">
                                <input type="file" name="favicon" id="image-upload" />
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Logo</label>
                            <div class="col-sm-12 col-md-7">
                                <!-- <label for="image-upload" id="image-label" class="form-control-file">Choose File</label> -->
                                <img src="../assets/img/logo/<?= $about['logo_sekolah'] ?>" alt="" class="img-thumbnail" width="70">
                                <input type="file" name="logo" id="image-upload" />
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