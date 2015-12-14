<?php include("vue/layout/header.back.inc.php"); ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Gestion des Admins
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="?module=page&action=index">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Admins
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                
                <div class="row">
                       <div class="col-lg-12">
                           <a href="?module=admin&action=ajout_admin"><button type="button" class="btn btn-primary">Ajouter un Admin</button></a>
                        </div>
                </div>
                <br/>
                <?php if(isset($_GET["del"])) {
                        if ($_GET["del"] == "ok" ) { ?>
                    <div class="alert alert-success">
                    <strong>Utilisateur supprimé !</strong> Vous avez correctement supprimé l'utilisateur dans la base de données.
                </div>     
                  <?php } 
                        elseif ($_GET["del"] == "nok") { ?>
                        <div class="alert alert-danger">
                    <strong>Erreur !</strong> La suppresion dans la base de donnée n'a pas pu être validé.
                </div>
                        <?php } } ?>

                <div class="row">
                    <div class="col-lg-12">
                        <h2>Utilisateurs inscrits</h2>
                     <?php   //var_dump($retour); ?>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Mail</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                           <?php foreach($retour_admin as $admin) { ?>
                                    <tr>
                                        <td><?php echo $admin[0]; ?></td>
                                        <td><?php echo $admin[1]; ?></td>
                                        <td><?php echo $admin[2]; ?></td>
                                        <td><?php echo $admin[3]; ?></td>
                                        <td><?php echo $admin[5]; ?></td>
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