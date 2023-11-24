<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>heure</title>
</head>
<body>
<a href="./Base-Php.php">Mission 1.php</a><br>
<a href="./departement.php">Mission 3.php</a><br>
<a href="./For.php">Mission 4.php</a><br>
<a href="./Rand.php">Mission 5.php</a><br>
<a href="./Rand2.php">Mission 6.php</a>
<br>
<br>
<?php
$heure = 16;

echo "Heure : ".$heure ."h<br/>";


if ($heure < 12 && $heure > 0) {
    echo "Matin";
} else if ($heure > 12 && $heure < 18){
    echo "Apres-midi";
} else if ($heure > 24) {
    echo "Heure invalide";
} else {
    echo "Soir";
}



?>
</body>
</html>


