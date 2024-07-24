<!DOCTYPE html>
<html lang="en">
  <?php
include 'layout/head.php';
?>
  <body>
    <?php include ('layout/navbar.php');?>
    <div class="container mt-5">
      <h1 class="text-center">FORM TRANSAKSI</h1>

      <?php
        include 'koneksi.php';
        $anggota = mysqli_query($koneksi, "SELECT * FROM m_anggota");
        $buku = mysqli_query($koneksi, "SELECT * FROM m_buku");
    ?>
      <form action="transaksi-crud.php" method="POST" class="mt-4">
        <div class="mb-3">
          <label for="anggota" class="form-label">Anggota</label>
          <select name="anggota" id="" class="form-control">
            <?php 
            foreach ($anggota as $k =>
            $value) { echo '
            <option value="'.$value['id_anggota'].'">'.$value['nama'].'</option>
            '; } ?>
          </select>
        </div>

        <div class="mb-3">
          <label for="buku" class="form-label">Buku</label>
          <select name="buku" id="" class="form-control">
            <?php 
            foreach ($buku as $k =>
            $value) { echo '
            <option value="'.$value['id_buku'].'">'.$value['judul_buku'].'</option>
            '; } ?>
          </select>
        </div>

        <div class="mb-3">
          <label for="tanggal" class="form-label">Tanggal</label>
          <input type="date" name="tanggal">
        </div>

        <div class="text-center mt-4">
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="transaksi.php" class="btn btn-primary">Kembali</a>
        </div>
      </form>
    </div>

    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
