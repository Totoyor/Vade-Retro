<?php include("vue/layout/header.inc.php"); ?>

<div class="clear prefix_5 fil_da">
    <div class="petit paddingp">
        <p>
		    <a href="?">Index</a> &gt; <a href="?module=packs&action=index">Étape 1 : Choissisez votre console</a> &gt; <a href="?module=packs&action=jeux"><span>Étape 2 : Choissisez vos jeux</span></a> &gt; <span class="fil_dajeu">Étape 3 : Faites vous livrer</span>
        </p>
	</div>
</div>

<div class="col_14 suffix_5 prefix_5 ombrage" id="secureconnex">
    <h1 class="grand blueC center paddingp">LIVRAISON</h1>
    <br/>
  
    <div class="clear">
        <p class="center padding">Vade Rétro se propose de vous livrer votre pack à votre domicile.</p>
        <p class="center padding">Vade Rétro ne livre qu'en France pour le moment. Veuillez nous excuser pour la gène occasionnée.</p>
        <p class="center padding">Veuillez remplir vos coordonnées &amp; vos informations de livraison. Vos informations personnelles ne seront pas divulgués à des tiers.</p>
        <br/> 
    </div>
    
    <div>
        <p>
            <form id="formulaire_inscription" method="post" action="?module=packs&action=livraison">
                <div class="clear">
                <p class="blueC normal">Vérifiez vos coordonnées :</p>
                <br/>
                <label for="nom"><p class="col_9 padding">Nom<span class="red">*</span> :</p></label><input type="text" name="nom" size="40" required="required" maxlength="45" class="col_15 padding" value="<?php echo $_SESSION["user"][2] ?>"/>
                </div>
            
                <label for="prenom"><p class="col_9 padding">Prénom<span class="red">*</span> :</p></label><input type="text" name="prenom" size="40" required="required" maxlength="45" class="col_15 padding" value="<?php echo $_SESSION["user"][3] ?>"/>
                
                <label for="email"><p class="col_9 padding">Email<span class="red">*</span> :</p></label><input type="email" name="email" size="40" required="required" maxlength="45" class="col_15 padding" value="<?php echo $_SESSION["user"][4] ?>"/>
                
                <label for="tel"><p class="col_9 padding">Téléphone<span class="red">*</span> : </p></label><input type="tel" name="tel" size="40" required="required" class="col_15 padding" value="<?php echo $_SESSION["user"][10] ?>"/>
                <br/>
                
                <div class="clear">
                    <p class="blueC normal">Informations de livraison :</p>
                </div>
                
                <label for="adresse_liv"><p class="col_9 padding">Adresse<span class="red">*</span> :</p></label><input type="text" name="adresse_liv" size="40" required="required" maxlength="45" class="col_15 padding" value="<?php echo $_SESSION["user"][11] ?>"/>
            
                <label for="ville_liv"><p class="col_9 padding">Ville<span class="red">*</span> :</p></label><input type="text" name="ville_liv" size="40" required="required" maxlength="45" class="col_15 padding" value="<?php echo $_SESSION["user"][12] ?>"/>
    
                <div class="clear">
                 <label for="cp_liv"><p class="col_9 padding">Code postal<span class="red">*</span> :</p></label><input type="number" name="cp_liv" size="40" min="10000" max="99999" required="required" class="col_15 padding" value="<?php echo $_SESSION["user"][13] ?>"/>
                </div>
            
                <label for="pays_liv"><p class="col_9 padding">Pays<span class="red">*</span> :</p></label><select id="pays" class="col_15 petit" name="pays_liv">
                        <option value="France">France</option>   
                    </select>
                <div class="clear">
                
                </div>
                
                <br/>
                    <p class="petit"><span class="red">*</span> : Champs obligatoires</p>
                
            <input type="submit" class="basicbutton" value="Confirmez" id="btnconnex">  
        </form>
    </p>    
    </div>
</div>

<?php include("vue/layout/footer.inc.php"); ?>