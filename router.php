<?php 
    if (!empty ( $_GET["page"])){
        $pages = ['akun','daftar','home','login','dashboard'];
        if (in_array(htmlentities($_GET['page']),$pages)){
            if (!$sudahlogin)
            require "pages/".$_GET["page"] . ".php";
        }
        else {
            require "pages/error.php";
        }
    }
    else {
        echo 'Buka Home page';
    }

?>