<?php
$file = fopen('db_makanan.txt', 'r');

echo '<ul>';
if (!$file){
    echo 'file tidak ditemukan';
}else{
    $i = 1;
    while (!feof($file)){
        $txt = fgets($file);
        if(!empty($txt)){
        echo '<li>'.$txt.'- <a href="file-del.php?id=' . $i . '">Hapus</a></li>';
    }
    $i++;
    }
    fclose($file);
}
echo '</ul>';