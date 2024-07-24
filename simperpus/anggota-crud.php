<?php
// echo "<pre>"; 
// print_r($_POST);
// echo "</pre>";
// exit();

include 'koneksi.php';
// // Menangkap data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$telfon = $_POST['telfon'];

if(@$_GET['id']){
    
    $id = $_GET['id'];
    //querry hapus data
    $sql = "DELETE FROM m_anggota WHERE id_anggota = '$id'";
    $result = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
}
else if (@$_POST['id_anggota']) {
    $id = $_POST['id_anggota'];
    // query update data
    $sql = "update m_anggota SET 
            nama = '$nama',
            alamat = '$alamat',
            email = '$email',
            telfon = '$telfon'
            where id_anggota = $id";
    $result = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
}else {
    // query tambah data
    $sql = "INSERT INTO m_anggota (nama, email, alamat, telfon) VALUES ('$nama', '$email', '$alamat', '$telfon')";
    $result = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

}
header("location:anggota.php"); 
