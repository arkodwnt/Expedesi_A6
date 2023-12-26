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
      <form action="create_gudang.php" method="get">
        <table width="50%" border="0">
          <tr>
            <td>ID Gudang</td>
            <td><input type="text" name="id_gudang"></td>
          </tr>
          <tr>
            <td>Nama Gudang</td>
            <td><input type="text" name="nama_gudang"></td>
          </tr>
          <tr>
            <td>Jenis Gudang</td>
            <td><input type="text" name="jenis_gudang"></td>
          </tr>
          <tr>
            <td>Alamat Gudang</td>
            <td><input type="text" name="alamat_gudang"></td>
          </tr>
          <tr>
            <td>Wilayah Gudang</td>
            <td><input type="text" name="wilayah_gudang"></td>
          </tr>
          <tr>
            <td>Admin</td>
            <td><input type="text" name="Admin"></td>
          </tr>
          <td></td>
          <td><input class="btn btn-success" type="submit" name="Submit" value="Tambah Data"></td>
          </tr>
        </table>
      </form>

      <?php

      // Check If form submitted, insert form data into users table.
      if (isset($_POST['Submit'])) {
        $id_gudang = $data['id_gudang'];
          $nama_gudang = $data['nama_gudang'];
          $jenis_gudang = $data['jenis_gudang'];
          $alamat_gudang = $data['alamat_gudang'];
          $wilayah_gudang = $data['wilayah_gudang'];
          $admin = $data['admin'];

        // include database connection file
        require 'connectiongudang.php';

        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO tbl_gudang(id_gudang, nama_gudang, jenis_gudang, alamat_gudang, wilayah_gudang, admin) VALUES('$id_gudang', '$nama_gudang', '$jenis_gudang', '$alamat_gudang', '$wilayah_gudang', '$admin')");

        // Show message when user added
        echo "Data berhasil ditambahkan  <a class='btn btn-primary' href='index.php'>Lihat Data</a>";
      }
      ?>
      <br>
      <a href="barang.php" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Kembali</a>

    </center>

  </div>

</body>

</html>