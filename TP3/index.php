<?php

$tab_assoc = array(
    "Nom" => "Martin",
    "Prénom" => "Simon",
    "Age" => 25,
    "Adresse" => "14 rue des paquerette",
    "Ville" => "Blois",
    "Code postal" => "41100"
);
foreach ($tab_assoc as $clef => $valeur) {
    echo $clef . " : " . $valeur . "<br>";
}
echo "<br>";
$notes = array(
    "Infographie" => 15,
    "Algo" => 18,
    "Projet" => 14,
    "Bases de données" => 14,
    "Communication" => 13
);
echo "<br>";
$i = 1;
foreach ($notes as $clef => $valeur) {
    echo "note " . $i . " (" . $clef . ") : " . $valeur . "<br>";
    $i++;
}
echo "<br>";
echo "<br>";
echo "<table border='1'>";
echo "<tr><th>N° de la note</th><th>Ressource</th><th>Note</th></tr>";
$i = 1;
foreach ($notes as $clef => $valeur) {
    echo "<tr><td>" . $i . "</td><td>" . $clef . "</td><td>" . $valeur . "</td></tr>";
    $i++;
}
echo "</table>";
echo "<br>";

$Mathieu = array(
    "Infographie" => "15",
    "Algo" => "18",
    "Projet" => "14",
    "Basse de données" => "14",
    "Communication" => "13",
);

$Jeff = array(
    "Infographie" => "15",
    "Algo" => "18",
    "Projet" => "14",
    "Basse de données" => "14",
    "Communication" => "13",
);
    
$etudiants_notes = array(
    $etudiant = $Jeff
)



?>