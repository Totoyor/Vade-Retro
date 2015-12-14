<?php include("vue/layout/header.inc.php"); ?>
<div id="corp_panier" class="prefix_4 suffix_4 col_16">
    <div id="titre_page">
        <p><span class="titre_page"> VOTRE PANIER</span></p>
    </div>

    <div><p class="red center">Vous avez <?php echo $nombre_articles; ?> article(s) dans votre panier.</p></div>

  <?php if(isset($_SESSION["panier"])) {  ?>
   <?php foreach($_SESSION["panier"]["id_article"] as $key => $value) { ?>
    <div class="col_24 panier_article" >
        <div class="bouton_supp">
            <a href="?module=panier&action=panier&modif=suppr_art&id_art=<?php echo $_SESSION["panier"]["id_article"][$key]; ?>" class="police">X</a>
        </div>
        <div class="quantite">
            <form method="post" action="?module=panier&action=panier&modif_quant=qte&id_art=<?php echo $_SESSION["panier"]["id_article"][$key]; ?>">
                <p class="center">QT.</p>
                <input type="number" name="quantite" value="<?php echo $_SESSION["panier"]["quantite"][$key]; ?>" min="1" required="required">
                <div class="button_quantite">
                    <input type="submit" value="ok" class="basicbutton" id="butonews">
                </div>
            </form>
        </div>

        <div  class="prefix_1  suffix_4 panier_title">
            <p><span class="panier_title2"><?php echo $_SESSION["panier"]["nom"][$key]; ?></span><span class="panier_prix"><?php echo $_SESSION["panier"]["prix_ht"][$key]; ?>€ HT.</span></p>
            <br/>
            <p><span class="panier_text"><?php echo $_SESSION["panier"]["description"][$key]; ?></span></p>
        </div>
     </div>
    <?php } ?>
    
    <!---
    <div class="col_24" id="panier_prom">
        <div id="panier_code" class="white">
            <form>
               <p>
                   <label>Code Promotionnel</label> : <input type="text" name="code_promo" />
              </p>
            </form>
        </div>
    </div>
    ---->
   
    <div class="col_24" id="panier_total">
        <p class="red center">Vous avez <?php echo $nombre_articles; ?> article(s) dans votre panier.</p>
        
        <p class="panier_total grand center">Total : <?php echo $total_panier; ?> € TTC.</p>
    </div>
    
    <div class="bouton_panier center">
        <a href="?module=packs&action=livraison"><span class="bouton_panier_modif police">Valider le panier</span></a>
    </div>
    <div>
        <p id="inscription" class="petit"><a href="?module=panier&action=panier&panier=delete">Vider le panier</a></p>
    </div>
    <?php  } ?>
    <br/>
</div>

<?php include("vue/layout/footer.inc.php"); ?>