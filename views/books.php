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
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
      </li>
      <li class="page-item"><a class="page-link active" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#">Next</a>
      </li>
    </ul>
  </nav>


</div>

<?php
$content = ob_get_clean();
require('public/index.php');
?>