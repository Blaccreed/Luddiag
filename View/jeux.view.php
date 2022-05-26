<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Jeux</title>
</head>
<body>
    <!-- Include the navbar in Components/navbar.view.php -->
    <?php include './View/Components/navbar.view.php'; ?>
    <div class="w-full overflow-hidden">
        <div class="w-full">
            <p class="text-2xl font-semibold ml-3 mt-5 underline">Liste des jeux :</p>
            <div class="md:grid md:grid-cols-5 md:gap-3 h-full mt-5 mx-3">
                <?php
                foreach($tab_jeux as $jeu){
                    echo '<div class="flex flex-col items-center border-2 p-4">';
                        echo '<img class="h-60 w-60" placeholder="jeux" src="'.$jeu->GetImage().'" />';
                        echo '<div class="flex flex-col items-center">';
                            echo '<p class="text-lg font-semibold underline">'.$jeu->GetNomJeu().'</p>';
                            echo '<p class="text-lg">'. "Nombre de votant: ". $jeu->GetNbVotant().'</p>';
                            echo '<p class="text-lg">'. "Note moyenne: ". round($jeu->GetNoteMoyenne(),2).'</p>';
                        echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
