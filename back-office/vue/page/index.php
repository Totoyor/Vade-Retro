<?php include("vue/layout/header.back.inc.php"); ?>
<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Vue générale</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"> </div>
                                        <div>Nouveaux Utilisateurs</div>
                                    </div>
                                </div>
                            </div>
                            <a href="?module=utilisateurs&action=gestion_users">
                                <div class="panel-footer">
                                    <span class="pull-left">Voir les utilisateurs</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"> </div>
                                        <div>Nouveaux Commentaires</div>
                                    </div>
                                </div>
                            </div>
                            <a href="?module=blog&action=gestion_commentaires">
                                <div class="panel-footer">
                                    <span class="pull-left">Voir les commentaires</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"> </div>
                                        <div>Nouvelles Commandes</div>
                                    </div>
                                </div>
                            </div>
                            <a href="?module=commandes&action=gestion_commandes">
                                <div class="panel-footer">
                                    <span class="pull-left">Voir les commandes</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Gestion des utilisateurs</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Civilité</th>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                <?php foreach($retour as $user) { ?>
                                            <tr>
                                                <td><?php echo $user[0]; ?></td>
                                                <td><?php echo $user[1]; ?></td>
                                                <td><?php echo $user[2]; ?></td>
                                                <td><?php echo $user[3]; ?></td>
                                            </tr>
                                <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="?module=utilisateurs&action=gestion_users">Voir tous les utilisateurs <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Gestion des commentaires</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>User</th>
                                                <th>Commentaire</th>
                                                <th>Article</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php foreach($retour_com as $comm) { ?>
                                            <tr>
                                                <td><?php echo $comm[0]; ?></td>
                                                <td><?php echo $comm[4]; ?></td>
                                                <td><?php echo $comm[1]; ?></td>
                                                <td><?php echo $comm[5]; ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="#">Voir tous les commentaires <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Gestion des Commandes</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Réf</th>
                                                <th>Montant</th>
                                                <th>Quantité</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php foreach($retour_buy as $commande) { ?>
                                            <tr>
                                                <td><?php echo $commande[0] ?></td>
                                                <td><?php echo $commande[1] ?></td>
                                                <td><?php echo $commande[2] ?> €</td>
                                                <td><?php echo $commande[3] ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="?module=commandes&action=gestion_commandes">Voir toutes les commandes <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
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