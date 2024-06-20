<?php
// Koneksi ke database
include "koneksi.php";

// Mendapatkan data dari form
$id = $_GET['id'];

// Query untuk menghapus data mahasiswa
$sql = "DELETE FROM mahasiswa WHERE id='$id'";
if (mysqli_query($link, $sql)) {
    header("location: tampil_data.php");
}

?>