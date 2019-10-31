<?php
$action = (string) $_GET['action'];

// var_dump($_GET['action']);

switch ($action) {
  case "books":
    require('controllers/books.php');
    listBooks();
    break;
  default:
    require('views/404.php');
}