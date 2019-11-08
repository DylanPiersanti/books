<?php
require_once('../utils/db.php');
require('../utils/adminReq.php');
?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin</title>

  <link rel="stylesheet" href="../public/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../public/assets/style/css/admin.css">
  <link rel="stylesheet" href="../public/assets/style/css/all.min.css">

</head>

<body>


  <div class="container">
    <div class="jumbotron">
      <form class="text-center p-5" action="./" method="post">

        <div class="form-row mb-4">
          <div class="col-md-7">
            <!-- Book title -->
            <input value="<?php echo isset($bookResult) ? $bookResult['title'] : ''; ?>" name="title" type="text" id="title" class="form-control" placeholder="Titre du livre">
          </div>
          <div class="col">
            <!-- Book author -->

            <select name="author_id" class="browser-default custom-select">
              <option selected>Définir un auteur</option>
              <?php
              foreach ($authors as $author) {
                $authorList = '(' . $author['id'] . ') ' . $author['name'];
                ?>
                <?php if (isset($bookResult) && $bookResult['author_id'] == $author['id']) { ?>
                  <option selected="selected" value="<?php echo $author['id']; ?>">
                    <?php echo $author['name']; ?>
                  </option>
                <?php } else { ?>
                  <option value="<?php echo $author['id']; ?>">
                    <?php echo $author['name']; ?>
                  </option>
                <?php } ?>
                <option value="<?php echo $author['id'] ?>">
                  <?php echo $authorList ?>
                </option>
              <?php
              }
              ?>
            </select>


          </div>
        </div>

        <div class="form-row mb-4">
          <div class="col">
            <!-- book country -->
            <input value="<?php echo isset($bookResult) ? $bookResult['country'] : ''; ?>" name="country" type="text" id="country" class="form-control" placeholder="Origine du livre" aria-describedby="defaultRegisterFormPhoneHelpBlock">
          </div>
          <div class="col">
            <!-- book language-->
            <input value="<?php echo isset($bookResult) ? $bookResult['language'] : ''; ?>" name="language" type="text" id="language" class="form-control" placeholder="langue du livre" aria-describedby="defaultRegisterFormPhoneHelpBlock">
          </div>
        </div>

        <div class="form-row mb-4">
          <div class="col-md-7">
            <!-- book wikipedia link -->
            <input value="<?php echo isset($bookResult) ? $bookResult['wikipedia_link'] : ''; ?>"type="text" name="wikiLink" id="wikipedia_link" class="form-control" placeholder="Lien de la page wikipedia" aria-describedby="defaultRegisterFormPhoneHelpBlock">
          </div>
          <div class="col">
            <!-- book year -->
            <input value="<?php echo isset($bookResult) ? $bookResult['year'] : ''; ?>" type="number" min="0" name="bookYear" id="bookYear" class="form-control" placeholder="Année de parution" aria-describedby="defaultRegisterFormPhoneHelpBlock">
          </div>
          <div class="col">
            <!-- page numbers -->
            <input value="<?php echo isset($bookResult) ? $bookResult['pages'] : ''; ?>" type="number" min="0" id="pages" name="pagesCount" class="form-control mb-4" placeholder="Nombre de pages">
          </div>
        </div>

        <!-- book description -->
        <div class="form-group green-border-focus">
          <textarea class="form-control" id="description" name="bookDesc" placeholder="Description du livre" rows="3">
          <?php echo isset($bookResult) ? $bookResult['description'] : ''; ?>
          </textarea>
        </div>

        <div class="col">
          <!-- book image -->

        </div>

        <!-- Submit button -->
        <button name="submit" class="btn btn-info my-4 btn-block" type="submit">Confirmer</button>

      </form>
    </div>
  </div>

  <script src="../public/assets/jquery/jquery.min.js"></script>
  <script src="../public/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>