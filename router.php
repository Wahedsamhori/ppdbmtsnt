<?php 
    // mencegah pengunjung mengakses file langsung
    if(!defined("ABSPATH")) exit();

    // memuat file header
    require "pages/header.php";

    if ($sudahlogin){
        require_once "pages/navbar-login.php";
    }
    else {
        require_once "pages/navbar.php";

    }

    if (!empty ( $_GET["page"])){
        // proteksi halaman yang bisa dikunjungi
        $pages = ['akun','daftar','login','dashboard','ubah-akun','keluar','ubah-foto'];

        if (in_array(htmlentities($_GET['page']),$pages)){
            require "pages/".$_GET["page"] . ".php";
        }
        else {
            // jika pengguna mengunjungi halaman yang tidak terdaftar di $pages
            require "pages/error.php";
        }
    }
    else {
        // halaman utama
            require "pages/home.php";
    }

    // memuat file footer
    require "pages/footer.php";

?>