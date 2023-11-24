<?php
// on inclut le code de bootstrap.php
require_once __DIR__.'/bootstrap.php';

// 1. Créez une variable $titre
$titre = 'Noms et prénoms des étudiants';

// les données avec noms de famille
$etudiants = [
    ['prénom' => 'Alice', 'nom' => 'Doe', 'passion' => ['tennis','vélo','tuto makeup']],
    ['prénom' => 'Bob', 'nom' => 'Smith', 'passion' => ['natation','cinéma','infromatique']],
    ['prénom' => 'Eve', 'nom' => 'Johnson', 'passion' => ['live npc','','tuto makeup']],
    ['prénom' => 'Malaury'],
];

// 2. Transmettez $titre à la fonction render
// 3. Utilisez une balise Twig pour afficher le titre dans le template
echo $twig->render('index.twig.html', ['etudiants' => $etudiants, 'titre' => $titre]);
?>
