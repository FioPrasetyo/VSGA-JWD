<?php
// Konfigurasi database
$host = "127.0.0.1"; //localhost
$username = "root"; // username database
$password = ""; // password database
$dbname = "simperpus"; // nama database Anda

// Membuat koneksi
$koneksi = new mysqli($host, $username, $password, $dbname);

// Memeriksa koneksi
// if ($koneksi->connect_error) {
//     die("Koneksi gagal: " . $koneksi->connect_error);
// }
// echo "Koneksi berhasil!";
?>
