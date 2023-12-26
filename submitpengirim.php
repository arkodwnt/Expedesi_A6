<?php
$id_pengirim = $_GET['id_pengirim'];
$nama_pengirim = $_GET['nama_pengirim'];
$alamat_pengirim = $_GET['alamat_pengirim'];
$noHp_pengirim = $_GET['noHp_pengirim'];

require 'connectionpengirim.php';
// $hasil = mysqli_query($koneksi, "SELECT * FROM tbl_barang WHERE id_barang='$id_barang'");
$sql = "UPDATE tbl_pengirim SET nama_pengirim='$nama_pengirim', alamat_pengirim='$alamat_pengirim', noHp_pengirim='$noHp_pengirim' WHERE id_pengirim='$id_pengirim'";

if(mysqli_query($koneksi, $sql)) {
    echo "Record updated successfully";
    echo "<a href='pengirim.php' class='btn btn-primary btn-sm' style='font-weight: 600;'>Home</a>";
} else {
    echo "Error updating record: " . mysqli_error($koneksi);
}
?>