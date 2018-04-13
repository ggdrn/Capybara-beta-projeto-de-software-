<?php
header ('Content-type: text/html; charset=ISO-8859-1');
?>

<!DOCTYPE html PUBLIC>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Capybara Cursos Online - Cadastro</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<style type="text/css">
	.msg-erro{ color: red; }
</style>

</head>

<body>
<div>
	<h1>Cadastro</h1>
	<form method="post"  id="cadastro" action="engine/cadastro.php">
		<div class="form-group">
			Nome: <input type="text" id="nome" name="nome"><br><br>
			<span class='msg-erro msg-nome'></span>
		</div>
		<div class="form-group">
			E-mail: <input type="e-mail" id="email" name="email"><br><br>
			<span class='msg-erro msg-email'></span>
		</div>
		<div class="form-group">
			CPF: <input type="number" id="cpf" name="cpf" maxlength="11"><br><br>
			<span class='msg-erro msg-cpf'></span>
		</div>
		<div class="form-group">
			Telefone: <input type="number" id="telefone" name="telefone"><br><br>
			<span class='msg-erro msg-telefone'></span>
		</div>
		<div class="form-group">
			Senha: <input type="password" id="senha" name="pass"><br><br>
			<span class='msg-erro msg-senha'></span>
		</div>
		<div class="form-group">
			Confirmar Senha: <input type="password" id="senha2" name="pass2"><br><br>
			<span class='msg-erro msg-senha2'></span>
		</div>
		<input class="btn btn-primary" type="submit" value='Enviar' name="submit"></br><br>
	</form>
</div>

<!--<script type="text/javascript" src="javascript/validar.js"></script>-->
</body>
</html>
