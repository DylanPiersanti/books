<?php
$title = "Accueil";
ob_start();
?>


<h1>Home page</h1>




<?php
$content = ob_get_clean();
require('public/index.php');
?>