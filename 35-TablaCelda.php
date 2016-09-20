<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
require 'Celda.php';

class Tabla {
  private $mat=array();
  private $cantFilas;
  private $cantColumnas;

  public function getCantFilas(){
    return $this->cantFilas;
  }

  public function getCantColumnas(){
    return $this->cantColumnas;
  }

  public function __construct($fi,$co)
  {
    $this->cantFilas=$fi;
    $this->cantColumnas=$co;
  }

  public function cargar($fila,$columna,$valor,$colorFuente,$colorFondo)
  {
    $this->mat[$fila][$columna]=new Celda($valor,$colorFuente,$colorFondo);
  }

  public function inicioTabla()
  {
    echo '<table border="1">';
  }
    
  public function inicioFila()
  {
    echo '<tr>';
  }

  public function mostrar($fi,$co)
  {
    echo $this->mat[$fi][$co]->graficar();
  }

  public function finFila()
  {
    echo '</tr>';
  }

  public function finTabla()
  {
    echo '</table>';
  }

  public function graficar()
  {
    $this->inicioTabla();
    for($f=1;$f<=$this->cantFilas;$f++)
    {
      $this->inicioFila();
      for($c=1;$c<=$this->cantColumnas;$c++)
      {
        $this->mostrar($f,$c);
      }
      $this->finFila();
    }
    $this->finTabla();
  }
}

$filas = 25;
$columnas = 20;
$cont = 1;
$incremento = 3;
$color = 'black';
$bgColorsList = array('cyan', 'red', 'blue', 'orange', 'brown', 'pink');

$tabla1=new Tabla($filas,$columnas);

for ($f=1; $f <= $filas; $f++) { 
  for ($c=1; $c <= $columnas; $c++) { 
    $tabla1->cargar($f, $c, $cont, $color, $bgColorsList[rand(0, count($bgColorsList) - 1)]);
    $cont += $incremento;
  }
}

echo $tabla1->getCantFilas()."x".$tabla1->getCantColumnas();
$tabla1->graficar();
?>
</body>
</html>