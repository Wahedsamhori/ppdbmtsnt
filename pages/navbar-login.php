<?php 
    // mencegah pengunjung mengakses file langsung
    if(!defined("ABSPATH")) exit();
?>
<style>

header, main, footer, .main-content {
  padding-left: 300px;
}
.ml-30{
  margin-left: 30px;
}

@media only screen and (max-width : 992px) {
      header, main, footer, .main-content {
        padding-left: 0;
      }
    }
          
</style>
<div class="navbar-fixed">
    <nav class="teal">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Logo</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="<?php echo ALAMAT_UTAMA; ?>?page=akun">Profil</a></li>
          <li><a href="<?php echo ALAMAT_UTAMA; ?>/?page=keluar">Logout</a></li>
          <li><a href="<?php echo ALAMAT_UTAMA; ?>/?page=tes">Tes</a></li>
        </ul>
      </div>
    </nav>
  </div>
        
  <ul id="slide-out" class="sidenav sidenav-fixed">
  <li><div class="user-view">
  <div class="background teal">
  <img src="img/background.jpg">
  </div>
  <a href="#user"><img class="circle" src="img/avatar.jpg"></a>
  <a href="#name"><span class="white-text name">PPDBMTSNT</span></a>
  <a href="#email"><span class="white-text email">ppdbmtsnt@gmail.com</span></a>
  </div></li>
  <li><a href="<?php echo ALAMAT_UTAMA; ?>?page=dashboard"><i class="material-icons">dashboard</i>Dashboard</a></li>
  <li><a href="<?php echo ALAMAT_UTAMA; ?>?page=akun"><i class="material-icons">account_circle</i>Profil Saya</a></li>
  <li><a href="<?php echo ALAMAT_UTAMA; ?>?page=tes"><i class="material-icons">assignment</i>Tes</a></li>
  <li><a href="<?php echo ALAMAT_UTAMA; ?>?page=keluar"><i class="material-icons">power_settings_new</i>Keluar</a></li>
  <li><div class="divider"></div></li>
  <li><a class="subheader">Subheader</a></li>
  </ul>
