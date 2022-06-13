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
    <div>
        
    </div>
</body>
</html>