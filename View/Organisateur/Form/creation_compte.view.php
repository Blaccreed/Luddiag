<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <link href="styles.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, inital-scale=1, shrink-to-fit=no">
    <script type="text/javascript" src="./View/Organisateur/Form/creation_compte.js"></script>
    <title>Inscription</title>
</head>


<div class="w-full overflow-x-hidden">
    <!-- include the navbar -->
    <?php
    include './View/Components/navbar_organisateur.view.php';
    if (isset($_SESSION['error'])) {
        echo '<div id="error" class="bg-red-500 text-white p-2">';
            echo $_SESSION['error'];
            echo '<button onClick="closeError()" class="text-white float-right">X</button>';
        echo '</div>';
        unset($_SESSION['error']);
    }
    else if(isset($_SESSION['success'])) {
        echo '<div id="success" class="bg-green-500 text-white p-2">';
            echo $_SESSION['success'];
            echo '<button onClick="closeSuccess()" class="text-white float-right">X</button>';
        echo '</div>';
        unset($_SESSION['success']);
    }
    ?>
<div class="mt-5 grid items-center justify-center w-screen">
    <form method="POST" action="./View/Organisateur/Form/creation_compte_request.php" class="bg-green-50 shadow-md rounded px-8 pt-6 pb-8 mb-4 w-[35rem]" id="form-ajout">
        <h2 class="font-medium leading-tight text-4xl mt-0 mb-5 text-green-600 grid items-center justify-center">
            Creer un compte
        </h2>
        <div class="my-2 grid items-center justify-center">
            <label class="grid items-center justify-center itemsblock text-gray-700 text-sm font-bold mb-2">
                Type utilisateur :
            </label>
            <div class="inline-block relative w-64">
                <select onchange="handleChangeUser(value)" name="role" class="ml-2 block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" id="type_user">
                    <option selected disabled>Choisir un type d'utilisateur</option>
                    <option value="exposant" id="exposant">Exposant</option>
                        <option value="animateur" id="animateur">Animateur</option>
                    </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 grid items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Nom
            </label>
            <input name="nom" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nom" type="text" placeholder="Nom">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Prénom </label>
            <input name="prenom" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="prenom" type="text" placeholder="Prénom">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Adresse mail </label>
            <input name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline  invalid:border-pink-500 invalid:text-pink-600
                focus:invalid:border-pink-500 focus:invalid:ring-pink-500" id="mail" type="text" placeholder="exemple@gmail.com">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Mot de passe
            </label>
            <input name="mdp" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="mdp" type="password" placeholder="**********">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Adresse postale
            </label>
            <input name="adresse" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="adresse" type="text" placeholder="Adresse postale">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Code postale
            </label>
            <input name="code_postal" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="adresse" type="text" placeholder="Code postale">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Numéro de téléphone
            </label>
            <input name="tel" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" type="tel" placeholder="06xxxxxxxx">
        </div>
        <div id="button-container" class="mt-5 grid items-center">
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" id="enregistrer" type="submit">
                Enregistrer
            </button>
        </div>
    </form>


</div>
</div>

</html>