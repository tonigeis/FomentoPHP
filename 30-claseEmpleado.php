<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class Empleado {
  private $nombre;
  private $sueldo;

  public function inicializar($nom, $suel)
  {
    $this->nombre = $nom;
    $this->sueldo = $suel;
  }
  public function imprimir()
  {
    echo $this->nombre . ", Vd ";
    echo ($this->sueldo > 3000) ? ("debe pagar impuestos" . "<br>") : ("no debe pagar impuestos" . "<br>");
  }
}

$empl1 = new Empleado();
$empl1->inicializar("Juan", 3200);
$empl1->imprimir();

$empl1 = new Empleado();
$empl1->inicializar("Pedro", 2950);
$empl1->imprimir();

?>
</body>
</html>