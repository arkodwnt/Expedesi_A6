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
      <form action="create_penerima.php" method="get">
        <table width="50%" border="0">
          <tr>
            <td>ID Penerima</td>
            <td><input type="text" name="id_penerima"></td>
          </tr>
          <tr>
            <td>Nama Penerima</td>
            <td><input type="text" name="nama_penerima"></td>
          </tr>
          <tr>
            <td>Alamat Penerima</td>
            <td><input type="text" name="alamat_penerima"></td>
          </tr>
          <tr>
            <td>no HP Penerima</td>
            <td><input type="text" name="noHp_penerima"></td>
          </tr>
          <td></td>
          <td><input class="btn btn-success" type="submit" name="submit" value="Tambah Data"></td>
          </tr>
        </table>
      </form>

      <?php

      // Check If form submitted, insert form data into users table.
      if (isset($_POST['submit'])) {
          $id_penerima = $data['id_penerima'];
          $nama_penerima = $data['nama_penerima'];
          $alamat_penerima = $data['alamat_penerima'];
          $noHp_penerima = $data['noHp_penerima'];

        // include database connection file
        require 'connectionpenerima.php';

        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO tbl_penerima(id_penerima, nama_penerima,alamat_penerima, noHp_penerima, ) VALUES('$id_penerima', '$nama_penerima', '$alamat_penerima', '$noHp_penerima')");

        // Show message when user added
        echo "Data berhasil ditambahkan  <a class='btn btn-primary' href='index.php'>Lihat Data</a>";
      }
      ?>
      <br>
      <a href="penerima.php" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Kembali</a>

    </center>

  </div>

</body>

</html>