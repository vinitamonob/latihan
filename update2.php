<?php 
// koneksi database
include 'koneksi2.php';
 
// menangkap data yang di kirim dari form
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
 
// update data ke database
// mysqli_query($conn,"update mahasiswa set nama='$nama', matkul='$matkul', alamat='$alamat', telepon='$telepon' where nip='$nip'");
$conn->query("UPDATE dosen SET nama='$nama', matkul='$matkul', alamat='$alamat', telepon='$telepon' WHERE nip='$nip'"); 

// mengalihkan halaman kembali ke index.php
header("location:tables-data.php");
 
?>