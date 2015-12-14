<?php include("vue/layout/header.inc.php"); ?>
<div class="col_4" id="gc_profil2">
<div id="gc_menu" class="">
<p class="align"><a class="white padding" href="?module=gestion-compte&action=index">Compte client</a></p>
    </br>
<p class="align"><a class="white padding" href="?module=panier&action=panier">Panier</a></p>
    </br>
<p class="align"><a class="white padding" href="?module=gestion-compte&action=commande"><b>Commandes</b></a></p>

</div>
    </div>

<div class="col_18 prefix_1 ombrage" id="secureconnex">
<h1 class="grand blueC center">VOS COMMANDES</h1>

<div class="Tableau col_24" >
                <table cellspacing="0">
                    <tr class="tr1">
                        <td>
                            Référence
                        </td>
                        <td >
                            Nom
                        </td>
                        <td>
                            Adresse
                        </td>
                        
                        <td>
                            Pack &amp; Jeux
                        </td>
                        
                        <td>
                            Quantité
                        </td>
                        
                        <td>
                            Montant
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                           <?php echo $user_commande[1]; ?>
                        </td>
                        <td>
                            <?php echo $_SESSION["user"][2]; ?> <?php echo $_SESSION["user"][3]; ?>
                        </td>
                        <td>
                           <?php echo $_SESSION["user"][11]; ?> - <?php echo $_SESSION["user"][12]; ?>
                           <?php echo $_SESSION["user"][13]; ?> - <?php echo $_SESSION["user"][14]; ?>
                        </td>
                        <td>
                            <?php echo $user_commande[6]; ?>
                        </td>
                         <td>
                            <?php echo $user_commande[3]; ?>
                        </td>
                         <td>
                            <?php echo $user_commande[2]; ?> €
                        </td>
                    </tr>
                    
                </table>
            </div>
    
</div>
            
<?php include("vue/layout/footer.inc.php"); ?>