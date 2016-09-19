<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class Persona {
  private $nombre;
  private $edad;

  public function inicializar($nom, $edad)
  {
    $this->nombre = $nom;
    $this->edad = $edad;
  }
  public function imprimir()
  {
    echo $this->nombre;
    echo '-';
    echo $this->edad;
    echo '<br>';
    
  }
  public function cumpleanos()
  {
    echo "Feliz cumpleaños, " . $this->nombre;
    echo "<br>";
    $this->edad++;
  }
}

$per1=new Persona();
$per1->inicializar('Juan', 20);
$per1->imprimir();
$per1->cumpleanos();
$per1->imprimir();

$per2=new Persona();
$per2->inicializar('Ana', 30);
$per2->imprimir();
$per2->cumpleanos();
$per2->imprimir();

?>
</body>
</html>