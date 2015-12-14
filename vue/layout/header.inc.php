<!DOCTYPE html>
<head>
    
    <link rel="icon" href="assets/images/favicon.ico" />
    
	<meta charset="utf-8"/>

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/grid.css">

<link rel="stylesheet" media="(min-width:767px) and (max-width: 1000px)" href="assets/css/style_small.css" type="text/css" />
<link rel="stylesheet" media="(min-width:480px) and (max-width: 767px)" href="assets/css/style_tab.css" type="text/css" />
<link rel="stylesheet" media="(min-width:350px) and (max-width: 480px)" href="assets/css/style_phone.css" type="text/css" />
<link rel="stylesheet" media="(min-width:1000px) and (max-width: 1281px)" href="assets/css/style_moyen.css" type="text/css" />
    
	<title>Vade-Retro</title>
    
<meta name="viewport" content="width=device-width, initial-scale=0.8">

</head>
<body>

<div class="ombrage" id="container">
    
    <header id="header" class="col_24 ombrage">

            <a href="?">
                
                <div id="logohover">
                <div id="logo" class="prefix_1 col_3">
                </div>
                </div>
            </a>

        <a href="?">
            <div id="titreLogo" class="col_5 grand">
                <h1>
                VADE<span id="titrepoint">.</span>RETRO<br/><span id="gaming">GAMING</span>
                </h1>
            </div>
        </a>

            <div id="slogan" class="prefix_1 col_6 suffix_1 petit">
                <p class="center normal">
                    
                    <strong class="redF"></strong>
                    
                </p>
            </div>

            <div id="cosearch" class="col_6 suffix_1">
                    <form class="search petit" name="formulaire" method="post" action="?module=page&amp;action=recherche">
                    <input class="encarsearch" type="text" placeholder=" Rechercher un jeu, des actus ..." name="recherche" id="recherche" required="required">
                    <input type="submit" class="basicbutton" id="butonews2" value="ok">
                    </form>

                    <div>
                        
                    <?php if(isset($_SESSION["user"])) {  ?>
                        
                    <p id="connexion" class="petit">
                            <a href="?module=user&amp;action=logout">
                                
                                    Déconnexion
                                
                            </a>
                    </p>
                        
                    <p id="inscription" class="petit">
                            <a href="?module=gestion-compte&amp;action=index">
                                
                                    Gestion du compte
                                
                            </a>
                    </p>
                  <?php  }
                        else  { ?>
                        <p id="connexion" class="petit">
                            <a href="?module=user&amp;action=login">
                                
                                    Connexion
                                
                            </a>
                    </p>
                        
                    <p id="inscription" class="petit">
                            <a href="?module=user&amp;action=inscription">
                                
                                    S'inscrire
                                
                            </a>
                    </p>
                        <?php } ?>
                    </div>
            </div>

        <div id="navigation">

            <div id="menu" class="col_17 prefix_4">
                    <ul id="nav">
                          <li id="home">
                              <a href="?module=page&amp;action=index">Accueil</a>
                          </li>
                        
                        <li id="home2">
                              <a href="?module=page&amp;action=index"><img src="assets/images/maison.png" alt=""/></a>
                          </li>

                          <li>
                              <a href="?module=page&amp;action=apropos">À propos</a>
                            </li>

                          <li >
                              <a id="packsmenu" href="?module=packs&amp;action=index">Packs</a>
                            </li>

                            <li>
                                <a href="?module=jeux-video&amp;action=index" id="jvmenu">Jeux-Vidéo</a>
                            </li>

                            <li>
                                <a href="?module=page&amp;action=rachat">Rachat</a>
                            </li>

                            <li>
                                <a href="?module=blog&amp;action=index">Blog</a>
                            </li>

                            <li>
                                <a href="?module=page&amp;action=contact">Contact</a>
                            </li>

                     </ul>
            </div>

            <a href="?module=panier&amp;action=panier">
                <div id="panier" class="prefix_1 col_1 suffix_1">
                    <p class="center red petit" id="nbpanier">
                        <strong>
                          <?php echo panier_nombre_ligne(); ?>
                        </strong>
                    </p> 
                    
                </div>
            </a>

        </div><!--fin.navigation-->
        
   <!--_________***RESPONSIVE***_________-->    
 
    <div id="actions_resp" class="clear">
        
        
        <div id="action_resp" class="clear"></div>
         <div id="action_resptrick" class="clear"></div>
        <a href="?module=panier&amp;action=panier">
        <div id="action_resp2" class="panier2">
         <p class="center red petit" id="nbpanier2">
                        <strong>
                          
                        </strong>
                    </p> 

            </div></a>

        
        
    </div>

<div class="menu_resp clear">
                            <ul id="nav_resp">
                                    

                                    
<li class="resp">
                                          <a href="?module=page&amp;action=index">Accueil</a>
                                        </li>
                                
                                      <li class="resp">
                                          <a href="?module=page&amp;action=apropos">À propos</a>
                                        </li>

                                      <li class="resp" >
                                          <a href="?module=packs&amp;action=index">Packs</a>
                                        </li>

                                        <li class="resp">
                                            <a href="?module=jeux-video&amp;action=index" >Jeux-Vidéo</a>
                                        </li>

                                        <li class="resp">
                                            <a href="?module=page&amp;action=rachat">Rachat</a>
                                        </li>

                                        <li class="resp">
                                            <a href="?module=blog&amp;action=index">Blog</a>
                                        </li>

                                        <li class="resp">
                                            <a href="?module=page&amp;action=contact" >Contact</a>
                                        </li>

                                 </ul>


            </div>
    </header><!-- fin.header-->