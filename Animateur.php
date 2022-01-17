<?php
require_once "User.php";

Class Animateur extends User
{
    private string $stand;

    public function __construct($id_user=NULL, $nom_user=NULL, $prenom_user=NULL, $mdp_user=NULL, $mail_user=NULL, $phone_user=NULL, $adresse_user=NULL, $cd_postal_user=NULL, $stand=NULL)
    {
      if(!is_null($id_user))
        parent::__construct($id_user, $nom_user, $prenom_user, $mdp_user, $mail_user, $phone_user, $adresse_user, $cd_postal_user);
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

?>
