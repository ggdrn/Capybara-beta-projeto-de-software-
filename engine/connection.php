<?php
  function connection(){
    $pdo = new PDO('mysql:host=localhost; dbname=capybara', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
  }
?>
