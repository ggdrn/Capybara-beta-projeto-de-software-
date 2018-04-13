<?php
  include('connection.php');
  include('validardados.php');

  $submit = $_POST["submit"];

  if(isset($submit)){//confere se o usuário está tentando se cadastrar
    //armazena os dados informados pelo usuário
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $pass2 = $_POST["pass2"];
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $telefone = $_POST["telefone"];
    // Verifica se os campos estão vazios
    if(setdata($nome)) {
      echo "Campo vazio nome";
      die();
      }

    if(setdata($email)) {
      echo "Campo vazio e-mail";
      die();
      }

    if(setdata($nome)) {
      echo "Campo vazio nome";
      die();
      }
    if(setdata($cpf)) {
      echo "Campo vazio cpf";
      die();
      }
      // Verifica se o CPF é valido
      if(validatecpf($cpf)) {
        echo "cpf invalido";
        die();
        }
    if(setdata($telefone)) {
      echo "Campo vazio telefone";
      die();
      }
    if(setdata($pass)) {
      echo "Campo vazio senha";
      die();
      }
    if(setdata($pass2)) {
      echo "Campo vazio Confrimar Senha";
      die();
      }
    // fim do check dos campos vazios
    // Verifica se as senhas são iguais
    if(equaldata($pass,$pass2)) {
      echo "As senhas não são as mesmas";
      die();
      }



    $pdo = connection();
    $sql = 'INSERT INTO usuarios (nome, email, cpf, telefone, senha) VALUES (:nome, :email, :cpf, :telefone,:senha );';
    $sth = $pdo->prepare($sql);
    $sth->bindValue(':nome', $nome);
    $sth->bindValue(':email', $email);
    $sth->bindValue(':cpf', $cpf);
    $sth->bindValue(':telefone', $telefone);
    $sth->bindValue(':senha', $pass);
    $sth->execute();
    Header("Location: /Capybara/");
}

?>
