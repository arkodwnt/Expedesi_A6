<?php
$id_gudang = $_GET['id_gudang'];
$nama_gudang =$_GET ['nama_gudang'];
$jenis_gudang =$_GET ['jenis_gudang'];
$alamat_gudang =$_GET ['alamat_gudang'];
$wilayah_gudang =$_GET ['wilayah_gudang'];
$admin = $_GET['admin'];

require 'connectiongudang.php';
// $hasil = mysqli_query($koneksi, "SELECT * FROM tbl_barang WHERE id_barang='$id_barang'");
$sql = "UPDATE tbl_gudang SET nama_gudang='$nama_gudang', jenis_gudang='$jenis_gudang', alamat_gudang='$alamat_gudang', wilayah_gudang='$wilayah_gudang', admin='$admin' WHERE id_gudang='$id_gudang'";

if(mysqli_query($koneksi, $sql)) {
    echo "Record updated successfully";
    echo "<a href='gudang.php' class='btn btn-primary btn-sm' style='font-weight: 600;'>Home</a>";
} else {
    echo "Error updating record: " . mysqli_error($koneksi);
}
?>