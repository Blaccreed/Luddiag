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
include './View/Components/navbar_exposant.view.php';
?>
    <!-- Un exposant peut uniquement consulter la note de ces jeux donc tout sera fait sur la page d'accueil -->
    <?php
        //Pour l'instant le code va être dégueulasse mais on corrigera plus tard
        $id_exposant = $_SESSION['id_user'];
    ?>
    <div class="h-full w-full flex flex-col items-center mt-10">
        <div class="lg:text-center">
            <h2 class="text-base text-green-600 font-semibold tracking-wide uppercase">LUD'DIAG</h2>
            <p class="mt-2 text-3xl leading-8 font-bold tracking-tight text-gray-900 sm:text-4xl">Résultat du jeu</p>
        </div>
        <div class="bg-green-50 shadow-md rounded w-2/3 h-2/3 mt-5 text-center flex flex-col items-center">
            <?php
                echo "<img class='w-80 mb-5 mt-5' src=$image />";
                echo "<p class='text-4xl font-semibold underline mb-5'>$nom</p>";
                echo "<p class='mb-5 text-xl'><span class='text-2xl font-semibold'>Note moyenne: </span>$noteMoyenne</p>";
                echo "<p class='mb-5 text-xl'><span class='text-2xl font-semibold'>Note moyenne: </span>$nbVotant</p>";
            ?>
        </div>
    </div>
</body>
</html>