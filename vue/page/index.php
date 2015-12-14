<?php include("vue/layout/header.inc.php"); ?>

    <div class="clear">
        <div id="action" class="ombrage2 col_24">
            <div id="part_haut" class="col_24">
                <a href="?module=packs&amp;action=index">
                    <div class="ombrage prefix_4 col_16 suffix_4" id="encar">
                        <div id="presentation" >
                            <p class="gras red center padding">
                                <strong>
                                    "La référence Rétrogaming"
                                </strong>
                            </p>
                            <p class="petit padding">
                                Avec notre concept de pack vous avez la possibilité de personnaliser votre pack avec une console ainsi que 2 à 6 jeux.
                            </p>
                        </div>
                        
                            <div id="bouton" class="moyen center">
                                <p class="secure" id="textbouton">
                                    COMPOSEZ VOTRE PACK
                                </p>
                            </div>
                    </div>
                </a>
            </div>


            <div id="part_bas" class="col_24">

                <a href="?module=packs&amp;action=index">
                    <div id="picto1" class="prefix_3 col_2 suffix_3 picto"></div></a>
                <a href="?module=packs&amp;action=index">
                    <div id="picto2" class="prefix_3 col_2 suffix_3 picto"></div></a>
                <a href="?module=packs&amp;action=index">
                    <div id="picto3" class="prefix_3 col_2 suffix_3 picto"></div></a>

                    <div class="prefix_1 col_6 suffix_1 center concept">
                        <a href="?module=packs&amp;action=index"><p class="padding">
                            <strong class="white">
                                1. Choisissez votre console
                            </strong>
                        </p>
                            </a>
                        <p class="grey petit sstitre">
                            Jouez en solo ou en multijoueur
                        </p>
                    </div>

                    <div class="prefix_1 col_6 suffix_1 center concept">
                        
                        <a href="?module=packs&amp;action=index">
                            <p class="padding">
                            <strong class="white">
                                2. Choisissez vos jeux
                            </strong>
                        </p>
                        </a>
                        <p class="grey petit sstitre">
                            Redécouvrez vos héros préférés
                        </p>
                    </div>

                    <div class="prefix_1 col_6 suffix_1 center concept">
                        <a href="?module=packs&amp;action=index">
                        <p class="padding">
                            <strong class="white">
                                3. Faites vous livrer
                            </strong>
                        </p>
                        </a>

                        <p class="grey petit sstitre">
                            Jouez chez vous en moins de 72h
                        </p>
                    </div>

            </div>

        </div>
    </div><!--fin.action-->
    
    <div id="produits">
        <div class="clear">
            <div id="console">
                <a href="?module=packs&amp;action=index">
                    
                    <div id="console1" class="col_12 ">

                        <div id="top_ventes" class="mention"></div>
                        
                        <div class="prix">
                        <p class="grand redF prixsecure"><?php echo $retour_cons_av1[4] ?>€</p>
                        </div>

                        <div class="produithover">
                                                     
                            <div class="partiBas">
                                
                                <h2 class="moyen padding"><?php echo $retour_cons_av1[2] ?></h2>
                                <p class="textproduit petit">
                                    <?php echo substr($retour_cons_av1[3], 0, 89); ?>...
                                </p>
                                
                                <ul class="listtext padding ">
                                    <li><strong>Jeux au choix</strong></li>  
                                    <li><strong>2 manettes (selon le pack choisi)</strong></li>
                                </ul>

                            </div>
                        </div>
<img alt="" title="<?php echo $retour_cons_av1[2] ?>" class="text2" src="assets/images/<?php echo $retour_cons_av1[9] ?>"/> 

                    </div>
                    <div id="console2" class="col_12 ">

                        <div id="edition_limit" class="mention"></div>
                        
                        <div class="prix">
                        <p class="grand redF prixsecure"><?php echo $retour_cons_av2[4] ?>€</p>
                        </div>

                        <div class="produithover">
                                                     
                            <div class="partiBas">
                                
                                <h2 class="moyen padding"><?php echo $retour_cons_av2[2] ?></h2>
                                <p class="textproduit petit">
                                    <?php echo substr($retour_cons_av2[3], 0, 89); ?>...
                                </p>
                                
                                <ul class="listtext padding ">
                                    <li><strong>Jeux au choix</strong></li>  
                                    <li><strong>2 manettes (selon le pack choisi)</strong></li>
                                </ul>

                            </div>
                        </div>
<img alt="" title="<?php echo $retour_cons_av2[2] ?>" class="text2" src="assets/images/<?php echo $retour_cons_av2[9] ?>"/> 

                    </div>
                </a>

            </div>
        </div>

        <div class="clear">
            <div id="jeuxvideo" class="col_24">
                <div id="titregalerie" class="col_24">
                    <h2 id="titrejv" class="prefix_2 col_12 moyen">MEILLEURES VENTES DE JEUX-VIDÉO</h2>

                   <div id="secure_filtre_jv" class="col_8">
                       <form method="post" action="?module=page&amp;action=index">
                        <select id="filtre" class="col_19 petit" name="filtre_console">
                            <option value="">Filtrer par console</option>
                            <?php foreach($retour_cons_cat as $console_cat) { ?>
                            <option value="<?php echo $console_cat[0]; ?>"><?php echo $console_cat[2]; ?></option>
                            <?php } ?>
                        </select>
                    <input type="submit" class="prefix_1 col_3 white" id="boutonfiltre" value="ok">
                    </form>
                    </div>
                </div>
                
                <div id="jvsecure">
                   <?php foreach($retour_jeux as $jeux) { ?>
                    <a href="?module=jeux-video&amp;action=fiche&amp;id=<?php echo $jeux[0]; ?>">
                        <div class="jv col_4">
                            <img alt="" title="<?php echo $jeux[2]; ?>" src="assets/images/<?php echo $jeux[9]; ?>">
                                <div class="jvconsole ">
                                    <p class="secure">
                                        <?php echo substr($jeux[2], 0, 14); ?> ...
                                    </p>
                                </div>
                                <div class="jvprix">
                                    <p class="right secure moyen jvPprix"><span class="jvcon"><?php echo $jeux[14]; ?></span><?php echo $jeux[4]; ?>€</p>
                                </div>
                        </div>
                    </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<?php include("vue/layout/footer.inc.php"); ?>