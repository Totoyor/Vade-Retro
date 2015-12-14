<?php include("vue/layout/header.back.inc.php"); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Gestion des Articles - Blog
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="?module=page&action=index">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Articles - Blog
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                
                <div class="row">
                       <div class="col-lg-12">
                           <a href="?module=blog&action=ajout_article"><button type="button" class="btn btn-primary">Ajouter un article</button></a>
                        </div>
                </div>
                <br/>
                <?php if(isset($_GET["del"])) {
                        if ($_GET["del"] == "ok" ) { ?>
                    <div class="alert alert-success">
                    <strong>Article supprimé !</strong> Vous avez correctement supprimé l'article dans la base de données.
                </div>     
                  <?php } 
                        elseif ($_GET["del"] == "nok") { ?>
                        <div class="alert alert-danger">
                    <strong>Erreur !</strong> La suppresion dans la base de donnée n'a pas pu être validée.
                </div>
                        <?php } } ?>


                <div class="row">
                    <div class="col-lg-12">
                        <h2>Articles :</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Titre</th>
                                        <th>Auteur</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Date</th>
                                        <th>Modifier</th>
                                        <th>Supprimer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php foreach($retour_art as $article) { ?>
                                    <tr>
                                        <td><?php echo $article[0]; ?></td>
                                        <td><?php echo $article[1]; ?></td>
                                        <td><?php echo $article[2]; ?></td>
                                        <td><?php echo $article[3]; ?></td>
                                        <td><img class="image_back" src="../assets/images/<?php echo $article[4]; ?>"></td>
                                        <td><?php echo $article[5]; ?></td>
                                        <td><a href="?module=blog&action=modif_article&id=<?php echo $article[0]; ?>">Modifier</a></td>
                                        <td><a onclick="confirm('Vous allez supprimer cette article, êtes-vous sûr ?');" href="?module=blog&action=gestion_articles&id=<?php echo $article[0]; ?>">Supprimer</a></td>
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