<?php
require_once "User.php";

class Organisateur extends User
{
    private $fonction;

    public function __construct($id_user = null, $nom_user = null, $prenom_user = null, $mdp_user = null, $mail_user = null, $phone_user = null, $adresse_user = null, $cd_postal_user = null, $fonction = null)
    {
        if (!is_null($id_user)) {
            parent::__construct($id_user, $nom_user, $prenom_user, $mdp_user, $mail_user, $phone_user, $adresse_user, $cd_postal_user);
            $this->fonction = $fonction;
        }
    }

    public function GetFonction()
    {
        return $this->fonction;
    }

    public function SetFonction($fonction)
    {
        $this->fonction = $fonction;
    }

    public static function AjouterAnimateur($id, $nom_user, $prenom_user, $mdp_user, $mail_user, $phone_user, $adresse_user, $cd_postal_user, $stand)
    {
        $requetePreparee = "INSERT INTO user VALUES(:tag_id, :tag_nom, :tag_prenom, :tag_mdp, :tag_mail, :tag_phone, :tag_adress, :tag_zip);
                        INSERT INTO organisateur VALUES(:tag_id, :tag_stand);";

        $req_prep = Connexion::pdo()->prepare($requetePreparee);

        $arrayName = array("tag_id" => $id,
            "tag_nom" => $nom_user,
            "tag_prenom" => $prenom_user,
            "tag_mdp" => $mdp_user,
            "tag_mail" => $mail_user,
            "tag_phone" => $phone_user,
            "tag_adress" => $adresse_user,
            "tag_zip" => $cd_postal_user,
            "tag_stand" => $stand);

        try {
            $req_prep->execute($arrayName);
        } catch (PDOException $e) {
            echo "erreur: " . $e->getMessage() . "</br>";
        }
    }

    public static function AjouterExposant($id, $nom_user, $prenom_user, $mdp_user, $mail_user, $phone_user, $adresse_user, $cd_postal_user, $type_exposant)
    {
        $requetePreparee = "INSERT INTO user VALUES(:tag_id, :tag_nom, :tag_prenom, :tag_mdp, :tag_mail, :tag_phone, :tag_adress, :tag_zip);
                        INSERT INTO exposant VALUES(:tag_id, :tag_type_exposant);";

        $req_prep = Connexion::pdo()->prepare($requetePreparee);

        $arrayName = array("tag_id" => $id,
            "tag_nom" => $nom_user,
            "tag_prenom" => $prenom_user,
            "tag_mdp" => $mdp_user,
            "tag_mail" => $mail_user,
            "tag_phone" => $phone_user,
            "tag_adress" => $adresse_user,
            "tag_zip" => $cd_postal_user,
            "tag_type_exposant" => $type_exposant);

        try {
            $req_prep->execute($arrayName);
        } catch (PDOException $e) {
            echo "erreur: " . $e->getMessage() . "</br>";
        }
    }
}
