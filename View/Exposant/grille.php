

<?php


// We get the id of the user
$id_user = $_SESSION['id_user'];

//We get the id of the grille in the url
$id_grille = $_GET['id_grille'];


$sql = "select note, nom_jeu 

from contenu co, jeu je, noter no

where co.id_jeu = je.id_jeu
and no.id_jeu = je.id_jeu
and id_grille = :id_grille";

//We execute the query
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id_grille', $id_grille);
$stmt->execute();
//We get the result of the query
$result = $stmt->fetchAll();

return $result;



?>