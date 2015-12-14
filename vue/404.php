<?php include("vue/layout/header.inc.php"); ?>

    <div class="clear">
        <div id="construction">
        <div class="prefix_2 col_4 suffix_2"><img src="assets/images/packman.png" alt="construction"></div>
        
        
        <div id="textconstruc" class="padding col_10 suffix_6">
        
        <p class="center secure grand red">
            OUPS
        </p>
        <p class="center secure grand red">
          ERREUR 404
        </p>
        <p class="center secure grand red">
            <br/>
          <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">Retour</a>
        </p>
        
        </div>
    </div>
</div>
<?php include("vue/layout/footer.inc.php"); ?>