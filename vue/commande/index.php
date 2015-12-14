<?php include("vue/layout/header.inc.php"); ?>

<div class="prefix_3 col_18 ombrage" id="secureconnex">
    <h1 class="grand blueC center paddingp">RÉCAPITULATIF DE COMMANDE</h1>
    <br/>
    <p class="blueC normal center"></p>
    <br/>
    <div>
        <p>
        <p class="blueC normal">Panier :</p>
        <br/>
        <?php foreach($_SESSION["panier"]["id_article"] as $key => $value) { ?>
        <p><span class="red">Article</span> : <?php echo $_SESSION["panier"]["nom"][$key]; ?></p>
        <p><span class="red">Référence</span> : <?php echo $_SESSION["panier"]["reference"][$key]; ?></p>
        <p><span class="red">Description</span> : <?php echo $_SESSION["panier"]["description"][$key]; ?></p>
        <p><span class="red">Prix H.T.</span> : <?php echo $_SESSION["panier"]["prix_ht"][$key]; ?>€</p>
        <p><span class="red">Taux T.V.A</span> : <?php echo $_SESSION["panier"]["taux"][$key]; ?>%</p>
        <p><span class="red">Quantité</span> : <?php echo $_SESSION["panier"]["quantite"][$key]; ?></p>
        <br/>
        <?php } ?>
        <p class="red center">Total panier : <span class="blue"><?php echo $total_panier; ?>€ TTC</span></p>
        <br/>
        <form id="formulaire_inscription">
            <p class="blueC normal">Coordonnées :</p>
            <div class="clear">
                <label for="nom"><p class="col_9 padding">Nom :</p></label><input disabled type="text" name="nom" size="40" required="required" class="col_15 padding" value="<?php echo $user_account[2]; ?>"/>
            </div>
            
            <label for="prenom"><p class="col_9 padding">Prénom :</p></label><input disabled type="text" name="prenom" size="40" required="required" class="col_15 padding" value="<?php echo $user_account[3]; ?>"/>
       
            <label for="mail"><p class="col_9 padding">Email :</p></label><input disabled type="email" name="mail" size="40" required="required" class="col_15 padding" value="<?php echo $user_account[4]; ?>"/>

            <div class="clear">
                <label for="tel"><p class="col_9 padding">Téléphone : </p></label><input disabled type="tel" name="tel" size="40" required="required" class="col_15 padding" value="0<?php echo $user_account[10]; ?>"/>
            </div>
            <br/>
            
          <div id="adressedelivraison2">
            <br/>
            <p class="blueC normal">Adresse de livraison :</p>
            <br/>
            <label for="adresse"><p class="col_9 padding">Adresse :</p></label><input disabled type="text" name="adresse" size="40" required="required" class="col_15 padding" value="<?php echo $user_account[11]; ?>"/>

            <div class="clear">
                <label for="ville"><p class="col_9 padding">Ville :</p></label><input disabled type="text" name="ville" size="40" required="required" class="col_15 padding" value="<?php echo $user_account[12]; ?>"/>
            </div>

            <label for="cp"><p class="col_9 padding">Code Postal :</p></label><input disabled type="number" name="cp" size="40" required="required" class="col_15 padding" value="<?php echo $user_account[13]; ?>"/>

            <label for="pays"><p class="col_9 padding">Pays :</p></label><select disabled id="filtre" class="col_15 petit" name="pays">
                        <option value="France">France</option> 
                    </select>
            </div>
            </form>
            
            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                <input name="amount" type="hidden" value="<?php echo $total_panier; ?>" />
                <input name="currency_code" type="hidden" value="EUR" />
                <input name="shipping" type="hidden" value="0.00" />
                <input name="tax" type="hidden" value="0.00" />
                <input name="return" type="hidden" value="http://ns366377.ovh.net/vanwelde/perso/Vade-Retro/?module=commande&action=paiement"/>
                <input name="cancel_return" type="hidden" value="http://ns366377.ovh.net/vanwelde/perso/Vade-Retro/?module=commande&action=cancel" />
                <input name="notify_url" type="hidden" value="http://ns366377.ovh.net/vanwelde/perso/Vade-Retro/?module=commande&action=ipn" />
                <input name="cmd" type="hidden" value="_xclick" />
                <input name="business" type="hidden" value="vanweldenthomas-facilitator@live.fr" />
                <input name="item_name" type="hidden" value="Achat Console/Jeux Vade-Retro" />
                <input name="no_note" type="hidden" value="1" />
                <input name="lc" type="hidden" value="FR" />
                <input name="bn" type="hidden" value="PP-BuyNowBF" />
                <input name="custom" type="hidden" value="<?php echo $ref_commande; ?>" />
                <input type="submit" class="btnconnex" value="Payer" />
            </form>
        </p>      
    </div>
</div>

<?php include("vue/layout/footer.inc.php"); ?>