<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php

class Operacion {
  protected $valor1;
  protected $valor2;
  protected $resultado;
  public function cargar1()
  {
    $this->valor1=$_GET['valor1'];
  }
  public function cargar2()
  {
    $this->valor2=$_GET['valor2'];
  }
  public function imprimirResultado()
  {
    echo $this->resultado.'<br>';
  }
  public function getValor1()
  {
    return $this->valor1;
  }
  public function getValor2()
  {
    return $this->valor2;
  }
}

class Suma extends Operacion{
  public function operar()
  {
    $this->resultado=$this->valor1+$this->valor2; 
  }
}

class Resta extends Operacion{
  public function operar()
  {
    $this->resultado=$this->valor1-$this->valor2;
  }
}

class Multiplicacion extends Operacion{
  public function operar()
  {
    $this->resultado=$this->valor1*$this->valor2;
  }
}

class Division extends Operacion{
  public function operar()
  {
    $this->resultado=$this->valor1/$this->valor2;
  }
}

class Modulo extends Operacion{
  public function operar()
  {
    $this->resultado=$this->valor1%$this->valor2;
  }
}

$suma=new Suma();
$suma->cargar1();
$suma->cargar2();
$suma->operar();
echo 'El resultado de la suma de '.$suma->getValor1().' y '.$suma->getValor2().' es: ';
$suma->imprimirResultado();

$resta=new Resta();
$resta->cargar1();
$resta->cargar2();
$resta->operar();
echo 'El resultado de la diferencia de '.$suma->getValor1().' y '.$suma->getValor2().' es: ';
$resta->imprimirResultado();

$multiplicacion = new Multiplicacion();
$multiplicacion->cargar1();
$multiplicacion->cargar2();
$multiplicacion->operar();
echo 'El resultado de la multiplicación de '.$suma->getValor1().' y '.$suma->getValor2().' es: ';
$multiplicacion->imprimirResultado();

$division = new Division();
$division->cargar1();
$division->cargar2();
$division->operar();
echo 'El resultado de la división de '.$suma->getValor1().' y '.$suma->getValor2().' es: ';
$division->imprimirResultado();

$modulo = new Modulo();
$modulo->cargar1();
$modulo->cargar2();
$modulo->operar();
echo 'El resultado del módulo de '.$suma->getValor1().' y '.$suma->getValor2().' es: ';
$modulo->imprimirResultado();

?>
</body>
</html>