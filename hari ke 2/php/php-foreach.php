<?php
$merk = ['toyota', 'honda', 'kia', 'wuling', 'hyundai', 'daihatsu', 'suzuki'];

echo '<ol>';
foreach ($merk as $key => $value) {
    # code...
    echo '<li>'.$value.'</li>';
}
echo '</ol>';