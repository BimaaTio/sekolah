<?php
require '../../core/functions.php';
// Hapus berita
if(isset($_GET['idb'])){

    $berita = mysqli_query($conn, "SELECT gambar FROM berita WHERE id_berita = '".$_GET['idb']."' ");

    if(mysqli_num_rows($berita) > 0){

        $p = mysqli_fetch_assoc($berita);

        if(file_exists("../../assets/img/berita/".$p['gambar'])){
            unlink("../../assets/img/berita/".$p['gambar']);
        }
    }

    $delete = mysqli_query($conn, "DELETE FROM berita WHERE id_berita = '".$_GET['idb']."' ");
    echo "
    <script>
        alert('Data berhasil dihapus');
        document.location.href = '../guru.php?hal=berita';
    </script>
    ";
}