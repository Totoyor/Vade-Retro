<?php include("vue/layout/header.inc.php"); ?>
<div id="blog_page" class="prefix_3 suffix_3 col_18">
    
    <div id="blog_header" class="ombrage">

        <div class="fil_da1 ">
        <p class="police petit paddingp"><a href="?">Accueil</a> &gt; <a href="?module=blog&amp;action=index"><span class="fil_dajeu">Blog</span></a></p> 
        </div>

         <div id="mention_title">
            <h1><span class="mention_title white">VADE-RETRO : LE BLOG</span></h1>
        </div>
        <div id="blog_select">
           <form>
            <div class="blog_select1">
                <select id="filtre" class="col_19 petit">
                   <option value="catégorie">Catégories</option>
                   <?php foreach($categories as $categorie) { ?>
                   <option value="<?php echo $categorie["id_blog_categorie"]; ?>"><a href="?"><?php echo $categorie["nom_categorie"]; ?></a></option>
                   <?php } ?>
                </select>
                
                <button class="prefix_1 col_4" id="boutonfiltre">ok</button>
            </div>
            </form>     
        </div>

        <div id="blog_article" >

        <?php foreach($articles as $article) { ?>

            <div class="blog_article1">
                <img alt="" title="article" class="left_img" src="assets/images/<?php echo $article["img_article"]; ?>" />
                <h3><span class="article_bltitle"><?php echo $article["titre_article"]; ?></span></h3>
                <p><span class="article_carac">Publié le : </span><?php echo $article["date_article"]; ?></p>
                <p><span class="article_carac">Auteur : </span><?php echo $article["auteur_article"]; ?></p>
                <p><span class="article_carac">Catégorie(s) : </span><?php //echo $article["auteur_article"]; ?></p>
                <br/>
                <p><?php echo substr($article["descr_article"], 0, 250); ?>...</p>
                    <a class="white" href="?module=blog&amp;action=article&amp;id=<?php echo $article["id_article"]; ?>"><button class="basicbutton" value="Lire la suite">Lire la suite</button></a>
                <p class="clear"></p>
            </div>

        <?php } ?>

            </div>
    
        </div>
 
        <div id="num_page" class="num_page">
            <ul>
                <li ><a class="police" href="?module=blog&amp;action=index">&lt;</a></li>
                <li ><a class="police" href="?module=blog&amp;action=index&amp;page=1">1</a></li>
                <li ><a class="police" href="?module=blog&amp;action=index&amp;page=2">2</a></li>
                <li ><a class="police" href="?module=blog&amp;action=index&amp;page=3">3</a></li>
                <li ><a class="police" href="?module=blog&amp;action=index&amp;page=1">&gt;</a></li>
            </ul>
        </div>              
</div>

<?php include("vue/layout/footer.inc.php"); ?>