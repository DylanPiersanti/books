<?php
require('models/books.php');

function listBooks($page)
{
  global $perPage;
  $totalBooks = countBooks();
  $maxPages = ceil($totalBooks / $perPage);
  if ($page > $maxPages) {
    $page = 0;
  }
  $start = ($page - 1) * $perPage;
  $books = getbooks((string) $start);
  require('views/books.php');
}



function showBook($id)
{
  $book = getBook($id);
  $booksAuthor = selectAuthors($book['author_id']);
  require('views/currentBook.php');
}
?>