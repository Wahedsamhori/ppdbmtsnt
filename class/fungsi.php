<?php 
    function jikaBelumLogin ($sudahlogin = NULL){
        if (!$sudahlogin){
        }
    }
    function pergiKeHalaman($halaman=null){
        header("location:".ALAMAT_UTAMA."?page=".$halaman);
    }
    function sanitize_phar($phar) {
        echo "<p>" . htmlentities($phar) . "</p>";
    }

?>