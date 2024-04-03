<?php
include_once("./conn_db.php");

$sql = "SELECT ID, Module, note, Commentaire, Enseignant FROM note";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["ID"]. " - Module: " . $row["Module"]. " - Note: " . $row["note"]. " - Commentaire: " . $row["Commentaire"]. " - Enseignant: " . $row["Enseignant"]. "<br>";
  }
} else {
  echo "0 résultats";
}
?>