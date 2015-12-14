<?php

// Modèle ajout_contact/rachat

function ajout_contact($nom, $prenom, $email, $adresse, $ville, $cp, $pays, $tel, $produit, $etat,  $message, $date) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("INSERT INTO vr_rachat (nom_rachat, prenom_rachat, mail_rachat, adresse_rachat, ville_rachat, cp_rachat, pays_rachat, tel_rachat, objet_rachat, etat_rachat, message_rachat, date_rachat) 
                                        VALUES (:nom, :prenom, :email, :adresse, :ville, :cp, :pays, :tel, :produit, :etat, :message, :date)");
        $query->bindValue(':nom', $nom, PDO::PARAM_STR);
        $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->bindValue(':adresse', $email, PDO::PARAM_STR);
        $query->bindValue(':ville', $ville, PDO::PARAM_STR);
        $query->bindValue(':cp', $cp, PDO::PARAM_INT);
        $query->bindValue(':pays', $pays, PDO::PARAM_STR);
        $query->bindValue(':tel', $tel, PDO::PARAM_INT);
        $query->bindValue(':produit', $produit, PDO::PARAM_STR);
        $query->bindValue(':etat', $etat, PDO::PARAM_STR);
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