<?php include("vue/layout/header.back.inc.php"); ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                       <?php //var_dump($consModif); ?>
                        <h1 class="page-header">
                            Formulaire Modification de Console
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="?module=page&action=index">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Formulaire Modification de Console
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                
                <div class="row">
                       <div class="col-lg-12">
                           <a href="?module=produits&action=gestion_consoles"><button type="button" class="btn btn-primary">Retour</button></a>
                        </div>
                </div>
                <br/>
                
                <?php if(isset($_GET["m"])) {
                        if ($_GET["m"] == "ok" ) { ?>
                    <div class="alert alert-success">
                    <strong>Console Modifié !</strong> Vous avez correctement modifié la console dans la base de données.
                </div>     
                  <?php } 
                        elseif ($_GET["m"] == "nok") { ?>
                        <div class="alert alert-danger">
                    <strong>Erreur !</strong> La modification dans la base de donnée n'a pas pu être validé.
                </div>
                        <?php } } ?>
                
                <div class="row">
                    <div class="col-lg-8">

                        <form role="form" action="?module=produits&action=modif_console&id=<?php echo $consModif[0] ?>&modif=<?php echo $consModif[0] ?>&m=ok" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="ref">Référence de la console :</label>
                                <input class="form-control" type="text" required="required" name="ref" value="<?php echo $consModif[1] ?>">
                                <p class="help-block">Exemple : CR420</p>
                            </div>

                            <div class="form-group">
                                <label for="nom">Nom de la console :</label>
                                <input class="form-control" type="text" name="nom" required="required" value="<?php echo $consModif[2] ?>">
                                <p class="help-block">Exemple : NES, Nintendo 64, ...</p>
                            </div>
                            
                            <div class="form-group">
                                <label for="descr">Description de la console :</label>
                                <textarea class="form-control" rows="3" name="descr"><?php echo $consModif[3] ?></textarea>
                                <p class="help-block">250 caractères max.</p>
                            </div>
                            
                            <div class="form-group">
                                <label for="annee">Année de la console :</label>
                                <input class="form-control" type="number" min="1960" max="2020" name="annee" required="required" value="<?php echo $consModif[7] ?>">
                                <p class="help-block">Exemple : 1998</p>
                            </div>
                            
                            <div class="form-group">
                                <label for="prix_ttc">Prix de la console TTC :</label>
                                <input class="form-control" type="number" min="0" name="prix_ttc" value="<?php echo $consModif[4] ?>">
                                <p class="help-block">Exemple : 30</p>
                            </div>
                            
                            <div class="form-group">
                                <label for="prix_ht">Prix de la console HT :</label>
                                <input class="form-control" type="number" min="0" name="prix_ht" value="<?php echo $consModif[5] ?>">
                                <p class="help-block">Exemple : 25</p>
                            </div>
                            
                            <div class="form-group">
                                <label for="tva">Taux de TVA :</label>
                                <input class="form-control" type="number" min="0" name="tva" value="<?php echo $consModif[6] ?>">
                                <p class="help-block">Exemple : 10</p>
                            </div>
                            
                            <div class="form-group">
                                <label for="stock">Stocks de la console :</label>
                                <input class="form-control" type="number" min="0" name="stock" value="<?php echo $consModif[8] ?>">
                                <p class="help-block">Exemple : 20</p>
                            </div>
                            
                            <div class="form-group">
                                <label for="image">Modification de l'image</label>
                                <img src="../assets/images/<?php echo $consModif[9] ?>">
                                <input type="file" name="image">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Modifier</button>
                        </form>

                    </div>
                </div>
                <!-- /.row -->
                <br/>
                
               

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
