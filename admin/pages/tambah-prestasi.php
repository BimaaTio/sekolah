<?php 
if( isset($_POST['submit']) ) {
    if( addPrestasi($_POST) > 0 ) {
        echo "
        <script>
            alert('Data berhasil ditambah');
            document.location.href = '?hal=prestasi';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data gagal ditambah');
            document.location.href = '?hal=tambah-prestasi';
        </script>
        ";
    }
}

?>

<div class="section-header">
    <div class="section-header-back">
        <a href="?hal=prestasi" class="btn btn-icon btn-outline-dark"><i class="fas fa-arrow-left"></i></a>
    </div>
    <h1>Tambah Prestasi</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="?hal=">Home</a></div>
        <div class="breadcrumb-item"><a href="?hal=prestasi">Semua Prestasi</a></div>
        <div class="breadcrumb-item">Tambah Prestasi</div>
    </div>
</div>
<div class="section-body">
    <form action="" method="post" enctype="multipart/form-data">
    <div class="row">
        
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-dark">Tambah Prestasi</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Lomba</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="lomba" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Peraih</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="peraih" class="form-control inputtags">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Juara ke</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="juara" class="form-control inputtags">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tgl Lomba</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="date" name="tgl_lomba" class="form-control inputtags">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar</label>
                            <div class="col-sm-12 col-md-7">
                                <div id="image-preview" class="image-preview">
                                    <label for="image-upload" id="image-label">Choose File</label>
                                    <input type="file" name="gambar" id="image-upload" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tingkat</label>
                            <div class="col-sm-12 col-md-7">
                                <select name="tingkat" class="form-control selectric">
                                    <option>Kabupaten</option>
                                    <option>Provinsi</option>
                                    <option>Nasional</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategori</label>
                            <div class="col-sm-12 col-md-7">
                                <select name="kategori" class="form-control selectric">
                                    <option>Akademik</option>
                                    <option>Teknologi</option>
                                    <option>Olahraga</option>
                                    <option>Seni</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button type="submit" name="submit" class="btn btn-outline-dark">Tambah Prestasi</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>