<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>
<body>
    
        <form action="file-add.php" method="post">
            <p>Nama Makanan</p>
            <p>
                <input type="text" name="makanan" id="">
            </p>
            <p>
                <button type="submit">SIMPAN</button>
            </p>
            
        </form>
        <p>
        <a href="file-read.php">Lihat</a>
            </p>
        <?php
        
        if(@$_POST){
            $makanan = $_POST['makanan']."\n";

            $file = fopen('db_makanan.txt', 'a');
            fwrite($file, $makanan);
            fclose($file);
        }
        ?>

</body>
</html>