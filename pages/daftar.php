<?php 
    if (isset($_POST["register"])){
        $pengguna->param=$_POST;
        $respon=$pengguna->pendaftaran();
        if ($respon == "registered") {
            header("location:http://localhost/ppdbmtsnt/?page=nopage");
        }
    }

?>

<form action="" method="POST">
    <div>
        <input type="text" placeholder="Nama anda" name="nama">
    </div>
    <div>
        <input type="text" placeholder="Nomor HP" name="nohp">
    </div>
    <div>
        <input type="password" placeholder="Buat Password" name="password">
    </div>
    <div>
        <input type="password" placeholder="Ulang Password" name="confirm_password">
    </div>

    <div>
        <input type="submit" name="register" value="Buat akun">
    </div>

</form>