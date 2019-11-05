<?php

if (!isset($_GET['action'])) {
  require('controllers/home.php');
  setHome();
} else {
  @$action = (string) $_GET['action'];

  switch ($action) {
    case "books":
      require_once('controllers/books.php');
      $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
      listBooks($page);
      break;
    case "book":
      if (isset($_GET['id'])) {
        require_once('controllers/books.php');
        showBook($_GET['id']);
      }
      break;
    default:
      require('views/404.php');
  }
}
