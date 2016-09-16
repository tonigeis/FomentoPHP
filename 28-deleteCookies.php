<!DOCTYPE html>
<?php
// set the expiration date to one hour ago
setcookie("user", "", time() - 3600, "/");
?>
<html>
<body>

<?php
echo "Cookie 'user' is deleted.";
?>

<a href="27-cookies.php">Vuelve a la página</a>
</body>
</html>