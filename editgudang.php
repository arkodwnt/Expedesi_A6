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
        Daftar Gudang
      </h2>
    </center>
    <!-- <a href="create_barang.php" class="btn btn-success btn-lg " tabindex="-1" role="button" aria-disabled="true">Tambah Data</a> -->
    <table class="table table-hover-dark">
      <thead class="thead-dark">
        <tr>
        <th>ID Gudang</th>
          <th>Nama Gudang</th>
          <th>Jenis Gudang</th>
          <th>Alamat Gudang</th>
          <th>Wilayah Gudang</th>
          <th>Admin</th>
          <!-- <th scope="col">Action</th> -->
        </tr>
      </thead>
      <tbody>
        <?php
        require 'connectiongudang.php';
        $id_gudang = $_GET['id_gudang'];
        $hasil = mysqli_query($koneksi, "SELECT * FROM tbl_gudang WHERE id_gudang='$id_gudang'");
        ?>
        <?php
        $no = 1;
        while ($data = mysqli_fetch_array($hasil)) {
          echo "<tr>";
          echo "<th>" . $no . "</th>";
          echo "<td>" . $data['id_gudang'] . "</td>";
          echo "<td>" . $data['nama_gudang'] . "</td>";
          echo "<td>" . $data['jenis_gudang'] . "</td>";
          echo "<td>" . $data['alamat_gudang'] . "</td>";
          echo "<td>" . $data['wilayah_gudang'] . "</td>";
          echo "<td>" . $data['admin'] . "</td>";
        //   echo "<td>
        //     <a href='edit_barang.php?id_barang=$data[id_barang]' class='btn btn-warning btn-sm' style='font-weight: 600;'>Edit</a>|
        //     <a href='delete_barang.php?id_barang=$data[id_barang] ' class='btn btn-danger btn-sm' style='font-weight: 600;'>Delete</a>
        //     </td>";
          echo "</tr>";
          $no++;
          $id_gudang = $data['id_gudang'];
          $nama_gudang = $data['nama_gudang'];
          $jenis_gudang = $data['jenis_gudang'];
          $alamat_gudang = $data['alamat_gudang'];
          $wilayah_gudang = $data['wilayah_gudang'];
          $admin = $data['admin'];
        }

        ?>
      </tbody>
    </table>

    <hr>

    <form action="submitgudang.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID Gudang</label>
            <input type="hidden" class="form-control" id="exampleInputEmail1" name="id_gudang" value="<?php echo $id_gudang; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Gudang</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nama_gudang" value="<?php echo $nama_gudang; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jenis Gudang</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="jenis_gudang" value="<?php echo $jenis_gudang; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat Gudang</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="alamat_gudang" value="<?php echo $alamat_gudang; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Wilayah Gudang</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="wilayah_gudang" value="<?php echo $wilayah_gudang; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Admin</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="admin" value="<?php echo $admin; ?>">
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