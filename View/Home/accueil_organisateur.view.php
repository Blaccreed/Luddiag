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
        echo '<br>';
        echo $_SESSION['role'];
    ?>
    <div class="h-full">
        <h1>Bienvenue sur votre espace organisateur</h1>
    </div>
    
</body>
</html>