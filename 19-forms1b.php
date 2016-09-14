<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php

	$nombre = $apellido = $sexo = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  $nombre = test_input($_POST["nombre"]);
	  $apellido = test_input($_POST["apellido"]);
	  $sexo = test_input($_POST["sexo"]);
	}

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	?>

	<h1>Hola</h1>
	<p>Nombre: <?= $nombre ?></p>
	<p>Apellido: <?= $apellido ?></p>
	<p>Sexo: <?= $sexo ?></p>

</body>
</html>


