<?php

if( $_GET['hal'] == '' ) {
    include 'pages/home.php';
} else if( $_GET['hal'] == 'setting' ) {
    include 'pages/setting.php';
} else if( $_GET['hal'] == 'berita' ) {
    include 'pages/berita.php';
} else if( $_GET['hal'] == 'tambah-berita' ) {
    include 'pages/tambah-berita.php';
} else if( $_GET['hal'] == 'edit-berita' ) {
    include 'pages/edit-berita.php';
} else if( $_GET['hal'] == 'detail-berita' ) {
    include 'pages/detail-berita.php';
} else if( $_GET['hal'] == 'prestasi' ) {
    include 'pages/prestasi.php';
} else if( $_GET['hal'] == 'tambah-prestasi' ) {
    include 'pages/tambah-prestasi.php';
} else if( $_GET['hal'] == 'edit-prestasi' ) {
    include 'pages/edit-prestasi.php';
} else if( $_GET['hal'] == 'detail-prestasi' ) {
    include 'pages/detail-prestasi.php';
} else if( $_GET['hal'] == 'jurusan' ) {
    include 'pages/jurusan.php';
} else if( $_GET['hal'] == 'tambah-jurusan' ) {
    include 'pages/tambah-jurusan.php';
} else if( $_GET['hal'] == 'edit-jurusan' ) {
    include 'pages/edit-jurusan.php';
} else if( $_GET['hal'] == 'detail-jurusan' ) {
    include 'pages/detail-jurusan.php';
} else if( $_GET['hal'] == 'kepsek' ) {
    include 'pages/kepsek.php';
} else if( $_GET['hal'] == 'acc' ) {
    include 'pages/acc-setting.php';
} else if( $_GET['hal'] == 'reset' ) {
    include 'pages/reset.php';
}