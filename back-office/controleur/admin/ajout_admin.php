<?php

// Controleur secondaire - back-office/ajout admin

if (!isset($_SESSION["admin"])) {
    header('Location:?module=admin&action=login_admin');
}

else {
    
    if(isset($_POST["nom"])) {
        
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $mail = $_POST["mail"];
        $mdp = md5($_POST["mdp"]);
        $date = date("Y-m-d H:i:s");
        
        include_once("modele/admin/ajout_admin.php");
        
        if (ajout_admin($nom, $prenom, $mail, $mdp, $date) == false) {
            //echo "non réussi";
            header("Location:?module=admin&action=ajout_admin&m=nok");
        }
        else {
            //echo  "réussi";
            header("Location:?module=admin&action=ajout_admin&m=ok");
        }
    }
    
    include_once("vue/admin/ajout_admin.php");
}