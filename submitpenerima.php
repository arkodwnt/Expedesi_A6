<?php
$id_penerima = $_GET['id_penerima'];
$nama_penerima = $_GET['nama_penerima'];
$alamat_penerima = $_GET['alamat_penerima'];
$noHp_penerima = $_GET['noHp_penerima'];

require 'connectionpenerima.php';
// $hasil = mysqli_query($koneksi, "SELECT * FROM tbl_barang WHERE id_barang='$id_barang'");
$sql = "UPDATE tbl_penerima SET nama_penerima='$nama_penerima' , alamat_penerima = '$alamat_penerima', noHp_penerima='$noHp_penerima' WHERE id_penerima='$id_penerima'";

if(mysqli_query($koneksi, $sql)) {
    echo "Record updated successfully";
    echo "<a href='penerima.php' class='btn btn-primary btn-sm' style='font-weight: 600;'>Home</a>";
} else {
    echo "Error updating record: " . mysqli_error($koneksi);
}
?>