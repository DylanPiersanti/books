<?php

$db = dbConnect();

$stmt = $db->prepare('SELECT * FROM authors');
$stmt->execute();

$authors = $stmt->fetchAll(PDO::FETCH_ASSOC);

$id = isset($_GET['id']) ? (int) $_GET['id'] : null;


if (isset($_POST['submit'])) {


  $id = isset($_POST['id']) ? (int) $_POST['id'] : null;
  $title = (string) $_POST['title'];
  $authorId = (int) $_POST['author_id'];
  $description = trim((string) $_POST['bookDesc']);
  $pages = (int) $_POST['pagesCount'];
  $wikiLink = (string) $_POST['wikiLink'];
  $bookYear = (int) $_POST['bookYear'];
  $language = (string) $_POST['language'];
  $country = (string) $_POST['country'];

  if (strlen($title) > 255) {
    $title = substr($title, 0, 255);
  }

  if (!preg_match('/^(http|https):\/\/([a-z]{2})\.wikipedia\.org\/([a-zA-Z0-9-_\/%:]+)?/i', $wikiLink)) {
    $wikiLink = '';
  }

  if ($id) {
    $stmt = $db->prepare('UPDATE 
    books SET 
    title = :title,
    description = :description,
    author_id = :authorId,
    pages = :pages,
    wikipedia_link = :wikiLink,
    year = :bookYear,
    language = :language,
    country = :country
    WHERE id = :id
    ');

    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

  } else {
    $stmt =  $db->prepare(
      'INSERT INTO 
    `books` (
      `title`, 
      `description`, 
      `author_id`,
      `pages`,
      `wikipedia_link`,
      `year`,
      `language`,
      `country`
      )
    VALUES (
      :title,
      :description,
      :authorId,
      :pages,
      :wikiLink,
      :bookYear,
      :language,
      :country
      )'
    );
  }

  $stmt->bindParam(':title', $title, PDO::PARAM_STR);
  $stmt->bindParam(':description', $description, PDO::PARAM_STR);
  $stmt->bindParam(':authorId', $authorId, PDO::PARAM_INT);
  $stmt->bindParam(':pages', $pages, PDO::PARAM_INT);
  $stmt->bindParam(':wikiLink', $wikiLink, PDO::PARAM_STR);
  $stmt->bindParam(':bookYear', $bookYear, PDO::PARAM_INT);
  $stmt->bindParam(':language', $language, PDO::PARAM_STR);
  $stmt->bindParam(':country', $country, PDO::PARAM_STR);

  $stmt->execute();

  if (!$id) {
    $id = $db->lastInsertId();
    header('Location: ' . $_SERVER['REQUEST_URI'] . '?id=' . $id);
  }
}

if ($id){

  $stmt = $db->prepare('SELECT * FROM books WHERE id = :id');
  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
  $stmt->execute();

  $bookResult = $stmt->fetch();

}

  $stmtList = $db->prepare('SELECT * FROM books');
  $stmtList->execute();
  $bookList = $stmtList->fetchAll(PDO::FETCH_ASSOC);

?>