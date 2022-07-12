<?php

if(isset($_POST['submit'])) {
    if( editPrestasi($_POST) > 0 ) {
        echo "
        <script>
            alert('Data berhasil diubah');
            document.location.href = '?hal=prestasi';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data gagal diubah');
            document.location.href = '?hal=edit-prestasi';
        </script>
        ";
    }
}

$id = $_GET['idp'];
$edit = query("SELECT * FROM prestasi WHERE id_prestasi = $id")[0];
?>
<div class="section-header">
    <div class="section-header-back">
        <a href="?hal=prestasi" class="btn btn-icon btn-outline-dark"><i class="fas fa-arrow-left"></i></a>
    </div>
    <h1>Edit Prestasi</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="?hal=">Home</a></div>
        <div class="breadcrumb-item"><a href="?hal=prestasi">Semua Prestasi</a></div>
        <div class="breadcrumb-item">Edit Prestasi</div>
    </div>
</div>
<div class="section-body">
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $edit['id_prestasi'] ?>">
        <input type="hidden" name="gambarLama" value="<?= $edit['gambar'] ?>">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-dark">Edit Prestasi</h4>
                    </div>
                    <p class="section-lead float-left">NB : Jika ingin mengedit wajib pilih ulang Tingkat & Kategori</p>
                    <div class="card-body">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Lomba</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="lomba" class="form-control" value="<?= $edit['nama_lomba'] ?>">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Peraih</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="peraih" class="form-control inputtags"
                                    value="<?= $edit['peraih'] ?>">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Juara ke</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="juara" class="form-control inputtags"
                                    value="<?= $edit['juara'] ?>">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tgl Lomba</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="date" name="tgl_lomba" class="form-control inputtags"
                                    value="<?= $edit['tgl_lomba'] ?>">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar</label>
                            <div class="col-sm-12 col-md-7">
                                <div id="image-preview" class="image-preview">
                                    <img src="../assets/img/prestasi/<?= $edit['gambar'] ?>" width="100%"
                                        class="image-preview" alt="">
                                    <label for="image-upload" id="image-label">Choose File</label>
                                    <input type="file" name="gambar" id="image-upload" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tingkat</label>
                            <div class="col-sm-12 col-md-7">
                                <select name="tingkat" class="form-control selectric">
                                    <option selected="<?= $edit['tingkat_lomba'] ?>" disabled
                                        value="<?= $edit['tingkat_lomba'] ?>"><?= $edit['tingkat_lomba'] ?> ( Saat ini )
                                    </option>
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
                                    <option selected="<?= $edit['kategori'] ?>" disabled
                                        value="<?= $edit['kategori'] ?>"><?= $edit['kategori'] ?> ( Saat ini )</option>
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
                                <button type="submit" name="submit" class="btn btn-outline-dark">Edit Prestasi</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>