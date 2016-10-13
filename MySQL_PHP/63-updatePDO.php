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
    $stmt = $conn->prepare("UPDATE usuarios SET apellido=:apellido WHERE id=:id");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':apellido', $apellido);

    $id = $_GET["id"];
    $apellido = $_GET["apellido"];

    $stmt->execute();

    echo "Record updated successfully";

}
catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>