<?php include("vue/layout/header.inc.php"); ?>

<div class="prefix_4 suffix_4 col_16 " id="contenu">
    <div class="fil_da petit">
        <p>
            <a href="?">Accueil</a> &gt; <a href="?module=jeux-video&action=index">Jeux-Vidéo</a> &gt;<span class="fil_dajeu"> <?php echo $lireJeu[2]; ?></span>
        </p>
    </div>

    <div id="fiche_head" class="col_24">
        <div id="fiche_title">
            <p><span class="jeu_title grand"><?php echo $lireJeu[2]; ?></span></p>
            <p><span class="jeu_console"><?php echo $lireJeu[14]; ?></span></p>
        </div>
        <p><span class="jeu_prix"><?php echo $lireJeu[4]; ?>€</span></p>	
    </div>
	
    <div id="show">
        <img alt="" title="jeu" src="assets/images/<?php echo $lireJeu[9]; ?>" alt="" width="640"/>
    </div>
</div>

<div id="info_jeu" class="prefix_4 suffix_4 col_16">
	<div id="jeu_resume">
		<p><span class="jeu_resume blue nom_jeufiche"><?php echo $lireJeu[2]; ?></span></p>
		<p><span class="jeu_resumeplus"><?php echo $lireJeu[3]; ?></span></p>
		<p><span class="jeu_resume"><b class="moyen prix_jeuxfiche">Prix : <?php echo $lireJeu[4]; ?>€</b></span></p>
	</div>
	<div id="jeu_carac">
		<p><span class="jeu_carac1">Date de sortie</span></p>
		<p><span class="jeu_carac2"><?php echo $lireJeu[7]; ?></span></p>
		<p><span class="jeu_carac1">Console</span></p>
		<p><span class="jeu_carac2"><?php echo $lireJeu[14]; ?></span></p>
		<p><span class="jeu_carac1">Référence</span></p>
		<p><span class="jeu_carac2"><?php echo $lireJeu[1]; ?></span></p>
		<p><span class="jeu_carac1">Stock</span></p>
		<p><span class="jeu_carac2"><?php echo $lireJeu[8]; ?></span></p>	
    </div>
    <div id="bouton_ajout" class="clear">
        <a href="?module=jeux-video&action=fiche&id=<?php echo $lireJeu[0]; ?>&ajout_panier=<?php echo $lireJeu[0]; ?>"><button>Ajouter au Panier</button></a>
    </div>
</div>

<?php include("vue/layout/footer.inc.php"); ?>