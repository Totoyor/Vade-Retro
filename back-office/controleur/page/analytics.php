<?php

// Controleur secondaire - back-office/analytics


if (!isset($_SESSION["admin"])) {
    header('Location:?module=admin&action=login_admin');
}

else {
    include_once("vue/page/analytics.php");
}