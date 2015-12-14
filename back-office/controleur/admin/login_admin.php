<?php

// Controleur secondaire - back-office/login admin

if (isset($_SESSION["admin"])) {
    header('Location:?module=page&action=index');
}

else {
    if (isset($_POST["email"])) {

        $mail = $_POST["email"];
        $mdp = md5($_POST["mdp"]);

        include_once("modele/admin/login_admin.php");

        $admin = login_admin($mail, $mdp);

        if ($admin == false) {
            //echo "pas trouvé";
            header('Location:?module=admin&action=login_admin');
        }
        else {
            //echo  "trouvé";
             $_SESSION["admin"] = $admin;
            // Création du cookie
            header('Location:?module=page&action=index');
        }

    }

    else {
        include_once("vue/admin/login_admin.php");
    }
}
