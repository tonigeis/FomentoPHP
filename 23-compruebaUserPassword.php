<!DOCTYPE html>
<html>
<head>
	<title>Suma Números GET</title>
</head>
<body>

<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") { 
	$userPassFile = file_get_contents("userPassword.txt");
	$arrUserPass = explode(':', $userPassFile);
}
?>

<?php if (($arrUserPass[0] == $_GET['user']) && ($arrUserPass[1] == $_GET['password'])): ?>
	<?= $userPassFile ?><br>
	User y password correctos
<?php else: ?>
	User o password incorrectos
<?php endif; ?>

</body>
</html>