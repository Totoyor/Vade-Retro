<?php

// Modèle lire_commandes ($id)

function lire_commande($id) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("SELECT * FROM vr_commandes WHERE id_commande = :id");
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $commandeAff = $query->fetch();
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return $commandeAff;
}


// Modèle modif_commande

function modif_commande($id, $ref, $montant, $qte) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("UPDATE vr_commandes SET ref_commande = :ref, montant_commande = :montant, qt_commande = :qt  WHERE id_commande = :id"); 
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->bindValue(':ref', $ref, PDO::PARAM_STR);
        $query->bindValue(':montant', $montant, PDO::PARAM_INT);
        $query->bindValue(':qt', $qte, PDO::PARAM_INT);
        $query->execute();
        return true;
  
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return false;
}