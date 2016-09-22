<!DOCTYPE html>
<html>
<head>
	<title>Clases abstractas</title>
</head>
<body>
<?php
abstract class Persona{
	private $nombre;
	private $edad;

	public function __construct($nom, $ed)
	{
		$this->nombre = $nom;
		$this->edad = $ed;
	}

	public function imprimirDatos(){
		echo "Me llamo $this->nombre y tengo $this->edad años.";
	}
}

class Empleado extends Persona{
	private $sueldo;

	public function __construct($nom, $ed, $sue)
	{
		parent::__construct($nom, $ed);
		$this->sueldo = $sue;
	}

	public function imprimirDatos(){
		echo parent::imprimirDatos()." Mi sueldo es $this->sueldo ";
	}
}

$empleado = new Empleado("Juan", 20, 1500);
$empleado->imprimirDatos();

?>
</body>
</html>