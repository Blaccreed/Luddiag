<?php

session_start();

extract($_POST);

if(empty($grille))
{
    $_SESSION['error'] = "Veuillez selectionner une grille";
    header('Location: ../../../index.php?uc=validation_grille');
    return;
}
?>