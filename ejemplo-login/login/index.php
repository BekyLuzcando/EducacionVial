<?php 
	session_start();
	unset($_SESSION['usuario']);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>
<header>
	<div class="w3-container w3-blue w3-center">
		<h1>Educación Vial para niños</h1>
	</div>
</header>

	
	<div class="w3-container">
		<h2>Login</h2>
	</div>

	<form class="w3-container" action="controller_login.php" method="post">
		<p>
			<label class="w3-label">
				Usuario
			</label>
			<input class="w3-input w3-border " type="text" name="usuario">
		</p>
		<p>
			<label class="w3-label">Cédula</label>
			<input class="w3-input w3-border" type="text" name="pas">
		</p>
		<p>
			<input type="hidden" name="entrar" value="entrar">
			<button class="w3-btn w3-green">Aceptar</button>
		</p>
		<p>Si aún no tienes cuenta ve al siguiente link <a href="registrarse.php">Registrarse</a></p>
	</form>
<footer>
	<div class="w3-container w3-blue w3-center">
		Creative Commons | Power by <a href="">@bekyLuzcando</a>
	</div>
</footer>
</body>
</html>