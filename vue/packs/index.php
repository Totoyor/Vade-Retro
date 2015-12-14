<?php include("vue/layout/header.inc.php"); ?>

<div id="contenu" class="prefix_3 col_18" >
	
    <div class="fil_da">
		<a href="?" class="petit">Index</a>
        <span class="fil_dajeu fil_da petit">&gt; Étape 1: Choississez votre console</span>
	</div>

    <div id="jeu_top" class="col_24">
        <div class="jeuxvideo">
            <p><span class="jeuxvideo_title grand col_24">CHOISISSEZ VOTRE CONSOLE</span></p>
        </div>
    </div>

   <?php foreach($retour_cons as $console) { ?>
    <div>
       
        <a href="?module=packs&amp;action=fiche&amp;id=<?php echo $console[0]; ?>">
            <div class="jv6 col_5 secure_border">
                <img alt="" title="<?php echo $console[2]; ?>" src="assets/images/<?php echo $console[9]; ?>">
                    <div class="jvconsole2">
                        <p class="secure">
                            <?php echo $console[2]; ?>
                        </p>
                    </div>
                    <div class="jvprix3">
                        <p class="right red secure moyen jvPprix"><?php echo $console[4]; ?>€</p>
                    </div>
            </div>            
        </a>
    </div>
    <?php } ?>
    <div>
            <div class="jv6 col_5 secure_border">
                <img alt="" title="console" src="assets/images/limited-edition.png">
                    <div class="jvconsole2">
                        <p class="secure">
                            NES Édition Limitée
                        </p>
                    </div>
                    <div class="jvprix3">
                        <p class="right red secure moyen jvPprix">N.C.€</p>
                    </div>
            </div>            
    </div>
</div>


<?php include("vue/layout/footer.inc.php"); ?>