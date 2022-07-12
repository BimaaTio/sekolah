<?php

if( $_GET['hal'] == '' ) {
    include 'pages/home.php';
} else if( $_GET['hal'] == 'berita' ) {
    include 'pages/berita.php';
} else if( $_GET['hal'] == 'tambah-berita' ) {
    include 'pages/tambah-berita.php';
} else if( $_GET['hal'] == 'edit-berita' ) {
    include 'pages/edit-berita.php';
} else if( $_GET['hal'] == 'detail-berita' ) {
    include 'pages/detail-berita.php';
} else if( $_GET['hal'] == 'home-guru' ) {
    include 'pages/guru/home.php';
} else if( $_GET['hal'] == 'acc' ) {
    include 'pages/acc-setting.php';
} else if($_GET['hal'] == 'reset'){
    include 'pages/reset.php';
}