<?php

// Controleur secondaire - newsletter/newsletter

if (isset($_POST["user_email"])) {

$email = $_POST["user_email"];
$date = date("Y-m-d H:i:s");
    
    if (preg_match("#^([a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,3})$#", $email) == true) {
        include("modele/newsletter/ajout_email.php");
        if (ajout_email($email, $date) == false) {
            header("Location:?module=page&action=index&m=ajoutemailnok#titreblog");
        }
        else {
            header("Location:?module=page&action=index&m=ajoutemailok#titreblog");
        }
    }
    else {
       header("Location:?module=page&action=index&m=ajoutemailnok#titreblog");
    }
}
