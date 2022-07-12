<?php
require '../../core/functions.php';
// hapus akun sa
if( isset($_GET['sa']) ) {
    if( $delete = mysqli_query($conn, "DELETE FROM sa WHERE id_sa = '".$_GET['sa']."' ") ){
        echo "
    <script>
        alert('Data berhasil dihapus');
        document.location.href = '../sa.php?hal=super';
    </script>
    ";
    }
}

// Hapus akun admin
if(isset($_GET['adm'])){

    $admin = mysqli_query($conn, "SELECT foto_profil FROM admin WHERE id_admin = '".$_GET['adm']."' ");

    if(mysqli_num_rows($admin) > 0){

        $p = mysqli_fetch_assoc($admin);

        if(file_exists("../../assets/img/profil/".$p['foto_profil'])){
            unlink("../../assets/img/profil/".$p['foto_profil']);
        }
    }

    $delete = mysqli_query($conn, "DELETE FROM admin WHERE id_admin = '".$_GET['adm']."' ");
    echo "
    <script>
        alert('Data berhasil dihapus');
        document.location.href = '../sa.php?hal=admin';
    </script>
    ";
} 

// hapus akun guru
if(isset($_GET['guru'])){

    $guru = mysqli_query($conn, "SELECT foto_profil FROM guru WHERE id_guru = '".$_GET['guru']."' ");

    if(mysqli_num_rows($guru) > 0){

        $p = mysqli_fetch_assoc($guru);

        if(file_exists("../../assets/img/profil/".$p['foto_profil'])){
            unlink("../../assets/img/profil/".$p['foto_profil']);
        }
    }

    $delete = mysqli_query($conn, "DELETE FROM guru WHERE id_guru = '".$_GET['guru']."' ");
    echo "
    <script>
        alert('Data berhasil dihapus');
        document.location.href = '../sa.php?hal=guru';
    </script>
    ";
}
// hapus akun siswa
if(isset($_GET['ssw'])){

    $guru = mysqli_query($conn, "SELECT foto_profile FROM siswa WHERE id_siswa = '".$_GET['ssw']."' ");

    if(mysqli_num_rows($guru) > 0){

        $p = mysqli_fetch_assoc($guru);

        if(file_exists("../../assets/img/profil/".$p['foto_profile'])){
            unlink("../../assets/img/profil/".$p['foto_profile']);
        }
    }

    $delete = mysqli_query($conn, "DELETE FROM siswa WHERE id_siswa = '".$_GET['ssw']."' ");
    echo "
    <script>
        alert('Data berhasil dihapus');
        document.location.href = '../sa.php?hal=siswa';
    </script>
    ";
}