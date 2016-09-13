<?php
	function increment(){
		$x = 1;
		return $x++;
	}

	echo "El número devuelto es " . increment() . "<br>";
?>