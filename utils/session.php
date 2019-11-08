<?php

session_start();
$db = dbConnect();

if (isset($_POST['login'])) {
  
  $login = (string) $_POST['login'];
  $password = (string) $_POST['password'];

  if (filter_var($login, FILTER_VALIDATE_EMAIL) && $password) { 


    $stmt = $db->prepare('SELECT * FROM users WHERE email = :login');

    $stmt->bindParam(':login', $login);

    $stmt->execute();
    $logger = $stmt->fetch();
    
    if ($logger && password_verify($password, $logger['password'])) {
        $_SESSION['name'] = $logger['name'];
        $_SESSION['id'] = $logger['id'];
        $_SESSION['email'] = $logger['email'];
        var_dump($_SESSION);
        header('Location: editBook.php');
        
    }

    // var_dump($logger);
    // password_hash($password, PASSWORD_DEFAULT);
    // var_dump(password_verify($password, $logger));
  }
}