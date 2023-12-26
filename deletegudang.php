<?php
// include database connection file
include_once("connectiongudang.php");

// Get id from URL to delete that user
$id_gudang = $_GET['id_gudang'];

// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM tbl_gudang WHERE id_gudang='$id_gudang'");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:gudang.php");
?>