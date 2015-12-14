<?php

// Controleur secondaire - back-office/modif_user

if (!isset($_SESSION["admin"])) {
    header('Location:?module=admin&action=login_admin');
}

else {

    // GET
    $id = $_GET["id"];

    if(isset($_GET["id_modif"])) {

        // POST
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

        include_once("modele/utilisateurs/modif_user.php");

        $modifUser = modif_user($id, $civ, $nom, $prenom, $mail, $mdp, $adresse, $ville, $cp, $pays, $tel, $adresse_liv, $ville_liv, $cp_liv, $pays_liv);
    }

    if(isset($_GET["id"])) {
        include_once("modele/utilisateurs/modif_user.php");

        $userModif = lire_user($id);
    }

    include_once("vue/utilisateurs/modif_user.php");
}