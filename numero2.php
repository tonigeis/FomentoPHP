<!DOCTYPE html>
<html>
<body>

<?php
$numero = -2;
if ($numero > 0): ?> 
	El numero es positivo
<?php elseif ($numero < 0): ?>
	El numero es negativo
<?php else: ?>
	El numero es 0
<?php endif; ?>
	Esto sale siempre
</body>
</html>