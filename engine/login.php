<?php
  session_start();
  include('connection.php');
  $pdo = connection();

  $email = $_POST["email"];
  $senha = $_POST["senha"];

  $sql = "SELECT * FROM usuarios WHERE email = :email and senha = :senha";
  $sth = $pdo->prepare($sql);
  $sth->bindValue(':email', $email);
  $sth->bindValue(':senha', $senha);
  $sth-> execute();

  if($sth->rowCount() == 1)
   {
     echo "<script>alert('Logado Com Sucesso!')</script>";
     Header("Location: /Capybara/");
   }
   else
   {
       echo "<script>alert('Usuarios Ou Senha Incorretos!');</script>";
       Header("Location: /Capybara/");
   }

?>
