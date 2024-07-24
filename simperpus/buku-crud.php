<?php
// echo "<pre>"; 
// print_r($_POST);
// echo "</pre>";
// exit();

include 'koneksi.php';
// // Menangkap data dari form
$judul = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['tahun'];
$isbn = $_POST['isbn'];

if(@$_GET['id']){
    
    $id = $_GET['id'];
    //querry hapus data
    $sql = "DELETE FROM m_buku WHERE id_buku = '$id'";
    $result = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
}
else if (@$_POST['id_buku']) {
    $id = $_POST['id_buku'];
    // query update data
    $sql = "update m_buku SET 
            judul_buku = '$judul',
            pengarang = '$pengarang',
            penerbit = '$penerbit',
            tahun = '$tahun',
            isbn = '$isbn',
            where id_buku = $id";
    $result = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
}else {
    // query tambah data
    $sql = "INSERT INTO m_buku (judul_buku, pengarang, penerbit, tahun, isbn) VALUES ('$judul', '$pengarang', '$penerbit', '$tahun', '$isbn')";
    $result = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

}
header("location:buku.php"); 
