<!DOCTYPE html>
<html>
<title>Listar Registros</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "personas";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  	$sql = "INSERT INTO persona (nombre, apellidos, fecha_nacimiento, lugar_nacimiento)
	VALUES ('".$_POST['nombre']."', '".$_POST['apellidos']."', '".$_POST['fecha_nacimiento']."', '".$_POST['lugar_nacimiento']."')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
	$sql = "DELETE FROM persona WHERE id = ".$_GET['id'];

	if ($conn->query($sql) === TRUE) {
	    echo "New record deleted successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

$sql = "SELECT nombre, apellidos, fecha_nacimiento, lugar_nacimiento FROM persona";
$result = $conn->query($sql);
if ($result->num_rows > 0) { ?>
    <div class="w3-container"> 
    	<table class="w3-table-all w3-hoverable">
    		<thead>
		    	<tr class="w3-light-grey">
		        	<th>Nombre</th>
		        	<th>Fecha Nacimiento</th>
		        	<th>Lugar Nacimiento</th>
		    	</tr>
			</thead>
    <?php while($row = $result->fetch_assoc()) : ?> 
		    <tr>
			    <td><?= $row["nombre"]. " ". $row["apellidos"] ?></td>
			    <td><?= $row["fecha_nacimiento"] ?></td>
			    <td><?= $row["lugar_nacimiento"] ?></td>
			</tr> 
    <?php endwhile ?>
    	</table>
    </div> 
<?php
} else {
	echo "0 results";
}
$conn->close();

?>
<br><br>
<form method="post" action="<?php echo ($_SERVER["PHP_SELF"]);?>" class="w3-container">
	<label class="w3-label" for="nombre">Nombre: </label>
	<input class="w3-input" type="text" name="nombre" id="nombre"><br>
	<label class="w3-label" for="apellido">Apellidos: </label>
	<input class="w3-input" type="text" name="apellidos" id="apellidos"><br>
	<label class="w3-label" for="fecha_nacimiento">Fecha Nacimiento: </label>
	<input class="w3-input" type="text" name="fecha_nacimiento" id="fecha_nacimiento"><br>
	<label class="w3-label" for="lugar_nacimiento">Lugar Nacimiento: </label>
	<input class="w3-input" type="text" name="lugar_nacimiento" id="lugar_nacimiento"><br>
	<input type="submit" name="submit" value="Enviar">
</form>

</body>
</html>

