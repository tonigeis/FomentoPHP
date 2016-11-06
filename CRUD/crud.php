<!DOCTYPE html>
<html>
<head>
	<title>Examen Final Prova Practica Modul 2</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<script type="text/javascript">

		function confirmDel(id){		
		  var agree = confirm("¿Realmente desea eliminar el registro con id = " + id + "?");
		  if (agree){
		  	return true;
		  } 
		  return false;
		}

		function montarRegistro(id, nombre, apellidos, fecha, lugar){
			document.getElementById("id").value = id;
			document.getElementById("nom").value = nombre;
			document.getElementById("cognom").value = apellidos;
			document.getElementById("datanaix").value = fecha;
			document.getElementById("llocnaix").value = lugar;
		}

	</script>
</head>
<body>

<div class="w3-card-4">
	<div class="w3-container w3-brown">
	  <h2>Registre d'empleats</h2>
	</div>
	<form class="w3-container" method="POST">
		<p>
			<input type="hidden" id="id" name="id">
		</p>
		<p>
		<label class="w3-label w3-text-brown"><b>Nom</b></label>
		<input class="w3-input w3-border w3-sand" id="nom" name="nom" type="text"></p>

		<p>
		<label class="w3-label w3-text-brown"><b>Cognom</b></label>
		<input class="w3-input w3-border w3-sand" id="cognom" name="cognom" type="text"></p>

		<p>
		<label class="w3-label w3-text-brown"><b>Data Naix.</b><i> (format: 2016-07-17)</i></label>
		<input class="w3-input w3-border w3-sand" id="datanaix" name="datanaix" type="text"></p>

		<p>
		<label class="w3-label w3-text-brown"><b>Lloc Naix.</b></label>
		<input class="w3-input w3-border w3-sand" id="llocnaix" name="llocnaix" type="text"></p>
		<p><input class="w3-btn w3-brown" type="submit" name="submit" value="Enregistrar"></p>
	</form>
</div>

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "personas";

	$mensajeInsertOK = "";
	$mensajeInsertKO = "";
	$mensajeDelete = "";
	$mensajeUpdatedOK = "";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if ($_POST['nom'] && $_POST['cognom'] && $_POST['datanaix'] && $_POST['llocnaix']) {
			if ($_POST['id']) {
				$sql = "UPDATE persona SET nombre='".$_POST['nom']."', apellidos='".$_POST['cognom']."', fechaNacimiento='".$_POST['datanaix']."', lugarNacimiento='".$_POST['llocnaix']."' WHERE id='".$_POST['id']."'";
				if ($conn->query($sql) === TRUE) {
				    $mensajeUpdatedOK = "Se ha actualizado el registro con id = ".$_POST['id'];
				} else {
				    echo "Error updating record: " . $conn->error;
				}
			}
			else {
				$sql = "INSERT INTO persona (nombre, apellidos, fechaNacimiento, lugarNacimiento)
				VALUES ('".$_POST['nom']."', '".$_POST['cognom']."', '".$_POST['datanaix']."', '".$_POST['llocnaix']."')";
				if ($conn->query($sql) === TRUE) {
				    $mensajeInsertOK = "Se ha creado un nuego registro";
				} else {
				    echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}
		}
		else{
			$mensajeInsertKO = "Debe rellenar todos los campos";
		}
	}
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		if (isset($_GET['rowid'])) {
			$sql = "DELETE FROM persona WHERE id = ".$_GET['rowid'];

			if ($conn->query($sql) === TRUE) {
			    $mensajeDelete = "Se ha eliminado el registro con id = ".$_GET['rowid'];
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
	    	<?php if($mensajeInsertOK) : ?>
	    	<div class="w3-container w3-green"><h4><?= $mensajeInsertOK ?></h4></div>
	    	<?php endif; ?>
	    	<?php if($mensajeInsertKO) : ?>
	    	<div class="w3-container w3-red"><h4><?= $mensajeInsertKO ?></h4></div>
	    	<?php endif; ?>
	    	<?php if($mensajeDelete) : ?>
	    	<div class="w3-container w3-pale-red"><h4><?= $mensajeDelete ?></h4></div>
	    	<?php endif; ?>
	    	<?php if($mensajeUpdatedOK) : ?>
	    	<div class="w3-container w3-blue"><h4><?= $mensajeUpdatedOK ?></h4></div>
	    	<?php endif; ?>

	    	<table class="w3-table w3-bordered w3-striped w3-large">
			    <tr class="w3-light-grey">
			        <th>Id</th>
					<th>Nom</th>
					<th>Cognoms</th>
					<th>Data Naix.</th>
					<th>Lloc Naix.</th>
					<th></th>
					<th></th>
			    </tr>
	    		<?php while($row = $result->fetch_assoc()) : ?> 
			    <tr>
				    <td><?= $row["id"] ?></td>
				    <td><?= $row["nombre"] ?></td>
				    <td><?= $row["apellidos"] ?></td>
				    <td><?= $row["fechaNacimiento"] ?></td>
				    <td><?= $row["lugarNacimiento"] ?></td>
				    <td><a class="w3-btn w3-pale-red w3-border" onclick="return confirmDel(<?= $row['id'] ?>);" href="crud.php?rowid=<?= $row['id'] ?>">Eliminar</a></td>
				    <td><a class="w3-btn w3-blue w3-border" id="modificar" onclick='montarRegistro(<?= $row['id']; ?>, "<?= $row['nombre'] ?>", "<?= $row['apellidos'] ?>", "<?= $row['fechaNacimiento'] ?>", "<?= $row['lugarNacimiento'] ?>")'>Modificar</a></td>
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