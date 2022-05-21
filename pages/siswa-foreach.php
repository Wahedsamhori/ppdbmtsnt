<?php 
    // mencegah pengunjung mengakses file langsung
    if(!defined("ABSPATH")) exit();
    /**
     * memastikan apakah status pengguna adalah admin
     */
    if(!$data_pengguna->role == "admin") exit ();
    /**
     * $data sudah diinisialisasi sebelumnya
     */

?>
    <table>
        <thead>
          <tr>
              <th>#</th>
              <th>ID Registrasi</th>
              <th>Nama</th>
              <th>Status</th>
              <th>Tanggal</th>
          </tr>
        </thead>

        <tbody>

        <?php foreach ( $data as $key => $value ) : $no = $key + 1; ?>
            <tr>
                <td> <?php echo $no; ?> </td>
                <td> <?php $value -> id; ?></td>
                <td> <?php $value -> nama; ?></td>
                <td> <?php $value -> status; ?></td>
                <td> <?php $value -> tanggal; ?></td>
            </tr>
        <?php endforeach;?>

        </tbody>
      </table>
            
