<?php
require('models/home.php');

function setHome()
{
  $books = getbooks();
  require('views/home.php');
}
?>