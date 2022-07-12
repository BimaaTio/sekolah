<?php 
if( isset($_POST['submit']) ) {
    if( addJurusan($_POST) > 0 ) {
        echo "
        <script>
            alert('Data berhasil ditambah');
            document.location.href = '?hal=jurusan';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data gagal ditambah');
            document.location.href = '?hal=tambah-jurusan';
        </script>
        ";
    }
}

?>
<div class="section-header">
    <div class="section-header-back">
        <a href="?hal=berita" class="btn btn-icon btn-outline-dark"><i class="fas fa-arrow-left"></i></a>
    </div>
    <h1>Tambah Jurusan</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="?hal=">Home</a></div>
        <div class="breadcrumb-item"><a href="?hal=jurusan">Jurusan</a></div>
        <div class="breadcrumb-item">Tambah Jurusan</div>
    </div>
</div>
<div class="section-body">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Jurusan</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="nama" class="form-control">
                            </div>
                        </div>
                        <!-- <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Penulis</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="penulis" class="form-control inputtags">
                            </div>
                        </div> -->
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Keterangan</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea name="keterangan" class="summernote-simple"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Logo</label>
                            <div class="col-sm-12 col-md-7">
                                <div id="image-preview" class="image-preview">
                                    <label for="image-upload" id="image-label">Choose File</label>
                                    <input type="file" name="logo" id="image-upload" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button type="submit" name="submit" class="btn btn-outline-dark">Tambah</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>