<?php
// include database connection file
include_once("connectionpenerima.php");

// Get id from URL to delete that user
$id_penerima = $_GET['id_penerima'];

// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM tbl_penerima WHERE id_penerima='$id_penerima'");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:penerima.php");
?>