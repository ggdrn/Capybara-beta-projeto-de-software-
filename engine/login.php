<?php
  session_start();
  include('connection.php');
  include('validardados.php');
  $pdo = connection();

  $submit = $_POST["submit"];

  if(isset($submit)){//confere se o usuário está tentando se logar
  //armazena os dados informados pelo usuário
  $email = $_POST["email"];
  $pass = $_POST["pass"];

  if(setdata($email)) {
    echo "Campo vazio e-mail";
    die();
  }

  if(setdata($pass)) {
    echo "Campo vazio senha";
    die();
  }

  $sql = "SELECT * FROM usuarios WHERE email = :email and senha = :pass";
  $sth = $pdo->prepare($sql);
  $sth->bindValue(':email', $email);
  $sth->bindValue(':pass', $pass);
  $sth-> execute();

  if($sth->rowCount() == 1)
    {
      while($ln = $sth->fetch(PDO::FETCH_ASSOC))
        {
           $_SESSION['email'] = $ln['email'];
           $_SESSION['cpf'] = $ln['cpf'];
           $_SESSION['telefone'] = $ln['telefone'];
           $_SESSION['pass'] = $ln['senha'];
           $_SESSION['name'] = $ln['nome'];
        };
    echo "<script>alert('Logado Com Sucesso!');window.location.href='../';</script>";
    //header('Location: ../index.php');
    die();
    }
      echo "<script>alert('E-mail ou senha incorretos');window.location.href='../login.php';</script>";
      //header('Location: ../login.php');
      die();

 }

?>
