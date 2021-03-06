

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Import the database connection
require_once('../../../Config/Connection.php');
//Connect to the database
Connexion::connect();

// We get the id of the user
$id_user = $_POST['id_user'];

//We get the id of the grille in the url
$id_grille = $_POST['id_grille'];


$sql = "select note, nom_jeu 

from contenu co, jeu je, noter no

where co.id_jeu = je.id_jeu
and no.id_jeu = je.id_jeu
and id_grille = :id_grille";

//We execute the query
$stmt = Connexion::pdo()->prepare($sql);
$stmt->bindParam(':id_grille', $id_grille);
$stmt->execute();
//We get the result of the query
$result = $stmt->fetchAll();

return $result;

?>