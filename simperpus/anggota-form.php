<!DOCTYPE html>
<html lang="en">

<?php
include 'layout/head.php';
?>

<body> 
    <?php
    include 'layout/navbar.php';
    ?>
    <div class="container mt-5">
        <h1 class="text-center">Form Data Anggota</h1>
        <?php 
        if(@$_GET['id']){
            include 'koneksi.php';
            $id = $_GET['id'];

            $sql = "SELECT * FROM m_anggota where id_anggota = '$id'";
            $anggota = mysqli_query($koneksi, $sql);
            $x = mysqli_fetch_array($anggota);
        }
        ?>
        <form action="anggota-crud.php" method="POST" class="mt-4">
            <!-- <div>
                <input type="text" class="form-control" id="id" name="id" hidden>
            </div> -->
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required value="<?=@$x['nama']?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required value="<?=@$x['email']?>">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" id="" rows="3" class="form-control" required><?=@$x['alamat']?></textarea>
            </div>
            <div class="mb-3">
                <label for="telfon" class="form-label">Telfon</label>
                <input type="number" class="form-control" id="telfon" name="telfon" required value="<?=@$x['telfon']?>">
            </div>
            <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary">Submit</button>
                <a href="anggota.php" class="btn btn-primary">Kembali</a>
            </div>
            <input type="hidden" name="id_anggota" value="<?=@$x['id_anggota']?>" >
        </form>
    </div>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
