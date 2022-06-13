<?php
    $id = $_SESSION['id_user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="./View/Organisateur/Grille/validation_grille.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <title>Validation grille</title>
</head>
<body>
    <div class="h-screen w-screen">
        <!-- include the navbar -->
        <?php 
            include './View/Components/navbar_organisateur.view.php';
            if (isset($_SESSION['error'])) {
                echo '<div id="error" class="bg-red-500 text-white p-2">';
                    echo '<button onClick="closeError()" class="text-white float-right">X</button>';
                echo '</div>';
                unset($_SESSION['error']);
            }
        ?>
        <div class="flex flex-row w-full h-2/3 items-center justify-evenly">
            <div class="flex flex-col justify-evenly items-center mt-20 border-2 border-gray-200 w-1/3 h-1/3 px-8">
                <label class="text-xl underline font-semibold">Selectionner le numero de la grille utilisateur</label>
                <input id="grille-input" placeholder="Identifiant" type="text" class="bg-zinc-600 border-2 border-white pl-2 w-full" name="grille"/>
                <?php
                echo "<button onclick='getGrille($id)' id='button-validation' class='border-white bg-blue-300 border-2 hover:bg-blue-400 hover:text-zinc-600 w-32 h-10 rounded-lg'>Valider</button>";
                ?>
            </div>
        </div>
        <div id="grille-container" class="w-full">

        </div>
    </div>
</body>
</html>