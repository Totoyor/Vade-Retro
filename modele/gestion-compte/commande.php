<?php

// Modèle lire_commande user

function lire_commande($id) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("SELECT * FROM vr_commandes 
                                        WHERE vr_user_id_user = :id");
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $user_commande = $query->fetch();
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return $user_commande;
}