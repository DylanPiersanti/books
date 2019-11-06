<?php
$title = "Liste des livres";
ob_start();
?>

<div class="container">
  <div class="row">
    <?php
    foreach ($books as $book) {
      ?>

      <div class="col-sm-3 mt-5">
        <div class="card">
          <img src="<?php echo $book['image'] ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $book['title'] ?></h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="?action=book&id=<?php echo $book['id'] ?>" class="btn btn-primary discoverButton">Découvrir</a>
          </div>
        </div>
      </div>

    <?php
    }

    ?>

  </div>

  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center mt-5">
      <?php
      for ($i = 1; $i <= $maxPages; $i++) {
        if ($i == $page) {
          echo "<li class='page-item disabled'><a class='page-link' href='#'>" . $i . "</a></li>";
        } else {
          echo "<li class='page-item'><a class='page-link' href='?action=books&page=" . $i . "'>" . $i . "</a></li>";
        }
      }
      ?>
    </ul>
  </nav>



</div>

<?php
$content = ob_get_clean();
require('public/index.php');
?>