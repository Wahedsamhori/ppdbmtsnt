<?php 

     class akun extends aksi  {

          public $param;

          function denganIdPengguna($param = null) {
               return $this -> get_something_by_id("pengguna", $param );
          }

          function ambilMetaData ($param = null){
               return $this -> get_something_by_id("pengguna_meta", $param );
               // return $this -> select_from(
               //      array (
               //           'table'=>'pengguna_meta',
               //           'param'=>"WHERE id='{$param}'"
               //      )
               //      );
          }
     }
?>