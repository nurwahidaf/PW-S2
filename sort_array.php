<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort Array</title>
</head>
<body>
    <?php
        $array_buah = [
            "M" => "Mangga",
            "J" => "Jeruk",
            "S" => "Stroberi",
            "A" => "Anggur"
        ];
        
        echo '<ol>';
            foreach ($array_buah as $key => $value) {
            echo '<li>' . $key . ' - ' . $value . '</li>';
        }
        echo '</ol>';
        
        echo '<hr>';

        echo 'SORT ARRAY';
        sort($array_buah);
        
        echo '<ol>';
        foreach($array_buah as $key => $value){
            echo '<li>' . $key . ' - ' . $value . '</li>';
        }
        echo '</ol>';
    ?>
</body>
</html>