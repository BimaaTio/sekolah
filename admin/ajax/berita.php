<?php 
require '../../core/functions.php'; 

$keyword = $_GET['keyword'];
$query = "SELECT * FROM berita 
            WHERE
            judul LIKE '%$keyword%' OR
            konten LIKE '%$keyword%' OR
            penulis LIKE '%$keyword%' OR
            status LIKE '%$keyword%'
            ";
$berita = query($query);
$profil = query("SELECT * FROM admin")[0];
?>

<table class="table table-striped">
    <tr>
        <th class="text-center pt-2">
            No
        </th>
        <th>Judul</th>
        <th>Gambar</th>
        <th>Penulis</th>
        <th>Tgl Upload</th>
        <th>Status</th>
    </tr>
    <?php $i=1; foreach($berita as $b) : ?>
    <tr>
        <td><?= $i++ ?></td>
        <td><?= $b['judul'] ?>
            <div class="table-links">
                <a href="?hal=detail-berita&idb=<?= $b['id_berita'] ?>">Detail</a>
                <div class="bullet"></div>
                <a href="?hal=edit-berita&idb=<?= $b['id_berita'] ?>">Edit</a>
                <div class="bullet"></div>
                <a href="hapus.php?idb=<?= $b['id_berita'] ?>" class="text-danger"
                    onclick="return confirm('Yakin mau di hapus?')">Hapus</a>
            </div>
        </td>
        <td>
            <img src="../assets/img/berita/<?= $b['gambar'] ?>" alt="" class="img-thumbnail" width="120"
                data-toggle="title" title="">
        </td>
        <td>
            <a href="#">
                <img alt="image" src="../assets/img/profil/<?= $profil['foto_profil'] ?>" class="rounded-circle"
                    width="35" data-toggle="title" title="">
                <div class="d-inline-block ml-1"><?= $b['penulis'] ?></div>
            </a>
        </td>
        <td>
            <?php if($b['tgl_edit'] == '' ) : echo '-' ?>
            <?php else :?>
            <?= $b['tgl_edit'] ?>
            <?php endif; ?>
        </td>
        <td>
            <?php if($b['status'] == 'Publish') :?>
            <div class="badge badge-primary">Published</div>
            <?php else :?>
            <div class="badge badge-warning">Pending</div>
            <?php endif;?>
        </td>
    </tr>
    <?php endforeach; ?>