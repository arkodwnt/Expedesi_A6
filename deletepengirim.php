<?php
// include database connection file
include_once("connectionpengirim.php");

// Get id from URL to delete that user
$id_pengirim = $_GET['id_pengirim'];

// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM tbl_pengirim WHERE id_pengirim ='$id_pengirim'");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:pengirim.php");
?>
