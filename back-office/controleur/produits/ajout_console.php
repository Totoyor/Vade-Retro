<?php

// Controleur secondaire - back-office/ajout_console

// Vérification de la session
if (!isset($_SESSION["admin"])) {
    header('Location:?module=admin&action=login_admin');
}

else {

    if (isset($_POST["nom"])) {
        // Variables de formulaire d'ajout de console
        $ref = $_POST["ref"];
        $nom = $_POST["nom"];
        $descr = $_POST["descr"];
        $annee = $_POST["annee"];
        $prix = $_POST["prix"];
        $prixht = $_POST["prixht"];
        $tva = $_POST["tva"];
        $stock = $_POST["stock"];
        $date = date("Y-m-d H:i:s");
        
        // Ajout d'une image
        if (isset($_FILES["image"])) {
            
            // Controller l'extension de l'image
            $ext = array('jpg', 'jpeg', 'gif', 'png');
            $ext_upload =  strtolower(substr(strrchr($_FILES["image"]["name"], '.') ,1));
            if (in_array($ext_upload, $ext)) {
                // Création du nom et enregistrement de l'image
                $size = getimagesize($_FILES["image"]["tmp_name"]);
                $url_image = md5(uniqid(rand(), true));
                $exp_image = explode(".",$_FILES['image']['name']);
                move_uploaded_file($_FILES['image'] ['tmp_name'],"../assets/images/".$url_image.".".$exp_image[count($exp_image)-1]);
                $image_save = $url_image.".".$exp_image[count($exp_image)-1];
            }

            include_once("modele/produits/ajout_console.php");
                // Ajout du produit dans la BDD
                if (ajout_console($ref, $nom, $descr, $annee, $prix, $prixht, $tva, $stock, $date, $image_save) == false) {
                    // Ajout non réussi
                    header("Location:?module=produits&action=ajout_console&m=nok");
                }
                else {
                    // Ajout réussi
                    header("Location:?module=produits&action=ajout_console&m=ok");
                }    
            }       
        }
    }

// Affichage du formulaire d'ajout
include_once("vue/produits/ajout_console.php");