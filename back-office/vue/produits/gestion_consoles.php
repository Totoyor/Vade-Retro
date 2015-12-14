<?php include("vue/layout/header.back.inc.php"); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Gestion des Consoles
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="?module=page&action=index">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Consoles
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                
                <div class="row">
                       <div class="col-lg-12">
                           <a href="?module=produits&action=ajout_console"><button type="button" class="btn btn-primary">Ajouter une console</button></a>
                        </div>
                </div>
                <br/>
                <?php if(isset($_GET["del"])) {
                        if ($_GET["del"] == "ok" ) { ?>
                    <div class="alert alert-success">
                    <strong>Console supprimé !</strong> Vous avez correctement supprimé la console dans la base de données.
                </div>     
                  <?php } 
                        elseif ($_GET["del"] == "nok") { ?>
                        <div class="alert alert-danger">
                    <strong>Erreur !</strong> La suppresion dans la base de donnée n'a pas pu être validée.
                </div>
                        <?php } } ?>
                
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Consoles :</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Réf</th>
                                        <th>Nom</th>
                                        <th>Description</th>
                                        <th>Prix TTC</th>
                                        <th>Prix HT</th>
                                        <th>TVA</th>
                                        <th>Année</th>
                                        <th>Stock</th>
                                        <th>Image</th>
                                        <th>Date</th>
                                        <th>Modfier</th>
                                        <th>Supprimer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($retour_cons as $console) { ?>
                                    <tr>
                                        <td><?php echo $console[0]; ?></td>
                                        <td><?php echo $console[1]; ?></td>
                                        <td><?php echo $console[2]; ?></td>
                                        <td><?php echo $console[3]; ?></td>
                                        <td><?php echo $console[4]; ?></td>
                                        <td><?php echo $console[5]; ?></td>
                                        <td><?php echo $console[6]; ?></td>
                                        <td><?php echo $console[7]; ?></td>
                                        <td><?php echo $console[8]; ?></td>
                                        <td><img class="image_back" src=../assets/images/<?php echo $console[9]; ?>></td>
                                        <td><?php echo $console[10]; ?></td>
                                        <td><a href="?module=produits&action=modif_console&id=<?php echo $console[0]; ?>">Modifier</a></td>
                                        <td><a onclick="confirm('Vous allez supprimer cette console, êtes-vous sûr ?');" href="?module=produits&action=gestion_consoles&id=<?php echo $console[0]; ?>">Supprimer</a></td>
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