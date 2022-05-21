<?php
session_start();

if (isset($_POST['login'])) {
    //Si le formulaire a ete soumis
    if (not_empty(['identifiant', 'password'])) {
        //Si tous les champs ont ete remplis
        extract($_POST);

        $q = $db->prepare("SELECT id_admin, login_admin,mail_admin, mdp_admin AS hashed_password
                         FROM admin
                         WHERE (login_admin = :identifiant) AND (mdp_admin = :mdp_admin)");
        $q->execute([
            'identifiant' => $identifiant,
            'mdp_admin' => $password,
        ]);

        $admin = $q->fetch(PDO::FETCH_OBJ);

        //Si l'admin est trouvé alors on crée des variables de session pour cet admin
        if ($admin) {
            $_SESSION['admin_id'] = $admin->id_admin;
            $_SESSION['login'] = $admin->login_admin;
            $_SESSION['mail_admin'] = $admin->mail_admin;

            //redirection vers la page index et le cas d'utilisation accueil
            redirect_intent_or('index.php?uc=accueil');
        }
    }
}

?>
