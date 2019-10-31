
<?php 
  $title = "Liste des livres";
  ob_start(); 
?>

<h1>Liste des livres</h1>

<ul>
  <?php
    foreach ($books as $book) {
      ?>
        <li><?php echo $book['title']; ?></li>
      <?php
    }
  ?>
</ul>

<pre>
  <?php var_dump($books); ?>
</pre>

<?php
  $content = ob_get_clean();
  require('public/index.php');
?>