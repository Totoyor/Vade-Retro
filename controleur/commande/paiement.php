<?php

// Controleur secondaire - Commande/index

if(isset($_SESSION["panier"])) {
    suppr_panier();
}


include_once("vue/commande/paiement.php");