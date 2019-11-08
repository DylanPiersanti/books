<?php
require_once('../utils/db.php');
require_once('../utils/session.php');

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Session</title>
  <link rel="stylesheet" href="../public/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../public/assets/style/css/admin.css">
  <link rel="stylesheet" href="../public/assets/style/css/all.min.css">

</head>

<body>

  <div class="container loginContainer">

    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">ESPACE <br/> ADMINISTRATION</h5>
            <br />
            <form class="form-signin" action="./" method="post">
              <div class="form-label-group">
                <input require name="login" type="email" id="login" class="form-control" placeholder="Adresse email" required autofocus>
              </div>
              <br />
              <div class="form-label-group">
                <input require name="password" type="password" id="password" class="form-control" placeholder="Mot de passe" required>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <br />
                <label class="custom-control-label" for="customCheck1">Se souvenir de moi !</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Connexion</button>
              <hr class="my-4">
              <button class="btn btn-lg btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Connexion Google</button>
              <button class="btn btn-lg btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> connexion Facebook</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>




  <script src="../public/assets/jquery/jquery.min.js"></script>
  <script src="../public/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>