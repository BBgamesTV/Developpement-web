<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('location: ./index.php?err=1');
    exit;
}

$data = [
    'prenom' => '',
    'nom' => '',
    'email' => '',
    'age' => ''
];

$data['prenom'] = htmlspecialchars($_POST["prenom"]);
$data['nom'] = htmlspecialchars($_POST["nom"]);
$data['email'] = htmlspecialchars($_POST["email"]);
$data['age'] = htmlspecialchars($_POST["age"]);

if (empty($data['prenom']) || empty($data['nom']) || empty($data['email']) || empty($data['age'])) {
    header('location: ./index.php?err=1');
    exit;
}

if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    header('location: ./index.php?err=2');
    exit;
}

// Convertir le tableau en chaîne JSON
$json = json_encode($data);

// Ajouter les nouvelles données au fichier sans écraser les données existantes
file_put_contents('./contacts.json', $json, FILE_APPEND,);
// header('location: ./index.php?success=1');