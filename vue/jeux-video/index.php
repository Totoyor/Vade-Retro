<?php include("vue/layout/header.inc.php"); ?>


<div id="contenu" class="prefix_3 suffix_3 col_18 pagejvp" >
    <div class="fil_da petit">
        <p>
            <a href="?">Accueil</a> &gt; <span class="fil_dajeu">Jeux-Vidéo</span>
        </p>
    </div>

    <div id="jeu_top" class="col_24">
        <div class="clear">
            <div class="jeuxvideo col_12">
                <h1><span class="grand blueC center paddingp">JEUX VIDÉO</span></h1>
            </div>

            <form method="post" action="?module=jeux-video&amp;action=index">
                <div class="jeuxvideo_select prefix_5 col_6" >
                    <select id="filtre" class="col_19 petit" name="filtre_console">
                       <option value="">Trier par console</option>
                       <?php foreach($retour_cons_cat as $console) { ?>
                        <option value="<?php echo $console[0]; ?>"><?php echo $console[2]; ?></option>
                        <?php } ?>
                    </select>
                    <input type="submit" class="prefix_1 col_3 white" id="boutonfiltre" value="ok">
                </div>
            </form>
        </div>
    </div>
    
    <?php foreach($retour_jeux as $jeux) { ?>
    <div>
        <a href="?module=jeux-video&amp;action=fiche&amp;id=<?php echo $jeux[0]; ?>">
         <div class="jv1 jv6 col_5 ">
            <img alt="" title="jeu" src="assets/images/<?php echo $jeux[9]; ?>">
                <div class="jvconsole1">
                    <p class="secure">
                        <?php echo $jeux[2]; ?>
                    </p>
                </div>
                <div class="jvprix1">
                    <p class="right red secure moyen jvPprix"><span class="jvcon"><?php echo $jeux[14]; ?></span><?php echo $jeux[4]; ?>€</p>
                </div>
        </div>            
        </a>
    </div>
    <?php } ?>
    
    <div class="clear"></div>
</div>

<?php include("vue/layout/footer.inc.php"); ?>