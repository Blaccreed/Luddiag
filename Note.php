<?php

Class Note
{
    private float $note;
    private string $nom_jeu;
    private string $categorie_jeu;
    private Jeu $unJeu;
    private Joueur $unJoueur;
    private Animateur $unAnimateur;


    public function UpdateNote($note, $nom_jeu, $categorie_jeu, $unJeu, $unJoueur, $unAnimateur)
    {
        $this->note = $note;
        $this->nom_jeu = $nom_jeu;
        $this->categorie_jeu = $categorie_jeu;
        $this->unJeu = $unJeu;
        $this->unJoueur = $unJoueur;
        $this->unAnimateur = $unAnimateur;
    }

    public function ToString()
    {
        return "Note : " + $this->note + " | Nom : " + $this->nom_jeu + " | Catégorie : " + $this->categorie_jeu + " | Jeu : " + $this->unJeu->GetNomJeu() + " | Joueur : " + $this->unJoueur->GetNomUser() + " | Animateur : " + $this->unAnimateur->GetNomUser();
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

    public function Note()
    {
        // A COMPLETER
    }

    public function GetNote()
    {
        return $this->note;
    }

    public function GetIdJeu()
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


}

?>
