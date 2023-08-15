<?php

$host = 'localhost';
$username = 'root';
$password = '';
$db = 'tabel_data';
// $db = 'kbd';

$conn = mysqli_connect($host, $username, $password, $db);

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>