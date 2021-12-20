<?php

Class Jeu
{
    private int $id_jeu;
    private string $nom_jeu;
    private string $categorie_jeu;


    public function UpdateJeu($id_jeu, $nom_jeu, $categorie_jeu)
    {
        $this->id_jeu = $id_jeu;
        $this->nom_jeu = $nom_jeu;
        $this->categorie_jeu = $categorie_jeu;
    }

    public function ToString()
    {
        return "ID : " + $this->id_jeu + " | Nom : " + $this->nom_jeu + " | Catégorie : " + $this->categorie_jeu;
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
        return $this->nom_jeu ;
    }

    public function GetCategorieJeu()
    {
        return $this->categorie_jeu;
    }

    
}

?>
