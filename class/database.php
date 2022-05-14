<?php 
    class database { 
        public $pdo;

        public function connect() {
          $this->pdo = null;
          try{ $this->pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS); }catch(PDOException $exception){ echo "Connection error: " . $exception->getMessage(); }
          return $this->pdo;
     } 
    }
?>