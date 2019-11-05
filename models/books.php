<?php
require_once('utils/db.php');

function getBooks() {
  $db = dbConnect();


  //****start pagination****
  $perPage = 8;
  $totalBooksReq = $db->query('SELECT id FROM books');
  $totalBooks = $totalBooksReq->rowCount();
  $maxPages = ceil($totalBooks / $perPage);

  if (isset($_GET['page']) 
  AND !empty($_GET['page']) 
  AND $_GET['page'] > 0 
  AND $_GET['page'] <= $maxPages) 
  {

    //force le numéro de page en INT
    $_GET['page'] = intval($_GET['page']);
    $currentPage = $_GET['page'];
  } else {
    // si la page demandé n'existe pas alors = 1
    $currentPage = 1;
  }

  $start = ($currentPage - 1) * $perPage;

  for($i =1; $i <= $maxPages; $i++) {
    if($i == $currentPage) {
      echo $i.' ';
    } else {
    echo '<a href="?action=books&page='.$i.'">'.$i.'</a>';
    }
  }

  //****end pagination****

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
