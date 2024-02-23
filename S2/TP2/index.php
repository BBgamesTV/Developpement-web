<!DOCTYPE html>
<html lang="fr">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="./css/style.css" rel="stylesheet">
    </head>
    <body>

    <form action="./db.php" method="POST">

        <h2>Module :<sup style="color: red;">*</sup>
        <input type="text" id="Module" name="module" placeholder="Module" required></h2>

        <h2>Note<sup style="color: red;">*</sup>
        <input type="text" id="Note" name="note" placeholder="Note" required></h2>

        <h2>Commentaire<sup style="color: red;">*</sup>
        <input type="text" id="Commentaire" name="commentaire" placeholder="Commentaire" required></h2>

        <h2>enseignant<sup style="color: red;">*</sup>
        <select name="enseignant">
            <option value='M.Laserre'>M.Laserre 🛜</option>
            <option value='M.Mofid'>M.Mofid 🔊</option>
            <option value='Mme.Bontemps'>Mme.Bontemps 🪴</option>
            <option value='M.Bettembourg'>M.Bettembourg 🎥</option>
            <option value='Mme.Gros-Desormeaux'>Mme.Gros-Desormeaux 💻</option>
            <option value='Mme.Martinez-Pons'>Mme.Martinez-Pons 🫖</option>
        </select></h2>

        <input type="submit" name="submit" placeholder="Envoyer">
        <?php
        if(isset($_GET["err"])) {
            if($_GET["err"] == 1){
                echo "<p style='color:red'>Désolé une erreur s’est produite</p>";
            };
        };
        ?>
    </form>
    
    </body>
</html>