<?php

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

    // #region Organisateur

    case 'validation_grille':
        require 'Model/Grille.php';
        require_once './View/Organisateur/Grille/validation_grille.view.php';
        break;

    case 'creer_compte':
        require_once './View/Organisateur/Form/creation_compte.view.php';
        break;

    // #endregion


    case 'connection':
        require_once './Config/Connection.php';
        require_once 'View/Form/connection.view.php';
        break;

    case 'deconnection':
        session_destroy();
        header('Location: index.php');
        break;

    /*
        Inutile ???

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
    */

    default:
        require_once 'View/notFound.view.php';

}
