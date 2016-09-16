<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<?php
$fsize = filesize("newFile.txt");
?>

<?php if ($fsize < 1000): 
	$myfile = fopen("newFile.txt", "a") or die("Unable to open file!");
	$txt = "Mickey Mouse\r\n";
	fwrite($myfile, $txt);
	$txt = "Minnie Mouse\r\n";
	fwrite($myfile, $txt);
	fclose($myfile);
?>
<p>Este fichero pesa ahora <?= $fsize ?></p>

<?php else: ?>
<p>Ya has sobrepasado los 1000 bytes y no puedes escribir más.</p>

<?php endif; ?>

</body>
</html>