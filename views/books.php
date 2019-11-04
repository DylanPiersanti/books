<?php
$title = "Liste des livres";
ob_start();
?>

<?php
foreach ($books as $book) {
  
}
?>

<?php
  $countBooks = count($books);
  $nbBooks = 10;
  $currentPage = 1;

  

  var_dump($countBooks);
?>


<?php
$content = ob_get_clean();
require('public/index.php');
?>