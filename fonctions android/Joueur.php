<?php
require_once "User.php";
require_once "Grille.php";
//ANDROIIIIIIIIIIIIIIIIIIIIIIIIIIID
class Joueur extends User
{
    // SUUUUUUUUUUUUUU
    private $nombre_points;
    private $lesGrillesduJoueur;

    public function __construct($id_user = null, $nom_user = null, $prenom_user = null, $mdp_user = null, $phone_user = null, $adresse_user = null, $cd_postale_user = null, $nombre_points = null)
    {
        if (!is_null($id_user)) {
            parent::__construct($id_user, $nom_user, $prenom_user, $mdp_user, $phone_user, $adresse_user, $cd_postale_user);
            $this->nombre_points = $nombre_points;
            $this->lesGrillesduJoueur = array();
        }
    }

    //Createjoueur
    public function GetNbPoints()
    {
        return $this->nombre_points;
    }

    public static function GetLesGrillesJoueur($idJoueur)
    {
        try {
            $sql = "SELECT * FROM grille WHERE id_user = :idUser";
            $req_prep = Connexion::pdo()->prepare($sql);
            $req_prep->execute(["idUser" => $idJoueur]);
            $req_prep -> setFetchMode(PDO::FETCH_CLASS, 'Grille');
            $tab_results = $req_prep->fetchAll();
            return $tab_results;
        } catch (PDOException $e) {
            echo $e->getMessage();
            die("Erreur lors de la récupération des grilles");
        }
    }
//id_user_1 est la clé primaire d'un animateur pour éviter la confusion
    static public function NotationJeu($id_user, $id_jeu, $id_user_1, $note)
    {
      $sql = "INSERT INTO noter VALUES(:tag_id_user, :tag_id_jeu, :tag_id_user_1, :tag_note, 0, NOW());";
      $req_prep = Connexion::pdo()->prepare($sql);

      $arrayName = array("tag_id_user" => $id_user,
          "tag_id_jeu" => $id_jeu,
          "tag_id_user_1" => $id_user_1,
          "tag_note" => $note);
        try{
           $req_prep->execute($arrayName);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
            die('Erreur lors de la notation du jeux');
        }
    }

    // la lame qu'on ne voit pas est la plus dangereuse

}
