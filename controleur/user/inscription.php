<?php

// Controleur secondaire - user/inscription

if (isset($_POST["nom"])) {
    
    // Vérification de l'email
    if ($_POST["mail"] != $_POST["mail2"]) {
      echo "L'email n'est pas le même !";
        exit;
    }
    // Vérification du mot de passe
    else if ($_POST["mdp"] != $_POST["mdp2"]) {
      echo "Le mot de passe n'est pas le même !";
        exit;
    }
    // Vérification de l'accord des conditions d'utilisation
    else if (!isset($_POST["conditions"])) {
        echo "Vous n'avez pas accepté les conditions d'utilisation.";
        exit;
    }
    
    $date = date("Y-m-d H:i:s");
    
    // Ajout de l'email dans la base newsletter
    if(isset($_POST["news"])) {
        $email = $_POST["mail"];
        include_once("modele/newsletter/ajout_email.php");
        ajout_email($email, $date);
    }
    
    // Ajout de l'utilisateur dans la base
    include_once("modele/user/inscription.php");
    
    if (inscription_user($_POST["nom"], $_POST["prenom"], $_POST["mail"], md5($_POST["mdp"]), $date) == false) {
        // Enregistrement non réussi
        header("Location:?module=user&action=inscription&inscr=nok");
    }
    else {
        // Enregistrement réussi
        header("Location:?module=user&action=login&inscr=ok");
    }
    
}
// Affichage de la page d'inscription
include_once("vue/user/inscription.php");
