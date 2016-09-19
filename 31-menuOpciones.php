<html>
<head>
<title>Pruebas</title>
<style type="text/css">
  ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      width: 200px;
      background-color: #f1f1f1;
  }

  li a {
      display: block;
      color: #000;
      padding: 8px 16px;
      text-decoration: none;
  }

  /* Change the link color on hover */
  li a:hover {
      background-color: #555;
      color: white;
  }
</style>
</head>
<body>
<?php
class Menu {
  private $enlaces=array();
  private $titulos=array();

  public function cargarOpcion($en,$tit)
  {
    $this->enlaces[]=$en;
    $this->titulos[]=$tit;
  }

  public function mostrar()
  {
    for($f=0;$f<count($this->enlaces);$f++)
    {
      echo '<a title="'.$this->titulos[$f].'" href="'.$this->enlaces[$f].'" >'.$this->titulos[$f].'</a>';
      if ($f != count($this->enlaces) - 1) {
        echo " - ";
      }
    }
  }
  
  public function mostrarVertical(){
    echo "<ul>";
    for ($i=0; $i < count($this->enlaces); $i++) { 
      echo '<li><a title="'.$this->titulos[$i].'" href="'.$this->enlaces[$i].'">'.$this->titulos[$i]."</a></li>";
    }
    echo "</ul>";
  }
  
}


$menu1=new Menu();
$menu1->cargarOpcion('http://www.google.com','Google');
$menu1->cargarOpcion('http://www.yahoo.com','Yahoo');
$menu1->cargarOpcion('http://www.msn.com','MSN');
$menu1->cargarOpcion('http://www.bing.com','Bing');
$menu1->mostrarVertical();
?>
</body>
</html>
