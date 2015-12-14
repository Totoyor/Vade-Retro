<?php

// Controleur secondaire - back-office/ajout_jeux

if (!isset($_SESSION["admin"])) {
    header('Location:?module=admin&action=login_admin');
}

else {

    if (isset($_POST["nom"])) {

        // POST
        $ref = $_POST["ref"];
        $nom = $_POST["nom"];
        $descr = $_POST["descr"];
        $annee = $_POST["annee"];
        $prix = $_POST["prix"];
        $prixht = $_POST["prixht"];
        $tva = $_POST["tva"];
        $stock = $_POST["stock"];
        $console = $_POST["console"];
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

        // Ajout du jeu dans la base de donnée
        include_once("modele/produits/ajout_jeux.php");
        if (ajout_jeux($ref, $nom, $descr, $annee, $prix, $prixht, $tva, $stock, $date, $image_save, $console) == false) {
            //echo "non réussi";
            header("Location:?module=produits&action=ajout_jeux&m=nok");
        }
        else {
            //echo  "réussi";
            header("Location:?module=produits&action=ajout_jeux&m=ok");
        }
    }
}

    include_once("modele/produits/gestion_consoles.php");

    $retour_cons = lire_consoles();


    include_once("vue/produits/ajout_jeux.php");
}