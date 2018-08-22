<?php

$datos = array(

	"cedula" => $_POST['cedula'],
	"nombre" => $_POST['nombre'],
);

$archivo = fopen($_POST['data'].".dat", "a");

fwrite($archivo, json_encode($datos));
fclose($archivo);

?>

<html>
<body>
	<head>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/stylelogic.css">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>		
	</head>

	<style type="text/css">

	</style>
	
	<div id="contenedor2">
		<center>
			<a title="peaton" href="internas/menuPrincipal.html"><img src="images/libro3.jpg" alt="peaton"></a>
			</br>
			</br>
			</br>
			<a title="conductor" href="internas/menuPrincipal.html"><img src="images/libro4.jpg" alt="conductor"/></a>
		</center>
		</br>
		</br>
	</div>

</body>
</html>