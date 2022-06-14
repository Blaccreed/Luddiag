<?php

/*
    La classe complète sert strictement à rien
    on ne récupèrera jamais globalement tout les jeux
    car on a aucun cas d'utilisation qui réponds à ces besoins
*/

use FTP\Connection;

class Jeu
{
    private $id_jeu;
    private $nom_jeu;
    private $categorie_jeu;
    private $note_moyenne;
    private $nb_votant;

    public function __construct($id_jeu = null, $nom_jeu = null, $categorie_jeu = null, $image = null, $note_moyenne = null, $nb_votant = null)
    {
        if (!is_null($id_jeu)) {
            $this->id_jeu = $id_jeu;
            $this->nom_jeu = $nom_jeu;
            $this->categorie_jeu = $categorie_jeu;
            $this->note_moyenne = $note_moyenne;
            $this->nb_votant = $nb_votant;
        }
    }
    
    public static function UpdateJeu($id_jeu, $nom_jeu, $categorie_jeu, $image)
    {
        $requetePreparee = "UPDATE jeu SET nom_jeu = :tag_nom_jeu, categorie_jeu = :tag_categorie_jeu, image = :tag_image WHERE id_jeu = :tag_id_jeu;";

        $req_prep = Connexion::pdo()->prepare($requetePreparee);

        $arrayName = array("tag_id_jeu" => $id_jeu,
            "tag_nom_jeu" => $nom_jeu,
            "tag_categorie_jeu" => $categorie_jeu,
          "tag_image" => $image);

        try {
            $req_prep->execute($arrayName);
        } catch (PDOException $e) {
            echo "erreur: " . $e->getMessage() . "</br>";
        }
    }


    public static function GetJeuExposant($idExposant){
        
        Connexion::connect();
        //On va dans un premier temps re
        $sql = "SELECT id_jeu FROM Exposant WHERE id_user=:idExposant";
        
        $req_prep = Connexion::pdo()->prepare($sql);
        $arrayName = [
            'idExposant' => $idExposant,
        ];
        try {
            $req_prep->execute($arrayName);
            $reponse = $req_prep->rowCount();
            if ($reponse == 1) {
                $user = $req_prep->fetch();
                $id_jeu = $user['id_jeu'];

            } else {
                return null;
            }
        } catch (PDOException $e) {
            echo 'erreur: ' . $e->getMessage() . '</br>';
        }

        $sql = "SELECT 
                    jeu.id_jeu,
                    jeu.nom_jeu,
                    jeu.categorie_jeu, 
                    jeu.image, 
                    avg(noter.note) as note_moyenne, 
                    count(noter.id_jeu) as nb_votant 
                FROM jeu 
                    inner join noter 
                    on jeu.id_jeu = noter.id_jeu
                WHERE jeu.id_jeu= :id_jeu
                group by jeu.id_jeu;";

        $req_prep = Connexion::pdo()->prepare($sql);
        $arrayName = array("id_jeu" => $id_jeu);
        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'Jeu');
        try {
            $req_prep->execute($arrayName);
            $tab = $req_prep->fetch();
            return $tab;
        } catch (PDOException $e) {
        echo "erreur: " . $e->getMessage() . "</br>";
        }
    }

    public static function GetTousLesjeux()
    {
        $requetePreparee = "SELECT 
                                jeu.id_jeu,
                                jeu.nom_jeu,
                                jeu.categorie_jeu, 
                                jeu.image, 
                                avg(noter.note) as note_moyenne, 
                                count(noter.id_jeu) as nb_votant 
                            FROM jeu 
                            inner join noter 
                            on jeu.id_jeu = noter.id_jeu
                            group by jeu.id_jeu;";
        $reponse = Connexion::pdo()->query($requetePreparee);
        $reponse->setFetchMode(PDO::FETCH_CLASS, 'Jeu');
        $tab = $reponse->fetchAll();

        return $tab;
    }

    public function ToString()
    {
        echo "<p>$this->id_jeu, $this->nom_jeu,$this->categorie_jeu </p>";
    }

    public function SetIdJeu($id_jeu)
    {
        $this->id_jeu = $id_jeu;
    }

    public function SetNomJeu($nom_jeu)
    {
        $this->nom_jeu = $nom_jeu;
    }

    public function SetCategorieJeu($categorie_jeu)
    {
        $this->categorie_jeu = $categorie_jeu;
    }

    public function GetIdjeu()
    {
        return $this->id_jeu;
    }

    public function GetNomJeu()
    {
        return $this->nom_jeu;
    }

    public function GetCategorieJeu()
    {
        return $this->categorie_jeu;
    }

    public function GetNoteMoyenne()
    {
        return $this->note_moyenne;
    }

    public function GetNbVotant()
    {
        return $this->nb_votant;
    }

    public function GetImage()
    {
        return $this->image;
    }
}
