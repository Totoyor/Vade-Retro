<?php

// Controleur secondaire - page/rachat

if(isset($_POST["nom"])) {
    
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $adresse = $_POST["adresse"];
    $ville = $_POST["ville"];
    $cp = $_POST["cp"];
    $pays = $_POST["pays"];
    $tel = $_POST["tel"];
    $produit = $_POST["produit"];
    $etat = $_POST["etat"];
    $message = $_POST["message"];
    $date = date("Y-m-d H:i:s");
    
    include_once("modele/page/rachat.php");
    
    if(ajout_contact($nom, $prenom, $email, $adresse, $ville, $cp, $pays, $tel, $produit, $etat,  $message, $date) == true) {
        header("Location:?module=page&action=rachat&message=ok");
    }
    else {
        header("Location:?module=page&action=rachat&message=nok");
    }
}



include_once("vue/page/rachat.php");