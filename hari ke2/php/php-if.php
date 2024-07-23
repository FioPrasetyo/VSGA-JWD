<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencarian Kode Plat Nomer</title>
</head>
<body>
    <form action="php-if.php" method="post">
        <p>Kode Plat Nomor</p>
        <p><input type="text" name="kode_plat"></p>
        <p><button type="submit">Cari</button></p>
    </form>
</body>
</html>

<?php
// $usia = 20;
// $batas = 30;

// if ($usia > $batas) {
//     echo 'maaf anda tidak memenuhi syarat';
// } else {
//     echo 'selamat, anda bisa mengikuti pelatihan VSGA';
// }
// echo '<br>';
// $nilai = 10;
// if ($nilai > 80) {
//     echo 'Nilai : A. Selamat Anda Lulus';
// } elseif ($nilai >= 70) {
//     echo 'Nilai : B. Selamat Anda Lulus';
// } elseif ($nilai >= 50) {
//     echo 'Nilai : C. Selamat Anda Lulus';
// } elseif ($nilai >= 30) {
//     echo 'Nilai : D. Anda Tidak Lulus';
// } else {
//     echo 'Nilai : E. Anda Tidak Lulus';
// }

// echo '<br>';
// echo '<br>';
if (@$_POST){

$kode_plat = $_POST['kode_plat'];
switch ($kode_plat) {
    case 'A':
        # code...
        echo 'Plat Nomer Anda Banten';
        break;
    case 'B':
        # code...
        echo 'Plat Nomer Anda Jakarta';
        break;
    case 'F':
        # code...
        echo 'Plat Nomer Anda Bogor';
        break;
    case 'R':
        # code...
        echo 'Plat Nomer Anda Cilacap';
        break;
    case 'D':
        # code...
        echo 'Plat Nomer Anda Bandung';
        break;
    case 'T':
        # code...
        echo 'Plat Nomer Anda Purwakarta';
        break;

    default:
        # code...
        echo 'Kode Plat Nomer Belum Terdaftar';
        break;
}
}