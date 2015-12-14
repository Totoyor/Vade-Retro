<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vade Rétro Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/back-office/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/back-office/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/back-office/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="?module=page&action=index">Vade Rétro Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Bonjour <?php echo $_SESSION["admin"][2]; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="?module=admin&action=logout_admin"><i class="fa fa-fw fa-power-off"></i> Déconnexion</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav scroll">
                    <li class="active">
                        <a href="?module=page&action=index"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="?module=admin&action=gestion_admins"><i class="fa fa-fw fa-table"></i> Gestion Admins</a>
                    </li>
                    <li>
                        <a href="?module=utilisateurs&action=gestion_users"><i class="fa fa-fw fa-table"></i> Gestion Users</a>
                    </li>
                    <li>
                        <a href="?module=produits&action=gestion_consoles"><i class="fa fa-fw fa-table"></i> Gestion Consoles</a>
                    </li>
                    <li>
                        <a href="?module=produits&action=gestion_jeux"><i class="fa fa-fw fa-table"></i> Gestion Jeux</a>
                    </li>
                    <li>
                        <a href="?module=commandes&action=gestion_commandes"><i class="fa fa-fw fa-table"></i> Gestion Commandes</a>
                    </li>
                    <li><a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Gestion Blog <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse"> 
                            <li>
                                <a href="?module=blog&action=gestion_articles"><i class="fa fa-fw fa-table"></i> Gestion Articles</a>
                            </li>
                            <li>
                                <a href="?module=blog&action=gestion_categories"><i class="fa fa-fw fa-table"></i> Gestion Catégories</a>
                            </li>
                            <li>
                                <a href="?module=blog&action=gestion_commentaires"><i class="fa fa-fw fa-table"></i> Gestion Comments</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="?module=page&action=newsletter"><i class="fa fa-fw fa-table"></i> Newsletter</a>
                    </li>
                    <li>
                        <a href="?module=page&action=contact"><i class="fa fa-fw fa-table"></i> Rachat/Contact</a>
                    </li>
                    <li>
                        <a href="?module=page&action=analytics"><i class="fa fa-fw fa-dashboard"></i> Analytics</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>