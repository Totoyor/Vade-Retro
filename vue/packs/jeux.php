<?php include("vue/layout/header.inc.php"); ?>

<div id="contenu" class="prefix_3 suffix_3 col_18 pagejvp1 " >
    <div class="fil_da petit paddingp">
        <p>
            <a href="?">Index</a> &gt; <a href="?module=packs&action=index">Étape 1 : Choisissez votre console</a> &gt; <span class="fil_dajeu">Étape 2 : Choisissez vos jeux</span> 
        </p>
    </div>

    <div id="jeu_top" class="col_24">
        <div class="clear">
            <div class="jeuxvideo col_24">
                <p><span class="jeuxvideo_title grand ">CHOISISSEZ <span>VOS</span> JEUX VIDEO</span></p>
            </div>
        </div>
    </div>
    
    <form method="post" action="?module=panier&action=panier">
    <?php foreach($retour_jeux as $key => $jeu) { ?>
     <div class="jv1 jv7 col_5">
        <img alt="" title="<?php echo $jeu[2]; ?>" src="assets/images/<?php echo $jeu[9]; ?>">
        <div class="jvcheck">
            <input type="checkbox" name="id_jeu[<?php echo $key ?>]" value="<?php echo $jeu[0]; ?>"><br>
        </div>
        <div class="jvconsole2">
            <p class="secure">
                <?php echo $jeu[2]; ?>
            </p>
        </div>
        <div class="jvprix2">
            <p class="right red secure moyen jvPprix"> <span class="jvcon"><?php echo $jeu[14]; ?></span><?php echo $jeu[4]; ?>€</p>
        </div>            
    </div>
    <?php } ?>
    
    <div class="clear"></div>

    <div id="num_page" class="num_page paddingp">
        <div id="securebtnpack">
            <div>
                <input type="submit" class="secure" id="bouton" class="moyen center prefix_1" value="ÉTAPE SUIVANTE">
            </div>
        </div>
    </div>
    </form>
</div>

<?php include("vue/layout/footer.inc.php"); ?>