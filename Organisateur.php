<?php

Class Organisateur extends User
{
    private string $fonction;

    public function __construct($id_user, $nom_user, $prenom_user, $mdp_user, $mail_user, $phone_user, $adresse_user, $cd_postal_user,$fonction)
    {
        parent::__construct($id_user, $nom_user, $prenom_user, $mdp_user, $mail_user, $phone_user, $adresse_user, $cd_postal_user);
        $this->fonction = $fonction;
    }

    public function GetFonction()
    {
       return $this->fonction;
    }

    public function SetFonction($fonction)
    {
      $this->fonction = $fonction;
    }
}

?>
