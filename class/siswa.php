<?php 

class siswa extends aksi {

     public $param;
     
     public function semuaSiswa() {
          /**
           * coba cek di role database pengguna
           * apakah role siswa menggunakan siswa atau student
           * fungsi select_from => class/aksi.php
           */
          return $this -> select_from ( array (
               "table" => "pengguna",
               "param" => "where role = 'siswa' "
          ));
     }
}