<?php

// Controleur secondaire - packs/index

include_once("modele/packs/index.php");

$retour_cons = lire_consoles();

include_once("vue/packs/index.php");