<?php
$title = $book['title'];
ob_start();
?>

<?php echo $book['title'] ?>
<img src="<?php echo $book['image'] ?>" />

<?php
$content = ob_get_clean();
require('public/index.php');
?>