<?php include("vue/layout/header.back.inc.php"); ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                       <?php //var_dump($_POST); ?>
                        <h1 class="page-header">
                            Formulaire Ajout Admin
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="?module=page&action=index">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Formulaire Ajout Admin
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                
                <div class="row">
                       <div class="col-lg-12">
                           <a href="?module=admin&action=gestion_admins"><button type="button" class="btn btn-primary">Retour</button></a>
                        </div>
                </div>
                <br/>
                <?php if(isset($_GET["m"])) {
                        if ($_GET["m"] == "ok" ) { ?>
                    <div class="alert alert-success">
                    <strong>Admin Ajouté !</strong> Vous avez correctement ajouté l'admin dans la base de données.
                </div>     
                  <?php } 
                        elseif ($_GET["m"] == "nok") { ?>
                        <div class="alert alert-danger">
                    <strong>Erreur !</strong> L'ajout dans la base de donnée n'a pas pu être validé.
                </div>
                        <?php } } ?>
                
                <div class="row">
                    <div class="col-lg-8">

                        <form role="form" action="?module=admin&action=ajout_admin" method="post">
                            <h3>Informations générales :</h3>

                            <div class="form-group">
                                <label for="nom">Nom :</label>
                                <input type="text" class="form-control" name="nom" required="required" maxlength="45">
                            </div>
                            
                            <div class="form-group">
                                <label for="prenom">Prénom :</label>
                                <input type="text" class="form-control" name="prenom" required="required" maxlength="45">
                            </div>
                            
                            <div class="form-group">
                                <label for="mail">Mail :</label>
                                <input type="email" class="form-control" name="mail" required="required" maxlength="50">
                            </div>
                            
                            <div class="form-group">
                                <label for="mdp">Mot de passe :</label>
                                <input type="password" class="form-control" name="mdp" maxlength="50" required="required">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Ajouter l'admin</button>
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