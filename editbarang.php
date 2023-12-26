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
      <h2>
        Daftar Barang
      </h2>
    </center>
    <!-- <a href="create_barang.php" class="btn btn-success btn-lg " tabindex="-1" role="button" aria-disabled="true">Tambah Data</a> -->
    <table class="table table-hover-dark">
      <thead class="thead-dark">
        <tr>
        <th>NO</th>
          <th>ID</th>
          <th>Nama</th>
          <th>Jenis</th>
          <th>Ukuran</th>
          <th>ID Pengirim</th>
          <th>ID Penerima</th>
          <th>Status</th>
          <th>ID Gudang</th>
          <th>ID Kurir</th>
          <th>Tanggal Kirim</th>
          <th>Tanggal Terima</th>
          <!-- <th scope="col">Action</th> -->
        </tr>
      </thead>
      <tbody>
        <?php
        require 'connectionbarang.php';
        $id_barang = $_GET['id_barang'];
        $hasil = mysqli_query($koneksi, "SELECT * FROM tbl_barang WHERE id_barang='$id_barang'");
        ?>
        <?php
        $no = 1;
        while ($data = mysqli_fetch_array($hasil)) {
          echo "<tr>";
          echo "<th>" . $no . "</th>";
          echo "<td>" . $data['id_barang'] . "</td>";
          echo "<td>" . $data['nama_barang'] . "</td>";
          echo "<td>" . $data['jenis_barang'] . "</td>";
          echo "<td>" . $data['ukuran_kg'] . "</td>";
          echo "<td>" . $data['id_pengirim'] . "</td>";
          echo "<td>" . $data['id_penerima'] . "</td>";
          echo "<td>" . $data['status_barang'] . "</td>";
          echo "<td>" . $data['id_gudang'] . "</td>";
          echo "<td>" . $data['id_kurir'] . "</td>";
          echo "<td>" . $data['tanggal_kirim'] . "</td>";
          echo "<td>" . $data['tanggal_terima'] . "</td>";
        //   echo "<td>
        //     <a href='edit_barang.php?id_barang=$data[id_barang]' class='btn btn-warning btn-sm' style='font-weight: 600;'>Edit</a>|
        //     <a href='delete_barang.php?id_barang=$data[id_barang] ' class='btn btn-danger btn-sm' style='font-weight: 600;'>Delete</a>
        //     </td>";
          echo "</tr>";
          $no++;
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
        }

        ?>
      </tbody>
    </table>

    <hr>

    <form action="submitbarang.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Id Barang</label>
            <input type="hidden" class="form-control" id="exampleInputEmail1" name="id_barang" value="<?php echo $id_barang; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nama_barang" value="<?php echo $nama_barang; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jenis Barang</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="jenis_barang" value="<?php echo $jenis_barang; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Ukuran (kg)</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="ukuran_kg" value="<?php echo $ukuran_kg; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID Pengirim</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="id_pengirim" value="<?php echo $id_pengirim; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID Penerima</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="id_penerima" value="<?php echo $id_penerima; ?>">
        </div>
        <div class="mb-3">
        <form action="pengirim.php" method="get">
      <p>
      <label for="exampleInputEmail1" class="form-label">Status Barang</label>
      <p>
        <select name="agama">
          <option value="islam">Diterima</option>
          <option value="kristen">Belum Diterima</option>
        </select>
      </div>
        <form action="pengirim.php" method="get">
      <p>
        ID Gudang
      <p>
        <select name="agama">
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
        </select>
        <form action="pengirim.php" method="get">
      <p>
        ID Kurir
      <p>
        <select name="agama">
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
        </select>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tanggal Kirim</label>
            <input type="date" class="form-control" id="exampleInputEmail1" name="tanggal_kirim" value="<?php echo $tanggal_kirim; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tanggal Terima</label>
            <input type="date" class="form-control" id="exampleInputEmail1" name="tanggal_terima" value="<?php echo $tanggal_terima; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php
      //   $no = 1;
      //   while ($data = mysqli_fetch_array($hasil)) {
      //     <form action="edit.php">
      //         <div class="mb-3">
      //             <label for="exampleInputEmail1" class="form-label">Nama</label>
      //             <input type="text" class="form-control" id="exampleInputEmail1" name="nama" value="$data['nama']">
      //         </div>
      //         <div class="mb-3">
      //             <label for="exampleInputEmail1" class="form-label">Harga</label>
      //             <input type="text" class="form-control" id="exampleInputEmail1" name="harga" value="$data['harga']">
      //         </div>
      //         <div class="mb-3">
      //             <label for="exampleInputEmail1" class="form-label">Stok</label>
      //             <input type="text" class="form-control" id="exampleInputEmail1" name="stok" value="$data['stok']">
      //         </div>
      //         <div class="mb-3">
      //             <label for="exampleInputEmail1" class="form-label">Jenis</label>
      //             <input type="text" class="form-control" id="exampleInputEmail1" name="jenis" value="$data['jenis']">
      //         </div>
      //         <div class="mb-3">
      //             <label for="exampleInputEmail1" class="form-label">Jenis</label>
      //             <input type="text" class="form-control" id="exampleInputEmail1" name="jenis" value="hahaha">
      //         </div>
      //         <button type="submit" class="btn btn-primary">Submit</button>
      //     </form>
      //     $no++;
      // }
    ?>
  </div>

</body>

</html>