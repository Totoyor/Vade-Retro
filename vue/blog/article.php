<?php include("vue/layout/header.inc.php"); ?>
<div id="blog_page" class="prefix_3 suffix_3 col_18">
    <div id="blog_header" class="ombrage">
        <div class="fil_da1 ">
        <p class="police petit paddingp"><a href="?">Accueil</a> &gt; <a href="?module=blog&action=index"><span class="fil_dajeu">Blog</span></a></p> 
        </div>
        
         <div id="mention_title">
            <h1><span class="mention_title white">VADE-RETRO : LE BLOG</span></h1>
        </div>

        <div id="blog_article" >
            <div class="blog_article1">
                <img alt="" title="article" class="left_img" src="assets/images/<?php echo $article["img_article"]; ?>" />
                <h3><span class="article_bltitle"><?php echo $article["titre_article"]; ?></span></h3>
                <p><span class="article_carac">Publié le : </span><?php echo $article["date_article"]; ?></p>
                <p><span class="article_carac">Auteur : </span><?php echo $article["auteur_article"]; ?></p>
                <p><br><?php echo $article["descr_article"]; ?></br></p>
                <p class="clear" />
            </div>
            
            <div class="blog_article1">
            <h3><span class="article_bltitle">Commentaires :</span></h3>
        <?php /*** //Commentaires à mettre

              foreach ($commentaires as $comment) {
                echo "<p>";
                echo "Publié le ".$comment["comment_date"]." - ";
                echo "Par ".$comment["blog_users_user_id"]."<br/><br/>";
                echo "Commentaire : ".$comment["comment_content"]."<br/>";
                echo "</p>";
              }

       ****/ ?> 
            </div>
            
            <div class="blog_article1"> 
                <h3><span class="article_bltitle">Ajouter un commentaire</span></h3>
                <form id="formu_comment" name="formu" action="?module=blog&action=article&id=<?php echo $_GET["id"]; ?>" method="post">
                    <input type="text" class="formu_comment1" name="nom" placeholder="Nom" required="required"/><br />
                    <textarea type="texarea"class="formu_comment2" name="comment" placeholder="Commentaire" required="required"></textarea><br/>
                    <input type="submit" class="formu_combouton"  value="Ajouter un commentaire">
                </form>
            </div>
            <div class="blog_artcile1">
                <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">Retourner sur le blog</a>
            </div>
        </div>
    </div>       
</div>

<?php include("vue/layout/footer.inc.php"); ?>