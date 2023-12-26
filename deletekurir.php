<?php
// include database connection file
include_once("connectionkurir.php");

// Get id from URL to delete that user
$id_kurir = $_GET['id_kurir'];

// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM tbl_kurir WHERE id_kurir='$id_kurir'");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:kurir.php");
?>