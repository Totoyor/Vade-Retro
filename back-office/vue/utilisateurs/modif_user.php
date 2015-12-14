<?php include("vue/layout/header.back.inc.php"); ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Formulaire Modification User
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="?module=page&action=index">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Formulaire Modification User
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                
                <div class="row">
                <?php if(isset($_GET["modif"])) {
                        if ($_GET["modif"] === "ok" ) { ?>
                    <div class="alert alert-success">
                    <strong>Utilisateur modifié !</strong> Vous avez correctement modifié l'utilisateur dans la base de données.
                    </div>     
                  <?php } } ?>
                </div>
                <div class="row">
                <div class="col-lg-12">
                           <a href="?module=utilisateurs&action=gestion_users"><button type="button" class="btn btn-primary">Retour</button></a>
                        </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-lg-8">

                        <form role="form" action="?module=utilisateurs&action=modif_user&id=<?php echo $userModif[0]; ?>&id_modif=<?php echo $userModif[0]; ?>&modif=ok" method="post">
                            <h3>Informations générales :</h3>

                            <div class="form-group">
                                <label for="civilite">Civilité :</label>
                                <select class="form-control" name="civilite">
                                    <option>Mr.</option>
                                    <option>Mme.</option>
                                    <option>Mlle.</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="nom">Nom :</label>
                                <input type="text" class="form-control" name="nom" required="required" value="<?php echo $userModif[2]; ?>" maxlength="45">
                            </div>
                            
                            <div class="form-group">
                                <label for="prenom">Prénom :</label>
                                <input type="text" class="form-control" name="prenom" required="required" value="<?php echo $userModif[3]; ?>" maxlength="45">
                            </div>
                            
                            <div class="form-group">
                                <label for="mail">Mail :</label>
                                <input typ="email" class="form-control" name="mail" required="required" value="<?php echo $userModif[4]; ?>" maxlength="50">
                            </div>
                            <!---
                            <div class="form-group">
                                <label for="mdp">Mot de passe :</label>
                                <input type="password" class="form-control" name="mdp" value="" required="required" maxlength="32">
                            </div>
                            --->
                            <div class="form-group">
                                <label for="adresse">Adresse :</label>
                                <input type="text" class="form-control" name="adresse" value="<?php echo $userModif[6]; ?>" maxlength="50">
                            </div>
                            
                            <div class="form-group">
                                <label for="ville">Ville :</label>
                                <input type="text" class="form-control" name="ville" value="<?php echo $userModif[7]; ?>" maxlength="50">
                            </div>

                            <div class="form-group">
                                <label for="cp">Code postal :</label>
                                <input type="number" class="form-control" name="cp" value="<?php echo $userModif[8]; ?>" min="10000" max="99999">
                            </div>
                            
                            <div class="form-group">
                                <label for="pays">Pays :</label>
                                <input type="text" class="form-control" name="pays" value="<?php echo $userModif[9]; ?>" maxlength="45">
                            </div>
                            
                            <div class="form-group">
                                <label for="tel">Tél :</label>
                                <input type="tel" class="form-control" name="tel" value="<?php echo $userModif[10]; ?>" maxlength="10">
                            </div>
                            
                            <h3>Informations Livraison :</h3>
                            <div class="form-group">
                                <label for="adresse_liv">Adresse de livraison :</label>
                                <input type="text" class="form-control" name="adresse_liv" value="<?php echo $userModif[11]; ?>" maxlength="50">
                            </div>
                            
                            <div class="form-group">
                                <label for="ville_liv">Ville de livraison :</label>
                                <input type="text" class="form-control" name="ville_liv" value="<?php echo $userModif[12]; ?>" maxlength="50">
                            </div>

                            <div class="form-group">
                                <label for="cp_liv">Code postal de livraison :</label>
                                <input type="number" class="form-control" name="cp_liv" value="<?php echo $userModif[13]; ?>" min="10000" max="99999">
                            </div>
                            
                            <div class="form-group">
                                <label for="pays_liv">Pays de livraison :</label>
                                <input type="text" class="form-control" name="pays_liv" value="<?php echo $userModif[14]; ?>" maxlength="45">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Modifier l'utilisateur</button>
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
