<?php

// Modèle ajout_contact/contact

function ajout_contact($nom, $prenom, $email, $objet, $message, $date) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("INSERT INTO vr_contact (nom_contact, prenom_contact, mail_contact, objet_contact, message_contact, date_contact) 
                                        VALUES (:nom, :prenom, :email, :objet, :message, :date)");
        $query->bindValue(':nom', $nom, PDO::PARAM_STR);
        $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->bindValue(':objet', $objet, PDO::PARAM_STR);
        $query->bindValue(':message', $message, PDO::PARAM_STR);
        $query->bindValue(':date', $date, PDO::PARAM_STR);
        $query->execute();
        return true;
  
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return false;
}