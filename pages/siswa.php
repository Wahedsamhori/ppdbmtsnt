<?php 
    // mencegah pengunjung mengakses file langsung
    if(!defined("ABSPATH")) exit();
    /**
     * memastikan apakah status pengguna adalah admin
     */
    if(!$data_pengguna->role == "admin") exit ();
    $semuaSiswa = $siswa -> semuaSiswa();

    if (!empty($semuaSiswa) || count ($semuaSiswa) > 0) {
         /**
          * jika data siswa tidak kosong
          * atau data siswa lebih dari 0 [ array ]
          */
          
          $data = $semuaSiswa;
          require_once 'siswa-foreach.php';
    }
?>
