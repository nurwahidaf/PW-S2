<?php
    define('Phi', 3.14);
    define('DBNAME', 'inventori');
    define('DBSERVER', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', 'fitri');

    $jari = 8;
    $luas = Phi * $jari * $jari;
    $keliling = 2 * Phi * $jari;

    echo 'Jika sebuah lingkaran memiliki jari-jari ' . $jari . ', maka luas lingkaran tersebut adalah: ' . $luas;
    echo '<br>Keliling lingkaran: ' . $keliling;

    echo '<hr>';

    echo 'Database Name: ' . DBNAME;
    echo '<br>Database Location: ' . DBSERVER;
    echo '<br>User Name: ' . DBUSER;
    echo '<br>Database Password: ' . DBPASS;
?>