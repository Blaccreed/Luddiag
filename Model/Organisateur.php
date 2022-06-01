<?php
require_once "User.php";
//session_start();

class Organisateur extends User
{
    private $fonction;

    /*
    Le constructeur est inutile vu que les seuls chose utile de cette classe sont les inserts into 
    qui sont static et ne requiert pas le constructeur
    */
    public function __construct($id_user = null, $nom_user = null, $prenom_user = null, $mdp_user = null, $mail_user = null, $phone_user = null, $adresse_user = null, $cd_postal_user = null, $fonction = null)
    {
        if (!is_null($id_user)) {
            parent::__construct($id_user, $nom_user, $prenom_user, $mdp_user, $mail_user, $phone_user, $adresse_user, $cd_postal_user);
            $this->fonction = $fonction;
        }
    }

    /*

    inutile ???

    public function GetFonction()
    {
        return $this->fonction;
    }

    public function SetFonction($fonction)
    {
        $this->fonction = $fonction;
    }
    
    */

    public static function AjouterAnimateur($nom_user, $prenom_user, $mdp_user, $mail_user, $phone_user, $adresse_user, $cd_postal_user, $stand)
    {
        $requetePreparee = "INSERT INTO user_flip VALUES(DEFAULT, :tag_nom, :tag_prenom, :tag_mdp, :tag_mail, :tag_phone, :tag_adress, :tag_zip)";
        $req_prep = Connexion::pdo()->prepare($requetePreparee);

        $arrayName = array(
            "tag_nom" => $nom_user,
            "tag_prenom" => $prenom_user,
            "tag_mdp" => $mdp_user,
            "tag_mail" => $mail_user,
            "tag_phone" => $phone_user,
            "tag_adress" => $adresse_user,
            "tag_zip" => $cd_postal_user        
        );
        
        try {
            $req_prep->execute($arrayName);
        } catch (PDOException $e) {
            echo "erreur: " . $e->getMessage() . "</br>";
            return false;
        }
        
        $id = Connexion::pdo()->lastInsertId();

        $sql = "INSERT INTO Animateur VALUES(:tag_id, :tag_stand);";
        $req_prep = Connexion::pdo()->prepare($sql);
        $arrayName = array(
            "tag_id" => $id,
            "tag_stand" => $stand
        );

        try {
            $req_prep->execute($arrayName);
        } catch (PDOException $e) {
            echo "erreur: " . $e->getMessage() . "</br>";
            return false;
        }
        return true;
    }

    public static function AjouterExposant($nom_user, $prenom_user, $mdp_user, $mail_user, $phone_user, $adresse_user, $code_postal_user, $type_exposant, $id_jeux)
    {
        $requetePreparee = "INSERT INTO user_flip VALUES(DEFAULT, :tag_nom, :tag_prenom, :tag_mdp, :tag_mail, :tag_phone, :tag_adress, :tag_zip)";
        $req_prep = Connexion::pdo()->prepare($requetePreparee);

        $arrayName = array(
            "tag_nom" => $nom_user,
            "tag_prenom" => $prenom_user,
            "tag_mdp" => $mdp_user,
            "tag_mail" => $mail_user,
            "tag_phone" => $phone_user,
            "tag_adress" => $adresse_user,
            "tag_zip" => $code_postal_user
        );
        try {
            $req_prep->execute($arrayName);
        } catch (PDOException $e) {
            echo "erreur: " . $e->getMessage() . "</br>";
            return false;
        }
        
        $id = Connexion::pdo()->lastInsertId();

        $sql = "INSERT INTO Exposant VALUES(:tag_id, :tag_type, :tag_jeux);";
        $req_prep = Connexion::pdo()->prepare($sql);
        $arrayName = array(
            "tag_id" => $id,
            "tag_type" => $type_exposant,
            "tag_jeux" => $id_jeux
        );

        try {
            $req_prep->execute($arrayName);
            return true;
        } catch (PDOException $e) {
            echo "erreur: " . $e->getMessage() . "</br>";
            return false;
        }
        return true;

    }
}
