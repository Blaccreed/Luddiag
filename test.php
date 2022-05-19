<?php
require_once './Model/Organisateur.php';
require_once './Model/Jeu.php';
require_once './Model/Note.php';
require_once './Model/Connexion.php';

ini_set('display_errors', 1);

// Connexion::connect();

// Organisateur::AjouterOrganisateur(50, 'ezaaze','fazzer', 'ezazetzet', 'ezaatezze', 'zeaztzet', 'aezrzet', 'ezazzet', 'zeezate');
// Organisateur::AjouterExposant(30, 'ezaaze','fazzer', 'ezazetzet', 'ezaatezze', 'zeaztzet', 'aezrzet', 'ezazzet', 'zeezate');

// echo "------------Grille-----------------";
// $tab_Grille = Joueur::GetLesGrillesJoueur(1);
//
// echo "<pre>";
// 	print_r($tab_Grille);
// echo "</pre>";
//
// echo "------------Joueur-----------------";
//
// $tab_jeux = Jeu::GetTousLesjeux();
//
// echo "<pre>";
// 	print_r($tab_jeux);
// echo "</pre>";

//echo "-----------Notation--------------------";

//Joueur::NotationJeu(2, 1, 1, 10);

//echo "---------------------User--------------------"
// User::SeConnecter('dylan.hacquart@flip.fr', 'dylan');

while ($_noteJeuParCategorie = Note::noteJeuParCategorie()) {
    echo $_noteJeuParCategorie->noteParjeu;
}

while ($_noteMoyenneNoteParJeu = Note::GetMoyenneNoteParJeu()) {
    echo $_noteMoyenneNoteParJeu->moyenneParJeu;
}

while (
    $_nombreTotalDeJoueursAyantNoteUnJeu = Note::GetNombreTotalDeJoueursAyantNoteUnJeu()
) {
    echo $_nombreTotalDeJoueursAyantNoteUnJeu->nbJoueursAyantNoteUnJeu;
}
?>

