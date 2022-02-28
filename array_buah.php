<?php
    $array_buah = ["Mangga", "Jeruk", "Stroberi", "Anggur"];

    echo 'Buah dengan index 0 adalah ' . $array_buah[0];
    echo '<br>Jumlah buah yang terdaftar: ' . count($array_buah) . ' buah';

    echo '<ol>';
    foreach ($array_buah as $buah) {
        echo '<li>' . $buah . '</li>';
    }
    echo '</ol>';
    
    // menambahkan data array pada bagian akhir
    array_push($array_buah, "Durian", "Pisang");
    echo '<ol>';
    foreach ($array_buah as $fruit) {
        echo '<li>' . $fruit . '</li>';
    }
    echo '</ol>';
    
    unset($array_buah[3]);
    $array_buah[0] = "Semangka";

    echo '<ol>';
    foreach ($array_buah as $fruit) {
        echo '<li>' . $fruit . '</li>';
    }
    echo '</ol>';
?>