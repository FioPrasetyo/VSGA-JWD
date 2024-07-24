<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VSGA-JWD-BOOTSTRAP</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
</head>

<body>
    
    <div class="container mt-5">
        <h1 class="text-center">TABLE DATA BUKU</h1>
        <table class="table table-striped table-bordered table-hover mt-4">
            <thead class="thead-dark">
                <tr>
                    <th>NO</th>
                    <th>Judul</th>
                    <th>Tahun</th>
                    <th>Penulis</th>
                    <th>Stok</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';

                // Mengambil data dari database
                $sql = "SELECT * FROM M_buku";
                $result = $koneksi->query($sql);

                if ($result->num_rows > 0) {
                    $no = 1;
                    // Menampilkan data dalam tabel
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $no . "</td>";
                        echo "<td>" . $row['judul'] . "</td>";
                        echo "<td>" . $row['tahun'] . "</td>";
                        echo "<td>" . $row['penulis'] . "</td>";
                        echo "<td>" . $row['stok'] . "</td>";
                        echo "</tr>";
                        $no++;
                    }
                } else {
                    echo "<tr><td colspan='5' class='text-center'>Tidak ada data</td></tr>";
                }

                // Menutup koneksi
                $koneksi->close();
                ?>
            </tbody>
        </table>
        <div class="text-center mt-4">
            <a href="input_buku.html" class="btn btn-primary">Isi Data Buku</a>
        </div>
    </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
