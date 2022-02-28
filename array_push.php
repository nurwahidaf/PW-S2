<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_push</title>
</head>
<body>
    <?php
        $team = ["Dani", "Farah", "Annie", "Ziko"];
        array_push($team, "Arka");

        echo '<ol>';
        foreach ($team as $person) {
            echo '<li>' . $person . '</li>';
        }
        echo '</ol>';
    ?>
</body>
</html>