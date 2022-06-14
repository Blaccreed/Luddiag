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
        <div class="flex flex-col w-full h-2/3 items-center">
            <div class="flex flex-col justify-evenly items-center mt-10 bg-green-50 shadow-md rounded w-1/3 h-1/3 px-8">
                <label class="text-xl underline font-semibold">Sélectionner le numéro de la grille utilisateur</label>
                <input 
                    name="grille" 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline  invalid:border-pink-500 invalid:text-pink-600
                    focus:invalid:border-pink-500 focus:invalid:ring-pink-500" 
                    id="grille-input" 
                    type="text" 
                    placeholder="Numéro de grille">
                <?php
                echo "<button onclick='getGrille($id)' id='button-validation' class='border-white bg-green-500 hover:bg-green-600 border-2 hover:text-white w-32 h-10 rounded-lg'>Valider</button>";
                ?>
            </div>
            <div id="grille-container" class="w-full flex flex-row justify-center mt-5">

            </div>
        </div>
        
    </div>
</body>
</html>