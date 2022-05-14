<?php

class Note
{
    private $id_note;
    private $note;
    private $unJeu;
    private $unJoueur;
    private $unAnimateur;
    private $valider;

    public function __construct(
        $id_note = null,
        $note = null,
        $unJeu = null,
        $unJoueur = null,
        $unAnimateur = null,
        $valider = null
    ) {
        if (!is_null($id_note)) {
            $this->id_note = $id_note;
            $this->note = $note;
            $this->unJeu = $unJeu;
            $this->unJoueur = $unJoueur;
            $this->unAnimateur = $unAnimateur;
            $this->valider = $valider;
        }
    }

    public function GetNote()
    {
        return $this->note;
    }

    public function GetJeu()
    {
        return $this->unJeu;
    }

    public function GetJoueur()
    {
        return $this->unJoueur;
    }

    public function GetAnimateur()
    {
        return $this->unAnimateur;
    }

    public function ToString()
    {
        echo 'Note : ' +
            $this->note +
            ' | Nom : ' +
            $this->nom_jeu +
            ' | Catégorie : ' +
            $this->categorie_jeu +
            ' | Jeu : ' +
            $this->unJeu->GetNomJeu() +
            ' | Joueur : ' +
            $this->unJoueur->GetNomUser() +
            ' | Animateur : ' +
            $this->unAnimateur->GetNomUser();
    }

    public function noteJeuParCategorie()
    {
        $q = connexion::pdo()->prepare("

     SELECT *
     FROM noter as n
     INNER JOIN jeu as j
     ON j.id_jeu = n.id_jeu
     GROUP BY  categorie_jeu

     ");

        $q->execute([]);

        $_noteJeuParCategorie = $q->fetch(PDO::FETCH_OBJ);

        return $_noteJeuParCategorie;
    }
}

?>
