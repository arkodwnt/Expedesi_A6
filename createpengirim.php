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
      <form action="create_pengirim.php" method="get">
        <table width="50%" border="0">
          <tr>
            <td>ID pengirim</td>
            <td><input type="text" name="id_pengirim"></td>
          </tr>
          <tr>
            <td>Nama pengirim</td>
            <td><input type="text" name="nama_pengirim"></td>
          </tr>
          <tr>
            <td>Alamat Pengirim</td>
            <td><input type="text" name="alamat_pengirim"></td>
          </tr>
          <tr>
            <td>no HP pengirim</td>
            <td><input type="text" name="noHp_pengirim"></td>
          </tr>
          <td></td>
          <td><input class="btn btn-success" type="submit" name="Submit" value="Tambah Data"></td>
          </tr>
        </table>
      </form>

      <?php

      // Check If form submitted, insert form data into users table.
      if (isset($_POST['Submit'])) {
          $id_pengirim = $data['id_pengirim'];
          $nama_pengirim = $data['nama_pengirim'];
          $alamat_pengirim = $data['alamat_pengirim'];
          $noHp_pengirim = $data['noHp_pengirim'];
          

      

        // include database connection file
        require 'connectionpengirim.php';

        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO tbl_pengirim(id_pengirim, nama_pengirim,alamat_pengirim, noHp_pengirim, ) VALUES('$id_pengirim', '$nama_pengirim', '$alamat_pengirim', '$noHp_pengirim')");

        // Show message when user added
        echo "Data berhasil ditambahkan  <a class='btn btn-primary' href='index.php'>Lihat Data</a>";
      }
      ?>
      <br>
      <a href="pengirim.php" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Kembali</a>

    </center>

  </div>

</body>

</html>