<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Accueil</title>
</head>
<body>
    <!-- include the navbar -->
    <?php 
        include './View/Components/navbar_organisateur.view.php';
    ?>
    <div class="h-full w-screen flex flex-row justify-center">
        <div class="bg-gray-200 w-1/3 h-[30rem] flex flex-col items-center justify-evenly mt-32 rounded-lg drop-shadow-lg">
                <p class="text-3xl font-semibold underline">Bienvenue sur votre espace Organisateur</p>
                <button class="rounded-lg bg-cyan-500 h-24 w-32 drop-shadow-md">
                    <label>Creer des comptes</label>
                </button>
                <button class="rounded-xl bg-cyan-500 h-24 w-32 drop-shadow-md">
                    <label>Valider des grilles</label>
                </button>
        </div>
    </div>
    
</body>
</html>