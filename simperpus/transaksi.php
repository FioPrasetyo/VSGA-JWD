<!DOCTYPE html>
<html lang="en">
<?php
include ('layout/head.php');
?>
<body>
<?php
    include ('layout/navbar.php');
    ?>
    <div class="container mt-5">
        <h1 class="text-center">DATA PEMINJAMAN</h1>
        <table class="table table-striped table-bordered table-hover mt-4">
            <thead class="thead-dark">
                <tr>
                    <th>NO</th>
                    <th>No. Transaksi</th>
                    <th>Tanggal</th>
                    <th>Anggota</th>
                    <th>Buku</th>
                    <th>Menu</th>
                </tr>
            </thead>
          
            <tbody>
                <?php
                include 'koneksi.php';

                $query = "SELECT * from m_transaksi 
                join m_anggota on m_anggota.id_anggota = m_transaksi.anggota 
                join m_buku on m_buku.id_buku = m_transaksi.buku";
                $transaksi = mysqli_query($koneksi, $query);

                $no = 1;
                if ($transaksi->num_rows == 0) {   
                    echo"<tr><td colspan='6' class='text-center'>Tidak ada data</td></tr>";
                }
                else{
                    foreach ($transaksi as $key => $value){
                        ?>  
                        <tr>
                            <td><?= $no?></td>
                            <td><?= $value['no_transaksi']?></td>    
                            <td><?= $value['tanggal']?></td>
                            <td><?= $value['nama']?></td>
                            <td><?= $value['judul_buku']?></td>
                            <td>
                                <a href="" class="btn btn-warning">Edit</a>
                                <a href="" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin!')"   >Hapus</a>
                            </td>
                        </tr>
                        <?php
                        $no++;
                    }
                }
                
                // Menutup koneksi
                $koneksi->close();
                ?>
            </tbody>
           
        </table>
        <div class="text-center mt-4">
            <a href="transaksi-form.php" class="btn btn-primary">Isi Data Transaksi</a>
            <a href="transaksi-print.php" class="btn btn-success" target="_blank">Print Transaksi</a>
        </div>


        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>