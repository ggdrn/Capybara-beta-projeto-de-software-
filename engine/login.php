<?php
  session_start();
  include('connection.php');
  require('validarlogin.php');
  $pdo = connection();

  $email = $_POST["email"];
  $pass = $_POST["senha"];

  $erro = campovazio($email);
  if($erro = 0){
    $erro =  "<script> alert('Campo e-mail vazio');window.location.href='./login.php'</script>";
    return $erro;
  }
  $erro = campovazio($pass);
  if($erro = 0){
    $erro =  "<script> alert('Campo senha vazio');window.location.href='./login.php'</script>";
    return $erro;
  }

  $sql = "SELECT * FROM usuarios WHERE email = :email and senha = :senha";
  $sth = $pdo->prepare($sql);
  $sth->bindValue(':email', $email);
  $sth->bindValue(':senha', $pass);
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
