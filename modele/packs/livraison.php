<?php

// Modèle modif_user

function modif_user($id, $tel, $adresse_liv, $ville_liv, $cp_liv, $pays_liv) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("UPDATE vr_user SET tel_user = :tel, adresse_livraison_user = :adrliv, ville_livraison_user = :villeliv, cp_livraison_user = :cpliv, pays_livraison_user = :paysliv  WHERE id_user = :id"); 
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->bindValue(':tel', $tel, PDO::PARAM_INT);
        $query->bindValue(':adrliv', $adresse_liv, PDO::PARAM_STR);
        $query->bindValue(':villeliv', $ville_liv, PDO::PARAM_STR);
        $query->bindValue(':cpliv', $cp_liv, PDO::PARAM_INT);
        $query->bindValue(':paysliv', $pays_liv, PDO::PARAM_STR);
        $query->execute();
        return true;
  
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return false;
}


// Modèle Ajout_commande

function ajout_commande($ref, $montant, $qte, $date, $user, $console) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("INSERT INTO vr_commandes (ref_commande, montant_commande, qt_commande, date_commande, vr_user_id_user, vr_prod_console_id_console) 
                                        VALUES (:ref, :montant, :qt, :date, :user, :console)");
        $query->bindValue(':ref', $ref, PDO::PARAM_STR);
        $query->bindValue(':montant', $montant, PDO::PARAM_INT);
        $query->bindValue(':qt', $qte, PDO::PARAM_INT);
        $query->bindValue(':date', $date, PDO::PARAM_STR);
        $query->bindValue(':user', $user, PDO::PARAM_INT);
        $query->bindValue(':console', $console, PDO::PARAM_INT);
        $query->execute();
        return true;
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
}