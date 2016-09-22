<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class Persona {
  private $nombre;
  private $edad;
  public function fijarNombreEdad($nom,$ed)
  {
    $this->nombre=$nom;
    $this->edad=$ed;
  }
  public function getEdad(){
    return $this->edad;
  }
  public function setEdad($ed){
    $this->edad = $ed;
  }
  public function retornarNombre()
  {
    return $this->nombre;
  }
  public function retornarEdad()
  {
    return $this->edad;
  }
  public function __clone()
  {
    $this->edad++;
  }
}

$persona1=new Persona();
$persona1->fijarNombreEdad('Juan',20);
echo 'Datos de la persona 1:';
echo $persona1->retornarNombre().' - '.$persona1->retornarEdad().'<br>';

for ($i=1; $i < 10; $i++) { 
  $persona=clone($persona1);
  $persona->setEdad($persona1->getEdad() + $i);
  echo 'Datos de la persona '.($i + 1).':';
  echo $persona->retornarNombre().' - '.$persona->retornarEdad().'<br>';
}

?>
</body>
</html>