<?php 
    class pengguna extends database{
        public $param ;
        public $pdo;
        function __construct()
        {
            $this -> pdo = $this->connect();
        }

        public function denganID ($param = NULL){
            $stmt = $this->pdo->prepare(
                "SELECT * FROM pengguna WHERE id = '{$param}'"
            );
            $stmt ->execute();
            return $stmt->fetchObject();

        }

        public function denganNoHp ($param = NULL){
            $stmt = $this->pdo->prepare(
                "SELECT * FROM pengguna WHERE hp = '{$param}'"
            );
            $stmt ->execute();
            return $stmt->fetchObject();

        }

        public function login (){
            $param_obj=(object) $this->param;
            if (!empty($param_obj->nohp) && !empty($param_obj->password)){
                $data=$this->denganNoHp($param_obj->nohp);
                if (!empty($data)){
                    $stmt=$this->pdo->prepare(
                        "SELECT * FROM pengguna_kredensial WHERE id = '{$data->id}'"
                    );
                    $stmt->execute();
                    $datapassword =$stmt->fetchObject();

                    if (password_verify($param_obj->password, $datapassword->password)){
                        return "loggedin";
                    }
                    else {
                        return " Cek password anda";
                    }
                }
                else{
                    return " Maaf kami tidak menemukan";
                }
            }
            else {
                return "Semua kolom harus diisi";
            }
        }

        public function pendaftaran(){
            if (!empty($this->param) && count($this->param) > 0)
            {
                $null=false;
                foreach ($this->param as $key=>$value){
                    if ($value==""){
                        $null=true;
                    }

                }
                if ($null){
                    return 'Harap isi semua kolom';
                }
                else {
                    $param_obj = (object) $this -> param;
                    if (!empty($this->denganNoHp($param_obj->nohp))){
                        return "NoHp sudah digunakan";
                    }
                    else {
                        if ($param_obj->password==$param_obj->confirm_password){
                            $password=password_hash($param_obj->password, PASSWORD_DEFAULT );
                            $id_baru =mt_rand();

                            $stmt=$this->pdo->prepare(
                                "INSERT INTO pengguna (id,nama,hp) values (?,?,?)"
                            );
                            $stmt->bindParam(1,$id_baru);
                            $stmt->bindParam(2,$param_obj->nama);
                            $stmt->bindParam(3,$param_obj->nohp);
                            $stmt->execute();
                            if ($stmt){
                                $stmt=$this->pdo->prepare(
                                    "INSERT INTO pengguna_kredensial (id,password) values (?,?)"
                                );
                                $stmt->bindParam(1,$id_baru);
                                $stmt->bindParam(2,$password);
                                $stmt->execute();
                                if ($stmt){
                                    return 'registered';
                                }
                                else {
                                    return "Coba lagi nanti";
                                }
                            }
                            else{
                                return "Terjadi kesalahan sistem";
                            }
                        }
                        else{
                            return "Kedua password harus sama";
                        }
                    }
                }
            }
        }
    }
?>