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
      <h3>Masukan Barangnya</h3>
      <form action="create_barang.php" method="get">
        <table width="50%" border="0">
          <tr>
            <td>Id Barang</td>
            <td><input type="text" name="id_barang"></td>
          </tr>
          <tr>
            <td>Nama Barang</td>
            <td><input type="text" name="nama_barang"></td>
          </tr>
          <tr>
            <td>Jenis Barang</td>
            <td><input type="text" name="jenis_barang"></td>
          </tr>
          <tr>
            <td>Ukuran (kg)</td>
            <td><input type="number" name="ukuran_kg"></td>
          </tr>
          <tr>
            <td>ID Pengirim</td>
            <td><input type="text" name="id_pengirim"></td>
          </tr>
          <tr>
            <td>ID penerima</td>
            <td><input type="text" name="id_penerima"></td>
          </tr>
          <tr>
            <td> Status Barang </td>
          <td>
            <select name="agama">
          <option value="islam">Diterima</option>
          <option value="kristen">Belum Diterima</option>
        </select>
          </td>
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
          <tr>
            <td>ID Kurir</td>
            <td><select name="agama">
          <option value="islam">220001</option>
          <option value="kristen">220002</option>
          <option value="kristen">230001</option>
          <option value="kristen">230002</option>
          <option value="kristen">230003</option>
          <option value="kristen">320001</option>
          <option value="kristen">330001</option>
          <option value="kristen">330002</option>
          <option value="kristen">330003</option>
          <option value="kristen">410001</option>
          <option value="kristen">420001</option>
          <option value="kristen">420002</option>
          <option value="kristen">430003</option>
          <option value="kristen">510001</option>
        </select></td>
          </tr>
          <tr>
            <td>Tanggal Kirim</td>
            <td><input type="date" name="tanggal_kirim"></td>
          </tr>
          <tr>
            <td>Tanggal terima</td>
            <td><input type="date" name="tanggal_terima"></td>
          </tr>
          <td></td>
          <td><input class="btn btn-success" type="submit" name="Submit" value="Tambah Data"></td>
          </tr>
        </table>
      </form>

      <?php

      // Check If form submitted, insert form data into users table.
      if (isset($_POST['Submit'])) {
        $id_barang = $data['id_barang'];
          $nama_barang = $data['nama_barang'];
          $jenis_barang = $data['jenis_barang'];
          $ukuran_kg = $data['ukuran_kg'];
          $id_pengirim = $data['id_pengirim'];
          $id_penerima = $data['id_penerima'];
          $status_barang = $data['status_barang'];
          $id_gudang = $data['id_gudang'];
          $id_kurir = $data['id_kurir'];
          $tanggal_kirim = $data['tanggal_kirim'];
          $tanggal_terima = $data['tanggal_terima'];



        // include database connection file
        require 'connectionbarang.php';

        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO tbl_barang(id_barang, nama_barang, jenis_barang, ukuran_kg, id_pengirim, id_penerima, status_barang, id_gudang, id_kurir, tanggal_kirim, tanggal_terima) VALUES('$id_barang', '$nama_barang', '$jenis_barang', '$ukuran_kg', '$id_pengirim', '$id_penerima', '$status_barang', '$id_gudang', '$id_gudang', '$id_kurir', '$tanggal_kirim', '$tanggal_terima')");

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