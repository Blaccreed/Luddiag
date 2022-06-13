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
    <div class="h-full w-screen flex flex-col">
        <div class="bg-gray-200 w-3/4">
            <p>Bienvenue sur votre espace <?php $_SESSION['role'] ?> </p>
        </div>
    </div>
    
</body>
</html>