<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "John Doe";
$cookieCounter = "contador";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
//setcookie($cookieCounter, $_COOKIE[$cookieCounter] + 1, time() + (86400 * 30), "/");

if (!isset($_COOKIE[$cookieCounter])) {
	setcookie($cookieCounter, 1, time() + (86400 * 30), "/");
	echo "Se ha creado la cookie contador con valor 1";
} else {
	setcookie($cookieCounter, $_COOKIE[$cookieCounter] + 1, time() + (86400 * 30), "/");
	echo "Has visitado la página " . $_COOKIE[$cookieCounter] . " veces" . "<br>";
}
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name] . "<br>";
}
?>

<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>
<a href="28-deleteCookies.php">Delete Cookies</a>
</body>
</html>