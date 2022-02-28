<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_unshift</title>
</head>
<body>
    <?php
        $team = ["Dani", "Farah", "Annie", "Ziko"];
        array_unshift($team, "Arka", "Ren");

        echo '<ol>';
        foreach ($team as $person) {
            echo '<li>' . $person . '</li>';
        }
        echo '</ol>';
    ?>
</body>
</html>