<?php
require_once('utils/db.php');

$perPage = 8;

function countBooks(): int
{
  $db = dbConnect();
  $totalBooksReq = $db->query('SELECT id FROM books');
  return $totalBooksReq->rowCount();
}

function getBooks(string $start): array 
{
  global $perPage;

  $db = dbConnect();

  $stmt = $db->prepare('SELECT 
    b.*,
    a.name aS author 
    FROM books as b 
    LEFT JOIN authors as a
    ON b.author_id = a.id
    LIMIT :strt, :perPage
  ');

  $stmt->bindParam(':strt', $start, PDO::PARAM_INT);
  $stmt->bindParam(':perPage', $perPage, PDO::PARAM_INT);

  $stmt->execute();
 
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getBook($id) {
  $db = dbConnect();

  $stmt = $db->prepare('SELECT
  b.*,
  a.name as author 
  FROM books as b 
  LEFT JOIN authors as a
  ON b.author_id = a.id
  WHERE b.id = :id
  ');

  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
  $stmt->execute();

  return $stmt->fetch();
}
