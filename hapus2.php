<?php 
// koneksi database
include 'koneksi2.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['nip'];
 
 
// menghapus data dari database
// mysqli_query($conn,"delete from mahasiswa where nim='$id'");
$conn->query("DELETE FROM dosen WHERE nip='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:tables-data.php");
 
?>