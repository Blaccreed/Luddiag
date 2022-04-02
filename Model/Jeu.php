<?php

class Jeu
{
    private $id_jeu;
    private $nom_jeu;
    private $categorie_jeu;
    private $SesNotes;

    public function __construct($id_jeu = null, $nom_jeu = null, $categorie_jeu = null, $image = null)
    {
        if (!is_null($id_jeu)) {
            $this->id_jeu = $id_jeu;
            $this->nom_jeu = $nom_jeu;
            $this->categorie_jeu = $categorie_jeu;
            $this->SesNotes = array();
            $this->image = $image;
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

    public static function GetTousLesjeux()
    {
        $requetePreparee = "SELECT * FROM jeu";
        $reponse = Connexion::pdo()->query($requetePreparee);
        $reponse->setFetchMode(PDO::FETCH_CLASS, 'Jeu');
        $tab = $reponse->fetchAll();

        return $tab;
    }

    public function ToString()
    {
        echo "<p>$this->id_jeu,  $this->nom_jeu,$this->categorie_jeu </p>";
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

    public function GetSesNotes()
    {
        return $this->SesNotes;
    }

    public function GetImage()
    {
        return $this->image;
    }
}
