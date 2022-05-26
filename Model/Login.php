<?php
session_start();

if (isset($_POST['login'])) {
    //Si le formulaire a ete soumis
    if (not_empty(['mail_user', 'mdp_user'])) {
        //Si tous les champs ont ete remplis
        extract($_POST);

        $q = $db->prepare("SELECT id_user, prenom_user, nom_user, mail_user, mdp_user 
                         FROM user_flip
                         WHERE (mail_user = :mail_user)  AND (mdp_user = :mdp_user)");
        $q->execute([
            'mail_user' => $mail_user,
            'mdp_user' => $mdp_user,
        ]);

        $user = $q->fetch(PDO::FETCH_OBJ);

        //Si l'admin est trouvé alors on crée des variables de session pour cet admin
        if ($admin) {
            $_SESSION['id_user'] = $user->id_user;
            $_SESSION['prenom_user'] = $user->prenom_user;
            $_SESSION['nom_user'] = $user->nom_user;
            $_SESSION['mail_user'] = $user->mail_user;

            //redirection vers la page index et le cas d'utilisation accueil
            redirect_intent_or('index.php?uc=accueil');
        }
    }
}

?>
