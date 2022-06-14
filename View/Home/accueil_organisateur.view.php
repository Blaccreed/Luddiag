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
    <!--<div class="h-full w-screen flex flex-row justify-center">
        <div class="bg-gray-200 w-2/3 h-[30rem] flex flex-col items-center justify-evenly mt-32 rounded-lg drop-shadow-lg">
                <p class="text-3xl font-semibold underline">Bienvenue sur votre espace Organisateur</p>
                <div class="flex flex-row w-full justify-evenly">
                <button class="rounded-lg bg-cyan-500 h-24 w-40 drop-shadow-md">
                    <label>Creer des comptes</label>
                </button>
                <button class="rounded-xl bg-cyan-500 h-24 w-40 drop-shadow-md">
                    <label>Valider des grilles</label>
                </button>
                </div>
        </div>
    </div>-->
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="lg:text-center">
            <h2 class="text-base text-green-600 font-semibold tracking-wide uppercase">LUD'DIAG</h2>
            <p class="mt-2 text-3xl leading-8 font-bold tracking-tight text-gray-900 sm:text-4xl">Gestion d'administration</p>
          </div>

          <div class="mt-20 bg-green-50 shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
              <div class="lg:text-center">
                <dt>
                  <button type="button" >
                    <span class="sr-only">Valider une grille</span>
                    <a href="index.php?uc=validation_grille" class="text-gray-600 bg-green-500 hover:bg-green-600 hover:text-white text-lg px-9 py-1 rounded-md text-sm font-medium">Valider une grille</a>
                </button>
                </dt>
                <dd class="mx-auto text-base text-gray-500">Permet de valider les grilles des utilisateurs.</dd>
              </div>

              <div class="mt-20">
                <dl">
                  <div class="lg:text-center">
                    <dt>
                      <button type="button" >
                        <span class="sr-only">Créer un compte</span>
                        <a href="index.php?uc=creer_compte" class="text-gray-600 bg-green-500 hover:bg-green-600 hover:text-white text-lg px-9 py-1 rounded-md text-sm font-medium">Créer un compte</a>
                    </button>
                    </dt>
                    <dd class="mx-auto text-base text-gray-500">Permet de créer un compte exposant ou animateur.</dd>
                  </div>
            </dl>
          </div>
        </div>
      </div>
</body>
</html>