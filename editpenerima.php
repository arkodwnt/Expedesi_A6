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
        Daftar penerima
      </h2>
    </center>
    <!-- <a href="create_barang.php" class="btn btn-success btn-lg " tabindex="-1" role="button" aria-disabled="true">Tambah Data</a> -->
    <table class="table table-hover-dark">
      <thead class="thead-dark">
        <tr>
        <th>No</th>
          <th>ID penerima</th>
          <th>Nama penerima</th>
          <th>Alamat penerima</th>
          <th>no HP penerima</th>
          
          <!-- <th scope="col">Action</th> -->
        </tr>
      </thead>
      <tbody>
        <?php
        require 'connectionpenerima.php';
        $id_penerima = $_GET['id_penerima'];
        $hasil = mysqli_query($koneksi, "SELECT * FROM tbl_penerima WHERE id_penerima='$id_penerima'");
        ?>
        <?php
        $no = 1;
        while ($data = mysqli_fetch_array($hasil)) {
          echo "<tr>";
          echo "<th>" . $no . "</th>";
          echo "<td>" . $data['id_penerima'] . "</td>";
          echo "<td>" . $data['nama_penerima'] . "</td>";
          echo "<td>" . $data['alamat_penerima'] . "</td>";
          echo "<td>" . $data['noHp_penerima'] . "</td>";
          
        //     <a href='edit_barang.php?id_barang=$data[id_barang]' class='btn btn-warning btn-sm' style='font-weight: 600;'>Edit</a>|
        //     <a href='delete_barang.php?id_barang=$data[id_barang] ' class='btn btn-danger btn-sm' style='font-weight: 600;'>Delete</a>
        //     </td>";
          echo "</tr>";
          $no++;
          $id_penerima = $data['id_penerima'];
          $nama_penerima = $data['nama_penerima'];
          $alamat_penerima = $data['alamat_penerima'];
          $noHp_penerima = $data['noHp_penerima']; 
        }

        ?>
      </tbody>
    </table>

    <hr>

    <form action="submitpenerima.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID penerima</label>
            <input type="hidden" class="form-control" id="exampleInputEmail1" name="id_penerima" value="<?php echo $id_penerima; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama penerima</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nama_penerima" value="<?php echo $nama_penerima; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat penerima</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="alamat_penerima" value="<?php echo $alamat_penerima; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">no HP penerima</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="noHp_penerima" value="<?php echo $noHp_penerima; ?>">
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