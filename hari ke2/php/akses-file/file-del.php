<?php
$data_remove = $_GET['id'];
$file = fopen('db_makanan.txt', 'r');
$idx = 1;
while (!feof($file))    {
    $data[$idx]=fgets($file);
    $idx++;
}
fclose($file);
$data[$data_remove] = '';

$new_file = fopen('db_makanan.txt', 'w');
$new_data = implode("",$data);
fwrite($new_file,$new_data);
fclose($new_file);
header('location: file-read.php');
