<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
 
// update data ke database
// mysqli_query($conn,"update mahasiswa set nama='$nama', prodi='$prodi', kelas='$kelas', alamat='$alamat', telepon='$telepon' where nim='$nim'");
$conn->query("UPDATE mahasiswa SET nama='$nama', prodi='$prodi', kelas='$kelas', alamat='$alamat', telepon='$telepon' WHERE nim='$nim'"); 

// mengalihkan halaman kembali ke index.php
header("location:tables-general.php");
 
?>