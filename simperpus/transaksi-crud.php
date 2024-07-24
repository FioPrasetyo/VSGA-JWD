<?php
// echo '<prev>'; 
// print_r($_POST);
// echo '</prev>';

$no_transaksi = rand();
$anggota = $_POST['anggota'];
$buku = $_POST['buku'];
$tanggal = $_POST['tanggal'];

include ('koneksi.php');

$sql = "insert into m_transaksi(no_transaksi, anggota, buku, tanggal) values ('$no_transaksi','$anggota', '$buku', '$tanggal')";
$result = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
if ($result){
    header('Location: transaksi.php');
}
