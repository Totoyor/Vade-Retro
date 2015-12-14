<?php include("vue/layout/header.back.inc.php"); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Gestion des Users
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="?module=page&action=index">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Users
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                
                <div class="row">
                       <div class="col-lg-12">
                           <a href="?module=utilisateurs&action=ajout_user"><button type="button" class="btn btn-primary">Ajouter un utilisateur</button></a>
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
                                        <th>Civilité</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Mail</th>
                                       <!-- <th>Password</th> -->
                                        <th>Adresse</th>
                                        <th>Ville</th>
                                        <th>Code Postal</th>
                                        <th>Pays</th>
                                        <th>Tél</th>
                                        <th>Adresse Livraison</th>
                                        <th>Ville Livraison</th>
                                        <th>Code Postal Livraison</th>
                                        <th>Pays Livraison</th>
                                        <th>Date</th>
                                        <th>Modifier</th>
                                        <th>Supprimer</th>
                                    </tr>
                                </thead>
                                <tbody>
                           <?php foreach($retour as $user) { ?>
                                    <tr>
                                        <td><?php echo $user[0]; ?></td>
                                        <td><?php echo $user[1]; ?></td>
                                        <td><?php echo $user[2]; ?></td>
                                        <td><?php echo $user[3]; ?></td>
                                        <td><?php echo $user[4]; ?></td>
                                    <!---    <td><?php echo $user[5]; ?></td> --->
                                        <td><?php echo $user[6]; ?></td>
                                        <td><?php echo $user[7]; ?></td>
                                        <td><?php echo $user[8]; ?></td>
                                        <td><?php echo $user[9]; ?></td>
                                        <td><?php echo $user[10]; ?></td>
                                        <td><?php echo $user[11]; ?></td>
                                        <td><?php echo $user[12]; ?></td>
                                        <td><?php echo $user[13]; ?></td>
                                        <td><?php echo $user[14]; ?></td>
                                        <td><?php echo $user[16]; ?></td>
                                        <td><a href="?module=utilisateurs&action=modif_user&id=<?php echo $user[0]; ?>">Modifier</a></td>
                                        <td><a onclick="confirm('Vous allez supprimer cet utilisateur, êtes-vous sûr ?');" href="?module=utilisateurs&action=gestion_users&id=<?php echo $user[0]; ?>">Supprimer</a></td>
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