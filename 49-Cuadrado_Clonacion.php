<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

class Cuadrado{
	private $lado;

	public function setLado($la){
		$this->lado = $la;
	}

	public function perimetro(){
		return 4*$this->lado;
	}

	public function superficie(){
		return $this->lado*$this->lado;
	}

	public function imprimir(){
		echo "El perimetro del cuadrado con lado $this->lado es ".$this->perimetro()." y la superficie es ".$this->superficie()."<br>";
	}
}

$cuadrado = new Cuadrado();
$cuadrado->setLado(3);

$cuadrado2 = $cuadrado;
$cuadrado2->imprimir();
$cuadrado->setLado(4);
$cuadrado->imprimir();
$cuadrado2->imprimir();

$cuadrado3 = clone($cuadrado);
$cuadrado->setLado(5);
$cuadrado->imprimir();
$cuadrado3->imprimir();

?>
</body>
</html>