<?php 
//permet de traiter le retour ipn de paypal
$email_account = "vanweldenthomas-facilitator@live.fr";
$req = 'cmd=_notify-validate';

foreach ($_POST as $key => $value) {
    $value = urlencode(stripslashes($value));
    $req .= "&$key=$value";
}

$header = "POST /cgi-bin/webscr HTTP/1.0\r\n";
$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
$fp = fsockopen ('ssl://www.sandbox.paypal.com', 443, $errno, $errstr, 30);
$item_name = $_POST['item_name'];
$item_number = $_POST['item_number'];
$payment_status = $_POST['payment_status'];
$payment_amount = $_POST['mc_gross'];
$payment_currency = $_POST['mc_currency'];
$txn_id = $_POST['txn_id'];
$receiver_email = $_POST['receiver_email'];
$payer_email = $_POST['payer_email'];
parse_str($_POST['custom'],$custom);

if (!$fp) {

} else {
fputs ($fp, $header . $req);
while (!feof($fp)) {
    $res = fgets ($fp, 1024);
    if (strcmp ($res, "VERIFIED") == 0) {
        // vérifier que payment_status a la valeur Completed
        if ( $payment_status == "Completed") {
               if ( $email_account == $receiver_email) {
                    $query = $connexion->prepare("SELECT * FROM vr_commandes
                                        WHERE vr_user_id_user =".$custom."");
                    $query->execute();
                    $retour_commande = $query->fetch();
                    if ($_POST['mc_gross'] == $retour_commande[2]) {
                        // Requête pour la mise à jour du statut de la commande => Statut à 1
                        // Envoi du mail de récapitulatif de la commande à l'acheteur et au vendeur
                    } 
                    else {
                        // Envoi d'une alerte par mail
                    }
               }
                else {
                       
                }
        }
        else {
                // Statut de paiement: Echec
        }
        exit();
   }
    else if (strcmp ($res, "INVALID") == 0) {
		// Transaction invalide
    }
}
fclose ($fp);
}	