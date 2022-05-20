<?php 
    if (!defined("ABSPATH")) exit ();
    // pesan kosong untuk ditampilkan
    $pesan = null;
    if (isset($_POST["register"])){
        $pengguna->param=$_POST;
        $respon=$pengguna->pendaftaran();
        if ($respon == "registered") {
            header("location:http://localhost/ppdbmtsnt/?page=login");
        }
        /**
         * @respon perlu respon tambahan, seperti jika pendaftaran gagal 
         * karena sudah terdaftar atau kata sandi yang tidak sama
         * lanjutan di 'class/pengguna.php'
         **/
    }
    

?>

<div class="container">
    <h5 class="mt-20">Registrasi</h5>
    <p><?php echo $pesan; /*jika terdapat pesan akan ditampilkan disini*/ ?></p>
    <form action="" class="mb-20" method="POST">
    <div class="input-field">
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
        <input type="submit" class="btn mb-20" name="register" value="Buat akun">
    </div>

</form>
</div>
