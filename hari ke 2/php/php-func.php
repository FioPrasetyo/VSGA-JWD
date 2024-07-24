<?php

function biaya_kost($hari, $diskon) {
    $harga = 15500;
    $total_bayar = ($hari*$harga)-$diskon;;
    return $total_bayar;
}

// echo 'biaya kost PNC '.number_format(biaya_kost(29, 5500)).' Rupiah';