
<?php

Class Note
{
    private $id_note;
    private $note;
    private $unJeu;
    private $unJoueur;
    private $unAnimateur;
    private $valider;

    public function __construct($id_note = null,$note = null, $unJeu = null, $unJoueur = null , $unAnimateur = null, $valider = null)
    {
        if(!is_null($id_note))
        {
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
        echo "Note : " + $this->note + " | Nom : " + $this->nom_jeu + " | Catégorie : " + $this->categorie_jeu + " | Jeu : " + $this->unJeu->GetNomJeu() + " | Joueur : " + $this->unJoueur->GetNomUser() + " | Animateur : " + $this->unAnimateur->GetNomUser();
    }

}

?>
