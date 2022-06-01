<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Validation grille</title>
</head>
<body>
    <div class="h-screen w-screen">
        <!-- include the navbar -->
        <?php 
            include './View/Components/navbar_organisateur.view.php';
        ?>
        <div class="flex flex-col justify-center items-center mt-20">
            <form class="bg-zinc-700 flex flex-col text-white h-96 justify-evenly px-5 rounded-lg items-center border-4 border-cyan-300">
                <label class="text-xl underline font-semibold">Selectionner le numero de la grille utilisateur</label>
                <input placeholder="Identifiant" type="text" class="bg-zinc-600 border-2 border-white pl-2 w-full" name="grille"/>
                <button class="border-white border-2 hover:bg-white hover:text-zinc-600 w-32 h-10 rounded-lg">Valider</button>
            </form>
        </div>
        <?php
            //we detect if the user as selected a grille
            if(isset($_POST['grille'])){
                //we get the grille id
                $grille_id = $_POST['grille'];
                //we get the grille
            }
        ?>
    </div>
</body>
</html>