<?php include("vue/layout/header.inc.php"); ?>

<div class="col_12" id="fichedeprod">
    <div class="prefix_2 suffix_1 col_21">
        <div id="fiche_head" class="col_24">
            <div id="fiche_title">
                <p><span class="jeu_title grand"><?php echo $console_aff[2]; ?></span></p>
            </div>
        </div>
        <div id="jeu_img" class="col_18 prefix_3 suffix_3">
            <img alt="" title="console" src="assets/images/<?php echo $console_aff[9]; ?>" width="100%" >
        </div>
    </div>
    <div class="prefix_2 suffix_1 col_21">
        <div id="jeu_resume">
            <p><span class="jeu_resume">Caractéristiques :</span></p>
            <p><span class="jeu_resumeplus"><?php echo $console_aff[3]; ?></span></p>
        </div>
        <div id="jeu_carac">
            <p><span class="jeu_carac1">Date de sortie</span></p>
            <p><span class="jeu_carac2"><?php echo $console_aff[7]; ?></span></p>
            <p><span class="jeu_carac1">Référence</span></p>
            <p><span class="jeu_carac2"><?php echo $console_aff[1]; ?></span></p>
            <p><span class="jeu_carac1">Stock</span></p>
            <p><span class="jeu_carac2"><?php echo $console_aff[8]; ?></span></p>
            <p><span class="jeu_prix grand"><?php echo $console_aff[4]; ?>€</span></p>      
        </div> 
    </div>
</div>


<div class="col_12 encarlevel"> 
    <p class="center prefix_1 suffix_2 col_21"><span class="grand  blue">CHOISSISSEZ VOTRE LEVEL</span></p>

    <div class="prefix_1 suffix_2 col_21 level ombrage">
        <div class="padding">    
            <p class="normal center blueC paddingp">Level 1</p>
            <p class="petit paddingp">Contenant 2 jeux vidéo au choix, une console et une manette, ce pack est idéal pour les personnes souhaitant découvrir ou redécouvrir le rétrogaming seules. De quoi bien débuter dans le milieu.</p>
            <p class="col_8 center blueC paddingp">1 manette</p>
            <p class="col_8 center blueC paddingp">2 Jeux</p>
            <a href="?module=packs&action=jeux&console=<?php echo $console_aff[0]; ?>"><button type="button" class="col_8 bouttonpack petit">Ajouter au panier</button></a>
        </div>
    </div>
    
    <div class="prefix_1 suffix_2 col_21 level ombrage">
        <div class="padding">
            <p class="normal center blueC paddingp">Level 2</p>
            <p class="petit paddingp">Contenant 4 jeux vidéo, une console et deux manettes, ce pack se veut plus complet et moins personnel que le Level 1. Il peut être idéal pour les couples, les colocataires ou les joueurs les plus ardus. Les jeux proposés pourront être joués à plusieurs, d’où l’utilité d’y mettre deux manettes.</p>
            <p class="col_8 center blueC paddingp">2 manettes</p>
            <p class="col_8 center blueC paddingp">4 Jeux</p>
            <a href="?module=packs&action=jeux&console=<?php echo $console_aff[0]; ?>"><button type="button" class="col_8 bouttonpack petit">Ajouter au panier</button></a> 
        </div>
    </div>
    
    <div class="prefix_1 suffix_2 col_21 level ombrage">
        <div class="padding">
            <p class="normal center blueC paddingp">Level 3</p>
            <p class="petit paddingp">Contenant 6 jeux vidéo, une console rétro et 4 manettes, ce pack est idéal pour les familles nombreuses ou les consommateurs aimant recevoir du monde chez eux. Le Level 3 est le pack le plus complet, permettant aux joueurs plus de jeux relativement différents sur lesquels ils pourront passer des heures entières.</p>
            <p class="col_8 center blueC paddingp"><b>4 mannettes</b></p>
            <p class="col_8 center blueC paddingp"><b>6 Jeux</b></p>
            <a href="?module=packs&action=jeux&console=<?php echo $console_aff[0]; ?>"><button type="button" class="col_8 bouttonpack petit">Ajouter au panier</button></a> 
        </div>
    </div>
    

</div> 

<?php include("vue/layout/footer.inc.php"); ?>