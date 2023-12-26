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
        Daftar Pengirim
      </h2>
    </center>
    <!-- <a href="create_barang.php" class="btn btn-success btn-lg " tabindex="-1" role="button" aria-disabled="true">Tambah Data</a> -->
    <table class="table table-hover-dark">
      <thead class="thead-dark">
        <tr>
        <th>No</th>
          <th>ID Pengirim</th>
          <th>Nama Pengirim</th>
          <th>Alamat Pengirim</th>
          <th>no HP Pengirim</th>
          
          <!-- <th scope="col">Action</th> -->
        </tr>
      </thead>
      <tbody>
        <?php
        require 'connectionpengirim.php';
        $id_pengirim = $_GET['id_pengirim'];
        $hasil = mysqli_query($koneksi, "SELECT * FROM tbl_pengirim WHERE id_pengirim='$id_pengirim'");
        ?>
        <?php
        $no = 1;
        while ($data = mysqli_fetch_array($hasil)) {
          echo "<tr>";
          echo "<th>" . $no . "</th>";
          echo "<td>" . $data['id_pengirim'] . "</td>";
          echo "<td>" . $data['nama_pengirim'] . "</td>";
          echo "<td>" . $data['alamat_pengirim'] . "</td>";
          echo "<td>" . $data['noHp_pengirim'] . "</td>";
          
        //     <a href='edit_barang.php?id_barang=$data[id_barang]' class='btn btn-warning btn-sm' style='font-weight: 600;'>Edit</a>|
        //     <a href='delete_barang.php?id_barang=$data[id_barang] ' class='btn btn-danger btn-sm' style='font-weight: 600;'>Delete</a>
        //     </td>";
          echo "</tr>";
          $no++;
          $id_pengirim = $data['id_pengirim'];
          $nama_pengirim = $data['nama_pengirim'];
          $alamat_pengirim = $data['alamat_pengirim'];
          $noHp_pengirim = $data['noHp_pengirim'];
          
        }

        ?>
      </tbody>
    </table>

    <hr>

    <form action="submitpengirim.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID pengirim</label>
            <input type="hidden" class="form-control" id="exampleInputEmail1" name="id_pengirim" value="<?php echo $id_pengirim; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama pengirim</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nama_pengirim" value="<?php echo $nama_pengirim; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat Pengirim</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="alamat_pengirim" value="<?php echo $alamat_pengirim; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">no HP pengirim</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="noHp_pengirim" value="<?php echo $noHp_pengirim; ?>">
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