<?php
if( $_GET['hal'] == '' ) {
    include 'pages/home.php';
} else if( $_GET['hal'] == 'admin' ) {
    include 'pages/admin.php';
} else if( $_GET['hal'] == 'tambah-admin' ) {
    include 'pages/tambah-admin.php';
} else if( $_GET['hal'] == 'guru' ) {
    include 'pages/guru.php';
} else if( $_GET['hal'] == 'tambah-guru' ) {
    include 'pages/tambah-guru.php';
} else if( $_GET['hal'] == 'siswa' ) {
    include 'pages/siswa.php';
} else if( $_GET['hal'] == 'tambah-siswa' ) {
    include 'pages/tambah-siswa.php';
} else if( $_GET['hal'] == 'super' ) {
    include 'pages/super.php';
} else if( $_GET['hal'] == 'tambah-super' ) {
    include 'pages/tambah-super.php';
} else if( $_GET['hal'] == 'acc' ) {
    include 'pages/acc-setting.php';
} else if($_GET['hal'] == 'reset'){
    include 'pages/reset.php';
}