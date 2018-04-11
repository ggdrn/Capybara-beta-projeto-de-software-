<?php
  session_start();
  include('connection.php');
  include('validarlogin.php');
  $pdo = connection();

  $submit = $_POST["submit"];

  if(isset($_POST['submit'])){//confere se o usuário está tentando se logar
        //armazena os dados informados pelo usuário
  $email = $_POST["email"];
  $pass = $_POST["pass"];

  $query = "SELECT * FROM usuarios WHERE senha = '$pass' OR email='$email'";
  $sth = $pdo->prepare($query);
  $sth-> execute();
  $array = $sth->fetch(PDO::FETCH_BOTH);
  
  function RunValidations(){
    campovazio($email);
    campovazio($pass);
  }
  $sql = "SELECT * FROM usuarios WHERE email = :email and senha = :pass";
  $sth = $pdo->prepare($sql);
  $sth->bindValue(':email', $email);
  $sth->bindValue(':pass', $pass);
  $sth-> execute();

  if(!isset($array['email'])){
      echo"<script language='javascript' type='text/javascript'>alert('E-mail ou senha invalidos');/*window.location.href='../login.php'*/</script>";
  }
/*
  if($sth->rowCount() == 1){
     echo "<script>alert('Logado Com Sucesso!');</script>";
     Header("Location: /Capybara/");
   }
   else{
       echo "<script>alert('Usuarios ou senha incorretos!');</script>";
       Header("Location: /Capybara/");
   }
*/
 }





?>
