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
<a href="./Rand.php">Mission 5.php</a>
<br>
<br>
<?php

$de = rand(0,100);
$compteur = 5000000;
$moyenne = 0;


for ($i=0;$i<$compteur;$i++){
    #echo "tirage = ".$de."<br/>";
    #echo $moyenne."<br/>";
    $de = rand(0,100);
    $moyenne += $de;
}

echo "Moyenne des tirages : ". $moyenne/$compteur ."<br/>";



?>

    
</body>
</html>