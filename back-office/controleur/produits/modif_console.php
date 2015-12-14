<?php

// Controleur secondaire - back-office/modif_console

// Connexion Admin requise
if (!isset($_SESSION["admin"])) {
    header('Location:?module=admin&action=login_admin');
}

else {
    
    // Variable(s) GET
    $id = $_GET["id"];

    if (isset($_GET["id"]) && isset($_GET["modif"])) {
        
        // Variables POST
        $ref = $_POST["ref"];
        $nom = $_POST["nom"];
        $descr = $_POST["descr"];
        $prixttc = $_POST["prix_ttc"];
        $prixht = $_POST["prix_ht"];
        $tva = $_POST["tva"];
        $annee = $_POST["annee"];
        $stock = $_POST["stock"];
        
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
                move_uploaded_file($_FILES['image'] ['tmp_name'], "../assets/images/".$url_image.".".$exp_image[count($exp_image)-1]);
                $image_save = $url_image.".".$exp_image[count($exp_image)-1];
            }
        }
        
        include("modele/produits/modif_console.php");
        // Modification des valeurs dans la BDD
        $modifConsole = modif_console($id, $ref, $nom, $descr, $prixttc, $prixht, $tva, $annee, $stock, $image_save);
        // Réaffichage des nouvelles données qui ont été modifiées
        $consModif = lire_console($id);
}
    elseif (isset($_GET["id"])) {
        
        // Affichage des données du produit
        include("modele/produits/modif_console.php");

        $consModif = lire_console($id);
    }
    
    // Affichage de la vue
    include_once("vue/produits/modif_console.php");
}