<?php
$hari = 30;
$harga_sewa = 15500;
$diskon = 5000;


$total_bayar = ($hari*$harga_sewa)-$diskon;

echo 'lama sewa : '.$hari. '<br>';
echo 'harga sewa : '.$harga_sewa. '<br>';
echo 'diskon : '.$diskon. '<br>';
echo 'Harga sewa Kos PNC perbulan adalah : '.number_format($total_bayar).'Rupiah';