<?php

//Here we are going to handle the error

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="./View/Form/connection.js"></script>
    <title>Connection</title>
</head>
<body>
<div class="w-full overflow-x-hidden">
    <!-- include the navbar -->
    <?php
include './View/Components/navbar.view.php';
if (isset($_SESSION['error'])) {
    echo '<div id="error" class="bg-red-500 text-white p-2">';
    echo $_SESSION['error'];
    echo '<button onClick="closeError()" class="text-white float-right">X</button>';
    echo '</div>';
    unset($_SESSION['error']);
}
?>
<div class="mt-5 grid items-center justify-center w-screen">
    <form method="POST" action="./View/Form/connection_request.php" class="bg-green-50 shadow-md rounded px-8 pt-6 pb-8 mb-4 w-[35rem]" id="form-ajout">
        <h2 class="font-medium leading-tight text-4xl mt-0 mb-5 text-green-600 grid items-center justify-center">
            Connectez vous !
        </h2>
        <div class="my-2 grid items-center justify-center">
            <label class="grid items-center justify-center itemsblock text-gray-700 text-sm font-bold mb-2">
                Type utilisateur :
            </label>
            <div class="inline-block relative w-64">
                <select onchange="handleChangeUser(value)" name="role" class="ml-2 block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" id="type_user">
                    <option selected disabled>Choisir un type d'utilisateur</option>
                    <option name="Exposant" value="Exposant" id="Exposant">Exposant</option>
                        <option name="Organisateur" value="Organisateur" id="Organisateur">Organisateur</option>
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
                Adresse mail </label>
            <input 
              name="mail" 
              class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline  invalid:border-pink-500 invalid:text-pink-600
                focus:invalid:border-pink-500 focus:invalid:ring-pink-500" 
                id="mail" 
                type="text" 
                placeholder="exemple@gmail.com">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Mot de passe
            </label>
            <input 
              name="mdp" 
              class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline  invalid:border-pink-500 invalid:text-pink-600
                focus:invalid:border-pink-500 focus:invalid:ring-pink-500" 
              id="mdp" 
              type="password"
              placeholder="**********"
            >
        </div>
        <div id="button-container" class="mt-5 grid items-center">
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" id="enregistrer" type="submit">
                Enregistrer
            </button>
        </div>
    </form>


</div>
</div>
</body>
</html>