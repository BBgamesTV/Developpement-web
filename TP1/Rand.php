<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random</title>
</head>
<body>
<a href="./Base-Php.php">Mission 1.php</a><br>
<a href="./heure.php">Mission 2.php</a><br>
<a href="./Departement.php">Mission 3.php</a><br>
<a href="./For.php">Mission 4.php</a><br>
<a href="./Rand2.php">Mission 6.php</a>
<br>
<br>
<?php

$de = rand(0,6);
$compteur = 0;

while ($de != 6){
    echo "tirage = ".$de."<br/>";
    $de = rand(0,6);
    $compteur += 1;
}
echo "6 en ".$compteur." tirages<br/>";



?>

    
</body>
</html>