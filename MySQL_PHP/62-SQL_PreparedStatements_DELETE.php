<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_example";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// prepare sql and bind parameters
	$stmt = $conn->prepare("DELETE FROM usuarios WHERE id=:id");
    $stmt->bindParam(':id', $id);

    $id = $_GET["id"];

    $stmt->execute();

    echo "Record deleted successfully";
}
catch(PDOException $e)
{
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>