<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "../../../Config/Connection.php";
require_once "../../../Model/User.php";
require_once "../../../Model/Organisateur.php";
require_once "../../../Model/Exposant.php";

extract($_POST);

session_start();
// On regarde si l'utilisateur à bien sélectionner un role correctement
if (!isset($_POST['role'])) {
    $_SESSION['error'] = "Veuillez saisir un role valide";

    header("Location: ../../../index.php?uc=creer_compte");
    return;
}

Connexion::connect();

if ($role == "exposant") {
    if (!Organisateur::AjouterExposant($nom, $prenom, $mdp, $email, $tel, $adresse, $code_postal, $type_exposant, $id_jeux)) {
        //Si l'ajout a échoué on envoie un message d'erreur
        $_SESSION['error'] = "L'ajout de l'utilisateur a échoué.";
        header("Location: ../../../index.php?uc=creer_compte");
        return;
    }
} else if ($role == "animateur") {
    if (Organisateur::AjouterAnimateur($nom, $prenom, $mdp, $email, $tel, $adresse, $code_postal, $stand)) {
        //Si l'ajout a échoué on envoie un message d'erreur
        $_SESSION['error'] = "L'ajout de l'utilisateur a échoué.";
        header("Location: ../../../index.php?uc=creer_compte");
        return;
    }
} else {
    $_SESSION['error'] = "L'ajout de l'utilisateur a échoué.";
    header("Location: ../../../index.php?uc=creer_compte");
    return;
}

$_SESSION['success'] = "L'ajout de l'utilisateur a réussi.";
header("Location: ../../../index.php?uc=creer_compte");