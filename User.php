<?php

class User
{
    protected $id_user;
    protected $nom_user;
    protected $prenom_user;
    protected $mdp_user;
    protected $mail_user;
    protected $phone_user;
    protected $adresse_user;
    protected $cd_postal_user;

    public function __construct($id_user = null, $nom_user = null, $prenom_user = null, $mdp_user = null, $mail_user = null, $phone_user = null, $adresse_user = null, $cd_postal_user = null)
    {
        if (!is_null($id_user)) {
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
        return "ID : "+$this->id_user+" | Nom : "+$this->nom_user+" | Prenom : "+$this->prenom_user+" | Mot de passe : "+$this->mdp_user+" | Mail : "+$this->mail_user+" | Phone : "+$this->phone_user+" | Adresse : "+$this->adresse_user+" | Code postal : "+$this->cd_postal_user;
    }

    public function GetIdUser()
    {
        return $this->id_user;
    }

    public function GetNomUser()
    {
        return $this->nom_user;
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

    static public function SeConnecter($mail_user, $mdp_user)
    {
        $requetePreparee = "SELECT * FROM user_flip WHERE mail_user = :tag_mail_user AND mdp_user = :tag_mdp_user";

        $req_prep = Connexion::pdo()->prepare($requetePreparee);

        $arrayName = array("tag_mail_user" => $mail_user,
        "tag_mdp_user" => $mdp_user);
        
        try {
            $req_prep->execute($arrayName);
            $count = $req_prep->rowCount();
          if($count == 1)
          {
              echo "connecté";
          }
          else{
              echo "e-mail ou mot de passe incorrect";
          }
        } catch (PDOException $e) {
           echo "erreur: " . $e->getMessage() . "</br>";
        }
    }

}

