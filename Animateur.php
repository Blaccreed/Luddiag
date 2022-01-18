<?php
require_once "User.php";

class Animateur extends User
{
    private $stand;

    public function __construct($id_user = null, $nom_user = null, $prenom_user = null, $mdp_user = null, $mail_user = null, $phone_user = null, $adresse_user = null, $cd_postal_user = null, $stand = null)
    {
        if (!is_null($id_user)) {
            parent::__construct($id_user, $nom_user, $prenom_user, $mdp_user, $mail_user, $phone_user, $adresse_user, $cd_postal_user);
        }

        $this->stand = $stand;
    }

    public function SetStand($stand)
    {
        $this->stand = $stand;
    }

    public function GetStand()
    {
        return $this->stand;
    }

    public function ValiderNote()
    {
        //SQL a faire
    }
}
