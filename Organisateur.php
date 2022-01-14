<?php

Class Organisateur extends User
{
  private string $fonction;

  public function __construct($id_user=NULL, $nom_user=NULL, $prenom_user= NULL, $mdp_user=NULL, $mail_user= NULL, $phone_user = NULL, $adresse_user=NULL, $cd_postal_user= NULL,$fonction= NULL)
  {
    if(!is_null($id_user))
    {
      parent::__construct($id_user, $nom_user, $prenom_user, $mdp_user, $mail_user, $phone_user, $adresse_user, $cd_postal_user);
      $this->fonction = $fonction;
    }
  }

<<<<<<< HEAD
  public function GetFonction()
  {
    return $this->fonction;
  }
=======
    public function GetFonction()
    {
      return $this->fonction;
    }
>>>>>>> 392fa375fdf088881ae553a5e4ced6e63fff075d

  public function SetFonction($fonction)
  {
    $this->fonction = $fonction;
  }

  public static function AjouterExposant($nom_user, $prenom_user, $mdp_user, $mail_user, $phone_user, $adresse_user, $cd_postal_user, $type_exposant)
  {
    $requetePreparee = "INSERT INTO voiture VALUES(:tag_immatriculation, :tag_marque,:tag_couleur);";

    $req_prep = Connexion::pdo()->prepare($requetePreparee);

    $arrayName = array("tag_immatriculation" => $immat,
    "tag_marque" => $marque,
    "tag_couleur" => $couleur);

    try {
      $req_prep->execute($arrayName);
    } catch (PDOException $e) {
      echo "erreur: ".$e ->getMessage()."</br>";
    }
  }
}

?>
