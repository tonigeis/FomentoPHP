<!DOCTYPE html>
<html>
<title>Examen Final Prova Practica Modul 2</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<body>
<div class="w3-card-4">
	<div class="w3-container w3-brown">
	  <h2>Registre d'empleats</h2>
	</div>
	<form class="w3-container" method="POST">
		<p>
		<label class="w3-label w3-text-brown"><b>Nom</b></label>
		<input class="w3-input w3-border w3-sand" name="nom" type="text"></p>

		<p>
		<label class="w3-label w3-text-brown"><b>Cognom</b></label>
		<input class="w3-input w3-border w3-sand" name="cognom" type="text"></p>
		<p>

		<p>
		<label class="w3-label w3-text-brown"><b>Data Naix.</b><i> (format: 2016-07-17)</i></label>
		<input class="w3-input w3-border w3-sand" name="datanaix" type="text"></p>
		<label class="w3-label w3-text-brown"><b>Lloc Naix.</b></label>
		<input class="w3-input w3-border w3-sand" name="llocnaix" type="text"></p>
		<p><input class="w3-btn w3-brown" type="submit" name="submit" value="Enregistrar"></p>
	</form>
</div>

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
		if ($_POST['nom'] && $_POST['cognom'] && $_POST['datanaix'] && $_POST['llocnaix']) {
			$sql = "INSERT INTO persona (nombre, apellidos, fechaNacimiento, lugarNacimiento)
			VALUES ('".$_POST['nom']."', '".$_POST['cognom']."', '".$_POST['datanaix']."', '".$_POST['llocnaix']."')";
			if ($conn->query($sql) === TRUE) {
			    echo "Se ha creado un nuego registro";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
		else{
			echo "Debe rellenar todos los campos";
		}
	}
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		if ($_GET['rowid']) {
			$sql = "DELETE FROM persona WHERE id = ".$_GET['rowid'];

			if ($conn->query($sql) === TRUE) {
			    echo "Se ha eliminado el registro con id = ".$_GET['rowid'];
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
	}
	
	$sql = "SELECT id, nombre, apellidos, fechaNacimiento, lugarNacimiento 
			FROM persona ORDER BY id DESC";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) { ?>
	    <div class="w3-container w3-responsive">
	    	<table class="w3-table w3-bordered w3-striped w3-large">
			    <tr class="w3-light-grey">
			        <th>Id</th>
					<th>Nom</th>
					<th>Cognoms</th>
					<th>Data Naix.</th>
					<th>Lloc Naix.</th>
					<th></th>
			    </tr>
	    <?php while($row = $result->fetch_assoc()) : ?> 
			    <tr>
				    <td><?= $row["id"] ?></td>
				    <td><?= $row["nombre"] ?></td>
				    <td><?= $row["apellidos"] ?></td>
				    <td><?= $row["fechaNacimiento"] ?></td>
				    <td><?= $row["lugarNacimiento"] ?></td>
				    <td><a href="crud.php?rowid=<?= $row['id'] ?>">Eliminar</a></td>
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

</body>
</html>