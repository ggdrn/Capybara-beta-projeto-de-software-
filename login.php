<?php
header ('Content-type: text/html; charset=ISO-8859-1');
?>

<!DOCTYPE html PUBLIC>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Capybara Cursos Online - Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link href="projetocss.css" rel="stylesheet" type="text/css"/>

</head>
<body>
<div>
	<h1>Login</h1>
	<form method="post" action="engine/login.php">
		E-mail: <input type="e-mail" name="email"><br><br>
		Senha: <input type="password" name="pass"><br><br>
		<input class="button button-s" type="submit" value='Enviar'></br><br>
	</form>
</div>


</body>
</html>
