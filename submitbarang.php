<?php
$id_barang = $_GET['id_barang'];
$nama_barang = $_GET['nama_barang'];
$jenis_barang = $_GET['jenis_barang'];
$ukuran_kg = $_GET['ukuran_kg'];
$id_pengirim = $_GET['id_pengirim'];
$id_penerima = $_GET['id_penerima'];
$status_barang = $_GET['status_barang'];
$id_gudang = $_GET['id_gudang'];
$id_kurir = $_GET['id_kurir'];
$tanggal_kirim = $_GET['tanggal_kirim'];
$tanggal_terima = $_GET['tanggal_terima'];


require 'connectionbarang.php';
// $hasil = mysqli_query($koneksi, "SELECT * FROM tbl_barang WHERE id_barang='$id_barang'");
$sql = "UPDATE tbl_barang SET nama_barang='$nama_barang', jenis_barang='$jenis_barang', ukuran_kg='$ukuran_kg', id_pengirim='$id_pengirim', id_penerima='$id_penerima', status_barang='$status_barang', id_gudang='$id_gudang', id_kurir='$id_kurir', tanggal_kirim='$tanggal_kirim', tanggal_terima='$tanggal_terima'  WHERE id_barang='$id_barang'";

if(mysqli_query($koneksi, $sql)) {
    echo "Record updated successfully";
    echo "<a href='barang.php' class='btn btn-primary btn-sm' style='font-weight: 600;'>Home</a>";
} else {
    echo "Error updating record: " . mysqli_error($koneksi);
}
?>