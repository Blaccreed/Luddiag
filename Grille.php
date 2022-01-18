<?php

class Grille
{
    private $id_grille;
    private $rempli;
    private $type_grille;
    private $date_deb_grille;
    private $date_fin_grille;
    private $id_user;
    private $lesJeux;

    public function __construct($id_grille = null , $rempli = null, $type_grille = null, $date_deb_grille = null, $date_fin_grille = null, $id_user = null, $lesJeux = null)
    {
        if(!is_null($id_grille))
        {
            $this->id_grille = $id_grille;
            $this->rempli = $rempli;
            $this->type_grille = $type_grille;
            $this->date_deb_grille = $date_deb_grille;
            $this->date_fin_grille = $date_fin_grille;
            $this->id_user = $id_user;
            $this->lesJeux = array();
        }
    }

    public function __toString(): string
    {
        //Met tous les jeux en string
        foreach ($this->lesJeux as &$unJeu)
            $lesJeuxString = (string) $unJeu;
        $prenom_proprietaire = $this->proprietaire->GetPrenomUser();
        return $this->id_grille ." - Rempli? ". $this->rempli ." - Type grille? ". $this->type_grille ." - Date de debut de la grille ". $this->date_deb_grille ." - Date de fin de la grille ? ". $this->date_fin_grille ." - Prénom du proprietaire? ". (string) $prenom_proprietaire ." - Les jeux ". $lesJeuxString();
    }

    public function UpdateGrille(int $id_grille,bool $rempli,string $type_grille,DateTime $date_deb_grille,DateTime $date_fin_grille,$id_joueur,array $lesJeux): void
    {
        $this->id_grille = $id_grille;
        $this->rempli = $rempli;
        $this->type_grille = $type_grille;
        $this->date_deb_grille = $date_deb_grille;
        $this->date_fin_grille = $date_fin_grille;
        $this->id_joueur = $id_joueur;
        $this->lesJeux = $lesJeux;
    }

    public function estRempli(): bool
    {
        return $this->rempli;
    }
}
