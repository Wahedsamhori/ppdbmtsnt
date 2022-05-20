<?php 
     // deklarasi konstan Absolute_Path bahwa halaman hanya bisa diakses melalui file "index.php" atau "/"
     define("ABSPATH", dirname(__FILE__));
     
     require_once 'autoload.php';
     require_once 'router.php';

     $datasiswa = $pengguna ->denganID(1);

?>