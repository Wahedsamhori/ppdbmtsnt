<?php
require_once 'config.php';

date_default_timezone_set("Asia/Jakarta");
session_start();


function autoload($class) {
    include "class/$class.php";
}

spl_autoload_register("autoload");
$db = new database();
$pengguna = new pengguna();
$sudahlogin = false;
if (isset($_SESSION['ID'])){
    $sudahlogin = true;
    $id = $_SESSION['ID'];
}