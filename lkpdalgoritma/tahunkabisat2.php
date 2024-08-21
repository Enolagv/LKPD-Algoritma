<?php 
// $tahun_kabisat = 1997;
$tahun = 400;
$tahun2 = 100;
$tahun3 = 4;



for ($tahun_kabisat = 1600; $tahun_kabisat <= 2024; $tahun_kabisat += 4) {
    if ($tahun_kabisat % $tahun == 0) {
       echo $tahun_kabisat . "Tahun Kabisat\n";
    } elseif ($tahun_kabisat % $tahun2 == 0) {
        echo  $tahun_kabisat . "Bukan Tahun Kabisat\n";
    } elseif ($tahun_kabisat % $tahun3 == 0 ) {
        echo  $tahun_kabisat . "Tahun Kabisat\n";
    } else {
        echo  $tahun_kabisat . "Bukan Tahun Kabisat\n";
    }
}
?>