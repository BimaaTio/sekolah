<?php 
require 'core/functions.php';

if( isset($_POST['register']) ) {

    if( registerSa($_POST) > 0 ) {
        echo "<script>
                    alert('Berhasil membuat akun');
                    document.location.href = 'login.php';
                </script>";
    } else {
        echo mysqli_error($conn);
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        label {
            display: block;
        }
    </style>
    <title>SignUP</title>
</head>
<body>
    <h1>SignUP</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" id="nama" name="nama">
            </li>
            <li>
                <label for="username">Username : </label>
                <input type="text" id="username" name="uname">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" id="password" name="pass">
            </li>
            <li>
                <label for="password2">Konfirmasi Password : </label>
                <input type="password" id="password2" name="pass2">
            </li>
            <li>
                <button type="submit" name="register">SignUP</button>
            </li>
        </ul>
    </form>

</body>
</html>