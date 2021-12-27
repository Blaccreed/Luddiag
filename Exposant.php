<?php

Class Exposant extends User
{
    private string $type_exposant;

    public function __construct($id_user, $nom_user, $prenom_user, $mdp_user, $mail_user, $phone_user, $adresse_user, $cd_postal_user,$type_exposant)
    {
        parent::__construct($id_user, $nom_user, $prenom_user, $mdp_user, $mail_user, $phone_user, $adresse_user, $cd_postal_user);
        $this->type_exposant = $type_exposant;
    }

    public function SetType_exposant($type_exposant)
    {
        $this->type_exposant = $type_exposant;
    }

    public function GetType_exposant()
    {
        return $this->type_exposant;
    }
}

?>