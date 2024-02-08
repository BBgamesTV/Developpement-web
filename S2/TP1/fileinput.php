<?php
// Récupération des données du formulaire
if(isset($_POST['submit'])){
    $prenom = htmlspecialchars($_POST["prenom"]);
    $nom = htmlspecialchars($_POST["nom"]);
    $email = htmlspecialchars($_POST["email"]);
    $age = htmlspecialchars($_POST["age"]);
} else {
    header('location: ./index.php?err=1');
}
// Création d'un tableau associatif pour stocker les données
$data = [
        'prenom' => $prenom,
        'nom' => $nom,
        'email' => $email,
        'age' => $age,
];
// Encodage du tableau en JSON
$jsonData = json_encode($data, JSON_PRETTY_PRINT);

// Enregistrement du JSON dans un fichier
file_put_contents('data.json', $jsonData);

