<?php
// on inclut le code de bootstrap.php
require_once __DIR__.'./bootstrap.php';
// les données
$etudiants = [
[ 'prénom' => 'Alice' ],
[ 'prénom' => 'Bob' ],
[ 'prénom' => 'Eve' ],
];
// On fabrique le rendu de la vue
// en utilisant le gabarit (template en anglais) index.twig.html
// en transmettant les données contenues dans le tableau associatif $etudiants
// Le rendu de la vue est envoyé au navigateur en faisant un "echo"
echo $twig->render('index.twig.html', ['etudiants' => $etudiants] );
?>