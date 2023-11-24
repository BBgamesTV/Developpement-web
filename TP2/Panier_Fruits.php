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
    <a href="./Voitures.php">Mission 2.php</a><br>
    <a href="./departement.php">Mission 3.php</a><br>
    <a href="./Rand.php">Mission 5.php</a><br>
    <a href="./Rand2.php">Mission 6.php</a><br><br>

    <?php

    $fruits = ["Ananans","Poires","Bananes"];

    for($i=0;$i<count($fruits);$i++){
        echo $fruits[$i]."\t";
    }
    echo "<br>";
    $rand = rand(0,count($fruits)-1);
    echo $rand ." ". $fruits[$rand];

    echo "<br><br>RAND 2<br><br>";

   

    for($i=0;$i<2;$i++) {
        while($fruits[$rand] != ""){
            $rand = rand(0,count($fruits)-1);
            echo $rand ." ". $fruits[$rand];
            $fruits[$rand] = "";
        }
    }

    echo "<br>";
    for($i=0;$i<count($fruits);$i++){
        echo $fruits[$i]."\t";
    }

    ?>
    
    
    </body>
</html>