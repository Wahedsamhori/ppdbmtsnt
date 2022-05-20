<?php 
    // mencegah pengunjung mengakses file langsung
    if(!defined("ABSPATH")) exit();
?>
    <!-- nav dimulai -->
    <nav class="teal accent-4">
        <div class="nav-wrapper">
            <div class="container">
                <a href="<?php echo ALAMAT_UTAMA; ?>" class="brand-logo">PPDB</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                  <li><a href="<?php echo ALAMAT_UTAMA; ?>?page=daftar">Pendaftaran</a></li>
                  <li><a href="<?php echo ALAMAT_UTAMA; ?>?page=login">Login Akun</a></li>
                  <li><a href="">Kontak</a></li>
                </ul>
            </div>
        </div>
      </nav>
      <!-- nav akhir -->

