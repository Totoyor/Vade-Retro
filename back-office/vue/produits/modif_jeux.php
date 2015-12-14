<?php include("vue/layout/header.back.inc.php"); ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                       <?php //var_dump($lireJeu); ?>
                        <h1 class="page-header">
                            Formulaire Modification Jeux
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="?module=page&action=index">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Formulaire Modification Jeux
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                
                <div class="row">
                <?php if(isset($_GET["modif"])) { ?>
                    <div class="alert alert-success">
                    <strong>Jeu Modifié !</strong> Vous avez correctement modifié le jeu dans la base de données.
                </div>     
                        <?php }?>
                </div>
                <div class="row">
                <div class="col-lg-12">
                           <a href="?module=produits&action=gestion_jeux"><button type="button" class="btn btn-primary">Retour</button></a>
                        </div>
                </div>
                <br/>

                <div class="row">
                    <div class="col-lg-8">

                        <form role="form" method="post" action="?module=produits&action=modif_jeux&id=<?php echo $lireJeu[0] ?>&modif=<?php echo $lireJeu[0] ?>" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="ref">Référence du jeux :</label>
                                <input class="form-control" type="text" name="ref" required="required" value="<?php echo $lireJeu[1] ?>">
                                <p class="help-block">Exemple : CR420</p>
                            </div>

                            <div class="form-group">
                                <label for="nom">Nom du jeux :</label>
                                <input class="form-control" type="text" name="nom" required="required" value="<?php echo $lireJeu[2] ?>">
                                <p class="help-block">Exemple : Mario, Donkey Kong, ...</p>
                            </div>
                            
                            <div class="form-group">
                                <label for="descr">Description du jeux :</label>
                                <textarea class="form-control" rows="3" name="descr" required="required"><?php echo $lireJeu[3] ?></textarea>
                                <p class="help-block">250 caractères max.</p>
                            </div>
                            
                            <div class="form-group">
                                <label for="annee">Année du jeux :</label>
                                <input class="form-control" type="number" min="1960" max="2020" name="annee" required="required" value="<?php echo $lireJeu[7] ?>">
                                <p class="help-block">Exemple : 1998</p>
                            </div>
                            
                            <div class="form-group">
                                <label for="prix_ttc">Prix du jeux TTC :</label>
                                <input class="form-control" type="number" min="0" name="prix_ttc" required="required" value="<?php echo $lireJeu[4] ?>">
                                <p class="help-block">Exemple : 30</p>
                            </div>
                            
                            <div class="form-group">
                                <label for="prix_ht">Prix du jeux HT :</label>
                                <input class="form-control" type="number" min="0" name="prix_ht" value="<?php echo $lireJeu[5] ?>">
                                <p class="help-block">Exemple : 25</p>
                            </div>
                            
                            <div class="form-group">
                                <label for="tva">Taux de TVA :</label>
                                <input class="form-control" type="number" min="0" name="tva" value="<?php echo $lireJeu[6] ?>">
                                <p class="help-block">Exemple : 10</p>
                            </div>
                            
                            <div class="form-group">
                                <label for="stock">Stocks du jeux :</label>
                                <input class="form-control" type="number" min="0" name="stock" value="<?php echo $lireJeu[8] ?>">
                                <p class="help-block">Exemple : 20</p>
                            </div>
                            
                            <div class="form-group">
                                <label for="image">Modification de l'image :</label>
                                <img src="../assets/images/<?php echo $lireJeu[9] ?>">
                                <input type="file" name="image">
                            </div>
                            
                            <div class="form-group">
                                <label for="console">Console</label>
                                <select class="form-control" name="console">
                                   <?php foreach($retour_cons as $console) { ?>
                                    <option value="<?php echo $console[0] ?>"><?php echo $console[2] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Modifier le jeu</button>
                            <button type="reset" class="btn btn-default">Réinitialiser le formulaire</button>

                        </form>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="assets/back-office/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/back-office/js/bootstrap.min.js"></script>

</body>

</html>
