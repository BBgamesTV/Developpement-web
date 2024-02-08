<!DOCTYPE html>
<html lang="fr">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <a href="./index.php">Mission 1.php</a><br>
    <a href="./Panier_Fruits.php">Mission 3.php</a><br>
    <a href="./departement.php">Mission 3.php</a><br>
    <a href="./Rand.php">Mission 5.php</a><br>
    <a href="./Rand2.php">Mission 6.php</a><br><br>

    <?php

    $voitures = ["","","","","","","Tesla","Ferrari","Peugeot"];

    for($i=0;$i<9;$i++){
        if ($voitures[$i] != ""){
            echo "Voitures Indices : ". $i . " : ". $voitures[$i]."</br>";
        }
    }
    echo "</br>";
    $i = 0;
    $elt = 1;
    while($i!=9){
        if ($voitures[$i] != ""){
            echo "Voitures Indices : ". $elt . " : ". $voitures[$i]."</br>";
            $elt++;
        }
        $i++;
    }

    ?>
    
    </body>
</html>