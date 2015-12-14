<?php include("vue/layout/header.back.inc.php"); ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Formulaire Ajout Console
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="?module=page&action=index">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Formulaire Ajout Console
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                
                <div class="row">
                <?php if(isset($_GET["m"])) {
                        if ($_GET["m"] == "ok" ) { ?>
                    <div class="alert alert-success">
                    <strong>Console Ajoutée !</strong> Vous avez correctement ajouté la console dans la base de données.
                </div>     
                  <?php } 
                        elseif ($_GET["m"] == "nok") { ?>
                        <div class="alert alert-danger">
                    <strong>Erreur !</strong> L'ajout dans la base de donnée n'a pas pu être validé.
                </div>
                        <?php } } ?>
                </div>
                <div class="row">
                <div class="col-lg-12">
                           <a href="?module=produits&action=gestion_consoles"><button type="button" class="btn btn-primary">Retour</button></a>
                        </div>
                </div>
                <br/>
                
                <div class="row">
                    <div class="col-lg-8">

                        <form role="form" action="?module=produits&action=ajout_console" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="ref">Référence de la console :</label>
                                <input class="form-control" type="text" required="required" name="ref">
                                <p class="help-block">Exemple : CR420</p>
                            </div>

                            <div class="form-group">
                                <label for="nom">Nom de la console :</label>
                                <input class="form-control" type="text" name="nom" required="required">
                                <p class="help-block">Exemple : NES, Nintendo 64, ...</p>
                            </div>
                            
                            <div class="form-group">
                                <label for="descr">Description de la console :</label>
                                <textarea class="form-control" rows="3" name="descr" required="required"></textarea>
                                <p class="help-block">250 caractères max.</p>
                            </div>
                            
                            <div class="form-group">
                                <label for="annee">Année de la console :</label>
                                <input class="form-control" type="number" min="1960" max="2020" name="annee" required="required">
                                <p class="help-block">Exemple : 1998</p>
                            </div>
                            
                            <div class="form-group">
                                <label for="prix">Prix de la console TTC :</label>
                                <input class="form-control" type="number" name="prix" required="required" min="0">
                                <p class="help-block">Exemple : 30</p>
                            </div>
                            
                            <div class="form-group">
                                <label>Prix de la console HT :</label>
                                <input class="form-control" type="number" name="prixht" required="required" min="0">
                                <p class="help-block">Exemple : 25</p>
                            </div>
                            
                            <div class="form-group">
                                <label>Taux de TVA :</label>
                                <input class="form-control" type="number" name="tva" required="required" min="0">
                                <p class="help-block">Exemple : 10</p>
                            </div>
                            
                            <div class="form-group">
                                <label>Stocks de la console :</label>
                                <input class="form-control" type="number" name="stock" required="required" min="0">
                                <p class="help-block">Exemple : 20</p>
                            </div>
                            
                            <div class="form-group">
                                <label for="image">Ajout d'une image pour la console :</label>
                                <input type="file" name="image">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Ajouter la console</button>
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
