<?php /*if($_SERVER["HTTPS"] != "on") { header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]); exit(); } */?>
<?php
//require 'Config/Connexion.php';
//session_start();

if(!isset($_GET["uc"]) ){
  $uc = "accueil";
}else{
  $uc = $_GET['uc'];
}

switch ($uc) {
  case 'accueil':
  require('Model/Note.php');
  require('Model/Jeu.php');
  require('View/accueil.view.php');
  break;

//Seulement si la personne est un organisateur
//permet à l'organisateur de valider les grilles
  case 'grille':
  require('Model/Grille.php');
  require('View/grille.view.php');
  break;


  case 'exposant':
  require('Model/Exposant.php');
  require('View/exposant.view.php');
  break;

 //Permet d'aller sur un formulaire pour que l'organisateur puisse créer un user
  case 'create_user':
  require('Model/Organisateur.php');
  require('View/creation_user.view.php');
  break;
  
  case 'connection':
    require('View/Form/connection.view.php');
    break;

  case 'jeux':
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require('./Config/Connexion.php');
    Connexion::connect();
    require('./Model/Jeu.php');
    $tab_jeux = Jeu::GetTousLesJeux();
    require('./View/Jeux/jeux.view.php');
    break;

  default:
  require('View/notFound.view.php');


}
?>
