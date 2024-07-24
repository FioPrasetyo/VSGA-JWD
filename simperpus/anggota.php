<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DATA MASTER ANGGOTA-SIMPERPUS</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
</head>

<body>
    <?php
    include ('layout/navbar.php');
    ?>
    <div class="container mt-5">
        <h1 class="text-center">DATA ANGGOTA</h1>
        <table class="table table-striped table-bordered table-hover mt-4">
            <thead class="thead-dark">
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Telfon</th>
                    <th>Menu</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';

                $query = "SELECT * from m_anggota";
                $anggota = mysqli_query($koneksi, $query);

                $no = 1;
                if ($anggota->num_rows == 0) {   
                    echo"<tr><td colspan='6' class='text-center'>Tidak ada data</td></tr>";
                }
                else{
                    foreach ($anggota as $key => $value){
                        ?>  
                        <tr>
                            <td><?= $no?></td>
                            <td><?= $value['nama']?></td>    
                            <td><?= $value['email']?></td>
                            <td><?= $value['alamat']?></td>
                            <td><?= $value['telfon']?></td>
                            <td>
                                <a href="anggota-form.php?id=<?=$value['id_anggota']?>" class="btn btn-warning">Edit</a>
                                <a href="anggota-crud.php?id=<?=$value['id_anggota']?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin!')"   >Hapus</a>
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
            <a href="anggota-form.php" class="btn btn-primary">Isi Data Anggota</a>
        </div>
    </div>
    <?php
include 'layout/footer.php';
?>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
