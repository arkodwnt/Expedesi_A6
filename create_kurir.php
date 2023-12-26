<?php
$id_kurir = $_GET['id_kurir'];
$nama_kurir =$_GET ['nama_kurir'];
$noHp_kurir =$_GET ['noHp_kurir'];
$id_gudang =$_GET ['id_gudang'];

echo $id_kurir ;
require 'connectionkurir.php';
// $hasil = mysqli_query($koneksi, "SELECT * FROM tbl_barang WHERE id_barang='$id_barang'");


$sql = "INSERT INTO tbl_kurir (id_kurir, nama_kurir, noHp_kurir, id_gudang) VALUES ('$id_kurir', '$nama_kurir', '$noHp_kurir', '$id_gudang')";
if(mysqli_query($koneksi, $sql)) {
    echo "Record updated successfully";
    echo "<a href='kurir.php' class='btn btn-primary btn-sm' style='font-weight: 600;'>Home</a>";
} else {
    echo "Error updating record: " . mysqli_error($koneksi);
}
?>