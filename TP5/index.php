<?php
// on inclut le code de bootstrap.php
require_once __DIR__.'/bootstrap.php';

// 1. Créez une variable $titre
$titre = 'Noms et prénoms des étudiants';

// les données avec noms de famille
$etudiants = [
    ['prénom' => 'Alice', 'nom' => 'Doe', 'passions' => ['tennis','vélo','tuto makeup'], 'notes' => ["modules" => [ "Algo"=>10, "Math"=>15, "Anglais"=>8 ]]],
    ['prénom' => 'Bob', 'nom' => 'Smith', 'passions' => ['natation','cinéma','infromatique'], 'notes' => ["modules" => ["Algo"=> 17,"Math"=>15,"Anglais"=>18]]],
    ['prénom' => 'Eve', 'nom' => 'Johnson', 'passions' => ['live npc','php','le flambeau'], 'notes' => ["modules" => [ "Algo"=> 13, "Math"=>15 , "Anglais"=>4 ]]],
    ['prénom' => 'Malaury']];

// 2. Transmettez $titre à la fonction render
// 3. Utilisez une balise Twig pour afficher le titre dans le template
echo $twig->render('index.twig.html', ['etudiants' => $etudiants, 'titre' => $titre]);
?>


<!--  -->
<!-- , -->