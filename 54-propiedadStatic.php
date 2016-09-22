<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
abstract class Trabajador {
  protected $nombre;
  protected $sueldo;

  public function __construct($nom,$sue)
  {
    $this->nombre=$nom;
    $this->sueldo=$sue;
  }
  public function retornarSueldo()
  {
    return $this->sueldo;
  }
} 

class Empleado extends Trabajador {
  public static $numEmpleados;
  public function __construct($nom,$sue){
    parent::__construct($nom,$sue);
    self::$numEmpleados++;
  }
}

class Gerente extends Trabajador {
  public static $numGerentes;
  public function __construct($nom,$sue){
    parent::__construct($nom,$sue);
    self::$numGerentes++;
  }
}

$vec[]=new Empleado('juan',1200);
$vec[]=new Empleado('ana',1000);
$vec[]=new Empleado('carlos',1000);

$vec[]=new Gerente('jorge',25000);
$vec[]=new Gerente('marcos',8000);
$suma1=0;
$suma2=0;

$contadorEmpleados = 0;
$contadorGerentes = 0;

for($f=0;$f<count($vec);$f++)
{
  if ($vec[$f] instanceof Empleado){
    $suma1=$suma1+$vec[$f]->retornarSueldo();
    $contadorEmpleados++;
  }
  else if ($vec[$f] instanceof Gerente){
    $suma2=$suma2+$vec[$f]->retornarSueldo();
    $contadorGerentes++;
  }     
}

echo 'Gastos en sueldos de los '.Empleado::$numEmpleados.' empleados:'.$suma1.'<br>';
echo 'Gastos en sueldos de los '.Gerente::$numGerentes.' gerentes:'.$suma2.'<br>';

?>
</body>
</html>