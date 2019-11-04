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
  $perPage = 10;
  $currentPage = 1;

  $gfr = $perPage * ($currentPage - 1);

  $nbPages = ceil($countBooks/$perPage);


  var_dump($nbPages);


?>


<?php
$content = ob_get_clean();
require('public/index.php');
?>