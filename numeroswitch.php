<!DOCTYPE html>
<html>
<body>

<?php
$day = date('N');

switch ($day) {
    case (1):
        echo $day . "<br>";
        echo "Lunes";
        break;
    case (2):
        echo $day . "<br>";
        echo "Martes";
        break;
    case (3):
        echo $day . "<br>";
        echo "Miércoles";
        break;
    case (4):
        echo $day . "<br>";
        echo "Jueves";
        break;
    case (5):
        echo $day . "<br>";
        echo "Viernes";
        break;
    case (6):
        echo $day . "<br>";
        echo "Sábado";
        break;
    case (7):
        echo $day . "<br>";
        echo "Domingo";
        break;
}
?>
 
</body>
</html>