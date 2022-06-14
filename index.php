<?php

session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if (!isset($_GET["uc"])) {
    $uc = "accueil";
} else {
    $uc = $_GET['uc'];
}

switch ($uc) {
    case 'accueil':
        if (!isset($_SESSION['role'])) {
            require_once './View/Home/accueil.view.php';
            break;
        }
        if ($_SESSION['role'] == 'Exposant') {

            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
            
            require_once './Config/Connection.php';
            //On recupere le jeux de l'exposant
            require_once './Model/Jeu.php';
            $list = Jeu::GetJeuExposant($_SESSION['id_user']);

            $nom = $list->getNomJeu();
            $image = $list->image;
            $nbVotant = $list->GetNbVotant();
            $noteMoyenne = $list->GetNoteMoyenne();
            
            require_once './View/Home/accueil_exposant.view.php';
            
            break;
        }
        if ($_SESSION['role'] == 'Organisateur') {
            require_once './View/Home/accueil_organisateur.view.php';
            break;
        }
        else{
            require_once './View/Home/accueil.view.php';
            break;
        }

    // #region Organisateur

    case 'validation_grille':
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
        echo "test";
        require_once 'View/notFound.view.php';

}
