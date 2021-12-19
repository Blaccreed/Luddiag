<?php

abstract Class User
{
    private int $id_user;
    private string $nom_user;
    private string $prenom_user;
    private string $mdp_user;
    private string $mail_user;
    private string $phone_user;
    private string $adresse_user;
    private string $cd_postal_user;

    public function UpdateUser($id_user, $nom_user, $prenom_user, $mdp_user, $mail_user, $phone_user, $adresse_user, $cd_postal_user)
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

    public function ToString()
    {
        return "ID : " + $this->id_user + " | Nom : " + $this->nom_user + " | Prenom : " + $this->prenom_user + " | Mot de passe : " + $this->mdp_user + " | Mail : " + $this->mail_user + " | Phone : " + $this->phone_user + " | Adresse : " + $this->adresse_user + " | Code postal : " + $this->cd_postal_user;
    }   

    public function SetIdUser($id_user)
    {
        $this->id_user = $id_user;
    }

    public function SetNomUser($nom_user)
    {
        $this->nom_user = $nom_user;
    }

    public function SetPrenomUser($prenom_user)
    {
        $this->prenom_user = $prenom_user;
    }

    public function SetMdpUser($mdp_user)
    {
        $this->mdp_user = $mdp_user;
    }

    public function SetMailsUser($mail_user)
    {
        $this->mail_user = $mail_user;
    }

    public function SetPhoneUser($phone_user)
    {
        $this->phone_user = $phone_user;
    }

    public function SetAdresseUser($adresse_user)
    {
        $this->adresse_user = $adresse_user;
    }

    public function SetCdPostalUser($cd_postal_user)
    {
        $this->cd_postal_user = $cd_postal_user;
    }

    public function GetIdUser()
    { 
        return $this->id_user; 
    }

    public function GetNomUser()
    { 
        return $this->nom_user ; 
    }

    public function GetPrenomUser()
    {
        return $this->prenom_user;
    }

    public function GetMdpUser()
    { 
        return $this->mdp_user; 
    }

    public function GetMailUser()
    { 
        return $this->mail_user; 
    }

    public function GetPhoneUser()
    { 
        return $this->phone_user; 
    }

    public function GetAdresseUser()
    { 
        return $this->adresse_user; 
    }

    public function GetCdPostUser()
    { 
        return $this->cd_postal_user; 
    }
}

?>