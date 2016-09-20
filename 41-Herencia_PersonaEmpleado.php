<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Herencia - Perosna Empleado</title>
</head>
<body>
<?php

class Persona{
	protected $nombre;
	protected $edad;

	public function cargarDatos($nom, $ed)
	{
		$this->nombre = $nom;
		$this->edad = $ed;
	}

	public function imprimirDatos()
	{
		echo "Me llamo ".$this->nombre.", tengo ".$this->edad." años"."<br>";
	}
}

class Empleado extends Persona{
	private $sueldo;

	public function cargarSueldo($suel)
	{
		$this->sueldo = $suel;
	}

	public function imprimirDatos()
	{
		echo parent::imprimirDatos()."...y mi sueldo es de ".$this->sueldo." €.";
	}
}

$persona1 = new Persona();
$persona1->cargarDatos("Pepe", 39);
$persona1->imprimirDatos();

$empleado1 = new Empleado();
$empleado1->cargarDatos("Juan", 20);
$empleado1->cargarSueldo(2000);
$empleado1->imprimirDatos();

?>
</body>
</html>