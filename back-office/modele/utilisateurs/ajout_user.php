<?php

// Modèle ajout_user

function ajout_user($civ, $nom, $prenom, $mail, $mdp, $adresse, $ville, $cp, $pays, $tel, $adresse_liv, $ville_liv, $cp_liv, $pays_liv, $date) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("INSERT INTO vr_user (civilite_user, nom_user, prenom_user, mail_user, password_user, adresse_user, ville_user, cp_user, pays_user, tel_user, adresse_livraison_user, ville_livraison_user, cp_livraison_user, pays_livraison_user, date_user) 
                                        VALUES (:civ, :nom, :prenom, :mail, :mdp, :adresse, :ville, :cp, :pays, :tel, :adrliv, :villeliv, :cpliv, :paysliv, :date)");
        $query->bindValue(':civ', $civ, PDO::PARAM_STR);
        $query->bindValue(':nom', $nom, PDO::PARAM_STR);
        $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $query->bindValue(':mail', $mail, PDO::PARAM_STR);
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
        $query->bindValue(':date', $date, PDO::PARAM_STR);
        $query->execute();
        return true;
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
}