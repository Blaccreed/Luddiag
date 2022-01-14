<?php

Class Joueur extends User
{

  private int $nombre_points;
  private array $lesGrillesduJoueur;

  public function __construct($id_user = NULL, $nom_user = NULL, $prenom_user = NULL, $mdp_user = NULL, $phone_user=NULL, $adresse_user= NULL , $cd_postale_user=NULL, $nombre_points= NULL)
  {
    if(!is_null($id_user))
    {
      parent ::_construct($id_user, $nom_user, $prenom_user, $mdp_user, $phone_user, $adresse_user, $cd_postale_user);
      $this->nombre_points = $nombre_points;
      $this->lesGrillesduJoueur = array();
    }
  }

  public function GetNbPoints()
  {
    return $this->nombre_points;
  }

  public function  GetLesGrillesJoueur()
  {
    return $this->lesGrillesduJoueur;
  }

  public static function AjouterPoint($id_user)
  {
    foreach($LesGrillesduJoueur as $grille)
    {
      if($grille->estRempli())
      {
        try {
          $requete_preparee = "UPDATE joueur SET nombre_points = nombre_points + 10 WHERE id_user = :tag_id_user;";
          $req_prep = Connexion::pdo()->prepare($requetePreparee);
          $arrayName = array("tag_id_user" => $id_user);
          $req_prep->execute($arrayName);
        } catch (PDOException $e) {
          echo "erreur: ".$e ->getMessage()."</br>";
          die("Une erreur est survenu");
        }
      }
    }
  }

  public function AjouterGrille($grille)
  {
    array_push($this->LesGrillesduJoueur, $grile);
  }
  
}


?>
