<?php include("vue/layout/header.back.inc.php"); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                       <h1 class="page-header">
                            Rachat/Contact
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="?module=page&action=index">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Rachat/Contact
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <h2>Formulaire de rachat</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Adresse</th>
                                        <th>Ville</th>
                                        <th>Code P</th>
                                        <th>Tél</th>
                                        <th>Objet</th>
                                        <th>Message</th>
                                        <th>Etat</th>
                                        <th>Image</th>
                                        <th>Date</th>
                                        <th>Répondre</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php foreach($retour_rachat as $rachat) { ?>
                                    <tr>
                                        <td><?php echo $rachat[0]; ?></td>
                                        <td><?php echo $rachat[1]; ?></td>
                                        <td><?php echo $rachat[2]; ?></td>
                                        <td><?php echo $rachat[3]; ?></td>
                                        <td><?php echo $rachat[4]; ?></td>
                                        <td><?php echo $rachat[5]; ?></td>
                                        <td><?php echo $rachat[6]; ?></td>
                                        <td><?php echo $rachat[7]; ?></td>
                                        <td><?php echo $rachat[8]; ?></td>
                                        <td><?php echo $rachat[9]; ?></td>
                                        <td><?php echo $rachat[10]; ?></td>
                                        <td><?php echo $rachat[0]; ?></td>
                                        <td></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Formulaire de contact</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Mail</th>
                                        <th>Objet</th>
                                        <th>Message</th>
                                        <th>Date</th>
                                        <th>Répondre</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php foreach($retour_contact as $contact) { ?>
                                    <tr>
                                        <td><?php echo $contact[0]; ?></td>
                                        <td><?php echo $contact[1]; ?></td>
                                        <td><?php echo $contact[2]; ?></td>
                                        <td><?php echo $contact[3]; ?></td>
                                        <td><?php echo $contact[4]; ?></td>
                                        <td><?php echo $contact[5]; ?></td>
                                        <td><?php echo $contact[6]; ?></td>
                                        <td><?php echo $contact[0]; ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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