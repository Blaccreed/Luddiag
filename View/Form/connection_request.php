<?php

ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


session_start();
require_once("../../Config/Connection.php");
require_once("../../Model/User.php");


if (isset($_POST['mail']) && isset($_POST['mdp'])) {
    //Si le formulaire a ete soumis

    var_dump($_POST);
    if (!empty(['identifiant', 'password'])) {
        //Si tous les champs ont ete remplis
        extract($_POST);


        echo "mail :" . $mail . "<br>";
        echo "mdp :" . $mdp . "<br>";

        Connexion::connect();

        //On vérifie si l'utilisateur existe
        $connection = User::SeConnecter($mail, $mdp);

        if($connection == null){
            echo "Mail ou not de passe incorrect";
            return;
        }

        echo $connection;


        

        //On test si l'utilisateur est un organisateur


        //Si l'admin est trouvé alors on crée des variables de session pour cet admin
        if ($admin) {
            $_SESSION['admin_id'] = $admin->id_admin;
            $_SESSION['login'] = $admin->login_admin;
            $_SESSION['mail_admin'] = $admin->mail_admin;

            //redirection vers la page index et le cas d'utilisation accueil
            //redirect_intent_or('index.php?uc=accueil');
        }
    }
}

?>
