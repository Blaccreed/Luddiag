<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require_once "../../Config/Connection.php";
require_once "../../Model/User.php";

if (!isset($_POST['mail']) && !isset($_POST['mdp'])) {

    $_SESSION['error'] = 'Une erreur est survenue';
    header('Location: ../../index.php?uc=connection');
    return;
}

if (empty(['identifiant', 'password'])) {
    $_SESSION['error'] = 'Veuillez remplir tout les champs';
    header('Location: ../../index.php?uc=connection');
    return;
}
extract($_POST);

Connexion::connect();
$iduser = User::SeConnecter($mail, $mdp);

if ($iduser == null) {
    $_SESSION['error'] = 'Identifiant ou mot de passe incorrect';
    header('Location: ../../index.php?uc=connection');
    return;
}

if (User::testRole($iduser, $role)) {
    $_SESSION['id_user'] = $user->id_user;
    $_SESSION['role'] = $role;
    header('Location: ../../index.php?uc=accueil');
} else {
    $_SESSION['error'] = "Vous n'avez pas le droit de vous connecter en tant qu'$role";
    header('Location: ../../index.php?uc=connection');
    return;
}
