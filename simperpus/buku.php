<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VSGA-JWD-BOOTSTRAP</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
</head>

<body>
    <?php
    include ('layout/navbar.php');
    ?>
    <div class="container mt-5">
        <h1 class="text-center">TABLE DATA BUKU</h1>
        <table class="table table-striped table-bordered table-hover mt-4">
            <thead class="thead-dark">
                <tr>
                    <th>NO</th>
                    <th>Judul Buku</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Tahun</th>
                    <th>ISBN</th>
                    <th>Menu    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';

                $query = "SELECT * from m_buku";
                $buku = mysqli_query($koneksi, $query);

                $no = 1;
                if ($buku->num_rows == 0) {   
                    echo"<tr><td colspan='7' class='text-center'>Tidak ada data</td></tr>";
                }
                else{
                    foreach ($buku as $key => $value){
                        ?>  
                        <tr>
                            <td><?= $no?></td>
                            <td><?= $value['judul_buku']?></td>    
                            <td><?= $value['pengarang']?></td>
                            <td><?= $value['penerbit']?></td>
                            <td><?= $value['tahun']?></td>
                            <td><?= $value['isbn']?></td>
                            <td>
                            <a href="buku-form.php?id=<?=$value['id_buku']?>" class="btn btn-warning">Edit</a>
                            <a href="buku-crud.php?id=<?=$value['id_buku']?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin!')">Hapus</a>
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
            <a href="buku-form.php" class="btn btn-primary">Isi Data Buku</a>
        </div>
    </div>

 

    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
