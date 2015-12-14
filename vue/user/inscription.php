<?php include("vue/layout/header.inc.php"); ?>

<div class="col_12 suffix_4 prefix_6 ombrage" id="secureconnex">
    <h1 class="grand blueC center">INSCRIPTION</h1>
    <br/>
    <p class="blueC normal center">Formulaire d'inscription Vade-Retro :</p>
    <br/>
    <a href="?module=user&amp;action=login">
        <p class="petit center"><em>Vous êtes déjà inscrit ? </em><strong class="blue"> Connectez-vous</strong></p>
    </a>
    <br/>
    <p class="petit"><span class="red">*</span> : Champs obligatoires</p>
    <br/>
    <div>
            <form id="formulaire_inscription" method="post" action="?module=user&amp;action=inscription">
                <label for="nom" class="col_9 padding police">Nom<span class="red">*</span> :</label><input type="text" name="nom" id="nom" size="40" required="required" class="col_15 padding"/>

                <label for="prenom" class="col_9 padding police">Prénom<span class="red">*</span> :</label><input type="text" name="prenom" id="prenom" size="40" required="required" class="col_15 padding"/>

                <label for="mail" class="col_9 padding police">Email<span class="red">*</span> :</label><input type="email" name="mail" id="mail" size="40" required="required" class="col_15 padding"/>

                 <label for="mail2" class="col_9 padding police">Confirmation Email<span class="red">*</span> :</label><input type="email" name="mail2" id="mail2" size="40" required="required" class="col_15 padding"/>

                <label for="mdp" class="col_9 padding police">Mot de passe<span class="red">*</span> :</label><input type="password" name="mdp" id="mdp" size="40" required="required" class="col_15 padding"/>

                 <div class="clear">
                <label for="mdp2" class="col_9 padding police">Confirmation MDP<span class="red">*</span> :</label><input type="password" name="mdp2" id="mdp2" size="40" required="required" class="col_15 padding"/>
                </div>

                <br/><br/>
             <div class="clear">
    <p class="col_23 padding">J'accepte les conditions d'utilisation.</p><input class="col_1 padding" type="checkbox" name="conditions" value="conditions" checked>
    <p class="col_23 padding">Je souhaites recevoir la newsletter.</p><input type="checkbox" name="news" value="news" checked class="col_1 padding">
               </div>     
                
                <input type="submit" class="basicbutton" value="Inscription" id="btnconnex">  
            </form>
            
    </div>
    <br/>
    
    <div>
        <p>
            <?php if (isset($_GET["inscr"]) === "nok") {
                echo"<p>Une erreur est survenue durant l'inscription, veuillez réessayer.</p>";
            }
            ?>
        </p>
    </div>
    <br/>
</div>

<?php include("vue/layout/footer.inc.php"); ?>