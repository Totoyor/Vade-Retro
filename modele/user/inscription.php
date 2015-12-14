<?php

// Modèle inscription

function inscription_user($nom, $prenom, $email, $password_md5, $date) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("INSERT INTO vr_user (nom_user, prenom_user, mail_user, password_user, date_user) 
                                        VALUES (:nom, :prenom, :email, :password, :date)");
        $query->bindValue(':nom', $nom, PDO::PARAM_STR);
        $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->bindValue(':password', $password_md5, PDO::PARAM_STR);
        $query->bindValue(':date', $date, PDO::PARAM_STR);
        $query->execute();
        return true;
  
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return false;
}