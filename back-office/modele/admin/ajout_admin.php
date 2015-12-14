<?php

// Modèle ajout_admin

function ajout_admin($nom, $prenom, $mail, $mdp, $date) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("INSERT INTO vr_admin (nom_admin, prenom_admin, mail_admin, password_admin, date_admin) 
                                        VALUES (:nom, :prenom, :mail, :mdp, :date)");

        $query->bindValue(':nom', $nom, PDO::PARAM_STR);
        $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $query->bindValue(':mail', $mail, PDO::PARAM_STR);
        $query->bindValue(':mdp', $mdp, PDO::PARAM_STR);
        $query->bindValue(':date', $date, PDO::PARAM_STR);
        $query->execute();
        return true;
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
}