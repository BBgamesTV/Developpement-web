<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tp2_notes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])){
    $module = htmlspecialchars($_POST["module"]);
    $note = htmlspecialchars($_POST["note"]);
    if($note > 20){
      header('location: ./index.php?err=2');
      $conn->close();
    }
    $commentaire = htmlspecialchars($_POST["commentaire"]);
    $enseignant = htmlspecialchars($_POST["enseignant"]);

    $sql = "INSERT INTO note (Module, note , Commentaire, Enseignant) VALUES ('$module', '$note', '$commentaire', '$enseignant')";
    if ($conn->query($sql) === TRUE) {
      echo "OK ";
      header('location: ./index.php?err=0');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();