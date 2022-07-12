<?php
require '../core/functions.php';
// Hapus berita
if(isset($_GET['idb'])){

    $berita = mysqli_query($conn, "SELECT gambar FROM berita WHERE id_berita = '".$_GET['idb']."' ");

    if(mysqli_num_rows($berita) > 0){

        $p = mysqli_fetch_assoc($berita);

        if(file_exists("../assets/img/berita/".$p['gambar'])){
            unlink("../assets/img/berita/".$p['gambar']);
        }
    }

    $delete = mysqli_query($conn, "DELETE FROM berita WHERE id_berita = '".$_GET['idb']."' ");
    echo "
    <script>
        alert('Data berhasil dihapus');
        document.location.href = 'index.php?hal=berita';
    </script>
    ";
}

if(isset($_GET['idp'])){

    $prestasi = mysqli_query($conn, "SELECT gambar FROM prestasi WHERE id_prestasi = '".$_GET['idp']."' ");

    if(mysqli_num_rows($prestasi) > 0){

        $p = mysqli_fetch_assoc($prestasi);

        if(file_exists("../assets/img/prestasi/".$p['gambar'])){
            unlink("../assets/img/prestasi/".$p['gambar']);
        }
    }

    $delete = mysqli_query($conn, "DELETE FROM prestasi WHERE id_prestasi = '".$_GET['idp']."' ");
    echo "
    <script>
        alert('Data berhasil dihapus');
        document.location.href = 'index.php?hal=prestasi';
    </script>
    ";
}