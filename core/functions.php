<?php 

date_default_timezone_set('Asia/Jakarta');  // Zona waktu

// Koneksi
$host = "localhost";
$user = "root";
$pass = "";
$db   = "sekolah";

$conn = mysqli_connect($host, $user, $pass, $db);
// =================================================

// Query -> fetch_assoc

function query($query) {
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];

    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
    
}
// =================================================
  $w = query("SELECT * FROM about")[0];

  $hNas = mysqli_query($conn, "SELECT * FROM prestasi WHERE tingkat_lomba = 'Nasional'");
  $hKab = mysqli_query($conn, "SELECT * FROM prestasi WHERE tingkat_lomba = 'Kabupaten'");
  $hProv = mysqli_query($conn, "SELECT * FROM prestasi WHERE tingkat_lomba = 'Provinsi'");

  $hp1 = mysqli_num_rows($hNas);
  $hp2 = mysqli_num_rows($hKab);
  $hp3 = mysqli_num_rows($hProv);
// =================================================

// Registrasi admin

function register($data) {
    global $conn;
    // Ambil data dari form POST register
    $nama = ucwords(htmlspecialchars(stripslashes($data['nama'])));
    $uname = strtolower(htmlspecialchars(stripslashes($data['uname'])));
    $email = 'contoh@gmail.com';
    $pass1 = mysqli_real_escape_string($conn, $data['pass']);
    $pass2 = mysqli_real_escape_string($conn, $data['pass2']);
    $ip = $_SERVER['REMOTE_ADDR'];
    $tgl = date('d-m-Y H:i:s');
    $profil = 'profil.png';
    

    // Cek Username sudah ad / belum
    $cek_uname = mysqli_query($conn, "SELECT username FROM admin WHERE username = '$uname'");
    if( mysqli_fetch_assoc($cek_uname)  ) {
        echo "
            <script>
            alert('Username Sudah ada!, Silahkan Gunakan Username lain')
            </script>";
        return false;
    }

    // Konfirmasi Password cocok / tidak cocok
    if( $pass1 !== $pass2 ) {
        echo "<script>
                alert('Konfirmasi Password tidak sesuai')
              </script>";
        return false;
    }

    // Proses encrypt password / pengacakan password
    $password = password_hash($pass1, PASSWORD_BCRYPT);

    // Proses insert data ke database
    mysqli_query($conn, "INSERT INTO admin VALUES (NULL, '$nama', '$uname', '$email', '$password', '$ip', '$profil', '$tgl') ");

    return mysqli_affected_rows($conn); 
}
// ==================================================
function registerSa($data) {
  global $conn;

  $nama = ucwords(htmlspecialchars(stripslashes($data['nama'])));
  $uname = strtolower(htmlspecialchars(stripslashes($data['uname'])));
  $pass1 = mysqli_real_escape_string($conn, $data['pass']);
  $pass2 = mysqli_real_escape_string($conn, $data['pass2']);
  $ip = $_SERVER['REMOTE_ADDR'];

   // Cek Username sudah ad / belum
   $cek_uname = mysqli_query($conn, "SELECT username FROM sa WHERE username = '$uname'");
   if( mysqli_fetch_assoc($cek_uname)  ) {
       echo "
           <script>
           alert('Username Sudah ada!, Silahkan Gunakan Username lain')
           </script>";
       return false;
   }

   // Konfirmasi Password cocok / tidak cocok
   if( $pass1 !== $pass2 ) {
       echo "<script>
               alert('Konfirmasi Password tidak sesuai')
             </script>";
       return false;
   }

   // Proses encrypt password / pengacakan password
   $password = password_hash($pass1, PASSWORD_BCRYPT);

    // Proses insert data ke database
    mysqli_query($conn, "INSERT INTO sa VALUES (NULL, '$nama', '$uname', '$password', '$ip') ");

    return mysqli_affected_rows($conn);
}
// ==================================================
function regisGuru($data) {
global $conn;

$nama = ucwords(htmlspecialchars(stripslashes($data['nama'])));
$nip = 12345;
$jk = $data['jk'];
$tpk = 'Guru Mapel';
$profil = 'profil.png';
$uname = strtolower(htmlspecialchars(stripslashes($data['uname'])));
$email = 'contoh@gmail.com';
$pass1 = mysqli_real_escape_string($conn, $data['pass']);
$pass2 = mysqli_real_escape_string($conn, $data['pass2']);
$tgl = date('d-m-Y H:i:s');

// Cek Username sudah ad / belum
$cek_uname = mysqli_query($conn, "SELECT username FROM guru WHERE username = '$uname'");
if( mysqli_fetch_assoc($cek_uname)  ) {
    echo "
        <script>
        alert('Username Sudah ada!, Silahkan Gunakan Username lain')
        </script>";
    return false;
}

// Konfirmasi Password cocok / tidak cocok
if( $pass1 !== $pass2 ) {
    echo "<script>
            alert('Konfirmasi Password tidak sesuai')
          </script>";
    return false;
}

// Proses encrypt password / pengacakan password
$password = password_hash($pass1, PASSWORD_BCRYPT);

 // Proses insert data ke database
 mysqli_query($conn, "INSERT INTO guru VALUES (NULL, '$nama', $nip, '$jk', '$tpk', '$email', '$uname', '$password', '', '$profil', '$tgl') ");

 return mysqli_affected_rows($conn);
}
// ==================================================
function regisSiswa($data) {
  global $conn;

  $nama = ucwords(htmlspecialchars(stripslashes($data['nama'])));
  $nisn = 12345;
  $jk = $data['jk'];
  $jurusan = $data['jurusan'];
  $profil = 'profil.png';
  $uname = strtolower(htmlspecialchars(stripslashes($data['uname'])));
  $email = 'contoh@gmail.com';
  $pass1 = mysqli_real_escape_string($conn, $data['pass']);
  $pass2 = mysqli_real_escape_string($conn, $data['pass2']);
  $tgl = date('d-m-Y H:i:s');

  // Cek Username sudah ad / belum
  $cek_uname = mysqli_query($conn, "SELECT username FROM siswa WHERE username = '$uname'");
  if( mysqli_fetch_assoc($cek_uname)  ) {
      echo "
          <script>
          alert('Username Sudah ada!, Silahkan Gunakan Username lain')
          </script>";
      return false;
}

// Konfirmasi Password cocok / tidak cocok
if( $pass1 !== $pass2 ) {
    echo "<script>
            alert('Konfirmasi Password tidak sesuai')
          </script>";
    return false;
}

// Proses encrypt password / pengacakan password
$password = password_hash($pass1, PASSWORD_BCRYPT);

 // Proses insert data ke database
 mysqli_query($conn, "INSERT INTO siswa VALUES (NULL, '$nama', $nisn, '$jk', '$jurusan', '$uname', '$email', '$password', '', '$profil', '$tgl', '') ");

  return mysqli_affected_rows($conn);
}
// ==================================================
function editAdm($data){
global $conn;

$id = $data['id'];
$nama = ucwords(htmlspecialchars(stripslashes($data['nama'])));
$uname = strtolower(htmlspecialchars(stripslashes($data['uname'])));
$email = ucwords(htmlspecialchars(stripslashes($data['email'])));
$ip = $_SERVER['REMOTE_ADDR'];
$profilLama = $data['profilLama'];
if( $_FILES['profil']['error'] === 4 ) {
  $profil = $profilLama;
} else {
  $profil = profil();
  unlink("../assets/img/profil/" . $profilLama);
}

// query update 
$query = "UPDATE admin SET
          nama = '$nama',
          username = '$uname',
          email = '$email',
          ip = '$ip',
          foto_profil = '$profil'
          WHERE id_admin = $id
          ";
mysqli_query($conn, $query);
return mysqli_affected_rows($conn);
}
// ==================================================
function editGuru($data){
global $conn;

$id = $data['id'];
$nama = ucwords(htmlspecialchars(stripslashes($data['nama'])));
$nip = htmlspecialchars(stripcslashes($data['nip']));
$tpk = htmlspecialchars(stripslashes(ucwords($data['tpk'])));
$uname = strtolower(htmlspecialchars(stripslashes($data['uname'])));
$email = htmlspecialchars(stripslashes($data['email']));
$jk = $data['jk'];
$ip = $_SERVER['REMOTE_ADDR'];
$profilLama = $data['profilLama'];
if( $_FILES['profil']['error'] === 4 ) {
  $profil = $profilLama;
} else {
  $profil = profil();
  unlink("../assets/img/profil/" . $profilLama);
}

// query update
$query = "UPDATE guru SET
          nama = '$nama',
          nip = '$nip',
          tupoksi = '$tpk',
          username = '$uname',
          email = '$email',
          jk = '$jk',
          ip = '$ip',
          foto_profil = '$profil'
          WHERE id_guru = $id
          ";
mysqli_query($conn, $query);
return  mysqli_affected_rows($conn);
}
// ==================================================
function editSiswa(){

}
// ==================================================
function editSa($data){
global $conn;

$id = $data['id'];
$nama = ucwords(htmlspecialchars(stripslashes($data['nama'])));
$uname = strtolower(htmlspecialchars(stripslashes($data['uname'])));
$ip = $_SERVER['REMOTE_ADDR'];

// query update 
$query = "UPDATE sa SET
            nama = '$nama',
            username = '$uname',
            ip = '$ip'
            WHERE id_sa = $id
            ";
mysqli_query($conn, $query);
return mysqli_affected_rows($conn);
}
// ==================================================
function resPassAdm($data){
  global $conn;

  $id = $data['id'];
  $pass =  mysqli_real_escape_string($conn, $data['pass']);
  $pass2 =  mysqli_real_escape_string($conn, $data['pass2']);

  // Konfirmasi  cocok / tidak cocok
if( $pass !== $pass2 ) {
  echo "<script>
          alert('Konfirmasi Password tidak sesuai')
        </script>";
  return false;
}

// Proses encrypt password / pengacakan password
$password = password_hash($pass, PASSWORD_BCRYPT);
// query update pass
$query = "UPDATE admin SET
            password = '$password'
            WHERE id_admin = $id
            ";
mysqli_query($conn, $query);
return mysqli_affected_rows($conn);
}
// ==================================================
function resPassGuru($data){
  global $conn;

  $id = $data['id'];
  $pass =  mysqli_real_escape_string($conn, $data['pass']);
  $pass2 =  mysqli_real_escape_string($conn, $data['pass2']);

  // Konfirmasi  cocok / tidak cocok
if( $pass !== $pass2 ) {
  echo "<script>
          alert('Konfirmasi Password tidak sesuai')
        </script>";
  return false;
}

// Proses encrypt password / pengacakan password
$password = password_hash($pass, PASSWORD_BCRYPT);
// query update pass
$query = "UPDATE guru SET
            password = '$password'
            WHERE id_guru = $id
            ";
mysqli_query($conn, $query);
return mysqli_affected_rows($conn);
}
// ==================================================
function resPassSa($data){
  global $conn;

  $id = $data['id'];
  $pass =  mysqli_real_escape_string($conn, $data['pass']);
  $pass2 =  mysqli_real_escape_string($conn, $data['pass2']);

  // Konfirmasi  cocok / tidak cocok
if( $pass !== $pass2 ) {
  echo "<script>
          alert('Konfirmasi Password tidak sesuai')
        </script>";
  return false;
}

// Proses encrypt password / pengacakan password
$password = password_hash($pass, PASSWORD_BCRYPT);
// query update pass
$query = "UPDATE sa SET
            password = '$password'
            WHERE id_sa = $id
            ";
mysqli_query($conn, $query);
return mysqli_affected_rows($conn);
}
// ==================================================
function profil() {

    $namaFile = $_FILES['profil']['name'];
    $ukuranFile = $_FILES['profil']['size'];
    $error = $_FILES['profil']['error'];
    $tmpName = $_FILES['profil']['tmp_name'];
    //Cek gambar 

    if( $error === 4 ) {
        echo "<script>
                alert('Pilih gambar terlebih dahulu')
              </script>";
        return false;
    }

    // file type
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $formatFile = explode('.', $namaFile);
    $formatFile = strtolower(end($formatFile));

    if( !in_array($formatFile, $ekstensiGambarValid) ) {
        echo "<script>
                alert('Format File tidak sesuai')
              </script>";
        return false;
    }

    // cek size

    if( $ukuranFile > 3000000 ) {
        echo "<script>
                alert('File size Max 3MB')
              </script>";
        return false;
    }


    // lolos cek
    // generate nama gambar

    $namaBaru = uniqid();
    $namaBaru .= '.';
    $namaBaru .= $formatFile;
 

    move_uploaded_file($tmpName, '../assets/img/profil/' . $namaBaru);

    return $namaBaru;
}
// ==================================================

