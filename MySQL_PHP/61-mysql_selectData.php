<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_example";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, nombre, apellido, email FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) { ?>
    <!-- Output data of each row -->
    <div class="w3-container"> 
    	<table class="w3-table-all w3-hoverable">
    		<thead>
		    	<tr class="w3-light-grey">
		        	<th>ID</th>
		        	<th>Nombre</th>
		        	<th>Email</th>
		    	</tr>
			</thead>
    <?php while($row = $result->fetch_assoc()) : ?> 
		    <tr>
			    <td><?= $row["id"] ?></td>
			    <td><?= $row["nombre"]. " ". $row["apellido"] ?></td>
			    <td><?= $row["email"] ?></td>
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

