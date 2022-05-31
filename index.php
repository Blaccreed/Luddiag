<?php /*if($_SERVER["HTTPS"] != "on") { header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]); exit(); } */?>
<?php
//require 'Config/Connexion.php';
session_start();

if (!isset($_GET["uc"])) {
    $uc = "accueil";
} else {
    $uc = $_GET['uc'];
}

switch ($uc) {

    case 'accueil':
        if (!isset($_SESSION['role'])) {
            include './View/Home/accueil.view.php';
            break;
        }
        if ($_SESSION['role'] == 'exposant') {
            include './View/Home/accueil_exposant.view.php';
            break;
        }
        if ($_SESSION['role'] == 'organisateur') {
            include './View/Home/accueil_organisateur.view.php';
            break;
        }

//Seulement si la personne est un organisateur
    //permet à l'organisateur de valider les grilles
    case 'grille':
        require 'Model/Grille.php';
        require_once './View/grille.view.php';
        break;

    // #region Organisateur

    case 'validation_grille':
        require 'Model/Grille.php';
        require_once './View/Organisateur/Grille/validation_grille.view.php';
        break;

    case 'creer_compte':
        require_once './View/Organisateur/Form/creation_compte.view.php';
        break;

    // #endregion

    case 'exposant':
        require 'Model/Exposant.php';
        require 'View/exposant.view.php';
        break;

    case 'connection':
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        require_once './Config/Connection.php';
        //Ajout pour permettre de faire la connexion
        //require('Model/Login.php');
        require_once 'View/Form/connection.view.php';
        break;

    case 'deconnection':
        session_destroy();
        header('Location: index.php');
        break;

    case 'jeux':
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        require_once './Config/Connection.php';
        Connexion::connect();
        require_once './Model/Jeu.php';
        $tab_jeux = Jeu::GetTousLesJeux();
        require_once './View/jeux.view.php';
        break;

    default:
        require_once 'View/notFound.view.php';

}
