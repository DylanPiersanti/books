<?php
$title = "Liste des livres";
ob_start();
?>

<?php
foreach ($books as $book) {
  
}
?>

<?php

?>


<?php
$content = ob_get_clean();
require('public/index.php');
?>