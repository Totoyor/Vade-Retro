<?php include("vue/layout/header.inc.php"); ?>

<div id="contenu" class=" prefix_4 suffix_4 col_16" >
	<div class="fil_da police petit">
		<a href="?">Accueil</a> &gt; <span class="fil_dajeu">Contact</span> 
	</div>

	<div class="contact_titre">
		<h1><span class="grand blueC center paddingp"> CONTACT</span></h1>
	</div>
	
    <div class="contact_text">
		<p>Un problème de livraison ? Un produit en rupture de stock ? Une remarque à nous faire ? Une déclaration d’amour ? Nous serions heureux de vous écouter et de répondre à vos questions. N’hésitez donc pas à nous contacter en remplissant les champs ci-dessous.</p>
    </div>

    <div id="glob">
        <div id="contact_formulaire" class="col_11">
		    <form action="?module=page&amp;action=contact" method="post">
	            <input type="text" name="nom" placeholder="Nom" required="required" maxlength="45">
                <input type="text" name="prenom" placeholder="Prénom" required="required" maxlength="45">
                <input type="email" name="mail" placeholder="Email" required="required" maxlength="45">
                <input type="text" name="objet" placeholder="Objet du message" required="required" maxlength="45">
                <textarea placeholder="Votre message ..." required="required" name="message" maxlength="500"></textarea>
                <button type="submit">Envoyer</button>
            </form>
        </div>
    
        <div id="contact_adresse" class="col_11">
        	<div id="contact_picto" class="col_3">
        		<div id="contact_picto1">
        		<img src="assets/images/loc.png" alt="" title="localisation">
        	    </div>
        	    <div id="contact_picto2">
        		<img src="assets/images/tele.png" alt="" title="contact">
        	    </div>
        		<div id="contact_picto3">
        		<img src="assets/images/envelope.jpg" alt="" title="contact">
        	    </div>
            </div>
        
            <div id="contact_adresse2">
                <p><span class="vaderetro_nom">VADE RETRO</span><p>
                <p><span class="vaderetro_adresse">28 Place de la Bourse</span><p>
                <p><span class="vaderetro_codepostal">75002</span><p>
                <p><span class="vaderetro_ville">Paris</span><p>
                <p><span class="vaderetro_numero">01 45 56 15 61</span><p>
                <p><span class="vaderetro_mail">Veuillez utiliser le formulaire</span><p>	
        	</div>
        </div>
    </div>
    
    <div class="clear"></div>
    <br/>
    <div class="contact_text">
    <?php if(isset($_GET["message"])) {
            if ($_GET["message"] == "ok" ) { ?>
    
        <p class="red center">
            <span>Message Envoyé !</span> Merci pour votre message. Nous prenons en considération votre demande et vous serez contacté dans les plus brefs délais.
        <p>     
    <?php } 
            elseif ($_GET["message"] == "nok") { ?>
        <p class="red center">
            <span>Erreur !</span> L'envoi de mail n'a pas pu être validé.
        </p>
    <?php } } ?>
        </div>
    
    <div id="contact_map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2624.442754679465!2d2.3412426!3d48.8688356!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e3c8ab00dff%3A0xc8bb3a66d8ae2daa!2s28+Place+de+la+Bourse%2C+75002+Paris!5e0!3m2!1sfr!2sfr!4v1423185544519" width="650" height="450" style="border:0"></iframe>   
    </div>

</div>

<?php include("vue/layout/footer.inc.php"); ?>