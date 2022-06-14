<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Accueil</title>
</head>
<body>
    <!-- Include the navbar in Components/navbar.view.php -->
    <?php include './View/Components/navbar.view.php'; ?>
    <!-- Fin Navbar -->
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="lg:text-center">
            <h2 class="text-base text-green-600 font-semibold tracking-wide uppercase">LUD'DIAG</h2>
            <p class="mt-2 text-3xl leading-8 font-bold tracking-tight text-gray-900 sm:text-4xl">Accueil</p>
          </div>

          <div class="mt-20 bg-green-50 shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-1 md:gap-x-8 md:gap-y-10">
              <div class="lg:text-center">
                <dt>
                  <button type="button" >
                    <span class="sr-only">Connectez-vous</span>
                    <a href="index.php?uc=connection" class="text-gray-600 bg-green-500 hover:bg-green-600 hover:text-white text-lg px-9 py-1 rounded-md text-sm font-medium">Connectez-vous</a>
                </button>
                </dt>
                <dd class="mx-auto text-base text-gray-500">Et accéder à toutes les fonctionnalités.</dd>
              </div>
        </div>
      </div>
</body>
</html>
