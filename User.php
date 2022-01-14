<?php

abstract Class User
{
    abstract  $id_user;
    abstract  $nom_user;
    abstract  $prenom_user;
    abstract  $mdp_user;
    abstract  $mail_user;
    abstract  $phone_user;
    abstract  $adresse_user;
    abstract  $cd_postal_user;

    public function __construct($id_user = null , $nom_user = null , $prenom_user = null, $mdp_user = null, $mail_user = null, $phone_user = null, $adresse_user = null, $cd_postal_user = null)
    {
        if(!is_null($id_user))
        {
            $this->id_user = $id_user;
            $this->nom_user = $nom_user;
            $this->prenom_user = $prenom_user;
            $this->mdp_user = $mdp_user;
            $this->mail_user = $mail_user;
            $this->phone_user = $phone_user;
            $this->adresse_user = $adresse_user;
            $this->cd_postal_user = $cd_postal_user;
        }
        
    }

    abstract public function UpdateUser($id_user, $nom_user, $prenom_user, $mdp_user, $mail_user, $phone_user, $adresse_user, $cd_postal_user)
    {
        $this->id_user = $id_user;
        $this->nom_user = $nom_user;
        $this->prenom_user = $prenom_user;
        $this->mdp_user = $mdp_user;
        $this->mail_user = $mail_user;
        $this->phone_user = $phone_user;
        $this->adresse_user = $adresse_user;
        $this->cd_postal_user = $cd_postal_user;
    }

    abstract public function ToString()
    {
        return "ID : " + $this->id_user + " | Nom : " + $this->nom_user + " | Prenom : " + $this->prenom_user + " | Mot de passe : " + $this->mdp_user + " | Mail : " + $this->mail_user + " | Phone : " + $this->phone_user + " | Adresse : " + $this->adresse_user + " | Code postal : " + $this->cd_postal_user;
    }

    abstract public function SetIdUser($id_user)
    {
        $this->id_user = $id_user;
    }

    abstract public function SetNomUser($nom_user)
    {
        $this->nom_user = $nom_user;
    }

    abstract public function SetPrenomUser($prenom_user)
    {
        $this->prenom_user = $prenom_user;
    }

    abstract public function SetMdpUser($mdp_user)
    {
        $this->mdp_user = $mdp_user;
    }

    abstract public function SetMailsUser($mail_user)
    {
        $this->mail_user = $mail_user;
    }

    abstract public function SetPhoneUser($phone_user)
    {
        $this->phone_user = $phone_user;
    }

    abstract public function SetAdresseUser($adresse_user)
    {
        $this->adresse_user = $adresse_user;
    }

    abstract public function SetCdPostalUser($cd_postal_user)
    {
        $this->cd_postal_user = $cd_postal_user;
    }

    abstract public function GetIdUser()
    {
        return $this->id_user;
    }

    abstract public function GetNomUser()
    {
        return $this->nom_user ;
    }

    abstract public function GetPrenomUser()
    {
        return $this->prenom_user;
    }

    abstract public function GetMdpUser()
    {
        return $this->mdp_user;
    }

    abstract public function GetMailUser()
    {
        return $this->mail_user;
    }

    abstract public function GetPhoneUser()
    {
        return $this->phone_user;
    }

    abstract public function GetAdresseUser()
    {
        return $this->adresse_user;
    }

    abstract public function GetCdPostUser()
    {
        return $this->cd_postal_user;
    }
}

?>
