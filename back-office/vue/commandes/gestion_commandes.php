<?php include("vue/layout/header.back.inc.php"); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Gestion des Commandes
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="?module=page&action=index">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Commandes
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <?php if(isset($_GET["del"])) {
                        if ($_GET["del"] == "ok" ) { ?>
                    <div class="alert alert-success">
                    <strong>Commande supprimé !</strong> Vous avez correctement supprimé la commande dans la base de données.
                </div>     
                  <?php } 
                        elseif ($_GET["del"] == "nok") { ?>
                        <div class="alert alert-danger">
                    <strong>Erreur !</strong> La suppresion dans la base de donnée n'a pas pu être validé.
                </div>
                        <?php } } ?>

                <div class="row">
                    <div class="col-lg-12">
                        <h2>Commandes :</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Réf</th>
                                        <th>Montant</th>
                                        <th>Quantité</th>
                                        <th>Date</th>
                                        <th>User</th>
                                        <th>Console</th>
                                        <th>Jeux</th>
                                        <th>Modifier</th>
                                        <th>Supprimer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php foreach($retour_buy as $commande) { ?>
                                    <tr>
                                        <td><?php echo $commande[0]; ?></td>
                                        <td><?php echo $commande[1]; ?></td>
                                        <td><?php echo $commande[2]; ?></td>
                                        <td><?php echo $commande[3]; ?></td>
                                        <td><?php echo $commande[5]; ?></td>
                                        <td><?php echo $commande[7]; ?></td>
                                        <td><?php echo $commande[8]; ?></td>
                                        <td></td>
                                        <td><a href="?module=commandes&action=modif_commande&id=<?php echo $commande[0]; ?>">Modifier</a></td>
                                        <td><a href="?module=commandes&action=gestion_commandes&suppr=<?php echo $commande[0]; ?>">Supprimer</a></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
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