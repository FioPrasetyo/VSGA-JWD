<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Buku</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>

<body>
    <?php
    include 'layout/navbar.php';
    ?>
    <div class="container mt-5">
        <h1 class="text-center">Input Data Buku</h1>
        <?php 
        if(@$_GET['id']){
            include 'koneksi.php';
            $id = $_GET['id'];

            $sql = "SELECT * FROM m_buku where id_buku = '$id'";
            $buku = mysqli_query($koneksi, $sql);
            $x = mysqli_fetch_array($buku);
        }
        ?>
        <form action="buku-crud.php" method="POST" class="mt-4">
            <div class="mb-3">
                <label for="judul_buku" class="form-label">Judul Buku</label>
                <input type="text" class="form-control" id="judul_buku" name="judul_buku" required value="<?=@$x['judul_buku']?>">
            </div>
            <div class="mb-3">
                <label for="pengarang" class="form-label">Pengarang</label>
                <input type="text" class="form-control" id="pengarang" name="pengarang" required value="<?=@$x['pengarang']?>">
            </div>
            <div class="mb-3">
                <label for="penerbit" class="form-label">Penerbit</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit" required value="<?=@$x['penerbit']?>">
            </div>
            <div class="mb-3">
                <label for="tahun" class="form-label">Tahun</label>
                <input type="number" class="form-control" id="tahun" name="tahun" required value="<?=@$x['tahun']?>">
            </div>
            <div class="mb-3">
                <label for="isbn" class="form-label">ISBN</label>
                <input type="text" class="form-control" id="isbn" name="isbn" required value="<?=@$x['isbn']?>">
            </div>
            <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary">Submit</button>
                <a href="buku.php" class="btn btn-primary">Kembali</a>
            </div>
            <input type="hidden" name="id_buku" value="<?=@$x['id_buku']?>" >
        </form>
    </div>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
