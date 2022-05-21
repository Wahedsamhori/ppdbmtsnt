<?php
    // mencegah pengunjung mengakses file langsung
    if(!defined("ABSPATH")) exit();
    require_once 'config.php';
    require_once 'class/fungsi.php';

    date_default_timezone_set("Asia/Jakarta");
    session_start();

    function autoload($class) {
        include "class/$class.php";
    }

    spl_autoload_register("autoload");
    
    /**
     * catatan //
     * pemanggilan kelas dari /class/*.php
     */

     $db = new database();
    $pengguna = new pengguna();
    $aksi = new aksi();
    $akun = new akun ();
    $siswa = new siswa ();

    // status default pengguna tidak login
    $sudahlogin = false;

    if (isset($_SESSION['ID'])){
        $sudahlogin = true;
        $id = $_SESSION['ID'];
        $data_pengguna = $akun -> denganIdPengguna($id);
    }