// Tambah Berita
function addBerita($data) {
    global $conn;

    $judul = htmlspecialchars(ucwords($data['judul']));
    $konten = $data['konten'];
    $penulis = $_SESSION['nama'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $status = $data['status'];
    $gambar = imgBerita();
    if( !$gambar ) {
        return false;
    }
    $tgl = date('d/m/Y H.i') . ' WIB';

    // insert db
    $query = "INSERT INTO berita
                    VALUES 
                    (NULL, '$judul', '$konten', '$penulis', '$ip', '$status', '$gambar', '$tgl', '') 
                     ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
// ==================================================

// image berita 
 
function imgBerita() {

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];
    //Cek gambar 

    if( $error === 4 ) {
        echo "<script>
                alert('Pilih gambar terlebih dahulu')
              </script>";
        return false;
    }

    // file type
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $formatFile = explode('.', $namaFile);
    $formatFile = strtolower(end($formatFile));

    if( !in_array($formatFile, $ekstensiGambarValid) ) {
        echo "<script>
                alert('Format File tidak sesuai')
              </script>";
        return false;
    }

    // cek size

    if( $ukuranFile > 3000000 ) {
        echo "<script>
                alert('File size Max 3MB')
              </script>";
        return false;
    }


    // lolos cek
    // generate nama gambar

    $namaBaru = uniqid();
    $namaBaru .= '.';
    $namaBaru .= $formatFile;
 

    move_uploaded_file($tmpName, '../assets/img/berita/' . $namaBaru);

    return $namaBaru;
}
// =======================================================

function editBerita($data) {
    global $conn;

    $id = $data['id'];
    $judul = htmlspecialchars(ucwords($data['judul']));
    $konten = $data['konten'];
    $penulis = $_SESSION['nama'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $status = $data['status'];
    $tgl = date('d-m-Y H.i') . ' WIB';
    $gambarLama = $data['gambarLama'];
    if( $_FILES['gambar']['error'] === 4 ) {
        $gambar = $gambarLama;
    } else {
        $gambar = imgBerita();
        unlink("../assets/img/berita/" . $gambarLama);
    }
// QUERY update
    $query = "UPDATE berita SET
                judul = '$judul',
                konten = '$konten',
                penulis = '$penulis',
                ip    = '$ip',
                status = '$status',
                gambar = '$gambar',
                tgl_edit = '$tgl'
                WHERE id_berita = $id
                ";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}
// =====================================================

// tambah Prestasi
function addPrestasi($data) {
    global $conn;

    $lomba = htmlspecialchars(ucwords($data['lomba']));
    $tingkat = $data['tingkat'];
    $peraih = htmlspecialchars(ucwords($data['peraih']));
    $juara = htmlspecialchars($data['juara']);
    $ktg   = $data['kategori'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $tgl_lomba = $data['tgl_lomba'];
    $tgl = date('d/m/Y H.i');
    $gambar = imgPrestasi();
    if( !$gambar ) {
      return false;
    }

    // query insert
    $query = "INSERT INTO prestasi 
                  VALUES
                  (NULL, '$lomba', '$tingkat', '$peraih', '$juara', '$ktg', '$gambar', '$ip', '$tgl_lomba', '$tgl', '')
    ";
    mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
// =====================================================
// img Prestasi
function imgPrestasi() {
  $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];
    //Cek gambar 

    if( $error === 4 ) {
        echo "<script>
                alert('Pilih gambar terlebih dahulu')
              </script>";
        return false;
    }

    // file type
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $formatFile = explode('.', $namaFile);
    $formatFile = strtolower(end($formatFile));

    if( !in_array($formatFile, $ekstensiGambarValid) ) {
        echo "<script>
                alert('Format File tidak sesuai')
              </script>";
        return false;
    }

    // cek size

    if( $ukuranFile > 3000000 ) {
        echo "<script>
                alert('File size Max 3MB')
              </script>";
        return false;
    }


    // lolos cek
    // generate nama gambar

    $namaBaru = uniqid();
    $namaBaru .= '.';
    $namaBaru .= $formatFile;
 

    move_uploaded_file($tmpName, '../assets/img/prestasi/' . $namaBaru);

    return $namaBaru;
}
// =================================================
// edit Prestasi
function editPrestasi($data) {
  global $conn;

  $id = $data['id'];
  $lomba = htmlspecialchars(ucwords($data['lomba']));
  $tingkat = $data['tingkat'];
  $peraih = htmlspecialchars(ucwords($data['peraih']));
  $juara = htmlspecialchars($data['juara']);
  $ktg   = $data['kategori'];
  $ip = $_SERVER['REMOTE_ADDR'];
  $tgl_lomba = $data['tgl_lomba'];
  $tgl = date('d-m-Y H.i') . ' WIB';
  $gambarLama = $data['gambarLama'];
  if( $_FILES['gambar']['error'] === 4 ) {
    $gambar = $gambarLama;
  } else {
      $gambar = imgPrestasi();
      unlink("../assets/img/prestasi/" . $gambarLama);
  }

  // query update 
  $query = "UPDATE prestasi SET
              nama_lomba = '$lomba',
              tingkat_lomba = '$tingkat',
              peraih = '$peraih',
              juara = '$juara',
              kategori = '$ktg',
              gambar = '$gambar',
              ip  = '$ip',
              tgl_lomba = '$tgl_lomba',
              tgl_edit = '$tgl'
            WHERE id_prestasi = $id
  ";

  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}
// ==================================================
function setting($data) {
  global $conn;

  $nama = htmlspecialchars($data['nama']);
  $visi = $data['visi'];
  $misi = $data['misi'];
  $tujuan = $data['tujuan'];
  $desk = $data['deskripsi'];
  $alamat = htmlspecialchars($data['alamat']);
  $email = htmlspecialchars($data['email']);
  $telp = htmlspecialchars($data['telp']);

  $favLama = $data['favLama'];
  if( $_FILES['favicon']['error'] === 4 ) {

    $favIcon = $favLama;
  } else {
    $favIcon = favIcon();
    unlink('../assets/img/about/'. $favLama);
  }

  $logoLama = $data['logoLama'];
  if( $_FILES['logo']['error'] === 4 ) {

    $logo = $logoLama;
  } else {
    $logo = logo();
    unlink('../assets/img/about/'. $logoLama);
  }

  // query update
  $query  = "UPDATE about SET
              nama_sekolah = '$nama',
              visi = '$visi',
              misi = '$misi',
              tujuan = '$tujuan',
              tentang_sekolah = '$desk',
              alamat = '$alamat',
              email = '$email',
              telepon = '$telp',
              favicon = '$favIcon',
              logo_sekolah = '$logo' ";
    mysqli_query($conn, $query);
  
  return mysqli_affected_rows($conn);
}
// ===================================================
function favIcon() {
  $namaFile = $_FILES['favicon']['name'];
  $ukuranFile = $_FILES['favicon']['size'];
  $error = $_FILES['favicon']['error'];
  $tmpName = $_FILES['favicon']['tmp_name'];
  //Cek gambar 

  if( $error === 4 ) {
      echo "<script>
              alert('Pilih gambar terlebih dahulu')
            </script>";
      return false;
  }

  // file type
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $formatFile = explode('.', $namaFile);
  $formatFile = strtolower(end($formatFile));

  if( !in_array($formatFile, $ekstensiGambarValid) ) {
      echo "<script>
              alert('Format File tidak sesuai')
            </script>";
      return false;
  }

  // cek size

  if( $ukuranFile > 3000000 ) {
      echo "<script>
              alert('File size Max 3MB')
            </script>";
      return false;
  }


  // lolos cek
  // generate nama gambar

  $namaBaru = uniqid();
  $namaBaru .= '.';
  $namaBaru .= $formatFile;


  move_uploaded_file($tmpName, '../assets/img/about/' . $namaBaru);

  return $namaBaru;
}
// ===================================================
function logo() {
  $namaFile = $_FILES['logo']['name'];
  $ukuranFile = $_FILES['logo']['size'];
  $error = $_FILES['logo']['error'];
  $tmpName = $_FILES['logo']['tmp_name'];
  //Cek gambar 

  if( $error === 4 ) {
      echo "<script>
              alert('Pilih logo terlebih dahulu')
            </script>";
      return false;
  }

  // file type
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $formatFile = explode('.', $namaFile);
  $formatFile = strtolower(end($formatFile));

  if( !in_array($formatFile, $ekstensiGambarValid) ) {
      echo "<script>
              alert('Format File tidak sesuai')
            </script>";
      return false;
  }

  // cek size

  if( $ukuranFile > 3000000 ) {
      echo "<script>
              alert('File size Max 3MB')
            </script>";
      return false;
  }


  // lolos cek
  // generate nama gambar

  $namaBaru = uniqid();
  $namaBaru .= '.';
  $namaBaru .= $formatFile;


  move_uploaded_file($tmpName, '../assets/img/logo/' . $namaBaru);

  return $namaBaru;
}
// ===================================================
function addJurusan($data) {
  global $conn;

  $nama = htmlspecialchars(ucwords($data['nama']));
  $ket  = $data['keterangan'];
  $logo = logo();
  if( !$logo ) {
    return false;
  }

  // query insert
  $query = "INSERT INTO jurusan VALUES (NULL, '$nama', '$ket', '$logo')";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}
// ==================================================
function editJurusan($data) {
  global $conn;
  
  $nama = htmlspecialchars(ucwords($data['nama']));
  $ket  = $data['keterangan'];
  $id = $data['id'];
  $logoLama = $data['logoLama'];
  if( $_FILES['logo']['error'] === 4 ) {
    $logo = $logoLama;
  } else {
      $logo = logo();
      unlink("../assets/img/logo/" . $logoLama);
  }

  $query = "UPDATE jurusan SET
              nama = '$nama',
              keterangan = '$ket',
              logo = '$logo'
              WHERE id_jurusan = $id";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
// ==================================================
function kepsek($data) {
  global $conn;

  $nama = htmlspecialchars(ucwords($data['nama']));
  $sambutan = ucwords($data['sambutan']);
  $profilLama = $data['profilLama'];
  if( $_FILES['profil']['error'] === 4 ) {
    $profil = $profilLama;
  } else {
      $profil = profil();
      unlink("../assets/img/profil/" . $profilLama);
  }

  $query = "UPDATE about SET
            nama_kepsek = '$nama',
            sambutan_kepsek = '$sambutan',
            foto_kepsek = '$profil'";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
// =================================================