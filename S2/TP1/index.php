<!DOCTYPE html>
<html lang="fr">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="./css/style.css" rel="stylesheet">
    </head>
    <body>

    <form action="post.php" method="POST">
        <label for="prenom">Prénom<sup style="color: red;">*</sup>
        <input type="text" id="prenom" name="prenom" placeholder="Prénom" required></label>
        <label for="nom">Nom<sup style="color: red;">*</sup>
        <input type="text" id="nom" name="nom" placeholder="Nom" required></label>
        <label for="email">Email<sup style="color: red;">*</sup>
        <input type="email" id="email" name="email" placeholder="Email" required></label>
        <label for="age">Age<sup style="color: red;">*</sup>
        <select name="age">
            <?php
            for ($i = 7; $i <= 130; $i++) {
                echo("<option value='$i'>". $i ." ans </option>");
            }
            ?>
        </select></label>
        <input type="submit" name="submit" placeholder="Envoyer">
    </form>
    
    </body>
</html>