<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>département 41</title>
</head>
<body>
<a href="./Base-Php.php">Mission 1.php</a><br>
<a href="./heure.php">Mission 2.php</a><br>
<a href="./For.php">Mission 4.php</a><br>
<a href="./Rand.php">Mission 5.php</a><br>
<a href="./Rand2.php">Mission 6.php</a>

<br>
<br>

<?php

$departement = 41000;

while ($departement != 41999) {
    echo "Numéro Département : ".$departement."<br/>";
    $departement += 1;
}



?>
</body>
</html>