<?php include("vue/layout/header.inc.php"); ?>


<div class="col_14 suffix_5 prefix_5 ombrage" id="secureconnex">
<h1 class="grand blueC center paddingp">RACHAT RETROGAMING</h1>
<br/>
   
    <?php if(isset($_GET["message"])) {
            if ($_GET["message"] == "ok" ) { ?>
    
        <p class="red center">
            <span>Message Envoyé !</span> Merci pour votre message. Nous prenons en considération votre demande et vous serez contacté dans les plus brefs délais.
        <p>     
    <?php } 
            elseif ($_GET["message"] == "nok") { ?>
        <p>
            <span>Erreur !</span> L'envoi de mail n'a pas pu être validé.
        </p>
    <?php } } ?>
    <div class="clear">
        <p class="petit center padding"><b>Vade Rétro se propose de reprendre vos consoles rétro, qu’elles soient neuves ou utilisées, en mauvais état, voire complètement cassées, nous serons heureux de vous en débarrasser. Il vous suffit simplement de remplir les champs ci-dessous pour que nous puissions vous en libérer sous 15 jours.</b></p>
        <br/>
        <div class="menufooter">
        <p class="blueC normal">Nous rachetons :</p>
            <ul id="menu3" class="listtext3 blueC">
                  <li><a href="?module=packs&amp;action=index"><span>Consoles</span></a>
                  </li>
                  <li><a href="?module=jeux-video&amp;action=index"><span>Jeux Vidéos</span></a>
                    </li>
                  <li class="black">Accessoires
                    </li>
            </ul>
        </div>
    </div>
    <div>
            <form id="formulaire_inscription" method="post" action="?module=page&amp;action=rachat">
                <div class="clear">
                <p class="blueC normal">Coordonnées :</p>
                <br/>
                <label for="nom" class="col_9 padding police">Nom<span class="red">*</span> :</label><input type="text" name="nom" id="nom" size="40" required="required" maxlength="45" class="col_15 padding"/>
                </div>
            
                <label for="prenom" class="col_9 padding police">Prénom<span class="red">*</span> :</label><input type="text" name="prenom" id="prenom" size="40" required="required" maxlength="45" class="col_15 padding"/>
                
                <label for="email" class="col_9 padding police">Email<span class="red">*</span> :</label><input type="email" name="email" id="email" size="40" required="required" maxlength="45" class="col_15 padding"/>
        
                <label for="adresse" class="col_9 padding police">Adresse<span class="red">*</span> :</label><input type="text" name="adresse" id="adresse" size="40" required="required" maxlength="45" class="col_15 padding"/>
            
                <label for="ville" class="col_9 padding police">Ville<span class="red">*</span> :</label><input type="text" name="ville" id="ville" size="40" required="required" maxlength="45" class="col_15 padding"/>
    
                <div class="clear">
                 <label for="cp" class="col_9 padding police">Code postal<span class="red">*</span> :</label><input type="number" id="cp" name="cp" min="10000" max="99999" required="required" class="col_15 padding"/>
                </div>
            
                <label for="pays1" class="col_9 padding police">Pays<span class="red">*</span> :</label><select class="col_15 petit" name="pays" id="pays1">
                        <option value="France">France</option>   
                    </select>
                <div class="clear">
                
                <label for="tel" class="col_9 padding police">Téléphone<span class="red">*</span> :</label><input type="tel" name="tel" id="tel" size="40" required="required" class="col_15 padding"/>
                <br/>
                </div>
                
                <div id="adressedelivraison">
                    <p class="blueC normal">Informations sur le produit en vente :</p>
                    <br/>
                    <div class="clear">
                    <label for="produit" class="col_9 padding police">Intilulée du produit<span class="red">*</span> :</label><input type="text" name="produit" id="produit" size="45" maxlength="45" required="required" class="col_15 padding"/>
                      <br/>
                      </div>
            
                    <label for="etat" class="col_9 padding police">Etat du produit<span class="red">*</span> :</label><select class="col_15 petit" name="etat" id="etat">
                        <option value="Bon">Bon</option>
                        <option value="Moyen">Moyen</option>
                        <option value="Mauvais">Mauvais</option>      
                    </select>
            
                    <div class="clear">
                    <label for="message" class="col_9 padding police">Votre message<span class="red">*</span> :</label>
                    <textarea  name="message" id="message" class="col_15 padding" rows="10" cols="50" maxlength="500" required="required"></textarea>
                    </div>
                    <br/>
                    <p class="petit"><span class="red">*</span> : Champs obligatoires</p>
                </div>
            <input type="submit" class="basicbutton" value="Envoyer" id="btnconnex">  
        </form>   
    </div>
    <br/>
</div>
<br/>
<br/>

<?php include("vue/layout/footer.inc.php"); ?>