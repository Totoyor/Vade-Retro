<?php

// Modèle lire_user ($id)

function lire_user($id) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("SELECT * FROM vr_user WHERE id_user = :id");
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $userModif = $query->fetch();
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return $userModif;
}


// Modèle modif_user

function modif_user($id, $civ, $nom, $prenom, $mail, $mdp, $adresse, $ville, $cp, $pays, $tel, $adresse_liv, $ville_liv, $cp_liv, $pays_liv) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("UPDATE vr_user SET civilite_user = :civ, nom_user = :nom, prenom_user = :prenom, mail_user = :email, password_user = :mdp, adresse_user = :adresse, ville_user = :ville, cp_user = :cp, pays_user = :pays, tel_user = :tel, adresse_livraison_user = :adrliv, ville_livraison_user = :villeliv, cp_livraison_user = :cpliv, pays_livraison_user = :paysliv  WHERE id_user = :id"); 
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->bindValue(':civ', $civ, PDO::PARAM_STR);
        $query->bindValue(':nom', $nom, PDO::PARAM_STR);
        $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $query->bindValue(':email', $mail, PDO::PARAM_STR);
        $query->bindValue(':mdp', $mdp, PDO::PARAM_STR);
        $query->bindValue(':adresse', $adresse, PDO::PARAM_STR);
        $query->bindValue(':ville', $ville, PDO::PARAM_STR);
        $query->bindValue(':cp', $cp, PDO::PARAM_INT);
        $query->bindValue(':pays', $pays, PDO::PARAM_STR);
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