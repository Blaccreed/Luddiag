<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("../../../Config/Connection.php");
require_once("../../../Model/User.php");
require_once("../../../Model/Organisateur.php");
require_once("../../../Model/Exposant.php");

var_dump($_POST);
extract($_POST);

/*if($role != "Exposant" || $role != "Organisateur" || $role != "Animateur" || $role != "Joueur"){
    session_start();
    $_SESSION['error'] = "Veuillez saisir un role valide";
    //Go to the previous page
    header("Location: ../../../index.php?uc=creer_compte");
    return;
}*/

Connexion::connect();

try{
    if($role == "Exposant")
    {
        Organisateur::AjouterExposant($nom, $prenom, $mdp, $email, $tel, $adresse, $code_postal, $type_exposant);
    }
    else if($role == "Organisateur")
    {

    }
    else if($role == "Animateur")
    {
        
    }
    else if($role == "Joueur")
    {
        if(!Organisateur::AjouterJoueur($nom, $prenom, $mdp, $email, $tel, $adresse, $code_postal))
        {
            $_SESSION['error'] = "Une erreur est survenue lors de l'ajout d'un joueur";
        }
    }
    else{
        $_SESSION['error'] = "L'ajout de l'utilisateur a échoué.";
    }

}catch(Exception $e){
    echo $e->getMessage();
    return;
}


?>