<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario POST</title>
	<style type="text/css">
		.error {
			color: red;
		}

		.success {
			color: green;
		}
	</style>
</head>
<body>

<?php

$nombre = $apellido = $sexo = "";
$nombreErr = $apellidoErr = $sexoErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  	if (empty($_POST["nombre"])) {
	    $nombreErr = "El nombre es un campo obligatorio";
	} else {
		$nombre = test_input($_POST["nombre"]);
	}

	if (empty($_POST["apellido"])) {
		$apellidoErr = "El apellido es un campo obligatorio";
	} else {
		$apellido = test_input($_POST["apellido"]);
	}	

	if (empty($_POST["sexo"])) {
		$sexoErr = "Debe informar del género";
	} else {
		$sexo = test_input($_POST["sexo"]);
	}
}

function test_input($data) {
  	$data = trim($data);
  	$data = stripslashes($data);
  	$data = htmlspecialchars($data);
  	return $data;
}

?>

<form method="post" action="<?php echo ($_SERVER["PHP_SELF"]);?>">
	<label for="nombre">Nombre: </label>
	<input type="text" name="nombre" id="nombre" value="<?= $nombre ?>">
	<span class="error">* <?= $nombreErr;?></span><br><br>
	<label for="apellido">Apellido: </label>
	<input type="text" name="apellido" id="apellido" value="<?= $apellido ?>">
	<span class="error">* <?= $apellidoErr;?></span><br><br>
	Sexo:
	<input type="radio" name="sexo" value="hombre" <?php if (isset($sexo) && $sexo=="hombre") echo "checked";?>><label>Hombre</label>
	<input type="radio" name="sexo" <?php if (isset($sexo) && $sexo=="mujer") echo "checked";?> value="mujer"><label>Mujer</label>
	<span class="error">* <?= $sexoErr;?></span>
	<br><br>
	<input type="submit" name="submit" value="Enviar">
</form>
<br>

<?php if ($nombre && $apellido && $sexo): ?>
	<div class="success"><p>Los datos se han enviado correctamente</p></div>
	<h1>Hola</h1>
	<p>Nombre: <?= $nombre ?></p>
	<p>Apellido: <?= $apellido ?></p>
<?php endif; ?>
	
</body>
</html>