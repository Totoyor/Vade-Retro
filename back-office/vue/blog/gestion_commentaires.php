<?php include("vue/layout/header.back.inc.php"); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Gestion des Commentaires - Blog
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="?module=page&action=index">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Commentaires - Blog
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                
                <br/>
                <?php if(isset($_GET["del"])) {
                        if ($_GET["del"] == "ok" ) { ?>
                    <div class="alert alert-success">
                    <strong>Commentaire supprimé !</strong> Vous avez correctement supprimé le commentaire dans la base de données.
                </div>     
                  <?php } 
                        elseif ($_GET["del"] == "nok") { ?>
                        <div class="alert alert-danger">
                    <strong>Erreur !</strong> La suppresion dans la base de donnée n'a pas pu être validée.
                </div>
                        <?php } } ?>


                <div class="row">
                    <div class="col-lg-12">
                        <h2>Commentaires :</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Commentaire</th>
                                        <th>ID User</th>
                                        <th>ID Article</th>
                                        <th>Date</th>
                                        <th>Supprimer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php foreach($retour_com as $commentaire) { ?>
                                    <tr>
                                        <td><?php echo $commentaire[0]; ?></td>
                                        <td><?php echo $commentaire[1]; ?></td>
                                        <td><?php echo $commentaire[3]; ?></td>
                                        <td><?php echo $commentaire[4]; ?></td>
                                        <td><?php echo $commentaire[2]; ?></td>
                                        <td><a onclick="confirm('Vous allez supprimer cette catégorie, êtes-vous sûr ?');" href="?module=blog&action=gestion_commentaires&id=<?php echo $commentaire[0]; ?>">Supprimer</a></td>
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