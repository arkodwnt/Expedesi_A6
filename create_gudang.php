<?php
$id_gudang = $_GET['id_gudang'];
$nama_gudang =$_GET ['nama_gudang'];
$jenis_gudang =$_GET ['jenis_gudang'];
$alamat_gudang =$_GET ['alamat_gudang'];
$wilayah_gudang =$_GET ['wilayah_gudang'];
$admin = $_GET['admin'];

echo $id_gudang ;
require 'connectiongudang.php';
// $hasil = mysqli_query($koneksi, "SELECT * FROM tbl_barang WHERE id_barang='$id_barang'");


$sql = "INSERT INTO tbl_gudang (id_gudang, nama_gudang, jenis_gudang, alamat_gudang, wilayah_gudang, admin) VALUES ('$id_gudang', '$nama_gudang', '$jenis_gudang', '$alamat_gudang', '$wilayah_gudang', '$admin')";
if(mysqli_query($koneksi, $sql)) {
    echo "Record updated successfully";
    echo "<a href='gudang.php' class='btn btn-primary btn-sm' style='font-weight: 600;'>Home</a>";
} else {
    echo "Error updating record: " . mysqli_error($koneksi);
}
?>