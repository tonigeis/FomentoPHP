<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Número semana del año actual</title>
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body class="w3-container">

<?php

$day = "";
$year = date('Y');
$week = date('W');

$d1=mktime(11, 14, 54, 12, 13, 2014);
$d2=strtotime("+20 Days");

switch (date('N', $d2)) {
	case (1):
		$day = "Lunes";
		break;
	case (2):
		$day = "Martes";
		break;
	case (3):
		$day = "Miércoles";
		break;
	case (4):
		$day = "Jueves";
		break;
	case (5):
		$day = "Viernes";
		break;
	case (6):
		$day = "Sábado";
		break;
	case (7):
		$day = "Domingo";
		break;
}

?>

<h1 class="w3-red w3-padding-small">Semana del año</h1>
<div class="w3-green w3-padding-small">
	<p>Estamos en la semana <?= $week ?> del año <?= $year ?></p>
</div>
<hr>
<div>
	<p>La fecha creada es <?= date("d-m-Y h:i:sa", $d1); ?></p>
</div>
<hr>
<div>
	<p>De aquí a 20 dias será día <?= date("d-m-Y", $d2)?> y será el dia de la semana <?= $day ?></p>
</div>


</body>
</html>