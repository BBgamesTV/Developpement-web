<?php

if(isset($_POST['submit'])){
    $prenom = htmlspecialchars($_POST["prenom"]);
    $nom = htmlspecialchars($_POST["nom"]);
    $email = htmlspecialchars($_POST["email"]);
    $age = htmlspecialchars($_POST["age"]);
} else {
    header('location: ./index.php?err=1');
}

include('./fileinput.php')
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body style="display:block;">
        <p style=color:green;>Merci, vos informations ont bien été enregistrées</p>
        <table>
            <colgroup>
                <col span="1" style="width: 25%;">
                <col span="1" style="width: 25%;">
                <col span="1" style="width: 25%;">
                <col span="1" style="width: 25%;">
            </colgroup>
            <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Age</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        echo("<td>$prenom</td>");
                        echo("<td>$nom</td>");
                        echo("<td>$email</td>");
                        echo("<td>$age</td>");
                    ?>
                </tr>
            </tbody>
        </table>
        
    </body>
</html>