<?php
require('models/books.php');

function listBooks()
{
  global $perPage;
  $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
  $sort = isset($_GET['sort']) ? $_GET['sort'] : 'author';

  $totalBooks = countBooks();
  $maxPages = ceil($totalBooks / $perPage);
  if ($page > $maxPages) {
    $page = 0;
  }
  $start = ($page - 1) * $perPage;
  $books = getbooks((string) $start, $sort);
  require('views/books.php');
}



function showBook($id)
{
  $book = getBook($id);
  $booksAuthor = selectAuthors($book['author_id']);
  require('views/currentBook.php');
}
?>