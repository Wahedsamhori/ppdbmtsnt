<div class="main-content">
     <div class="ml-30" >
     <div class="row">
          <div class="col l12">
               <h5>Ubah Akun</h5>
               <?php 
               if (isset($_POST["simpan"])){
                    var_dump($_POST);
               }
               $keterangan=array(
                    "nis"=>"Nomor Induk Siswa",
                    "nisn"=>"Nomor Induk Siswa Nasional",
                    "nik"=>"Nomor Induk Kependudukan",
                    "jk"=>"Jenis Kelamin",
                    "tempat_lahir"=>"Tempat Lahir",
                    "tgl_lahir"=>"Tanggal Lahir",
                    "agama"=>"Agama",
                    "status_keluarga"=>"Status Keluarga",
                    "anak_ke"=>"Anak ke-",
                    "jml_saudara"=>"Jumlah Saudara",
                    "hobi"=>"Hobi",
                    "cita"=>"Cita-cita",
                    "alamat_siswa"=>"Alamat Siswa",
                    "desa"=>"Desa",
                    "kec"=>"Kecamatan",
                    "kab"=>"Kabupaten",
                    "prov"=>"Provensi",
                    "kode_pos"=>"Kode Pos",
                    "no_kk"=>"No KK",
                    "nama_ayah"=>"Nama Ayah",
                    "nik_ayah"=>"NIK Ayah",
                    "status_ayah"=>"Status Ayah",
                    "th_lahir_ayah"=>"Tahun Lahir Ayah",
                    "pdd_ayah"=>"Pendidikan Ayah",
                    "pekerjaan_ayah"=>"Pekerjaan Ayah",
                    "penghasilan_ayah"=>"Penghasilan Ayah",
                    "nama_ibu"=>"Nama ibu",
                    "nik_ibu"=>"NIK ibu",
                    "status_ibu"=>"Status ibu",
                    "th_lahir_ibu"=>"Tahun Lahir ibu",
                    "pdd_ibu"=>"Pendidikan ibu",
                    "pekerjaan_ibu"=>"Pekerjaan ibu",
                    "penghasilan_ibu"=>"Penghasilan ibu",
                    "no_hp_ortu"=>"No HP Orang Tua"
                    
               );
               $metadatapengguna=$akun->ambilMetaData($id);
               ?>
               <form action="" method="post">
               <?php foreach ($metadatapengguna as $key => $value): ?>
                    <?php foreach ($keterangan as $key1 => $value1): ?>
                         <?php if ($key == $key1): ?>
                    <div class="input-field">
                         <label for=""><?php echo $value1; ?></label>
                         <input type="text" name="<?php echo $key; ?>">
                    </div>
                    <?php endif; ?>
               <?php endforeach; ?>
               <?php endforeach; ?>
               
               <div class="input-field">
               <select>
                    <option value="" disabled selected>Pilih jenis kelamin</option>
                    <option value="1">Laki-laki</option>
                    <option value="2">Perempuan</option>
               </select>
               <label>Jenis Kelamin</label>
               </div>
               <div class="input-field">
                    <div class="right">
                         <button type="submit" class="btn" name="simpan">SIMPAN</button>
                    </div>
               </div>
               </form>
               
          </div>
     </div>
     </div>
</div>