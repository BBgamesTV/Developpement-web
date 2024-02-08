<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base php</title>
</head>
<body>
<a href="./heure.php">Mission 2.php</a><br>
<a href="./departement.php">Mission 3.php</a><br>
<a href="./For.php">Mission 4.php</a><br>
<a href="./Rand.php">Mission 5.php</a><br>
<a href="./Rand2.php">Mission 6.php</a>

<br>
<br>
<?php

$note1 = 0;
$note2 = 5;
$note3 = 10;
$note4 = 18;
$moyenne = ($note1 + $note2 + $note3 + $note4)/4;
echo "note 1 : ". $note1."<br>";
echo "note 2 : ". $note2."<br>";
echo "note 3 : ".$note3."<br>";
echo "note 4 : ". $note4."<br>";
echo "la moyenne : ".$moyenne."<br>";

if (($note1 > 10 or $note2 > 10 or $note3 > 10 or $note4 > 10) ) {
    echo "Note au dessus de la moyenne";
} else {
    echo "Note en dessous de la moyenne";
}



?>
</body>
</html>
