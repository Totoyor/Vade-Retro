<?php

// Controleur secondaire - back-office/modif_jeux

if (!isset($_SESSION["admin"])) {
    header('Location:?module=admin&action=login_admin');
}

else {

    // GET
    $id = $_GET["id"];

    if (isset($_GET["id"]) && isset($_GET["modif"])) {

        // POST
        $ref = $_POST["ref"];
        $nom = $_POST["nom"];
        $descr = $_POST["descr"];
        $prixttc = $_POST["prix_ttc"];
        $prixht = $_POST["prix_ht"];
        $tva = $_POST["tva"];
        $annee = $_POST["annee"];
        $stock = $_POST["stock"];
        $console = $_POST["console"];
        
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
        }
        
        // Modification du jeu
        include("modele/produits/modif_jeux.php");

        $modifJeu = modif_jeu($id, $ref, $nom, $descr, $prixttc, $prixht, $tva, $annee, $stock, $console);

        $lireJeu = lire_jeu($id);
    }


    elseif (isset($_GET["id"])) {

        include("modele/produits/modif_jeux.php");

        $lireJeu = lire_jeu($id);
    }

    include_once("modele/produits/gestion_consoles.php");

    $retour_cons = lire_consoles();

    include_once("vue/produits/modif_jeux.php");
}