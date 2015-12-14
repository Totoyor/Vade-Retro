<?php

// Controleur secondaire - gestion-compte/index

if (!isset($_SESSION["user"])) {
    header("Location:?module=user&action=login");
}
elseif (isset($_POST["nom"])) {
        
        $id = $_SESSION["user"][0];
        $civ = $_POST["civ"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $mail = $_POST["mail"];
        $adresse = $_POST["adresse"];
        $ville = $_POST["ville"];
        $cp = $_POST["cp"];
        $pays = $_POST["pays"];
        $tel = $_POST["tel"];
        $adresse_liv = $_POST["adresse_liv"];
        $ville_liv = $_POST["ville_liv"];
        $cp_liv = $_POST["cp_liv"];
        $pays_liv = $_POST["pays_liv"];
    
    include_once("modele/gestion-compte/modif_user.php");
    
    if(modif_user($id, $civ, $nom, $prenom, $mail, $adresse, $ville, $cp, $pays, $tel, $adresse_liv, $ville_liv, $cp_liv, $pays_liv) == true) {
        header("Location:?module=gestion-compte&action=index&modif=ok");
    }
    else {
        header("Location:?module=gestion-compte&action=index&modif=nok");
    }
}

elseif (isset($_GET["suppr"])) {
    
    $id = $_GET["suppr"];
    
    include("modele/gestion-compte/suppr_user.php");
    
    $suppr_user = suppr_user($id);
    
    // Destruction des variables de session
    session_unset();

    // Détruire la session
    session_destroy();

    // Rediriger vers page d'accueil
    header("Location:?");
}

include_once("modele/gestion-compte/modif_user.php");

$user_account = lire_user($_SESSION["user"][0]);

include_once("vue/gestion-compte/index.php");