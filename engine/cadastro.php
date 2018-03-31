<?php
  require('connection.php');

  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $cpf = $_POST["cpf"];
  $telefone = $_POST["telefone"];
  $senha = $_POST["senha"];

  $pdo = connection();
  $sql = 'INSERT INTO usuarios (nome, email, cpf, telefone, senha) VALUES (:nome, :email, :cpf, :telefone,:senha );';
  $sth = $pdo->prepare($sql);
  $sth->bindValue(':nome', $nome);
  $sth->bindValue(':email', $email);
  $sth->bindValue(':cpf', $cpf);
  $sth->bindValue(':telefone', $telefone);
  $sth->bindValue(':senha', $senha);
  $sth->execute();
  Header("Location: /Capybara/");


?>
