<?php

Class Animateur extends User
{
    private string $stand;

    public function __construct($id_user, $nom_user, $prenom_user, $mdp_user, $mail_user, $phone_user, $adresse_user, $cd_postal_user,$stand)
    {
        parent::__construct();
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
}

?>