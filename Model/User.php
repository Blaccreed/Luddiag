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

    public function __construct(
        $id_user = null,
        $nom_user = null,
        $prenom_user = null,
        $mdp_user = null,
        $mail_user = null,
        $phone_user = null,
        $adresse_user = null,
        $cd_postal_user = null
    ) {
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

    public function UpdateUser(
        $id_user,
        $nom_user,
        $prenom_user,
        $mdp_user,
        $mail_user,
        $phone_user,
        $adresse_user,
        $cd_postal_user
    ) {
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
        return 'ID : ' +
            $this->id_user +
            ' | Nom : ' +
            $this->nom_user +
            ' | Prenom : ' +
            $this->prenom_user +
            ' | Mot de passe : ' +
            $this->mdp_user +
            ' | Mail : ' +
            $this->mail_user +
            ' | Phone : ' +
            $this->phone_user +
            ' | Adresse : ' +
            $this->adresse_user +
            ' | Code postal : ' +
            $this->cd_postal_user;
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
    //calvin
    public function GetCdPostUser()
    {
        return $this->cd_postal_user;
    }

    public static function SeConnecter($mail_user, $mdp_user)
    {
        $requetePreparee =
            'SELECT * FROM user_flip WHERE mail_user = :tag_mail_user AND mdp_user = :tag_mdp_user';

        $req_prep = Connexion::pdo()->prepare($requetePreparee);

        $arrayName = [
            'tag_mail_user' => $mail_user,
            'tag_mdp_user' => $mdp_user,
        ];

        try {
            $req_prep->execute($arrayName);
            $reponse = $req_prep->rowCount();
            if ($reponse == 1) {
                $req_prep->setFetchMode(PDO::FETCH_CLASS, 'User');
                $user = $req_prep->fetch();
                return $user->id_user;
                //On return l'id ce qui nous permettra de savoir si il s'agit de quel type d'utilisateur il s'agit

            } else {
                //On retourne null pour montrer que aucun utilisateur n'as ete trouver
                return null;
            }
        } catch (PDOException $e) {
            echo 'erreur: ' . $e->getMessage() . '</br>';
        }
    }

    public static function TestRole($idUser, $role){
        $sql = "select Count(*) as nb from $role where id_user = :idUser";
        $req_prep = Connexion::pdo()->prepare($sql);
        $arrayName = [
            'idUser' => $idUser,
        ];
        try {
            $req_prep->execute($arrayName);
            $reponse = $req_prep->fetch();
            if ($reponse['nb'] == 1) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo 'erreur: ' . $e->getMessage() . '</br>';
        }
    }
    

    public static function InscriptionJoueur(
        $id,
        $nom_user,
        $prenom_user,
        $mdp_user,
        $mail_user,
        $phone_user,
        $adresse_user,
        $cd_postal_user,
        $type_exposant
    ) {
        $requetePreparee = "INSERT INTO user VALUES(:tag_id, :tag_nom, :tag_prenom, :tag_mdp, :tag_mail, :tag_phone, :tag_adress, :tag_zip);
                        INSERT INTO joueur VALUES(:tag_id, :tag_type_exposant);";

        $req_prep = Connexion::pdo()->prepare($requetePreparee);

        $arrayName = [
            'tag_id' => $id,
            'tag_nom' => $nom_user,
            'tag_prenom' => $prenom_user,
            'tag_mdp' => $mdp_user,
            'tag_mail' => $mail_user,
            'tag_phone' => $phone_user,
            'tag_adress' => $adresse_user,
            'tag_zip' => $cd_postal_user,
            'tag_type_exposant' => $type_exposant,
        ];

        try {
            $req_prep->execute($arrayName);
        } catch (PDOException $e) {
            echo 'erreur: ' . $e->getMessage() . '</br>';
        }
    }
}
