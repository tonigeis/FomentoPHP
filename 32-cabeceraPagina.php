<html>
<head>
<title>Pruebas</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>
<?php
class CabeceraPagina {
  private $titulo;
  private $ubicacion;
  private $color;

  public function __construct($tit,$ubi,$col)
  {
    $this->titulo=$tit;
    $this->ubicacion=$ubi;
    $this->color=$col;
  }
  public function graficar()
  {
    echo '<div style="font-size:20px;text-align:'.$this->ubicacion.';color:'.$this->color.'">';
    echo $this->titulo;
    echo '</div><hr>';
  }
  public function graficar2()
  {
    echo '<div class="w3-container w3-'.$this->ubicacion.' w3-text-'.$this->color.'">';
    echo $this->titulo;
    echo '</div><hr>';
  }
}

$cabecera1=new CabeceraPagina('El blog del programador','left', 'red');
$cabecera1->graficar();

$cabecera2=new CabeceraPagina('El blog del programador','center', 'green');
$cabecera2->graficar();

$cabecera3=new CabeceraPagina('El blog del programador','right', 'orange');
$cabecera3->graficar();

$cabecera4=new CabeceraPagina('El blog del programador','left', 'red');
$cabecera4->graficar2();

$cabecera5=new CabeceraPagina('El blog del programador','center', 'green');
$cabecera5->graficar2();

$cabecera6=new CabeceraPagina('El blog del programador','right', 'orange');
$cabecera6->graficar2();
?>
</body>
</html>