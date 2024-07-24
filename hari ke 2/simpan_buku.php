<?php
include 'koneksi.php';
// Menangkap data dari form
$judul = $_POST['judul'];
$tahun = $_POST['tahun'];
$penulis = $_POST['penulis'];
$stok = $_POST['stok'];

// Mengecek ID terakhir di database
$sql = "SELECT MAX(id) AS last_id FROM M_buku";
$result = $koneksi->query($sql);
$row = $result->fetch_assoc();
$id = $row['last_id'] ? $row['last_id'] + 1 : 1;

// Menyimpan data ke database
$sql = "INSERT INTO M_buku (id, judul, tahun, penulis, stok) VALUES ('$id', '$judul', '$tahun', '$penulis', '$stok')";

if ($koneksi->query($sql) === TRUE) {
    echo "Data buku berhasil disimpan!";
    header('Location: buku.php');
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

// Menutup koneksi
$koneksi->close();