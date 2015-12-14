<?php

// Controleur secondaire - back-office/ajout_user

if (!isset($_SESSION["admin"])) {
    header('Location:?module=admin&action=login_admin');
}

else {

    if (isset($_POST["nom"])) {

        $civ = $_POST["civilite"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $mail = $_POST["mail"];
        $mdp = md5($_POST["mdp"]);
        $adresse = $_POST["adresse"];
        $ville = $_POST["ville"];
        $cp = $_POST["cp"];
        $pays = $_POST["pays"];
        $tel = $_POST["tel"];
        $adresse_liv = $_POST["adresse_liv"];
        $ville_liv = $_POST["ville_liv"];
        $cp_liv = $_POST["cp_liv"];
        $pays_liv = $_POST["pays_liv"];
        $date = date("Y-m-d H:i:s");

        include_once("modele/utilisateurs/ajout_user.php");

        if (ajout_user($civ, $nom, $prenom, $mail, $mdp, $adresse, $ville, $cp, $pays, $tel, $adresse_liv, $ville_liv, $cp_liv, $pays_liv, $date) == false) {
            //echo "non réussi";
            header("Location:?module=utilisateurs&action=ajout_user&m=nok");
        }
        else {
            //echo  "réussi";
            header("Location:?module=utilisateurs&action=ajout_user&m=ok");
        }

    }


    include_once("vue/utilisateurs/ajout_user.php");
}