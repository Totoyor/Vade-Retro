<?php include("vue/layout/header.back.inc.php"); ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Formulaire Modification Article
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="?module=page&action=index">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Formulaire Modification Article
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                
                <div class="row">
                <div class="col-lg-12">
                           <a href="?module=blog&action=gestion_articles"><button type="button" class="btn btn-primary">Retour</button></a>
                        </div>
                </div>
                <br/>
                <?php if(isset($_GET["m"])) {
                        if ($_GET["m"] == "ok" ) { ?>
                    <div class="alert alert-success">
                    <strong>Article Modifié !</strong> Vous avez correctement modifié l'article dans la base de données.
                </div>     
                  <?php } 
                        elseif ($_GET["m"] == "nok") { ?>
                        <div class="alert alert-danger">
                    <strong>Erreur !</strong> L'ajout dans la base de donnée n'a pas pu être validé.
                </div>
                        <?php } } ?>

                <div class="row">
                    <div class="col-lg-8">

                        <form role="form" action="?module=blog&action=modif_article&id=<?php echo $artModif[0] ?>&modif=<?php echo $artModif[0] ?>" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="nom">Titre de l'article :</label>
                                <input class="form-control" required="required" name="nom" value="<?php echo $artModif[1] ?>">
                                <p class="help-block">Exemple : "Nouvelle console"</p>
                            </div>
                            
                            <div class="form-group">
                                <label for="auteur">Auteur de l'article :</label>
                                <input class="form-control" required="required" name="auteur" value="<?php echo $artModif[2] ?>">
                            </div>
                            
                            <div class="form-group">
                                <label for="descr">Description de l'article :</label>
                                <textarea class="form-control" rows="3" name="descr" required="required"><?php echo $artModif[3] ?></textarea>
                                <p class="help-block">1000 caractères max.</p>
                            </div>
                            
                            <div class="form-group">
                                <label for="image">Modifier une image pour l'article</label>
                                <input type="file" name="image">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Modifier l'article</button>
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
