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
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <h1 class="text-center">Admin Vade Rétro</h1>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block" method="post" action="?module=admin&action=login_admin">
            <div class="form-group">
              <input type="text" class="form-control input-lg" placeholder="Email" name="email" maxlength="50" required="required">
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg" placeholder="Mot de passe" name="mdp" maxlength="32" required="required">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block" type="submit">Connexion</button>
            </div>
          </form>
      </div>

      <div class="modal-footer">
          <div class="col-md-12">
          <button class="btn" data-dismiss="modal" aria-hidden="true"><a href="../?">Retour</a></button>
		  </div>	
      </div>
  </div>
  </div>
</div> 
</body>
</html>