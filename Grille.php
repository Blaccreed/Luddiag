<?php

class Grille
{
    private int $id_grille;
    private bool $rempli;
    private string $type_grille;
    private DateTime $date_deb_grille;
    private DateTime $date_fin_grille;
    private Joueur $proprietaire;
    private $lesJeux = array();

    public function __construct(int $id_grille,bool $rempli,string $type_grille,DateTime $date_deb_grille,DateTime $date_fin_grille,Joueur $proprietaire,array $lesJeux)
    {
        $this->id_grille = $id_grille;
        $this->rempli = $rempli;
        $this->type_grille = $type_grille;
        $this->date_deb_grille = $date_deb_grille;
        $this->date_fin_grille = $date_fin_grille;
        $this->proprietaire = $proprietaire;
        array_push($this->lesJeux, $lesJeux);
    }

    public function __toString(): string
    {
        //Met tous les jeux en string
        foreach ($this->lesJeux as &$unJeu)
            $lesJeuxString = (string) $unJeu;
        $prenom_proprietaire = $this->proprietaire->GetPrenomUser();
        return $this->id_grille ." - Rempli? ". $this->rempli ." - Type grille? ". $this->type_grille ." - Date de debut de la grille ". $this->date_deb_grille ." - Date de fin de la grille ? ". $this->date_fin_grille ." - Prénom du proprietaire? ". (string) $prenom_proprietaire ." - Les jeux ". $lesJeuxString();
    }

    public function UpdateGrille(int $id_grille,bool $rempli,string $type_grille,DateTime $date_deb_grille,DateTime $date_fin_grille,Joueur $proprietaire,array $lesJeux): void
    {
        $this->id_grille = $id_grille;
        $this->rempli = $rempli;
        $this->type_grille = $type_grille;
        $this->date_deb_grille = $date_deb_grille;
        $this->date_fin_grille = $date_fin_grille;
        $this->proprietaire = $proprietaire;
        $this->lesJeux = $lesJeux;
    }

    public function estRempli(): bool
    {
        return $this->rempli;
    }
}
