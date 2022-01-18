<?php
require_once "User.php";
require_once "Grille.php";

class Joueur extends User
{

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

    public function NotationJeux($idJeux, $note)
    {
        try{
            $sql = "";
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
            die('Erreur lors de la notation du jeux');
        }
    }

    public static function AjouterPoint($id_user)
    {

    }

    public function AjouterGrille($grille)
    {

    }

}
