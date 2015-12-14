<?php include("vue/layout/header.back.inc.php"); ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Formulaire Ajout Jeux
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="?module=page&action=index">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Formulaire Ajout Jeux
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                <?php if(isset($_GET["m"])) {
                        if ($_GET["m"] == "ok" ) { ?>
                    <div class="alert alert-success">
                    <strong>Jeu Ajouté !</strong> Vous avez correctement ajouté le jeu dans la base de données.
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
                           <a href="?module=produits&action=gestion_jeux"><button type="button" class="btn btn-primary">Retour</button></a>
                        </div>
                </div>
                <br/>

                <div class="row">
                    <div class="col-lg-8">

                        <form role="form" method="post" action="?module=produits&action=ajout_jeux" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="ref">Référence du jeux :</label>
                                <input class="form-control" type="text" name="ref" required="required" autofocus>
                                <p class="help-block">Exemple : CR420</p>
                            </div>

                            <div class="form-group">
                                <label>Nom du jeux :</label>
                                <input class="form-control" type="text" name="nom" required="required">
                                <p class="help-block">Exemple : Mario, Donkey Kong, ...</p>
                            </div>
                            
                            <div class="form-group">
                                <label>Description du jeux :</label>
                                <textarea class="form-control" rows="3" name="descr" required="required"></textarea>
                                <p class="help-block">250 caractères max.</p>
                            </div>
                            
                            <div class="form-group">
                                <label>Année du jeux :</label>
                                <input class="form-control" type="number" min="1960" max="2020" name="annee" required="required">
                                <p class="help-block">Exemple : 1998</p>
                            </div>
                            
                            <div class="form-group">
                                <label>Prix du jeux TTC :</label>
                                <input class="form-control" type="number" min="0" name="prix" required="required">
                                <p class="help-block">Exemple : 30,99</p>
                            </div>
                            
                            <div class="form-group">
                                <label>Prix du jeux HT :</label>
                                <input class="form-control" type="number" min="0" name="prixht" required="required">
                                <p class="help-block">Exemple : 25,99</p>
                            </div>
                            
                            <div class="form-group">
                                <label>Taux de TVA :</label>
                                <input class="form-control" type="number" min="0" name="tva">
                                <p class="help-block">Exemple : 10</p>
                            </div>
                            
                            <div class="form-group">
                                <label>Stocks du jeux :</label>
                                <input class="form-control" type="number" min="0" name="stock" required="required">
                                <p class="help-block">Exemple : 20</p>
                            </div>
                            
                            <div class="form-group">
                                <label for="image">Ajout d'une image pour le jeux :</label>
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
                            
                            <button type="submit" class="btn btn-primary">Ajouter le jeux</button>
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
