<?php
require_once "Organisateur.php";
require_once "Jeu.php";
require_once "Connexion.php";


Connexion::connect();

// Organisateur::AjouterOrganisateur(50, 'ezaaze','fazzer', 'ezazetzet', 'ezaatezze', 'zeaztzet', 'aezrzet', 'ezazzet', 'zeezate');
// Organisateur::AjouterExposant(30, 'ezaaze','fazzer', 'ezazetzet', 'ezaatezze', 'zeaztzet', 'aezrzet', 'ezazzet', 'zeezate');

$LesJeux = Jeu::GetTousLesjeux();


echo "<ul>";

foreach($LesJeux as $jeu)
	{
		echo "<li>";
		echo $jeu ->ToString();
        echo "</li>";
	}


echo "</ul>";
 ?>
