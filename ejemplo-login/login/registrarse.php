<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registrarse</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>
<header>
	<div class="w3-container w3-blue w3-center">
		<h1>Educación Vial para niños</h1>
	</div>
</header>
		<div class="w3-container w3-darkblue">
			<h1>Registrarse</h1>
		</div>
		<div>
			<form class="w3-container" action="controller_login.php" method="post">
				<p>
					<label class="w3-label">Usuario</label>
					<input class="w3-input w3-border" type="text" name="usuario">
				</p>
				<p>
					<label class="w3-label">Cédula</label>
					<input class="w3-input w3-border" type="text" name="pas">
				</p>
				<p>
					<input type="hidden" name="registrarse" value="registrarse">
					<button class="w3-btn w3-green">Registrarse</button>
				</p>
				<p><a href="index.php">Ahora no</a></p>
			</form>
		</div>
<footer>
	<div class="w3-container w3-blue w3-center">
		Creative Commons | Power by <a href="">@bekyLuzcando</a>
	</div>
</footer>

</body>
</html>