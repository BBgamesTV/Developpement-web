<!DOCTYPE html>
<html lang="fr">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

    <?php
require "fonction_mission4.php";

$notes = [
    "Mathieu" => [
        "Infographie" => ["15","10","20"],
        "Algo" => ["18","12"],
        "Projet" => ["14","12","11"],
        "Basse de données" => ["14","20","20"],
        "Communication" => ["13","11","10"],
    ],
    "Jeff" => [
        "Infographie" => ["13","10"],
        "Algo" => ["10"],
        "Projet" => ["11","10","15"],
        "Basse de données" => ["9","8","16"],
        "Communication" => ["10","11","15"],
    ]
];

echo "<br>";

echo "<table border='1' style=width:100%>";

$i = 1;
foreach ($notes as $clef => $valeur) {
    echo "<th colspan=4>" . $clef . "</th>";
    echo "<tr><th>Module</th><th>Moyenne</th><th>Max</th><th>Min</th></tr>";
    foreach($valeur as $key => $val) {
        $max = calculer_max($val);
        $min = calculer_min($val);
        $moyenne = calculer_moyenne($val);
        echo "<tr><td>" . $key . "</td><td>" . round($moyenne, 2) . "</td><td>" . $max . "</td><td>" . $min . "</td></tr>";
    }
    $i++;   

}
echo "</table>";
echo "<br>";




?>
    
    </body>
</html>

