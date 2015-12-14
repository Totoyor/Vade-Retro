<div class="clear">
    <div id="valeurs" class="col_24 petit">
        <p>
        </p>
    </div>
</div>

<div class="clear">
    <div id="footer1" class="col_24">
        <div class="col_7 menufooter">
            <div class="prefix_5 menufooter">
                <ul id="menu2" class="listtext2 red petit">
                    <li class="ultimli">
                          <span class="normal">
                              <strong>
                                  Services client
                              </strong>
                        </span>
                    </li>
                    <li>
                        <a href="?module=gestion-compte&amp;action=index">
                            <span>Gestion du compte</span>
                        </a>
                    </li>
                    <li>
                        <a href="?module=panier&amp;action=panier">
                            <span>Panier</span>
                        </a>
                    </li>
                    <li>
                        <a href="?module=page&amp;action=mentionlegale"><span>Mentions Légales</span></a>
                    </li>
                </ul>

                <ul id="menu1" class="listtext2 blueC">
                    <li>
                        <a href="?module=page&amp;action=index"><span>Accueil</span></a>
                    </li>
                    <li>
                        <a href="?module=page&amp;action=apropos"><span>À propos</span></a>
                    </li>
                    <li>
                        <a href="?module=packs&amp;action=index"><span>Packs</span></a>
                    </li>
                    <li>
                        <a href="?module=jeux-video&amp;action=index"><span>Jeux-Vidéo</span></a>
                    </li>
                    <li>
                        <a href="?module=page&amp;action=rachat"><span>Rachat</span></a>
                    </li>
                    <li>
                        <a href="?module=blog&amp;action=index"><span>Blog</span></a>
                    </li>
                    <li>
                        <a href="?module=page&amp;action=contact"><span>Contact</span></a>
                    </li>
                </ul>
            </div>
        </div>

        <div id="blog" class="col_10 ombrage">
            <h2 id="titreblog" class="center moyen">SUIVEZ NOTRE BLOG</h2>

            <div>
                <?php if (isset($_GET["m"]) == 'ajoutemailok') { ?>
                    <p class="red center">
                        Votre Email à bien été pris en compte.
                    </p>
                <?php } elseif (isset($_GET["m"]) == 'ajoutemailnok') { ?>
                    <p class="center red">
                        Email non valide.
                    </p>
                <?php } ?>
                <form class="search" name="formulaire" method="post" action="?module=newsletter&amp;action=newsletter">
                    <input class="encarsearch" id="nexletter" type="email" placeholder=" Votre adresse email"
                           name="user_email" required="required" maxlength="45">
                    <input type="submit" class="butonews" value="Abonnez vous">
                </form>
            </div>

            <a href="?module=blog&amp;action=index">
                <div id="articleall">
                    <div class="col_6 " id="imagearticle">
                    </div>
                    <div id="article" class="col_18">
                        <p id="titrearticle">
                            <strong class="blue">
                                DÉCEPTION POUR LA RÉTRON 5
                            </strong>
                        </p>

                        <p class="right petit">
                            le 10/12/2014
                        </p>

                        <p class="padding petit securetab">
                            Elle est présentée comme la machine ultime pour les possesseurs d'anciens jeux Super
                            Nintendo, NES et Megadrive. Mais la machine réserve de nombreuses désillusions.
                        </p>

                        <p class="right">
                            <span class="redF" id="lien">
                                >>>
                            </span>
                        </p>
                    </div>
                </div>
            </a>
        </div>

        <div id="rs" class="col_7">
            <h2 id="titreflux" class="center moyen">FLUX TWITTER</h2>

            <div id="encartwi" class="prefix_2 col_20 suffix_2 encartwi">
                <div id="securtwi">
                    <blockquote class="twitter-tweet center petit" lang="fr">
                        <p>
                            <a href="https://twitter.com/_VRgaming/status/551776823022219265">
                                " Le joueur du grenier nous refait découvrir le premier donkey kong ATARI
                            </a>
                            <a class="blueC" href="https://twitter.com/hashtag/retrogaming?src=hash">#retrogaming</a>
                            <a class="blueC" href="https://twitter.com/hashtag/youtube?src=hash">#youtube "
                            </a>
                        </p>&mdash; Vade Retro Gaming (@_VRgaming)
                        <a href="https://twitter.com/_VRgaming/status/551776823022219265"><p
                                class="center petit padding">4 Janvier 2015
                            </p>
                        </a>
                    </blockquote>
                </div>
            </div>
            <a href="https://www.facebook.com/pages/Vade-R%C3%A9tro-Gaming/764631766918109?fref=ts">
                <div id="fb" class="prefix_3 col_6 pictosoc">
                </div>
            </a>
            <a href="https://twitter.com/_VRgaming?lang=fr">
                <div id="tw" class="col_6 pictosoc">
                </div>
            </a>
            <a href="https://plus.google.com/u/1/114690016767412197859/posts">
                <div id="go" class="col_6 pictosoc">
                </div>
            </a>
        </div>
    </div>
</div>

<div class="clear">
    <footer class="col_24">

        <p id="copyright" class="center grey petit">
            ©Vade-Retro - 2015
        </p>
    </footer>
</div>

</div>

<!-- SCRIPTS -->
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/mon_script_depart.js"></script>
</body>
</html>