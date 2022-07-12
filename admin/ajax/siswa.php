<?php
require '../../core/functions.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM siswa 
                WHERE
                nama LIKE '%$keyword%' OR
                nisn LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%' OR
                jk LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                username LIKE '%$keyword%' OR
                ip LIKE '%$keyword%'
                ";

$admin = query($query); 
?>
<table class="table table-striped">
<tr>
    <th class="text-center pt-2">
        No
    </th>
    <th>Nama</th>
    <th>NISN</th>
    <th>JK</th>
    <th>Jurusan</th>
    <th>Foto Profil</th>
    <th>Email</th>
    <th>Username</th>
    <th>IP</th>
</tr>
<?php $no = 1; foreach ($admin as $j)  : ?>
<tr>
    <td class="text-center"><?= $no++ ?></td>
    <td><?= $j['nama'] ?>
        <div class="table-links">
            <a href="sa/hapus.php?ssw=<?= $j['id_siswa'] ?>" class="text-danger"
                onclick="return confirm('Yakin mau di hapus?')">Hapus</a>
        </div>
    </td>
    <td><?= $j['nisn'] ?></td>
    <td><?= $j['jk'] ?></td>
    <td><?= $j['jurusan'] ?></td>
    <td>
        <img src="../assets/img/profil/<?= $j['foto_profile'] ?>" alt="" class="img-thumbnail" width="120"
            data-toggle="title" title="">
    </td>
    <td><?= $j['email'] ?></td>
    <td>
        <p><?= $j['username'] ?></p>
    </td>
    <td><?= $j['ip'] ?></td>
</tr>
<?php endforeach; ?>
</table>