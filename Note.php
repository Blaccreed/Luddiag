
<?php

Class Note
{
    private int $id_note;
    private float $note;
    private Jeu $unJeu;
    private Joueur $unJoueur;
    private Animateur $unAnimateur;
    private Bool $valider;

    public function __construct($id_note = null,$note = null, $unJeu = null, $unJoueur = null , $unAnimateur = null, $valider = null)
    {
        if(!is_null($id_note))
        {
            $this->id_note = $id_note;
            $this->note = $snote;
            $this->unJeu = $unJeu;
            $this->unJoueur = $unJoueur;
            $this->unAnimateur = $unAnimateur;
            $this->valider = $valider;
        }
    }

    public function UpdateNote($id_note ,$note, $unJeu, $unJoueur, $unAnimateur, $valider)
    {
        $this->note = $note;
        $this->unJeu = $unJeu;
        $this->unJoueur = $unJoueur;
        $this->unAnimateur = $unAnimateur;
        $this->valider = $valider;

        //SQL UPDATE
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
        return "Note : " + $this->note + " | Nom : " + $this->nom_jeu + " | Catégorie : " + $this->categorie_jeu + " | Jeu : " + $this->unJeu->GetNomJeu() + " | Joueur : " + $this->unJoueur->GetNomUser() + " | Animateur : " + $this->unAnimateur->GetNomUser();
    }

}

?>
