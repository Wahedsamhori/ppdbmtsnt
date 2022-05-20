<?php 
    // mencegah pengunjung mengakses file langsung
    if(!defined("ABSPATH")) exit();
    if ($sudahlogin) {
          // pengguna diperbolehkan mengakses halaman depan
          // hanya jika belum login. jika sudah login
          // akan diarahkan ke halaman dashboard

          pergiKeHalaman("dashboard");
    }
?>
      <!-- hero awal -->
      <div class="hero">
          <div class="container">
          <div class="row">
              <div class="col l6 hero-text" >
                  <h5>DIBUKA PENDAFTARAN</h5>
                  <p>Peserta Didik Baru MTs Nurut Taqwa Cermee Bondowoso <br>Tahun Ajaran 2022-2023.</p>
                  <a href="" class="btn teal accent-4">Daftar Sekarang</a>
              </div>
              <div class="col l6 hero-image">
                  <img src="img/murid.png" alt="" class="responsive-img">
              </div>
          </div>
        </div>
      </div>
      <!-- hero akhir -->
      <!-- Menu hero awal -->
      <div class="menu-hero z-depth-1">
        <div class="container x1" >
            <div class="row">
                <div class="col l4">
                    <div class="center">
                        <img src="img/sign.png" alt="" class="responsive-img">
                        
                    </div>
                </div>
                <div class="col l4">
                    <div class="center">
                        <img src="img/login.png" alt="" class="responsive-img">
                    </div>
                </div>
                <div class="col l4">
                    <div class="center">
                        <img src="img/promosi.png" alt="" class="responsive-img">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col l4">
                    <div class="center">
                        <a href="#daftar" class="btn modal-trigger">BUAT AKUN</a>
                    </div>
                </div>
                <div class="col l4">
                    <div class="center">
                        <a href="#login" class="btn modal-trigger">LOGIN AKUN</a>
                    </div>
                </div>
                <div class="col l4">
                    <div class="center">
                        <a href="" class="btn">BROSUR</a>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <!-- Menu hero akhir -->
      <div class="contact">
          <div class="row">
              <div class="container">
                  <div class="row">
                      <div class="col l12">
                          <div class="center">
                              <img src="img/wa.png" alt="" width="50">
                              <h5>Hubungi Kami</h5>
                              <h6>085230689383</h6>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- modal daftar -->
      <div id="daftar" class="modal">
        <form action="<?php echo ALAMAT_UTAMA; ?>?page=daftar" method="post">
        <div class="modal-content">
            <h5>Daftar</h5>
              <div class="input-field">
                  <label for="">Nama</label>
                  <input type="text" name="nama" id="">
              </div>
              <div class="input-field">
                  <label for="">No.Handphone</label>
                  <input type="text" name="nohp" id="">
              </div>
              <div class="input-field">
                <label for=""> Buat Password</label>
                <input type="password" name="password" id="">
            </div>
            <div class="input-field">
                <label for=""> Ulangi Password</label>
                <input type="password" name="confirm_password" id="">
            </div>
        </div>
        <div class="modal-footer">
          <input type="submit" name="register" value="buat akun" class="modal-close waves-effect waves-green btn"/>
        </div>
      </form>
      </div>
      <!-- modal daftar akhir -->
      <!-- Modal Login -->
      <div id="login" class="modal">
        <form action="<?php echo ALAMAT_UTAMA; ?>?page=login" method="post">
          <div class="modal-content">
            <h5>Login</h5>
              <div class="input-field">
                  <label for="">No.Handphone</label>
                  <input type="text" name="nohp" id="">
              </div>
              <div class="input-field">
                <label for="">Password</label>
                <input type="password" name="password" id="">
            </div>
        </div>
        <div class="modal-footer">
          <input type="submit" name="login" class="modal-close waves-effect waves-green btn" value="Login" />
        </div>
      </form>
    </div>
