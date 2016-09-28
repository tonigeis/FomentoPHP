<?php
require_once("Bizcochuelo.php");
require_once("BizcochueloVainilla.php");

$bizcochuelo = new Bizcochuelo();
$bizcochuelo->set_ingredientes();
$bizcochuelo->get_ingredientes();

$bizcochueloVainilla = new BizcochueloVainilla();
$bizcochueloVainilla->get_ingredientes();

?>