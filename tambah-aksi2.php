<?php 
// koneksi database
include 'koneksi2.php';
 
// menangkap data yang di kirim dari form
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$matkul= $_POST['matkul'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
 
// menginput data ke database
$conn->query("INSERT INTO dosen (nip, nama, matkul, alamat, telepon) VALUES ('$nip','$nama','$matkul','$alamat','$telepon')");
// mysqli_query($conn,"insert into mahasiswa (nip, nama, matkul, alamat, telepon) values('$nip','$nama','$matkul','$alamat','$telepon')");
 
// mengalihkan halaman kembali ke index.php
header("location:tables-data.php");
 
?>