<?php include("vue/layout/header.inc.php"); ?>
<div class="col_12 suffix_4 prefix_6 ombrage" id="secureconnex">
<h1 class="grand blueC center">AUTHENTIFICATION</h1>
<br/>
<p class="blueC normal center">Connectez-vous à votre compte client Vade-Rétro</p>
    <br/>
       <?php if (isset($_GET["log"]) == "nok") { ?>
            <p class="center red">Adresse Email ou Mot de passe incorrect !</p>
        
    <?php } ?>
       <br/>
        <?php if (isset($_GET["inscr"]) == "ok") { ?>
            <p class="center red">Merci pour votre inscription ! Vous allez reçevoir un email de confirmation !</p>
        
    <?php } else { ?>
                <p class="petit center"><em>Vous n'êtes pas encore inscrit ? </em><a href="?module=user&amp;action=inscription"><strong class="blue"> Inscrivez-vous</strong></a></p>
       <?php } ?>
<br/>
<div>
 
        <form id="formulaire_connexion" method="post" action="?module=user&amp;action=login">
            <p class="center"><label for="mail" class="center police">Votre adresse Email :</label></p><input type="email" name="mail" id="mail" size="40" required="required" class="prefix_2 col_20 suffix_2"/>
            <br/><br/>
            <p class="center"><label for="mdp" class="center police">Votre mot de passe :</label></p><input type="password" name="mdp" id="mdp" size="40" required="required" class="prefix_2 col_20 suffix_2"/>
            <br/><br/>
            
            <input class="basicbutton" type="submit" value=" Connexion" id="btnconnex">
            
        </form>
    
</div>
<br/>
</div>

<?php include("vue/layout/footer.inc.php"); ?>