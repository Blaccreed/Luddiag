<?php

ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

session_start();
require_once("../../Config/Connection.php");
require_once("../../Model/User.php");


if (isset($_POST['mail']) && isset($_POST['mdp'])) {

    if (!empty(['identifiant', 'password'])) {
        extract($_POST);

        Connexion::connect();
        $iduser = User::SeConnecter($mail, $mdp);

        if($iduser == null){
            echo "Mail ou not de passe incorrect";
            return;
        }

        echo $iduser;

        if(User::testRole($iduser, $role))
        {
            $_SESSION['id_user'] = $user->id_user;
            $_SESSION['role'] = $role;
            header('Location: ../../index.php');
        }
        else
        {
            echo "role pas ok";
            return;
        }
    }
}

?>
