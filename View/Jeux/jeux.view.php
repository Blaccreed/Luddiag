<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../../../View/Jeux/Jeux.js"></script>
    <title>JeuxII</title>
</head>
<body>
    <!-- Include the navbar in Components/navbar.view.php -->
    <?php include './View/Components/navbar.view.php'; ?>
    <div class="w-full overflow-hidden">
        <div class="flex flex-row items-center border-2 border-zinc-800 rounded-lg mt-5 mx-3 pl-4 md:w-1/4 h-16">
            <p class="md:text-lg">Graphique d'évolution :</p>
            <select class="h-10 ml-4 flex flex-row w-44 rounded-sm">
                <option selected>Jeux</option>
                <!-- Print all the game in the entire universe -->
                <?php
                    var_dump($tab_jeux);
                    foreach($tab_jeux as $jeu){
                        echo "<option onclick='test()'>".$jeu->GetNomJeu()."</option>";
                    }
                ?>
            </select>
        </div>
        <div class="">
            <div class="md:grid md:grid-cols-5 md:gap-3 h-full mt-5 mx-3">
                <?php
                foreach($tab_jeux as $jeu){
                    echo '<div class="flex flex-col items-center border-2">';
                        echo '<img class="h-60 w-60" placeholder="jeux" src="'.$jeu->GetImage().'" />';
                        echo '<div class="flex flex-col items-center">';
                            echo '<p class="text-lg font-semibold underline">'.$jeu->GetNomJeu().'</p>';
                            echo '<p class="text-lg">'. "Nombre de votant: ". $jeu->GetNbVotant().'</p>';
                            echo '<p class="text-lg">'. "Note moyenne: ". $jeu->GetNoteMoyenne().'</p>';
                        echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
