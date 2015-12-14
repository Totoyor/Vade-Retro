<?php

// Controleur secondaire - user/login


if (isset($_POST["mail"])) {
       
    //ICI faire les tests coté serveur (test de saisie)
    
    include_once("modele/user/login.php");
    $user = login_user($_POST["mail"], md5($_POST["mdp"]));
    if ($user == false) {
        //echo "pas trouvé";
        header('Location:?module=user&action=login&log=nok');
    }
    else {
        //echo  "trouvé";
         $_SESSION["user"] = $user;
        // Création du cookie
        header('Location:?module=page&action=index');
    }
    
    //requete select
}
else {
    include_once("vue/user/login.php");
}