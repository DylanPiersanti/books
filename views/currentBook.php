<?php
$title = $book['title'];
ob_start();
?>

<?php echo $book['title'] ?>

<?php
$content = ob_get_clean();
require('public/index.php');
?>