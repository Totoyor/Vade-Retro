<?php include("vue/layout/header.inc.php"); ?>
<div id="article_page" class="prefix_4 suffix_4 col_16">
    <div id="titre_page">
    <p><span class="titre_page grand center" >RESULTATS DE VOTRE RECHERCHE</span></p>
    </div>

   <div  class="recherche2 clear">
    <form class="search petit" name="formulaire" method="post" action="?module=page@amp;action=recherche">
                    <input class="encarsearch" type="text" placeholder=" Effectuer une nouvelle recherche" name="recherche" id="recherche2" required="required">
                    <input type="submit" class="basicbutton" id="butonews" value="Rechercher">
    </form>
       
    <p class="secure_ipad_recherche">Résultats pour "<em>Exemple de recherche</em>"</p>
</div>
    
<div  class="recherche2 clear">
<a href="">
    <div class="col_24 panier_article"  >
        <div  class="prefix_1 col_3 panier_image"> 
            <img src="assets/images/147322a13da7d0cb20b4d4140e62ae25.jpg" alt="" title="photo de recherche"/>
        </div>
        
        <div class="prefix_5 panier_title">
            <p><span class="panier_title2">Rayman</span><span class="panier_prix ">15.05€</span></p>
            <p><span class="panier_text"> eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</span></p>
        </div>
     </div>
</a>
</div>

<div  class="recherche2 clear">
<a href="">
    <div class="col_24 panier_article" >
        <div  class="prefix_1 col_3 panier_image"> 
            <img src="assets/images/article.png" alt="" title="photo de recherche"/>

        </div>
        <div  class="prefix_5 panier_title">
            <p><span class="panier_title2">RETRON 5</span><span class="panier_prix ">BLOG</span></p>
            <p><span class="panier_text"> eiusmod tempor incididunt. 
             Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</span></p>
        </div>
    </div>
</a>
</div>
    <div class="secure_rechecheN clear"></div>
</div>


<?php include("vue/layout/footer.inc.php"); ?>