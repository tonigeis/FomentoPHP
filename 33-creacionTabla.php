<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
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

  public function cargar($fila,$columna,$valor)
  {
    $this->mat[$fila][$columna]=$valor;
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
    echo '<td>'.$this->mat[$fi][$co].'</td>';
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

$filas = 15;
$columnas = 10;
$cont = 1;
$incremento = 3;
$mat=array();

$tabla1=new Tabla($filas,$columnas);

for ($f=1; $f <= $filas; $f++) { 
  for ($c=1; $c <= $columnas; $c++) { 
    $tabla1->cargar($f,$c,$cont);
    $cont += $incremento;
  }
}

echo $tabla1->getCantFilas()."x".$tabla1->getCantColumnas();
$tabla1->graficar();
?>
</body>
</html>