<?php include("vue/layout/header.back.inc.php"); ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Formulaire Modification Commande
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="?module=page&action=index">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Formulaire Modification Commande
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                
                <div class="row">
                <?php if(isset($_GET["modif"])) {
                        if ($_GET["modif"] === "ok" ) { ?>
                    <div class="alert alert-success">
                    <strong>Commande modifié !</strong> Vous avez correctement modifié la commande dans la base de données.
                    </div>     
                  <?php } } ?>
                </div>
                <div class="row">
                <div class="col-lg-12">
                           <a href="?module=commandes&action=gestion_commandes"><button type="button" class="btn btn-primary">Retour</button></a>
                        </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-lg-8">

                        <form role="form" action="?module=commandes&action=modif_commande&id=<?php echo $commandeAff[0]; ?>&id_modif=<?php echo $commandeAff[0]; ?>&modif=ok" method="post">
                            <h3>Informations générales :</h3>

                            <div class="form-group">
                                <label for="ref">Réf :</label>
                                <input type="text" class="form-control" name="ref" required="required" value="<?php echo $commandeAff[1]; ?>" maxlength="5">
                            </div>
                            
                            <div class="form-group">
                                <label for="montant">Montant :</label>
                                <input type="number" class="form-control" name="montant" value="<?php echo $commandeAff[2]; ?>" min="1">
                            </div>
                            
                            <div class="form-group">
                                <label for="qt">Quantité :</label>
                                <input type="number" class="form-control" name="qt" value="<?php echo $commandeAff[3]; ?>" min="1">
                            </div>

                            
                            <button type="submit" class="btn btn-primary">Modifier la commande</button>
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
