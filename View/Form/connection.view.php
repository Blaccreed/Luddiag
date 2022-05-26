<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Connection</title>
</head>
<body>
    <div class="h-screen w-screen text-white">
      <?php include './View/Components/navbar.view.php'; ?>
      <div class="h-[90%] flex flex-col items-center justify-center">
        <div class="bg-zinc-800 w-1/3 h-[38rem] rounded-2xl flex flex-col items-center mb-32">
          <div class="h-20 w-72 mt-5 flex flex-col justify-center border-b-2">
            <p class="text-3xl font-bold text-center">test login page</p>
          </div>
          <div class="mt-5">
<<<<<<< HEAD
            <form class="text-lg mt-12" method="post" >
=======
            <form class="text-lg mt-12" method="POST" action="./View/Form/connection_request.php" >
>>>>>>> a090792ecdffcaedbbcd74b4787f08945ae5e503
              <div class="flex flex-row items-center">
                <MailIcon class="h-6" />
                <p class="text-lg font-semibold" id="username">
                  Email
                </p>
              </div>
              <input
                type="email"
                id='emailInput'
                name="mail"
                class="bg-transparent border-b-2 mt-3 outline outline-0 text-gray-500 h-12"
                placeholder="Email"
                htmlFor="username" name="mdp_user"
              />
              <div class="flex flex-row items-center">
                <p class="text-lg mt-16 font-semibold" id="password">
                  Password
                </p>
              </div>
              <input
                type="password"
                name="mdp"
                class="bg-transparent bor border-b-2 mt-2 outline outline-0 h-12"
                htmlFor="password"
              />
<<<<<<< HEAD

              <input type="submit" value="connecter" name="login">


            </form>
            <div class="flex flex-col items-center justify-center mt-16">
=======
              <div class="flex flex-col items-center justify-center mt-16">
>>>>>>> a090792ecdffcaedbbcd74b4787f08945ae5e503
              <!--<button class="bg-[#81CCEF] hover:bg-[#40B1E6] text-white rounded-lg w-24 h-12 mb-9">
                Valider
              </button>-->
            </div>
            </form>
            
          </div>
        </div>
      </div>
    </div>
</body>
</html>