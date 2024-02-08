<!DOCTYPE html>
<html lang="fr">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <a href="./Voitures.php">Mission 2.php</a><br>
    <a href="./Panier_Fruits.php">Mission 3.php</a><br>
    <a href="./departement.php">Mission 3.php</a><br>
    <a href="./Rand.php">Mission 5.php</a><br>
    <a href="./Rand2.php">Mission 6.php</a><br><br>
    
    <?php

    $prenom = ["Malaury,Bastien,Hugo"];
    $fruits = ["Pommes","Poires","Pêches","Ananas","Bananes"];

    $legumes_array = array("Haricots","Choux","Aubergines","Carottes","Petits Pois");

    echo $fruits[0] . "  ". $legumes_array[0]."</br>";

    $fruits[0] = "Litchi";

    echo "Le nouveau fruit a l'indice 0 est -> " . $fruits[0] . "</br>";

    $fruits[1] = "Fraise";
    $fruits[2] = "Framboise";
    $fruits[3] = "Raisin";
    $fruits[4] = "Nectarine"."</br></br>";

    echo $fruits[0] . "  ". $fruits[1] . "  ". $fruits[2] . "  ". $fruits[3] . "  ". $fruits[4];


    for($i=0;$i<5;$i++) {
        echo "Indice ".$i." : ".$fruits[$i]."</br>";
    }

    ?>

    </body>
</html>