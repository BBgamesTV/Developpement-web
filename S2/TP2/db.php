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
    $module = $_POST["module"];
    $note = $_POST["note"];
    $commentaire = $_POST["commentaire"];
    $enseignant = $_POST["enseignant"];

    $sql = "INSERT INTO note (Module, note , Commentaire, Enseignant) VALUES ('$module', '$note', '$commentaire', '$enseignant')";
    if ($conn->query($sql) === TRUE) {
      echo "OK ";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();