<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi= $_POST['prodi'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
 
// menginput data ke database
$conn->query("INSERT INTO mahasiswa (nim, nama, prodi, kelas, alamat, telepon) VALUES ('$nim','$nama','$prodi','$kelas','$alamat','$telepon')");
// mysqli_query($conn,"insert into mahasiswa (nim, nama, prodi, kelas, alamat, telepon) values('$nim','$nama','$prodi','$kelas','$alamat','$telepon')");
 
// mengalihkan halaman kembali ke index.php
header("location:tables-general.php");
 
?>