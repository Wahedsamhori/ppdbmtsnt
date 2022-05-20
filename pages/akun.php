<div class="main-content">
    <div class="ml-30" >
    <div class="row">
    <div class="col l12">
            <h5>Akun Saya</h5>
    </div>
        <div class="col l2">
            <img src="img/avatar.jpg" alt="" width="150">
        </div>
        <div class="col l10">
            <div class="ml-30"><?php 
                if (!$sudahlogin){
                    echo 'kamu belum login';
                }
                else {
                    if (!empty($data_pengguna)) {
                        sanitize_phar($data_pengguna->nama);
                        sanitize_phar($data_pengguna->hp);
                    }
                }
                ?>
                <a href="<?php echo ALAMAT_UTAMA; ?>?page=ubah-akun" class="btn teal">Ubah Akun</a>
                <a href="<?php echo ALAMAT_UTAMA; ?>?page=ubah-foto" class="btn teal">Ubah Foto</a>
        </div>
        </div>
    </div>
    </div>
</div>