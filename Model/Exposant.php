<?php
require_once "User.php";
//session_start();


class Exposant extends User
{
    private $type_exposant;

    public function __construct($id_user, $nom_user, $prenom_user, $mdp_user, $mail_user, $phone_user, $adresse_user, $cd_postal_user, $type_exposant, $id_jeu)
    {
        parent::__construct($id_user, $nom_user, $prenom_user, $mdp_user, $mail_user, $phone_user, $adresse_user, $cd_postal_user);
        $this->type_exposant = $type_exposant;
        $this->id_jeu = $id_jeu;
    }

    public function SetType_exposant($type_exposant)
    {
        $this->type_exposant = $type_exposant;
    }

    public function GetType_exposant()
    {
        return $this->type_exposant;
    }

    public function GetId_Jeu()
    {
        return $this->id_jeu;
    }

    public static function GetNoteExposant($id_jeu)
    {
      //a faire requ^te pour récupérer les notes de l'exposant, jointure à faire.
    }
}
