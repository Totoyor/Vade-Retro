<?php

// Modèle ajout_email / newsletter

function ajout_email($email, $date) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("INSERT INTO vr_newsletter (email_newsletter, date_newsletter) 
                                        VALUES (:email, :date)");
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->bindValue(':date', $date, PDO::PARAM_STR);
        $query->execute();
        return true;
  
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return false;
}