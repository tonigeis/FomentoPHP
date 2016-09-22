<!DOCTYPE html>
<html>
<head>
	<title>Clases abstractas</title>
</head>
<body>
<?php
class Persona{
	private $nombre;
	private $edad;

	public final function cargarDatos($nom, $ed)
	{
		$this->nombre = $nom;
		$this->edad = $ed;
	}

	public function imprimirDatos(){
		echo "Me llamo $this->nombre y tengo $this->edad años."."<br>";
	}
}

class Empleado extends Persona{
	private $sueldo;

	public function cargarSueldo($nom, $ed, $sue)
	{
		parent::cargarDatos($nom, $ed);
		$this->sueldo = $sue;
	}

	public function imprimirSueldo(){
		echo parent::imprimirDatos();
		echo "Mi sueldo es $this->sueldo ";
	}
}

$persona = new Persona();
$persona->cargarDatos("Antonio", 27);
$persona->imprimirDatos();

$empleado = new Empleado();
$empleado->cargarSueldo("Juan", 34, 2500);
$empleado->imprimirSueldo();

?>
</body>
</html>