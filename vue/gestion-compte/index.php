<?php include("vue/layout/header.inc.php"); ?>

<div class="col_4" id="gc_profil">
    <div id="gc_menu" class="">
    <p class="align"><a class="white padding align" href="?module=gestion-compte&action=index"><b>Compte client</b></a></p>
        </br>
    <p class="align"><a class="white padding" href="?module=panier&action=panier">Panier</a></p>
        </br>
    <p class="align"><a class="white padding align" href="?module=gestion-compte&action=commande">Commandes</a></p>
    </div>
</div>

<div class="prefix_1 col_18 ombrage" id="secureconnex">
    <h1 class="grand blueC center">GESTION DU COMPTE CLIENT</h1>
    <br/>
    <?php if(isset($_GET["modif"])) {
                if ($_GET["modif"] == "ok" ) { ?>
                    <div class="red center">
                        <p><strong>Modification effectuée !</strong> Vous avez correctement modifié vos informations.</p>
                    </div>     
    <?php } 
                elseif ($_GET["modif"] == "nok") { ?>
                    <div class="red center">
                        <p><strong>Erreur !</strong> La modification n'a pas pu être validé.</p>
                    </div>
    <?php } } ?>
    <br/>
    <p class="blueC normal">Gérez votre compte :</p>
    <br/>
    <div>
          <p>
            <form id="formulaire_inscription" method="post" action="?module=gestion-compte&action=index">

                <div class="clear">
                <label for="civ"><p class="col_9 padding">Civilité :</p></label><select id="pays" class="col_15 petit" name="civ">
                        <option value="">Civilité</option>
                        <option value="Mr.">Mr.</option>  
                        <option value="Mme.">Mme.</option> 
                    </select>
                </div>

                <div class="clear">
                <label for="nom"><p class="col_9 padding">Nom :</p></label><input type="text" name="nom" size="40" required="required" class="col_15 padding" value="<?php echo $user_account[2]; ?>" maxlength="45"/>
                    </div>

                <label for="prenom"><p class="col_9 padding">Prénom :</p></label><input type="text" name="prenom" size="40" required="required" class="col_15 padding" value="<?php echo $user_account[3]; ?>" maxlength="45"/>

                <label for="mail"><p class="col_9 padding">Email :</p></label><input type="email" name="mail" size="40" required="required" class="col_15 padding" value="<?php echo $user_account[4]; ?>" maxlength="50"/>
                <!--
                <label for="mdp"><p class="col_9 padding">Mot de passe :</p></label><input type="password" name="mdp" size="40" required="required" class="col_15 padding" />
                -->

                <label for="adresse"><p class="col_9 padding">Adresse :</p></label><input type="text" name="adresse" size="40" class="col_15 padding" value="<?php echo $user_account[6]; ?>" maxlength="50"/>


                <label for="ville"><p class="col_9 padding">Ville :</p></label><input type="text" name="ville" size="40" class="col_15 padding" value="<?php echo $user_account[7]; ?>" maxlength="50"/>

                <div class="clear">
                 <label for="cp"><p class="col_9 padding">Code postal :</p></label><input type="number" name="cp" size="40" min="10000" max="99999" class="col_15 padding" value="<?php echo $user_account[8]; ?>"/>
                    </div>


                <label for="pays"><p class="col_9 padding">Pays :</p></label><select id="pays" class="col_15 petit" name="pays">
                        <option value="console1">France</option>  
                        
                       
                    </select>

                <div class="clear">
                 <label for="tel"><p class="col_9 padding">Téléphone : </p></label><input type="tel" name="tel" size="40" class="col_15 padding" value="0<?php echo $user_account[10]; ?>"/>
                 </div>

          <div id="adressedelivraison">
                <br/>
                <p class="blueC normal">Adresse de livraison :</p>
                <br/>
                <div class="clear">
               <label for="adresse_liv"><p class="col_9 padding">Adresse Livraison :</p></label><input type="text" name="adresse_liv" size="40" class="col_15 padding" value="<?php echo $user_account[11]; ?>" maxlength="50"/>
               </div>


                <label for="ville_liv"><p class="col_9 padding">Ville Livraison :</p></label><input type="text" name="ville_liv" size="40" class="col_15 padding" value="<?php echo $user_account[12]; ?>" maxlength="50"/>

                <div class="clear">
                 <label for="cp_liv"><p class="col_9 padding">Code postal Livraison :</p></label><input type="number" min="10000" max="99999" name="cp_liv" size="40" class="col_15 padding" value="<?php echo $user_account[13]; ?>"/>
                </div>

                <div class="clear">
                <label for="pays"><p class="col_9 padding">Pays :</p></label><select id="pays" class="col_15 petit" name="pays">
                        <option value="console1">France</option>  
                        
                       
                    </select>
                </div>
              </div>
                <input type="submit" class="btnconnex " type="submit" value="Modifier mes infos.">
                <div>
                    <p id="inscription" class="petit"><a onclick="Êtes-vous sur de vouloir supprimer votre compte ?" href="?module=gestion-compte&action=index&suppr=<?php echo $user_account[0]; ?>">Supprimer mon compte</a></p>
                </div>
                </form>
        </p>
    </div>
</div>
<?php include("vue/layout/footer.inc.php"); ?>