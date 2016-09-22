<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

class Trabajador{
	protected $nombre;
	protected $sueldo;

	public function __construct(){
		echo "método construct <br>";
	}

	public function __destruct(){
		echo "método destruct <br>";
	}
}

$trabajador = new Trabajador();

?>
</body>
</html>