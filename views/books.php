
<?php 
  $title = "Liste des livres";
  ob_start(); 
?>

<ul>
  <?php
    foreach ($books as $book) {
      ?>
        <li><?php echo $book['title']; ?></li>
      <?php
    }
  ?>
</ul>

  <h1>Page books</h1>


<?php
  $content = ob_get_clean();
  require('public/index.php');
?>