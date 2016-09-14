<!DOCTYPE html>
<html>
<head>
	<title>Suma Números GET</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
	$num1 = $_GET['num1'];
	$num2 = $_GET['num2'];

	if (empty($num1) || empty($num2)) {
		echo "Ambos valores num1 y num2 deben tener valor";
	}
	else {
		echo ($num1 + $num2);
	}
}
?>

</body>
</html>