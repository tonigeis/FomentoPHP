<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario POST</title>
</head>
<body>
<form method="post" action="19-forms1b.php">
	<label for="nombre">Nombre: </label>
	<input type="text" name="nombre" id="nombre"><br><br>
	<label for="apellido">Apellido: </label>
	<input type="text" name="apellido" id="apellido"><br><br>
	Sexo:
	<input type="radio" name="sexo" value="hombre" checked><label>Hombre</label>
	<input type="radio" name="sexo" value="mujer"><label>Mujer</label>
	<br><br>
	<input type="submit" name="submit" value="Enviar">
</form>
	
</body>
</html>