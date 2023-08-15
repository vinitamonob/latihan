<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['nim'];
 
 
// menghapus data dari database
// mysqli_query($conn,"delete from mahasiswa where nim='$id'");
$conn->query("DELETE FROM mahasiswa WHERE nim='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:tables-general.php");
 
?>