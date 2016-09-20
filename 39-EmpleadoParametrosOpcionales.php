<!DOCTYPE html>
<html>
<head>
	<title>Empleado - Parámetros opcionales</title>
</head>
<body>
<?php
class Empleado{
	private $nombre;
	private $sueldo;

	public function __construct($nom, $suel=1000)
	{
		$this->nombre = $nom;
		$this->sueldo = $suel;
	}

	public function imprimir()
	{
		echo "Hola, soy ".$this->nombre." y cobro ".$this->sueldo."€.<br>";
	}
}

$empleado1 = new Empleado("Juan");
$empleado1->imprimir();
$empleado2 = new Empleado("José", 2000);
$empleado2->imprimir();
?>
</body>
</html>