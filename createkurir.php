<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>Project Akhir</title>
</head>

<body>
  <div class="container">
    <center>
      <h3>Masukan Datanya</h3>
      <form action="create_kurir.php" method="get">
        <table width="50%" border="0">
          <tr>
            <td>ID Kurir</td>
            <td><input type="text" name="id_kurir"></td>
          </tr>
          <tr>
            <td>Nama Kurir</td>
            <td><input type="text" name="nama_kurir"></td>
          </tr>
          <tr>
            <td>no HP Kurir</td>
            <td><input type="text" name="noHp_kurir"></td>
          </tr>
          <tr>
            <td>ID Gudang</td>
            <td><select name="agama">
          <option value="islam">JKT001D</option>
          <option value="kristen">JKT001S</option>
          <option value="kristen">JKT001T</option>
          <option value="kristen">JOG001D</option>
          <option value="kristen">JOG001S</option>
          <option value="kristen">JKT001S</option>
          <option value="kristen">MDN001M</option>
          <option value="kristen">SBY001D</option>
          <option value="kristen">SBY001S</option>
          <option value="kristen">SBY001T</option>
          <option value="kristen">SMG001D</option>
          <option value="kristen">SMG001S</option>
        </select></td>
          </tr>
          <td></td>
          <td><input class="btn btn-success" type="submit" name="Submit" value="Tambah Data"></td>
          </tr>
        </table>
      </form>

      <?php

      // Check If form submitted, insert form data into users table.
      if (isset($_POST['Submit'])) {
          $id_kurir = $data['id_kurir'];
          $nama_kurir = $data['nama_kurir'];
          $noHp_kurir = $data['noHp_kurir'];
          $id_gudang = $data['id_gudang'];

      

        // include database connection file
        require 'connectionkurir.php';

        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO tbl_kurir(id_kurir, nama_kurir, noHp_kurir, id_gudang) VALUES('$id_kurir', '$nama_kurir', '$noHp_kurir', '$id_gudang')");

        // Show message when user added
        echo "Data berhasil ditambahkan  <a class='btn btn-primary' href='index.php'>Lihat Data</a>";
      }
      ?>
      <br>
      <a href="kurir.php" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Kembali</a>

    </center>

  </div>

</body>

</html>