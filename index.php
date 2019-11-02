<?php
@$action = $_GET['action'];
// var_dump($_GET['action']);

switch ($action) {
  case "books":
    require('controllers/books.php');
    listBooks();
    break;
  case "home":
    require('controllers/home.php');
    setHome();
    break;
  default:
    require('views/404.php');
}
