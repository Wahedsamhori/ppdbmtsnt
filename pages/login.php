<?php 
    // mencegah pengunjung mengakses file langsung
    if(!defined("ABSPATH")) exit();
    if ($sudahlogin) {
          // pengguna diperbolehkan mengakses halaman depan
          // hanya jika belum login. jika sudah login
          // akan diarahkan ke halaman dashboard

          pergiKeHalaman("dashboard");
    }

    if (isset($_POST["login"])){
        $pengguna->param=$_POST;
        $respon=$pengguna->login();
        
        // respon login berbentuk Array
        if ($respon['status'] == "berhasil") {
            $_SESSION['ID'] = $respon['user_id'];
            pergiKeHalaman("akun");
        }
    }
?>
<div class="container">
    <h5>Login</h5>
<form action="" method="POST">
    <div>
        <input type="text" placeholder="Masukkan Nomor HP" name="nohp">
    </div>
    <div>
        <input type="password" placeholder="Masukkan Password" name="password">
    </div>
    <div>
        <input type="submit" name="login" class="btn teal" value="login">
    </div>
</form>    
<br>
</div>