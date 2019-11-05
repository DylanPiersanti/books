<?php

function dbConnect() {
  // connexion MySQL
  return new PDO('mysql:host=localhost;dbname=books', 'newuser', 'password');
}