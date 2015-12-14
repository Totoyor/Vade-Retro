<?php

// Controleur secondaire - page/contact

if (isset($_POST["nom"])) {
    
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["mail"];
    $objet = $_POST["objet"];
    $message = $_POST["message"];
    $date = date("Y-m-d H:i:s");
    
    include_once("modele/page/contact.php");
    
    if (ajout_contact($nom, $prenom, $email, $objet, $message, $date) == true) {
        header("Location:?module=page&action=contact&message=ok#glob");
    }
    else {
        header("Location:?module=page&action=contact&message=nok#glob");
    }
}


include_once("vue/page/contact.php");