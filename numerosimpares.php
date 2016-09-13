<!DOCTYPE html>
<html>
<body>

<?php  
$numbers = array(1, 2, 3, 4, 7, 12, 13, 17, 18, 19); 

foreach ($numbers as $num) {
	if ($num % 2 == 1) {
		echo "$num <br>";
	}
}
?>  

</body>
</html>