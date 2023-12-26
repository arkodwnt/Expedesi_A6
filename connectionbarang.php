<?php
$koneksi = mysqli_connect("localhost", "root", "", "projectakhir");

// Check connection
if (!$koneksi) {
  echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>