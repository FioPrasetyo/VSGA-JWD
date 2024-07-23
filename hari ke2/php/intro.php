<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'belajar pmerogramman web dengan php'?></title>
</head>
<body>
        <?php echo 'belajar pmerogramman web dengan php'?>
        <br>
        <?php 
        include 'php-func.php';
        echo 'biaya kost PNC '.number_format(biaya_kost(30,5500)).'rupiah';
        ?>
</body>
</html>